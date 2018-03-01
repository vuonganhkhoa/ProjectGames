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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){

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
});