<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTinTucRequest;
use App\Http\Requests\UpdateTinTucRequest;
use App\Models\HinhAnhTinTuc;
use App\Models\LoaiTinTuc;
use App\Models\NguoiDung;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class TinTucController extends Controller
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
    protected function fixImage(HinhAnhTinTuc $hinhAnhTinTuc)
    {
        if (Storage::disk('public')->exists($hinhAnhTinTuc->ten_hinh_anh)) {
            $hinhAnhTinTuc->ten_hinh_anh = Storage::url($hinhAnhTinTuc->ten_hinh_anh);
        } else {
            $hinhAnhTinTuc->ten_hinh_anh = '/img/no_img.png';
        }
    }
    public function index()
    {
        //dòng author bỏ
        //$this->authorize('user');
        $dsTinTuc = TinTuc::join('nguoi_dungs', 'nguoi_dungs.id', '=', 'tin_tucs.nguoi_dung_id')
            ->join('loai_tin_tucs', 'tin_tucs.loai_tin_tuc_id', '=', 'loai_tin_tucs.id')
            ->select('tin_tucs.id', 'nguoi_dungs.ho_ten', 'loai_tin_tucs.ten_tin_tuc', 'tieu_de', 'tin_tucs.noi_dung', 'thoi_gian')
            ->orderby('tin_tucs.thoi_gian')->paginate(15);
        $dsHinh = HinhAnhTinTuc::all();
        foreach ($dsHinh as $hinh) {
            $this->fixImage($hinh);
        }
        $NguoiDung = NguoiDung::all();
        $lsLoai = LoaiTinTuc::all();
        return view('TinTuc.danh-sach-tin-tuc', ['dsTinTuc' => $dsTinTuc, 'NguoiDung' => $NguoiDung, 'lsLoai' => $lsLoai, 'dsHinh' => $dsHinh]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $NguoiDung = NguoiDung::all();
        $lsLoai = LoaiTinTuc::all();
        return view('TinTuc.them-tin-tuc', ['NguoiDung' => $NguoiDung, 'lsLoai' => $lsLoai]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTinTucRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTinTucRequest $request)
    {
        $rule = [
            'tieu_de' => 'required|min:5|max:255',
            'noi_dung' => 'required|min:5',
        ];
        $message = [
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min ký tự',
            'max' => ':attribute phải nhỏ hơn :max ký tự',
        ];
        $attribute = [
            'tieu_de' => 'Tiêu đề',
            'noi_dung' => 'Nội dung',
        ];
        $request->validate($rule, $message, $attribute);
        $TinTuc = new TinTuc();
        $TinTuc->fill([
            'nguoi_dung_id' => Auth::user()->id,
            'loai_tin_tuc_id' => $request->input('loai_tin_tuc_id'),
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'thoi_gian' => $request->input('thoi_gian'),
        ]);
        $TinTuc->save();
        //Đúng
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = time() . '.' . $file->getClientOriginalName();
                $request['tin_tuc_id'] = $TinTuc->id;
                $request['ten_hinh_anh'] = $imageName;
                $request['trang_thai'] = 1;
                $file->move('uploads/image_tintuc/', $imageName);
                HinhAnhTinTuc::create($request->all());
            }
        }
        return Redirect::route('TinTuc.dsTinTuc', ['id' => $TinTuc->id]);

        /*  $tinTuc = TinTuc::create([
    'nguoi_dung_id'=> $request->nguoi_dung_id,
    'tieu_de'=> $request->tieu_de,
    'noi_dung'=>$request->noi_dung,
    ]);
    if(!empty($tinTuc))
    {
    #Quay về trang ds tin tức
    return redirect()->route('TinTuc.danh-sach');
    }
    # Thêm không thành công
    return "Lỗi: Thêm tin tức không thành công"; */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $TinTuc = TinTuc::find($id);
        $dsHinh = HinhAnhTinTuc::where('tin_tuc_id', '=', $id)->get();
        foreach ($dsHinh as $hinh) {
            $this->fixImage($hinh);
        }
        $NguoiDung = NguoiDung::all();
        $lsLoai = LoaiTinTuc::all();
        return view('TinTuc.chi-tiet-tin-tuc', ['TinTuc' => $TinTuc, 'NguoiDung' => $NguoiDung, 'lsLoai' => $lsLoai, 'dsHinh' => $dsHinh]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    //public function edit(TinTuc $tinTuc)
    public function edit($id)
    {
        $TinTuc = TinTuc::find($id);
        $NguoiDung = NguoiDung::all();
        //$LoaiTinTuc = LoaiTinTuc::all();
        $lsLoai = LoaiTinTuc::all();
        $dsHinh = HinhAnhTinTuc::where('tin_tuc_id', '=', $id)->get();
        foreach ($dsHinh as $hinh) {
            $this->fixImage($hinh);
        }
        return view('TinTuc.sua-tin-tuc', ['lsLoai' => $lsLoai, 'TinTuc' => $TinTuc, 'NguoiDung' => $NguoiDung, /* 'LoaiTinTuc' => $LoaiTinTuc, */'dsHinh' => $dsHinh]);

        /*  $tinTuc = TinTuc::find($id);
    if (empty($tinTuc)) {
    return "Không tìm thấy tin tức với ID = '{id}'";
    }
    return view('TinTuc.cap-nhat', compact('tinTuc')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTinTucRequest  $request
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    //public function update(UpdateTinTucRequest $request, TinTuc $tinTuc)
    public function update(UpdateTinTucRequest $request, $id)
    {
        $rule = [
            'tieu_de' => 'required|min:5|max:255',
            'noi_dung' => 'required|min:5',
        ];
        $message = [
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải lớn hơn :min ký tự',
            'max' => ':attribute phải nhỏ hơn :max ký tự',
        ];
        $attribute = [
            'tieu_de' => 'Tiêu đề',
            'noi_dung' => 'Nội dung',
        ];
        $request->validate($rule, $message, $attribute);
        $TinTuc = TinTuc::find($id);
        $TinTuc->fill([
            'id' => $request->input('id'),
            'loai_tin_tuc_id' => $request->input('loai_tin_tuc_id'),
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            //'trang_thai' => 1,
        ]);
        $TinTuc->save();
        $dsHinh = HinhAnhTinTuc::where('tin_tuc_id', '=', $id)->get();
        foreach ($dsHinh as $hinh) {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileType = $file->getClientOriginalExtension('image');
                if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                    $AvatarName = 'tintuc-' . time() . '.' . $fileType;
                    $file->move('uploads/image_tintuc/', $AvatarName);
                    $urlAvatar = 'uploads/image_tintuc/' . $AvatarName;
                } else {
                    return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
                }
            }
        }
        if ($request->hasFile('image')) {
            for ($i = 0; $i < count($request->file('image')); $i++) {
                $hinh = new HinhAnhTinTuc();
                $hinh->tin_tuc_id = $TinTuc->id;
                $file = $request->file('image');
                $fileType = $file->getClientOriginalExtension('image');
                if ($fileType == "jpg" || $fileType == 'png' || $fileType == 'jpeg') {
                    $AvatarName = 'tintuc-' . time() . '.' . $fileType;
                    $file->move('uploads/image_tintuc/', $AvatarName);
                    $urlAvatar = 'uploads/image_tintuc/' . $AvatarName;
                } else {
                    return back()->with("error", "Phải là file ảnh (jpg , png ,jpeg)");
                }
                $hinh->trang_thai = 1;
                $hinh->save();
            }
        }

        return Redirect::route('TinTuc.dsTinTuc', ['id' => $TinTuc->id])->with('success', 'Sửa thành công');

        /*  $tinTuc = TinTuc::find($id);
    if (empty($tinTuc)) {
    return "Không tìm thấy tin tức với ID = '{id}'";
    }
    #Cập nhật
    $tinTuc->nguoi_dung_id = $request->nguoi_dung_id;
    $tinTuc->tieu_de = $request->tieu_de;
    $tinTuc->noi_Dung = $request->noi_dung;
    $tinTuc->save();

    return redirect()->route('TinTuc.danh-sach'); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TinTuc  $tinTuc
     * @return \Illuminate\Http\Response
     */
    //public function destroy(TinTuc $tinTuc)
    public function destroy($id)
    {
        $TinTuc = TinTuc::find($id);
        if (empty($TinTuc)) {
            return "Không tìm thấy tin tức với ID = '{id}'";
        }
        $TinTuc->delete();
        return Redirect::route('TinTuc.dsTinTuc')->with('success', 'Xóa thành công');
    }
}
