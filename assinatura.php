<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assinatura Email</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <style>
            html{font-family: Optima, sans-serif;}
            body{
                width: 100vw;
                height: 100vh;
                margin: 0;
                animation: colors 15s ease infinite;
                background-size: 300% 300%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .Esquerda{
                border-bottom: 2px solid red;
                height: 100px;
                width: 20px;
                background-color: red;
                border-top-right-radius: 7px;
                border-top-left-radius: 7px;
            }
            .Esquerda img{
                margin: 0 5px 0 5px;
            }
            .meio{
                width: 230px;
                float: left;
                height: 100px;
            }
            .direita{
                height: auto;
                float: right;
                margin-top:auto;
                margin-left: auto;
                margin-bottom: 5px;
                margin-right: 7px;
            }
            .nome{
                width: 392px;
                font-size: 25.36px;
                margin: 5px ;
            }
            .cargo{
                padding-right: 3px;
                width: 230px;
                color: white;
                border-bottom-right-radius: 7px;
                border-top-right-radius: 7px;
                background-color: red;
                width: 100%; 
                height: 18px;
                text-align: right;

            }
            .cargo p{
                width: 100%;
                font-size: 14px;
                padding-right: 2px;
                margin: 0px;
            }
            .section1{
                width: 412px;
                display: flex;
                border-bottom: 2px solid red;
            }
            p{
                font-size: 10.66px;
                margin: 7px 0 0 7px;
                
            }
            .baixo{
                text-align:center;
                width: 412px;
            }
            .baixo p{
                margin: 0px;

            }
            
    </style>
</head>
<body>  
    <h2>PRÉ VISUALIZAÇÃO</h2>
                <div id="imprimir">
                    <section class="section1">
                        <div class="Esquerda">
                            <img src="favicon/Telefone.png" style="margin-top: 65px;">
                            <img src="favicon/Email.png">
                        </div>
                        <div class="meio">
                            <p class="nome"><?php echo ($_POST['name']); ?></p>
                            <div class="cargo"> <p> <?php echo ($_POST['depto']);?> </p> </div>
                            <div class="telemail"> 
                                <p><?php 
                                    echo ('(00) 0000-00'); 
                                   if($_POST['ramal'] != null){ echo (substr($_POST['ramal'], -2));}
                                   else{ echo('00');}
                                    if($_POST['tel'] != Null){
                                        echo (' - '); echo ( $_POST['tel']);
                                    }
                                    ?> 
                                </p> 
                                <p><?php echo ($_POST['email']); ?></p> 
                            </div>
                        </div>
                        <div class="direita">                                
                            <img src="favicon/logo.png" style="width: 124px; height: 50px;">
                        </div>
                        
                    </section>
                    <section class="baixo">
                            <p style="color: red;">NOME SUA EMPRESA AQUI LTDA</p>
                            <p>1975 - 2025 - 50 anos</p>

                    </section>
                                </div> 
                                </br></br>
                <button onclick="screenshot()">Gerar imagem</button>
                                </br></br></br></br>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.js"></script>
                <script>
               
                    function screenshot(){
                        var node = document.getElementById('imprimir')
                        domtoimage.toPng(node)
                            .then(function (dataUrl) {
                                var img = new Image();
                                img.src = dataUrl;
                                document.body.appendChild(img);
                            })
                            .catch(function (error) {
                                console.error('oops, something went wrong!', error);
                            });
                            }
                </script>

</body>
</html>