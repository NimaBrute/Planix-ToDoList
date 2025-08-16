<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فراموشی رمز عبور</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/forgot.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="transparent"></div>
    <h1 class="pt-3"><img src="{{ asset('img/logo.png') }}" alt="logo"></h1>

    <div class="container">
        <div class="box text-white mx-md-auto p-4 mt-3 rounded-4">
            <span class="fs-5 fw-bold">فراموشی رمز عبور</span>
            <hr>
            <form id="forgotPasswordForm" class="text-start text-white" autocomplete="off">
                @csrf
                <!-- مرحله ۱: ایمیل -->
                <div class="email-step">
                    <div class="email-input">
                        <label for="email">ایمیل</label>
                        <input type="email" id="email" class="form-control mt-2 input-custom text-white" name="email"
                            required>
                        <div class="email-error text-danger mt-1" style="display: none;"></div>
                    </div>
                    <button type="button" id="sendOtpBtn" class="btn w-100 mt-3 submit">
                        ارسال کد تایید
                    </button>
                </div>

                <!-- مرحله ۲: کد تایید (مخفی در ابتدا) -->
                <div class="otp-step" style="display: none;">
                    <div class="code-input mt-3">
                        <label for="code">کد تایید را وارد کنید</label>
                        <input type="text" id="code" class="form-control mt-2 input-custom text-white" name="code"
                            maxlength="5">
                        <div class="code-error text-danger mt-1" style="display: none;"></div>
                    </div>

                    <div class="timer-box mt-2 d-flex justify-content-between">
                        <div class="timer" id="timer">02:00</div>
                        <button type="button" id="resendBtn" class="btn p-0 btn-info text-white p-2" disabled>
                            ارسال مجدد کد
                        </button>
                    </div>

                    <button type="button" id="verifyOtpBtn" class="btn w-100 mt-3 submit" disabled>
                        تایید کد
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/forgot.js') }}"></script>
    <script>
        window.loginRoute = "{{ route('reset') }}";
    </script>
</body>

</html>