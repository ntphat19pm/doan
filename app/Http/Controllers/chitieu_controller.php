<?php

namespace App\Http\Controllers;

use App\Models\chitieu;
use App\Models\thuchien_chitieu;
use App\Models\thang;
use App\Models\nhanvien;
use App\Imports\chitieu_import;
use App\Exports\chitieu_export;
use Illuminate\Http\Request;
use Toastr;
use Excel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class chitieu_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->chucvu_id==1)
        {
            $data=chitieu::all();
            $thang=thang::all(); 
            return view('admin.chitieu.index',compact('data','thang'));
        }
        else
        {
            Toastr::warning('Bạn không có quyền truy cập vào bảng chỉ tiêu','Hạn chế truy cập');
            return redirect()->route('admin.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $thang=thang::all();
        return view('admin.chitieu.create',compact('thang')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new chitieu;
        $data->thang_id=$request->thang_id;
        $data->doanhthu_dichvu=$request->doanhthu_dichvu;
        $data->tytrong_dichvu=$request->tytrong_dichvu;
        $data->doanhthu_tong=$request->doanhthu_tong;
        $data->tytrong_tong=$request->tytrong_tong;
        $data->duan=$request->duan;
        $data->tytrong_duan=$request->tytrong_duan;
        $data->giaoduc=$request->giaoduc;
        $data->tytrong_giaoduc=$request->tytrong_giaoduc;
        $data->kenhtruyen=$request->kenhtruyen;
        $data->tytrong_kenhtruyen=$request->tytrong_kenhtruyen;
        $data->yte=$request->yte;
        $data->tytrong_yte=$request->tytrong_yte;
        $data->save();

        $th=new thuchien_chitieu;
        $th->chitieu_id=$data->id;
        $th->doanhthu_dichvu=0;
        $th->doanhthu_tong=0;
        $th->duan=0;
        $th->giaoduc=0;
        $th->kenhtruyen=0;
        $th->yte=0;
        if($th->save()){
            $data=chitieu::all();
            Toastr::success('Thêm câu hỏi thành công','Thêm câu hỏi');
            return redirect('admin/chitieu');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chitieu  $chitieu
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $thang=thang::all();
        $data=chitieu::find($id);
        $thuchien=thuchien_chitieu::where('chitieu_id',$id)->orderby('chitieu_id','DESC')->first();
        return view('admin.chitieu.show',compact('data','thang','thuchien'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chitieu  $chitieu
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $thang=thang::all();
        $data=chitieu::find($id);
        return view('admin.chitieu.edit',compact('data','thang'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\chitieu  $chitieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data=chitieu::find($id);
        $data->thang_id=$request->thang_id;
        $data->doanhthu_dichvu=$request->doanhthu_dichvu;
        $data->tytrong_dichvu=$request->tytrong_dichvu;
        $data->doanhthu_tong=$request->doanhthu_tong;
        $data->tytrong_tong=$request->tytrong_tong;
        $data->duan=$request->duan;
        $data->tytrong_duan=$request->tytrong_duan;
        $data->giaoduc=$request->giaoduc;
        $data->tytrong_giaoduc=$request->tytrong_giaoduc;
        $data->kenhtruyen=$request->kenhtruyen;
        $data->tytrong_kenhtruyen=$request->tytrong_kenhtruyen;
        $data->yte=$request->yte;
        $data->tytrong_yte=$request->tytrong_yte;
        
       if($data->save()) {
            Toastr::success('Cập nhật chỉ tiêu thành công','Cập nhật chỉ tiêu');
           return redirect('admin/chitieu');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chitieu  $chitieu
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $data=chitieu::find($id)->delete();
        if($data){
            Toastr::success('Xóa chỉ tiêu thành công','Xóa chỉ tiêu');
            return redirect('admin/chitieu');
        }
    }

    public function postNhap(Request $request)
    {
        Excel::import(new chitieu_import, $request->file('file_excel'));
        return redirect('admin/chitieu');
    }
    public function getXuat()
    {
        return Excel::download(new chitieu_export, 'danh-sach-chi-tieu.xlsx');
    }
}
