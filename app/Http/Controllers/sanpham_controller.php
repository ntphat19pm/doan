<?php

namespace App\Http\Controllers;

use App\Models\sanpham;
use App\Models\dacdiem;
use App\Models\tinhnang;
use App\Models\loiich;
use App\Imports\sanpham_import;
use App\Exports\sanpham_export;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\LengthAwarePaginator;
use File;
use Excel;
use Toastr;

class sanpham_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=sanpham::all();
        
        return view('admin.sanpham.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sanpham.create');
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
            $file_name=time().'-sanpham'.'.'.$ex;
            $file->move(public_path('uploads/sanpham/avatar'),$file_name);

            $file1=$request->file_uploads1;
            $ex=$request->file_uploads1->extension();
            $file_name1=time().'-sanpham_chitiet'.'.'.$ex;
            $file1->move(public_path('uploads/sanpham/chitiet'),$file_name1);

            $sub_link=substr($request->link,17);

            $link_cut=substr($request->link_pdf,0,65);
          
        }
        $request->merge(['anh'=>$file_name]);
        $request->merge(['anh1'=>$file_name1]);
        $request->merge(['link'=>$sub_link]);
        $request->merge(['link_pdf'=>$link_cut]);

        if(sanpham::create($request->all())){
            Toastr::success('Thêm sản phẩm thành công','Thêm sản phẩm');
            return redirect('admin/sanpham');
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=sanpham::find($id);
        $dacdiem=dacdiem::where('sanpham_id',$id)->orderby('sanpham_id','DESC')->paginate(10);
        $tinhnang=tinhnang::where('sanpham_id',$id)->orderby('sanpham_id','DESC')->paginate(10);
        $loiich=loiich::where('sanpham_id',$id)->orderby('sanpham_id','DESC')->paginate(10);
        return view('admin.sanpham.show',compact('data','dacdiem','tinhnang','loiich'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=sanpham::find($id);
        return view('admin.sanpham.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-sanpham'.'.'.$ex;
            $file->move(public_path('uploads/sanpham/avatar'),$file_name);

            $data=sanpham::find($id);
            File::delete('public/uploads/sanpham/avatar/'.$data->anh);
            $request->merge(['anh'=>$file_name]); 
        } 
        if($request->has('file_uploads1')){
            $file1=$request->file_uploads1;
            $ex=$request->file_uploads1->extension();
            $file_name1=time().'-sanpham_chitiet'.'.'.$ex;
            $file1->move(public_path('uploads/sanpham/chitiet'),$file_name1);

            $data=sanpham::find($id);
            File::delete('public/uploads/sanpham/chitiet/'.$data->anh1);
            $request->merge(['anh1'=>$file_name1]);  
        }
        else
        {
            $sub_link=substr($request->link,17);
            $request->merge(['link'=>$sub_link]);

            $link_cut=substr($request->link_pdf,0,65);
            $request->merge(['link_pdf'=>$link_cut]);
        }
    
        if(sanpham::find($id)->update($request->all())){
            Toastr::success('Cập nhật sản phẩm thành công','Cập nhật sản phẩm');
            return redirect('admin/sanpham');
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sanpham  $sanpham
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=sanpham::find($id);
        $duongdan = 'public/uploads/sanpham/avatar';
        $duongdan1 = 'public/uploads/sanpham/chitiet';
        File::delete($duongdan.'/'.$data->anh);
        File::delete($duongdan1.'/'.$data->anh1);
        $data->delete();
        Toastr::success('Xóa sản phẩm thành công','Xóa sản phẩm');
        return redirect()->route('sanpham.index')->with('success','Xóa sản phẩm thành công');
    }

    public function postNhap(Request $request)
    {
        Excel::import(new sanpham_import, $request->file('file_excel'));
        return redirect('admin/sanpham');
    }

    public function getXuat()
    {
        return Excel::download(new sanpham_export, 'danh-sach-san-pham.xlsx');
    }
}
