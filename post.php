<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
$server = "";
$db_name = "";
$user ="";
$senha = "";

try{
  
  $pdo =  new PDO('mysql:host= $server; dbname= $db_name;', $user ,  $senha);
     //echo "conectado";
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch( PDOException $Exception ) {
		// PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
		// String.
  echo" Erro ao conectar com banco";

}




        if(isset($_POST )){ 
        $data = $_POST['data'];
        $estampa = $data[0];
        $codigo = $data[1];

        $altura = $_POST['altura'];
        $busto= $_POST['busto'];
        $bolso = $_POST['bolso'];
        $capuz = $_POST['capuz'];

        $adicional = $_POST['adicional'];

        $cor = $_POST['cor'];
        $tipo = $_POST['tipo'];
        $tamanho = $_POST['tamanho'];
        $sexo = $_POST['sexo'];
        $produto = $_POST['produto'];
        $local = $_POST['local'];
        $ordem = $_POST['ordem'];

        


$stmt = $pdo->prepare('INSERT INTO produtos_prontos ( ESTAMPA, CODIGO, TIPO,  PRODUTO, TAMANHO, COR, SEXO, ADICIONAIS, LOCAL, ORDEM, ALTURA, BUSTO, BOLSO, CAPUZ )
VALUES(:estampa, :codigo, :tipo, :produto, :tamanho,:cor, :sexo, :adicional, :local, :ordem, :altura, :busto, :bolso, :capuz)');


$stmt->execute(array(
  ':estampa' => $estampa, ':codigo'=> $codigo, ':tipo'=>$tipo, ':produto'=>$produto, ':tamanho'=> $tamanho ,':cor'=> $cor, ':sexo'=>$sexo,
  ':adicional'=>$adicional, ':local'=>$local, ':ordem'=>$ordem, ':altura'=>$altura, ':busto'=>$busto, ':bolso'=>$bolso, ':capuz'=>$capuz));


  $result = "Dados cadastrados com sucesso.";


}else {



}
echo json_encode($result);