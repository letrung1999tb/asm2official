
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/style.css">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="util.css">
    <link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div >
                <form class="login100-form validate-form flex-sb flex-w"  action="managing.php" method="POST" > 
                    <span class="login100-form-title p-b-32">
                        Account Login
                    </span>

                    <span class="txt1 p-b-11" for="user_id" >
                        Username
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                        <input class="input100" type="text" name="aduser" placeholder="Username"> 
                        <span class="focus-input100"></span>
                    </div>
                    
                    <span class="txt1 p-b-11" for="user_pass">
                        Password
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="adpass"  placeholder="Password"> 
                        <span class="focus-input100"></span>
                    </div>
                    
                    <div class="flex-sb-m w-full p-b-48">
                    </div>

                    <div class="container-login100-form-btn">
                     <input class="input100" type="submit" value="Login" style="font-size:50px">
                         
                     </style>>
                

                    </div>

                </form>
            </div>
        </div>
    </div>
    


    

</body>
</html>