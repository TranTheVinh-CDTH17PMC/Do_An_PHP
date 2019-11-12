<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('dang_nhap','QuanTriVienController@dangnhap')->name('dang_nhap');
Route::get('/','QuanTriVienController@getadmin')->name('getadmin');
Route::post('dang_nhap','QuanTriVienController@xulidangnhap')->name('xuli-dangnhap');
Route::get('test','QuanTriVienController@layid');
Route::get('dang_xuat','QuanTriVienController@dangXuat')->name('dang_xuat');


Route::middleware('auth')->group(function(){
	Route::get('/', function () {
    	return view('mater');
	})->name('trangchu');
Route::prefix('ds_linhvuc')->group(function(){
	Route::name('ds_linhvuc.')->group(function(){
		Route::get( '/','LinhvucController@index')->name('danh-sach');

		

		Route::get( '/ds_linhvuc_delete','LinhvucController@restore_ds')->name('danh-sach-xoa');

		Route::get('/them-moi-linh-vuc','LinhVucController@create')->name('ds_linhvuc.them-moi-linh-vuc');
		
		Route::post('/them-moi-linh-vuc','LinhVucController@store')->name('ds_linhvuc.xl-them-moi-linh-vuc');

		Route::post('/chinhsua-linhvuc/{id}','LinhVucController@update')->name('ds_linhvuc.xac-nhan-xu-li-sua-linh-vuc');

		Route::get('/chinhsua-linhvuc/{id}', 'LinhVucController@edit')->name('ds_linhvuc.xulisua');

		Route::delete('/xoa/{id}','LinhVucController@destroy')->name('xoa');

		

		Route::delete('ds_linhvuc_delete/luulai/{id}','LinhVucController@restore1')->name('luulai');
	});
	
});

Route::prefix('ds_cauhoi')->group(function(){
	Route::name('ds_cauhoi.')->group(function(){
		Route::get( '/','CauHoiController@index')->name('danh-sach');

		Route::get( '/ds_linhvuc_delete','CauHoiController@restore_ds')->name('danh-sach-xoa');

		Route::get('/them-moi-cau-hoi','CauHoiController@create')->name('ds_cauhoi.them-moi-cau-hoi');
		
		Route::post('/them-moi-cau-hoi','CauHoiController@store')->name('ds_cauhoi.xl-them-moi-cau-hoi');

		Route::get('/chinhsua-cauhoi/{id}','CauHoiController@edit')->name('ds_cauhoi.cs-them-moi-cau-hoi');

		Route::post('/chinhsua-cauhoi/{id}', 'CauHoiController@update')->name('xulisua');

		Route::delete('/xoa/{id}','CauHoiController@destroy')->name('xoa');

		Route::delete('ds_cauhoi_delete/luulai/{id}','CauHoiController@restore1')->name('luulai');

	});
	
});
Route::prefix('ds_luotchoi')->group(function(){
	Route::name('ds_luotchoi.')->group(function(){
		Route::get( '/','LuotChoiController@index')->name('danh-sach');

		Route::get('/them-moi-luot-choi','LuotChoiController@create')->name('ds_luotchoi.them-moi-luot-choi');
		
		Route::post('/them-moi-luot-choi','LuotChoiController@store')->name('ds_luotchoi.xl-them-moi-luot-choi');

		Route::get('/chinhsua-luotchoi/{id}','LuotChoiController@edit')->name('ds_luotchoi.cs-them-moi-luot-choi');

		Route::post('/chinhsua-luotchoi/{id}', 'LuotChoiController@update')->name('xulisua'); 

	});
	
});
Route::prefix('ds_nguoichoi')->group(function(){
	Route::name('ds_nguoichoi.')->group(function(){
		Route::get( '/','NguoiChoiController@index')->name('danh-sach');

		Route::get('/them-moi-nguoi-choi','NguoiChoiController@create')->name('ds_nguoichoi.them-moi-nguoi-choi');
		
		Route::post('/them-moi-nguoi-choi','NguoiChoiController@store')->name('ds_nguoichoi.xl-them-moi-nguoi-choi');

		Route::get('/chinhsua-nguoichoi/{id}','NguoiChoiController@edit')->name('ds_nguoichoi.cs-them-moi-nguoi-choi');

		Route::post('/chinhsua-nguoichoi/{id}', 'NguoiChoiController@update')->name('xulisua'); 


	});
	
});



Route::prefix('ds_chitietluotchoi')->group(function(){
	Route::name('ds_chitietluotchoi.')->group(function(){
		Route::get( '/','ChiTietLuotChoiController@index')->name('danh-sach');

		Route::get('/them-moi-chi-tiet-luot-choi','ChiTietLuotChoiController@create')->name('ds_chitietluotchoi.them-moi-chi-tiet-choi');
		
		Route::post('/them-moi-chi-tiet-luot-choi','ChiTietLuotChoiController@store')->name('ds_chitietluotchoi.xl-them-moi-chi-tiet-luot-choi');

		Route::get('/chinhsua-chitietluotchoi/{id}','ChiTietLuotChoiController@edit')->name('ds_chitietluotchoi.chinh-sua-chi-tiet-luot-choi');

		Route::post('/chinhsua-chitietluotchoi/{id}', 'ChiTietLuotChoiController@update')->name('xulisua'); 


		Route::delete('/ds_chitietluotchoi/xoa/{id}','ChiTietLuotChoiController@destroy')->name('xoa');

		Route::delete('/ds_linhvuc_delete/{id}','ChiTietLuotChoiController@xoa_luon')->name('xoaluon');


        Route::get( '/ds_chitietluotchoi_delete','ChiTietLuotChoiController@restore_ds')->name('danh-sach-xoa');
		Route::delete('ds_chitietluotchoi_delete/khoiphuc/{id}','ChiTietLuotChoiController@khoi_phuc')->name('khoi-phuc');
        

	});
	
});
Route::prefix('ds_goicredit')->group(function(){
	Route::name('ds_goicredit.')->group(function(){
		Route::get( '/','GoiCreditController@index')->name('danh-sach');

		Route::get('/them-moi-goi-credit','GoiCreditController@create')->name('ds_goicredit.them-moi-goi-credit');
		
		Route::post('/them-moi-goi-credit','GoiCreditController@store')->name('ds_goicredit.xl-them-moi-goi-credit');

	});
	
});
});




