@extends('front.layout.app')

@section('content')
    <div class="container">
        <div class="card">
            <img src="{{ $film->image }}" class="card-img-top" alt="{{ $film->name }}">
            <div class="card-body">
                <h3 class="card-title" style="text-transform: uppercase;"><strong>{{ strtoupper($film->name) }}</strong></h3>
                <p class="card-text">{{ ucfirst($film->content) }}</p>
                <p class="card-text"><strong>Yönetmen:</strong> {{ ucfirst($film->director) }}</p>
                @if($film->genre == 1)
                    <p class="card-text"><strong >Türü: </strong>Aksiyon</p>
                @elseif($film->genre == 2)
                    <p class="card-text"><strong >Türü: </strong>Animasyon</p>
                @elseif($film->genre == 3)
                    <p class="card-text"><strong >Türü: </strong>Belgesel</p>
                @elseif($film->genre == 4)
                    <p class="card-text"><strong >Türü: </strong>Bilim Kurgu</p>
                @elseif($film->genre == 5)
                    <p class="card-text"><strong >Türü: </strong>Dram</p>
                @elseif($film->genre == 6)
                    <p class="card-text"><strong >Türü: </strong>Gerilim</p>
                @elseif($film->genre == 7)
                    <p class="card-text"><strong >Türü: </strong>Komedi</p>
                @elseif($film->genre == 8)
                    <p class="card-text"><strong >Türü: </strong>Korku</p>
                @elseif($film->genre == 9)
                    <p class="card-text"><strong >Türü: </strong>Romantik</p>
                @else
                    <p class="card-text"><strong >Türü: </strong>Romantik Komedi</p>
                @endif

                <p class="card-text"><strong>Vizyon Tarihi:</strong> {{ \Carbon\Carbon::parse($film->date)->format('d.m.Y') }}</p>
                <p class="card-text"><strong>Süresi:</strong> {{ ucfirst($film->duration) }} minutes</p>
            </div>
        </div>

        <br>
        <form action="{{ route('yorum_addNote',$film->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Yorum</label>
                <textarea name='yorum_icerik' class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>

    </div>
@endsection
