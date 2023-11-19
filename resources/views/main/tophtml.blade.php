<!doctype html>
<html @yield('html-class')>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('document-title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('style')
</head>

<body @yield('body-class')>
