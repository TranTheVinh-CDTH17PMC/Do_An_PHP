<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LuotChoi;
use App\NguoiChoi;

class LuotChoiController extends Controller
{
    public function LayLuotChoi(Request $request)
    {
        $nguoichoi_id=$request->query('nguoichoi_id');
        $luotchoi=LuotChoi::where('nguoi_choi_id',$nguoichoi_id)->get();
        $result=[
            'success'=>true,
            'data'=>$luotchoi
        ];
        return response()->json($result); 
    }
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
