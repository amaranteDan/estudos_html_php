<html>
    <head>
        <title>Formulario</title>
    </head>

    <body>
        <h1>Formulario com PHP Validação</h1>
        <hr>
        <form action="recebe_for_validacao.php" method="post">
            <label for="">Nome</label><br>
            <input type="text" name="nome"><br><br>

            <label for="">Email</label><br>
            <input type="text" name="email"><br><br>

            <fieldset>
                <legend>Area de Interesse</legend>
                <input type="checkbox" name="interesse[]" id="" value="informatica">Informatica <br>
                <input type="checkbox" name="interesse[]" id="" value="esporte">Esporte <br>
                <input type="checkbox" name="interesse[]" id="" value="compras">Compras <br>
                <input type="checkbox" name="interesse[]" id="" value="moda">Moda <br>
                <input type="checkbox" name="interesse[]" id="" value="ciencia">Ciencia <br>
                <input type="checkbox" name="interesse[]" id="" value="livros">Livros <br>
                <input type="checkbox" name="interesse[]" id="" value="comida">Comida <br>


            </fieldset>
            <br>
            <label for="">Onde conheceu?</label><br>
            <select name="onde_conheceu" id="">
                <option value="">Selecione</option>
                <option value="google">Google</option>
                <option value="amigos">Amigos</option>
                <option value="tv">Tv</option>
            
            
            </select>
            <br><br>

            <label for="">Mensagem</label>
            <textarea name="mensagem" id="" cols="30" rows="10"></textarea>
            <br><br>
            <fieldset>
                <legend>Redirecionar para:</legend>
                <input type="radio" name="redirecionar" id="" value="home">Home <br>
                <input type="radio" name="redirecionar" id="" value="contato">Contato <br>
                
            </fieldset>

            <hr>

            <button type="submit">Enviar</button>

        </form>

    </body>
</html>