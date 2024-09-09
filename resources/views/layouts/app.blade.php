<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Tasty Food - @yield("title")</title>
    @yield("head")
    <link rel="stylesheet" href="{{ asset("tw-elements.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("flowbite.min.css") }}" />
    <script src="{{ asset("scripts/fa.js") }}"></script>
    <script src="{{ asset("scripts/tailwind.js") }}"></script>
    <script src="{{ asset("scripts/jquery.min.js") }}"></script>
</head>

<body class="overflow-x-hidden w-screen">
    @if (Request::segment(1) !== "cba" &&
            count(Request::segments()) >= 1 &&
            Request::segment(1) !== "cbaaal" &&
            Request::segment(1) !== "send-email")
        @include("layouts.hero")
    @endif
    @yield("content")
    @if (Request::segment(1) !== "cba" && Request::segment(1) !== "cbaaal" && Request::segment(1) !== "send-email")
        @include("layouts.footer")
    @endif
    @auth
        @include("layouts.flash")
    @endauth
</body>
@yield("script")
<script src="{{ asset("scripts/flowbite.min.js") }}"></script>
<script src="{{ asset("scripts/tw-elements.umd.min.js") }}"></script>

</html>
