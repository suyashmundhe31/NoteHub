<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    require "../Components/DbConnect.php";
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Css/Login.css">
</head>

<body>
    <div class="background-cover"></div>
    <main>
        <section id="mainContainer">
            <section id="leftSide">
                <div class="logo">
                    <img src="../Images/WebLogo.png" alt="WebLogo" id="WebLogo">
                </div>
                <div class="text">
                    <h1 class="mainHeading"> Welcome to a treasure trove of academic success! </h1>
                    <p class="subHeading"> Our website is dedicated to</p>
                </div>
                <div class="usp">
                    <img src="../Images/PYQs.png" alt="PYQs" class="uspLogo">
                    <p class="logoName"><b>Previous Year's Questions</b></p> <br>
                    <img src="../Images/notes.png" alt="notes" class="uspLogo">
                    <p class="logoName"><b>Notes</b></p> <br>
                    <img src="../Images/BookRef.png" alt="BookRef" class="uspLogo">
                    <p class="logoName"><b>Reference books</b></p>
                </div>
            </section>
            <section id="rightSide">
                <form action="Login.php" id="loginForm" method="post">
                    <div class="LogInForm">
                        <h2>LogIn</h2>
                        <div class="Email">
                            <p>Email: <br>
                                <input type="email" name="email" id="Email" placeholder="Enter Your E-Mail" required>
                            </p>
                        </div>
                        <div class="Password">
                            <p>Password: <br>
                                <input type="password" name="password" id="Password" placeholder="Enter Password"
                                    required>
                        </div>
                        <div class="LogIn">
                            <button type="submit" class="Submit">LogIn</button>
                            <div class="signupOption">
                                <span>Or</span>
                                <a href="./Signup.php">Signup</a>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </section>
    </main>
    <script src=""></script>
</body>

</html>