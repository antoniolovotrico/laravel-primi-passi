@extends('layouts.app')

@section('main_content')
<h1>{{$title}}</h1>
<div class="top_ruolo">
    @if($inter)
        @foreach($inter as $player)
            <h3>Nome : {{ $player['name'] }}</h3>
            <h3>Ruolo : {{ $player['position'] }}</h3>
        @endforeach
    @else
        <h3>Nothing to show</h3>
    @endif    
</div>
@endsection