<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LuotChoi;
use App\NguoiChoi;
use App\Http\Request\LuotChoiRequest;

class LuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nguoichoi = NguoiChoi::all();
        $luotchoi=DB::table('luot_choi')->whereNull('deleted_at')->get();
        return view('ds_luotchoi',compact('luotchoi'));
    }
    public function restore_ds()
    {
         $luotchoi=DB::table('luot_choi')->whereNotNull('deleted_at')->get();
        return view('ds_luotchoi_delete',compact('luotchoi'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nguoichoi = NguoiChoi::all();
        return view('them-moi-luot-choi',compact('nguoichoi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->nguoi_choi_id =="" || $request->so_cau == "" || $request->diem== "" ||  $request->ngay_gio=="")
        {
            return redirect('ds_luotchoi/them-moi-luot-choi')->with('error','Vui lòng không để trống');
        }
        else
        {
            $luotchoi=new LuotChoi;
            $luotchoi->nguoi_choi_id=$request->nguoi_choi_id;
            $luotchoi->so_cau=$request->so_cau;
            $luotchoi->diem=$request->diem;
            $luotchoi->ngay_gio=$request->ngay_gio;
            $luotchoi->save();
             $request->session()->flash('themmoi', 'Thêm câu hỏi thành công!');
            return redirect('ds_luotchoi/them-moi-luot-choi')->with('success','Đăng kí thàng công');
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
        $luotchoi=LuotChoi::findOrFail($id);
        $nguoichoi = NguoiChoi::all();
        return view('chinhsua-luotchoi',compact('luotchoi','nguoichoi'));
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
        if($request->nguoi_choi_id =="" || $request->so_cau == "" || $request->diem== "" ||  $request->ngay_gio=="")
        {
            return redirect('ds_luotchoi')->with('error','Vui lòng không để trống');
        }
        else
        {
            $luotchoi=new LuotChoi;
            $luotchoi->nguoi_choi_id=$request->nguoi_choi_id;
            $luotchoi->so_cau=$request->so_cau;
            $luotchoi->diem=$request->diem;
            $luotchoi->ngay_gio=$request->ngay_gio;
            $luotchoi->save();
            $request->session()->flash('chinhsua', 'Thêm câu hỏi thành công!');
            return redirect('ds_luotchoi')->with('success','Đăng kí thàng công');
        }
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LuotChoi::where('id', $id)->delete();
       return redirect('ds_luotchoi')->with('success','Xóa thàng công');
    }
     public function restore1($id)
    {
       LuotChoi::withTrashed()
        ->where('id', $id)
        ->restore();
       return redirect('ds_luotchoi/ds_luotchoi_delete')->with('success','restore thàng công');
    }
}
