@extends('layouts.app')
@section('pageTitle', 'Prodotti')

@section('content')

    <div class="pasta-container">
        @foreach ($paste as $item)

        <div class="pasta-item">
            <img src="{{$item['src']}}" alt="">
            <div class="pasta-item-info">
                <h2>{{$item['titolo']}}</h2>
            </div>
        </div>
            
        @endforeach
    </div>
@endsection