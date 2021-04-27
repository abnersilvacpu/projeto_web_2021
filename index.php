<html>

    <head>
        <meta charset="UTF-8">
        <title>Formulário de Contato</title>
        <link href="css/formulario_processado.css" rel="stylesheet">

        <style>

            #div-form{
                text-align: center;
            }

            form div {
                margin: 20px;
            }

            form label{
                display: block;
                font-weight: bold;
            }

        </style>
    </head>

    <body>
        
        <div id="div-topo">
            <h1>Formulário de Contato</h1>
        </div>
        
        <div id="div-form">

       
            <form method="POST" action="processar.php">
                <div>
                    <label>Nome</label>
                    <input type="text" name="nome" placeholder="Digite seu nome..." />
                </div>
                <div>
                    <label>Telefone</label>
                    <input type="text" name="telefone" placeholder="Digite seu telefone..." />
                </div>
                <div>
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Digite seu email..." />
                </div>
                <div>
                    <label>Mensagem</label>
                    <textarea name="mensagem" placeholder="Digite a mensagem..."></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>

        <div id="div-rodape">
            <p>Autor da Página: Abner da Silva Luiz - copyright © </p>
        </div>

    </body>
    
</html>