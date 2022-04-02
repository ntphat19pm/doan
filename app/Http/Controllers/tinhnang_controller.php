<?php

namespace App\Http\Controllers;

use App\Models\tinhnang;
use App\Models\sanpham;
use Toastr;
use Illuminate\Http\Request;
use App\Imports\tinhnang_import;
use App\Exports\tinhnang_export;
use File;
use Excel;

class tinhnang_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=tinhnang::all();
        
        return view('admin.tinhnang.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sanpham=sanpham::all();
        return view('admin.tinhnang.create',compact('sanpham'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new tinhnang;
        $data->tentinhnang=$request->tentinhnang;
        $data->sanpham_id=$request->sanpham_id;
        $data->chitiet=$request->chitiet;
        if($data->save()){
            $data=tinhnang::all();
            Toastr::success('Thêm đặc điểm thành công','Thêm đặc điểm');
            return redirect('admin/tinhnang');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tinhnang  $tinhnang
     * @return \Illuminate\Http\Response
     */
    public function show(tinhnang $tinhnang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tinhnang  $tinhnang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sanpham=sanpham::all();
        $data=tinhnang::find($id);
        return view('admin.tinhnang.edit',compact('data','sanpham'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tinhnang  $tinhnang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=tinhnang::find($id);
        $data->tentinhnang=$request->tentinhnang;
        $data->sanpham_id=$request->sanpham_id;
        $data->chitiet=$request->chitiet;
        if($data->save()) {
            Toastr::success('Cập nhật tính năng thành công','Cập nhật tính năng');
            return redirect('admin/tinhnang');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tinhnang  $tinhnang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=tinhnang::find($id)->delete();
        if($data){
            Toastr::success('Xóa tính năng thành công','Xóa tính năng');
            return redirect('admin/tinhnang');
        }
    }

    public function postNhap(Request $request)
    {
        Excel::import(new tinhnang_import, $request->file('file_excel'));
        return redirect('admin/tinhnang');
    }
    
    // Xuất ra Excel
    public function getXuat()
    {
        return Excel::download(new tinhnang_export, 'danh-sach-tinh-nang.xlsx');
    }
}
