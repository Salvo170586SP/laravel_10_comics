@extends('layouts.main')


@section('content')

<section id="title-card" class="d-none d-md-block" >
    <img width="200" src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
</section>

<section id="comic">
    <div class="container ">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <img class="d-block d-md-none my-3" width="200" height="300" src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
            </div>
        </div>
        <div class="box-comic">
            <div class="row">
                <div class="col-12 col-md-10 d-flex justify-content-center">
                    <div class="info-comic">
                        <h2>{{$comic['title']}}</h2>

                        <div class="buy d-none d-md-block">
                            <div class="price">
                                <span>U.S Price: <span class="price-item">{{$comic['price']}}</span></span>
                                <span>Available</span>
                            </div>
                            <div class="check"> Check Availability</div>
                        </div>
                        <p>{{$comic['description']}}</p>
                    </div>
                </div>
                <div class="col-12 col-md-2 d-flex justify-content-center">
                    <div class="img-comic">
                        <p>ADVERTISEMENT</p>
                        <figure>
                            <img src="{{ asset('img/adv.jpg') }}" alt="img">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="detail-comic">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
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
            </div>
            <div class="col-12 col-md-6">
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
    </div>

    <div class="container-fluid">
        <div class="option-item row">
            <div class="item-icon d-flex justify-content-between align-items-center col-12 col-md-3">
                <span>DIGITAL COMICS</span>
                <figure>
                    <a href="#"><img src="{{ asset('img/buy-comics-digital-comics.png')}}" alt="digital"></a>
                </figure>
            </div>
            <div class="item-icon col-12 col-md-3 d-flex justify-content-between align-items-center">
                <span>SHOP DC</span>
                <figure>
                    <a href="#"> <img src="{{ asset('img/buy-comics-subscriptions.png')}}" alt="subscr"></a>
                </figure>
            </div>
            <div class="item-icon col-12 col-md-3 d-flex justify-content-between align-items-center">
                <span>COMIC SHOP LOCATOR</span>
                <figure>
                    <a href="#"><img src="{{ asset('img/buy-comics-shop-locator.png')}}" alt="shop"></a>
                </figure>
            </div>
            <div class="item-icon col-12 col-md-3 d-flex justify-content-between align-items-center">
                <span>SUBSCRIPTIONS</span>
                <figure>
                    <a href="#"><img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="merchandise"></a>
                </figure>
            </div>
        </div>
    </div>
</section>



@endsection
