<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_EMAIL);
$ramo = filter_input(INPUT_POST, 'ramo', FILTER_SANITIZE_STRING);
$qtd_func = filter_input(INPUT_POST, 'qtd_func', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$tributacao = filter_input(INPUT_POST, 'tributacao', FILTER_SANITIZE_STRING);
$faturamento = filter_input(INPUT_POST, 'faturamento', FILTER_SANITIZE_STRING);


$result_usuario = "INSERT INTO empresas (nome, cnpj, ramo, qtd_func, telefone, tributacao, faturamento) VALUES ('$nome', '$cnpj', '$ramo', '$qtd_func', '$telefone', '$tributacao','$faturamento')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastro realizado com sucesso</p>";
	header("Location: index.php");
    echo "<script type='javascript'>alert('Cadastro realizado com sucesso');";
    echo "javascript:window.location='index.php';</script>";
}else{
	$_SESSION['msg'] = "<p style='color:green;'>Erro ao cadastrar</p>";
	header("Location: index.php");
}


