// Password Toggle Functionality
const passwordInput = document.getElementById("passInput");
const togglePassword = document.getElementById("togglePassword");
const passwordInput2 = document.getElementById("pass2Input");
const errorMessage = document.getElementById("errorMessage");

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
pass2Input.addEventListener('input', function() {
    if (passInput.value !== pass2Input.value) {
        errorMessage.classList.remove('d-none');
        pass2Input.classList.add('is-invalid');
    } else {
        errorMessage.classList.add('d-none');
        pass2Input.classList.remove('is-invalid');
    }
});

function checkPassword() {
    if (passInput.value !== pass2Input.value) {
        errorMessage.classList.remove('d-none');
        pass2Input.classList.add('is-invalid');
        return false;
    }
    // Form submission logic here
}