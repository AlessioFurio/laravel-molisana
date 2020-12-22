@extends('layouts.app')

@section('title-tab', 'Prodotti')

@section('content')
    <div class="container">
        <div class="cards">

            @foreach ($pasta as $item)
                <div class="card">

                    <div class="wp-img-card">
                        <img src="{{ $item['src'] }}" alt="">
                    </div>

                </div>
            @endforeach
            
        </div>
    </div>
@endsection
