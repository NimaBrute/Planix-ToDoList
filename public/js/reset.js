// Password Toggle Functionality
const passwordInput = document.getElementById("passInput");
const togglePassword = document.getElementById("togglePassword");
const passwordInput2 = document.getElementById("pass2Input");
const errorMessage = document.getElementById("errorMessage");
const submitBtn = document.getElementById("submit");

// اعتبارسنجی طول رمز عبور (حداقل 8 کاراکتر)
passwordInput.addEventListener('input', function() {
    const isLengthValid = this.value.length >= 8;
    
    if (!isLengthValid) {
        this.classList.add('is-invalid');
        // نمایش پیام خطا (در صورت نیاز عنصر خطا را ایجاد کنید)
        if (!document.getElementById('lengthError')) {
            const lengthError = document.createElement('div');
            lengthError.id = 'lengthError';
            lengthError.className = 'text-danger mt-2 small';
            lengthError.textContent = 'رمز عبور باید حداقل 8 کاراکتر باشد';
            this.parentNode.appendChild(lengthError);
        }
    } else {
        this.classList.remove('is-invalid');
        const errorElement = document.getElementById('lengthError');
        if (errorElement) {
            errorElement.remove();
        }
    }
});

// Toggle password visibility
[togglePassword].forEach((icon, index) => {
    icon.addEventListener("click", () => {
        const inputField = index === 0 ? passwordInput : passwordInput2;
        const isPassword = inputField.type === "password";
        inputField.type = isPassword ? "text" : "password";
        icon.classList.toggle("bi-eye-fill");
        icon.classList.toggle("bi-eye-slash-fill");
    });
});

// Password validation
passwordInput2.addEventListener('input', function() {
    if (passwordInput.value !== passwordInput2.value) {
        errorMessage.classList.remove('d-none');
        passwordInput2.classList.add('is-invalid');
        submitBtn.disabled = true;
    } else {
        errorMessage.classList.add('d-none');
        passwordInput2.classList.remove('is-invalid');
        submitBtn.disabled = false;
    }
});

// Form submission with delay and button text change
document.querySelector('form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    if (passwordInput.value === passwordInput2.value) {
        // Change button text and add spinner
        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span> در حال انتقال...';
        submitBtn.disabled = true;
        
        // Redirect after 2.5 seconds
        setTimeout(() => {
            window.location.href = window.loginRoute;
        }, 2500);
    } else {
        errorMessage.classList.remove('d-none');
        passwordInput2.classList.add('is-invalid');
    }
});

function checkPassword() {
    if (passwordInput.value !== passwordInput2.value) {
        errorMessage.classList.remove('d-none');
        passwordInput2.classList.add('is-invalid');
        return false;
    }
    return true;
}