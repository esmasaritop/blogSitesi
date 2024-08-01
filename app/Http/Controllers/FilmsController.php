<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmsController extends Controller
{

    public function veriAlma()
    {
        $films = Film::all(); // Veritabanındaki tüm film kayıtlarını alır
        return view('front.films.index', compact('films')); // `front.index` görünümüne verileri gönderir
    }

    public function index(){
        return view('adminPanel.films.index',);
    }

    public function createPage(){
        return view('adminPanel.films.create');
    }

    public function addFilms(Request $request){

        //validation dogrulama


        $request->validate([
            //'dogrulamak istediğim key'=> 'kurallarım'
            'name' => 'required',
            'content' => 'required',
            'director' => 'required',
            'genre' => 'required',
            'duration' => 'required|integer',
            'date' => 'required',
            'image' => 'required',
        ], [
            'duration.integer' => 'Geçersiz karakter girişi,Filmin süresini lütfen tekrar giriniz.',
            'name.required' =>'Name alanı zorunludur.',
            'content.required' => 'İçerik alanı zorunludur',
            'director.required' =>'Yönetmen Adı alanı zorunludur',
            'genre.required' =>'Filmin Türü alanı zorunludur',
            'duration.required' =>'Filmin Süresi alanı zorunludur',
            'date.required' =>'Tarih alanı zorunludur',
            'image.required' =>'Görsel alanı zorunludur'
        ]);


        //valisayson
        $film = new Film();

        $film->user_id=1;
        $film->name=$request->name;
        $film->content=$request->content;
        $film->director=$request->director;
        $film->duration=$request->duration;
        $film->genre=$request->genre;
        $film->date=$request->date;
        $film->image=$request->image;


        $film->save();

        //Başarılı durum için
        return redirect()->route('films_index')->with('success','Başarıyla Kaydedildi!');

    }

    public function detail($id)
    {
        $film = Film::findOrFail($id);
        return view('front.films.filmDetail', compact('film'));
    }





}
