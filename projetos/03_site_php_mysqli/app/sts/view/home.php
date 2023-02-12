<?php

// Query para recuperar os valores do topo da pagina home
$query_home_top = "SELECT title_one_top, title_two_top, title_three_top, link_btn_top, txt_btn_top, image_top 
                    FROM sts_homes_tops 
                    LIMIT 1";

// Executar a QUERY com MySQLi
$result_home_top = mysqli_query($conn, $query_home_top);

// Ler os dados retornado do banco de dados
$row_home_top = mysqli_fetch_assoc($result_home_top);
//var_dump($row_home_top);

// Extrair o array de dados para imprimir atraves da chave do array
extract($row_home_top);

// Imprimir os valores
echo $title_one_top . " <br>";
echo $title_two_top . " <br>";
echo $title_three_top . " <br>";
echo $link_btn_top . " <br>";
echo $txt_btn_top . " <br>";
echo $image_top . " <br>";
echo "<img src='" . URLSITE . "/app/sts/assets/image/home_top/$image_top' width='250'><br>";
echo "<hr>";

