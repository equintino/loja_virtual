<style>
    #galeria{
        margin: 30px 0 0 40px;
    }
    #galeria #primeira .um, #galeria #primeira .dois, #galeria #primeira .tres, #galeria #primeira .quatro, #galeria #segunda .um, #galeria #segunda .dois, #galeria #segunda .tres, #galeria #segunda .quatro{
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
    #galeria span.preco{
        margin-left: -35px;
        color: green;
        font-size: 20px;
        font-weight: bolder;
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
            margin: 30px 0 0 30px;
        }
        #galeria #primeira .quatro, #galeria #segunda .quatro{
            margin-top: 20px;
        }
    }
    @media (max-width: 747px){
        #galeria{
            margin: 30px 0 0 30px;
        }
        #galeria #primeira .quatro, #galeria #segunda .quatro{
            margin-top: 20px;
        }
    }
    @media (max-width: 703px){
        #galeria{
            margin: 30px 0 0 0px;
        }
        #galeria #primeira .um, #galeria #primeira .dois, #galeria #primeira .tres, #galeria #primeira .quatro, #galeria #segunda .um, #galeria #segunda .dois, #galeria #segunda .tres, #galeria #segunda .quatro{
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
        #galeria #primeira .um, #galeria #primeira .dois, #galeria #primeira .tres, #galeria #primeira .quatro, #galeria #segunda .um, #galeria #segunda .dois, #galeria #segunda .tres, #galeria #segunda .quatro{
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
<div id="galeria">
    <div id="primeira" class="row">
        <div class="col-md-3 col-sm-4 col-xs-12 um">
             <span class="prod"><img src="../web/image/galeria.png" alt="" /></span>
             <div class="descricao">
                <p>Intel i3 7100 3.9GHZ /</br>
                8GB DDR4 / HD 1TB /<br>
                >Combo Teclado + Headset</p>
             </div>
             <span class="preco">R$ 2.000,00</span>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div><!-- gal1 -->
        <div class="col-md-3 col-sm-4 col-xs-12 dois">
             <span class="prod"><img src="../web/image/galeria.png" alt="" /></span>
             <div class="descricao">
                <p>Intel i3 7100 3.9GHZ /<br>
                8GB DDR4 / HD 1TB /<br>
                Combo Teclado + Headset</p>
             </div>
             <span class="preco">R$ 2.000,00</span>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div><!-- gal2 -->
        <div class="col-md-3 col-sm-4 col-xs-12 tres">
             <span class="prod"><img src="../web/image/galeria.png" alt="" /></span>
             <div class="descricao">
                <p>Intel i3 7100 3.9GHZ /<br>
                8GB DDR4 / HD 1TB /<br>
                Combo Teclado + Headset</p>
             </div>
             <span class="preco">R$ 2.000,00</span>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div><!-- gal3 -->
        <div class="col-md-3 col-sm-4 col-xs-12 quatro">
             <span class="prod"><img src="../web/image/galeria.png" alt="" /></span>
             <div class="descricao">
                <p>Intel i3 7100 3.9GHZ /<br>
                8GB DDR4 / HD 1TB /<br>
                Combo Teclado + Headset</p>
             </div>
             <span class="preco">R$ 2.000,00</span>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div><!-- gal4 -->
    </div><!-- id_primeira -->
    <div id="segunda" class="row">
         <div class="col-md-3 col-sm-4 col-xs-12 um">
             <span class="prod"><img src="../web/image/galeria.png" alt="" /></span>
             <div class="descricao">
                <p>Intel i3 7100 3.9GHZ /<br>
                8GB DDR4 / HD 1TB /<br>
                Combo Teclado + Headset</p>
             </div>
             <span class="preco">R$ 2.000,00</span>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
         </div><!-- gal1 -->
        <div class="col-md-3 col-sm-4 col-xs-12 dois">
             <span class="prod"><img src="../web/image/galeria.png" alt="" /></span>
             <div class="descricao">
                <p>Intel i3 7100 3.9GHZ /<br>
                8GB DDR4 / HD 1TB /<br>
                Combo Teclado + Headset</p>
             </div>
             <span class="preco">R$ 2.000,00</span>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div><!-- gal2 -->
        <div class="col-md-3 col-sm-4 col-xs-12 tres">
             <span class="prod"><img src="../web/image/galeria.png" alt="" /></span>
             <div class="descricao">
                <p>Intel i3 7100 3.9GHZ /<br>
                8GB DDR4 / HD 1TB /<br>
                Combo Teclado + Headset</p>
             </div>
             <span class="preco">R$ 2.000,00</span>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div><!-- gal3 -->
        <div class="col-md-3 col-sm-4 col-xs-12 quatro">
             <span class="prod"><img src="../web/image/galeria.png" alt="" /></span>
             <div class="descricao">
                <p>Intel i3 7100 3.9GHZ /<br>
                8GB DDR4 / HD 1TB /<br>
                Combo Teclado + Headset</p>
             </div>
             <span class="preco">R$ 2.000,00</span>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div><!-- gal4 -->
    </div><!-- id_segunda -->
</div><!-- galeria -->