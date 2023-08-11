<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Usuário</title>
</head>

<body>
    <h2>Cadastrar Usuário</h2>
    <form method="POST" action="cadastrar_action.php">
        <label>
            Nome: <input type="text" name="nome">
        </label>
        <label>
            Email: <input type="email" name="email">
        </label>
        <input type="submit" value="Cadastrar">
    </form>
    <a href="index.php">Voltar</a>
</body>

</html>