<!DOCTYPE html>
<html lang="fa-ir">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('page-css')
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body dir="rtl" class="text-white">
    <div class="transparent"></div>
    <div class="container-fluid">
        <div class=" mt-5  row mx-auto d-flex box rounded-4">
            <div class="col-10 main-box p-4 pe-0 rounded-start-4">
                <main>
                    <h1>hviyhs</h1>
                    @yield('main')
                </main>
                <footer>
                    @yield('footer')
                </footer>
            </div>
            <div class="col-2 head-box rounded-end-4">
                <header class="p-1 pt-3 pt-lg-0 ps-0 text-center">
                    <x-navbar />
                </header>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>