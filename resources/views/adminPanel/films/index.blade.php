@extends('adminpanel.layout.app')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Filmler</h1>
            <a class="btn btn-primary" href="{{route('anasayfa')}}">Anasayfa</a>
        </div>

        <div class="text-base mb-3">
            <a class="btn btn-primary" href="{{ route('films_createPage') }}">Film Oluştur</a>
        </div>

        @if(session('success'))
            <div class="alert alert-primary">
                {{ session('success') }}
            </div>
        @endif

    </div>

@endsection
