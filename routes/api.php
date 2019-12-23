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

Route::get('linh-vuc','API\LinhVucController@LayDanhSach');
Route::get('nguoi-choi','API\NguoiChoiController@LayDanhSach');
Route::get('cau-hoi','API\CauHoiController@LayCauHoi');
Route::get('luot-choi-ds','API\NguoiChoiController@LayDSLichSu');

Route::post('nguoi-choi/chinhsua-nguoichoi/{id}','API\NguoiChoiController@update');
Route::post('nguoi-choi/quen-mat-khau/{id}','API\NguoiChoiController@updatemk');
Route::post('nguoi-choi/update-diem/{id}','API\NguoiChoiController@updatediem');

Route::post('nguoi-choi/them-nguoi-choi','API\NguoiChoiController@store');
Route::post('luot-choi/them-luot-choi','API\LuotChoiController@store');