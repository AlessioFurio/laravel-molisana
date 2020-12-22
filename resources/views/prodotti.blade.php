@extends('layouts.app')

@section('title-tab', 'Prodotti')

@section('content')
    <main id="section-prodotti">
        <div class="container">
            <div class="cards">

                @foreach ($pasta as $item)
                    <div class="card">

                        <div class="wp-img-card">
                            <img src="{{ $item['src'] }}" alt="">
                            <div class="overlay">
                                <p>{{ $item['titolo'] }}</p>
                            </div>
                        </div>


                    </div>
                @endforeach

            </div>
        </div>
    </main>

@endsection
