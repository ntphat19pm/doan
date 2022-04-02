<?php

namespace App\Http\Controllers;

use App\Models\lienhe_chuyendoi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class lienhe_chuyendoi_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=lienhe_chuyendoi::all();
        
        return view('admin.lienhe_chuyendoi.index',compact('data'));
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
     * @param  \App\Models\lienhe_chuyendoi  $lienhe_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function show(lienhe_chuyendoi $lienhe_chuyendoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lienhe_chuyendoi  $lienhe_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function edit(lienhe_chuyendoi $lienhe_chuyendoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lienhe_chuyendoi  $lienhe_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lienhe_chuyendoi $lienhe_chuyendoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lienhe_chuyendoi  $lienhe_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $data=lienhe_chuyendoi::find($id)->delete();
        if($data){
            Toastr::success('Xóa liên hệ chuyển đổi số thành công','Xóa liên hệ chuyển đổi số');
            return redirect('admin/lienhe_chuyendoi');
        }
    }

    public function active($id)
    {
        $data=lienhe_chuyendoi::find($id);
        $data->create_at=Carbon::now('Asia/Ho_Chi_Minh');
        $data->trangthai_id=1;
        $data->nhanvien_id=Auth::user()->id;

        if($data->save()) {
            Toastr::success('Cập nhật liên hệ chuyển đổi số thành công','Cập nhật liên hệ chuyển đổi số');
            return redirect('admin/lienhe_chuyendoi');
        }
    }

    public function unactive($id)
    {
        $data=lienhe_chuyendoi::find($id);
        $data->trangthai_id=0;

        if($data->save()) {
            Toastr::success('Cập nhật liên hệ chuyển đổi số thành công','Cập nhật liên hệ chuyển đổi số');
            return redirect('admin/lienhe_chuyendoi');
        }
    }
}
