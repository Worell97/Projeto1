<?php
$servidor = "localhost";
$user = "root";
$senha = "";
$base = "projeto1";
$conexao = mysqli_connect($servidor, $user, $senha, $base);

$query_exp = "select * from experiencias";

$consulta_exp = mysqli_query($conexao, $query_exp);

$query_tec = "select * from tecnologias";

$consulta_tec = mysqli_query($conexao, $query_tec);
