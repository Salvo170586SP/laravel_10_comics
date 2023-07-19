@extends('layouts.main')


@section('content')

<section id="title-card">
    <img width="200" src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
</section>

<section id="comic">
    <div class="container">
        <div class="box-comic">

            <div class="info-comic">
                <h2>{{$comic['title']}}</h2>

                <div class="buy">
                    <div class="price">
                        <span>U.S Price: <span class="price-item">{{$comic['price']}}</span></span>
                        <span>Available</span>
                    </div>
                    <div class="check"> Check Availability</div>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="img-comic">
                <p>ADVERTISEMENT</p>
                <figure>
                    <img src="{{ asset('img/adv.jpg') }}" alt="img">
                </figure>
            </div>
        </div>
    </div>
</section>
<section id="detail-comic">
    <div class="container">
        <div class="d-flex">
            <div class="talent">
                <h4>Talent</h4>
                <div class="talent-item">
                    <span>Art by</span>
                    <p>
                        @foreach($comic['artists'] as $artist)
                        <span>
                            {{$artist}},
                        </span>
                        @endforeach
                    </p>
                </div>
                <div class="talent-item">
                    <span>Written by</span>
                    <p>
                        @foreach($comic['writers'] as $writer)
                        <span>{{$writer}}, </span>
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="specs">
                <h4>Specs</h4>
                <div class="specs-item">
                    <span>Series: </span>
                    <p>{{$comic['series']}}</p>
                </div>
                <div class="specs-item">
                    <span>U.S Price: </span>
                    <p>{{$comic['price']}}</p>
                </div>
                <div class="specs-item">
                    <span>On Sale Date: </span>
                    <p>{{$comic['sale_date']}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="option-item">
        <div class="item-icon">
            <span>DIGITAL COMICS</span>
            <figure>
                <a href="#"><img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="digital"></a>
            </figure>
        </div>
        <div class="item-icon">
            <span>SHOP DC</span>
            <figure>
               <a href="#"> <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="subscr"></a>
            </figure>
        </div>
        <div class="item-icon">
            <span>COMIC SHOP LOCATOR</span>
            <figure>
                <a href="#"><img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="shop"></a>
            </figure>
        </div>
        <div class="item-icon">
            <span>SUBSCRIPTIONS</span>
            <figure>
                <a href="#"><img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="merchandise"></a>
            </figure>
        </div>
    </div>
</section>



@endsection