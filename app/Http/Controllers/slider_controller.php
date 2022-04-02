<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use File;
use Toastr;

class slider_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=slider::all();
        return view('admin.slider.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            $file_name=time().'-slider'.'.'.$ex;
            $file->move(public_path('uploads/slider'),$file_name);
          
        }
        $request->merge(['avatar'=>$file_name]);
        

        if(slider::create($request->all())){
            Toastr::success('Thêm slider thành công','Thêm slider');
            return redirect('admin/slider');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = slider::find($id);
		return view('admin.slider.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-slider'.'.'.$ex;
            $file->move(public_path('uploads/slider'),$file_name);

            $data=slider::find($id);
            File::delete('public/uploads/slider/'.$data->avatar);
            $request->merge(['avatar'=>$file_name]); 
        }
    
        if(slider::find($id)->update($request->all())){
            Toastr::success('Cập nhật slider thành công','Cập nhật slider');
            return redirect('admin/slider');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=slider::find($id);
        $duongdan = 'public/uploads/slider';
        File::delete($duongdan.'/'.$data->avatar);
        $data->delete();
        if( $data){
            Toastr::success('Xóa slider thành công','Xóa slider');
            return redirect('admin/slider');
        }
    }

    public function active($id)
    {
        $mang=slider::find($id)->update(['trangthai'=>1]);
        $data=slider::all();
        return view('admin.slider.index',compact('mang','data'));
    }

    public function unactive($id)
    {
        $mang=slider::find($id)->update(['trangthai'=>0]);
        $data=slider::all();
        return view('admin.slider.index',compact('mang','data'));
    }
}
