<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    @include('layouts.partials.style')
</head>
<body>

    @include('layouts.partials.header')

    @include('layouts.partials.sidebar')

    <main id="main" class="main">
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    @include('layouts.partials.script')
    
</body>
</html>