<?php

namespace App\Http\Controllers;

use App\Models\doitac;
use Illuminate\Http\Request;
use File;
use Toastr;

class doitac_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=doitac::all();
        return view('admin.doitac.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doitac.create');
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
            $file_name=time().'-doitac'.'.'.$ex;
            $file->move(public_path('uploads/doitac'),$file_name);
          
        }
        $request->merge(['hinhanh'=>$file_name]);
        

        if(doitac::create($request->all())){
            Toastr::success('Thêm đối tác thành công','Thêm đối tác');
            return redirect('admin/doitac');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\doitac  $doitac
     * @return \Illuminate\Http\Response
     */
    public function show(doitac $doitac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\doitac  $doitac
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = doitac::find($id);
		return view('admin.doitac.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\doitac  $doitac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-doitac'.'.'.$ex;
            $file->move(public_path('uploads/doitac'),$file_name);

            $data=doitac::find($id);
            File::delete('public/uploads/doitac/'.$data->hinhanh);
            $request->merge(['hinhanh'=>$file_name]); 
        }
    
        if(doitac::find($id)->update($request->all())){
            Toastr::success('Cập nhật đối tác thành công','Cập nhật đối tác');
            return redirect('admin/doitac');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\doitac  $doitac
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=doitac::find($id);
        $duongdan = 'public/uploads/doitac';
        File::delete($duongdan.'/'.$data->hinhanh);
        $data->delete();
        if( $data){
            Toastr::success('Xóa đối tác thành công','Xóa đối tác');
            return redirect('admin/doitac');
        }
    }
}
