<?php

namespace App\Http\Controllers;

use App\Models\thongtin;
use App\Models\sanpham;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class thongtin_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=thongtin::all();
        return view('admin.thongtin.index',compact('data'));
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
     * @param  \App\Models\thongtin  $thongtin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=thongtin::find($id);
        $sanpham=sanpham::where('id',$data->sanpham_id)->get();
        return view('admin.thongtin.show',compact('data','sanpham'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\thongtin  $thongtin
     * @return \Illuminate\Http\Response
     */
    public function edit(thongtin $thongtin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\thongtin  $thongtin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, thongtin $thongtin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\thongtin  $thongtin
     * @return \Illuminate\Http\Response
     */
    public function destroy(thongtin $thongtin)
    {
        //
    }

    public function active($id)
    {
        $data=thongtin::find($id);
        $data->ngay_lienhe=Carbon::now('Asia/Ho_Chi_Minh');
        $data->trangthai=1;
        $data->nhanvien_id=Auth::user()->id;

        if($data->save()) {
            Toastr::success('Cập nhật liên hệ thành công','Cập nhật liên hệ');
            return redirect('admin/thongtin');
        }
    }

    public function unactive($id)
    {
        $data=thongtin::find($id);
        $data->trangthai=0;

        if($data->save()) {
            Toastr::success('Cập nhật liên hệ thành công','Cập nhật liên hệ');
            return redirect('admin/thongtin');
        }
    }
}
