<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\GamePicture;

class PicturesController extends Controller
{
    public function getDanhSach(){
    	$picture = GamePicture::with('game')->orderBy('id', 'DESC')->get();
    	return view('admin.pages.game-picture.danhsach', compact('picture'));
    }

    public function getThem(){
    	$games = Game::all();
    	return view('admin.pages.game-picture.them', compact('games'));
    }
    public function postThem(Request $request){
    	$this->validate($request,[
    		'TenGame' => 'required',
    		'HinhGame.*' => 'required|image',
    		'GhiChu' => 'required'
    	], 
    	[
    		'TenGame.required'=>'Thể loại game không được để trống.',
    		'HinhGame.*.required'=>'Bạn cần nhập ghi chú.',
    		'HinhGame.*.image' => 'Hình không đúng định dạng.',
    		'GhiChu.required' => 'Ghi chú không được để trống.'
    	]);

    	if($request->hasFile('HinhGame')){
    		foreach($request->file('HinhGame') as $img){
    			$picture = new GamePicture;
		    	$picture->game_id = $request->TenGame;
		    	$img->move('adminAssets/img/hinh_game/', time().$img->getClientOriginalName());
    			$picture->image =  time().$img->getClientOriginalName();
    			$picture->note = $request->GhiChu;
		    	$picture->save();
    		}
    	}
    	
    	return redirect()->route('DanhSachHinh')->with('success', 'Thêm hình thành công.');
    }

    public function getXoa($id){
    	$picture = GamePicture::find($id);
    	$picture->delete();
    	return redirect()->back()->with('success', 'Xóa hình thành công.');
    }

    public function getSua($id){
    	$picture = GamePicture::find($id);
    	$games = Game::all();
    	return view('admin.pages.game-picture.sua', compact('picture', 'games'));
    }
    public function postSua($id, Request $request){
    	$this->validate($request,[
    		'TenGame' => 'required',
    		'HinhGame.*' => 'image',
    		'GhiChu' => 'required'
    	], 
    	[
    		'TenGame.required'=>'Thể loại game không được để trống.',
    		'HinhGame.*.image' => 'Hình không đúng định dạng.',
    		'GhiChu.required' => 'Ghi chú không được để trống.'
    	]);

    	if($request->hasFile('HinhGame')){
    		foreach($request->file('HinhGame') as $img){
    			$picture = GamePicture::find($id);
		    	$picture->game_id = $request->TenGame;
		    	$img->move('adminAssets/img/hinh_game/', time().$img->getClientOriginalName());
    			$picture->image =  time().$img->getClientOriginalName();
    			$picture->note = $request->GhiChu;
		    	$picture->save();
    		}
    	}
    	
    	return redirect()->route('DanhSachHinh')->with('success', 'Cập nhật hình thành công.');
    }
}
