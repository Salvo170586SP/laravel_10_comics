@php

$links = config('header_nav');

@endphp

<div class="container">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <figure>
                <a href="{{ url('/') }}"><img src="{{ asset('img/dc-logo.png')}}" alt="logo"></a>
            </figure>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @foreach($links as $link)
                    <li class="nav-item"><a class="nav-link" href="#">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
                <div class="search">
                    <input type="text" placeholder="Search">
                </div>
            </div>
        </div>
    </nav>
</div>
