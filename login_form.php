<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles.css">

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
        <form action="login.php" method="POST">
            <div class="row">
                <label>Email</label>
                <div>
                    <input type="email" name="email" id="email"
                        class="form-control"
                        placeholder="Enter your Email ID" required>
                </div>
            </div>

            <div class="row">
                <label>Password</label>
                <div>
                    <input type="Password" name="password" id="password"
                        class="form-control"
                        placeholder="Enter your password" required>

                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="submit"
                        class="btn login">Login</button>
                </div>
            </div>
            <div class="row">
                <div>
                    <a href="register_form.php"><button type="button"
                            name="submit" class="btn signup">Signup</button></a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>