<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\NguoiChoi;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function LayDanhSach(){
        $dsnguoichoi=NguoiChoi::all();
        $result=[
            'success'=>true,
            'data'=>$dsnguoichoi
        ];
        return response()->json($result);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nguoichoi=new NguoiChoi;
        $nguoichoi->ten_dang_nhap=$request->ten_dang_nhap;
        $nguoichoi->mat_khau=Hash::make($request->mat_khau);
        $nguoichoi->email=$request->email;
         $file=$request->hinh_dai_dien;
        $filename=$file->getClientOriginalName();
        $file->move('img/',$filename);
        $nguoichoi->hinh_dai_dien=$filename;      
        $nguoichoi->diem_cao_nhat=$request->diem_cao_nhat;
        $nguoichoi->credit=$request->credit;
        $nguoichoi->save();
        return response()->json();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dsnguoichoi=NguoiChoi::findOrFail($id);
        $result=[
            'success'=>true,
            'data'=>$dsnguoichoi
        ];
        return response()->json($result);
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
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
