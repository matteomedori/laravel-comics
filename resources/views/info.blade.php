@extends('layouts.app')

@section('main')
    <main>
        <div class="jumbo">
            <div class="container position-relative">
                <button>current series</button>
            </div>
        </div>
        <div class="container-small">
            <div class="info-single d-flex">
                <div class="info-left w-75">
                    <h2>{{ $comics[0]['title'] }}}</h2>
                    <p>{{ $comics[0]['description'] }}</p>
                    <p><strong>Series:</strong> {{ $comics[0]['series'] }}</p>
                    <h3>{{ $comics[0]['price'] }}</h3>
                </div>
                <div class="info-right flex-grow-1">
                    <img src="{{ $comics[0]['thumb'] }}" :alt="" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="blue-component position-relative">
            <ul class="d-flex justify-content-around">
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="" />
                    <a href="#">digital comics</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="" />
                    <a href="#">dc merchandise</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="" />
                    <a href="#">subscription</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="" />
                    <a href="#">comic shop locator</a>
                </li>
                <li>
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="" />
                    <a href="#">dc power visa</a>
                </li>
            </ul>
        </div>
    </main>
@endsection
