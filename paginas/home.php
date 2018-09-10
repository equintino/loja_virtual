<link rel="stylesheet" type="text/css" href="../web/css/home.css" />
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
                if(isset($lista)){
                    $ltGal=count($lista) < 12?count($lista):12;
                    for($x=0;$x<$ltGal;$x++){
                        $produto = new Produto($lista[$x]->getCod_produto(), $lista[$x]->getValor(), $lista[$x]->getDescricao());
                        $produto->setImagem($lista[$x]->getImagem());
                        $galeria = new Galeria($produto);
                        $galeria->setGaleria();
                        echo $galeria->getGaleria();
                    }
                }
            ?>
        </div><!-- id_primeira -->
    </div><!-- galeria -->
</div><!-- container carousel -->