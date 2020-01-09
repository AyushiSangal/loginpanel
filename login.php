<?php
    session_start();
    unset($_SESSION["msg"]);
    unset($_SESSION["message"]);
    unset($_SESSION["msg_type"]);
if (isset($_POST["submit"])) { // login submission 
    include_once 'DBConnect.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
  
    $database = new dbConnect(); // opening DB connection
    $db = $database->openConnection();
    
    $sql = "select * from users where email = '$email' and password= '$password'";
    $user = $db->query($sql);
    $result = $user->fetch_assoc();
    
    if(!empty($result)){
        $_SESSION['id']    = $result['id'];
        $_SESSION['name']  = $result['name'];
        $_SESSION['email'] = $result['email'];
         
        $database->closeConnection(); 
        header('location: dashboard.php');
    }
    else{
        $database->closeConnection();
        $_SESSION['msg']      = "Invalid Credentials";
        $_SESSION['msg_type'] = "error";
        header('location: login_form.php');
    }

}
?>
