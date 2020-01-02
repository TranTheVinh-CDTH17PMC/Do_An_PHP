<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ChiTietLuotChoi;


class ChiTietLuotChoiController extends Controller
{
   public function store(Request $request)
   {
   	$chitietluotchoi= new ChiTietLuotChoi;
   	$chitietluotchoi->luot_choi_id=$request->luot_choi_id;
   	$chitietluotchoi->cau_hoi_id=$request->cau_hoi_id;
   	$chitietluotchoi->phuong_an=$request->phuong_an;
   	$chitietluotchoi->diem=$request->diem;
   	$chitietluotchoi->save();
    return response()->json();
   }
    public function LayChiTietTheoLuotChoi(Request $request)
    {

        $luotchoi_id=$request->query('luotchoi_id');
        $luotchoi=ChiTietLuotChoi::where('luot_choi_id',$luotchoi_id)->get();
        $result=[
            'success'=>true,
            'data'=>$luotchoi
        ];
        return response()->json($result); 
    }


}
