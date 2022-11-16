<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDanhMucRequest;
use App\Http\Requests\UpdateDanhMucRequest;
use App\Models\DanhMuc;
use Illuminate\Support\Facades\Redirect;

class DanhMucController extends Controller
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
    public function index($id = 0)
    {
        $danhMuc = DanhMuc::find($id);
        $dsDanhMuc = DanhMuc::all();

        return view('admin.DanhMuc.CRUD-danh-muc', ['dsDanhMuc' => $dsDanhMuc, 'danhMuc' => $danhMuc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDanhMucRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDanhMucRequest $request)
    {
        $rule = [
            'ten_danh_muc' => 'required|max:255',
        ];
        $message = [
            'required' => ':attribute không được để trống',
            'max' => ':attribute phải nhỏ hơn :max ký tự',
        ];
        $attribute = [
            'ten_danh_muc' => 'Tên danh mục',
        ];
        $request->validate($rule, $message,$attribute);
        $DanhMuc = new DanhMuc;
        $DanhMuc->fill([
            'ten_danh_muc' => $request->input('ten_danh_muc'),
        ]);
        $DanhMuc->save();
        return Redirect::route('DanhMuc.dsDanhMuc')->with('success', 'Thêm danh mục thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DanhMuc  $danhMuc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DanhMuc  $danhMuc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $danhMuc = DanhMuc::find($id);
        $dsDanhMuc = DanhMuc::all();

        return view('admin.DanhMuc.CRUD-danh-muc', ['dsDanhMuc' => $dsDanhMuc, 'danhMuc' => $danhMuc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDanhMucRequest  $request
     * @param  \App\Models\DanhMuc  $danhMuc
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDanhMucRequest $request, $id)
    {

        $rule = [
            'ten_danh_muc' => 'required|max:255',
        ];
        $message = [
            'required' => ':attribute không được để trống',
            'max' => ':attribute phải nhỏ hơn :max ký tự',
        ];
        $attribute = [
            'ten_danh_muc' => 'Tên danh mục',
        ];
        $request->validate($rule, $message,$attribute);
        $DanhMuc = DanhMuc::find($id);
        $DanhMuc->fill([
            'ten_danh_muc' => $request->input('ten_danh_muc'),
        ]);
        $DanhMuc->save();
        return Redirect::route('DanhMuc.dsDanhMuc')->with('success', 'Sửa danh mục thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DanhMuc  $danhMuc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DanhMuc = DanhMuc::find($id);
        $DanhMuc->delete();
        return Redirect::route('DanhMuc.dsDanhMuc')->with('success', 'Xóa thành công');

    }
}
