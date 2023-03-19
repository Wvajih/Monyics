<?php

mysql_connect("localhost","root","");
mysql_select_db("monics");
session_start();
$email = $_POST['email'];
$pass = $_POST['password'];
$_SESSION['email'] = $email;
$_SESSION['password'] = $pass;
if(isset($_POST['Login'])){

    $res=mysql_query("SELECT IdUser,Adress,Password FROM appuser WHERE (Adress LIKE '$email' AND Password = '$pass')");
    $res1=mysql_fetch_array($res); 
    if (is_array($res1) and $res1['Adress']==$email and $res1['Password']==$pass){
        if (isset($_POST['Rem'])){
            setcookie('email',$email,time()+60*60*90);
            setcookie('password',$pass,time()+60*60*30);
        }

        header("location: Profile.php");
    }else{
        session_destroy();
        echo "email Or password Not valide click here to try again <a href='Login.php'>Try</a>";
    }
}else{
    header("location: Login.php");
}


?>