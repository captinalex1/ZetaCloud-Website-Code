document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const CreateAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form-hidden");
        CreateAccountForm.classList.remove("form-hidden");
    });
    
    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form-hidden");
        CreateAccountForm.classList.add("form-hidden");
    });
});