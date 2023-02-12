<?php

//True - Apresentar a mensagem de alerta com o erro
//False - Nao apresentar a mensagem de alerta com o erro
ini_set('display_errors', true);

// Criar constante global
// Constante com o endereço do site
define("URLSITE", "http://localhost/03_site_php_mysqli");

// Constante com o endereço do administrativo
define("URLADM", "http://localhost/home");

// Constante com e-mail do administrador
define("EMAIL", "wherlon@hotmail.com");

// Credenciais do banco de dado
define("DBHOST", 'localhost');
define("DBUSER", 'root');
define("DBPASS", '');
define("DBNAME", 'celke');
define("DBPORT", 3306);