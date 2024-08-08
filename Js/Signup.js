document.getElementById("signupForm").addEventListener("submit" , function(event){
    event.preventDefault();

    var email = document.getElementById("Email");
    var password = document.getElementById("Password").value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if(email.test(emailPattern)){
        window.location.href = 'Index.php' ;
    }else{
        alert("Please enter a valid email address.");
    }

    if(password.length < 8  ){
        alert("Password must be at least 8 characters long.");
    }
})