const formOpenBtn = document.querySelector("#form-open"),
      home = document.querySelector(".home"),
      formContainer = document.querySelector(".form_container"),
      formCloseBtn = document.querySelector(".form_close"),
      signupLink = document.querySelector(".signup_link"),
      loginLink = document.querySelector(".login_link"),
      loginForm = document.querySelector(".login_form"),
      signupForm = document.querySelector(".signup_form"),
      heroSection = document.querySelector(".hero");
      userMenu = document.querySelector("#user-menu"); // Dropdown or menu for logged-in users


// Check if the user is logged in
document.addEventListener("DOMContentLoaded", () => {
    const isLoggedIn = localStorage.getItem("isLoggedIn"); // Check login status

    if (isLoggedIn === "true") {
        // Hide the login button and show the user menu
        formOpenBtn.style.display = "none"; // Hides the login button
        userMenu.style.display = "block";  // Shows the user menu
    } else {
        // Show the login button and hide the user menu
        formOpenBtn.style.display = "block";
        userMenu.style.display = "none";
    }
});


// Open Login Form
formOpenBtn.addEventListener("click", () => {
    home.classList.add("show");
    formContainer.style.display = "block";
    loginForm.style.display = "block";
    signupForm.style.display = "none";
    if (heroSection) {
        heroSection.style.filter = "blur(5px)"; // Adds a blur effect to hero section
    }
});

// Close Form
formCloseBtn.addEventListener("click", () => {
    home.classList.remove("show");
    formContainer.style.display = "none";
    if (heroSection) {
        heroSection.style.filter = "none"; // Removes blur effect from hero section
    }
});

// Show Signup Form
signupLink.addEventListener("click", (e) => {
    e.preventDefault();
    loginForm.style.display = "none";
    signupForm.style.display = "block";
});

// Show Login Form
loginLink.addEventListener("click", (e) => {
    e.preventDefault();
    loginForm.style.display = "block";
    signupForm.style.display = "none";
});

// Simulate Login (For demonstration purposes)
document.addEventListener("DOMContentLoaded", () => {
    const loginFormSubmit = document.querySelector(".login_form button"); // Replace with your login button inside the form
    if (loginFormSubmit) {
        loginFormSubmit.addEventListener("click", (e) => {
            e.preventDefault(); // Prevent actual form submission
            // Simulate a login success
            localStorage.setItem("isLoggedIn", "true");
            alert("Logged in successfully!");
            location.reload(); // Reload page to reflect login status
        });
    }
});


// Logout Functionality
document.querySelector("#logout-btn").addEventListener("click", () => {
    localStorage.removeItem("isLoggedIn"); // Clear login status
    alert("Logged out successfully!");
    location.reload(); // Reload page to reflect logout status
    header: ("location: ind.php");
});



const userDropdown = document.querySelector("#user-dropdown");
const dropdownMenu = document.querySelector("#dropdown-menu");

userDropdown.addEventListener("click", () => {
    if (dropdownMenu.style.display === "block") {
        dropdownMenu.style.display = "none";
    } else {
        dropdownMenu.style.display = "block";
    }
});