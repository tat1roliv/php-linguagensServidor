<?php require 'inicio.php'?>

<h1>
    Meu Formulário
</h1>
<?php
if(isset($_POST['nome_usuario'])){
    echo '<h2>Olá, ' . $_POST['nome_usuario'] . '<h2>';
}
?>
<form method="post">
    <label for="campo_de_nome">Digite seu nome</label>
    <input name="nome_usuario" id="campo_de_nome" type="text"/>
    <button type="submit">Enviar</button>
</form>

<?php require 'fim.php'?>