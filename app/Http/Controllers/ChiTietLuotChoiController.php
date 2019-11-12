<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ChiTietLuotChoi;
use App\LuotChoi;
use App\CauHoi;


class ChiTietLuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chitietluotchoi=DB::table('chi_tiet_luot_choi')->whereNull('deleted_at')->get();
        return view('ds_chitietluotchoi',compact('chitietluotchoi'));
    }

    public function restore_ds()
    {
        $chitietluotchoi=DB::table('chi_tiet_luot_choi')->whereNotNull('deleted_at')->get();
        return view('ds_chitietluotchoi_delete',compact('chitietluotchoi'));
    }
    public function khoi_phuc($id)
    {
       ChiTietLuotChoi::withTrashed()
        ->where('id',$id)
        ->restore();
       return redirect('ds_chitietluotchoi')->with('success','restore thàng công');
    }
    public function xoa_luon($id)
    {
        ChiTietLuotChoi::where('id',$id)->forceDelete();
         return view('ds_chitietluotchoi_delete')->with('success','Yêu cầu đã được giải quyết');
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
         if($request->luot_choi_id=="" ||$request->cau_hoi_id==""||$request->phuong_an==""||$request->diem=="")
        {
            return redirect()->route('ds_chitietluotchoi.ds_chitietluotchoi.them-moi-chi-tiet-choi')->with('error','Lỗi');
        }
        elseif ( is_int($request->diem)==false) {
           return redirect()->route('ds_chitietluotchoi.ds_chitietluotchoi.them-moi-chi-tiet-choi')->with('notint','Lỗi');
        }
        else
        {
            $chitietluotchoi=new ChiTietLuotChoi;
            $chitietluotchoi->luot_choi_id=$request->luot_choi_id;
            $chitietluotchoi->cau_hoi_id=$request->cau_hoi_id;
            $chitietluotchoi->phuong_an=$request->phuong_an;
            $chitietluotchoi->diem=$request->diem;
            $chitietluotchoi->save();
            $request->session()->flash('status', 'Thêm câu hỏi thành công!');
            return redirect()->route('ds_chitietluotchoi.ds_chitietluotchoi.them-moi-chi-tiet-choi')->with('success','Đăng kí thàng công');
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
        $chitietluotchoi=ChiTietLuotChoi::findOrFail($id);
        $cauhoi=CauHoi::all();
        $luotchoi=LuotChoi::all();
        return view('chinhsua-chitietluotchoi',compact('chitietluotchoi','cauhoi','luotchoi'));
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
       ChiTietLuotChoi::where('id',$id)->delete();
       return redirect('ds_chitietluotchoi')->with('success','Xóa thàng công'); 
    }


}
