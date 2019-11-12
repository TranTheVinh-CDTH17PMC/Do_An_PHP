<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CauHinhTroGiup;
class CauHinhTroGiupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cauhinhtrogiup = DB::table('cau_hinh_tro_giup')->whereNull('deleted_at')->get();
        return view('ds_cauhinhtrogiup',compact('cauhinhtrogiup'));
    }

     public function restore_ds()
    {
         $cauhinhtrogiup=DB::table('cau_hinh_tro_giup')->whereNotNull('deleted_at')->get();
        return view('ds_cauhinhtrogiup_delete',compact('cauhinhtrogiup'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-cau-hinh-tro-giup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->loai_tro_giup==""|| $request->thu_tu=="" || $request->credit=="" )
        {
            return redirect('ds_cauhinhtrogiup/them-moi-cau-hinh-tro-giup')->with('error','Vui lòng không để trống');
        }
        
        else
        {
       
            $cauhinhtrogiup = new CauHinhTroGiup;
            $cauhinhtrogiup->loai_tro_giup=$request->loai_tro_giup;
            $cauhinhtrogiup->thu_tu=$request->thu_tu;
            $cauhinhtrogiup->credit=$request->credit;
            $cauhinhtrogiup->save();
            $request->session()->flash('status', 'Thêm cấu hình thành công!');
            return redirect('ds_cauhinhtrogiup');
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
        $cauhinhtrogiup=CauHinhTroGiup::findOrFail($id);
        $pageName='cauhinhtrogiup-update';
        return view('chinhsua-cauhinhtrogiup',compact('cauhinhtrogiup','pageName'));
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
        $cauhinhtrogiup=CauHinhTroGiup::find($id);
        $cauhinhtrogiup->loai_tro_giup=$request->loai_tro_giup;
        $cauhinhtrogiup->thu_tu=$request->thu_tu;
        $cauhinhtrogiup->credit=$request->credit;
        $cauhinhtrogiup->save();
        return redirect('ds_cauhinhtrogiup')->with('success','Đăng kí thàng công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CauHinhTroGiup::where('id', $id)->delete();
       return redirect('ds_cauhinhtrogiup')->with('success','Xóa thàng công');
    }
    public function restore1($id)
    {
       CauHinhTroGiup::withTrashed()
        ->where('id', $id)
        ->restore();
       return redirect('ds_cauhinhtrogiup/ds_cauhinhtrogiup_delete')->with('success','restore thàng công');
    }
}
