<?php include 'register_insert.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>register Yourself</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  sticky">
        <a class="navbar-brand " href="#" ><span class = "text-warning span-1">Ced</span><span class="span-2 mr-5"><b>Cab</b></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link btn btn-outline-secondary mr-2 " href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link btn  mr-2" href="#">Register and Sign_in is the way to access whole data<span class="sr-only">(current)</span></a>
            </li>             
            </ul>                    
        </div>
    </nav>
    </header>
    <section>
   <a href="login.php"><button class="btn-outline-danger mt-5 ml-5">Not Intrested --Go Back from here</button></a>
        <div class="signuptable mt-3 ml-5 mb-5">
            <div>
            <?php echo $correct; ?> 
            <?php echo $incorrect; ?> 
            </div>
            <form action="" method="POST">
                <table class = "login-register">
                    <tr>
                        <td>USER NAME</td>
                        <td><input type="text" name='username' id="username"><span><?php echo $username_err; ?></span></td>
                    </tr>
                    <tr>
                        <td>NAME</td>
                        <td><input type="text" name='name' id="name"><span><?php echo $name_err; ?></span></td>
                    </tr>
                    <tr>
                        <td>PASSWORD </td>
                        <td><input type="password" name='password' id="password"><span><?php echo $password_err; ?></span></td>
                    </tr>
                    <tr>
                        <td>RE-PASSWORD </td>
                        <td><input type="password" name='repassword' id="repassword"><span><?php echo $repassword_err; ?><span><?php echo $not_match; ?></span></td>
                    </tr>
                    <tr>
                        <td>MOBILE </td>
                        <td><input type="text" name='mobile' id="mobile"><span><?php echo $mobile_err; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2"> <input type="submit" name="register" value="REGISTER YOUR SELF"> </td>                   
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