<?php

namespace App\Http\Controllers;

use App\Models\dichvu_chuyendoi;
use Illuminate\Http\Request;
use File;
use Toastr;

class dichvu_chuyendoi_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=dichvu_chuyendoi::all();
        
        return view('admin.dichvu_chuyendoi.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $file_name=time().'-dichvu_chuyendoi'.'.'.$ex;
            $file->move(public_path('uploads/dichvu_chuyendoi'),$file_name);
          
        }
        $request->merge(['avatar'=>$file_name]);
        

        if(dichvu_chuyendoi::create($request->all())){
            Toastr::success('Thêm dịch vụ chuyển đổi số thành công','Thêm dịch vụ chuyển đổi số');
            return redirect('admin/dichvu_chuyendoi');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dichvu_chuyendoi  $dichvu_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function show(dichvu_chuyendoi $dichvu_chuyendoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dichvu_chuyendoi  $dichvu_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = dichvu_chuyendoi::find($id);
		return view('admin.dichvu_chuyendoi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dichvu_chuyendoi  $dichvu_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-dichvu_chuyendoi'.'.'.$ex;
            $file->move(public_path('uploads/dichvu_chuyendoi'),$file_name);

            $data=dichvu_chuyendoi::find($id);
            File::delete('public/uploads/dichvu_chuyendoi/'.$data->avatar);
            $request->merge(['avatar'=>$file_name]); 
        }
    
        if(dichvu_chuyendoi::find($id)->update($request->all())){
            Toastr::success('Cập nhật dịch vụ chuyển đổi số thành công','Cập nhật dịch vụ chuyển đổi số');
            return redirect('admin/dichvu_chuyendoi');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dichvu_chuyendoi  $dichvu_chuyendoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(dichvu_chuyendoi $dichvu_chuyendoi)
    {
        //
    }
}
