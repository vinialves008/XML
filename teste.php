<?php 
	require_once 'XML.php';

	$pessoa = array('pessoa' => array(
		'nome' => "Vinícius",
		'sobrenome' => "Alves",
		'email' => "vinialves08@gmail.com",
		'dtnasc' => "21/03/1993",
		'escolaridade'=> "Superior Completo",
		'sexo'=> "Masculino",
		'endereco' => array(
			'Avenida' => "N003",
			'Bairro' => "Anápolis City"
		)
	));
	$xml = "<?xml version='1.0' encoding='ISO-8859-1'?>";
	$pessoa_xml = XML::array_to_XML($pessoa, $xml);
	

	$nome_arquivo = "cadastro2.xml";
	// Escreve o arquivo
	$fp = fopen($nome_arquivo, 'w+');
	fwrite($fp, $pessoa_xml);
	fclose($fp);
 ?>