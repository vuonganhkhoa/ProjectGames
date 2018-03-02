<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Functions;

class NewsController extends Controller
{
    public function getDanhSach(){
    	$news = News::orderBy('id', 'DESC')->get();
    	return view('admin.pages.news.danhsach', compact('news'));
    }

    public function getThem(){
    	return view('admin.pages.news.them');
    }
    public function postThem(Request $request){
    	$this->validate($request,[
    		'TuaDe' => 'required|unique:news,title',
    		'TomTat' => 'required',
    		'NoiDung' => 'required',
    		'HinhTin' => 'required|image',
    		'SoLuotXem' => 'required',
    	], 
    	[
    		'TuaDe.required'=>'Tựa đề tin không được để trống.',
            'TuaDe.unique'=>'Tựa đề tin đã có trong cơ sở dữ liệu.',
    		'TomTat.required'=>'Bạn cần nhập tóm tắt.',
    		'NoiDung.required'=>'Bạn cần nhập nội dung.',
    		'HinhTin.required'=>'Bạn chưa chọn hình.',
    		'HinhTin.image'=>'Hình bạn vừa chọn không đúng định dạng.',
    		'SoLuotXem.required'=>'Bạn cần sớ lượt xem.',
    	]);

    	$f = new Functions;

    	$new = new News;
    	$new->title = $request->TuaDe;
    	$new->url = $f->changeTitle($request->TuaDe);
    	$new->description = $request->TomTat;
    	$new->content = $request->NoiDung;
    	$new->view = $request->SoLuotXem;
    	$new->update_at = $request->NgayCapNhat;
    	if($request->hasFile('HinhTin')){
    		$image = $request->file('HinhTin');
    		$image->move('adminAssets/img/hinh_tin/', time().$image->getClientOriginalName());
    		$new->image = time().$image->getClientOriginalName();
    	}
    	else{
    		$new->image = '';
    	}

    	$new->save();

    	return redirect()->route('DanhSachTinTuc')->with('success','Thêm tin tức thành công.');
    }

    public function getXoa($id){
    	$new = News::find($id);
    	$new->delete();
    	return redirect()->back()->with('success','Xóa tin tức thành công.');
    }

    public function getSua($id){
		$new = News::find($id);
		return view('admin.pages.news.sua', compact('new'));
    }
    public function postSua($id, Request $request){
    	$this->validate($request,[
    		'TuaDe' => 'required',
    		'TomTat' => 'required',
    		'NoiDung' => 'required',
    		'HinhTin' => 'image',
    		'SoLuotXem' => 'required',
    	], 
    	[
    		'TuaDe.required'=>'Tựa đề tin không được để trống.',
    		'TomTat.required'=>'Bạn cần nhập tóm tắt.',
    		'NoiDung.required'=>'Bạn cần nhập nội dung.',
    		'HinhTin.image'=>'Hình bạn vừa chọn không đúng định dạng.',
    		'SoLuotXem.required'=>'Bạn cần sớ lượt xem.',
    	]);

    	$f = new Functions;

    	$new = News::find($id);
    	$new->title = $request->TuaDe;
    	$new->url = $f->changeTitle($request->TuaDe);
    	$new->description = $request->TomTat;
    	$new->content = $request->NoiDung;
    	$new->view = $request->SoLuotXem;
    	$new->update_at = $request->NgayCapNhat;
    	if($request->hasFile('HinhTin')){
    		$image = $request->file('HinhTin');
    		$image->move('adminAssets/img/hinh_tin/', time().$image->getClientOriginalName());
    		$new->image = time().$image->getClientOriginalName();
    	}

    	$new->save();

    	return redirect()->route('DanhSachTinTuc')->with('success','Cập nhật tin tức thành công.');
    }
}
