<?php
session_start();
if (isset($_POST["Login"])){ $login=$_POST["Login"]; unset($_POST["Login"]) ;};
if (isset($_POST["Password"])){ $password=$_POST["Password"]; unset($_POST["Password"]) ;};
if (isset($_POST["Email"])){ $email=$_POST["Email"]; unset($_POST["Email"]) ;};
if (!empty($email)){
    require("../php/connectdatabase.php");
    $query="SELECT email FROM users";
    $result = $mysql->query($query);
        while ($row = $result->fetch_assoc())
        {
            if ($email==$row["email"]){
                header("Location: http://localhost/phpGaleria/register/index.php?wrongemail=true");
                exit();
            }
        }
    if (!empty($login)&&!empty($password)){
        $hashed=password_hash($password,PASSWORD_BCRYPT);
        $query="INSERT INTO users (login, password, email, permissions) VALUES ('$login', '$hashed', '$email', 'user')";
        $result = $mysql->query($query);
        header("Location: http://localhost/phpGaleria/confirmation/confirmation.php?result=$result");
    };
}
?>