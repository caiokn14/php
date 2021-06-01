<html>
<head>
    <meta charset="UTF-8" />
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="tarefas.css" type="text/css" />
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <form class="row g-3">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <div class="col-auto"></div>
            <label>
                Tarefa:
                <input class="form-control" type="text" name="nome" />
            </label>
            </div>
            <label>
                Descrição (Opcional):
                <textarea name="descricao"></textarea>
            </label>
            <label>
                Prazo (Opcional):
                <input type="text" name="prazo" />
            </label>
            <fieldset>
                <legend>Prioridade:</legend>
                <label>
                    <input type="radio" name="prioridade" value="1" checked /> Baixa
                    <input type="radio" name="prioridade" value="2" /> Média
                    <input type="radio" name="prioridade" value="3" /> Alta
                </label>
            </fieldset>
            <label>
                Tarefa concluída:
                <input type="checkbox" name="concluida" value="1" />
            </label>
            <input type="submit" value="Cadastrar" />
        </fieldset>
    </form>
    <table class="table">
        <tr>
            <th>Tarefa</th>
            <th>Descricao</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluida</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa['nome']; ?></td>
                <td><?php echo $tarefa['descricao']; ?></td>
                <td><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
                <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
                <td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>