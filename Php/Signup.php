<?php
 
$displayAlert = false;
$displayError = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
    require "../Components/DbConnect.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $Cpassword = $_POST["confirmpassword"];

    $existsql = "SELECT * FROM `users` WHERE email = '$email'";
    $existquery = mysqli_query($conn , $existquery);
    $existcount = mysqli_num_rows($existcount);
    if($existcount > 0){
        $$displayError = " Username already exists." ;
    }else{ 
        if ($password == $Cpassword) {
            $hash = password_hash($password , PASSWORD_DEFAULT);
            $insertuser = "INSERT INTO `users` (`username` , `password` , `date`) VALUES ('$username' , '$hash' , current_timestamp()" ;
            $insert = mysqli_query($conn, $insertuser);
            if($insert){
                $displayAlert = " Your account has been created and you and now login.";
            }else{
                $$displayError = " Password does not match.";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="../Css/Signup.css">
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
            <form action="Signup.php" id="signupForm">
                    <h2>Signup</h2>
                    <div class="Email">
                        <p>Email : <br>
                        <input type="email" name="Email" id="Email" placeholder="Enter Your E-Mail"  required> </p>
                    </div>
                    <div class="Password">
                        <p>Password : <br>
                        <input type="password" name="Password" id="Password" placeholder="Enter Password" required>
                    </div>
                    <div class="Password">
                        <p>Confirm Password : <br>
                        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="Signup">
                        <button type="submit" class="Submit">Signup</button>
                    </div>
            </form>
        </section>
    </main>
    <script src="../Js/Signup.js"></script>
</body>
</html>
