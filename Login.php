<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        header{height:10vw;padding-top:9vw;color:whitesmoke;width:100vw;text-transform:uppercase;}
        *{box-sizing:border-box;}
        input:hover{
            box-shadow: 0px 2px 7px white;
        }
        input{
            font-family:arial;
            font-weight:600;
        }
        input[type="submit"]:hover{
            background-color:whitesmoke
        }
        body{background-color:#222;width:100vw}
        input[type="submit"]{background:#999;border-radius:10px;margin-left:auto;margin-right:auto;width:300px;height:50px}
        input[type="email"],input[type="password"]{padding-left:30px;border-radius:10px;border-top:none;border-left:none;border-right:none}
        label{color:whitesmoke}
        a{
            text-decoration:none;
        }
        a:hover{
            text-decoration:underline;
            transition-duration:.5s;
        }
    </style>
</head>
<body>
    <header style="display:flex;align-item:center;justify-content:center"><h2>Log in</h2></header>
    <main style="width:100vw;display:flex;align-item:center;justify-content:center">
    <form method="post" action="Validate.php" style="height:60vh;width:40vw;display:flex;flex-direction:column;align-item:center;justify-content:center;">
        <input style="height:50px" type="email" name="email" id="email" placeholder="Email" />
        </br>
        <input style="height:50px" type="password" name="password" id="password" placeholder="Password"/>
        </br>
        <p>
            <label for="Rem">Remember Me</label>
            <input type="checkbox" name="Rem" value="1" id="Rem" />
            <span style="float:right;"><a style="color:white" href="CreateAccount.php">Create Account</a></span>
        </p>
        
        <input type="submit" value="Login" name="Login">
    </form>
    </main>
    <?php
    if ((isset($_COOKIE['email'])) and (isset($_COOKIE['password']))){
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['password'];
        echo ("<script>
        document.getElementById('email').value ='$email';
        document.getElementById('password').value ='$pass';
        </script>");
    }
    
    ?> 
</body>
</html>