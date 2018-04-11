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
}


 ?>