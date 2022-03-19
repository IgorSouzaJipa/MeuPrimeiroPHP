<?php


$media = ($_GET['nota1'] + $_GET['nota2']) / 2;
$nome = $_GET['nome'];
if ($media >= 7) {
 print("Aluno $nome aprovado com a média $media");
}
else {
 print("Aluno $nome reprovado com a média $media");
}

$name = $_GET ['name'];
$data = $_GET ['datanasc'];
$cidade = $_GET ['cidade'];
$uf = $_GET ['uf'];
$endereco = $_GET ['endereco'];

echo "Nome: "  .$name; 

echo "  <br> Data de nascimento  " .$data ;

echo " <br> Cidade de nascimento   ".$cidade;

echo " <br> UF nascimento   " .$uf ; 

echo " <br> Endereço   ".$endereco;
 
// Atividade03

$cidade1 = $_GET ['cidade1'];
$cidade2 = $_GET ['cidade2'];
$cidade3 = $_GET ['cidade3'];
$cidade4 = $_GET ['cidade4'];
$cidade5 = $_GET ['cidade5'];
$cidade6 = $_GET ['cidade6'];
$cidade7 = $_GET ['cidade7'];
$cidade8 = $_GET ['cidade8'];
$cidade9 = $_GET ['cidade9'];
$cidade10 = $_GET ['cidade10'];
 
echo "Aqui vai uma lista de cidades bacanas de RO:";
echo "<br>  " .$cidade1;
echo "<br>  " .$cidade2;
echo "<br>  " .$cidade3;
echo "<br>  " .$cidade4;
echo "<br>  " .$cidade5;
echo "<br>  " .$cidade6;
echo "<br>  " .$cidade7;
echo "<br>  " .$cidade8;
echo "<br>  " .$cidade9;
echo "<br>  " .$cidade10;

// Atividade04


$nome4= $_GET['nome4'];
$idade = $_Get['idade'];


echo " <br> Nome: " .$nome4;
echo " <br> Idade: " .$idade;


// Atividade05

$login = $_GET['login'];
$senha = $_GET['senha'];
print("<br> A senha é :  $senha <br> E o login é:   $login");
if (isset($_GET['aluno'])) {
    print("<br> Tipo de user: " . $_GET['aluno']);
} else {
    print(" professor");
}

?>