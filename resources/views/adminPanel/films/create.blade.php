@extends('adminpanel.layout.app')

@section('content')

    <h1>Film Kaydetme </h1>

    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)

                    <li> {{ $error }} </li>


                @endforeach

            </ul>
        </div>


    @endif

    <form action="{{route('films_addFilms')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Adı:</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Filmin Adını Giriniz" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">İçerik:</label>
            <textarea class="form-control" name="content" placeholder="İçerik Giriniz" id="exampleFormControlTextarea1" rows="3">{{ old('content') }}</textarea>

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Yönetmen Adı:</label>
            <input type="text" name="director" value="{{ old('director') }}" placeholder="Yönetmen Adını Giriniz" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Filmin Süresi:</label>
            <input type="text" name="duration" value="{{ old('duration') }}" placeholder="Filmin Süresini Giriniz (dakika)" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="filmType" class="form-label">Türü:</label>
            <select name="genre" class="form-control" id="filmType" aria-describedby="filmTypeHelp">
                <option value="" disabled {{ old('genre') === null ? 'selected' : '' }}>Tür Seçiniz</option>
                <option value="1" {{ old('genre') == 'aksiyon' ? 'selected' : '' }}>Aksiyon</option>
                <option value="2" {{ old('genre') == 'animasyon' ? 'selected' : '' }}>Animasyon</option>
                <option value="3" {{ old('genre') == 'belgesel' ? 'selected' : '' }}>Belgesel</option>
                <option value="4" {{ old('genre') == 'bilim kurgu' ? 'selected' : '' }}>Bilim Kurgu</option>
                <option value="5" {{ old('genre') == 'dram' ? 'selected' : '' }}>Dram</option>
                <option value="6" {{ old('genre') == 'gerilim' ? 'selected' : '' }}>Gerilim</option>
                <option value="7" {{ old('genre') == 'komedi' ? 'selected' : '' }}>Komedi</option>
                <option value="8" {{ old('genre') == 'korku' ? 'selected' : '' }}>Korku</option>
                <option value="9" {{ old('genre') == 'romantik' ? 'selected' : '' }}>Romantik</option>
                <option value="10" {{ old('genre') == 'romantik komedi' ? 'selected' : '' }}>Romantik Komedi</option>
            </select>
            <div id="filmTypeHelp" class="form-text">Filmin türünü seçiniz.</div>
        </div>


        <div class="mb-3">
            <label for="exampleInputDate" class="form-label">Tarih:</label>
            <input type="date" name="date" value="{{ old('date') }}" class="form-control" id="exampleInputDate" aria-describedby="dateHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputFile" class="form-label">Görsel Yükle:</label>
            <input type="file" name="image" value="{{ old('image') }}" class="form-control" id="exampleInputFile" aria-describedby="fileHelp" accept="image/*">
            <div id="fileHelp" class="form-text">Lütfen bir görsel dosyası seçiniz.</div>
        </div>

        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>

@endsection


