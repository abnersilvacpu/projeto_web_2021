<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!empty($_POST)){

    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

}

?>

<html>

    <head>

        <title>Formulário processado</title>
        <link href="css/formulario_processado.css" rel="stylesheet">

    </head>

    <body>
        <div id="div-topo">
            <h1>Tabela de contato</h1>
        </div>
        
        <div id="div-tabela">
            <div id="tabela">   
                <table>
                    <tr>
                        <?php 
                            foreach ($_POST as $chave => $valor){
                        ?>
                            <th><?= ucfirst($chave) ?></th>
                        <?php
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            foreach($_POST as $valor){
                        ?>
                            <td><?= $valor ?></td>
                        <?php
                            }
                        ?>
                    </tr>
                </table>
            </div>                    
            <a href="index.php"><button>Voltar</button></a>

        </div>

        <div id="div-rodape">
            <p>Autor da Página: Abner da Silva Luiz - copyright © </p>
        </div>

    </body>
</html>