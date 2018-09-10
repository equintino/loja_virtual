<link rel="stylesheet" type="text/css" href="../web/css/home.css" />
<?php
    $dao = new DaoVitrine();
    $search = new CriterioProcura();
    $search->setTabela("tb_produto");   
    $dados=$dao->encontre($search);
    /*if(count($dados) == 1){
        if($dados){
            foreach($dados as $item){
                $vitrine = new Vitrine($item->getArray()['nome'], $item->getArray()['descricao'], $item->getArray()['imagem']);
                $lista[]=$vitrine;
            }
        }
    }else{*/
        if($dados){
            foreach($dados as $item){
                $vitrine = new Vitrine($item['nome'], $item['descricao'], $item['imagem']);
                $lista[]=$vitrine;
            }
        }
    //}
?>
<div class="container carousel-fundo" id="tudo">
    <?php if(isset($lista)): ?>
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php for($x=0;$x<count($lista);$x++): ?>
            <?php echo ($x==0)?'<li data-target="#main-carousel" data-slide-to="'.$x.'" class="active"></li>':'<li data-target="#main-carousel" data-slide-to="'.$x.'"></li>';
            endfor; ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php for($x=0;$x<count($lista);$x++): ?>
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
    <?php
        $dao = new Dao();
        $search = new CriterioProcura();
        $search->setTabela("tb_produto");
        $produtos=$dao->encontre($search);
        
    ?>
    <div id="galeria">
        <div id="primeira" class="row">
            <?php 
                foreach($produtos as $valor){
                    $produto = new Produto($valor['cod_produto'], $valor['valor'], $valor['descricao']);
                    $produto->setImagem($valor['imagem']);
                    $galeria = new Galeria($produto);
                    $galeria->setGaleria();
                    echo $galeria->getGaleria();
                }
            ?>
        </div><!-- id_primeira -->
    </div><!-- galeria -->
</div><!-- container carousel -->