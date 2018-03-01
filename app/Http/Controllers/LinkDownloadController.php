<?php

namespace App\Http\Controllers;
use App\LinkDownload;
use App\Game;

use Illuminate\Http\Request;

class LinkDownloadController extends Controller
{
    public function getDanhSach(){
    	$links = LinkDownload::with('game')->orderBy('id', 'DESC')->get();
    	return view('admin.pages.link-download.danhsach', compact('links'));
    }

    public function getThem(){
    	$games = Game::all();
    	return view('admin.pages.link-download.them', compact('games'));
    }
    public function postThem(Request $request){
    	$this->validate($request,[
    		'TenGame' => 'required',
    		'GhiChu' => 'required',
    		'TinhTrang' => 'required',
    		'LinkDownload' => 'required',
    	], 
    	[
    		'TenGame.required'=>'Tên game không được để trống.',
    		'GhiChu.required'=>'Bạn cần nhập ghi chú.',
    		'TinhTrang.required'=>'Tình trạng không được để trống.',
    		'LinkDownload.required'=>'Bạn cần nhập Link Download.',
    	]);

    	$link = new LinkDownload;
    	$link->game_id = $request->TenGame;
    	$link->link = $request->LinkDownload;
    	$link->note = $request->GhiChu;
    	$link->status = $request->TinhTrang;
    	$link->save();

    	return redirect()->route('DanhSachLinkDownload')->with('success', 'Thêm link thành công.');
    	
    }

    public function getXoa($id){
    	$link = LinkDownload::find($id);
    	$link->delete();
    	return redirect()->back()->with('success', 'Xóa link thành công.');
    }

    public function getSua($id){	
    	$link = LinkDownload::find($id);
    	$games = Game::all();
    	return view('admin.pages.link-download.sua', compact('link', 'games'));
    }
    public function postSua($id, Request $request){
    	$this->validate($request,[
    		'TenGame' => 'required',
    		'GhiChu' => 'required',
    		'TinhTrang' => 'required',
    		'LinkDownload' => 'required',
    	], 
    	[
    		'TenGame.required'=>'Tên game không được để trống.',
    		'GhiChu.required'=>'Bạn cần nhập ghi chú.',
    		'TinhTrang.required'=>'Tình trạng không được để trống.',
    		'LinkDownload.required'=>'Bạn cần nhập Link Download.',
    	]);

    	$link = LinkDownload::find($id);
    	$link->game_id = $request->TenGame;
    	$link->link = $request->LinkDownload;
    	$link->note = $request->GhiChu;
    	$link->status = $request->TinhTrang;
    	$link->save();

    	return redirect()->route('DanhSachLinkDownload')->with('success', 'Cập nhật link thành công.');
    }
}
