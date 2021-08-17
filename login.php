<!DOCTYPE html>
<html>
<body

<?php
  session_start();

//require_once './config.php';
include("config.php");
//$n = "kinza";
//$name = "my name is $n";

if(isset($_POST['btn']))
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
// if(!isset($_SESSION["username" &&  mysqli_num_rows($result) > 0])) {
//     header("Location: index.php");
    
//     exit();
// }
    // if()
    // {
    //     header('location:index.php');
    
    
    //     $_SESSION['user']=$username;
      

    // }


}


?>

<form action="" method="post" name="form1">
<input type="text" placeholder="username" name="un">

<input type="text" placeholder="password" name="pw">

<button type="submit" name="btn" >submit
</button>
</form>



</body>
</html>