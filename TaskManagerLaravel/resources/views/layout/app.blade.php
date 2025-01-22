<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background-image: url('https://img.freepik.com/free-vector/cloud-background-pastel-paper-cut-style-vector_53876-135914.jpg?t=st=1737543022~exp=1737546622~hmac=dc3de5214564362f10c1b82c2162a4a41584cc4092115295a345814dbdc26557&w=1060'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .register-panel{
            width: 380px
        }
    </style>
</head>
<body>
    <div class="row m-0">
        <div class="col-auto p-0 border-end">
            @include('layout.menu')
        </div>
        <div class="col p-0">
            @include('layout.header')
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    <header>
        @include('layout.footer')
    </header>
</body>
</html>
