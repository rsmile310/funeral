<?php 
    session_start();
    if(!isset($_SESSION['uname'])){
        header('Location: index.php');
    }
    include('controller/config.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM obitury_tbl WHERE Id = '$id'";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funeraria ADAM</title>
    <link rel="shortcut icon" type="../image/x-icon" href="./../image/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    >
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/upload.css" rel="stylesheet">
</head>

<body>
    <div class="msg-box"></div>
    <div class="topnav dash_Header paddingver-2">
        <div class="wrapper">
            <div class="column-holder">

                <div class="column-medium-3 marginleft-auto text-align-right">
                    <a href="javascript:void(0)" class="paddingver-2">
                        Admin
                    </a>
                    <a href="controller/logoutController.php" class="paddingver-2">
                        LogOut
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-content">
        <section>
            <div class="wrapper-full">
                <div class="column-holder">
                    <div
                        class="column-xlarge-3 margin-xlarge-0 column-large-6  column-medium-8 column-small-8 margin-auto tab paddingleft-xlarge-0">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="active">
                                    Gerenciamento de Obituários
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    Gerenciamento de Notícias
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form id="obituryUpdateForm" class="column-xlarge-9 margintop-3 margintop-xlarge-0 editWrap">
                        <h2 class="text-align-center">
                            Editar | Adicionar
                        </h2>

                        <?php 
                            foreach($result as $result){
                        ?>

                        <div class="column-holder">
                            <div class="column-small-6  marginbottom-3">
                                <input type="text" name="name" id="name" placeholder="Name" value="<?php echo $result['Name']; ?>" required />
                            </div>
                            <div class="column-small-6  marginbottom-3">
                                <div class="column-holder">
                                    <div class="column-6">
                                        <input type="number" name="age" placeholder="Idade" id="age" value="<?php echo $result['Age']; ?>" required />    
                                    </div>
                                    <div class="column-6">
                                        <input type="text" name="occuringDate" id="occuringDate" placeholder="DD|MM|YYYY" value="<?php echo substr($result['OccuringDate'], 8, 2)."|".substr($result['OccuringDate'], 5, 2)."|".substr($result['OccuringDate'], 0, 4); ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="column-small-6  marginbottom-3">
                                <input type="text" name="funeralPlace" placeholder="Local Atos Fúnebres"  id="funeralPlace" value="<?php echo $result['FuneralPlace']; ?>"  required />
                            </div>
                            <div class="column-small-6  marginbottom-3">
                                <div class="column-holder">
                                    <div class="column-6">
                                        <input type="text" name="funeralDate" id="funeralDate"  placeholder="DD|MM|YYYY" value="<?php echo $result['FuneralDate']; ?>" required />
                                    </div>
                                    <div class="column-6">
                                        <input type="text" name="funneralTime" id="funneralTime" placeholder="HH:MM" value="<?php echo $result['FuneralTime']; ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="column-small-6  marginbottom-3">
                                <input type="text" name="burialPlace" id="burialPlace" placeholder="Local Sepultamento" value="<?php echo $result['BurialPlace']; ?>" required />
                            </div>
                            <div class="column-small-6 marginbottom-3">
                                <div class="column-holder">
                                    <div class="column-6 ">
                                        <input type="text" name="burialDate" id="burialDate" placeholder="DD|MM|YYYY" value="<?php echo $result['BurialDate']; ?>" required />
                                    </div>
                                    <div class="column-6 ">
                                        <input type="text" name="burialTime" id="burialTime" placeholder="HH:MM" value="<?php echo $result['BurialTime'] ?>" required />
                                    </div>
                                </div>
                            </div>
                            <div class="column-small-6  marginbottom-3">
                                <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $result['Email'] ?>" required />
                            </div>
                        </div>
                        <div class="column-holder">
                            <div class="column-medium-8 margin-medium-auto">
                                <div class="position-relative">
                                    <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                                        <div id="drag_upload_file">
                                            <p>Drag here as images or click for the project</p>
                                            <p>
                                                <input class="upload-btn" type="button" value="" onclick="file_explorer();" />
                                            </p>
                                            <input type="file" name="selectfile" id="selectfile" value="<?php echo $result['Image']; ?>" />
                                            <input type="hidden" id="iniImgUrl" value="<?php echo $result['Image']; ?>" />
                                        </div>
                                    </div>

                                    <div class="img-content"></div>
                                </div>
                                
                                <div class="column-holder margintop-3">
                                    <div class="column-6">
                                        <button href="javascript: void(0)" type="submit" class="save" id="obturyUpdateBtn">
                                           SAVE
                                        </button>
                                    </div>
                                    <div class="column-6">
                                        <a href="dash.php" class="cancel"> 
                                            CANCEL
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php } ?>
                    </form>
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
        var fileobj;
        var imgUrl;
        function upload_file(e) {
            e.preventDefault();
            fileobj = e.dataTransfer.files[0];
            ajax_file_upload(fileobj);
        }
        
        function file_explorer() {
            document.getElementById('selectfile').click();
            document.getElementById('selectfile').onchange = function() {
                fileobj = document.getElementById('selectfile').files[0];
                ajax_file_upload(fileobj);
            };
        }
        
        function ajax_file_upload(file_obj) {
            if(file_obj != undefined) {
                var form_data = new FormData();                  
                form_data.append('file', file_obj);
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "imgUpload.php", true);
                xhttp.onload = function(event) {
                    oOutput = document.querySelector('.img-content');
                    if (xhttp.status == 200) {
                        oOutput.innerHTML = "<img src='"+ this.responseText +"' alt='The Image' />";
                        imgUrl = this.responseText;
                    } else {
                        oOutput.innerHTML = "Error " + xhttp.status + " occurred when trying to upload your file.";
                    }
                }
        
                xhttp.send(form_data);
            }
        }

        //obtury save script start
        $(document).ready(function(){
            $("#obituryUpdateForm").on("submit", function(e){
                e.preventDefault()
                if(imgUrl)
                    var data = $(this).serialize() + '&img=' + imgUrl
                else
                    var data = $(this).serialize() + '&img=' + $("#iniImgUrl").val()
                
                
                $.ajax({
                    type:"post",
                    dataType:"json",
                    url: "controller/UpdateObituryController.php?id=<?php echo $id; ?>",
                    data: data,
                    success: function(response){
                        if(response){
                            $(".msg-box").html("<div class='alert success'><i class='fa fa-check-square-o  fa-2x marginright-2' aria-hidden='true'></i> Updated successfully!</div>")

                            window.setTimeout(function() {
                                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                                    $(this).remove(); 
                                });
                            }, 2000);
                        }
                    },
                    error: function(data) {
                        successmessage = 'Error';
                        alert("error")
                    },
                })
            })
        })
        //obtury save script end
    </script>
</body>

</html>