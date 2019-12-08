<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LuotChoi;

class LuotChoiController extends Controller
{
    public function store(Request $request)
    {
        $luotchoi= new LuotChoi;
        $luotchoi->nguoi_choi_id=$request->nguoi_choi_id;
        $luotchoi->so_cau=$request->so_cau;
        $luotchoi->diem=$request->diem;
        $luotchoi->ngay_gio=$request->ngay_gio;
        $luotchoi->save();
        return response()->json();
    }
}
