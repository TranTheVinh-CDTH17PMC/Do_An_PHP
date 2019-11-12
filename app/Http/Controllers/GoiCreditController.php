<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\GoiCredit;
class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goiCredits = DB::table('goi_credit')->get();
        return view('ds_goicredit',compact('goiCredits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-goi-credit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ten_goi==""|| $request->credit=="" || $request->so_tien=="" )
        {
            return redirect('ds_goicredit/them-moi-goi-credit')->with('error','Vui lòng không để trống');
        }
        else
        {
       
            $goiCredits = new GoiCredit;
            $goiCredits->ten_goi=$request->ten_goi;
            $goiCredits->credit=$request->credit;
            $goiCredits->so_tien=$request->so_tien;
            $goiCredits->save();
            $request->session()->flash('status', 'Thêm gói credit thành công!');
            return redirect('ds_goicredit');
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
        $goiCredits=GoiCredit::findOrFail($id);
        $pageName='goi_credit-update';
        return view('chinhsua-goicredit',compact('goiCredits','pageName'));
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
        $goiCredits=GoiCredit::find($id);
        $goiCredits->ten_goi=$request->ten_goi;
        $goiCredits->credit=$request->credit;
        $goiCredits->so_tien=$request->so_tien;
        $goiCredits->save();
        return redirect('ds_goicredit')->with('success','Đăng kí thàng công');
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
