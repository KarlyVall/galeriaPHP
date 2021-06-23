<?php
    if (isset($_POST['Login'])){$login = $_POST['Login']; unset($_POST['Login']);}
    if (isset($_POST['Password'])){$password = $_POST['Password']; unset($_POST['Password']);}
    require("../php/connectdatabase.php");
    if ((!empty($login))&&(!empty($password))){
        $query = "SELECT id,login,password,permissions FROM users";
        $result = $mysql->query($query);
        while ($row = $result->fetch_assoc())
        {
            if (($login==$row['login'])&&(password_verify($password,$row['password'])))
            {
                $_SESSION["username"]=$login;
                $_SESSION["userpermissions"]=$row['permissions'];
                $_SESSION["logged"]=true;
                $_SESSION["userid"]=$row['id'];
                header('Location: ../');                
                exit();
            }
        }
        echo ("<script>document.getElementById('loginerror').style.display='block';</script>");
    };
?>