<?php
if (isset($_POST["submit"])) 
{
    include_once 'DBConnect.php';
    session_start();
    unset($_SESSION["msg"]);
    unset($_SESSION["message"]);
    unset($_SESSION["msg_type"]);

    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = md5($_POST['password']);

    if($_POST['password'] != $_POST['confirm_password']){ // if user havent enter same password and confirm password
        $_SESSION['msg']      = "Password and confirm passowrd should be Same";
        $_SESSION['msg_type'] = "error";
    }
    else{
        $database = new dbConnect();
        $db       = $database->openConnection();
        $sql1     = "select name, email from users where email='$email'";
        $user     = $db->query($sql1);
        $result   = $user->fetch_assoc();
    
        if (empty($result)) {
            $sql = "insert into users (name,email,password) values('$name','$email','$password')";
            $db->query($sql);
            $database->closeConnection();
            $_SESSION['msg']      = "You have registered successfully.<br/><a href='login_form.php'>Now Login</a>.";
            $_SESSION['msg_type'] = "sucess";

        } else {
            $_SESSION['msg']      = "Email already used";
            $_SESSION['msg_type'] = "error";
        }
    }
    header("location:register_form.php");
}
?>

