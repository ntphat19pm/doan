<?php

namespace App\Http\Controllers;

use App\Models\nop_file;
use App\Models\nhanvien;
use App\Models\giaoviec;
use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class nop_file_controller extends Controller
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
            $data=nop_file::all();
            $giaoviec=giaoviec::all();
            return view('admin.nop_file.index',compact('data','giaoviec'));
        }
        else
        {
            Toastr::warning('Bạn không có quyền truy cập vào bảng nộp file','Hạn chế truy cập');
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
        $giaoviec=giaoviec::all();
        return view('admin.nop_file.create',compact('giaoviec'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('file_uploads')){
            
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-file_nop'.'.'.$ex;
            $file->move(public_path('uploads/giaoviec'),$file_name);
            
            $ngaynop=Carbon::now('Asia/Ho_Chi_Minh');


        }
        $request->merge(['file'=>$file_name]);
        $request->merge(['thoigian_nop'=>$ngaynop]);

        $data=giaoviec::find($request->congviec_id);
        $data->ngaynop=Carbon::now('Asia/Ho_Chi_Minh');
        $data->trangthai=1;
        $data->save();
        
        if(nop_file::create($request->all())){
            Toastr::success('Thêm file nộp thành công','Thêm file nộp');
            return redirect()->route('admin.index', ['user'=>Auth::user()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nop_file  $nop_file
     * @return \Illuminate\Http\Response
     */
    public function show(nop_file $nop_file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nop_file  $nop_file
     * @return \Illuminate\Http\Response
     */
    public function edit(nop_file $nop_file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nop_file  $nop_file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-file_nop'.'.'.$ex;
            $file->move(public_path('uploads/giaoviec'),$file_name);

            $data=file_nop::find($id);
            File::delete('public/uploads/giaoviec/'.$data->file);
            $request->merge(['file'=>$file_name]); 
        }
    
        if(file_nop::find($id)->update($request->all())){
            Toastr::success('Cập nhật bài viết thành công','Cập nhật bài viết');
            return redirect('admin/file_nop');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nop_file  $nop_file
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $data=nop_file::find($id)->delete();
        if($data){
            Toastr::success('Xóa file nộp thành công','Xóa file nộp');
            return redirect('admin/nop_file');
        }
    }
}
