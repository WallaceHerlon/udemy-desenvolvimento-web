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