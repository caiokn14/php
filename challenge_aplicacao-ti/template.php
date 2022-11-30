<html>
<head>
    <meta charset="UTF-8" />
    <title>Serviço TI</title>
    <link rel="stylesheet" href="tarefas.css" type="text/css" />
</head>
<body>
    <form class="row g-3">
        <fieldset>
            <legend>Abrir solicitação para:</legend>
            <div class="col-auto"></div>
            <label>Grupo Selecionado:</label>
            <select name="nome">
                <option value="Aplicações">Aplicações</option>
                <option value="Softwares">Softwares</option>
                <option value="Hardwares">Hardwares</option>
                <option value="Infraestrutura">Infraestrutura</option>
            </select>
            </div>
            <label>
                Descrição:
                <textarea name="descricao"></textarea>
            </label>
            <input type="submit" value="Salvar" />
        </fieldset>
    </form>
</body>

</html>