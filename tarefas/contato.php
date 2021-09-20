<?php session_start(); ?>
<?php session_destroy(); ?>

<html>
    <head>
        <title>Contatos</title>
        <link rel="stylesheet" href="contato.css">
    </head>
    <body>
        <h1>Gerenciador de contatos</h1>
        <!-- Aqui restante do codigo -->
            <form>
                <fieldset>
                    <legend>Criando Contatos</legend>
                    <label>
                        Nome:</br>
                        <input type="text" name="nome" /></br>
                         Telefone: </br>  
                        <input type="number" name="telefone" /></br>
                         Email:</br>   
                        <input type="email" name="email" />
                    </label>
                    <input type="submit" value="Cadastrar" /></br>
                </fieldset>
            </form>
                <?php 
                    
                    if (array_key_exists('nome', $_GET)){
                        $_SESSION['lista_tarefas'] [] = $_GET['nome'];
                    }
                    $lista_tarefas = [];
                    if (array_key_exists('lista_tarefas', $_SESSION)){
                        $lista_tarefas = $_SESSION['lista_tarefas'];
                    }
                ?> 
                    <table>
                            <tr>
                                <th>Tarefas</th>
                            </tr>
                            <?php foreach ($lista_tarefas as $tarefa) : ?>
                                <tr>
                                    <td><?php echo $tarefa; ?></td>
                                </tr>
                                <?php endforeach; ?>
                    </table> 
                    
    </body>
</html>