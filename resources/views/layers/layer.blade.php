<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/js/fancy-box/fancybox.css">
    <link rel="stylesheet" href="/assets/js/splide/css/splide.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.svg" type="image/svg+xml">
    <meta name="description" content="@yield('page_description')">
    <title>@yield('page_title')</title>
</head>
<body>
@include('components.common.header')
<main>
    @yield('content')
</main>
@include('components.common.footer')
</body>
</html>
