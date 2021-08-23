<?php
session_start();
require_once 'config.php';

if(isset($_POST['un']))
{



    $username=$_POST['un'];
    $password=$_POST['pw'];
    $sql = "SELECT * from users WHERE username ='".$username."'   && password = '".$password."' " ;
    $result = mysqli_query($link,$sql);

    //print_r($result);
    if($row=mysqli_num_rows($result)>0)
    {
        $_SESSION['user']=$username;
        header("location:index.php");

    }
    else{
        echo "user isnot authenticate";
    }
}else{
    print_r('else');
}

?>