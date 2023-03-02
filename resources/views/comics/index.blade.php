@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="flex jc as wrap ph-5">
            @foreach($comics as $comic)
            <li>
                <figure class="comics">
                    <a href="{{route('comics.show', $comic->id)}}"><img src="{{ $comic->thumb }}" alt="{{ $comic->series }}"></a>
                </figure>
                <h5>{{ $comic->series }}</h5>
            </li>
            @endforeach
        </ul>
        <div class="label">
            <h2 class="bg-primary text-white pw-4 ph-2">CURRENT SERIES</h2>
        </div>
        <div class="flex jc ac">
            <a href="{{ route('comics.create') }}" class="bg-primary text-white pw-3 ph-1 mb-3"><b>UPLOAD COMIC</b></a>
        </div>
    </div>
@endsection
