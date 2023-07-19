@extends('layouts.main')

@section('content')
<section id="box-card">
    <div class="series d-none d-md-block">CURRENT SERIES</div>
    <div class="container ">
        <div class="row align-items-start">
            @forelse($cards as $index => $card)
            <div class="col-12 col-md-2  d-flex  justify-content-center">
                <div class="card-comics d-flex flex-column align-items-center justify-content-center">
                    <figure>
                        <a href="{{ url("/comics/$index")}}">
                            <img src="{{ $card['thumb'] }}" alt="{{$card['series']}}">
                        </a>
                    </figure>
                    <h6>{{ $card['series'] }}</h6>
                </div>
            </div>
            @empty
            <h3>NON CI SONO COMICS DISPONIBILI</h3>
            @endforelse
        </div>
        <div class="text-center">
            <a href="#">LOAD MORE</a>
        </div>
    </div>
</section>
<section id="options">
    <div class="container">
        <div>
            <div class="row gy-3">
                <div class="col-12 col-md-2 d-flex align-items-center justify-content-center flex-column item-icon"> 
                    <figure>
                        <img width="50"  src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="">
                    </figure>
                    <span>DIGITAL COMICS</span>
                </div>
                <div class="col-12 col-md-2 item-icon  d-flex align-items-center justify-content-center flex-column"> 
                    <figure >
                        <img width="50" src="{{ asset('img/buy-comics-merchandise.png')}}" alt="">
                    </figure>
                    <span>DC MERCHANDISE</span>

                </div>
                <div class="col-12 col-md-2 item-icon d-flex align-items-center justify-content-center flex-column"> 
                    <figure>
                        <img width="50" src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="">
                    </figure>
                    <span>SUBSCRIPTIONS</span>

                </div>
                <div class="col-12 col-md-2  item-icon d-flex align-items-center justify-content-center flex-column"> 
                    <figure>
                        <img width="50" src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="">
                    </figure>
                    <span>COMIC SHOP LOCATOR</span> 

                </div>
                <div class="col-12 col-md-2 item-icon d-flex align-items-center justify-content-center flex-column"> 
                    <figure>
                        <img width="50" src="{{ asset('img/buy-dc-power-visa.svg')}}" alt="">
                    </figure>
                    <span>DC POWER VISA</span>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
