<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LinhVuc;
class LinhVucController extends Controller
{
    public function LayDanhSach(){
    	$dslinhvuc=LinhVuc::all()->random(4);
    	$result=[
    		'success'=>true,
    		'data'=>$dslinhvuc
    	];
    	return response()->json($result);
    }
}
