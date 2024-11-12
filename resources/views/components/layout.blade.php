<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaming Blog</title>
    <link rel="shortcut icon" href="favicon.webp" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>

    {{-- navbar --}}
    <x-navbar/>

    <div class="min-vh-100">
        {{$slot}}
    </div>
  
    {{-- footer --}}
    <x-footer/>
  </body>
</html>