<style>
    h2{
        text-align: center;
        color: darkblue;
        text-shadow: 1px 1px 1px gray;
    }
    #primeira span.prod img{
        min-width: 80px;
        max-height: 110px;
        max-width: 180px;
    }
    #primeira div.descricao{
        font-family: tahoma;
        font-size: 18px;
        color: gray;
    }
    div.preco{
        color: green;
        font-size: 28px;
        font-weight: bolder;
        width: 100%;
        text-align: left;
    }
    @font-face{
        font-family: "compacta-bt";
        src: url("../web/fonts/compacta-bt.ttf");
    }
    div.ticket{
        border-radius: 5px 0 0 5px;
        background: green;
        margin: 7px 0 0 0px;
        width: 64%;
        color: white;
        font-family: compacta-bt;
        font-size: 24px;
        padding: 5px 0;
        text-align: center;
        float: left;
        cursor: pointer;
    }
    span.imgCar{
        border-radius: 0 5px 5px 0;
        float: left;
        height: 45px;
        margin-top: 7px;
        background: greenyellow;
        padding: 4px 2px;
        cursor: pointer;
    }
    span.imgCar img{
        margin-top: 4px;
        padding: 0 10px;
    }
</style>
<script>
    $(document).ready(function(){
        $("li a[href='#home']").click(function(){
            if(origem=="procura"){
                window.location.assign("../web/index.php");
            }
        });
    });
</script>
<?php 
$busca = array_key_exists("busca",$_POST)?$_POST['busca']:null;
$dao = new Dao();
$daoVitrine = new DaoVitrine();
$model = new Model();
$search = new CriterioProcura();
$search->setTabela("tb_produto");
$search->setArray(array("nome"=>$busca));
$dados = $dao->encontre($search);
?>
<div class="container">
    <div id="primeira" >
    <h2>Resultado de Busca</h2>
        <div>
        <?php 
            if(isset($busca)){
                if(is_array($dados)){
                    foreach($dados as $item){
                        /* classificacao */
                        foreach($daoVitrine->encontre($search) as $valor){
                            $nota = ($valor['vendido']+$valor['pesquisado'])/2;
                            $model->setTabela("tb_classifica");
                            $model->setId($valor['id']);
                            $model->setArray(array("cod_classifica"=>$valor['cod_produto'],"nota"=>$nota,"vendido"=>$valor['nota'],"pesquisado"=>$valor['pesquisado']+1));
                            $daoVitrine->grava($model);
                        }

                        $produto = new Produto($item['cod_produto'], $item['valor'] , $item['descricao']);
                        $produto->setImagem($item['imagem']);
                        $galeria = new Galeria($produto);
                        $galeria->setGaleria();
                        echo $galeria->getGaleria();
                    }
                }else{
                    echo ' 
                    <div class="alert alert-info">
                            <h3>Nenhum ítem foi encontrado.</h3>
                    </div>';
                }
            }
        ?>
        </div>
    </div><!-- id_primeira -->
</div><!-- galeria -->