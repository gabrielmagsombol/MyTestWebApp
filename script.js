document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.getElementById("submit");

    submitBtn.addEventListener("click", function () {
        const emailInput = document.querySelector(".input-box input[type='text']").value;
        const passwordInput = document.querySelector(".input-box input[type='password']").value;
        
        
        const validEmail = "admin";
        const validPassword = "admin123";

        if (emailInput === validEmail && passwordInput === validPassword) {
            alert("Login successful!");
            sessionStorage.setItem("loggedIn", "true"); // Store login state
            window.location.href = "admin.html"; // Redirect to Admin Page
        } else {
            alert("Incorrect email or password!");
        }
    });
});
