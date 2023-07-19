@php

$links = config('header_nav');

@endphp

<div class="container">
        <header>
            <figure>
                <a href="{{ url('/') }}"><img src="{{ asset('img/dc-logo.png')}}" alt="logo"></a>
            </figure>
            <nav>
                <ul>
                    @foreach($links as $link)
                    <li><a href="#">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <div class="search">
                <input type="text" placeholder="Search" >
            </div>
        </header>
    </div>