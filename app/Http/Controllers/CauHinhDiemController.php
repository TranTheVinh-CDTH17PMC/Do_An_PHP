<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\CauHinhDiemCauHoi;
class CauHinhDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cauhinhdiem = DB::table('cau_hinh_diem_cau_hoi')->whereNull('deleted_at')->get();
        return view('ds_cauhinhdiem',compact('cauhinhdiem'));

    }

     public function restore_ds()
    {
        $cauhinhdiem=DB::table('cau_hinh_diem_cau_hoi')->whereNotNull('deleted_at')->get();
        return view('ds_cauhinhdiem_delete',compact('cauhinhdiem'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-cau-hinh-diem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->thu_tu==""|| $request->diem=="" )
        {
            return redirect('ds_cauhinhdiem/them-moi-cau-hinh-diem')->with('error','Vui lòng không để trống');
        }
        
        else
        {
       
            $cauhinhdiem = new CauHinhDiemCauHoi;
            $cauhinhdiem->thu_tu=$request->thu_tu;
            $cauhinhdiem->diem=$request->diem;
            $cauhinhdiem->save();
            $request->session()->flash('status', 'Thêm cấu hình thành công!');
            return redirect('ds_cauhinhdiem');
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
        $cauhinhdiem=CauHinhDiemCauHoi::findOrFail($id);
        $pageName='cauhinhdiem-update';
        return view('chinhsua-cauhinhdiem',compact('cauhinhdiem','pageName'));
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
         if($request->thu_tu==""|| $request->diem=="" )
        {
            return redirect('ds_cauhinhdiem/them-moi-cau-hinh-diem')->with('error','Vui lòng không để trống');
        }
        
        else
        {
            $cauhinhdiem=CauHinhDiemCauHoi::find($id);
            $cauhinhdiem->thu_tu=$request->thu_tu;
            $cauhinhdiem->diem=$request->diem;
            $cauhinhdiem->save();
            return redirect('ds_cauhinhdiem')->with('success','Đăng kí thàng công');
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
        CauHinhDiemCauHoi::where('id', $id)->delete();
       return redirect('ds_cauhinhdiem')->with('success','Xóa thàng công');
    }
    public function restore1($id)
    {
       CauHinhDiemCauHoi::withTrashed()
        ->where('id', $id)
        ->restore();
       return redirect('ds_cauhinhdiem/ds_cauhinhdiem_delete')->with('success','restore thàng công');
    }
}
