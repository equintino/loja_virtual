<style>
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
    $descricao = "<p>Intel i3 7100 3.9GHZ /</br>
                8GB DDR4 / HD 1TB /<br>
                Combo Teclado + Headset</p>";
    $vitrine = new Produto("0001", 2000, $descricao);
    $vitrine->setImagem('../web/image/galeria.png');
    
    $gal='<div class="col-md-3 col-sm-4 col-xs-12">
             <span class="prod"><img src="'.$vitrine->getImagem().'" alt="" /></span>
             <div class="descricao" codProd='.$vitrine->getCodProduto().'>'.$vitrine->getDescricao().'</div>
             <div class="preco">R$ '.number_format($vitrine->getValorUnitario(),'2',',','.').'</div>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div>';
    $gal_4='<div class="col-md-3 col-sm-4 col-xs-12 quatro">
             <span class="prod"><img src="'.$vitrine->getImagem().'" alt="" /></span>
             <div class="descricao" codProd='.$vitrine->getCodProduto().'>'.$vitrine->getDescricao().'</div>
             <div class="preco">R$ '.number_format($vitrine->getValorUnitario(),'2',',','.').'</div>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div>';
?>
<div id="galeria">
    <div id="primeira" class="row">
        <?php 
            for($x=0;$x < 3;$x++){
                echo $gal;
            }
            echo $gal_4;
        ?>
    </div><!-- id_primeira -->
    <div id="segunda" class="row">
        <?php 
            for($x=0;$x < 3;$x++){
                echo $gal;
            }
            echo $gal_4;
        ?>
    </div><!-- id_segunda -->
</div><!-- galeria -->