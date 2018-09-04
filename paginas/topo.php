<style>
    /* Carrinho de compra */
    .logo{
        margin-top: 7px;
        z-index: 4;
        position: absolute;
    }
    .entrar{
        float: right;
        margin-top: 10px;
    }
    .entrar, .carrinho{
        cursor: pointer;
        font-family: sans;
        font-weight: bolder;
        color: rgba(255, 255, 255, 1);
        text-shadow: 1px 1px 1px gray;    
    }
    .entrar:hover, .carrinho:hover{
        color: #ccc;
        text-shadow: 1px 1px 1px black;
    }
    .entrar span a{
        color: white;
    }
    /* modal */
    .modal-header{
        background: blue;
        color: white;
    }
    /* carrinho */
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
    #top{
        width: 100%;
        position: fixed;
        z-index: 17;
        background: red;
        right: 0;
        height: 41px;
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
    @media (max-width: 767px){
        #top form{
            margin: -1px -7px; 
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
    }
    /* menu */
    #menu{
        margin-top: 40px;
        background: #78d571;
        z-index: 16;
    }
    #menu li a{
        color: white;
        text-shadow: 2px 2px 1px black;
    }
    @media (max-width: 445px){
        #menu{
            top: 25px;
        }
    }
</style>
<div id="top"><!-- carrinho de compra -->
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
        <span><a href="#" data-toggle="modal" data-target="#login_modal">Entrar</a></span>
        <img src="../web/image/homem.png" alt="" height="20"/>
    </div><!-- entrar -->
    <form action="../paginas/procura.php" method="post" id="busca" class="navbar-form">
        <input placeholder="  O que você procura?" type="text" name="busca" />
        <span><img src="../web/image/lupa.png" alt="" height="17" /></span>
    </form>
</div><!-- carrinho de compra -->
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
<div id="login_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-sm modal-content">
            <form action="../paginas/login.php" class="form-group" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Bem Vindo</h4>
                </div>
                <div class="modal-body">
                    <!--<label for="" class='form-label-group'>LOGIN: </label>-->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" ></i></span>
                        <input class="form-control" type="text" name="login" autofocus placeholder="Entre com seu LOGIN"/>
                    </div>
                    <!--<label for="" class='form-label-group'>SENHA: </label>-->
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input class="form-control" type="password" name="senha" placeholder="Digite sua SENHA"/>
                    </div>
                    <a href="#cadastro" data-dismiss="modal" data-toggle="tab">Cadastrar</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal" >Close</button>
                    <button class="btn btn-danger btn-primary" type="submit" name="entrar" >Entrar</button>
                </div>
            </form>
        </div><!-- model content -->
    </div><!-- model dialog -->
</div><!-- login modal -->
<div id="sair_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-sm modal-content">
            <form action="../paginas/login.php" class="form-group" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Volte Sempre</h4>
                </div>
                <div class="modal-body">
                    <h3>Estamos a disposição para atendê-lo.</h3>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-secondary" data-dismiss="modal" >Close</button>
                    <button class="btn btn-danger btn-primary" type="submit" name="sair" >Sair</button>
                </div>
            </form>
        </div><!-- model content -->
    </div><!-- model dialog -->
</div><!-- login modal -->