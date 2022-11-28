<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNguoiDungRequest;
use App\Http\Requests\UpdateNguoiDungRequest;
use App\Models\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class NguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function fixImage(NguoiDung $anhDaiDien)
    {
        if (Storage::disk('public')->exists($anhDaiDien->anh_dai_dien)) {
            $anhDaiDien->anh_dai_dien = Storage::url($anhDaiDien->anh_dai_dien);
        } else {
            $anhDaiDien->anh_dai_dien = '/img/no_img.png';
        }
    }

    public function index()
    {
        $dsNguoiDung = NguoiDung::select('id', 'tai_khoan', 'mat_khau', 'ho_ten', 'so_dien_thoai', 'email', 'anh_dai_dien', 'phan_quyen')
            ->orderby('nguoi_dungs.id')->paginate(15);
        return view('admin.nguoidung.index', ['dsNguoiDung' => $dsNguoiDung]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nguoidung.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNguoiDungRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNguoiDungRequest $request)
    {
        if ($request->hasFile('anh_dai_dien')) {
            $file = $request->file('anh_dai_dien');
            $fileType = $file->getClientOriginalExtension('anh_dai_dien');
            if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                $AvatarName = 'avatar-' . time() . '.' . $fileType;
                $file->move('uploads/avatar/', $AvatarName);
                $urlAvatar = 'uploads/avatar/' . $AvatarName;
            } else {
                return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
            }
        }
        $NguoiDung = NguoiDung::create([
            'tai_khoan' => $request->tai_khoan,
            'mat_khau' => Hash::make($request->password),
            'ho_ten' => $request->ho_ten,
            'anh_dai_dien' => ($urlAvatar),
            'phan_quyen' => 1,
            'trang_thai_ho_ten' => 1,
            'trang_thai_email' => 1,
            'trang_thai_so_dien_thoai' => 1,
            'trang_thai_nguoi_dung' => 1,
        ]);
        return Redirect::route('NguoiDung.dsNguoiDung', ['id' => $NguoiDung->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NguoiDung  $nguoiDung
     * @return \Illuminate\Http\Response
     */
    public function show(NguoiDung $nguoiDung)
    {
        return view('admin.nguoidung.index');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NguoiDung  $nguoiDung
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $NguoiDung = NguoiDung::find($id);
        $dsNguoiDung = NguoiDung::all();

        return view('admin.nguoidung.edit', ['id' => $NguoiDung->id], ['NguoiDung' => $NguoiDung, 'dsNguoiDung' => $dsNguoiDung]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNguoiDungRequest  $request
     * @param  \App\Models\NguoiDung  $nguoiDung
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNguoiDungRequest $request, $id)
    {
        $NguoiDung = NguoiDung::find($id);
        $NguoiDung->fill([
            'tai_khoan' => $request->input('tai_khoan'),
            'mat_khau' => $request->input('mat_khau'),
            'ho_ten' => $request->input('ho_ten'),
            'so_dien_thoai' => $request->input('so_dien_thoai'),
            'email' => $request->input('email'),
            'anh_dai_dien' => $request->input('anh_dai_dien'),
            'phan_quyen' => $request->input('phan_quyen'),
        ]);
        $NguoiDung->save();
        if ($request->hasFile('anh_dai_dien')) {
            $NguoiDung->anh_dai_dien = $request->file('anh_dai_dien')->store('/img/hinhanh_nguoidung/' . $NguoiDung->id);
        }
        /*   if ($request->hasFile('anh_dai_dien')) {
        $file = $request->file('anh_dai_dien');
        $fileType = $file->getClientOriginalExtension('anh_dai_dien');
        if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
        $AvatarName = 'avatar-' . time() . '.' . $fileType;
        $file->move('uploads/avatar/', $AvatarName);
        $urlAvatar = 'uploads/avatar/' . $AvatarName;
        } else {
        return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
        }
        } */

        return Redirect::route('NguoiDung.dsNguoiDung', ['id' => $NguoiDung->id])->with('success', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NguoiDung  $nguoiDung
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $NguoiDung = NguoiDung::find($id);
        $NguoiDung->delete();
        return Redirect::route('NguoiDung.dsNguoiDung', ['id' => $NguoiDung->id])->with('success', 'Xóa thành công');

    }
    public function search()
    {
        $tentaikhoan = request()->tai_khoan;
        $email = request()->email;
        $dsNguoiDung = NguoiDung::Where('tai_khoan', 'like', '%' . $tentaikhoan . '%')->Where('email', 'like', '%' . $email . '%')->paginate(10);

        return View('admin.nguoidung.index', ['dsNguoiDung' => $dsNguoiDung]);
    }
}
