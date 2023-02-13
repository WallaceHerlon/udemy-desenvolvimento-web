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

// Query para recuperar os valores dos servicos da pagina home
$query_home_serv = "SELECT serv_title, serv_icon_one, serv_title_one, serv_desc_one, serv_icon_two, serv_title_two, serv_desc_two, serv_icon_three, serv_title_three, serv_desc_three 
                    FROM sts_homes_services 
                    LIMIT 1";

// Executar a QUERY com MySQLi
$result_home_serv = mysqli_query($conn, $query_home_serv);

// Ler os dados retornado do banco de dados
$row_home_serv = mysqli_fetch_assoc($result_home_serv);
//var_dump($row_home_serv);

// Extrair o array de dados para imprimir atraves da chave do array
extract($row_home_serv);

// Imprimir os valores
echo $serv_title . " <br>";
echo "<i class='$serv_icon_one'></i> - " . $serv_icon_one . " <br>";
echo $serv_title_one . " <br>";
echo $serv_desc_one . " <br>";
echo "<i class='$serv_icon_two'></i> - " . $serv_icon_two . " <br>";
echo $serv_title_two . " <br>";
echo $serv_desc_two . " <br>";
echo "<i class='$serv_icon_three'></i> - " . $serv_icon_three . " <br>";
echo $serv_title_three . " <br>";
echo $serv_desc_three . " <br>";
echo "<hr>";

// Query para recuperar os valores do servico premium da pagina home
$query_home_prem = "SELECT prem_title, prem_subtitle, prem_desc, prem_btn_text, prem_btn_link, prem_image
                    FROM sts_homes_premiums 
                    LIMIT 1";

// Executar a QUERY com MySQLi
$result_home_prem = mysqli_query($conn, $query_home_prem);

// Ler os dados retornado do banco de dados
$row_home_prem = mysqli_fetch_assoc($result_home_prem);
//var_dump($row_home_prem);

// Extrair o array de dados para imprimir atraves da chave do array
extract($row_home_prem);

// Imprimir os valores
echo $prem_title . " <br>";
echo $prem_subtitle . " <br>";
echo $prem_desc . " <br>";
echo $prem_btn_text . " <br>";
echo $prem_btn_link . " <br>";
echo $prem_image . " <br>";
echo "<img src='" . URLSITE . "/app/sts/assets/image/home_prem/$prem_image' width='250'><br>";
echo "<hr>";

// Query para recuperar os valores do rodapa
$query_footer = "SELECT footer_desc, footer_text_link, footer_link
                    FROM sts_footers 
                    LIMIT 1";

// Executar a QUERY com MySQLi
$result_footer = mysqli_query($conn, $query_footer);

// Ler os dados retornado do banco de dados
$row_footer = mysqli_fetch_assoc($result_footer);
//var_dump($row_footer);

// Extrair o array de dados para imprimir atraves da chave do array
extract($row_footer);

// Imprimir os valores
echo $footer_desc . " <br>";
echo $footer_text_link . " <br>";
echo $footer_link . " <br>";