<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;
use File;
use Toastr;

class review_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=review::all();  
        return view('admin.review.index',compact('data'));
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
            $file_name=time().'-review'.'.'.$ex;
            $file->move(public_path('uploads/review'),$file_name);
          
        }
        $request->merge(['avatar'=>$file_name]);
        

        if(review::create($request->all())){
            Toastr::success('Thêm review thành công','Thêm review');
            return redirect('admin/review');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = review::find($id);
		return view('admin.review.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->has('file_uploads')){
            $file=$request->file_uploads;
            $ex=$request->file_uploads->extension();
            $file_name=time().'-review'.'.'.$ex;
            $file->move(public_path('uploads/review'),$file_name);

            $data=review::find($id);
            File::delete('public/uploads/review/'.$data->avatar);
            $request->merge(['avatar'=>$file_name]); 
        }
    
        if(review::find($id)->update($request->all())){
            Toastr::success('Cập nhật review thành công','Cập nhật review');
            return redirect('admin/review');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $data=review::find($id);
        $duongdan = 'public/uploads/review';
        File::delete($duongdan.'/'.$data->avatar);
        $data->delete();
        if( $data){
            Toastr::success('Xóa review thành công','Xóa review');
            return redirect('admin/review');
        }
    }
}
