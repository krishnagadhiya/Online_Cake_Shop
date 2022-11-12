<?php
if (isset($_GET['register_msg']) && $_GET['register_msg'] == 1) {
    echo "<script>alert('Username already assigned!!!')</script>";
    echo "<script>window.location.assign('register.php')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #fddee6;
        }

        .container .card {
            height: 420px;
            width: 800px;
            background-color: #fff;
            position: relative;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            font-family: 'Roboto Slab', serif
        }

        .container .card .form {
            width: 100%;
            height: 100%;
            display: flex
        }

        .container .card .left-side {
            width: 50%;
            background-color: #FFEFF1;
            height: 100%;
            position: relative;
            overflow: hidden
        }

        .left-side span:nth-child(1) {
            position: absolute;
            transform: rotate(45deg);
            top: 70px;
            left: -100px;
            display: flex;
            height: 180px;
            width: 400px;
            border-top-right-radius: 150px;
            border-bottom-right-radius: 150px;
            
            background-image: linear-gradient(to right,  #fd2a6f, #fddee6)
        }

        .left-side span:nth-child(2) {
            position: absolute;
            transform: rotate(45deg);
            top: -20px;
            left: 130px;
            display: flex;
            height: 100px;
            width: 200px;
            border-top-right-radius: 150px;
            border-bottom-right-radius: 150px;
            background-image: linear-gradient(to right, #fddee6, #f55887)
        }

        .left-side span:nth-child(3) {
            position: absolute;
            transform: rotate(45deg);
            top: 280px;
            left: -70px;
            display: flex;
            height: 100px;
            width: 200px;
            border-top-right-radius: 150px;
            border-bottom-right-radius: 150px;
            background-image: linear-gradient(to right,  #fddee6, #f55887)
        }

        .left-side span:nth-child(4) {
            position: absolute;
            transform: rotate(-135deg);
            top: 370px;
            left: 170px;
            display: flex;
            height: 100px;
            width: 200px;
            border-top-right-radius: 150px;
            border-bottom-right-radius: 150px;
            background-image: linear-gradient(to right, #fddee6, #f55887)
        }

        .container .card .right-side {
            width: 50%;
            background-color: #FFEFF1;
            height: 100%;
            padding: 20px
        }

        .d-none {
            display: none !important
        }

        .login {
            display: flex;
            justify-content: center;
            text-align: center;
            width: 100%;
            margin-top: 20px
        }

        .input_text {
            margin-top: 20px;
            width: 100%;
            position: relative
        }

        input[type="text"] {
            height: 45px;
            width: 100%;
            border: none;
            background-color: white;
            outline: 0;
            padding: 5px 10px;
            padding-left: 25px;
            border-radius: 10px
        }

        input[type="password"] {
            height: 45px;
            width: 100%;
            border: none;
            background-color: white;
            outline: 0;
            padding: 5px 10px;
            padding-left: 25px;
            padding-right: 28px;
            border-radius: 10px
        }

        .fa-lock {
            position: absolute;
            top: 15px;
            left: 10px;
            cursor: pointer;
            color: #70747C
        }

        .fa-user {
            position: absolute;
            top: 14px;
            left: 9px;
            cursor: pointer;
            color: #70747C
        }

        .fa-envelope {
            position: absolute;
            top: 15px;
            left: 7px;
            cursor: pointer;
            color: #70747C;
            font-size: 14px
        }

        .fa-eye-slash {
            position: absolute;
            top: 15px;
            right: 9px;
            cursor: pointer;
            color: #70747C
        }

        .fa-eye {
            position: absolute;
            top: 15px;
            right: 9px;
            cursor: pointer;
            color: #70747C
        }

        .login_btn {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .login_btn button {
            height: 45px;
            outline: 0;
            border: none;
            width: 100%;
            color: #fff;
            border-radius: 30px;
            background-color:#F55887;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.5s
        }

        .login_btn button:hover {
            background-color: #631B26
        }

        .forgot {
            text-align: center;
            margin-top: 20px;
            font-size: 13px;
            color: #B8B0B1;
            font-weight: 600;
            letter-spacing: 1px
        }

        .forgot p a {
            text-decoration: none
        }

        .create {
            margin-top: 40px;
            text-align: center;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700
        }

        .margin {
            margin-top: 67px !important
        }

        .create a {
            text-decoration: none;
            color: blue
        }

        .signin_warn {
            border: 1px solid red !important
        }

        .signup_warn {
            border: 1px solid red !important
        }

        .signin_eye_wrn {
            border: 1px solid blue !important
        }

        .signup_eye_wrn {
            border: 1px solid blue !important
        }

        @media (max-width:750px) {
            .container .card {
                max-width: 350px
            }

            .container .card .right-side {
                width: 100%
            }

            .container .card .left-side {
                display: none
            }
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />



</head>

<body>
    <div class="container">
        <div class="card" style="height: 700px;">
            <div class="form"  >
                <div class="left-side"> <span style="top: 93px;left: -122px;" ></span> <span></span> <span style="top: 380px;"></span> <span style="top: 615px;"></span> </div>
                <div class="right-side">
                    <div class="signin_form s_form ">
                        <div class="login">
                            <h2>User Registrations</h2>
                        </div>
                        <br>
                        <br>
                        <form id="form" class="splash-container" data-parsley-validate="" method="post" action="insert_users.php">
                        <div class="input_text"> <input type="text" name="users_username" placeholder="Username"> <i class="fa fa-user"></i> </div>
                        <div class="input_text"> <input type="text" name="users_email" placeholder="Email"> <i class="fa fa-user"></i> </div>
                        <div class="input_text"> <input class="signin_pass" id="pass1" type="password" name="users_password" placeholder="Password"> <i class="fa fa-lock"></i> <i class="fa fa-eye-slash"></i> </div>
                        <div class="input_text"> <input class="signin_pass" data-parsley-equalto="#pass1" type="password"  placeholder="Confirm Password"> <i class="fa fa-lock"></i> <i class="fa fa-eye-slash"></i> </div>
                        <div class="input_text"> <input type="text" name="users_mobile" placeholder="Mobile"> <i class="fa fa-user"></i> </div>
                        <div class="input_text"> <input type="text" name="users_address" placeholder="Address"> <i class="fa fa-user"></i> </div>
                        
                        
                        <div class="login_btn"> <button class="login_button">Register</button> </div>
                        </form>
                        <div class="create margin"><p>Already member? <a href="login_users.php" class="create_acc"> Login Here. <i class="fa fa-long-arrow-right"></i></a></p> </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>




</body>

</html>