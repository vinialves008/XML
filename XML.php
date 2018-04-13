<?php 

/**
* 
*/
class XML
{
	public static function array_to_XML($data = array(),$xml = "")
	{
		foreach ($data as $keys => $values) {
			if (is_array($values)) {
				$xml .= "\r<".$keys.">";
					$xml .= XML::array_to_XML($values);
				$xml .= "\r</".$keys.">";
			}else{
				$xml .= "\r\t<".$keys.">".$values."</".$keys.">";
			}
		}
		return $xml;
	}	
	public static function XML_to_array($arquivo = ""){
		if (file_exists($arquivo.'.xml')) {
 		   return simplexml_load_file($arquivo.'.xml');
		} else {
    		return 'Falha ao abrir test.xml.';
		}
	}
	public static function generateCsv($arquivo, $data, $delimiter = ',', $enclosure = '"') {
       $handle = fopen($arquivo.".csv", 'a+');
       $contents = "";
       foreach ($data as $line) {
               fputcsv($handle, $line, $delimiter, $enclosure);
       }
       rewind($handle);
       while (!feof($handle)) {
               $contents .= fread($handle, 8192);
       }
       fclose($handle);
       return $contents;
}
}


 ?>