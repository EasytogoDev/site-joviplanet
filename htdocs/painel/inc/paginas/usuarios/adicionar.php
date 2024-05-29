<?php

if (isset($_POST['btn_salvar']) && $_POST['btn_salvar'] == 'Adicionar') {
  $nomeUSUARIO = $_POST['nome'];
  $sobrenomeUSUARIO = $_POST['sobrenome'];
  $emailUSUARIO = $_POST['email'];
  $senhaUSUARIO = $_POST['senha'];
  $resenhaUSUARIO = $_POST['re-senha'];

  $ativoUSUARIO = '1';
  $empresaUSUARIO = '1'; // Defina o valor desejado para o campo empresaUSUARIO

  if ($senhaUSUARIO == $resenhaUSUARIO) {
    // Sua conexão com o banco de dados deve ser estabelecida antes desta etapa.
    $query = mysqli_query($conexao, "
INSERT INTO tb0301_usuarios (
  nomeUSUARIO,
  sobrenomeUSUARIO,
  emailUSUARIO,
  senhaUSUARIO,
  ativoUSUARIO,
  empresaUSUARIO
)
VALUES (
  '" . $nomeUSUARIO . "',
  '" . $sobrenomeUSUARIO . "',
  '" . $emailUSUARIO . "',
  '" . md5($senhaUSUARIO) . "',
  '" . $ativoUSUARIO . "',
  '" . $empresaUSUARIO . "'
);
");

    $codigo = mysqli_insert_id($conexao);

    if ($query) {
      echo '<script>alert("Usuário incluído com sucesso!");top.location.href="?make=' . $make . '&acao=home&codigo=' . $codigo . '";</script>';
    } else {
      echo '<script>alert("Algo deu errado, tente novamente!");top.location.href="javascript:;history.back(-1);";</script>';
    }
  } else {
    echo '<script>alert("Senhas não conferem!");top.location.href="javascript:;history.back(-1);";</script>';
    exit();
  }
} else {

?>

<div class="title-block">
  <h3 class="title"> Adicionar </h3>
  <p class="title-description"> Adicione o usuário </p>
</div>
<form action="" method="post">
  <section class="section">
    <div class="row sameheight-container">
      <input name="codigo" type="hidden" value=""/>
      <div class="col-md-12">
        <div class="card card-block ">
          <div class="form-group">
            <label class="control-label">Nome</label>
            <input name="nome" value="" type="text" class="form-control underlined" id="nome" placeholder="Coloque o nome do usuário" />
          </div>
          <div class="form-group">
            <label class="control-label">Sobrenome</label>
            <input name="sobrenome" value="" type="text" class="form-control underlined" id="sobrenome" placeholder="Coloque o sobrenome do usuário" />
          </div>
          <div class="form-group">
            <label class="control-label">E-mail</label>
            <input name="email" value="" type="email" class="form-control underlined" id="email" placeholder="Coloque o email do usuário" />
          </div>
          <div class="form-group">
            <label class="control-label">Senha</label>
            <input name="senha" type="password" class="form-control underlined" id="senha" placeholder="Altere a senha aqui!!!" />
          </div>
          <div class="form-group">
            <label class="control-label">Confirma Senha</label>
            <input name="re-senha" type="password" class="form-control underlined" id="re-senha" placeholder="Altere a senha aqui!!!" />
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" name="btn_salvar" value="Adicionar">
    </div>
  </section>
</form>

<?php
}
?>
