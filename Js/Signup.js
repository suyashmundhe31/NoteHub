document.getElementById("signupForm").addEventListener("submit", function(event) {
    event.preventDefault();

    // Get the value of the email input field
    var email = document.getElementById("Email").value.trim(); 
    var password = document.getElementById("Password").value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email.match(emailPattern)) {
        if(password.length >= 8) {
            window.location.href = 'Index.php';
        } else {
            alert("Password must be at least 8 characters long.");
        }
    } else {
        alert("Please enter a valid email address.");
    }
});
