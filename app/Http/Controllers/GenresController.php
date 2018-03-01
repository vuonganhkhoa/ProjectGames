<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameGenre;
use App\Functions;

class GenresController extends Controller
{
    public function getDanhSach(){
    	$genres = GameGenre::all();
    	return view('admin.pages.game-genre.danhsach', compact('genres'));
    }

    public function getThem(){
    	return view('admin.pages.game-genre.them');
    }
    public function postThem(Request $request){
    	$this->validate($request,[
    		'TheLoaiGame' => 'required|unique:game_genres,name',
    		'GhiChu' => 'required',
    	], 
    	[
    		'TheLoaiGame.required'=>'Thể loại game không được để trống.',
            'TheLoaiGame.unique'=>'Thể loại game đã có trong cơ sở dữ liệu.',
    		'GhiChu.required'=>'Bạn cần nhập ghi chú.',
    	]);
    	
    	$f = new Functions;

    	$genre = new GameGenre;
    	$genre->name = $request->TheLoaiGame;
    	$genre->url  = $f->changeTitle($request->TheLoaiGame);
    	$genre->note = $request->GhiChu;
    	$genre->save();

    	return redirect()->route('DanhSachTheLoai')->with('success', 'Thêm thể loại thành công.');
    }

    public function getXoa($id){
    	$genre = GameGenre::find($id);
    	$genre->delete();
    	return redirect()->back()->with('success', 'Xóa thể loại thành công.');
    }

    public function getSua($id){
    	$genre = GameGenre::find($id);
    	return view('admin.pages.game-genre.sua', compact('genre'));
    }
    public function postSua($id, Request $request){
    	$this->validate($request,[
    		'TheLoaiGame' => 'required',
    		'GhiChu' => 'required',
    	], 
    	[
    		'TheLoaiGame.required'=>'Thể loại game không được để trống.',
    		'GhiChu.required'=>'Bạn cần nhập ghi chú.',
    	]);

    	$f = new Functions;

    	$genre = GameGenre::find($id);
    	$genre->name = $request->TheLoaiGame;
    	$genre->url  = $f->changeTitle($request->TheLoaiGame);
    	$genre->note = $request->GhiChu;
    	$genre->save();

    	return redirect()->route('DanhSachTheLoai')->with('success', 'Cập nhật thể loại thành công.');
    }
}
