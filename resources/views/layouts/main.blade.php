<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disc Comics</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @vite(['resources/sass/app.scss'])
</head>

<body>
    @include('includes.header')

    <main>
        <section id="jumbotron">
        </section>

        <!-- contenuto della lista card -->
        @yield('content')
        
        
    </main>

    @include('includes.footer')
</body>

</html>