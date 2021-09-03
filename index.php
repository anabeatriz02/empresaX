<?php

require("./funcoes.php");
$funcionarios = lerArquivo("empresaX.json");

if (isset($_GET["buscarFuncionario"])){
    $funcionarios = buscarFuncionarios($funcionarios, $_GET["buscarFuncionario"]);
}

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade JSON</title>
</head>
<body>
<form>
    <input type="text" value="<?= isset($_GET["buscarFuncionario"]) ? $_GET["buscarFuncionario"] : ""?>" 
    name="buscarFuncionario" placeholder="Buscar Funcionario" />
    <button>Buscar</button>
    </form>
<section>
    <h1>Tabela de Funcionários</h1>
    <table border="15">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Sexo</th>
            <th>Endereço IP</th>
            <th>País</th>
            <th>Departamentos</th>
        </tr>

    <?php
            foreach($funcionarios as $funcionario) : 
    ?>
            <td> <?= $funcionario->id; ?></td>
            <td> <?= $funcionario->first_name; ?></td>
            <td> <?= $funcionario->last_name; ?></td>
            <td> <?= $funcionario->email; ?></td>
            <td> <?= $funcionario->gender; ?></td>
            <td> <?= $funcionario->ip_address; ?></td>
            <td> <?= $funcionario->country; ?></td>
            <td> <?= $funcionario->department; ?></td>
        </tr>
    <?php
    endforeach;
?>
    </table>
    </section>
</body>
</html>