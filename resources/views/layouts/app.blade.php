<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : config("app.name", "Laravel")}}</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    {{-- Sertakan file/template navbar --}}
    @include("partials.navbar")
    <main class="py-4">
        @include("partials.alert")
        @yield("content")
    </main>
    <script src="/js/app.js"></script>
</body>
</html>