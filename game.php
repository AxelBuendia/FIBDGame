<?php
	$Level = $_REQUEST['Level'];
	if(unset($Level)) $Level = 0;

	switch ($Level){
		case 0:
			return "{\"enigma\":\"essai Level 0\", \"answer\":\"solution0\"}";
			break;
		case 1:
			return "{\"enigma\":\"essai Level 1\", \"answer\":\"solution1\"}";
			break;
	}
	return "{}";
?>