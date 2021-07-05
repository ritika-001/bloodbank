<?php 
    require '../../include/services/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="include/">
        <meta charset="utf-8" />
        <title>Socal Link</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php require '../../include/index_libs.php'; ?>
    </head>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,600;1,700;1,800;1,900&display=swap');
        body{
            background: #f4f8fb;
        }
        .font-mont{
            font-family: 'Montserrat',sans-serif;
        }
        .font-poppins{
            font-family:  'Poppins', sans-serif;
        }  
        .container{
            height: 100%;
            line-height: 100%;
        }
        .new-container{
            background: #fff;
            border-top: 6px solid #3a88ec;
            border-radius: 5px;
            padding-left: 3vw;
            padding-right: 3vw;
        }       
        br{
            user-select: none;
        }
        .otp-title{
            font-weight: 500;
            font-size: 35px;
            color: #363636;
        }
        .otp-small-text{
            color: #575353;
        }
        .underline{
            color: inherit;
            text-decoration: underline;
        }
        .team{
            margin-left: 20px;
            position: relative;
        }
        .team:before{
            content: '';
            width: 10px;
            height: 2px;
            background-color: #212529;
            position: absolute;
            display: block;
            top: 50%;
            margin-left: -10px;
            transform: translate(-50%,-50%);
        }
        .buttonHere{
            padding: 15px 50px;
            font-weight: 600;
            font-size: 18px;
            background: #3a88ec;
            border-radius: 5px;
            color: #fff;
            outline: none;
        }
        .buttonHere:hover{
            color: #fff;
        }
        .all-center{
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .all-center h6{
            font-weight: 600;
            color: #000;
            text-transform: uppercase;
        }
        .all-center-2 h6{
            font-weight: 600;
            color: #555050;
            text-transform: uppercase;   
        }
        .myul{
            list-style-type: none;
        }
        .myul li{
            margin-right: 25px;
            margin-top: 15px;
            font-size: 20px;
            display: inline-block;
        }
        .myul li:last-child{
            margin-right: 0px;
        }
    </style>
   <body>
        <div class="container" style="margin:0 auto;">
            <div class="row mt-5 d-flex justify-content-center align-items-center">
                <div class="col-lg-9 new-container pt-5 pb-5">
                    <img src="<?php echo $jsroot;?>/include/assets/images/purple_logo.png" height="70px">
                    <br/>
                    <br/>
                    <hr/>
                    <br/>
                    <h1 class="font-mont otp-title">Hey jeet makwana,</h1>
                    <br/>
                    <h5 class="font-poppins otp-small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
                    <br/>
                    <h5 class="font-poppins otp-small-text mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
                    <br/>
                    <a href="#" class="buttonHere font-poppins">Read more</a>
                    <br/>
                    <br/>
                    <br/>
                    <hr/>
                    <h5 class="font-poppins team"> Emplitrack Team.</h5>
                </div>
                <div class="col-lg-8">
                    <br/>
                    <br/>
                    <div class="all-center">
                        <h6 class="font-mont">
                            HELP CENTER
                        </h6>
                        <h6 class="font-mont">
                            -
                        </h6>
                        <h6 class="font-mont">
                            Support 24/7
                        </h6>
                        <h6 class="font-mont">
                            -
                        </h6>
                        <h6 class="font-mont">
                            account
                        </h6>
                    </div>
                    <br/>
                </div>
                <div class="col-lg-7">    
                    <center>
                        <p class="text-muted font-poppins">© 2020 Emplitrack- All rights reserved.</p>
                    </center>
                    <div class="all-center all-center-2">
                        <h6 class="font-mont">
                            <a href="mailto:emplitrack@gmail.com">
                                emplitrack@gmail.com
                            </a>
                        </h6>
                        <h6 class="font-mont">
                            |
                        </h6>
                        <h6 class="font-mont">
                            <a href="tel:+918866050023">
                                +91 88660 50023
                            </a>
                        </h6>
                        <h6 class="font-mont">
                            |
                        </h6>
                        <h6 class="font-mont">
                            unsubscribe
                        </h6>
                    </div>
                    <center>
                        <ul class="myul">
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </center>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
   </body>
</html> 