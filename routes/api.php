<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('nguoi-choi','API\NguoiChoiController@LayDanhSach');
Route::get('linh-vuc','API\LinhVucController@LayDanhSach');
Route::get('cau-hoi','API\CauHoiController@LayCauHoi');
Route::post('nguoi-choi/them-nguoi-choi','API\NguoiChoiController@store');
Route::post('luot-choi/them-luot-choi','API\LuotChoiController@store');
Route::get('luot-choi/lay-luot-choi','API\LuotChoiController@LayLuotChoi');
Route::post('chi-tiet-luot-choi/them-chi-tiet-luot-choi','API\ChiTietLuotChoiController@store');
Route::get('credit','API\Creditcontroller@LayDanhSach');
Route::post('nguoi-choi/cap-nhat-credit','API\NguoiChoiController@CapNhatCreditNguoiChoi');
Route::post('lich-su-mua-credit/them-moi','API\LichSuMuaCreditController@ThemLichSuMua');
