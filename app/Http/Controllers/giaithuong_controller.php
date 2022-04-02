<?php

namespace App\Http\Controllers;

use App\Models\giaithuong;
use App\Models\nhanvien;
use Illuminate\Http\Request;
use File;
use Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class giaithuong_controller extends Controller
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
            $data=giaithuong::all();
            return view('admin.giaithuong.index',compact('data'));
        }
        else
        {
            Toastr::warning('Bạn không có quyền truy cập vào bảng giải thưởng','Hạn chế truy cập');
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
        return view('admin.giaithuong.create');
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
            $file_name=time().'-giaithuong'.'.'.$ex;
            $file->move(public_path('uploads/giaithuong'),$file_name);
          
        }
        else
        {
            if($request->phanloai_id==1)
            {
                $file_name='no1-159x214.png';
            }
            if($request->phanloai_id==2)
            {
                $file_name='no2-159x214.png';
            }
            if($request->phanloai_id==3)
            {
                $file_name='no3-159x214.png';
            }
            
        }
        $request->merge(['avatar'=>$file_name]);
        

        if(giaithuong::create($request->all())){
            Toastr::success('Thêm giải thưởng thành công','Thêm giải thưởng');
            return redirect('admin/giaithuong');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\giaithuong  $giaithuong
     * @return \Illuminate\Http\Response
     */
    public function show(giaithuong $giaithuong)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\giaithuong  $giaithuong
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = giaithuong::find($id);
		return view('admin.giaithuong.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\giaithuong  $giaithuong
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-giaithuong'.'.'.$ex;
            $file->move(public_path('uploads/giaithuong'),$file_name);

            $data=giaithuong::find($id);
            File::delete('public/uploads/giaithuong/'.$data->avatar);
            $request->merge(['avatar'=>$file_name]); 
        }
    
        if(giaithuong::find($id)->update($request->all())){
            Toastr::success('Cập nhật giải thưởng thành công','Cập nhật giải thưởng');
            return redirect('admin/giaithuong');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\giaithuong  $giaithuong
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=giaithuong::find($id);
        if($data->phanloai_id==1 || $data->phanloai_id==2 || $data->phanloai_id==3)
        {
            $data=giaithuong::find($id)->delete();
            if($data)
            {
                Toastr::success('Xóa giải thưởng thành công','Xóa giải thưởng');
                return redirect('admin/giaithuong');
            }
        }
        elseif($data->phanloai_id==0)
        {
            $data=giaithuong::find($id);
            $duongdan = 'public/uploads/giaithuong';
            File::delete($duongdan.'/'.$data->avatar);
            $data->delete();
            if( $data)
            {
                Toastr::success('Xóa giải thưởng thành công','Xóa giải thưởng');
                return redirect('admin/giaithuong');
            }
        }

        
    }
}
