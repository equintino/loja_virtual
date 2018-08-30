<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Loja Virtual</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="../web/image/ass_e.ico" />
        <link rel="stylesheet" href="../web/css/bootstrap.min.css">

        <!--<link rel="stylesheet" href="../web/css/estilos.css" />-->
        <script src="../web/js/jquery-3.2.1.min.js" type="text/javascript" ></script>
        <script src="../web/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            background: #e7e7e7;
        }
        .logo{
            /*float: left;*/
            margin-top: 7px;
            z-index: 4;
            position: absolute;
        }
        .entrar{
            float: right;
            margin-top: 10px;
        }
        .entrar:hover, .carrinho:hover{
            color: #ccc;
            text-shadow: 1px 1px 1px black;
        }
        .carrinho{
            float: right; 
            margin: 10px 15px 10px 3px;
        }
        .carrinho .fig2{
            position: absolute;
            top: 8px;
        }
        .compra{
            margin-left: 8px;
        }
        #top form{
            float: right;
            margin-top: 10px;
        }
        #top form span{
            float: right;
            background: #e7e6e2;
            padding: 1px 7px;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
        #top form input{
            border-radius: 5px 0 0 5px;;
            border: none;
            border: 1px solid #ccc;
        }
        #top{
            width: 100%;
            position: fixed;
            z-index: 17;
            background: red;
            right: 0;
            height: 41px;
        }
        #footer .row{
            padding-left: 100px;
        }
        @media (max-width: 767px){
            #top form{
                margin: -1px -7px; 
            }
            #footer{
                text-align: center;
            }
            #footer .row{
                padding-left: 0;
            }
            #footer_2 ul{
                display: none;
            }
        }
        @media (max-width: 441px){
            #top form input{
                width: 130px;
            }
        }
        @media (max-width: 445px){
            #top{
                height: 65px;
            }
            #top form input{
                width: 190px;
            }
            #top form{
                position: absolute;
                top: 25px;
                right: 5px;
            }
            #footer{
                text-align: center;
            }
            #footer .row{
                padding-left: 0;
            }
        }
        #menu{
            margin-top: 40px;
            background: #78d571;
            z-index: 16;
        }
        #menu li a{
            color: white;
            text-shadow: 2px 2px 1px black;
        }
        #content{
            position: relative;
            top: 91px;
            margin: auto;
        }
        @media (max-width: 991px){
            #content{
                top: 141px;
            }
        }
        @media (max-width: 785px){
            #content{
                top: 91px;
            }
        }
        @media (max-width: 445px){
            #menu{
                top: 25px;
            }
            #content{
                top: 114px;
            }
        }
        /* slide */
        .slider{
            height: 310px;
            background: rgba(255, 0, 0,0.8);
        }
        .entrar, .carrinho{
            cursor: pointer;
            font-family: sans;
            font-weight: bolder;
            color: rgba(255, 255, 255, 1);
            text-shadow: 1px 1px 1px gray;    
        }
        @import url('../web/fonts/handlee-regular.ttf');
        #home .row{
            color: darkblue;
            text-shadow: 1px 1px 1px gray;
            font-family: 'Handlee', cursive;
            font-family: 'Arial';
            text-align: center;
            padding: 10px 0;
        }
        /* footer */
        #footer{
            clear: both;
            width: 100%;
            background: #3f3c32;
            /*height: 450px;*/
            padding-bottom: 50px;
            position: relative;
            top: 110px;
            color: white;
        }
        #footer_2{
            font-size: 12px;
            font-weight: bolder;
        }
        #footer_2 ul{
            list-style: none;
            float: right;
            margin-top: -10px;
            cursor: pointer;
        }
        #footer_2 ul li > a{
            color: white;
            text-decoration: none;
        }
        #footer_2 ul li{
            display: inline;
            padding-left: 2px;
        }
        #footer_2 .ass{
            margin-top: 40px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".navbar-nav").on("click", function(){
                if($(document).width() < 767){
                    $(".navbar-toggle").trigger("click");
                }
            });
            $("#footer_2 ul li a").click(function(){
                var menuAtivo=$(this).attr("nome");
                $(".nav li a").each(function(){
                    if($(this).attr("href") == menuAtivo){
                        $(this).trigger("click");
                    }
                });
            });
            
            $(document).click(function(){
                //alert($(document).width());
            });
        });
    </script>
    </head>
    <body>
        <div id="head">
            <div id="top">
                <div class="logo">
                    <a href="#"><img src="../web/image/ass_e.png" height="40" alt=""/></a>
                </div>
                <div class="carrinho">
                    <span>Carrinho</span>
                    <img src="../web/image/carrinho.png" alt="" height="20" />
                    <img class="fig2" src="../web/image/circulo.png" alt="" height="23" />
                    <span class="compra">0</span>
                </div><!-- carrinho -->
                <div class="entrar">
                    <span>Entrar</span>
                    <img src="../web/image/homem.png" alt="" height="20"/>
                </div><!-- entrar -->
                <form action="#" method="post" id="busca" class="navbar-form">
                    <input placeholder="  O que você procura?" type="text" name="busca" />
                    <span><img src="../web/image/lupa.png" alt="" height="17" /></span>
                </form>
            </div><!-- top -->
            <nav id="menu" class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-principal" aria-expanded="true">
                            <span class="sr-only">Alternar Navegação</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse" id="navbar-principal">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#home" data-toggle="tab">HOME</a></li>
                        <li><a href="#categoria" data-toggle="tab">CATEGORIA</a></li>
                        <li><a href="#monte" data-toggle="tab">MONTE SEU PC</a></li>
                        <li><a href="#peca" data-toggle="tab">PEÇAS</a></li>
                        <li><a href="#acessorio" data-toggle="tab">ACESSÓRIOS</a></li>
                    <!--<ul class="nav navbar-nav navbar-right">-->
                        <li><a href="#somos" data-toggle="tab">QUEM SOMOS</a></li>
                        <li><a href="#contato" data-toggle="tab">FALE CONOSCO</a></li>
                    </ul>
                    </div><!-- navbar principal -->
                </div><!-- container -->
            </nav><!-- menu -->
        </div><!-- head -->
        <div id="content">
        <div class="tab-content">
            <div class="tab-pane active" id="home">
                <?php require_once "../paginas/home.php" ?>
            </div>
            <div class="tab-pane" id="categoria">Conteúdo categoria</div>
            <div class="tab-pane" id="monte">Conteúdo Monte seu PC</div>
            <div class="tab-pane" id="peca">Conteúdo Peças</div>
            <div class="tab-pane" id="acessorio">Conteúdo Acessórios</div>
            <div class="tab-pane" id="somos">Conteúdo Quem Somos</div>
            <div class="tab-pane" id="contato">
                <?php require_once "../paginas/contato.php" ?>
            </div>
        </div><!-- tab-content -->
        </div><!-- content -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <h4>INSTITUCIONAL</h4>
                        Empresa<br>
                        Como comprar<br>
                        Envio<br>
                        Tempo de Garantia<br>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h4>CONTATO</h4>
                            (21)0000-0000<br>
                            email@email.com<br>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <h4>PAGAMENTO</h4>
                        <img src="../web/image/boleto.png" alt="" height="25"/> <img src="../web/image/master.png" alt="" height="25"/> <img src="../web/image/visa.png" alt="" height="25"/>
                    </div>
                </div>
            </div><!-- container -->
            <hr>
            <div class="container">
                <div class="row" id="footer_2">
                    <ul>
                        <li><a href="#head" nome="#home">HOME &nbsp</a>|</li>
                        <li><a href="#head" nome="#categoria">CATEGORIA &nbsp</a>|</li>
                        <li><a href="#head" nome="#onta">MONTE SEU PC &nbsp</a>|</li>
                        <li><a href="#head" nome="#peca">PEÇAS &nbsp</a>|</li>
                        <li><a href="#head" nome="#acessorio">ACESSÓRIOS &nbsp</a>|</li>
                        <li><a href="#head" nome="#somos">QUEM SOMOS &nbsp</a>|</li>
                        <li><a href="#head" nome="#contato">FALE CONOSCO</a></li>
                    </ul>
                    <div class="col-sm-10">
                        <br>FF.Com Ltda CNPJ 00.000.000/0001-00 Rodovia Art Boi Filho, 00 CEP: 00000-000 Presidente Petrúcio - RJ<br><br>
                        Copyright 2012-2017 www.site.com.br - TODOS OS DIREITOS RESERVADOS. Os preços e condições de pagamento são válidos exclusivamente para compras realizadas via internet e poderão sofrer alteração sem aviso prévio. Em caso de divergência, o preço válido é sempre o do carrinho de compras.
                    </div>
                    <div class="col-sm-2 ass">
                        <a href="#"><img src="../web/image/ass_d.png" height="50" alt="" /></a>
                    </div>
                </div><!-- row2 -->
            </div><!-- container2 -->
        </div>
    </body>
</html>
