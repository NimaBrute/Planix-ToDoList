const passwordInput = document.getElementById("input-pass");
const togglePassword = document.getElementById("togglePassword");

togglePassword.addEventListener("click", () => {
    const isPassword = passwordInput.type === "password";
    passwordInput.type = isPassword ? "text" : "password";
    togglePassword.classList.toggle("bi-eye-fill");
    togglePassword.classList.toggle("bi-eye-slash-fill");
});