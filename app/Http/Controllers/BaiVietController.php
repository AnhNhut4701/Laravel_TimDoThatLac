<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBaiVietRequest;
use App\Http\Requests\UpdateBaiVietRequest;
use App\Models\BaiViet;
use App\Models\DanhMuc;
use App\Models\HinhAnhBaiViet;
use App\Models\LoaiBaiViet;
use App\Models\NguoiDung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class BaiVietController extends Controller
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
    protected function fixImage(HinhAnhBaiViet $hinhAnhBaiViet)
    {
        if (Storage::disk('public')->exists($hinhAnhBaiViet->ten_hinh_anh)) {
            $hinhAnhBaiViet->ten_hinh_anh = Storage::url($hinhAnhBaiViet->ten_hinh_anh);
        } else {
            $hinhAnhBaiViet->ten_hinh_anh = '/img/no_img.png';
        }
    }
    public function index()
    {
        $dsBaiViet = DB::table('bai_viets')->join('nguoi_dungs', 'nguoi_dungs.id', '=', 'bai_viets.nguoi_dung_id')
            ->join('loai_bai_viets', 'bai_viets.loai_bai_viet_id', '=', 'loai_bai_viets.id')
        //->join('hinh_anh_bai_viets', 'bai_viets.id', '=', 'hinh_anh_bai_viets.bai_viet_id')
            ->join('danh_mucs', 'bai_viets.danh_muc_id', '=', 'danh_mucs.id')
            ->select('bai_viets.id', 'nguoi_dungs.ho_ten', 'loai_bai_viets.ten_bai_viet', 'danh_mucs.ten_danh_muc', 'tieu_de', 'bai_viets.noi_dung', /* 'hinh_anh_bai_viets.ten_hinh_anh', */'danh_muc_id', 'khu_vuc', 'thoi_gian', 'bai_viets.trang_thai')
            ->orderby('bai_viets.thoi_gian')->paginate(15);
        $dsHinh = HinhAnhBaiViet::all();
        foreach ($dsHinh as $hinh) {
            $this->fixImage($hinh);
        }
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();

        return view('BaiViet.danh-sach-bai-viet', ['dsBaiViet' => $dsBaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $BaiViet = BaiViet::all();
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $dsHinh = HinhAnhBaiViet::all();
        $DanhMuc = DanhMuc::all();
        return view('BaiViet.them-bai-viet', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBaiVietRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBaiVietRequest $request)
    {
        $rule = [
            'tieu_de' => 'required|min:5|max:255',
            'noi_dung' => 'required|min:5',
            'khu_vuc' => 'required|min:5|max:100',
        ];
        $message = [
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min ký tự',
            'max' => ':attribute phải nhỏ hơn :max ký tự',
        ];
        $attribute = [
            'tieu_de' => 'Tiêu đề',
            'noi_dung' => 'Nội dung',
            'khu_vuc' => 'Khu vực',
        ];
        $request->validate($rule, $message, $attribute);

        $BaiViet = new BaiViet();
        $BaiViet->fill([
            'nguoi_dung_id' => Auth::user()->id,
            'loai_bai_viet_id' => $request->input('loai_bai_viet_id'),
            'danh_muc_id' => $request->input('danh_muc_id'),
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'thoi_gian' => $request->input('thoi_gian'),
            'khu_vuc' => $request->input('khu_vuc'),
            'trang_thai' => 0,
        ]);

        $BaiViet->save();
//Đúng
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = time() . '.' . $file->getClientOriginalName();
                $request['bai_viet_id'] = $BaiViet->id;
                $request['ten_hinh_anh'] = $imageName;
                $request['trang_thai'] = 1;
                $file->move('uploads/image_baiviets/', $imageName);
                HinhAnhBaiViet::create($request->all());
            }

        }

//Đúng như lưu sai thư mục
        /* if ($request->hasFile('image')) {
        for ($i = 0; $i < count($request->file('image')); $i++) {
        $hinh = new HinhAnhBaiViet();
        $hinh->bai_viet_id = $BaiViet->id;
        $hinh->ten_hinh_anh = $request->file('image')[$i] ->store('images/baiviet/' . $BaiViet->id,'public');
        $hinh->trang_thai = 1;
        $hinh->save();
        }
        } */

        return Redirect::route('BaiViet.dsBaiViet', ['id' => $BaiViet->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $BaiViet = BaiViet::find($id);
        $dsHinh = HinhAnhBaiViet::where('bai_viet_id', '=', $id)->get();
        foreach ($dsHinh as $hinh) {
            $this->fixImage($hinh);
        }
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();
        return view('BaiViet.chi-tiet-bai-viet', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $BaiViet = BaiViet::find($id);
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();
        $dsHinh = HinhAnhBaiViet::where('bai_viet_id', '=', $id)->get();
        foreach ($dsHinh as $hinh) {
            $this->fixImage($hinh);
        }
        return view('BaiViet.chi-tiet-bai-viet', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBaiVietRequest  $request
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $BaiViet = BaiViet::find($id);

        $dsHinh = HinhAnhBaiViet::where('bai_viet_id', '=', $id)->get();
        foreach ($dsHinh as $hinh) {
            /* if ($request->hasFile('Hinh' . $hinh->id)) {
            $hinh->ten_hinh_anh = $request->file('Hinh' . $hinh->id)->store('img/hinhanh_baiviet' . $BaiViet->id, 'public');
            $hinh->save();
            } */

            if ($request->hasFile('hinh_anh_bai_viet')) {
                $file = $request->file('hinh_anh_bai_viet');
                $fileType = $file->getClientOriginalExtension('hinh_anh_bai_viet');
                if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                    $AvatarName = 'baiviet-' . time() . '.' . $fileType;
                    $file->move('uploads/image_baiviet/', $AvatarName);
                    $urlAvatar = 'uploads/image_baiviet/' . $AvatarName;
                } else {
                    return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
                }
            }
        }

        if ($request->hasFile('hinh_anh_bai_viet')) {
            for ($i = 0; $i < count($request->file('hinh_anh_bai_viet')); $i++) {
                $hinh = new HinhAnhBaiViet();
                $hinh->bai_viet_id = $BaiViet->id;
                //$hinh->ten_hinh_anh = $request->file('hinh_anh_bai_viet')[$i]->store('img/hinhanh_baiviet' . $BaiViet->id, 'public');
                $file = $request->file('hinh_anh_bai_viet');
                $fileType = $file->getClientOriginalExtension('hinh_anh_bai_viet');
                if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                    $AvatarName = 'baiviet-' . time() . '.' . $fileType;
                    $file->move('uploads/image_baiviet/', $AvatarName);
                    $urlAvatar = 'uploads/image_baiviet/' . $AvatarName;
                } else {
                    return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
                }
                $hinh->trang_thai = 1;
                $hinh->save();
            }
        }

        $BaiViet->save();
        return Redirect::route('BaiViet.chiTietBaiViet', ['id' => $BaiViet->id])->with('success', 'Sửa thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BaiViet  $baiViet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $BaiViet = BaiViet::find($id);
        if (empty($BaiViet)) {
            return "Không tìm thấy bài viết với ID = '{id}'";
        }
        $BaiViet->delete();
        return Redirect::route('BaiViet.dsBaiViet')->with('success', 'Xóa thành công');
    }

    public function search()
    {
        $baiviet = request()->loai_bai_viet_id;
        $danhmuc = request()->ten_danh_muc;


        if ($baiviet == 0 && $danhmuc == 0) {
            $BaiViet = DB::table('bai_viets')->join('nguoi_dungs', 'nguoi_dungs.id', '=', 'bai_viets.nguoi_dung_id')
                ->join('loai_bai_viets', 'bai_viets.loai_bai_viet_id', '=', 'loai_bai_viets.id')
                ->join('danh_mucs', 'bai_viets.danh_muc_id', '=', 'danh_mucs.id')
                ->select('bai_viets.id', 'nguoi_dungs.ho_ten', 'loai_bai_viets.ten_bai_viet', 'danh_mucs.ten_danh_muc', 'tieu_de', 'bai_viets.noi_dung', 'danh_muc_id', 'khu_vuc', 'thoi_gian', 'bai_viets.trang_thai')
                ->orderby('bai_viets.thoi_gian')
                ->paginate(15);
        }
        else {
            $BaiViet = DB::table('bai_viets')->join('nguoi_dungs', 'nguoi_dungs.id', '=', 'bai_viets.nguoi_dung_id')
                ->join('loai_bai_viets', 'bai_viets.loai_bai_viet_id', '=', 'loai_bai_viets.id')
                ->join('danh_mucs', 'bai_viets.danh_muc_id', '=', 'danh_mucs.id')
                ->select('bai_viets.id', 'nguoi_dungs.ho_ten', 'loai_bai_viets.ten_bai_viet', 'danh_mucs.ten_danh_muc', 'tieu_de', 'bai_viets.noi_dung', 'danh_muc_id', 'khu_vuc', 'thoi_gian', 'bai_viets.trang_thai')
                ->orderby('bai_viets.thoi_gian')
                ->where('loai_bai_viet_id', '=', $baiviet)
                ->where('danh_muc_id', '=', $danhmuc)
                ->paginate(15);
        }
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();
        return View('BaiViet.danh-sach-bai-viet', ['dsBaiViet' => $BaiViet, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc]);
    }
}
