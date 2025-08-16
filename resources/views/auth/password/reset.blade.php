<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فراموشی رمز عبور</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <div class="transparent"></div>
    <h1 class="text-center"><img src="{{ asset('img/logo.png') }}" alt="logo"></h1>
    <div class="container">
        <div class="box text-white p-4  mx-md-auto rounded-4 text-center">
            <span>رمز جدید</span>
            <hr>
            <form action="" method="post" class="text-white text-start">
                <div class="pass_input">
                    <label for="passInput" class="mt-3">رمز عبور</label>
                    <div class="boxinput1 position-relative">
                        <input required autocomplete="off" type="password" name="password" id="passInput"
                            class="form-control text-white mt-2 input-custom">
                        <i class="bi bi-eye-fill translate-middle-y me-3 position-absolute" id="togglePassword"
                            style="cursor: pointer;"></i>
                    </div>
                </div>
                <div class="pass2_input">
                    <label for="pass2Input" class="mt-3">تایید رمز عبور</label>
                    <div class="boxinput2 position-relative">
                        <input required autocomplete="off" type="password" name="password-accept" id="pass2Input"
                            class="form-control text-white mt-2 input-custom">
                    </div>
                    <span class="error-message text-danger mt-2 d-none" id="errorMessage" style="font-size: 14px;">
                        پسوردها مطابقت ندارند!
                    </span>
                </div>
                <div class="btn-box">
                    <button class="btn submit w-100 mt-3" id="submit">تایید رمز</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/reset.js') }}"></script>
    <script>
        window.loginRoute = "{{ route('login') }}";
    </script>
</body>

</html>