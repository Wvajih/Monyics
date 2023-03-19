<?php
session_start();
if (isset($_SESSION["email"])){
    if(isset($_POST["submit"])){
        if (isset($_FILES["f"])){
            $file= $_FILES["f"];
            $fileName=$_FILES["f"]["name"];
            $fileTmp=$_FILES["f"]["tmp_name"];
            $fileSize=$_FILES["f"]["size"];
            $fileError=$_FILES["f"]["error"];
            $fileTyper=$_FILES["f"]["type"];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png','gif');
            if(in_array($fileActualExt,$allowed)){
                if ($fileError===0){
                    if ($fileSize<10000000){
                        if (isset($_POST['title'])){
                            $t = $_POST['title'];
                            $fileNameNew = $t .'_'. uniqid('',true).'.'.$fileActualExt;
                        }else{
                            $fileNameNew = uniqid('',true).'.'.$fileActualExt;
                            $t="";
                        }
                        $fileDestination = "img/".$fileNameNew;
                        mysql_connect("localhost","root","");
                        mysql_select_db("monics");
                        $E=$_SESSION["email"];
                        $res=mysql_query("SELECT IdUser FROM appuser WHERE Adress LIKE '$E'");
                        $req=mysql_fetch_array($res);
                        $d=date("Y-m-d H:i:s");
                        $di=$_POST['Disc'];
                        $res2=mysql_query("INSERT INTO post ( `IdPost` , `CreatedBy` , `CreateDate` , `Caption` , `PostType` , `PostDesc` , `FilePath` )
                        VALUES ('', '$req[0]','$d','$t', 'Post','$di', '$fileDestination')");
                        move_uploaded_file($fileTmp,$fileDestination);
                        header("location: index1.php");
                    }else{echo"your image have a big size";}
                }else{echo"there was an arror";}
            }else{echo"chose .jpg or .jpeg or .png or .gif";}
        }else{echo("image non disponible");}
    }else{header("location: Update.html");}
}else{header("location: Login.php");}
?>