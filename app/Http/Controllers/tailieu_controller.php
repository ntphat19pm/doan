<?php

namespace App\Http\Controllers;

use App\Models\tailieu;
use Illuminate\Http\Request;
use File;
use Toastr;

class tailieu_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=tailieu::all();
        return view('admin.tailieu.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tailieu.create');
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
            $file_name=time().'-tailieu'.'.'.$ex;
            $file->move(public_path('uploads/tailieu'),$file_name);
          
        }
        else{
            Toastr::error('Upload tài liệu thất bại','Upload tài liệu');
            return view('admin.tailieu.create');
        }
        $request->merge(['file'=>$file_name]);
        

        if(tailieu::create($request->all())){
            Toastr::success('Thêm tài liệu thành công','Thêm tài liệu');
            return redirect('admin/tailieu');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tailieu  $tailieu
     * @return \Illuminate\Http\Response
     */
    public function show(tailieu $tailieu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tailieu  $tailieu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = tailieu::find($id);
		return view('admin.tailieu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tailieu  $tailieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-tailieu'.'.'.$ex;
            $file->move(public_path('uploads/tailieu'),$file_name);

            $data=tailieu::find($id);
            File::delete('public/uploads/tailieu/'.$data->file);
            $request->merge(['file'=>$file_name]); 
        }
    
        if(tailieu::find($id)->update($request->all())){
            Toastr::success('Cập nhật tài liệu thành công','Cập nhật tài liệu');
            return redirect('admin/tailieu');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tailieu  $tailieu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=tailieu::find($id)->delete();
        if($data){
            Toastr::success('Xóa tài liệu thành công','Xóa tài liệu');
            return redirect('admin/tailieu');
        }
    }
}
