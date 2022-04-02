<?php

namespace App\Http\Controllers;

use App\Models\cauhoi;
use Illuminate\Http\Request;
use Toastr;

class cauhoi_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=cauhoi::all();
        
        return view('admin.cauhoi.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cauhoi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new cauhoi;
        $data->hoten=$request->hoten;
        $data->sdt=$request->sdt;
        $data->diachi=$request->diachi;
        $data->email=$request->email;
        $data->cauhoi=$request->cauhoi;
        $data->traloi=$request->traloi;
        $data->trangthai=$request->trangthai;
        if($data->save()){
            $data=cauhoi::all();
            Toastr::success('Thêm câu hỏi thành công','Thêm câu hỏi');
            return redirect('admin/cauhoi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cauhoi  $cauhoi
     * @return \Illuminate\Http\Response
     */
    public function show(cauhoi $cauhoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cauhoi  $cauhoi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=cauhoi::find($id);
        return view('admin.cauhoi.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cauhoi  $cauhoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=cauhoi::find($id);
        $data->cauhoi=$request->cauhoi;
        $data->traloi=$request->traloi;
        $data->trangthai=$request->trangthai;
        if($data->save()) {
            Toastr::success('Cập nhật câu hỏi thành công','Cập nhật câu hỏi');
            return redirect('admin/cauhoi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cauhoi  $cauhoi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=cauhoi::find($id)->delete();
        if($data){
            Toastr::success('Xóa câu hỏi thành công','Xóa câu hỏi');
            return redirect('admin/cauhoi');
        }
    }
    public function active($id)
    {
        $data=cauhoi::find($id);
        $data->trangthai=1;
        if($data->save()) {
            Toastr::success('Cập nhật trang thái câu hỏi thành công','Trạng thái câu hỏi');
            return redirect('admin/cauhoi');
        }
    }

    public function unactive($id)
    {
        $data=cauhoi::find($id);
        $data->trangthai=0;
        if($data->save()) {
            Toastr::success('Cập nhật trang thái câu hỏi thành công','Trạng thái câu hỏi');
            return redirect('admin/cauhoi');
        }
    }
}
