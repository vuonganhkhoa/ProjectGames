<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\GameComment;

class CommentsController extends Controller
{
    public function getDanhSach(){
    	$comments = GameComment::with('game')->orderBy('id', 'DESC')->get();
    	return view('admin.pages.game-comment.danhsach', compact('comments'));
    }

    public function getXoa($id){
    	$comment = GameComment::find($id);
    	$comment->delete();
    	return redirect()->back()->with('success', 'Xóa bình luận thành công.');
    }
}
