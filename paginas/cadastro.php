<style>
    .cadastro{
        padding-bottom: 50px;
    }
    .cadastro h2{
        margin-left: 40px;
        text-shadow: 1px 1px 1px gray;
        color: darkblue;
    }
    .cadastro form{
        width: 90%;
        margin: auto;
        border: 1px solid gray;
        background: rgba(0, 200, 0, 0.1);
    }
    .cadastro .botao{
        float: right;
    }
    .form-horizontal{
        padding: 0 20px;
    }
    .msg h3{
        text-shadow: 1px 1px 1px gray;
    }
    .msg img{
        position: relative;
        float: right;
        top: 10px;
        right: 70px;
        bottom: 2px;
    }
    @media (max-width: 768px){
        .msg img{
            top: 0;
            padding-bottom: 30px;
        }
    }
</style>
<?php
    $origem = array_key_exists("origem",$_GET)?$_GET['origem']:null;
    $login=Valida::getLogin();
?>
<script>var login="<?= $login ?>";var origem="<?= $origem ?>"</script>
<div class="container cadastro">
    <?php if(!isset($_GET['origem'])): ?>
    <h2>Cadastro Pessoal</h2>
    <form action="../paginas/add.php" method="post">
    <div class="form-horizontal">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                <label for="nome" class="control-label">Nome:</label>
                <input id="nome" class="form-control" type="text" name="nome" placeholder="Nome completo" style="width: 100%" autofocus/>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="nascimento" class="control-label">Data Nascimento:</label>
                    <input id="nascimento" class="form-control" type="text" name="nascimento" placeholder="dd/mm/aaaa" style="width: 100%" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="cpf" class="control-label">CPF:</label>
                    <input id="cpf" class="form-control" type="text" name="cpf" placeholder="Somente números" style="width: 100%" required/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-7">
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input id="email" type="email" name="email" class="form-control" placeholder="email@email.com" style="width: 100%" />
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label for="cel">Celular:</label>
                    <input id="cel" type="tel" name="tel" class="form-control" placeholder="(00)90000-0000" style="width: 100%" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input id="endereco" type="text" name="endereco" class="form-control" placeholder="Av. R. Tr. Bl. Bc." style="width: 100%"/>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="numero">N°:</label>
                    <input id="numero" type="text" name="numero" class="form-control" placeholder="000" style="width:100%"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="form-group">
                    <label for="">Bairro:</label>
                    <input type="text" name="bairro" class="form-control" placeholder="Pq. Pc." />
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">
                    <label for="">Cidade:</label>
                    <input type="text" name="cidade" class="form-control" placeholder="Cidade" />
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="">UF: </label>
                    <input type="text" name="uf" class="form-control" placeholder="XX" />
                </div>
            </div>
        </div>
        <div class="form-group form-group-sm">
            <label for="">CEP: </label>
            <input type="text" name="cep" class="form-control" placeholder="00000-000" />
        </div>
        <div class="form-group botao">
            <button class="btn btn-danger" type="submit" name="origem" value="cadastro">Enviar</button>
        </div>
    </div>
    </form>
    <?php else: ?>
    <?php $confirma=array_key_exists("conf",$_GET)?$_GET['conf']:null; ?>
    <h2>Login de Acesso</h2>
    <form action="../paginas/add.php" method="post">
    <div class="form-horizontal">
        <div class="row">
            <div class="col-sm-6 form-group">
                <label for="login">Login:</label>
                <input type="text" class="form-control" name="login" id="login" placeholder="Login"/>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" placeholder="password" name="senha" class="form-control"/>
                <label for="senha2">Confirmar Senha:</label>
                <input type="password" id="senha" placeholder="confirme password" name="senha2" class="form-control"/>
                <label for="email">email:</label>
                <input type="email" id="email" placeholder="Digite seu e-mail" name="email" class="form-control"/>
                <div class="botao">
                <button class="btn btn-danger">Enviar</button>
                </div>
            </div>
            <div class="col-sm-6 msg">
                <h3>
                    Com o Login de acesso você poderá realizar suas compras com segurança.
                </h3>
                <img src="../web/image/cadeado.png" alt="" height="100"/>
            </div>
        </div>
    </div>
        <input type="hidden" name="origem" value="login" />
        <input type="hidden" name="confirma" value="<?= $confirma ?>" />
    </form>
    <?php endif; ?>
</div>