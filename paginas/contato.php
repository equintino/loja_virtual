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
                <label for="" >Nome:</label>
                <input class="form-control" type="text" name="nome" />
                <label for="">E-mail: <img src="../web/image//email.png" alt="" height="20" /></label>
                <input class="form-control" type="email" name="email" />
                <label for="">WhatsApp: <img src="../web/image/zap.png" height="20" alt="" /></label>
                <input class="form-control" type="tel" name="zap" />
                <label for="">Mensagem: </label>
                <textarea class="form-control" name="mensagem" rows="4"></textarea>
                <button class="btn btn-danger" type="submit">Enviar</button>
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