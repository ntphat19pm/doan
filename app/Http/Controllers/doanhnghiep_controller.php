<?php

namespace App\Http\Controllers;

use App\Models\doanhnghiep;
use Illuminate\Http\Request;
use File;
use Toastr;

class doanhnghiep_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=doanhnghiep::all();
        
        return view('admin.doanhnghiep.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doanhnghiep.create');
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
            $file_name=time().'-doanhnghiep'.'.'.$ex;
            $file->move(public_path('uploads/doanhnghiep'),$file_name);
          
        }
        $request->merge(['hinhanh'=>$file_name]);
        

        if(doanhnghiep::create($request->all())){
            Toastr::success('Thêm doanh nghiệp thành công','Thêm doanh nghiệp');
            return redirect('admin/doanhnghiep');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doanhnghiep  $doanhnghiep
     * @return \Illuminate\Http\Response
     */
    public function show(doanhnghiep $doanhnghiep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doanhnghiep  $doanhnghiep
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = doanhnghiep::find($id);
		return view('admin.doanhnghiep.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doanhnghiep  $doanhnghiep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-doanhnghiep'.'.'.$ex;
            $file->move(public_path('uploads/doanhnghiep'),$file_name);

            $data=doanhnghiep::find($id);
            File::delete('public/uploads/doanhnghiep/'.$data->hinhanh);
            $request->merge(['hinhanh'=>$file_name]); 
        }
    
        if(doanhnghiep::find($id)->update($request->all())){
            Toastr::success('Cập nhật doanh nghiệp thành công','Cập nhật doanh nghiệp');
            return redirect('admin/doanhnghiep');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doanhnghiep  $doanhnghiep
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=doanhnghiep::find($id);
        $duongdan = 'public/uploads/doanhnghiep';
        File::delete($duongdan.'/'.$data->hinhanh);
        $data->delete();
        if( $data){
            Toastr::success('Xóa doanh nghiệp thành công','Xóa doanh nghiệp');
            return redirect('admin/doanhnghiep');
        }
    }
}
