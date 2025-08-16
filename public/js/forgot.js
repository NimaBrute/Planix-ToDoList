document.addEventListener('DOMContentLoaded', function () {
    // عناصر DOM
    const emailStep = document.querySelector('.email-step');
    const otpStep = document.querySelector('.otp-step');
    const emailInput = document.getElementById('email');
    const codeInput = document.getElementById('code');
    const sendOtpBtn = document.getElementById('sendOtpBtn');
    const verifyOtpBtn = document.getElementById('verifyOtpBtn');
    const resendBtn = document.getElementById('resendBtn');
    const timerElement = document.getElementById('timer');
    const emailError = document.querySelector('.email-error');
    const codeError = document.querySelector('.code-error');

    // متغیرهای سیستمی
    let countdown;
    let timerInterval;
    const OTP_EXPIRY_TIME = 120; // 2 دقیقه
    const TEST_OTP = '12345'; // فقط برای تست

    // ========== اعتبارسنجی ایمیل ==========
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // برای فیلد ایمیل
    emailInput.addEventListener('input', function (e) {
        // حذف حروف فارسی و کاراکترهای غیرمجاز
        this.value = this.value.replace(/[^a-zA-Z0-9@._-]/g, '');
    });

    // یا برای کنترل دقیق‌تر هنگام تایپ:
    emailInput.addEventListener('keypress', function (e) {
        const charCode = e.charCode;
        // فقط کاراکترهای انگلیسی، اعداد و @ . _ - مجازند
        if (!(
            (charCode >= 65 && charCode <= 90) || // A-Z
            (charCode >= 97 && charCode <= 122) || // a-z
            (charCode >= 48 && charCode <= 57) || // 0-9
            charCode === 64 || // @
            charCode === 46 || // .
            charCode === 95 || // _
            charCode === 45 // -
        )) {
            e.preventDefault();
        }
    });

    // ========== مرحله ۱: ارسال کد تایید ==========
    sendOtpBtn.addEventListener('click', function () {
        // اعتبارسنجی ایمیل
        if (!validateEmail(emailInput.value)) {
            emailError.textContent = 'لطفا ایمیل معتبر وارد کنید';
            emailError.style.display = 'block';
            return;
        }

        emailError.style.display = 'none';

        // شبیه‌سازی ارسال کد (در پروژه واقعی باید AJAX شود)
        console.log('کد تایید به ایمیل ارسال شد: ' + TEST_OTP);

        // نمایش مرحله کد تایید
        emailStep.style.display = 'none';
        otpStep.style.display = 'block';

        // شروع تایمر
        startTimer();
    });

    // ========== مدیریت تایمر ==========
    function startTimer() {
        clearInterval(timerInterval);
        countdown = OTP_EXPIRY_TIME;
        resendBtn.disabled = true;

        timerInterval = setInterval(() => {
            countdown--;
            const minutes = Math.floor(countdown / 60);
            const seconds = countdown % 60;
            timerElement.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            if (countdown <= 0) {
                clearInterval(timerInterval);
                resendBtn.disabled = false;
            }
        }, 1000);
    }

    // ========== مرحله ۲: تایید کد ==========
    codeInput.addEventListener('input', function () {
        // فعال/غیرفعال کردن دکمه تایید براساس پر بودن فیلد
        verifyOtpBtn.disabled = codeInput.value.length !== 5;

        // اگر کاربر در حال وارد کردن کد است، خطای قبلی پنهان شود
        if (codeInput.value.length > 0) {
            codeError.style.display = 'none';
        }
    });

    verifyOtpBtn.addEventListener('click', function () {
        if (codeInput.value !== TEST_OTP) {
            codeError.textContent = 'کد تایید نادرست است';
            codeError.style.display = 'block';

            // تایمر را صفر کرده و دکمه ارسال مجدد را فعال کنید
            clearInterval(timerInterval);
            countdown = 0;
            timerElement.textContent = '00:00';
            resendBtn.style.display = 'block';
            resendBtn.disabled = false;
            verifyOtpBtn.disabled = true;

            return;
        }

        // کد صحیح بود
        codeError.style.display = 'none';
        resendBtn.style.display = 'none';
        // alert('کد تایید صحیح است! در حال انتقال...');
        window.location.href = window.loginRoute; // روش پیشرفته‌تر
    });

    // ========== ارسال مجدد کد ==========
    resendBtn.addEventListener('click', function () {
        if (!resendBtn.disabled) {
            // ارسال مجدد کد
            console.log('کد جدید ارسال شد: ' + TEST_OTP);
            startTimer();
            codeInput.value = '';
            verifyOtpBtn.disabled = true;
            resendBtn.style.display = 'none';
        }
    });
});