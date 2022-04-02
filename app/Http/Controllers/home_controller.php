<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\danhmuc;
use App\Models\sanpham;
use App\Models\khachhang;
use App\Models\dathang;
use App\Models\dacdiem;
use App\Models\thongtin;
use App\Models\tinhnang;
use App\Models\loiich;
use App\Models\nhanvien;
use App\Models\binhluan;
use App\Models\gioitinh;
use App\Models\giaithuong;
use App\Models\chitieu;
use App\Models\tailieu;
use App\Models\thuchien_chitieu;
use App\Models\danhmuc_chuyendoi;
use App\Models\review;
use App\Models\dichvu_chuyendoi;
use App\Models\lienhe_chuyendoi;
use App\Models\baiviet;
use App\Models\doitac;
use App\Models\cauhoi;
use App\Models\visitor;
use Illuminate\Support\Facades\DB;
use App\Helper\giohang;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Mail\dathang_email;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class home_controller extends Controller
{
    public function index(Request $request){
        $user_ip_address=$request->ip();
        $visitor_curent= visitor::where('ip_address',$user_ip_address)->get();
        $visitor_count= $visitor_curent->count();
        // $visitor_id=Auth::user()->id;
        if($visitor_count<1)
        {
            $visitor=new visitor;
            $visitor->ip_address= $user_ip_address;
            $visitor->date_visitor=Carbon::now('Asia/Ho_Chi_Minh');
            $visitor->save();
        }
        $data=sanpham::paginate(20);
        return view('home');
    }

    public function home(Request $request){
        $user_ip_address=$request->ip();
        $visitor_curent= visitor::where('ip_address',$user_ip_address)->get();
        $visitor_count= $visitor_curent->count();
        // $visitor_id=Auth::user()->id;
        if($visitor_count<1)
        {
            $visitor=new visitor;
            $visitor->ip_address= $user_ip_address;
            $visitor->date_visitor=Carbon::now('Asia/Ho_Chi_Minh');
            $visitor->save();
        }
        $data=sanpham::paginate(20);
        return view('home');
    }

    public function chitiet($id){
        $data=sanpham::find($id);
        $dacdiem=dacdiem::where('sanpham_id',$id)->orderby('sanpham_id','DESC')->get();
        $tinhnang=tinhnang::where('sanpham_id',$id)->orderby('sanpham_id','DESC')->get();
        $loiich=loiich::where('sanpham_id',$id)->orderby('sanpham_id','DESC')->get();
        return view('chitiet',compact('data','dacdiem','tinhnang','loiich'));
    }
    public function showlinhvuc($id){
        $showlinhvuc=sanpham::where('danhmuc_id',$id)->orderby('danhmuc_id','DESC')->paginate(9);
       
        $data=danhmuc::find($id);
        // $ten=$data->tendanhmuc;
        return view('showlinhvuc',compact('data','showlinhvuc'));
    }
    public function chitietbai($id){
        $data=baiviet::find($id);
        $nhanvien=nhanvien::all();
        $data->view=$data->view + 1;
        $data->save();
        $binhluan=binhluan::where('baiviet_id',$id)->where('trangthai',1)->get();
        return view('chitietbai',compact('data','binhluan','nhanvien'));
    }
    public function shop(){
        return view('shop');
    }
    public function get_dangnhap(){
       return view('login_kh');
 
    }
    public function dangxuat(){
       Auth::guard('khachhang')->logout();
       
        return view('home');
  
    }

    public function gioithieu(){
        return view('gioithieu');
    }
    public function tuyendung(){
        return view('tuyendung');
    }
    public function tailieu(){
        return view('tailieu');
    }
    public function chuyendoiso(){
        $chuyendoi_linhvuc=danhmuc_chuyendoi::where('phanloai_id',1)->get();
        $chuyendoi_chucnang=danhmuc_chuyendoi::where('phanloai_id',0)->get();
        $dichvu_chuyendoi=dichvu_chuyendoi::all();
        $review=review::all();
        $doitac=doitac::all();
        return view('chuyendoiso',compact('chuyendoi_linhvuc','chuyendoi_chucnang','dichvu_chuyendoi','review','doitac'));
    }
    public function timkiem(Request $request){
        $key = $request->timkiem;
        $tim_sp= sanpham::where('tensp','like','%'.$key.'%')->get();
        $tim_bv= baiviet::where('tenbai','like','%'.$key.'%')->where('trangthai',0)->get();
        return view('timkiem',compact('tim_sp','key','tim_bv'));
    }
    public function tag(Request $request, $tags){
        $key = str_replace("-"," ",$tags);

        $timkiem_tag= baiviet::where('trangthai',0)->where('tenbai','like','%'.$key.'%')->orWhere('tags','like','%'.$key.'%')->get();

        return view('tag',compact('key','timkiem_tag'));
    }
    public function autocomplete(Request $request) 
    { 
        $data = tailieu::select("ten_tailieu as name","loai_file as loai")->where("ten_tailieu","LIKE","%{$request->input('query')}%")->get(); 
        return response()->json($data); 
    } 
    public function mangluoi(){
        return view('mangluoi');
    }
    public function dauan(){
        return view('dauan');
    }
    public function cauhoi(){
        return view('cauhoi');
    }
    public function chinhsach(){
        return view('chinhsach');
    }
    public function dieukhoan(){
        return view('dieukhoan');
    }
    public function giaithuong(){
        $vang=giaithuong::where('phanloai_id',1)->get();
        $bac=giaithuong::where('phanloai_id',2)->get();
        $dong=giaithuong::where('phanloai_id',3)->get();
        $trongnuoc=giaithuong::where('phanloai_id',0)->get();
        return view('giaithuong',compact('vang','bac','dong','trongnuoc'));
    }

    public function post_dangnhap(Request $request){
       
        $arr=[
            'tendangnhap'=>$request->tendangnhap,
            'password'=>$request->password
        ];

        if(Auth::guard('khachhang')->attempt($arr))
        {
            return redirect('/home');
        }
        else{
            return redirect('/dangnhap');

        }
  
    }
    public function get_dangky()
    {
        return view('regis_kh');
  
    }
    public function lienhe()
    {
        return view('lienhe');
  
    }

    public function video()
    {
        return view('video');
  
    }
    public function baiviet()
    {
        return view('baiviet');
  
    }

    public function post_thongtin(Request $request)
    {
       
        $data=new thongtin;
        $data->hoten=$request->hoten;
        $data->sdt=$request->sdt;
        $data->diachi=$request->diachi;
        $data->email=$request->email;
        $data->hinhthuc=$request->hinhthuc;
        $data->sanpham_id=$request->sanpham_id;
        $data->yeucau_id=$request->yeucau_id;
        $data->noidung=$request->noidung;

        if($data->save()){
            return view('completed');
        }
  
    }
    public function post_lienhe_chuyendoi(Request $request)
    {
       
        $data=new lienhe_chuyendoi;
        $data->hoten_lienhe=$request->hoten_lienhe;
        $data->sdt_lienhe=$request->sdt_lienhe;
        $data->email_lienhe=$request->email_lienhe;
        $data->congty_lienhe=$request->congty_lienhe;
        $data->linhvuc_lienhe=$request->linhvuc_lienhe;
        $data->chitiet=$request->chitiet;
        $data->trangthai_id=0;

        if($data->save()){
            return view('completed');
        }
  
    }
    public function post_cauhoi(Request $request)
    {
       
        $data=new cauhoi;
        $data->hoten=$request->hoten;
        $data->sdt=$request->sdt;
        $data->diachi=$request->diachi;
        $data->email=$request->email;
        $data->cauhoi=$request->cauhoi;
        $data->traloi=$request->traloi;

        if($data->save()){
            return view('completed');
        }
  
    }

    public function post_binhluan(Request $request)
    {
       
        $data=new binhluan;
        $data->hoten=$request->hoten;
        $data->avatar_id=$request->avatar_id;
        $data->noidung=$request->noidung;
        $data->baiviet_id=$request->baiviet_id;

        if($data->save()){
            return redirect()->route('home.chitietbai', ['id'=>$request->baiviet_id]);
        }
  
    }

    public function edit($id)
    {
        $gioitinh=gioitinh::all();
        $data=khachhang::find($id);
        return view('edit',compact('data','gioitinh'));  
        
    }
    public function update(Request $request, $id)
    {
        $data=khachhang::find($id);
        $data->hovaten=$request->hovaten;
        $data->gioitinh_id=$request->gioitinh_id;
        $data->ngaysinh=$request->ngaysinh;
        $data->diachi=$request->diachi;
        $data->sdt=$request->sdt;
        $data->cmnd=$request->cmnd;
        $data->tendangnhap=$request->tendangnhap;
        $data->email=$request->email;
       if($data->save()) {
           return redirect('/home');
       }
    }
    
    public function getDatHangDemo()
    {
        // Thêm Đơn hàng demo
        $dathang = dathang::create([
        'khachhang_id' => Auth::user()->id,
        'dienthoaigiaohang' => '0939011900',
        'diachigiaohang' => '18 Ung Văn Khiêm - TP. Long Xuyên - An Giang',
        ]);
        
        // Thêm Đơn hàng chi tiết demo
        dathang_chitiet::create([
        'dathang_id' => $dathang->id,
        'sanpham_id' => 2,
        'soluong' => 1,
        'dongia' => 5990000,
        ]);
        
        dathang_chitiet::create([
        'dathang_id' => $dathang->id,
        'sanpham_id' => 142,
        'soluong' => 1,
        'dongia' => 350000,
        ]);
        
        // Gởi email
        Mail::to(Auth::guard('khachhang')->user()->email)->send(new dathang_email($dathang));
        
        return redirect()->route('completed');
    }
}
