@extends('layouts.app')

@section('main')
    <main>
        <div class="jumbo">
            <div class="container">
                <button>current series</button>
            </div>
        </div>
        <div class="main-content">
            <div class="container">
                <div class="cards">
                    @foreach ($comics as $comic)
                        <div class="carta">
                            <img src="{{ $comic['thumb'] }}" :alt="" />
                            <h5>{{ $comic['series'] }}</h5>
                        </div>
                    @endforeach
                </div>
                <button>load more</button>
            </div>
        </div>
        <div class="blue-component">
            <ul>
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
