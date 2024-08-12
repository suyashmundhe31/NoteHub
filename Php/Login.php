<?php 
$displayAlert = false;
$displayError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require "../Components/DbConnect.php";
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    
    $searchsql = "SELECT * FROM `users` WHERE email = '$email'";
    $searchquery = mysqli_query($conn, $searchsql);
    $searchcount = mysqli_num_rows($searchquery);
    if($searchcount == 1){
        while($row = mysqli_fetch_assoc($searchquery)){
            if (password_verify($pass , $row['password'])) {
                $displayAlert = "You are logged in.";
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;   
                header('Location: Home.php');
                exit();
            } else {
                $displayError = "Invalid Credentials.";
            }
        }
    } else {
        $displayError = "Invalid Credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Css/Index.css">
</head>

<body>
    <div class="background-cover"></div>
    <?php
        if($displayAlert){
            echo '  <div id="displayAlert">
                        <strong>Success!</strong>'.$displayAlert.'
                    </div>' ;
        }else if($displayError){
            echo '  <div id="displayAlert">
                        <strong>Error!</strong>'.$displayError.'
                    </div>' ;
        }
    ?>
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
                                <input type="password" name="pass" id="Password" placeholder="Enter Password"
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
    <!-- <script src="../Js/Index.js"></script> -->
</body>

</html>