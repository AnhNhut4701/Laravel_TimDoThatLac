<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBaiVietRequest;
use App\Http\Requests\UpdateBaiVietRequest;
use App\Models\BaiViet;
use App\Models\DanhMuc;
use App\Models\HinhAnhBaiViet;
use App\Models\LoaiBaiViet;
use App\Models\NguoiDung;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $dsBaiViet = BaiViet::join('nguoi_dungs', 'nguoi_dungs.id', '=', 'bai_viets.nguoi_dung_id')
            ->join('loai_bai_viets', 'bai_viets.loai_bai_viet_id', '=', 'loai_bai_viets.id')
            ->join('danh_mucs', 'bai_viets.danh_muc_id', '=', 'danh_mucs.id')
            ->select('bai_viets.id', 'nguoi_dungs.ho_ten', 'loai_bai_viets.ten_bai_viet', 'danh_mucs.ten_danh_muc', 'tieu_de', 'bai_viets.noi_dung', 'danh_muc_id', 'khu_vuc', 'bai_viets.trang_thai', 'bai_viets.created_at', 'bai_viets.updated_at')
            ->orderby('bai_viets.created_at', 'desc')
            ->orderby('bai_viets.updated_at', 'desc')
            ->where('bai_viets.trang_thai', '=', 1)
            ->paginate(15);
        $dsHinh = HinhAnhBaiViet::all();
        foreach ($dsHinh as $hinh) {
            $this->fixImage($hinh);
        }
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();

        return view('admin.baiviet.index', ['dsBaiViet' => $dsBaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);
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
        return view('admin.baiviet.create', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);
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
            'required' => ':attribute kh??ng ???????c ????? tr???ng',
            'min' => ':attribute ph???i l???n h??n :min k?? t???',
            'max' => ':attribute ph???i nh??? h??n :max k?? t???',
        ];
        $attribute = [
            'tieu_de' => 'Ti??u ?????',
            'noi_dung' => 'N???i dung',
            'khu_vuc' => 'Khu v???c',
        ];
        $request->validate($rule, $message, $attribute);

        $BaiViet = new BaiViet();
        $BaiViet->fill([
            'nguoi_dung_id' => Auth::user()->id,
            'loai_bai_viet_id' => $request->input('loai_bai_viet_id'),
            'danh_muc_id' => $request->input('danh_muc_id'),
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'khu_vuc' => $request->input('khu_vuc'),
            'trang_thai' => 0,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),

        ]);

        $BaiViet->save();

        //????ng
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = 'uploads/image_baiviet/' . time() . '.' . $file->getClientOriginalName();
                $request['bai_viet_id'] = $BaiViet->id;
                $request['ten_hinh_anh'] = $imageName;
                $request['trang_thai'] = 1;
                $file->move('uploads/image_baiviet/', $imageName);
                HinhAnhBaiViet::create($request->all());
            }
        }
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
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();
        return view('admin.baiviet.details', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);

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
        return view('admin.baiviet.edit', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);

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
        //????ng
        $BaiViet = BaiViet::find($id);
        $BaiViet->fill([
            'id' => $request->input('id'),
            'loai_bai_viet_id' => $request->input('loai_bai_viet_id'),
            'danh_muc_id' => $request->input('danh_muc_id'),
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'khu_vuc' => $request->input('khu_vuc'),
            'trang_thai' => 1,
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        $BaiViet->save();

        $dsHinh = HinhAnhBaiViet::where('bai_viet_id', '=', $id)->get();


        foreach ($dsHinh as $hinh) {
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                foreach ($files as $file) {
                    $imageName = 'uploads/image_baiviet/' . time() . '.' . $file->getClientOriginalName();
                    $request['bai_viet_id'] = $BaiViet->id;
                    $request['ten_hinh_anh'] = $imageName;
                    $request['trang_thai'] = 1;
                    $file->move('uploads/image_baiviet/', $imageName);
                    HinhAnhBaiViet::create($request->all());
                }
            }

        }
        if ($request->hasFile('image')) {
            for ($i = 0; $i < count($request->file('image')); $i++) {
                $files = $request->file('image');
                foreach ($files as $file) {
                    $imageName = 'uploads/image_baiviet/' . time() . '.' . $file->getClientOriginalName();
                    $request['bai_viet_id'] = $BaiViet->id;
                    $request['ten_hinh_anh'] = $imageName;
                    $request['trang_thai'] = 1;
                    $file->move('uploads/image_baiviet/', $imageName);
                    HinhAnhBaiViet::create($request->all());
                }
            }
        }
        return Redirect::route('BaiViet.dsBaiViet', ['id' => $BaiViet->id]);

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
            return "Kh??ng t??m th???y b??i vi???t v???i ID = '{id}'";
        }
        $BaiViet->delete();
        return Redirect::route('BaiViet.dsBaiViet');
    }
    public function themBaiViet()
    {

        $BaiViet = BaiViet::all();
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $dsHinh = HinhAnhBaiViet::all();
        $DanhMuc = DanhMuc::all();
        return view('trang-chu.dang-bai', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);
    }

    public function xuLythemBaiViet(StoreBaiVietRequest $request)
    {
        $rule = [
            'tieu_de' => 'required|min:5|max:255',
            'noi_dung' => 'required|min:5',
            'khu_vuc' => 'required|min:5|max:100',
        ];
        $message = [
            'required' => ':attribute kh??ng ???????c ????? tr???ng',
            'min' => ':attribute ph???i l???n h??n :min k?? t???',
            'max' => ':attribute ph???i nh??? h??n :max k?? t???',
        ];
        $attribute = [
            'tieu_de' => 'Ti??u ?????',
            'noi_dung' => 'N???i dung',
            'khu_vuc' => 'Khu v???c',
        ];
        $request->validate($rule, $message, $attribute);

        $BaiViet = new BaiViet();
        $BaiViet->fill([
            'nguoi_dung_id' => Auth::user()->id,
            'loai_bai_viet_id' => $request->input('loai_bai_viet_id'),
            'danh_muc_id' => $request->input('danh_muc_id'),
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'khu_vuc' => $request->input('khu_vuc'),
            'trang_thai' => 0,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),

        ]);

        $BaiViet->save();

        //????ng
        if ($request->hasFile('image')) {
            $files = $request->file('image');
            foreach ($files as $file) {
                $imageName = 'uploads/image_baiviet/' . time() . '.' . $file->getClientOriginalName();
                $request['bai_viet_id'] = $BaiViet->id;
                $request['ten_hinh_anh'] = $imageName;
                $request['trang_thai'] = 1;
                $file->move('uploads/image_baiviet/', $imageName);
                HinhAnhBaiViet::create($request->all());
            }
        }
        return Redirect::route('NguoiDung.trangnguoidung', ['id' => $BaiViet->id]);
    }
    public function suaBaiViet($id)
    {
        $BaiViet = BaiViet::find($id);
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();
        $dsHinh = HinhAnhBaiViet::where('bai_viet_id', '=', $id)->get();
        return view('trang-chu.dang-bai', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);

    }
    public function xuLySuaBaiViet(Request $request, $id)
    {
        //????ng
        $BaiViet = BaiViet::find($id);
        $BaiViet->fill([
            'id' => $request->input('id'),
            'loai_bai_viet_id' => $request->input('loai_bai_viet_id'),
            'danh_muc_id' => $request->input('danh_muc_id'),
            'tieu_de' => $request->input('tieu_de'),
            'noi_dung' => $request->input('noi_dung'),
            'khu_vuc' => $request->input('khu_vuc'),
            'trang_thai' => 1,
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        $BaiViet->save();

        $dsHinh = HinhAnhBaiViet::where('bai_viet_id', '=', $id)->get();


        foreach ($dsHinh as $hinh) {
            if ($request->hasFile('image')) {
                $files = $request->file('image');
                foreach ($files as $file) {
                    $imageName = 'uploads/image_baiviet/' . time() . '.' . $file->getClientOriginalName();
                    $request['bai_viet_id'] = $BaiViet->id;
                    $request['ten_hinh_anh'] = $imageName;
                    $request['trang_thai'] = 1;
                    $file->move('uploads/image_baiviet/', $imageName);
                    HinhAnhBaiViet::create($request->all());
                }
            }

        }
        if ($request->hasFile('image')) {
            for ($i = 0; $i < count($request->file('image')); $i++) {
                $files = $request->file('image');
                foreach ($files as $file) {
                    $imageName = 'uploads/image_baiviet/' . time() . '.' . $file->getClientOriginalName();
                    $request['bai_viet_id'] = $BaiViet->id;
                    $request['ten_hinh_anh'] = $imageName;
                    $request['trang_thai'] = 1;
                    $file->move('uploads/image_baiviet/', $imageName);
                    HinhAnhBaiViet::create($request->all());
                }
            }
        }
        return Redirect::route('trang-chu.dang-bai', ['id' => $BaiViet->id]);

    }

    public function dsBaiVietChoDuyet()
    {
        $dsBaiViet = BaiViet::join('nguoi_dungs', 'nguoi_dungs.id', '=', 'bai_viets.nguoi_dung_id')
            ->join('loai_bai_viets', 'bai_viets.loai_bai_viet_id', '=', 'loai_bai_viets.id')
            ->join('danh_mucs', 'bai_viets.danh_muc_id', '=', 'danh_mucs.id')
            ->select('bai_viets.id', 'nguoi_dungs.ho_ten', 'loai_bai_viets.ten_bai_viet', 'danh_mucs.ten_danh_muc', 'tieu_de', 'bai_viets.noi_dung', 'danh_muc_id', 'khu_vuc', 'bai_viets.trang_thai', 'bai_viets.created_at', 'bai_viets.updated_at')
            ->orderby('bai_viets.created_at', 'desc')
            ->orderby('bai_viets.updated_at', 'desc')
            ->where('bai_viets.trang_thai', '=', 0)
            ->paginate(15);

        $dsHinh = HinhAnhBaiViet::all();
        foreach ($dsHinh as $hinh) {
            $this->fixImage($hinh);
        }
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();

        return view('admin.duyetbaiviet.index', ['dsBaiViet' => $dsBaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);
    }
    public function dsBaiVietTuChoiDuyet()
    {
        $dsBaiViet = BaiViet::join('nguoi_dungs', 'nguoi_dungs.id', '=', 'bai_viets.nguoi_dung_id')
            ->join('loai_bai_viets', 'bai_viets.loai_bai_viet_id', '=', 'loai_bai_viets.id')
            ->join('danh_mucs', 'bai_viets.danh_muc_id', '=', 'danh_mucs.id')
            ->select('bai_viets.id', 'nguoi_dungs.ho_ten', 'loai_bai_viets.ten_bai_viet', 'danh_mucs.ten_danh_muc', 'tieu_de', 'bai_viets.noi_dung', 'danh_muc_id', 'khu_vuc', 'bai_viets.trang_thai', 'bai_viets.created_at', 'bai_viets.updated_at')
            ->orderby('bai_viets.created_at', 'desc')
            ->orderby('bai_viets.updated_at', 'desc')
            ->where('bai_viets.trang_thai', '=', 2)
            ->paginate(15);

        $dsHinh = HinhAnhBaiViet::all();
        foreach ($dsHinh as $hinh) {
            $this->fixImage($hinh);
        }
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();

        return view('admin.tuchoiduyet.index', ['dsBaiViet' => $dsBaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);
    }
    public function duyetBaiViet(Request $request,$id)
    {
        $BaiViet = BaiViet::find($id);
        $BaiViet->fill([

            'trang_thai' => 1,
            'created_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        $BaiViet->save();
        return Redirect::route('BaiViet.dsBaiViet', ['id' => $BaiViet->id]);
    }
    public function tuChoiDuyetBaiViet(Request $request,$id)
    {
        $BaiViet = BaiViet::find($id);
        $BaiViet->fill([
            'trang_thai' => 2,
            'updated_at' => Carbon::now('Asia/Ho_Chi_Minh'),
        ]);
        $BaiViet->save();
        return Redirect::route('TuChoiDuyet.dsBaiVietTuChoiDuyet', ['id' => $BaiViet->id]);
    }
    public function chiTietDuyetBaiViet($id)
    {
        $BaiViet = BaiViet::find($id);
        $dsHinh = HinhAnhBaiViet::where('bai_viet_id', '=', $id)->get();
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();
        return view('admin.duyetbaiviet.details', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);

    }
    public function chiTietTuChoiDuyet($id)
    {
        $BaiViet = BaiViet::find($id);
        $dsHinh = HinhAnhBaiViet::where('bai_viet_id', '=', $id)->get();
        $NguoiDung = NguoiDung::all();
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();
        return view('admin.tuchoiduyet.details', ['BaiViet' => $BaiViet, 'NguoiDung' => $NguoiDung, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc, 'dsHinh' => $dsHinh]);

    }
    public function xoaBaiVietTuChoiDuyet($id)
    {
        $BaiViet = BaiViet::find($id);
        if (empty($BaiViet)) {
            return "Kh??ng t??m th???y b??i vi???t v???i ID = '{id}'";
        }
        $BaiViet->delete();
        return Redirect::route('TuChoiDuyet.dsBaiVietTuChoiDuyet');
    }
    public function search()
    {
        $baiviet = request()->loai_bai_viet_id;
        $danhmuc = request()->ten_danh_muc;

        if ($baiviet == 0 && $danhmuc == 0) {
            $BaiViet = BaiViet::join('bai_viets')->join('nguoi_dungs', 'nguoi_dungs.id', '=', 'bai_viets.nguoi_dung_id')
                ->join('loai_bai_viets', 'bai_viets.loai_bai_viet_id', '=', 'loai_bai_viets.id')
                ->join('danh_mucs', 'bai_viets.danh_muc_id', '=', 'danh_mucs.id')
                ->select('bai_viets.id', 'nguoi_dungs.ho_ten', 'loai_bai_viets.ten_bai_viet', 'danh_mucs.ten_danh_muc', 'tieu_de', 'bai_viets.noi_dung', 'danh_muc_id', 'khu_vuc', 'bai_viets.trang_thai', 'bai_viets.created_at', 'bai_viets.updated_at')
                ->orderby('bai_viets.created_at', 'desc')
                ->orderby('bai_viets.updated_at', 'desc')
                ->paginate(15);
        } else {
            $BaiViet = BaiViet::join('bai_viets')->join('nguoi_dungs', 'nguoi_dungs.id', '=', 'bai_viets.nguoi_dung_id')
                ->join('loai_bai_viets', 'bai_viets.loai_bai_viet_id', '=', 'loai_bai_viets.id')
                ->join('danh_mucs', 'bai_viets.danh_muc_id', '=', 'danh_mucs.id')
                ->select('bai_viets.id', 'nguoi_dungs.ho_ten', 'loai_bai_viets.ten_bai_viet', 'danh_mucs.ten_danh_muc', 'tieu_de', 'bai_viets.noi_dung', 'danh_muc_id', 'khu_vuc', 'bai_viets.trang_thai', 'bai_viets.created_at', 'bai_viets.updated_at')
                ->orderby('bai_viets.created_at', 'desc')
                ->orderby('bai_viets.updated_at', 'desc')
                ->where('loai_bai_viet_id', '=', $baiviet)
                ->where('danh_muc_id', '=', $danhmuc)
                ->paginate(15);
        }
        $LoaiBaiViet = LoaiBaiViet::all();
        $DanhMuc = DanhMuc::all();
        return View('admin.baiviet.index', ['dsBaiViet' => $BaiViet, 'LoaiBaiViet' => $LoaiBaiViet, 'DanhMuc' => $DanhMuc]);
    }
}
