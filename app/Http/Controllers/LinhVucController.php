<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LinhVuc;
use App\Http\Request\LinhVucRequest;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linhvuc=DB::table('linh_vuc')->whereNull('deleted_at')->get();
        return view('ds_linhvuc',compact('linhvuc'));
    }
    public function restore_ds()
    {
         $linhvuc=DB::table('linh_vuc')->whereNotNull('deleted_at')->get();
        return view('ds_linhvuc_delete',compact('linhvuc'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-linh-vuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ten_linh_vuc=="")
        {
            return redirect('ds_linhvuc/them-moi-linh-vuc')->with('error','Vui lòng không để trống');
        }
        else
        {
            $linhvuc=new LinhVuc;
            $linhvuc->ten_linh_vuc=$request->ten_linh_vuc;
            $linhvuc->save();
            $request->session()->flash('themmoi', 'Thêm câu hỏi thành công!');
            return redirect('ds_linhvuc')->with('success','Đăng kí thàng công');
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
        $linhvuc=LinhVuc::findOrFail($id);
        $pageName='linhvuc-update';
        return view('chinhsua-linhvuc',compact('linhvuc','pageName'));
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
        if($request->ten_linh_vuc=="")
        {
            return redirect('ds_linhvuc/them-moi-linh-vuc')->with('error','Vui lòng không để trống');
        }
        else
        {
            $linhvuc=LinhVuc::find($id);
            $linhvuc->ten_linh_vuc=$request->ten_linh_vuc;
            $linhvuc->save();
            $request->session()->flash('chinhsua', 'Thêm câu hỏi thành công!');
            return redirect('ds_linhvuc');
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
       LinhVuc::where('id', $id)->delete();
       return redirect('ds_linhvuc')->with('success','Xóa thàng công');
    }

    public function restore1($id)
    {
       LinhVuc::withTrashed()
        ->where('id', $id)
        ->restore();
       return redirect('ds_linhvuc/ds_linhvuc_delete')->with('success','restore thàng công');
    }
}
