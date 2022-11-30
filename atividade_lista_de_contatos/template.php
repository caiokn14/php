<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>Lista de Contatos</title>
        <link rel="stylesheet" href="contatos.css" type="text/css" />
    </head>
    <body>
        <h1>Lista de Contatos</h1>
        <form class="row g-3">
            <fieldset>
                <legend>Novo Contato</legend>
                <div class="col-auto"></div>
                <label>
                    Nome*:
                    <input class="form-control" type="text" name="nome" required />
                </label>
                </div>
                <label>
                    Telefone*:
                    <input type="text" name="telefone" required />
                </label>
                <label>
                    E-mail*:
                    <input type="email" name="email" required />
                </label>
                <label>
                    Descrição (Opcional):
                    <textarea name="descricao"></textarea>
                </label>
                <label>
                    Data de Nascimento (Opcional):
                    <input type="date" name="data" />
                </label>
                <label>
                    Favorito:
                    <input type="checkbox" name="favorito" value="sim" />
                </label>
                <input type="submit" value="Salvar" />
            </fieldset>
        </form>
        <table class="table">
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Descrição</th>
                <th>Data de Nascimento</th>
                <th>Favorito</th>
            </tr>
            <?php foreach ($lista_contatos as $contato) : ?>
                <tr>
                    <td><?php echo $contato['nome']; ?></td>
                    <td><?php echo $contato['telefone']; ?></td>
                    <td><?php echo $contato['email']; ?></td>
                    <td><?php echo $contato['descricao']; ?></td>
                    <td><?php echo $contato['data']; ?></td>
                    <td><?php echo $contato['favorito']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>