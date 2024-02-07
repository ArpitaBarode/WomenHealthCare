<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">
    <div class="box form-box">
        <?php
       
      include ("php/config.php");
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];
          
            // verifying the unique email
            $verify_query = mysqli_query($conn,"SELECT Email FROM moms WHERE Email='$email'");

        if(mysqli_num_rows($verify_query)!=0){
            echo"<div class=' message'>
            <p style='font-size:18px'>This email is used,Try another One Please</p>
            <div class='lncontent'>
            <img src='img/Computer login.gif' alt='image' >
        </div>
            </div> <br>";
          
            echo"<a href='Registration.php'/><input style='background-color:#fa6f86' type='submit' name='submit' class='btn' value='GO Back'/>";
           
        }
        else{
            mysqli_query($conn,"INSERT INTO moms(Username,Email,Age,Password)VALUES('$username','$email','$age','$password')" )or die("Error Occured");
            echo"<div class='message'>
            <p>Registration Succeessfull</p>
            
           
            <div class='lncontent'>
            <img src='img/Computer login.gif' alt='image' >
        </div>
       
        </div> <br>";
         echo" <a href='login.php'><button style='background-color:#fa6f86' class='btn center'>Login Now</button>";   
        }
        
        }
        else{
        ?>
    <header>Sign Up</header>

    <form action ="" method="post">
        <div class="field input">
            <label for="username">Username</label>
            <input id="username" type="text" name="username" autocomplete="off" required/>
        </div>
        <div class="field input">
            <label for="Email">Email</label>
            <input id="Email" type="email" name="email" />
        </div>
        <div class="field input">
            <label for="age">Age</label>
            <input id="age" type="number" name="age" autocomplete="off" required/>
        </div>
        <div class="field input">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" autocomplete="off" required/>
        </div>
        <div class="field">
            <input type="submit" class="btn" name="submit" value="Login"  required/>
        </div>
        <div class="links">
           Already a member?<a href="login.php"> Sign In</a>
        </div>

    </form>
</div>


<div class="lcontent">
            <img src="img/Computer login.gif" alt="image">
        </div>
        <?php }  ?>
</div>
</body>
</html>