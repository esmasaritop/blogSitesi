<?php

namespace App\Http\Controllers;

use App\Models\Yorum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class YorumController extends Controller
{
    public function index(){
        return view('front.yorumlar.index');
    }


    public function createPage()
    {
return view('front.films.filmDetail');
    }

//$id


    public function addYorum(Request $request,$id)
    {
        // Veriyi doğrulama
        $request->validate([
            'yorum_icerik' => 'required|string', // yorum_icerik zorunlu ve string olmalı
        ]);
        if(isset($id)){
    // Yorum modelini oluşturma ve doldurma
        $yorum = new Yorum();
        $yorum->user_id = Auth::id();
        $yorum->film_id = $id;
        $yorum->content = $request->yorum_icerik;

    // Yorum kaydetme
        $yorum->save();


        }

        // İsteğe bağlı: Kullanıcıya bir bildirim veya yönlendirme yapabilirsiniz
        return redirect()->back()->with('success', 'Yorum başarıyla eklendi.');


    }



}
