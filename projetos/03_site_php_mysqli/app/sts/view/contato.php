<?php

// Query para recuperar os valores da pagina contato
$query_content = "SELECT title_contact, desc_contact, icon_company, title_company, desc_company, icon_address, title_address, desc_address, icon_email, title_email, desc_email, title_form FROM sts_contents_contacts LIMIT 1";

// Executar a QUERY com MySQLi
$result_content = mysqli_query($conn, $query_content);

// Ler os dados retornado do banco de dados
$row_content = mysqli_fetch_assoc($result_content);
//var_dump($row_content);

// Extrair o array de dados para imprimir atraves da chave do array
extract($row_content);
echo $title_contact . "<br>";
echo $desc_contact . "<br>";
echo "<i class='$icon_company'></i> - " . $icon_company . "<br>";
echo $title_company . "<br>";
echo $desc_company . "<br>";
echo "<i class='$icon_address'></i> - " . $icon_address . "<br>";
echo $title_address . "<br>";
echo $desc_address . "<br>";
echo "<i class='$icon_email'></i> - " . $icon_email . "<br>";
echo $title_email . "<br>";
echo $desc_email . "<br>";
echo $title_form . "<br>";

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($data['SendAddMsg'])){
    var_dump($data);

    // mysqli_real_scape_string() limpar a string, prevenir SQL Injection
    $name = mysqli_real_escape_string($conn, $data['name']);
    $email = mysqli_real_escape_string($conn, $data['email']);
    $subject = mysqli_real_escape_string($conn, $data['subject']);
    $content = mysqli_real_escape_string($conn, $data['content']);

    $query_cont_msg = "INSERT INTO sts_contacts_msgs (name, email, subject, content, created) VALUES ('$name', '$email', '$subject', '$content', NOW())";
    mysqli_query($conn, $query_cont_msg);

    if(mysqli_insert_id($conn)){
        echo "<p style='color: green;'>Mensagem de contato enviada com sucesso!</p>";
    }else{
        echo "<p style='color: #f00;'>Mensagem de contato enviada com sucesso!</p>";
    }
}

?>

<form method="POST" action="">
    <label>Nome</label>
    <input type="text" name="name" id="name" placeholder="Digitie o nome completo"><br><br>

    <label>E-mail</label>
    <input type="email" name="email" id="email" placeholder="Digitie o seu melhor e-mail"><br><br>

    <label>Assunto</label>
    <input type="text" name="subject" id="subject" placeholder="Digitie o assunto da mensagem"><br><br>

    <label>Conteúdo</label>
    <textarea name="content" id="content" rows="4" cols="50" placeholder="Digite o conteúdo da mensagem"></textarea><br><br>

    <input type="submit" value="Cadastrar" name="SendAddMsg"><br><br>
</form>