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
    <title>Reset Password</title>
</head>
<body>
    <div class="container">
    <div class="box form-box">
    <?php
include ('php/config.php');
if(isset($_POST['submit'])){
   
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    
 
   
    // verifying the unique email
    $verify_query = mysqli_query($conn,"SELECT * FROM moms WHERE Email='$email'");

if(mysqli_num_rows($verify_query)){
    $userdata = mysqli_fetch_array($verify_query);
    $username = $userdata['Username'];

    $token = $userdata['token'];
    $subject = "Password Password";
    $body ="Hi , Click here too Reset your Password  http://localhost/WomenHealthCare/recoverpass.php?token=$token ";
    $sender_email="From: porwalpalak10@gmail.com";
    if(mail($email, $subject, $body, $sender_email)){
        $_SESSION['msg'] ="check your mail to reset your password  $email";
        header('location:login.php');
    }
    else{
        echo "Email sending failed....";
    }
   
    }



else{
    echo"No email found";
}
}



    ?>
      <h4 style="text-align:center">Reset Your Password</h4>
      <p >Please fill your email correctly</p>
   
    <form action ="resetpass.php" method="post">
       
        <div class="field input">
            <label for="Email">Email Address</label>
            <input id="Email" type="email" name="email" />
        </div>
        
        <div class="field">
            <input type="submit" class="btn" name="submit" value="Send Email" required/>
        </div>
       

    </form>
</div>
<div class="lcontent">
            <img src="img/Computer login.gif" alt="image">
        </div>
</div>
</body>
</html>
<!--<script>
        function chalja(){
            setTimeout(show,2000);
            function show(){
                document.getElementById('main').style.display="block";
                document.getElementById('img1').style.display="none";

            }
        }
    </script>-->