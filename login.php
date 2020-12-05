<?php
include 'login_valid.php';
//session expire 
// flag variable concept fpor unset the session
if(isset($_GET['flag'])){
    if(isset($_SESSION['cart'])) {
       unset($_SESSION['cart']);
    }
}
//cloe session expire
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ADMIN/style.css">
    <link rel="stylesheet" href="gui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>register Yourself</title>
</head>
<body>
<header>
     <div class="container-fluid">       <!-- data-toggle="slide-collapse" data-target="#navbarCollapse" -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light  sticky">
        <a class="navbar-brand " href="#" ><span class = "text-warning span-1">Ced</span><span class="span-2"><b>Cab</b></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                             </li>
            </ul>                    
        </div>
    </nav>
    </div>
</header>

    <section>
    <a href="index.php"><button class="btn-outline-success mt-1  ml-5"><i class="fa fa-hand-o-left" style="font-size:20px">GO Back</i></button></a>
<div class="container">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
   
        <div class="signuptable">
        <h3>LOGIN-HERE</h3>
            <form action="" method="POST">
                <table class='login-register'>
                    <tr>
                        <td>USER NAME</td>
                        <td><input type="text" name='username' id="username" value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>"><span><?php echo $username_err; ?></span></td>
                    </tr>
                    <tr>
                        <td>PASSWORD </td>
                        <td><input type="password" name='password' id="password" value="<?php if(isset($_COOKIE["pass"])) { echo ($_COOKIE["pass"]); } ?>"><span><?php echo $password_err; ?></span><span><?php echo $incorrect; ?></span></td>
                    </tr>
                        <tr>
                            <td><input type="checkbox" id="cookie-check" name="remember"> </td>
                            <td>Remember Your Credentials</span></td>
                        </tr>
                    <tr>
                        <td> <a href="registerpage.php">REGISTER</a></td> 
                        <td> <input type="submit" name="login" value="LOGIN"> </td>                                         
                    </tr>
                </table>
            </form>
        </div>
        </div>
        </div>
        </div>
    </section>
    <footer>
    <div class="container-fluid bg-light pt-2">
      <div class="row">
        <div class="col-sm-12  col-md-4 col-lg-4 col-xl-4 text-center">
          <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
          <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
          <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
          <i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i>
        </div>
        <div class="col-sm-12  col-md-4 col-lg-4 col-xl-4 text-center">
        <span class = "text-warning span-1 ml-4">Ced</span><span class="span-2 mr-5"><b>Cab</b></span>
          <!-- <p> <i class="fa fa-heart" aria-hidden="true"></i>thanks for Visisting and glad to see you -->
          </p>
        </div>
        <div class="col-sm-12  col-md-4 col-lg-4 col-xl-4 text-center">
          <nav>
            <a href="#" >FEATURES</a>
            <a href="#">REVIEW</a>
            <a href="#">SIGNUP</a>
          </nav>
        </div>
      </div>
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>