<?php

namespace App\Http\Controllers;

use App\Models\khachhang;
use App\Models\gioitinh;
use Illuminate\Http\Request;

class profile_kh_controller extends Controller
{
    public function edit($id)
    {
        $gioitinh=gioitinh::all();
        $data=khachhang::find($id);
        return view('edit',compact('data','gioitinh'));  
        
    }
    public function update(Request $request, $id)
    {
        
        $data = khachhang::find($id);
        $data->hovaten=$request->hovaten;
        $data->gioitinh_id=$request->gioitinh_id;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->tendangnhap=$request->tendangnhap;
        if(!empty($request->password)) $data->password = bcrypt($request->password);
		$data->save();
        $data->email=$request->email;
        if($data->save()){
            $data=khachhang::all();
            Toastr::success('Cập nhật khách hàng thành công','Cập nhật khách hàng');
            return view('/home',compact('data'));
        }
    }
}
