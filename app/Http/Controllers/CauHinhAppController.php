<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CauHinhApp;
class CauHinhAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $cauhinhapp = DB::table('cau_hinh_app')->whereNull('deleted_at')->get();
        return view('ds_cauhinhapp',compact('cauhinhapp'));
    }

     public function restore_ds()
    {
         $cauhinhapp=DB::table('cau_hinh_app')->whereNotNull('deleted_at')->get();
        return view('ds_cauhinhapp_delete',compact('cauhinhapp'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-cau-hinh-app');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->co_hoi_sai=="" || $request->thoi_gian_tra_loi=="")
        {
            return redirect('ds_cauhinhapp/them-moi-cau-hinh-app')->with('error','Vui lòng không để trống');
        }
        else
        {
       
            $cauhinhapp = new CauHinhApp;
            $cauhinhapp->co_hoi_sai=$request->co_hoi_sai;
            $cauhinhapp->thoi_gian_tra_loi=$request->thoi_gian_tra_loi;
            $cauhinhapp->save();
            $request->session()->flash('status', 'Thêm cấu hình thành công!');
            return redirect('ds_cauhinhapp');
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
        $cauhinhapp=CauHinhApp::findOrFail($id);
        $pageName='cauhinhapp-update';
        return view('chinhsua-cauhinhapp',compact('cauhinhapp','pageName'));
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
        if($request->co_hoi_sai=="" || $request->thoi_gian_tra_loi=="")
        {
            return redirect('ds_cauhinhapp/chinhsua-cauhinhapp/'.$id.'')->with('error','Vui lòng không để trống');
        }
        else
        {
            $cauhinhapp=CauHinhApp::find($id);
            $cauhinhapp->co_hoi_sai=$request->co_hoi_sai;
            $cauhinhapp->thoi_gian_tra_loi=$request->thoi_gian_tra_loi;
            $cauhinhapp->save();
            return redirect('ds_cauhinhapp')->with('success','Đăng kí thàng công');
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
        CauHinhApp::where('id', $id)->delete();
       return redirect('ds_cauhinhapp')->with('success','Xóa thàng công');
    }
     public function restore1($id)
    {
       CauHinhApp::withTrashed()
        ->where('id', $id)
        ->restore();
       return redirect('ds_cauhinhapp/ds_cauhinhapp_delete')->with('success','restore thàng công');
    }
}
