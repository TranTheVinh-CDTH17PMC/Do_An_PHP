<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ChiTietLuotChoi;


class ChiTietLuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chitietluotchoi=DB::table('chi_tiet_luot_choi')->get();
        return view('ds_chitietluotchoi',compact('chitietluotchoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('them-moi-chi-tiet-luot-choi');
      
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
            $chitietluotchoi=new ChiTietLuotChoi;
            $chitietluotchoi->luot_choi_id=$request->luot_choi_id;
            $chitietluotchoi->cau_hoi_id=$request->cau_hoi_id;
            $chitietluotchoi->phuong_an=$request->phuong_an;
            $chitietluotchoi->diem=$request->diem;
            $chitietluotchoi->save();
            $request->session()->flash('status', 'Thêm câu hỏi thành công!');
            return redirect('ds_linhvuc')->with('success','Đăng kí thàng công');
       
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
        $chitietluotchoi=ChiTietLuotChoi::findOrFail($id);
        return view('chinhsua-chitietluotchoi',compact('chitietluotchoi'));
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

            $chitietluotchoi=ChiTietLuotChoi::find($id);
            $chitietluotchoi->luot_choi_id=$request->luot_choi_id;
            $chitietluotchoi->cau_hoi_id=$request->cau_hoi_id;
            $chitietluotchoi->phuong_an=$request->phuong_an;
            $chitietluotchoi->diem=$request->diem;
            $chitietluotchoi->save();
            return redirect('ds_chitietluotchoi');
       
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
