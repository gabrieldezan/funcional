<?php
date_default_timezone_set('America/Sao_Paulo');

$raiz = "/";
$raiz_admin = "/wt_admin/";

//BANCO DE DADOS
$hostname_config = "localhost";
$database_config = "funciona_site";
$username_config = "funciona_user";
$password_config = "mHT]V5naMsGp";

//$raiz = "/Funcional_Contabilidade/";
//$raiz_admin = "/Funcional_Contabilidade/wt_admin/";
//
////BANCO DE DADOS
//$hostname_config = "localhost";
//$database_config = "webde132_funcional_contabilidade";
//$username_config = "root";
//$password_config = "";

$config = mysqli_connect($hostname_config, $username_config, $password_config, $database_config);

if (mysqli_connect_errno()){
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_set_charset($config,"utf8");
?>
