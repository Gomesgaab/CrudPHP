<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atualizar</title>
</head>
<body>
    <?php include 'cadastro.php'?>
    <form method="POST">
        <select name="opcao">
            <label>Escolha o campo que deseja atualizar</label>
            <option value="0"></option>
            <option value="1">Nome</option>
            <option value="2">Telefine</option>
            <option value="3">Endereço</option>
            <option value="4">Cidade</option>
        </select>
        <br><br>

        <label>Dado: </label>
        <input type="text" id="dado" name="dado"?>

        <button> Atualizar
            <?php
                
            
            ?>
        </button>

    </form>
</body>
</html>