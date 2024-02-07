<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!--meta tags-->        
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no, minimum-scale=1, maximum-scale=1, user-scalable=no" />


<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css2/credit.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">  
<!--page Title-->
<title>SAFEPAD - DONATION FORM</title>
<!-- Favicon-->
<link rel="icon" type="image" href="./images/website-favicon.png" sizes="192x192" />


<!--stylesheet link-->
    <link rel="stylesheet" type="text/css" href="css2/style.css">
 


  


<!-- custom add-ons -->
    <link rel="stylesheet" type="text/css" href="css2/add.css">
    <script src="owl.carousel/owl.carousel.min.js"></script>
    
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>


<body>


<!--navigation bar-->
<div class="container-fluid menu">
    <nav class="navbar navbar-expand-lg my-navbar">
      <h4><img id="logo" src="img/logo_girl.jpg">WombWhishpers</h4>
        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link  active" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  active" href="./index.html">Education</a>
              </li>
             
                <li class="nav-item">
                    <a href="project safepad.html" class="nav-link">Project Safepad</a>

                </li>
              
              
                <li class="nav-item">
                    <a href="./contactUS.html" class="nav-link">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!--nav bar end-->


<!--donation form text-->    
<section class="bg-light donation mx-auto">
    <div class="container my-1 bg-white">
    <?php
       
       include ("php/config1.php");
         if(isset($_POST['submit'])){
             $username = $_POST['name'];
             $email = $_POST['email'];
             $phone = $_POST['phone'];
            mysqli_query($conn,"INSERT INTO safepad(Username,Email,Phone)VALUES('$username','$email','$phone')") or die("Error Occured");
            
         }
         
         
         else{
         ?>
        <h4 class=" text-center pt-4">PROJECT SAFEPAD - DONATION FORM<hr class="donation-green-hr"></h4>
        <div class="row my-4 " data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-delay="200">
            <div class="adjform" >
                <div class="contimg">
                <img src="img/don8.jpg">
                </div>
            <div class='col'></div>
            <div class="col " id="frm">
                
                <form action="contactUs.html" name='donationform' method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name='name' placeholder="Your Name..." required> 
                      </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Your Email..." required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone"  name='phone' class="form-control" placeholder="Your Phone Number..." required>
                    </div>
                    <?php }  ?>
                    <div class="form-group">
                        <label for="donation-option">No. of Packets want to pay for</label>
                        <select class="form-control" id="donation-option" required>
                          <option value="">--Select Option--</option>
                          <option value="Pay for 1 Packet">Pay for 1 Packet</option>
                          <option value="Pay for 2 Packets">Pay for 2 Packets</option>
                          <option value="Pay for 3 Packets">Pay for 3 Packets</option>
                          <option value="Pay for 4 Packets">Pay for 4 Packets</option>
                          <option value="Pay for 5 Packets">Pay for 5 Packets</option>
                          <option value="Pay for 6 Packets">Pay for 6 Packets</option>
                          <option value="Pay for 7 Packets">Pay for 7 Packets</option>
                          <option value="Pay for 8 Packets">Pay for 8 Packets</option>
                          <option value="Pay for 9 Packets">Pay for 9 Packets</option>
                          <option value="Pay for 10 Packets">Pay for 10 Packets</option>
                          <option value="Pay for more than 10 Packets">Pay for more than 10 Packets</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-lg mt-2 ">Submit</button>
                  </form>
                  <hr >
                  </div>
                  <div class='col'></div>
                  </div>
        </div>
         
        <h3 class="text-center my-4">Our each Packet cost for @Rs.35, so pay in factor of Rs.35</h3>
        <div class="credit">
        <h3 style="text-align:center; color:palevioletred">𝕆𝕟𝕝𝕚𝕟𝕖 ℙ𝕒𝕪𝕞𝕖𝕟𝕥 𝕄𝕠𝕕𝕖  </h3>
        <div class="indiv">
        <a href="payment.html"><input  class="input" type="button" style="text-align:center; color:white; background-color: gray;" value="Debit or Credit card"></input></a>
        </div>
        </div>
        <div class="row text-center my-4 pb-5 ">
            
            <div class="col border-right" data-aos="fade-right" data-aos-easing="ease-in-sine" data-aos-delay="200">
                <p style="text-decoration: underline; font-weight: bold; font-size: larger;">Scan this to pay via Phone Pe</p>
                <img src="img/pe.jfif" class="pr-5" alt="paytm Qr code" width="250" height="150">
            </div>
            <div class="col px-auto" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-delay="200">
                <p style="text-decoration: underline; font-weight: bold; font-size: larger;">Scan this to pay via Google Pay</p>
                <img src="img/gpay.jfif" class="pr-5" alt="Googlepay Qr code" width="250" height="150">
            </div>
           
        </div>
     
   
        
</section>
<!-- donation form end-->


<!--footer--><footer id="footer">
  <div class="footer">
    <div class="flogo">
        <img src="./img/logo_girl.jpg" alt="image">
        <h4>WombWhishpers</h4>
    </div>
    <div class="connect">
        <h4>Connect With Us</h4>
        <hr>
        <div class="ficon">
            <i class="ri-linkedin-box-fill"></i>
            <i class="ri-github-fill"></i>
            <i class="ri-instagram-fill"></i>
        </div>
        <hr>
        <h3>© 2023 WombWhishpers Support</h3>

    </div>
    <div class="links">
        <h4>Quick Links</h4>
        <hr>
        <div class="flink">
            <a href="">About Us</a>
            <a href="">PrivacyPolicy</a>
            <a href="">Terms & COnditions</a>
        </div>
    </div>



</div>

</div>
</div>

    
  








</body>

</html>