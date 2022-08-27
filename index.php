



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign_in.css">
    <script src="https://kit.fontawesome.com/f6af0088ad.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signout">
                <form method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="email" autocomplete="off" require >
					</div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="password" placeholder="Password" name="password" require>
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="submit">
                    <p class="account-text">Don't have an account?<a href="#" id="sign-up-btn2">Sign up</a></p>
                </form>

                <form action="" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <div class="roles">
                        <p><a href="customer.html">Customer</a></p>
                        <p><a href="vendor.html">Vendor</a></p>
                        <p><a href="shipper.html">Shipper</a></p>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel leftcontainer">
                <div class="content">
                    <p>ALREADY HAVE AN ACCOUNT</p>
                    <button class="btn" id="sign-in-btn" name="submit">Sign in</button>
                </div>
                <img src="./image/undraw_progressive_app_m-9-ms (1).svg" class="image" alt="btn" >
            </div>
            <div class="panel rightcontainer">
                <div class="content">
                    <p>CREATE A NEW ACCOUNT</p>
                    <button class="btn" id="sign-up-btn" name="submit">Sign up</button>
                </div>
                <img src="./image/undraw_web_devices_re_m8sc.svg" class="image" alt="btn">
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>
</html>


<?php
    if(isset($_POST['submit'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];

        if ($email == 'email' && $password == 'password'){
            header("location:home.html");
            exit();
        }
        else 
            echo "<script>alert('Invalid Password')</script>";
    }
    else
        echo "<script>alert('Invalid Email')</script>";
  
?>
