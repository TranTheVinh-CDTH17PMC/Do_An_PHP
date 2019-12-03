<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CauHoi;
use App\linhVuc;
class CauHoiController extends Controller
{
    public function LayCauHoi(Request $request){
        
        $linhvucid=$request->query('linh_vuc');
        $cauhoi=CauHoi::where('linh_vuc_id',$linhvucid)->get();
        $result=[
        	'success'=>true,
        	'data'=>$cauhoi
        ];
        return response()->json($result); 
    }
}
