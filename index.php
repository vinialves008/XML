<?php
$pessoa = array('pessoa' => array(
	'nome' => "Vinícius",
	'sobrenome' => "Alves",
	'email' => "vinialves08@gmail.com",
	'dtnasc' => "21/03/1993",
	'escolaridade'=> "Superior Completo",
	'sexo'=> "Masculino"
));
echo json_encode($pessoa);
// Receberá todos os dados do XML
$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';
$xml .= "\r<pessoa>\r";
foreach ($pessoa as $keys => $values) {
	if (is_array($values)) {
		foreach ($values as $key => $value) {
			$xml .= "\t<".$key.">".$value."</".$key.">\r";
		}
	}
}
$xml .= "</pessoa>";

$nome_arquivo = "cadastro.xml";
// Escreve o arquivo
$fp = fopen($nome_arquivo, 'w+');
fwrite($fp, $xml);
fclose($fp);




 ?>