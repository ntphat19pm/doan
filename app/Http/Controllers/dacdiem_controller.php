<?php

namespace App\Http\Controllers;

use App\Models\dacdiem;
use App\Models\sanpham;
use App\Imports\dacdiem_import;
use App\Exports\dacdiem_export;
use Toastr;
use File;
use Excel;

use Illuminate\Http\Request;

class dacdiem_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=dacdiem::all();
        
        return view('admin.dacdiem.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sanpham=sanpham::all();
        return view('admin.dacdiem.create',compact('sanpham'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new dacdiem;
        $data->tendacdiem=$request->tendacdiem;
        $data->sanpham_id=$request->sanpham_id;
        $data->chitiet=$request->chitiet;
        if($data->save()){
            $data=dacdiem::all();
            Toastr::success('Thêm đặc điểm thành công','Thêm đặc điểm');
            return redirect('admin/dacdiem');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dacdiem  $dacdiem
     * @return \Illuminate\Http\Response
     */
    public function show(dacdiem $dacdiem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dacdiem  $dacdiem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sanpham=sanpham::all();
        $data=dacdiem::find($id);
        return view('admin.dacdiem.edit',compact('data','sanpham'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dacdiem  $dacdiem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=dacdiem::find($id);
        $data->tendacdiem=$request->tendacdiem;
        $data->sanpham_id=$request->sanpham_id;
        $data->chitiet=$request->chitiet;
        if($data->save()) {
            Toastr::success('Cập nhật đặc điểm thành công','Cập nhật đặc điểm');
            return redirect('admin/dacdiem');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dacdiem  $dacdiem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=dacdiem::find($id)->delete();
        if($data){
            Toastr::success('Xóa đặc điểm thành công','Xóa đặc điểm');
            return redirect('admin/dacdiem');
        }
    }

    public function postNhap(Request $request)
    {
        Excel::import(new dacdiem_import, $request->file('file_excel'));
        return redirect('admin/dacdiem');
    }
    
    // Xuất ra Excel
    public function getXuat()
    {
        return Excel::download(new dacdiem_export, 'danh-sach-dac-diem.xlsx');
    }
}
