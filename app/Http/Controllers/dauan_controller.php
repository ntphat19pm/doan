<?php

namespace App\Http\Controllers;

use App\Models\dauan;
use App\Models\nhanvien;
use Illuminate\Http\Request;
use File;
use Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class dauan_controller extends Controller
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
            $data=dauan::all();
            return view('admin.dauan.index',compact('data'));
        }
        else
        {
            Toastr::warning('Bạn không có quyền truy cập vào bảng dấu ấn','Hạn chế truy cập');
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
        return view('admin.dauan.create');
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
            $file_name=time().'-dauan'.'.'.$ex;
            $file->move(public_path('uploads/dauan'),$file_name);
          
        }
        $request->merge(['avatar'=>$file_name]);
        

        if(dauan::create($request->all())){
            Toastr::success('Thêm dấu ấn thành công','Thêm dấu ấn');
            return redirect('admin/dauan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dauan  $dauan
     * @return \Illuminate\Http\Response
     */
    public function show(dauan $dauan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dauan  $dauan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = dauan::find($id);
		return view('admin.dauan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dauan  $dauan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-dauan'.'.'.$ex;
            $file->move(public_path('uploads/dauan'),$file_name);

            $data=dauan::find($id);
            File::delete('public/uploads/dauan/'.$data->avatar);
            $request->merge(['avatar'=>$file_name]); 
        }
    
        if(dauan::find($id)->update($request->all())){
            Toastr::success('Cập nhật dấu ấn thành công','Cập nhật dấu ấn');
            return redirect('admin/dauan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dauan  $dauan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=dauan::find($id);
        $duongdan = 'public/uploads/dauan';
        File::delete($duongdan.'/'.$data->avatar);
        $data->delete();
        if( $data){
            Toastr::success('Xóa dấu ấn thành công','Xóa dấu ấn');
            return redirect('admin/dauan');
        }
    }
}
