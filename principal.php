<?php
session_start();
include('conecta.php');
if(!isset($_SESSION['login'])){
	header('location:index.php');
}else{
	echo "<br> Bem Vinda " .$_SESSION['login']; 
}if(isset($_POST['descricacao'])){
	$descricacao = $_POST['descricacao'];
	$valor = $_POST['valor'];
	$data = $_POST['data'];
	$tipo = $_POST['tipo'];
	$forma = $_POST['forma'];
	$beneficiario = $_POST['beneficiario'];
	$parcelat = $_POST['parcela_total'];
	$parcela = $_POST['parcela'];
	$sql = "INSERT INTO movimentacao VALUES(null,'".$descricacao.", '".$valor."', '".$data."', '".$tipo."', '".$forma."', '".$beneficiario."', '".$parcelat."', '".$parcela."')";
	if(!$result = $mysqli->query($sql)){
		echo $mysqli->error;
	}
}
?>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<br>DESCRIÇÃO: <input type="text" name="descricao" required/>
	<br>VALOR: <input type="text" name="valor" required/>
	<br>DATA: <input type="text" name="data" required/>
	<br>TIPO: <input type="text" name="tipo" required/>
	<br>FORMA: <input type="text" name="forma" required/>
	<br>BENEFICIÁRIO: <input type="text" name="beneficiario" required/>
	<br>PARCELA TOTAL: <input type="text" name="parcela_total" required/>
	<br>PARCELA: <input type="text" name="parcela" required/>
	<input type="Submit" value="Submit">
</body>
</html>