    <div class="row" id='corpo'>
        <div class="col-8 offset-2 bg-white" align='center'>
            <br>
            <div class="col-10 border-bottom border-warning">
                <h1>Cadastro de Veículos</h1>
            </div>
            <br>
            <form class="col-10 contato" method="post" action="create">
                <input type="text" class='form-control' name="marca" placeholder='Marca do carro bionico...' value="<?= isset($veiculo['marca']) ? $veiculo['marca'] : "" ?>">
                <input type="text" class='form-control' name="modelo"  placeholder='Modelo do carro fantástico...' value="<?= isset($veiculo['modelo']) ? $veiculo['modelo'] : "" ?>">
                <input type="text" class='form-control' name="placa"  placeholder='Placa do carro simpático...' value="<?= isset($veiculo['placa']) ? $veiculo['placa'] : "" ?>">
                <input type="text" class='form-control' name="cor"  placeholder='Cor do carro titânico...' value="<?= isset($veiculo['cor']) ? $veiculo['cor'] : "" ?>">
                <input type="hidden" name="id" value="<?= isset($veiculo['id']) ? $veiculo['id'] : ""  ?>">
                
                <button class='btn btn-danger col-10'>Enviar</button>
            </form>
        </div>
    </div>