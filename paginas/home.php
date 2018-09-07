<style>
    /* slide */
    .slider{
        height: 310px;
        background: rgba(255, 0, 0,0.8);
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
    #galeria{
        margin: 30px 0 0 40px;
    }
    #galeria #primeira > div, #galeria #segunda > div{
        margin-left: 20px;
        border-radius: 5px;
        border: 1px solid gray;
        padding-bottom: 10px;
        width: 200px;
        background: rgba(255, 255, 255, 0.4);
    }
    #galeria #primeira span.prod img, #galeria #segunda span.prod img{
        height: 170px;
    }
    #galeria #primeira div.descricao, #galeria #segunda div.descricao{
        margin: 10px 12px;
        font-family: tahoma;
        font-size: 12px;
        color: gray;
        width: 180px;
        text-align: left;
        text-shadow: none;
    }
    #galeria div.preco{
        margin-left: 10px;
        color: green;
        font-size: 20px;
        font-weight: bolder;
        width: 100%;
        text-align: left;
    }
    @font-face{
        font-family: "compacta-bt";
        src: url("../web/fonts/compacta-bt.ttf");
    }
    #galeria div.ticket{
        border-radius: 5px 0 0 5px;
        background: green;
        margin: 7px 0 0 7px;
        width: 64%;
        color: white;
        font-family: compacta-bt;
        font-size: 24px;
        padding: 5px 0;
        text-align: center;
        float: left;
        cursor: pointer;
    }
    #galeria span.imgCar{
        border-radius: 0 5px 5px 0;
        float: left;
        height: 45px;
        margin-top: 7px;
        background: greenyellow;
        padding: 4px 2px;
        cursor: pointer;
    }
    #galeria span.imgCar img{
        margin-top: 4px;
        padding: 0 10px;
    }
    @media (max-width: 991px){
        #galeria{
            margin: 30px;
        }
        #galeria #primeira .quatro, #galeria #segunda .quatro{
            margin-top: 20px;
        }
    }
    @media (max-width: 733px){
        #galeria{
            margin: 30px 0 0 0px;
        }
        #galeria #primeira > div, #galeria #segunda > div{
            margin-left: 10px;
            width: 190px;
        }
        #galeria #primeira .quatro, #galeria #segunda .quatro{
            margin-top: 20px;
        }
        #galeria #primeira span.prod img, #galeria #segunda span.prod img{
            height: 160px;
        }
        #galeria div.ticket{
            margin: 7px 0 0 5px;
        }
    }
    @media (width:360px){ 
        #galeria #primeira > div, #galeria #segunda > div{
           margin-top: 20px; 
        }
        #galeria{
            margin: 0 0 0 70px;
        }
    }
    #galeria div.seta_esquerda{
        position: relative;
        top: 437px;
        left: 20px;
        cursor: pointer;
        width: 40px;
    }
    #galeria div.seta_direita{
        position: relative;
        top: 295px;
        left: 20px;
        cursor: pointer;
    }
</style>
<?php  
    require_once "../classes/Produto.php";
    require_once "../classes/Galeria.php";
?>
<div class="container carousel-fundo">
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active slider">
                <div class="carousel-caption">
                    <h3>Primeiro Item</h3>
                    <p>Lorem ipsum dolor sit amet, Curabitur ac sagittis neque, vel egestas est. </p>
                </div>
                <span><img class="center-block" src="../web/image/computador.png" alt="Imagem do Primeiro Item" height="190" /></span>
            </div>
            <div class="item slider">
                <div class="carousel-caption">
                    <h3>Segundo Item</h3>
                    <p>Lorem ipsum dolor sit amet, Curabitur ac sagittis neque, vel egestas est. </p>
                </div>
                <span><img class="center-block" src="../web/image/note.png" alt="Imagem do Segundo Item" height="190"></span>
            </div>
            <div class="item slider">
                <div class="carousel-caption">
                    <h3>Terceiro Item</h3>
                    <p>Lorem ipsum dolor sit amet, Curabitur ac sagittis neque, vel egestas est. </p>
                </div>
                <span><img class="center-block" src="../web/image/monitor.png" alt="Imagem do Terceiro Item" height="190"></span>
            </div>
            <a class="carousel-control left" href="#main-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#main-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">Aqui você compra com segurança</div>
        <div class="col-sm-4">A entrega é garantida</div>
        <div class="col-sm-4">Produtos de primeira linha</div>
    </div><!-- row -->
    <?php
        $descricao = "<p>Intel i3 7100 3.9GHZ /</br>8GB DDR4 / HD 1TB /<br>Combo Teclado + Headset</p>";
        $produto = new Produto("0001", 2000, $descricao);
        $produto->setImagem("../web/image/galeria.png");
        $galeria = new Galeria($produto);
        $galeria->setGaleria();
        $galeria->setGaleria4();
    ?>
    <div id="galeria">
        <div id="primeira" class="row">
            <?php 
                for($x=0;$x < 3;$x++){
                    echo $galeria->getGaleria();
                }
                echo $galeria->getGaleria4();
            ?>
        </div><!-- id_primeira -->
        <div id="segunda" class="row">
            <?php 
                for($x=0;$x < 3;$x++){
                    echo $galeria->getGaleria();
                }
                echo $galeria->getGaleria4();
            ?>
        </div><!-- id_segunda -->
    </div><!-- galeria -->
</div><!-- container carousel -->