<link rel="stylesheet" type="text/css" href="../web/css/home.css" />
<script>
    $(document).ready(function(){
            var click=0;
            $("#galeria .gal").find(".descricao, .prod").click(function(){
                click=1;
            });
            /*$("#galeria .gal").find(".prod").click(function(){
                click=1;
            });*/
            $("#galeria .gal").click(function(){
                var foto=$(this).find("span.prod img").attr("src");
                var detProd=$(this).find(".descricao").attr("descricao");
                var preco=$(this).find(".preco").text();
                var html="<center>"+detProd+"<br><strong><font color=red size=6px>"+preco+"</font></strong><br><img src='"+foto+"' alt='' height=120/></center>";
                if(login != "Entrar"){
                    $(".confCompra").html("<html>"+html+"</html>");
                    //$(".confCompra").text(texto+"?").append("<br><center><img src='"+foto+"' alt='' height=120/></center>");
                    $("#prodModal form input[type=hidden]").val($(this).find(".descricao").attr("codProd"));
                }else if(click==0){
                    alert("Só é possível realizar comprar após o login.");
                    $("#prodModal").attr("id","removido");
                }
                $("#textModal .modal-body").text(detProd);
                click=0;
            });
    });
</script>
<style>
    .confCompra{
        color: darkblue;
        font-size: 20px;
        text-transform: uppercase;
    }
    .titVenda h3{
        text-shadow: 1px 1px 1px gray;
    }
    .gal .descricao:hover{
        cursor: pointer;
        text-decoration: underline;
    }
    #textModal .modal-header{
        background: green;
    }
</style>
<?php
    $dao = new DaoVitrine();
    $search = new CriterioProcura();
    $search->setTabela("tb_produto");   
    $dados=$dao->encontre($search);
    if($dados){
        foreach($dados as $item){
            $vitrine = new Vitrine($item['nome'], $item['descricao'], $item['imagem']);
            $vitrine->setCod_produto($item['cod_produto']);
            $vitrine->setDescricao($item['descricao']);
            $vitrine->setValor($item['valor']);
            $lista[]=$vitrine;
        }
    }
?>
<div class="container carousel-fundo" id="tudo">
    <?php if(isset($lista)): $itVit=count($lista)<4?count($lista):4;?>
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php for($x=0;$x<$itVit;$x++): ?>
            <?php echo ($x==0)?'<li data-target="#main-carousel" data-slide-to="'.$x.'" class="active"></li>':'<li data-target="#main-carousel" data-slide-to="'.$x.'"></li>';
            endfor; ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php for($x=0;$x<$itVit;$x++): ?>
            <?php echo ($x==0)?'<div class="item slider active">':'<div class="item slider">'; ?>
                <div class="carousel-caption">
                    <h3><?= $lista[$x]->getTitulo() ?></h3>
                    <p><?= $lista[$x]->getTexto() ?></p>
                </div>
                <span><img class="center-block" src="<?= $lista[$x]->getImagem() ?>" alt="<?= $lista[$x]->getTitulo() ?>" height="190" /></span>
            </div>
            <?php endfor; ?>
            <a class="carousel-control left" href="#main-carousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#main-carousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-sm-4">Aqui você compra com segurança</div>
        <div class="col-sm-4">A entrega é garantida</div>
        <div class="col-sm-4">Produtos de primeira linha</div>
    </div><!-- row -->
    <div id="galeria">
        <div id="primeira" class="row">
            <?php 
            if(isset($lista)):
                $ltGal=count($lista) < 12?count($lista):12;
                for($x=0;$x<$ltGal;$x++):
                    $produto = new Produto($lista[$x]->getCod_produto(), $lista[$x]->getValor(), $lista[$x]->getDescricao());
                    $produto->setImagem($lista[$x]->getImagem());
                ?>
                    <div class="col-md-3 col-sm-4 col-xs-12 gal">
                         <span class="prod"><img src="<?= $produto->getImagem() ?>" alt="" data-toggle='modal' data-target='#textModal'/></span>
                         <div class="descricao" codProd="<?= $produto->getCodProduto() ?>" data-toggle="modal" data-target="#textModal" descricao="<?= $produto->getDescricao() ?>"><?= substr($produto->getDescricao(),0,40)."..." ?></div>
                         <div class="preco">R$ <?= number_format($produto->getValorUnitario(),'2',',','.') ?></div>
                         <div class="ticket" data-toggle="modal" data-target="#prodModal">COMPRAR</div>
                         <span class="imgCar" data-toggle="modal" data-target="#prodModal"><img src="../web/image/carrinho.png" alt="" height="26" /></span>
                    </div>
            <?php endfor; endif; ?>
        </div><!-- id_primeira -->
    </div><!-- galeria -->
    <div id="prodModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="../paginas/add.php" method="post" >
                <input type="hidden" name="codProd" /> 
            <div class="modal-md modal-content">
                <div class="modal-header" style="background:red">
                    <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                    <div class="modal-title titVenda"><h3>CONFIRMA A COMPRA?</h3></div>
                </div>
                <div class="modal-body confCompra"></div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-secondary" data-dismiss="modal" >NÃO</button>
                    <button class="btn btn-danger btn-primary" type="submit">SIM</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="textModal" role='dialog'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type="button" class="close" data-dismiss="modal" style="color:white">&times;</button>
                    <h4>Detalhes do Produto</h4>
                </div>
                <div class='modal-body confCompra'></div>
                <div class='modal-footer'>
                    <button class='btn btn-success' data-dismiss='modal'>Close</button>
                </div>
            </div>
        </div>        
    </div>
</div><!-- container carousel -->