<?php
echo "Atividade 02 <br>";
echo "Lista de alunos da sala <br>";

echo "joão ";
echo"<br> Maria";
echo "Vinicius";
echo"<br> Ênio";
echo "Lanes";
echo"<br>Mateus";
echo "Gustavo";
echo"<br>Vinicius";
echo "João de Deus";
echo"<br>Gustavo lima";
echo "Neymar";
echo"<br> Gabigol";
echo "De Arrascaeta";
echo"<br>Vinicius de moraes";
echo "Linux";
echo"<br>Windows server";
echo "Postgree";
echo"<br>Zabbix <br>";

echo "Atividade 03:";

$media = ($_GET['nota1'] + $_GET['nota2'] +  $_GET['nota3'] +  $_GET['nota4']) / 4;
 $nome = $_GET['nome'];
if ($media >= 6) {
 print("Aluno $nome aprovado com a média $media");
 }
else {
 print("Aluno $nome reprovado com a média $media");
}


?>


