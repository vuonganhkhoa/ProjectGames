<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\News;
use App\GameComment;
use App\GamePicture;
use App\LinkDownload;
use App\GameGenre;

use Mail;

class PagesController extends Controller
{
    public function getTrangChu(){
    	// $game_random = Game::inRandomOrder()->first();
    	$games = Game::orderBy('id', 'DESC')->limit(12)->get();
    	$news = News::orderBy('id', 'DESC')->limit(3)->get();
    	return view('client.pages.home', compact('games', 'news'));
    }

    public function getLienHe(){
    	return view('client.pages.lienhe');
    }
    public function postLienHe(Request $request){
        $data = ['hoten'=>$request->Name,'tinnhan'=>$request->Message];
        Mail::send('client.pages.mail',$data,function($message) use($request){
            $message->from('technologystore96@gmail.com', 'libraryofgame.tk');
            $message->to($request->Email)->subject("Cảm ơn bạn đã góp ý với chúng tôi. Chúng tôi sẽ trả lời mail cho bạn sớm nhất.");

            echo "<script>
   
            alert('Cảm ơn bạn đã góp ý. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất.');
            window.location='".url('./')."'

            </script>";
        });
    }

    public function getGioiThieu(){
    	return view('client.pages.gioithieu');
    }

    public function getGames(){
    	$games = Game::orderBy('id', 'DESC')->paginate(6);
    	return view('client.pages.games', compact('games'));
    }
    public function getChiTietGames($url){
    	$game_id = Game::select('id')->where('url', $url)->first();
    	$id = $game_id->id;
    	$game = Game::find($id);
    	$pictures = GamePicture::where('game_id', $id)->limit(3)->get();
    	$links = LinkDownload::where('game_id', $id)->get();
    	$comments = GameComment::where('game_id', $id)->get();
    	$count_comments = count($comments);
    	return view('client.pages.chi_tiet_games', compact('game', 'pictures', 'links', 'comments', 'count_comments'));
    }

    public function getTheLoai($url){
    	$genre = GameGenre::where('url', $url)->first();
    	$id_genre = $genre->id;
    	$games = Game::where('genre_id', $id_genre)->paginate(6);
    	return view('client.pages.games', compact('games', 'genre'));
    }

    public function postBinhLuan(Request $request, $id){
    	$comment = new GameComment;
    	$comment->game_id = $id;
    	$comment->name = $request->Name;
    	$comment->email = '';
    	$comment->content = $request->Message;
    	$comment->update_at = date('Y-m-d');
    	$comment->save();
    	return redirect()->back();
    }

    public function getTimKiem(Request $request){
    	$key = $request->key;
    	$games = Game::where('title', 'LIKE', '%'.$key.'%')->paginate(6);
    	$count = Game::where('title', 'LIKE', '%'.$key.'%')->count();
    	return view('client.pages.games', compact('games', 'key', 'count'));
    }

    public function getTinTuc(){
        $news = News::orderBy('id','DESC')->paginate(6);
        return view('client.pages.tintuc', compact('news'));
    }

    public function getChiTietTinTuc($url){
    	$new_id = News::select('id')->where('url', $url)->first();
    	$id = $new_id->id;
        $news = News::find($id);
        return view('client.pages.chitiet_tintuc', compact('news'));
    }
}
