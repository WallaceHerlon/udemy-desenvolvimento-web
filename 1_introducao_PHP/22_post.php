<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Formulário POST</title>
</head>

<body>

    <h2>Cadastrar usuário</h2>

    <form method="POST" action="22_processa.php">
        <label>Nome: </label>
        <input type="text" name="nome_cliente" placeholder="Digite o nome" required /><br><br>
        
        <label>E-mail: </label>
        <input type="email" name="email_cliente" placeholder="Digite o melhor" required /><br><br>
        
        <label>Senha: </label>
        <input type="password" name="senha_cliente" placeholder="Digite a senha" required /><br><br>

        <input type="submit" value="Cadastrar" />

    </form>

</body>

</html>
