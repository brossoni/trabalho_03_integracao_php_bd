<?php
$id=$_GET["id"];
require("../conecta.inc.php");
$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
$pesquisou=false;
if ($id=="1")
{
	$cidade=$_GET['cidade'];
	if (empty($cidade))
		print("Preencha com uma cidade.");
	else
	{
		$resultado=mysqli_query($ok, "select * from cidades where nome_cid like '%$cidade%'") or die ("Não é possível pesquisar o nome da cidade.");
		$pesquisou=true;
	}
}
elseif ($id==2)
{
	$estado=$_GET['estado'];
	if (empty($estado))
		print("Preencha com um Estado.");
	else
	{
		$resultado=mysqli_query($ok, "Select nome_est from estados where nome_est = '%$estado%'") or die ("Não é possível pesquisar o nome do estado.");
		$pesquisou=true;
	}
}
elseif ($id==3)
{
	$cidades=$_GET['cidades'];
	if (empty($cidades))
		print("Escolha uma cidade.");
	else
	{
		$resultado=mysqli_query($ok, "Select nome_aluno, endereco from alunos, cidades where alunos.cidade=cidades.cod_cidade and cidades.cod_cidade=$cidades") or die ("Não é possível pesquisar as informações dos alunos.");
		$pesquisou=true;
	}
}
elseif ($id==4)
{
	$dep=$_GET['dep'];
	if (empty($dep))
		print("Escolha um departamento.");
	else
	{
		$resultado=mysqli_query($ok, "Select * from funcionario,departamento where departamento = '$dep' and funcionario.departamento=departamento.codigod") or die ("N�o � poss�vel pesquisar departamento do funcion�rio.");
		$pesquisou=true;
	}
}

?>
<p>
<a href="pesquisas.php">Voltar</a>



