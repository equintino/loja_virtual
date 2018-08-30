<style>
    .contato .row{
        width: 95%;
        margin: 10px auto;
    }
    .contato button{
        float: right;
        margin-top: 5px;
    }
    .estamos{
        text-align: center;
    }
</style>
<div class="container contato" >
    <div class="row">
        <div class="col-md-6">
            <form action="">
            <div class="form-group row">
                <label for="" class="col-2 col-form-label">Nome:</label>
                <input class="form-control col-10" type="text" name="nome" />
                <label for="">Data de Nascimento:</label>
                <input class="form-control" type="text" name="nascimento" />
                <label for="">CPF: </label>
                <input class="form-control" type="text" name="cpf" />
                <label for="">E-mail: </label>
                <input class="form-control" type="email" name="email" />
                <label for="">Tel.: </label>
                <input class="form-control" type="tel" name="tel" />
                <button class="btn btn-danger">Enviar</button>
            </div>
            </form>
        </div>
        <div class="col-md-6">
            <div class="estamos">
                <h3>Onde estamos:</h3>
                <img src="../web/image/mapa.png" alt="" />
            </div>
        </div>
    </div>
</div>
<?php