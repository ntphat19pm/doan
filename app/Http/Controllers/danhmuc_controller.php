<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\Danhmuc\addRequest;
use File;
use Toastr;

class danhmuc_controller extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=danhmuc::orderBy('id','ASC')->search()->paginate(10);
        return view('admin.danhmuc.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.danhmuc.create');
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
            $file_name=time().'-daidien'.'.'.$ex;
            $file->move(public_path('uploads/linhvuc'),$file_name);

            $file1=$request->file_uploads1;
            $ex=$request->file_uploads1->extension();
            $file_name1=time().'-anhbia'.'.'.$ex;
            $file1->move(public_path('uploads/linhvuc'),$file_name1);

            $slug=str_slug($request->tendanhmuc);
            $sub_link=substr($request->link_video,17);          
        }
        $request->merge(['avatar'=>$file_name]);
        $request->merge(['anhbia'=>$file_name1]);
        $request->merge(['slug'=>$slug]);
        $request->merge(['link_video'=>$sub_link]);

        if(danhmuc::create($request->all())){
            Toastr::success('Thêm danh mục thành công','Thêm danh mục');
            return redirect('admin/danhmuc');
        }
       
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function show(danhmuc $danhmuc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = danhmuc::find($id);
        
		return view('admin.danhmuc.edit', compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-daidien'.'.'.$ex;
            $file->move(public_path('uploads/linhvuc'),$file_name);

            $data=danhmuc::find($id);
            File::delete('public/puloads/linhvuc/'.$data->avatar);
            $request->merge(['avatar'=>$file_name]); 
        } 
        if($request->has('file_uploads1')){
            $file1=$request->file_uploads1;
            $ex=$request->file_uploads1->extension();
            $file_name1=time().'-anhbia'.'.'.$ex;
            $file1->move(public_path('uploads/linhvuc'),$file_name1);

            $data=danhmuc::find($id);
            File::delete('public/uploads/linhvuc/'.$data->anhbia);
            $request->merge(['anhbia'=>$file_name1]);  
        }
        else
        {
            $sub_link=substr($request->link_video,17);
            $request->merge(['link_video'=>$sub_link]);
        }
    
        if(danhmuc::find($id)->update($request->all())){
            Toastr::success('Cập nhật danh mục thành công','Cập nhật danh mục');
            return redirect('admin/danhmuc');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\danhmuc  $danhmuc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=danhmuc::find($id)->delete();
        if($data){
            Toastr::success('Xóa danh mục thành công','Xóa danh mục');
            return redirect('admin/danhmuc');
        }
       
    }
}
