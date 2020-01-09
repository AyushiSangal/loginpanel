<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="styles.css">

<script src="http://ajax.microsoft.com/ajax/jquery/jquery-1.10.2.js" type="text/javascript"></script> 
<script type="text/javascript"  src="style.js"></script>
</head>
<body>
    <div class="demo-content">
        <?php
            session_start();
            if (!empty($_SESSION["msg"])) {
                echo '<div id="response" class="'. $_SESSION['msg_type'] .'">'.$_SESSION["msg"].'</div>';
                unset($_SESSION["msg"]);
                unset($_SESSION["msg_type"]);
            }
        ?>
        <form action="register.php" method="POST">
            <div class="row">
                <label class="required">Name</label>
                <div>
                    <input type="text" class="form-control" name="name"
                        id="name" placeholder="Enter your name" required>
                </div>
            </div>

            <div class="row">
                <label  class="required">Email</label>
                <div>
                    <input type="email" name="email" id="email" class="form-control"
                        placeholder="Enter your Email ID" required>
                </div>
            </div>

            <div class="row">
                <label  class="required">Password</label>
                <div>
                    <input type="Password" name="password" id="password" class="form-control"  minlength="6"
                    placeholder="Enter your password" required>

                </div>
            </div>

            <div class="row">
                <label  class="required">Confirm Password</label>
                <div>
                    <input type="password" name="confirm_password"
                        id="confirm_password" class="form-control" minlength="6"
                        placeholder="Re-enter your password" required>

                </div>
            </div>


            <div class="row">
                <div align="center">
                    <button type="submit" name="submit"
                        class="btn signup">Sign Up</button>
                </div>
            </div>

            <div class="row">
                <div>
                    <a href="login_form.php"><button type="button" name="submit"
                        class="btn login">Login</button></a>
                </div>
            </div>
    
    </div>



    </form>
    </div>
</body>
</html>
