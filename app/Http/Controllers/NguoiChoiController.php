<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\NguoiChoi;
use App\Http\Request\NguoiChoiRequest;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $nguoichoi=DB::table('nguoi_choi')->whereNull('deleted_at')->get();
        return view('ds_nguoichoi',compact('nguoichoi'));
    }
    public function restore_ds()
    {
        $nguoichoi=DB::table('nguoi_choi')->whereNotNull('deleted_at')->get();
        return view('ds_nguoichoi_delete',compact('nguoichoi'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('them-moi-nguoi-choi');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $request->ten_dang_nhap =="" ||  $request->mat_khau == "" ||  $request->email== "" ||  $request->hinh_dai_dien=="" || $request->diem_cao_nhat=="" || $request->credit=="")
        {
            return redirect('ds_nguoichoi/them-moi-nguoi-choi')->with('error','Vui lòng không để trống');
        }
        else
        {
        $nguoichoi = new NguoiChoi;
        $nguoichoi->ten_dang_nhap=$request->ten_dang_nhap;
        $nguoichoi->mat_khau=$request->mat_khau;
        $nguoichoi->email=$request->email;
        $nguoichoi->hinh_dai_dien=$request->hinh_dai_dien;
        $nguoichoi->diem_cao_nhat=$request->diem_cao_nhat;
        $nguoichoi->credit=$request->credit;
        $nguoichoi->save();
        return redirect('ds_nguoichoi/them-moi-nguoi-choi')->with('success','Đăng kí thàng công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nguoichoi=NguoiChoi::findOrFail($id);
        $pageName='nguoichoi-update';
        return view('chinhsua-nguoichoi',compact('nguoichoi','pageName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nguoichoi = NguoiChoi::find($id);
        $nguoichoi->ten_dang_nhap=$request->ten_dang_nhap;
        $nguoichoi->mat_khau=$request->mat_khau;
        $nguoichoi->email=$request->email;
        $nguoichoi->hinh_dai_dien=$request->hinh_dai_dien;
        $nguoichoi->diem_cao_nhat=$request->diem_cao_nhat;
        $nguoichoi->credit=$request->credit;
        $nguoichoi->save();
        return redirect('ds_nguoichoi/them-moi-nguoi-choi')->with('success','Đăng kí thàng công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NguoiChoi::where('id', $id)->delete();
       return redirect('ds_nguoichoi')->with('success','Xóa thàng công');
    }
     public function restore1($id)
    {
       NguoiChoi::withTrashed()
        ->where('id', $id)
        ->restore();
       return redirect('ds_nguoichoi/ds_nguoichoi_delete')->with('success','restore thàng công');
    }
}
