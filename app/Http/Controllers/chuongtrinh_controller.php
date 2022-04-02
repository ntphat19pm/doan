<?php

namespace App\Http\Controllers;

use App\Models\chuongtrinh;
use App\Models\thang;
use App\Models\nhanvien;
use App\Imports\chuongtrinh_import;
use Illuminate\Http\Request;
use Toastr;
use Excel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class chuongtrinh_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=chuongtrinh::all();
        $thang=thang::all();  
        return view('admin.chuongtrinh.index',compact('data','thang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->chucvu_id==1)
        {
            $thang=thang::all();
            return view('admin.chuongtrinh.create',compact('thang'));
        }
        else
        {   
            $data=chuongtrinh::all();
            $thang=thang::all();  
            
            Toastr::warning('Bạn không có quyền thêm chương trình','Hạn chế truy cập');
            return view('admin.chuongtrinh.index',compact('data','thang'));
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new chuongtrinh;
        $data->thang_id=$request->thang_id;
        $data->ten_chuongtrinh=$request->ten_chuongtrinh;
        $data->kehoach=$request->kehoach;
        $data->tytrong=$request->tytrong;
        $data->thuchien=0;
        if($data->save()){
            $data=chuongtrinh::all();
            Toastr::success('Thêm chương trình thành công','Thêm chương trình');
            return redirect('admin/chuongtrinh');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chuongtrinh  $chuongtrinh
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $thang=thang::all();
        $data=chuongtrinh::find($id);
        return view('admin.chuongtrinh.show',compact('data','thang'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chuongtrinh  $chuongtrinh
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thang=thang::all();
        $data=chuongtrinh::find($id);
        return view('admin.chuongtrinh.edit',compact('data','thang'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chuongtrinh  $chuongtrinh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=chuongtrinh::find($id);
        $data->thang_id=$request->thang_id;
        $data->ten_chuongtrinh=$request->ten_chuongtrinh;
        $data->kehoach=$request->kehoach;
        $data->tytrong=$request->tytrong;
        $data->thuchien=$request->thuchien;
        
       if($data->save()) {
            Toastr::success('Cập nhật chương trình thành công','Cập nhật chương trình');
           return redirect('admin/chuongtrinh');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chuongtrinh  $chuongtrinh
     * @return \Illuminate\Http\Response
     */
    public function destroy(chuongtrinh $chuongtrinh)
    {
        //
    }
    public function postNhap(Request $request)
    {
        Excel::import(new chuongtrinh_import, $request->file('file_excel'));
        return redirect('admin/chuongtrinh');
    }
}
