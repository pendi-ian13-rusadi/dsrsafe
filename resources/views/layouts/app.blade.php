<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts.style')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    @include('layouts.header')

    @include('layouts.sidebar')
    
    @yield('main')

    

    @include('layouts.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('layouts.js')
</body>

</html>
