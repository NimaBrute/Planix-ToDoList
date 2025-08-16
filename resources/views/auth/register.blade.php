<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do list</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="text-white text-center">
    <div class="transparent"></div>
    <h1 class=""><img src="{{ asset('img/logo.png') }}" alt="logo"></h1>
    <div class="container">
        <div class="box mx-md-auto rounded-4 p-4">
            <span class="fs-5 fw-bold">ثبت نام</span>
            <hr>
            <form action="" class="text-start text-white" method="post">
                <div class="name_input">
                    <label for="name-input">نام و نام خانوادگی</label>
                    <input required autocomplete="off" type="text" name="name" id="name-input"
                        class="form-control text-white mt-2 name-input">
                </div>

                <div class="mail_input">
                    <label for="email-input" class="mt-3">ایمیل</label>
                    <input required autocomplete="off" type="email" name="email" id="email-input"
                        class="form-control text-white mt-2 email-input">
                </div>

                <div class="pass_input">
                    <label for="passInput" class="mt-3">رمز عبور</label>
                    <div class="boxinput1 position-relative">
                        <input required autocomplete="off" type="password" name="password" id="passInput"
                            class="form-control text-white mt-2 pass-input">
                        <i class="bi bi-eye-fill translate-middle-y me-3" id="togglePassword"
                            style="cursor: pointer;"></i>

                    </div>
                </div>

                <div class="pass2_input">
                    <label for="pass2Input" class="mt-3">تایید رمز عبور</label>
                    <div class="boxinput2 position-relative">
                        <input required autocomplete="off" type="password" name="password-accept" id="pass2Input"
                            class="form-control text-white mt-2 pass2-input">
                    </div>
                    <span class="error-message text-danger mt-2 d-none" id="errorMessage" style="font-size: 14px;">
                        پسوردها مطابقت ندارند!
                    </span>
                </div>

                <div class="form-check mt-3">
                    <input required type="checkbox" class="form-check-input bg-info rounded-pill">
                    <label class="form-check-lable" style="text-align: justify;">
                        <a href="#" class="text-info">سیاسات و حریم خصوصی</a> را مطالعه نموده و موافقت میکنم
                    </label>
                </div>

                <div class="btn-box">
                    <button type="button" class="btn w-100 text-white mt-3" onclick="checkPassword()">مرحله بعد</button>
                </div>

                <a href="{{ route('login') }}" class="text-info mt-2 d-block text-center">حساب دارید؟</a>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>