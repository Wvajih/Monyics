<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <style>
        header{height:10vw;padding-top:9vw;color:whitesmoke;width:100vw;text-transform:uppercase;}
        *{box-sizing:border-box;margin:0;padding:0;}

        body{background-color:whitesmoke;width:100vw}
        .form{
            position: relative;
            width:20rem;
            height:3rem;
            margin-bottom:30px;
        }
        :root{
            --bg:#12181b;
            --borderDefault:#ffffff69;
            --borderHover:#ffffff9f;
            --borderFocus:rgb(0,204,255);
            --labelDefault:#ffffff93;
        }
        #input{
            position:absolute;
            width:100%;
            height:100%;
            border: 2px solid #ffffff69;
            border-radius:0.5rem;
            font-size:1rem;
            color:white;
            padding:1.25rem;
            background-color:#222 !important;
            caret-color:var(--borderFocus);
        }
        #input:hover{
            border-color:var(--borderHover);
        }
        #input:focus{
            border-color:var(--borderFocus);
        }
        #label{
            position: relative;
            left:1rem;
            top:0.8rem;
            color:white;
            cursor:text;
            transition:250ms cubic-bezier(1,.2,0,.73);
            background-color:#222;
        }
        #input:focus ~ #label{
            top:-0.5rem;
            font-size:0.8rem;
            left:0.8rem;
            padding:5px
        }
        form{
            height:60vh;width:40vw;display:flex;flex-direction:column;
            background-color:#222;
            width:50VW;
            justify-content:center;
            align-items:center;
            box-shadow: 0px 5px 10px #555;
        }
        .form1 input{
            width:300px;
            background-color:#222;
            color:white;
            width:20rem;
            height:3rem;
            border-radius:.5rem;
            border:solid 1px #ffffff69;
        }
        .form1 input:hover{
            border:solid 1px whitesmoke;
        }
        @media screen and (max-width:600px){
            .container{
                flex-direction:column;
                width: 100%;
                
            }
            #input{
                width:100%;
            }
            form{
                width:100vw;
            }
            .form{
                width:45vw;
            }
        }
            
    </style>
</head>
<body>
    <header style="display:flex;align-item:center;justify-content:center;"></header>
    <main style="width:100vw;display:flex;align-item:center;justify-content:center">
    <form method="post" action="Validate.php">
    <p style="color:white;text-shadow:4px 5px 10px #556;font-family: 'Patua One', cursive;font-weight:500;font-size:23pt;position:relative;bottom:45px">Create Your MONICS Account</p>
        <div class="container" style="display:flex;flex-direction:row;">
            <div class="left" style="display:flex;flex-direction:column;margin-right:20px;">
                <div class="form">
                    <input type="text" name="name" id="input" placeholder="" />
                    <label id=label for="name">Name</label>
                </div>
                <div class="form">
                    <input type="text" name="name" id="input" placeholder="" />
                    <label id=label for="name">Tel</label>
                </div>
            </div>
            <div class="right" style="display:flex;flex-direction:column;">
                <div class="form">
                    <input type="text" name="name" id="input" placeholder="" />
                    <label id=label for="name">Email</label>
                </div>
                <div class="form">
                    <input type="password" name="name" id="input" placeholder="" />
                    <label id=label for="name">Password</label>
                </div>
            </div>
        </div>
            <div class="container" style="display:flex;flex-direction:row;">
            <div>
            <svg style="width: 23px;height:23px;position:relative;right:37%;background-color:white;border-radius:50%;padding:3px;top:7px;margin:4px"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
            <svg style="width: 23px;height:23px;position:relative;right:37%;background-color:white;border-radius:50%;padding:3px;top:7px;margin:4px"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                <div class="form1">
                    <input type="submit" name="btn" id="btn" value="Submit" />
                </div>
            <div>
    </form>
    </main>
</body>
</html>