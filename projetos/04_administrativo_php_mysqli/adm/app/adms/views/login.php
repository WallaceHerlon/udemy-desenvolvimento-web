<?php

// Redirecionar ou para o processamento quando o usuario nao acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    //header("Location: /");
    die("Erro: Página não encontrada!<br>");
}

// Criptografar a senha
//echo password_hash("123456a", PASSWORD_DEFAULT);

// Receber os dados do formulario
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Verificar se o usuario clicou no botao
if (!empty($data['SendLogin'])) {
    //var_dump($data);

    // QUERY para pesquisar o usuario no banco de dados
    $username = mysqli_real_escape_string($conn, $data['username']);
    $query_user = "SELECT id, name, email, password, adms_sits_user_id 
                    FROM adms_users
                    WHERE email = '$username' 
                    OR username = '$username'
                    LIMIT 1";

    // Executar a QUERY
    $result_user = mysqli_query($conn, $query_user);

    // Verificar se encontrou usuario no BD
    if (($result_user) and ($result_user->num_rows != 0)) {

        // Ler o registro recuperado do banco de dados
        $row_user = mysqli_fetch_assoc($result_user);

        // Verificar se o perfil so usuario esta ativo
        if ($row_user['adms_sits_user_id'] != 1) {
            echo "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
        } elseif (password_verify($data['password'], $row_user['password'])) { // Verificar se a senha digita no formulario he igual a senha que esta salva no BD
            //echo "<p style='color: green;'>Login realizado com sucesso!</p>";

            // Destruir os dados da variavel $data
            unset($data);

            // Criar a URL de destino
            $url_destination = URLADM . "/dashboard";

            // Redirecionar o usuario
            header("Location: $url_destination");
        } else {
            echo "<p style='color: #f00;'>Erro: Usuário ou senha inválida!</p>";
        }
    } else {
        echo "<p style='color: #f00;'>Erro: Usuário não encontrado!</p>";
    }
}
?>
<form method="POST" action="">
    <?php
    $username = "";
    if(isset($data['username'])){
        $username = $data['username'];
    }
    ?>
    <label>Usuário</label>
    <input type="text" name="username" placeholder="Digite o usuário ou e-mail" value="<?php echo $username; ?>" autofocus required><br><br>

    <?php
    $password = "";
    if(isset($data['password'])){
        $password = $data['password'];
    }
    ?>
    <label>Senha</label>
    <input type="password" name="password" placeholder="Digite a senha" value="<?php echo $password; ?>" required><br><br>

    <input type="submit" name="SendLogin" value="Acessar">
</form>