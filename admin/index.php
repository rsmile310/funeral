<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funeraria ADAM</title>
        <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="login-body">
            <div class="thin"></div>

            <div class="wrapper">
                <div class="colimn-holder">
                    <div class="column-small-8 column-medium-10 column-large-8 margin-auto">
                        <div class="column-holder loginBox">
                            <div class="column-medium-6 login-banner flex vcenter content-center"
                                style="background: url(../image/login-bg.png) center/cover no-repeat;">
                                <div class="text-align-center">
                                    <h2>
                                        Bem Vindo!
                                    </h2>
                                    <p>
                                        Por favor realize seu login para dar continuiadade ao acesso a nossa Intranet.
                                    </p>
                                </div>
                                
                            </div>
                            <div class="column-medium-6 flex vcenter content-center">
                                <form id="loginForm">
                                    <div class="alert-box"></div>
                                    <h2>Realize seu Login</h2>
                                    <div class="position-relative input_field marginbottom-3">
                                        <img src="../image/email.svg" />
                                        <input type="text" id="username" placeholder="User name" required/>
                                    </div>
                                    <div class="position-relative input_field marginbottom-3">
                                        <img src="../image/lock.svg" />
                                        <input type="password" id="pwd" placeholder="Senha" required/>
                                    </div>
                                    <div class="text-align-center">
                                        <a href="javascript:void(0)">Esqueceu sua senha?</a><br>
                                        <button type="submit" id="loginBtn">
                                            Entrar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="paddingtop-0">
                <div class="copyright text-align-center margintop-0">
                    Desenvolvido por: <img src="../image/resttaura.png" class="footer-logo">
                </div>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#loginForm").on("submit", function(e){
                    e.preventDefault()
                    var email = $("#username").val()
                    var pwd = $("#pwd").val()

                    if(email == "admin" && pwd == "admin"){
                        window.location.href = "controller/loginController.php";

                    }
                    else
                        $(".alert-box").html("<p>Please input correct username and password!</p>")

                    window.setTimeout(function() {
                        $(".alert-box p").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove(); 
                        });
                    }, 2000);
                })
                
            })
        </script>
    </body>

</html>