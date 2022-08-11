<!DOCTYPE html>
<html lang="en">
<head>
    <link href="style_login.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Prima Group</title>
</head>
<body>
    <div class="layar">
        <div class="background">
            <div class="box">
                <div class="letak">
                    <form class="login" action="vlogin.php" method="post">
                        <span class="login100-form-logo">
                            <img src="img/logo/pg.png" alt="">
                        </span>
                        <div style="text-align: center; margin-bottom: 6pt; ">
                            <img src="img/prima.png" alt="" style="width: 110pt; margin: 5pt auto;">
                        </div>
                        <span class="login100-form-title">
                            Log in
                        </span>
                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" type="text" name="user_name" placeholder="Username">
                            <span class="focus-input100"><img src="img/username.png" alt=""></span>
                        </div>
    
                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"><img src="img/password.png" alt=""></span>
                        </div>
    
                        <div class="contact100-form-checkbox" style="margin-top:-10pt ;">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            Remember-me
                        </div>
    
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </form>
                    <div style="color : red;">
                        <?php
                            if(isset($_GET['pesan']))
                            echo $_GET['pesan'];
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>