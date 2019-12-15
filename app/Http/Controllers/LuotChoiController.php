<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LuotChoi;
use App\ChiTietLuotChoi;

use App\Http\Request\LuotChoiRequest;

class LuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $luotchoi=DB::table('luot_choi')->whereNull('deleted_at')->get();
        return view('ds_luotchoi',compact('luotchoi'));
    }
    public function XemChiTietTheoIDLuotChoi($id)
    {    $luot_choi=LuotChoi::find($id);
         $chitietluotchoi=ChiTietLuotChoi::where('luot_choi_id',$luot_choi->id)->get();
        return view('ds_chitietluotchoi',compact('chitietluotchoi'));
    }
      public function destroy($id)
    {  
       LuotChoi::where('id', $id)->delete();
       return redirect('ds_luotchoi')->with('success','Xóa thàng công');
    }
      public function restore_ds()
        {
            $luotchoi=DB::table('luot_choi')->whereNotNull('deleted_at')->get();
            return view('ds_luotchoi_delete',compact('luotchoi'));
        }
         public function restore1($id)
        {
           LuotChoi::withTrashed()
            ->where('id', $id)
            ->restore();
           return redirect('ds_luotchoi')->with('success','restore thàng công');
        }
    
}
