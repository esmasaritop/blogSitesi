@extends('front.layout.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach ($films as $film)
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">

                        <img src="{{ asset('front/assets/img'.$film->image) }}" class="card-img-top" alt="{{ ucfirst(strtolower($film->name)) }}">

                        <div class="card-body">
                            <h4 class="card-title"><strong>{{ strtoupper($film->name) }}</strong></h4>
                            <p class="card-text">{{ ucfirst(strtolower(Str::limit($film->content, 100))) }}</p>
                            <p class="card-text"><small class="text-muted">Yönetmen: {{ ucfirst(strtolower($film->director)) }}</small></p>

                            @if($film->genre == 1)
                                <p class="card-text"><small class="text-muted">Türü: Aksiyon</small></p>
                            @elseif($film->genre == 2)
                                <p class="card-text"><small class="text-muted">Türü: Animasyon</small></p>
                            @elseif($film->genre == 3)
                                <p class="card-text"><small class="text-muted">Türü: Belgesel</small></p>
                            @elseif($film->genre == 4)
                                <p class="card-text"><small class="text-muted">Türü: Bilim Kurgu</small></p>
                            @elseif($film->genre == 5)
                                <p class="card-text"><small class="text-muted">Türü: Dram</small></p>
                            @elseif($film->genre == 6)
                                <p class="card-text"><small class="text-muted">Türü: Gerilim</small></p>
                            @elseif($film->genre == 7)
                                <p class="card-text"><small class="text-muted">Türü: Komedi</small></p>
                            @elseif($film->genre == 8)
                                <p class="card-text"><small class="text-muted">Türü: Korku</small></p>
                            @elseif($film->genre == 9)
                                <p class="card-text"><small class="text-muted">Türü: Romantik</small></p>
                            @else
                                <p class="card-text"><small class="text-muted">Türü: Romantik Komedi</small></p>
                            @endif

                            <a href="{{ route('films_detail', $film->id) }}" class="btn btn-primary">Detay Görüntüle</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
