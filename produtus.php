<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funeraria ADAM</title>
    <link rel="shortcut icon" type="image/x-icon" href="./image/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="thin"></div>
    <div class="topnav" id="myTopnav">
        <div class="wrapper">
            <div class="flex space-between vcenter flex-wrap">
                <a href="/" class="brand">
                    <img src="image/logo.png">
                </a>
                <button class="icon" onclick="myFunction()">
                    <div style="line-height: 5px;">&#8213;</div>
                    <div style="line-height: 5px;">&#8213;</div>
                    <div style="line-height: 5px;">&#8213;</div>
                </button>
                <div id="overlay" onclick="myFunction()"></div>
                <div class="menus">
                    <a href="index.php">Home</a>
                    <a href="sobre.php">Sobre nós</a>
                    <a href="produtus.php" class="active">Produtos</a>
                    <a href="noticias.php">Notícias</a>
                    <a href="#">Velório Digital</a>
                </div>
                <div class="headerOpt-right">
                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="image/fb-header.svg" class="icn-beforeSticky" style="height: 25px;">
                                <img src="image/fb-header-black.svg" class="icn-afterSticky" style="height: 25px;">
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <img src="image/insta-header.svg" class="icn-beforeSticky" style="height: 25px;">
                                <img src="image/insta-header-black.svg" class="icn-afterSticky" style="height: 25px;">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="body-content">
        <div class="banner">
            <div class="banner-content">
                Ética e qualidade<br>
                quando você mais precisa
            </div>
        </div>

        <section>
            <div class="wrapper text-align-center">
                <div class="section-title">
                    <h2>PRODUTOS</h2>
                </div>
                <p>
                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
                    duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
                </p>
            </div>
        </section>


        <section>
            <div class="wrapper">
                <div class="innerSection_withBottomSeparator text-align-center paddingver-5" style="background: url('image/bg-graphic.png') center/contain no-repeat;">
                    <h5 class="margintop-0">COROA DE FLORES</h5>
                    <p>
                        <small>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
                            consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Amet
                            minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat
                            duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet. Amet minim mollit
                            non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim
                            velit mollit. Exercitation veniam consequat sunt nostrud amet.</small>
                    </p>
                    <div class="display-inlineblock innerSection_separator"></div>
                    <div class="hor-form bg-transparent text-align-center margintop-3">
                        <button class="paddinghor-4">
                            PEÇA A SUA!
                        </button>
                    </div>
                </div>
              
            </div>
        </section>

        <footer>
            <div class="wrapper-full">
                <div class="column-holder vcenter">
                    <div
                        class="column-medium-6 text-align-center text-align-medium-left marginbottom-3 marginbottom-medium-0">
                        <p>
                            Funeraria Adams - Texto sobre direitos reservados (conferir)
                        </p>
                    </div>

                    <div class="column-medium-6 text-align-center text-align-medium-right">
                        <img src="image/logo-footer.png" class="footer-logo">
                    </div>
                </div>
            </div>
            <div class="copyright text-align-center">
                Desenvolvido por: <img src="image/resttaura.png" class="footer-logo">
            </div>
        </footer>

        <div class="floatingbtn">
            <a href="javascript:void(0)">
             <img src="image/whatsapp.svg" class="">
            </a>
         </div>
    </div>

    <script src="js/custom.js"></script>
</body>

</html>