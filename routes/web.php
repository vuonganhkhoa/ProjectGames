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
# Frontend
Route::get('/', 'PagesController@getTrangChu')->name('TrangChu');

Route::get('lien-he', 'PagesController@getLienHe')->name('LienHe');
Route::post('lien-he', 'PagesController@postLienHe');

Route::get('tin-tuc', 'PagesController@getTinTuc')->name('TinTuc');
Route::get('tin-tuc/{url}', 'PagesController@getChiTietTinTuc')->name('ChiTietTinTuc');

Route::get('gioi-thieu', 'PagesController@getGioiThieu')->name('GioiThieu');

Route::get('games', 'PagesController@getGames')->name('Games');
Route::get('games/{url}', 'PagesController@getChiTietGames');
Route::get('the-loai/{url}', 'PagesController@getTheLoai');

Route::post('binhluan/{id}', 'PagesController@postBinhLuan');

Route::get('timkiem', 'PagesController@getTimKiem');

# Dang Nhap - Dang Xuat
Route::get('login', 'AdminController@getLogin')->name('DangNhap');
Route::post('login', 'AdminController@postLogin');
Route::get('logout', 'AdminController@getLogout')->name('DangXuat');

# Admin - Backend
Route::group(['prefix'=>'admin', 'middleware'=>'login'],function(){

	Route::get('', 'GamesController@getThongTin')->name('ThongTinAdmin');

    Route::group(['prefix'=>'games'],function(){
    	
    	Route::get('danhsach', 'GamesController@getDanhSach')->name('DanhSachGames');

    	Route::get('them', 'GamesController@getThem')->name('ThemGames');
    	Route::post('them', 'GamesController@postThem');

    	Route::get('xoa/{id}', 'GamesController@getXoa');

    	Route::get('sua/{id}', 'GamesController@getSua');
    	Route::post('sua/{id}', 'GamesController@postSua');
    });

    Route::group(['prefix'=>'genres'],function(){
        
        Route::get('danhsach', 'GenresController@getDanhSach')->name('DanhSachTheLoai');

        Route::get('them', 'GenresController@getThem')->name('ThemTheLoai');
        Route::post('them', 'GenresController@postThem');

        Route::get('xoa/{id}', 'GenresController@getXoa');

        Route::get('sua/{id}', 'GenresController@getSua');
        Route::post('sua/{id}', 'GenresController@postSua');
    });

    Route::group(['prefix'=>'pictures'],function(){
        
        Route::get('danhsach', 'PicturesController@getDanhSach')->name('DanhSachHinh');

        Route::get('them', 'PicturesController@getThem')->name('ThemHinh');
        Route::post('them', 'PicturesController@postThem');

        Route::get('xoa/{id}', 'PicturesController@getXoa');

        Route::get('sua/{id}', 'PicturesController@getSua');
        Route::post('sua/{id}', 'PicturesController@postSua');
    });

    Route::group(['prefix'=>'link-download'],function(){
        
        Route::get('danhsach', 'LinkDownloadController@getDanhSach')->name('DanhSachLinkDownload');

        Route::get('them', 'LinkDownloadController@getThem')->name('ThemLinkDownload');
        Route::post('them', 'LinkDownloadController@postThem');

        Route::get('xoa/{id}', 'LinkDownloadController@getXoa');

        Route::get('sua/{id}', 'LinkDownloadController@getSua');
        Route::post('sua/{id}', 'LinkDownloadController@postSua');
    });

    Route::group(['prefix'=>'news'],function(){
        
        Route::get('danhsach', 'NewsController@getDanhSach')->name('DanhSachTinTuc');

        Route::get('them', 'NewsController@getThem')->name('ThemTinTuc');
        Route::post('them', 'NewsController@postThem');

        Route::get('xoa/{id}', 'NewsController@getXoa');

        Route::get('sua/{id}', 'NewsController@getSua');
        Route::post('sua/{id}', 'NewsController@postSua');
    });

    Route::group(['prefix'=>'users'],function(){
        
        Route::get('danhsach', 'UsersController@getDanhSach')->name('DanhSachNguoiQuanTri');

        Route::get('them', 'UsersController@getThem')->name('ThemNguoiQuanTri');
        Route::post('them', 'UsersController@postThem');

        Route::get('xoa/{id}', 'UsersController@getXoa');

        Route::get('sua/{id}', 'UsersController@getSua');
        Route::post('sua/{id}', 'UsersController@postSua');
    });

    Route::group(['prefix'=>'comments'],function(){
        
        Route::get('danhsach', 'CommentsController@getDanhSach')->name('DanhSachBinhLuan');
        Route::get('xoa/{id}', 'CommentsController@getXoa');
    });
});