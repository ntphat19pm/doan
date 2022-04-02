<?php

namespace App\Http\Controllers;

use App\Models\video;
use Carbon\Carbon;
use Toastr;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class video_controller extends Controller
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
            $data=video::all();
        return view('admin.video.index',compact('data'));
        }
        else
        {
            Toastr::warning('Bạn không có quyền truy cập vào bảng video','Hạn chế truy cập');
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
        return view('admin.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new video;
        $data->tenvideo=$request->tenvideo;
        $sub_link=substr($request->link,17);
        $data->link=$sub_link;
        $data->mota=$request->mota;
        $data->slug=str_slug($request->tenvideo);
        $data->ngaydang=Carbon::now('Asia/Ho_Chi_Minh');
        $data->nguoidang=Auth::user()->id;
        if($data->save()){
            $data=video::all();
            Toastr::success('Thêm video thành công','Thêm video');
            return redirect('admin/video');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = video::find($id);
        
		return view('admin.video.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = video::find($id);
        $data->tenvideo=$request->tenvideo;
        $sub_link=substr($request->link,17);
        $data->link=$sub_link;
        $data->mota=$request->mota;
        $data->slug=str_slug($request->tenvideo);
        $data->ngaydang=Carbon::now('Asia/Ho_Chi_Minh');
        $data->status=$request->status;
        $data->nguoidang=$request->nguoidang;
        if($data->save()){
            $data=video::all();
            Toastr::success('Cập nhật video thành công','Cập nhật video');
            return redirect('admin/video');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= video::find($id)->delete();
        if( $data){
            Toastr::success('Xóa video thành công','Xóa video');
            return redirect('admin/video');
        }
            
    }

    public function active($id)
    {
        $data=video::find($id);
        $data->ngaydang=Carbon::now('Asia/Ho_Chi_Minh');
        $data->status=1;

        if($data->save()) {
            Toastr::success('Cập nhật trạng thái video thành công','Cập nhật trạng thái video');
            return redirect('admin/video');
        }
    }

    public function unactive($id)
    {
        $mang=video::find($id)->update(['status'=>0]);
        $data=video::all();
        return view('admin.video.index',compact('mang','data'));
    }
}
