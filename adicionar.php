<?php
//Header
include_once "includes/header.php";
?>

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br /><br />

    <div class="row center">
      <div class="s12">
        <h3 class="light">Adicionar carros</h3>


        <form action="php_action/create.php" method="POST">

          <div class="input-field col s12 m4">
            <input type="text" name="marca" id="marca">
            <label for="marca">Marca</label>
          </div>

          <div class="input-field col s12 m4">
            <input type="text" name="modelo" id="modelo">
            <label for="modelo">Modelo</label>
          </div>

          <div class="input-field col s12 m4">
            <input type="text" name="descricao" id="descricao">
            <label for="descricao">Descrição</label>
          </div>

          <div class="input-field col s12 m4">
            <input type="text" name="mod_fab" id="mod_fab">
            <label for="mod_fab">Modelo/Fabricação</label>
          </div>

          <div class="input-field col s12 m4">
            <input type="text" name="cor" id="cor">
            <label for="cor">Cor</label>
          </div>

          <div class="input-field col s12 m4">
            <input type="text" name="placa" id="placa">
            <label for="placa">placa</label>
          </div>

          <div class="input-field col s12">
            <input type="text" name="valor" id="valor">
            <label for="valor">Valor (R$)</label>
          </div>

          <button type="submit" name="btn-add" class="btn blue">Adicionar</button>

        </form>
      </div>

    </div>
  </div>

  <br /><br />
</div>
</div>

<br /><br />
</div>

<?php
//Footer
include_once "includes/footer.php";
?>