<?php
include 'login_valid.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ADMIN/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>register Yourself</title>
</head>
<body>
    <header>
        <div class="top-foot">
            Welcome to The Ced-Cab PORTAL 
        </div>
            </header>
<header>
            <!-- data-toggle="slide-collapse" data-target="#navbarCollapse" -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light  sticky">
        <a class="navbar-brand " href="#" ><span class = "text-warning span-1">Ced</span><span class="span-2 mr-5"><b>Cab</b></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link btn btn-outline-secondary mr-2" href="">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link btn btn-outline-secondary mr-2 " href="index.php">BOOK NEW RIDE <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rides
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" id="pending_rides">Pending Rides</a>
                    <a class="dropdown-item" href="#" id = "complete_rides">Complete Rides</a>
                    <a class="dropdown-item" href="#" id = "all_rides">All Rides</a>
                </div>
                </div>
            </li>
            <li class="nav-item active">
                <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle mr-2 " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ACCOUNT
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" id="update_info" data-toggle="modal" data-target="#updateinfomodal">Update Information</a>
                    <a class="dropdown-item" href="#" id="change_pass" data-toggle="modal" data-target="#updatepasswordmodal">Change Password</a>
                </div>
                </div>
            </li>               
            </ul>                    
        </div>
    </nav>
</header>
<div class="login_info"> Heiiiiii--- Hello before try tp login ..you have to make sure you are already registred, If you not registered --first register yoursel</b></div>
<a href="index.php"><button class="btn-outline-success mt-5">Not Intrested --Go Back from here</button></a>
    <section>
        <div class="signuptable">
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
                            <td>Remeber the login_id and Password </span></td>
                        </tr>
                    <tr>
                        <td> <a href="registerpage.php">REGISTER</a></td> 
                        <td> <input type="submit" name="login" value="LOGIN"> </td>                                         
                    </tr>
                </table>
            </form>
        </div>
    </section>
    <footer>
        <div class="top-foot">
            developed and designed by cedcoss
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>