<?php 
    session_start();
    if(!isset($_SESSION['uname'])){
        header('Location: index.php');
    }
    include('controller/config.php');
    $sql1 = 'SELECT * FROM obitury_tbl ORDER BY OccuringDate DESC';
    $result1 = $conn->query($sql1);
    $sql2 = 'SELECT * FROM news_tbl ORDER BY Id DESC';
    $result2 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funeraria ADAM</title>
    <link rel="shortcut icon" type="../image/x-icon" href="../image/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/dash.css" rel="stylesheet">
    <style>
        .body-content{
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="topnav dash_Header paddingver-2">
        <div class="wrapper">
            <div class="column-holder">
                <div class="column column-medium-6 offset-medium-3">
                    <div class="position-relative headerSearch">
                        <img src="../image/bars.svg">
                        <input type="text" class="width-100" placeholder="Para onde você gostaria de ir?">
                    </div>
                </div>
                <div class="column-medium-3 flex vcenter space-between">
                    <a href="javascript:void(0)" class="padding-2">
                        Admin
                    </a>
                    <a href="controller/logoutController.php" class="padding-2">
                        Log out
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-content">
        <section>
            <div class="wrapper-full">
                <div class="column-holder">
                    <div class="column-xlarge-3 margin-xlarge-0 column-large-6  column-medium-8 column-small-8 margin-auto tab paddingleft-xlarge-0">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="active obituary-mng-btn">
                                    Gerenciamento de Obituários
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="news-mng-btn">
                                    Gerenciamento de Notícias
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="column-xlarge-9 margintop-3 margintop-xlarge-0">
                        <div class="dash-obituary-box active">
                            <div class="text-align-right marginbottom-4">
                                <a href="obtuaryAdd.php" class="add-obituary-btn">Adicionar obituários</a>
                            </div>
                            <div class="column-holder">
                                <?php   
                                    foreach($result1 as $data){
                                ?>
                                <div class="column-6 marginbottom-2">
                                    <div class="column-holder dash-obitury-row <?php if(!$data['Status']) echo 'active' ?>">
                                        <div
                                            class="column-medium-3 text-align-left marginbottom-3 marginbottom-medium-0 paddingright-medium-0">
                                            <img src="<?php echo $data['Image']; ?>" class="img-responsive">
                                        </div>
                                        <div class="column-medium-9 paddingleft-medium-2">
                                            <div class="abt-left small-font">
                                                <h4 class="margintop-0 marginbottom-0"><?php echo $data['Name']; ?></h4>
                                                <p class="marginbottom-0">
                                                    Data: <?php echo substr($data['OccuringDate'], 8, 2)."|".substr($data['OccuringDate'], 5, 2)."|".substr($data['OccuringDate'], 0, 4); ?> 
                                                    <span>Idade: <?php echo $data['Age']; ?> anos</span>
                                                </p>
                                                <p class="marginbottom-0">
                                                    Casa funerária: <?php echo $data['FuneralPlace']; ?>
                                                </p>
                                                <p class="marginbottom-0">
                                                    Data do funeral: <?php echo $data['FuneralDate']; ?> - <?php echo $data['FuneralTime']; ?>
                                                </p>
                                                <p class="marginbottom-0">
                                                    Local de enterro: <?php echo $data['FuneralPlace']; ?>
                                                </p>
                                                <p class="marginbottom-0">
                                                    Data de enterro: 09|08|2021 - 00:00
                                                </p>
                                                <p class="marginbottom-0">
                                                    Email: <?php echo $data['Email']; ?>
                                                </p>

                                                <div class="flex actionBtns">
                                                    <a href="obituryUpdate.php?id=<?php echo $data['Id']; ?>" class="edit">
                                                        EDITAR
                                                    </a>
                                                    <a href="controller/StatusController.php?id=<?php echo $data['Id'];?> && status=<?php echo $data['Status'] ?>" class="visivel">
                                                    <?php 
                                                        if($data['Status']) echo 'Ocultado'; 
                                                        else echo 'Visível'
                                                    ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="dash-news-box">
                            <div class="text-align-right marginbottom-4">
                                <a href="newsAdd.php" class="add-news-btn">Adicionar Corretor</a>
                            </div>
                            <div class="column-holder">
                                <?php   
                                    foreach($result2 as $data){
                                ?>
                                <div class="column-6  marginbottom-2">
                                    <div class="column-holder dash-obitury-row <?php if(!$data['Status']) echo 'active' ?>">
                                        <div class="column-medium-3 text-align-left marginbottom-3 marginbottom-medium-0 paddingright-medium-0">
                                            <img src="<?php echo $data['Image']; ?>" class="img-responsive">
                                        </div>
                                        <div class="column-medium-9 paddingleft-medium-2">
                                            <div class="abt-left small-font">
                                                <h4 class="margintop-0 marginbottom-1"><?php echo $data['Title']; ?></h4>
                                                <p class="marginbottom-1">
                                                    <?php echo $data['Summary']; ?>
                                                </p>

                                                <div class="flex actionBtns">
                                                <a href="newsUpdate.php?id=<?php echo $data['Id']; ?>" class="edit">
                                                        EDITAR
                                                    </a>
                                                    <a href="javascript:void(0)" forId="<?php echo $data['Id'];?>" forStatus="<?php echo $data['Status'] ?>" class="visivel newsStatusBtn">
                                                    <?php 
                                                        if($data['Status']) echo 'Ocultado'; 
                                                        else echo 'Visível'
                                                    ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                            <!-- <div class="pagination">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)" class="active">1</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">2</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <img src="../image/right-arrow.svg">
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="paddingtop-0">
            <div class="copyright text-align-center margintop-0">
                Desenvolvido por: <img src="../image/resttaura.png" class="footer-logo">
            </div>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".obituary-mng-btn").click(function(){
                $(this).addClass("active");
                $(".news-mng-btn").removeClass("active");
                $(".dash-obituary-box").addClass("active")
                $(".dash-news-box").removeClass("active")
            })
            $(".news-mng-btn").click(function(){
                $(this).addClass("active");
                $(".obituary-mng-btn").removeClass("active");
                $(".dash-news-box").addClass("active")
                $(".dash-obituary-box").removeClass("active")
            })

            $(".newsStatusBtn").click(function(){
                var id = $(this).attr("forId")
                var status = $(this).attr("forStatus")
                var temp = $(this);
                console.log(status)

                $.ajax({
                    type:"post",
                    dataType:"json",
                    url: "controller/NewsStatusController.php",
                    data: {'id': id, 'status': status},
                    success: function(response){
                        if(response){
                            // console.log(response)
                            if(response==1){
                                temp.text("Ocultado")
                                temp.attr("forStatus","1")
                                temp.closest(".dash-obitury-row").removeClass("active")
                            }
                            else{
                                temp.text("Visível")
                                temp.attr("forStatus","0")
                                temp.closest(".dash-obitury-row").addClass("active")
                            }
                        }
                    },
                    error: function(data) {
                        successmessage = 'Error';
                        alert("error")
                    },
                })
            })
        })
    </script>
</body>

</html>