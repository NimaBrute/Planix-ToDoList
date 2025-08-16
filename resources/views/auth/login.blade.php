<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do list</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="text-white">
    <div class="transparent"></div>
    <h1 class="text-center position-relative"><img src="{{ asset('img/logo.png') }}" alt="logo"></h1>
    <div class="container">
        <div class="box mx-md-auto p-4 rounded-4 mt-3">
            <span class="text-center d-block fs-5">ورود</span>
            <p class="text-center fs-5">وارد اکانت خود شوید</p>
            <hr>
            <form action="#" method="post">
                <div class="email-input">
                    <label for="email-input">ایمیل</label>
                    <input type="email" autocomplete="off" id="email-input" name="name"
                        class="form-control text-white input-email mt-2">
                </div>
                <div class="pass-input position-relative mt-3">
                    <label for="input-pass" class="form-label">رمز عبور</label>
                    <input type="password" autocomplete="off" name="Password" id="input-pass"
                        class="form-control input-pass text-white" required>

                    <!-- آیکون چشم -->
                    <i class="bi bi-eye-fill position-absolute translate-middle-y me-3" id="togglePassword"
                        style="cursor:pointer; font-size:1.2rem;"></i>
                </div>
                <a href="{{ asset('forgot') }}" class="d-block text-info mt-2">فراموشی رمز عبور</a>
                <div class="btn-box mt-3">
                    <button class="btn w-100 text-white">ورود</button>
                </div>
                <div class="link-box text-center mt-3 ">
                    <a href="{{ route('register') }}" class="d-block text-info">ساخت حساب</a>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>