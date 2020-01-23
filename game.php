<?php
	$Level = $_REQUEST['Level'];
	if(!isset($Level)){$Level = 0;}

	$l = 0 ;
	$dlevel[$l]['enigma'] = "Level 0. Bienvenue dans l'aventure." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "test1.png" ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Level 1. Exemple d'énigme affiche. Lorem ipsum dolores sit amet.  Lorem ipsum dolores sit amet.  Lorem ipsum dolores sit amet.  Lorem ipsum dolores sit amet.  Lorem ipsum dolores sit amet.  Lorem ipsum dolores sit amet. Lorem ipsum dolores sit amet.  Lorem ipsum dolores sit amet.  Lorem ipsum dolores sit amet. La réponse est affiche1." ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "affiche1" ;
	$dlevel[$l]['img'] = "PNJMain.jpg" ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Level 2. Enigme finale des badges. Ordre: Planning, accessibilité, code, son, image, règles. L'ordre est 345621. Lorem ipsum lorem ipsum. Lorem ipsum lorem ipsum." ;
	$dlevel[$l]['type'] = "badge_enigme" ;
	$dlevel[$l]['answer'] = "345621" ;
	$dlevel[$l]['img'] = "test1.png" ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Level 3. La fin du jeu, c'est gagné." ;
	$dlevel[$l]['type'] = "win" ;
	$dlevel[$l]['answer'] = "" ;
	$dlevel[$l]['img'] = "PNJMain.jpg" ;
	$l++ ;

	echo "{\"enigma\":\"".$dlevel[$Level]['enigma']."\", \"answer\":\"".$dlevel[$Level]['answer']."\", \"img\":\"".$dlevel[$Level]['img']."\", \"type\":\"".$dlevel[$Level]['type']."\"}" ;
	
	/*
	switch ($Level){
		case 0:
			return "{\"enigma\":\"essai Level 0\", \"answer\":\"solution0\"}";
			break;
		case 1:
			return "{\"enigma\":\"essai Level 1\", \"answer\":\"solution0\"}";
			break;
	}
	return "{}";
	*/
?>