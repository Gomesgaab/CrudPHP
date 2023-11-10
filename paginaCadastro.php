<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Cadastro</title>
</head>
<body>
    <?php  include 'cadastro.php'; ?>
    <form method="POST">
        <label>CPF:</label>
        <input type="text" id="tCPF" name="tCPF"/>
        <br><br>
        <label>Nome:</label>
        <input type="text" id="tNome" name="tNome"/> 
        <br><br>
        <label>Telefone:</label>
        <input type="text" id="tTelefone" name="tTelefone"/>
        <br><br>
        <label>Enderece:</label>
        <input type="text" id="tEndereco" name="tEndereco"/>
        <br><br>
        <label>Cidade:</label>
        <input type="text" id="tCidade" name="tCidade"/>
        <br><br> 
        <button> Cadastrar
            <?php
               
                //passe o dade para o construtor

                function consultarObjeto(){
                    $cpf      = $_POST['tCPF'];
                    $nome     = $_POST['tNome'];
                    $telefone = $_POST['tTelefone'];
                    $endereco = $_POST['tEndereco'];
                    $cidade   = $_POST['tCidade'];
    
                    $cad1 = new Cadastro($cpf, $nome, $telefone, $endereco, $cidade);
                    return $cad1;
                }
            ?>
        </button>
    </form>
    <?php
        echo consultarObjeto()->imprimir(); 
    
    ?>
</body>
</html>