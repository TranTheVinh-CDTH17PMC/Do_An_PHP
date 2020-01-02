<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GoiCredit;

class Creditcontroller extends Controller
{
    public function LayDanhSach(){
    	$dscredit=GoiCredit::all();
    	$result=[
    		'success'=>true,
    		'data'=>$dscredit
    	];
    	return response()->json($result);
    }
   
}
