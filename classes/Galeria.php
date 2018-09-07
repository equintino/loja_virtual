<?php 
class Galeria{
    private $codProduto;
    private $valorUnitario;
    private $descricao;
    private $imagem;
    private $vitrine;
    
    private $galeria;
    private $galeria4;
  
    public function __construct(Produto $produto) {
        $this->codProduto = $produto->getCodProduto();
        $this->valorUnitario = $produto->getValorUnitario();
        $this->descricao = $produto->getDescricao();
        $this->imagem = $produto->getImagem();
    }
    public function getDescricao() {
        return $this->descricao;
    }
    public function getVitrine() {
        return $this->vitrine;
    }
    public function getGaleria() {
        return $this->galeria;
    }
    public function getGaleria4() {
        return $this->galeria4;
    }
    private function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    public function setVitrine($vt) {
        $this->vitrine = $vt;
    }
    public function setGaleria() {
        $gal='<div class="col-md-3 col-sm-4 col-xs-12">
             <span class="prod"><img src="'.$this->getImagem().'" alt="" /></span>
             <div class="descricao" codProd='.$this->getCodProduto().'>'.$this->getDescricao().'</div>
             <div class="preco">R$ '.number_format($this->getValorUnitario(),'2',',','.').'</div>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div>';
        $this->galeria = $gal;
    }
    public function setGaleria4() {
        $gal='<div class="col-md-3 col-sm-4 col-xs-12 quatro">
             <span class="prod"><img src="'.$this->getImagem().'" alt="" /></span>
             <div class="descricao" codProd='.$this->getCodProduto().'>'.$this->getDescricao().'</div>
             <div class="preco">R$ '.number_format($this->getValorUnitario(),'2',',','.').'</div>
             <div class="ticket">COMPRAR</div>
             <span class="imgCar"><img src="../web/image/carrinho.png" alt="" height="26"/></span>
        </div>';
        $this->galeria4 = $gal;
    }
    public function getCodProduto() {
        return $this->codProduto;
    }
    private function setCodProduto($codProduto) {
        $this->codProduto = $codProduto;
    }
    public function getValorUnitario() {
        return $this->valorUnitario;
    }
    private function setValorUnitario($valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }
    public function getImagem() {
        return $this->imagem;
    }
    private function setImagem($imagem) {
        $this->imagem = $imagem;
    }
}
    /*$descricao = "<p>Intel i3 7100 3.9GHZ /</br>
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
     */