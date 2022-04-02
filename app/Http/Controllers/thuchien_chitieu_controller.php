<?php

namespace App\Http\Controllers;

use App\Models\thuchien_chitieu;
use App\Models\thang;
use App\Models\chitieu;
use Illuminate\Http\Request;
use Toastr;


class thuchien_chitieu_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=thuchien_chitieu::orderby('id','DESC')->get(); 
        $thang=thang::all(); 
        return view('admin.thuchien_chitieu.index',compact('data','thang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $thang=thang::all();
        $chitieu=chitieu::all(); 
        return view('admin.thuchien_chitieu.create',compact('thang','chitieu')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new thuchien_chitieu;
        $data->chitieu_id=$request->chitieu_id;
        $data->doanhthu_dichvu=$request->doanhthu_dichvu;
        $data->doanhthu_tong=$request->doanhthu_tong;
        $data->duan=$request->duan;
        $data->giaoduc=$request->giaoduc;
        $data->kenhtruyen=$request->kenhtruyen;
        $data->yte=$request->yte;
        if($data->save()){
            $data=thuchien_chitieu::all();
            Toastr::success('Thêm chỉ tiêu thực hiện thành công','Thêm chỉ tiêu thực hiện');
            return redirect('admin/thuchien_chitieu');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\thuchien_chitieu  $thuchien_chitieu
     * @return \Illuminate\Http\Response
     */
    public function show(thuchien_chitieu $thuchien_chitieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\thuchien_chitieu  $thuchien_chitieu
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data=thuchien_chitieu::find($id);
        return view('admin.thuchien_chitieu.edit',compact('data')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\thuchien_chitieu  $thuchien_chitieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=thuchien_chitieu::find($id);
        $data->doanhthu_dichvu=$request->doanhthu_dichvu;
        $data->doanhthu_tong=$request->doanhthu_tong;
        $data->duan=$request->duan;
        $data->giaoduc=$request->giaoduc;
        $data->kenhtruyen=$request->kenhtruyen;
        $data->yte=$request->yte;
        
       if($data->save()) {
            Toastr::success('Cập nhật chỉ tiêu thực hiện thành công','Cập nhật chỉ tiêu thực hiện');
           return redirect('admin/thuchien_chitieu');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\thuchien_chitieu  $thuchien_chitieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(thuchien_chitieu $thuchien_chitieu)
    {
        //
    }
}
