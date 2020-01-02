<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LichSuMuaCredit;

class LichSuMuaCreditController extends Controller
{
     public function ThemLichSuMua(Request $request)
     {
        

        $lsmua = new LichSuMuaCredit;
        $lsmua->nguoi_choi_id=$request->nguoi_choi_id;
        $lsmua->goi_credit_id=$request->goi_credit_id;
        $lsmua->credit=$request->credit;
        $lsmua->so_tien=$request->so_tien;
        $lsmua->save();

     }
}
