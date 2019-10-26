<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{mix('/css/app.css')}}" rel="stylesheet">

    <!-- Styles -->
    @livewireAssets
</head>
<body>
    <div class="p-6 mx-auto max-w-sm">
        @livewire('book-flushot-form')

    </div>
</body>
</html>
