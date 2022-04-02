<?php

namespace App\Http\Controllers;

use App\Models\giaoviec;
use App\Models\nhanvien;
use App\Models\nop_file;
use App\Models\chucvu;
use App\Models\gioitinh;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Toastr;
use File;
use Storage;
use Excel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class giaoviec_controller extends Controller
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
            $data=giaoviec::all();
            $nop_file=nop_file::all();
            return view('admin.giaoviec.index',compact('data','nop_file'));
        }
        else
        {
            Toastr::warning('Bạn không có quyền truy cập vào bảng giao việc','Hạn chế truy cập');
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
        $nhanvien=nhanvien::all();
        return view('admin.giaoviec.create',compact('nhanvien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new giaoviec;
        $data->ten_congviec=$request->ten_congviec;
        $data->nguoinhan=$request->nguoinhan;
        $data->hanchot=$request->hanchot;
        if($data->save()){
            $data=giaoviec::all();
            Toastr::success('Thêm công việc thành công','Thêm công việc');
            return redirect('admin/giaoviec');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\giaoviec  $giaoviec
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $nhanvien=nhanvien::all();
        $nop_file=nop_file::where('congviec_id',$id)->orderby('thoigian_nop','DESC')->paginate(10);
        $data=giaoviec::find($id);
        return view('admin.giaoviec.show',compact('data','nhanvien','nop_file'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\giaoviec  $giaoviec
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nhanvien=nhanvien::all();
        $data=giaoviec::find($id);
        return view('admin.giaoviec.edit',compact('data','nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\giaoviec  $giaoviec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-giaoviec'.'.'.$ex;
            $file->move(public_path('uploads/giaoviec'),$file_name);

            $data=giaoviec::find($id);
            File::delete('public/uploads/giaoviec/'.$data->file_nop);
            $request->merge(['file_nop'=>$file_name]); 
        }
    
        if(giaoviec::find($id)->update($request->all())){
            Toastr::success('Cập nhật bài viết thành công','Cập nhật bài viết');
            return redirect('admin/giaoviec');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\giaoviec  $giaoviec
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=giaoviec::find($id)->delete();
        if($data){
            Toastr::success('Xóa công việc thành công','Xóa công việc');
            return redirect('admin/giaoviec');
        }
    }
    public function active($id)
    {
        $data=giaoviec::find($id);
        $data->ngaynop=Carbon::now('Asia/Ho_Chi_Minh');
        $data->trangthai=1;

        if($data->save()) {
            Toastr::success('Cập nhật công việc thành công','Cập nhật công việc');
            return redirect('admin/giaoviec');
        }
    }

    public function unactive($id)
    {
        $mang=giaoviec::find($id)->update(['trangthai'=>0]);
        $data=giaoviec::all();
        return view('admin.giaoviec.index',compact('mang','data'));
    }

}
