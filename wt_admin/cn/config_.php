<?php 
date_default_timezone_set('America/Sao_Paulo'); 

$raiz = "/pawt22/";
$raiz_admin = "/pawt22/wt_admin/";

//BANCO DE DADOS
$hostname_config = "localhost";
$database_config = "pawt22";
$username_config = "root";
$password_config = "";

$config = mysqli_connect($hostname_config, $username_config, $password_config, $database_config);

if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($config,"utf8");
?>