<?php 
    include('admin/controller/config.php');
    $sql = 'SELECT * FROM obitury_tbl WHERE Status=1 ORDER BY OccuringDate DESC';
    $result = $conn->query($sql);
    $sql2 = 'SELECT * FROM news_tbl WHERE Status=1 ORDER BY Id DESC';
    $result2 = $conn->query($sql2);
?>
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
    <style>
        .home-news-row{
            display: none
        }
        .home-news-row.active{ 
            display: block
        }
        .allNewsViewBtn,
        .lessNewsViewBtn{
            display: none ;
        }
        .allNewsViewBtn.active,
        .lessNewsViewBtn.active{
            display: inline-block;
        }
    </style>
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
                    <a href="index.php" class="active">Home</a>
                    <a href="sobre.php">Sobre nós</a>
                    <a href="produtus.php">Produtos</a>
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
            <div class="wrapper">
                <div class="section-title text-align-center">
                    <h2>OBITUÁRIO</h2>
                </div>
                <div class="slideshow-wrapper">
                    <?php foreach($result as $result) { ?>

                    <div class="slider fade">
                        <div class="column-holder">
                            <div class="column-medium-3 text-align-left marginbottom-3 marginbottom-medium-0">
                                <img src="image/man.png" class="width-100" />
                            </div>
                            <div class="column-medium-9 paddingbottom-3">
                                <div class="abt-left">

                                    <h4 class="margintop-0"><?php echo $result['Name']; ?></h4>
                                    <p>
                                        Ocorrido no dia <?php echo substr($result['OccuringDate'], 8, 2)."|".substr($result['OccuringDate'], 5, 2)."|".substr($result['OccuringDate'], 0, 4); ?>
                                         aos <?php echo $result['Age']; ?> anos de idade
                                    </p>
                                    <p>
                                        Os Atos fúnebres serão realizados na <?php echo $result['FuneralPlace']; ?>
                                    </p>
                                    <p>
                                        O Velório iniciará no dia <?php echo $result['FuneralDate']; ?> as <?php echo $result['FuneralTime']; ?> e o Sepultamento acontecerá as
                                        <?php echo $result['BurialTime']; ?> do dia <?php echo $result['BurialDate']; ?> no <?php echo $result['BurialPlace']; ?> 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <div class="slider__dots">
                        <span class="slider__dots--dot" onclick="dotSlide(1)"></span>
                        <span class="slider__dots--dot" onclick="dotSlide(2)"></span>
                        <span class="slider__dots--dot" onclick="dotSlide(3)"></span>
                        <span class="slider__dots--dot" onclick="dotSlide(4)"></span>
                        <span class="slider__dots--dot" onclick="dotSlide(5)"></span>
                    </div>
                </div>

                <div class="hor-form paddinghor-3">
                    <div class="column-holder vcenter">
                        <div class="column-medium-3 marginbottom-3 marginbottom-medium-0">
                            <h4>Deixe sua condolências</h4>
                        </div>
                        <div class="column-medium-3 marginbottom-3 marginbottom-medium-0">
                            <input type="text" class="width-100" />
                        </div>
                        <div class="column-medium-4 marginbottom-3 marginbottom-medium-0">
                            <input type="text" class="width-100" />
                        </div>
                        <div class="column-medium-2 marginbottom-3 marginbottom-medium-0">
                            <button class="width-100">
                                ENVIAR
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="wrapper text-align-center">
                <div class="section-title">
                    <h3 class="position-relative">
                        <img src="image/quote.svg" class="quote-icon" />
                        A vida é feita de memórias,de saudades… Do que
                        ainda vive na gente, mas já se foi.</h3>
                </div>
                <p class="paddinghor-medium-5">
                    Saudade é o que ou quem te faz falta! É a ausência física do olhar,da voz e do toque. É não poder
                    mais compartilhar a pipoca, as risadas, os abraços, os beijos e dividir as angústias. É não sentir o
                    cheiro, o gosto e a textura da pele. É não receber mensagem de volta. É o último encontro ou a
                    visita que não se cumpriu pelo destino que a vida impôs. É perceber que os dias ficaram mais longos
                    e que a noite pode ser assombrada pela falta. Saudades são os pedaços que fomos deixando no
                    percurso. A saudade está na memória dos momentos mais simples,mas que a morte nos priva de viver e
                    projetar!
                </p>

                <div class="column-holder">
                    <div class="column-large-6 text-align-left marginbottom-3 marginbottom-large-0">
                        <div class="abt-left marginbottom-0">
                            <img src="image/man-mirror.png" class="width-100" />
                        </div>
                    </div>
                    <div class="column-large-6">
                        <div class="section-title text-align-left">
                            <h1>UMA MENSAGEM DE CARINHO E FRATERNIDADE DA EQUIPE ADAM</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="wrapper">
                <div class="section-title text-align-center">
                    <h2>NOTÍCIAS</h2>
                </div>
                <?php foreach($result2 as $key => $data) { ?>
                <div class="column-holder marginbottom-3 home-news-row <?php echo $key+1 ?>">
                    <div class="column-medium-4 text-align-left">
                        <div class="abt-left">
                            <img class="img-responsive" src="admin/<?php echo $data['Image']; ?>" />
                        </div>
                    </div>
                    <div class="column-medium-8 flex flex-column">
                        <div class="abt-right">
                            <h2><?php echo $data['Title']; ?></h2>
                        </div>
                        <p>
                            <?php echo $data['Summary']; ?>
                        </p>

                        <a href="noticias-aberta.php?id=<?php echo $data['Id']; ?>" class="a-btn margintop-auto read-more">CONTINUE LENDO</a>
                    </div>
                </div>

                <?php } ?>
                <div class="allnews text-align-center margintop-5">
                    <a href="javascript:void(0)" class="a-btn paddinghor-5 allNewsViewBtn active">
                        VEJA TODAS AS NOTÍCIAS
                    </a>
                    <a href="javascript:void(0)" class="a-btn paddinghor-5 lessNewsViewBtn">
                        Veja menos notícias
                    </a>
                </div>
            </div>
        </section>


        <section class="border-top">
            <div class="wrapper text-align-center">
                <div class="column-holder marginbottom-3 marginbottom-medium-0">
                    <div class="column-medium-6 text-align-center">
                        <div class="section-title text-align-center">
                            <h2>ONDE NOS ACHAR</h2>
                        </div>
                        <img src="image/map.png" />
                    </div>
                    <div class="column-medium-6 text-align-center">
                        <div class="section-title text-align-center marginbottom-medium-5">
                            <h2>CONTATOS</h2>
                        </div>
                        <p>
                            <strong>
                                Email:
                            </strong> exemplo@email.com.br<br>
                            exemplo_comercial@email.com.br
                        </p>
                        <p>
                            <strong>
                                Telefones:
                            </strong> (54) 9.0000-0000 <br>
                            (54) 9.0000-0000<br>
                            (54) 3331-0000
                        </p>

                        <div class="flex content-center">
                            <button class="btn-fb marginright-2">
                                <img src="image/fb.svg" /> Facebook
                            </button>
                            <button class="btn-insta marginleft-2">
                                <img src="image/insta.svg" /> Instagram
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="wrapper-full">
                <div class="column-holder vcenter">
                    <div class="column-medium-6 text-align-center text-align-medium-left marginbottom-3 marginbottom-medium-0">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // Slider Script
        var slideIndex = 1;
        showSlides(slideIndex);

        function dotSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slider");
            var dots = document.getElementsByClassName("slider__dots--dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        $(document).ready(function(){
            var len = $(".home-news-row").length;
            for(var i=1; i<=4; i++){
                $(".home-news-row."+i).addClass("active")
            }

            $(".allNewsViewBtn").click(function(){
                $(".home-news-row").addClass("active")
                $(this).removeClass("active")
                $(".lessNewsViewBtn").addClass("active")
            })
            $(".lessNewsViewBtn").click(function(){
                for(var i=5; i<=len; i++){
                $(".home-news-row."+i).removeClass("active")
                $(this).removeClass("active")
                $(".allNewsViewBtn").addClass("active")
            }
            })
        })
    </script>
</body>

</html>