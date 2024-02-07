
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include("php/config.php");
            if (isset($_POST['submit'])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $sql = "select *from moms where username ='$username' and password='$password'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);
                if ($count == 1) {
                    header("Location:mainpage.html");

                } 
                else {
                    echo "<script>

                    setTimeout(SWAL, 1000);
                    function SWAL(){
                        alert('Invalid Email or Password' , 'success');
                    }

</script>";
                }
            }
            ?>

            <header>
                <h2>Login</h2>
            </header>
            <form action="login.php" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input id="username" type="text" name="username" required />
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required />
                </div>
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required />
                </div>
                <div class="links">
                    Don't have account ?<a href="Registration.php"> Sign Up NOW</a>
                </div>
                <div class="form-element">
                    <a href="resetpass.php">Forgot Password</a>
                </div>
            </form>
            
        </div>
        <div class="lcontent">
            <img src="img/Computer login.gif" alt="image">
        </div>

    </div>


</body>

</html>
