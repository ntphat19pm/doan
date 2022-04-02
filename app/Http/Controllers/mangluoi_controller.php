<?php

namespace App\Http\Controllers;

use App\Models\mangluoi;
use App\Models\nhanvien;
use Illuminate\Http\Request;
use File;
use Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class mangluoi_controller extends Controller
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
            $data=mangluoi::all();
            return view('admin.mangluoi.index',compact('data'));
        }
        else
        {
            Toastr::warning('Bạn không có quyền truy cập vào bảng mạng lưới','Hạn chế truy cập');
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
        return view('admin.mangluoi.create');
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
            $file_name=time().'-mangluoi'.'.'.$ex;
            $file->move(public_path('uploads/mangluoi'),$file_name);
          
        }
        $request->merge(['avatar'=>$file_name]);
        

        if(mangluoi::create($request->all())){
            Toastr::success('Thêm mạng lưới thành công','Thêm mạng lưới');
            return redirect('admin/mangluoi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mangluoi  $mangluoi
     * @return \Illuminate\Http\Response
     */
    public function show(mangluoi $mangluoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mangluoi  $mangluoi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = mangluoi::find($id);
		return view('admin.mangluoi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mangluoi  $mangluoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-mangluoi'.'.'.$ex;
            $file->move(public_path('uploads/mangluoi'),$file_name);

            $data=mangluoi::find($id);
            File::delete('public/uploads/mangluoi/'.$data->avatar);
            $request->merge(['avatar'=>$file_name]); 
        }
    
        if(mangluoi::find($id)->update($request->all())){
            Toastr::success('Cập nhật mạng lưới thành công','Cập nhật mạng lưới');
            return redirect('admin/mangluoi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mangluoi  $mangluoi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=mangluoi::find($id);
        $duongdan = 'public/uploads/mangluoi';
        File::delete($duongdan.'/'.$data->avatar);
        $data->delete();
        if( $data){
            Toastr::success('Xóa mạng lưới thành công','Xóa mạng lưới');
            return redirect('admin/mangluoi');
        }
    }
}
