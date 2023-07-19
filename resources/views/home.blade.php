@extends('layouts.main')

@section('content')
<section id="box-card">
    <div class="series">CURRENT SERIES</div>
    <div class="container d-flex">
        @forelse($cards as $index => $card)
        <div class="card">
            <figure>
                <a href="{{ url("/comics/$index")}}">
                    <img src="{{ $card['thumb'] }}" alt="{{$card['series']}}">
                </a>
            </figure>
            <h3>{{ $card['series'] }}</h3>
        </div>
        @empty
        <h3>NON CI SONO COMICS DISPONIBILI</h3>
        @endforelse

        <a href="#">LOAD MORE</a>
    </div>
</section>
<section id="options">
            <div class="container">
                <div class="box-options">
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="">
                        </figure>
                        <span>DIGITAL COMICS</span>
                    </div>
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="">
                        </figure>
                        <span>DC MERCHANDISE</span>
                    </div>
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="">
                        </figure>
                        <span>SUBSCRIPTIONS</span>
                    </div>
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="">
                        </figure>
                        <span>COMIC SHOP LOCATOR</span>
                    </div>
                    <div class="item-icon">
                        <figure>
                            <img src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="">
                        </figure>
                        <span>DC POWER VISA</span>
                    </div>
                </div>
            </div>
        </section>
@endsection