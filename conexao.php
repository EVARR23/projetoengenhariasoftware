<?php

$db_name = "bancogen";
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost:3306";

//conexão mysql
$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);

//testando conexao
if(!$con){
	echo "Erro na conexão: " . mysqli_connect_error();
} 
else {
	echo "Conexão Bem-Sucedida!";
}

?>