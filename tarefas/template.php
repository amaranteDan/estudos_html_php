<?php session_start(); ?>
<html>
    <head>
        <title>Gerenciador de Tarefas</title>
        <link rel="stylesheet" href="tarefas.css">
    </head>
    <body>
        <h1>Gerenciador de tarefas</h1>
        <!-- Aqui restante do codigo -->
            <form>
                <fieldset>
                    <legend>Nova Tarefa</legend>
                    <label>
                        Tarefa:
                        <input type="text" name="nome" />
                    </label>
                    <label>
                        Descrição:
                        <textarea name="descricao"></textarea>
                    </label>
                    <label>
                        Prazo:
                        <input type="text" name="prazo"></textarea>
                    </label>
                    <fieldset>
                        <legend>Prioridade:</legend>
                        <label>
                            <input type="radio" name="prioridade" value="baixa" checked /> Baixa
                            <input type="radio" name="prioridade" value="media" checked /> Media
                            <input type="radio" name="prioridade" value="alta" checked /> Alta
                        </label>
                    </fieldset>
                    <label>
                        Tarefa Concluida:
                        <input type="checkbox" name="concluida" value="sim"/>
                    </label>
                    <input type="submit" value="Cadastrar" />
                </fieldset>
            </form>
                
                    <table>
                            <tr>
                                <th>Tarefa</th>
                                <th>Descricao</th>
                                <th>Prazo</th>
                                <th>Prioridade</th>
                                <th>Concluida</th>
                            </tr>
                            <?php $lista_tarefas = []; ?>
                            <?php foreach ($lista_tarefas as $tarefa) : ?>
                                <tr>
                                    <td><?php echo $tarefa['nome']; ?></td>
                                    <td><?php echo $tarefa['descricao']; ?></td>
                                    <td><?php echo $tarefa['prazo']; ?></td>
                                    <td><?php echo $tarefa['prioridade']; ?></td>
                                    <td><?php echo $tarefa['concluida']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                    </table> 
                    
    </body>
</html>
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     