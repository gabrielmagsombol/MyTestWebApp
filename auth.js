document.addEventListener("DOMContentLoaded", function () {
    if (sessionStorage.getItem("loggedIn") !== "true") {
        alert("Access denied. Please log in.");
        window.location.href = "index.html"; // Redirect to login
    }

    // Logout Function
    const logoutBtn = document.getElementById("logout");
    if (logoutBtn) {
        logoutBtn.addEventListener("click", function () {
            sessionStorage.removeItem("loggedIn"); // Clear login state
            window.location.href = "index.html"; // Redirect to login page
        });
    }
});
