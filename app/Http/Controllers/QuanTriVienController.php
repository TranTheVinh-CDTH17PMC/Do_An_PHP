<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{
    protected $redirectTo='trangchu';
    public function dangnhap()
    {
    	return view('login');
    }
    public function getadmin(Request $request)
    {
        $ten_dang_nhap = $request->ten_dang_nhap;
        return $ten_dang_nhap;
    
    }
    public function xulidangnhap(Request $request)
    {
    	$ten_dang_nhap=$request->ten_dang_nhap;

    	$mat_khau=$request->mat_khau;

        if(Auth::attempt(['ten_dang_nhap' => $ten_dang_nhap,'password'=> $mat_khau])){
            

            return redirect()->route('trangchu')->with('ten_dang_nhap',$ten_dang_nhap);
        }
            
         return redirect()->route('dang_nhap')->with('thongbao','Đăng nhập thất bại');
           

    	// $qtv = QuanTriVien::where('ten_dang_nhap',$ten_dang_nhap)->first();
    	// if($qtv == null){
    	// 	return "sai ten dang nhap";
    	// }
    	// if(!Hash::check($mat_khau,$qtv->mat_khau)){
    	// 	return "sai mat khau";
    	// }
    	// return "dang nhap thanh cong";
    }
    public function layid()
    {
        return Auth::user();
    }
    public function dangXuat()
    {
        Auth::logout();
        return redirect()->route('dang_nhap');
    }
}
