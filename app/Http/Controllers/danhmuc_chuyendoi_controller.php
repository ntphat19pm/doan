<?php

namespace App\Http\Controllers;

use App\Models\danhmuc_chuyendoi;
use Illuminate\Http\Request;
use File;
use Toastr;

class danhmuc_chuyendoi_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=danhmuc_chuyendoi::all();
        return view('admin.danhmuc_chuyendoi.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.danhmuc_chuyendoi.create');
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
            $file_name=time().'-danhmuc_chuyendoi'.'.'.$ex;
            $file->move(public_path('uploads/danhmuc_chuyendoi'),$file_name);
          
        }
        $request->merge(['avatar'=>$file_name]);
        

        if(danhmuc_chuyendoi::create($request->all())){
            Toastr::success('Thêm danh mục chuyển đổi số thành công','Thêm danh mục chuyển đổi số');
            return redirect('admin/danhmuc_chuyendoi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\danhmuc_chuyendoi  $danhmuc_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function show(danhmuc_chuyendoi $danhmuc_chuyendoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\danhmuc_chuyendoi  $danhmuc_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = danhmuc_chuyendoi::find($id);
		return view('admin.danhmuc_chuyendoi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\danhmuc_chuyendoi  $danhmuc_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-danhmuc_chuyendoi'.'.'.$ex;
            $file->move(public_path('uploads/danhmuc_chuyendoi'),$file_name);

            $data=danhmuc_chuyendoi::find($id);
            File::delete('public/uploads/danhmuc_chuyendoi/'.$data->avatar);
            $request->merge(['avatar'=>$file_name]); 
        }
    
        if(danhmuc_chuyendoi::find($id)->update($request->all())){
            Toastr::success('Cập nhật danh mục chuyển đổi số thành công','Cập nhật danh mục chuyển đổi số');
            return redirect('admin/danhmuc_chuyendoi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\danhmuc_chuyendoi  $danhmuc_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=danhmuc_chuyendoi::find($id);
        $duongdan = 'public/uploads/danhmuc_chuyendoi';
        File::delete($duongdan.'/'.$data->avatar);
        $data->delete();
        if( $data){
            Toastr::success('Xóa danh mục chuyển đổi số thành công','Xóa danh mục chuyển đổi số');
            return redirect('admin/danhmuc_chuyendoi');
        }
    }
}
