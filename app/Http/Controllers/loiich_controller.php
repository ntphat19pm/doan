<?php

namespace App\Http\Controllers;

use App\Models\loiich;
use App\Models\sanpham;
use Toastr;
use App\Imports\loiich_import;
use App\Exports\loiich_export;
use File;
use Excel;

use Illuminate\Http\Request;

class loiich_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=loiich::all();
        
        return view('admin.loiich.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sanpham=sanpham::all();
        return view('admin.loiich.create',compact('sanpham'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new loiich;
        $data->tenloiich=$request->tenloiich;
        $data->sanpham_id=$request->sanpham_id;
        $data->chitiet=$request->chitiet;
        if($data->save()){
            $data=loiich::all();
            Toastr::success('Thêm lợi ích thành công','Thêm lợi ích');
            return redirect('admin/loiich');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\loiich  $loiich
     * @return \Illuminate\Http\Response
     */
    public function show(loiich $loiich)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loiich  $loiich
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sanpham=sanpham::all();
        $data=loiich::find($id);
        return view('admin.loiich.edit',compact('data','sanpham'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loiich  $loiich
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=loiich::find($id);
        $data->tenloiich=$request->tenloiich;
        $data->sanpham_id=$request->sanpham_id;
        $data->chitiet=$request->chitiet;
        if($data->save()) {
            Toastr::success('Cập nhật đặc điểm thành công','Cập nhật đặc điểm');
            return redirect('admin/loiich');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loiich  $loiich
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=loiich::find($id)->delete();
        if($data){
            Toastr::success('Xóa lợi ích thành công','Xóa lợi ích');
            return redirect('admin/loiich');
        }
    }

    public function postNhap(Request $request)
    {
        Excel::import(new loiich_import, $request->file('file_excel'));
        return redirect('admin/loiich');
    }
    
    // Xuất ra Excel
    public function getXuat()
    {
        return Excel::download(new loiich_export, 'danh-sach-loi-ich.xlsx');
    }
}
