<?php

namespace App\Http\Controllers;

use App\Models\gioithieu;
use App\Models\nhanvien;
use Illuminate\Http\Request;
use Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class gioithieu_controller extends Controller
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
            $data=gioithieu::all();
            return view('admin.gioithieu.index',compact('data'));
        }
        else
        {
            Toastr::warning('Bạn không có quyền truy cập vào bảng giới thiệu','Hạn chế truy cập');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gioithieu  $gioithieu
     * @return \Illuminate\Http\Response
     */
    public function show(gioithieu $gioithieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gioithieu  $gioithieu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = gioithieu::find($id);
		return view('admin.gioithieu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gioithieu  $gioithieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=gioithieu::find($id);
        $data->noidung=$request->noidung;
        $data->tram_hatang=$request->tram_hatang;
        $data->trungtam=$request->trungtam;
        $data->capquang=$request->capquang;
        $data->diem_giaodich=$request->diem_giaodich;
        $data->dieuhanh=$request->dieuhanh;
        $data->diem_giaonhan=$request->diem_giaonhan;
        $data->canbo_nhanvien=$request->canbo_nhanvien;
        $data->chuyengia=$request->chuyengia;
        $data->giatri=$request->giatri;
        $data->chamsoc=$request->chamsoc;
        if($data->save()) {
            Toastr::success('Cập nhật giới thiệu thành công','Cập nhật giới thiệu');
            return redirect('admin/gioithieu');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gioithieu  $gioithieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(gioithieu $gioithieu)
    {
        //
    }
}
