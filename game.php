<?php
	$Level = $_REQUEST['Level'];
	if(!isset($Level)){$Level = 0;}

	$l = 0 ;

/*=====DEBUT INTRO ============== */
	$bgiScene = "Achromatic_BG_Glitched.jpg" ;

	$dlevel[$l]['enigma'] = "Je m'appelle Troubadour, peux-tu m'aider ?" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoPerdu.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	
	$dlevel[$l]['bgi'] = $bgiScene ;
	$dlevel[$l]['bgc'] = "" ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour: Je comprends pas, le portail ne me reconnaît pas et le clavier est bloqué ! J’étais en permission au festival de la BD et maintenant je ne peux plus rentrer !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoNonReconnuPortail.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour: Mais que vais-je faire ? J'veux pas être un personnage non reconnu. L'aspirateur de code va me pourchasser pour me supprimer." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoPerdu.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour: Et ce portail qui ne me reconnait pas. Ne paniquons pas ! Il faut que j'appelle un pote... " ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoPerdu.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

		$dlevel[$l]['enigma'] = "Troubadour: J'ai ce téléphone qui peut appeler dans les jeux. Au lieu d'un numéro, il suffit d'écrire le nom du jeu." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoPerdu.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN INTRO ============== */

/*=====DEBUT MERCI DE RIEN ============== */

	$bgiScene = "Littleseed_glitched.jpg" ;

	$dlevel[$l]['enigma'] = "Troubadour : Ok, mon pote vient du même jeu que moi. Mais c'est quoi le nom de mon jeu déjà ? Un truc avec Merci... L'affiche est au rez-de-chaussée à côté de l'accueil ! Peux-tu aller voir et me rappeler ce nom ?" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "merci de rien" ;
	$dlevel[$l]['img'] = "PersoReflechi.png" ;
	$dlevel[$l]['cue'] = "Troubadour : Cherche l'affiche de jeu dans le bâtiment ! L'accueil est au rez-de-chaussée, en face de l'entrée principale." ;
	$dlevel[$l]['label'] = "Entrez le nom du jeu à appeler" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Salut mon pote ! Tu peux débloquer le clavier du portail ?" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Le pote : Troub’ c’est toi ? Qu’est-ce que tu fiches bon sang ?" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : J'étais au festival de la LBD et ensuite..." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Le pote : Je ne veux rien savoir ! Le mot de passe ! Combien sommes-nous sur la vitre de la salle 0E6 ?" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "cinq" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "Le pote : Comptes bien et indiques la solution en toutes lettres" ;
	$dlevel[$l]['label'] = "Nombre en toutes lettres" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Le pote : Ok c’est bon !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Et pour le clavier ?" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Le pote : Je ne peux rien faire pour toi Troub’, t’es trop en retard ! Ça concerne les responsables des symboles ! Désolé. Rentre vite, sinon tu vas te faire aspirer !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Non merci... je vais me débrouiller !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN MERCI DE RIEN ============== */

/*=====DEBUT TAE.EXE ============== */
	$bgiScene = "Tae_BG_Glitched.jpg" ;

	$dlevel[$l]['enigma'] = "Troubadour : Bon... Alors le premier symbole… c’est la programmation ! C'est dans le jeu truc.exe, je crois que c'est écrit sur le côté d'une passerelle du 1er étage !" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "tae.exe" ;
	$dlevel[$l]['img'] = "PersoReflechi.png" ;
	$dlevel[$l]['cue'] = "Cherche dans le bâtiment !" ;
	$dlevel[$l]['label'] = "Entrez le nom du jeu à appeler" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Super ! On forme une équipe de choc !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "<i>Troubadour compose le numéro</i>" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Tae : La ligne est sécurisée !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Alors j’étais au festival de..." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Tae : Toi aussi tu veux hacker ton jeu ?" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Non... Je veux juste rentrer chez moi ! Pouvez-vous débloquer le symbole de la programmation ?" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Tae : Ok, dis-moi d'abord, le perso à côté de moi, son manteau est rouge ou bleu ?" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "rouge" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "Tae : rouge ou bleu ?" ;
	$dlevel[$l]['label'] = "Indiquez la couleur" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Tae : Et voilà, j’ai infiltré le portail ! Le symbole doit être débloqué !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Merci mon pote !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Super ça a marché ! Encore 5 !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN TAE.EXE ============== */

/*=====DEBUT AURORE ============== */
	$bgiScene = "Aurore_BG_Glitched.jpg" ;

	$dlevel[$l]['enigma'] = "Troubadour : Le symbole suivant, c’est celui des graphistes... Il faut prendre le train et suivre les rails du rêve et attendre le train ! L’affiche est au 1er, vers l’amphi." ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "aurore" ;
	$dlevel[$l]['img'] = "PersoReflechi.png" ;
	$dlevel[$l]['cue'] = "Troubadour : Cherche l'affiche dans le bâtiment !" ;
	$dlevel[$l]['label'] = "Entrez le nom du jeu à appeler" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Trop fort !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "<i>Troubadour compose le numéro</i>" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Aurore : Tu m'as réveillée..." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Désolé, je suis coincé devant le portail..." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Aurore : A ton avis, quel est mon astre préféré ?" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "lune" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "L'astre est présent sur l'affiche du jeu, entrez seulement le nom de l'astre (sans le/la devant) !" ;
	$dlevel[$l]['label'] = "Entrez le nom de l'astre (sans le/la)" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Aurore : Le symbole est débloqué ! Je retourne à mes rêves !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Bonne nuit !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Super ça a marché ! Encore 4 !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN AURORE ============== */

/*=====DEBUT ACHROMATIC ============== */
	$bgiScene = "Achromatic_BG.jpg" ;

	$dlevel[$l]['enigma'] = "Troubadour : C’est l’heure du symbole des sound designers ? Je vois du noir et blanc, je les entends, ça ne doit pas être loin d’ici !" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "achromatic" ;
	$dlevel[$l]['img'] = "PersoReflechi.png" ;
	$dlevel[$l]['cue'] = "Troubadour : Cherche l'affiche dans le bâtiment !" ;
	$dlevel[$l]['label'] = "Entrez le nom du jeu à appeler" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Tu es incroyable !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "<i>Troubadour compose le numéro</i>" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Détective : Vous avez un crime à résoudre ?" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Pas de crime non... Je veux réactiver votre symbole !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Détective : Pour ça il va falloir m’aider mon p’tit ! Combien vois-tu de suspects sur l'affiche ?" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "six" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "Détective : Compte bien mon p’tit, ils sont sur le carnet, et entre la solution en toutes lettres !" ;
	$dlevel[$l]['label'] = "Nombre en toutes lettres" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Détective : Le signal est rétabli mon p’tit ! " ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Merci m’sieur !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Super ça a marché ! Encore 3 !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN ACHROMATIC ============== */

/*=====DEBUT ASPIRATEUR ============== */
	$bgiScene = "Achromatic_BG_Glitched.jpg" ;

	$dlevel[$l]['enigma'] = "<i>L'aspirateur à code apparaît</i>" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "Aspirateur.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Encore lui ! Je vais pas me laisser aspirer comme ça ! Je peux essayer de le désactiver sur ce bâtiment, comment ça s'appelle déjà, comme un fleuve ?" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "nil" ;
	$dlevel[$l]['img'] = "PersoPerdu.png" ;
	$dlevel[$l]['cue'] = "Uniquement le dernier mot (sans écrire le mot bâtiment, sans le/la/du)." ;
	$dlevel[$l]['label'] = "Bâtiment du" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Ouf, ça a marché !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN ASPIRATEUR ============== */

/*=====DEBUT LITTLE SEEDS ============== */
	$bgiScene = "Littleseeds_BG.jpg" ;

	$dlevel[$l]['enigma'] = "Troubadour : Maintenant le symbole des ergonomes ! C’est le jeu affiché à côté de celui avec une grenouille !" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "little seeds" ;
	$dlevel[$l]['img'] = "PersoReflechi.png" ;
	$dlevel[$l]['cue'] = "Troubadour : Cherche l'affiche dans le bâtiment !" ;
	$dlevel[$l]['label'] = "Entrez le nom du jeu à appeler" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Tu déchires !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "<i>Troubadour compose le numéro</i>" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "La plante : ..." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : On m’a dit que vous vous occupiez du symbole des ergonomes !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "La plante : ..." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Ah super !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "La plante : ..." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Merci ! Vous aussi !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Super ça a marché ! Encore 2 !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN LITTLE SEEDS  ============== */

/*=====DEBUT ARCHITECT ============== */

	$bgiScene = "Architect_BG_Resize.jpg" ;

	$dlevel[$l]['enigma'] = "Troubadour : Maintenant le symbole des game designer ! C’est un jeu de construction affiché à côté d’Aurore !" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "architect" ;
	$dlevel[$l]['img'] = "PersoReflechi.png" ;
	$dlevel[$l]['cue'] = "Troubadour : Cherche l'affiche dans le bâtiment !" ;
	$dlevel[$l]['label'] = "Entrez le nom du jeu à appeler" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Qu’est-ce que je ferais sans toi ?" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "<i>Troubadour compose le numéro</i>" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Silhouette : Vous cherchez la sortie ?" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Non, je cherche plutôt à entrer !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Silhouette : Pour entrer comme sortir on passe par ... ?" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "porte" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "Regardez bien l’affiche, et entrez la réponse sans la/le/un/une !" ;
	$dlevel[$l]['label'] = "..." ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Silhouette : Entrer quelque part c’est sortir d’ailleurs !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Heu... Merci..." ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Super ça a marché ! Encore un dernier !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN ARCHITECT ============== */

/*=====DEBUT ODD WATERS ============== */
	$bgiScene = "Oddwaters_BG_Glitched.jpg" ;

	$dlevel[$l]['enigma'] = "Troubadour : Maintenant le symbole des chefs de projet (je vais me faire enguirlander c’est sûr !) C’est facile à trouver, comme les capitaines d’un bateau !" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "odd waters" ;
	$dlevel[$l]['img'] = "PersoReflechi.png" ;
	$dlevel[$l]['cue'] = "Troubadour : Cherche l'affiche dans le bâtiment !" ;
	$dlevel[$l]['label'] = "Entrez le nom du jeu à appeler" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Toujours efficace !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "<i>Troubadour compose le numéro</i>" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Capitaine : Encore un déserteur !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Mais non mon capitaine, j’étais en permission et le portail est bloqué !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Capitaine : C’est bien une excuse de déserteur ! Si tu veux vraiment revenir alors dis-moi dans quel port on est ?" ;
	$dlevel[$l]['type'] = "affiche_enigme" ;
	$dlevel[$l]['answer'] = "angoulême" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "Capitaine : C’est encore plus grave que ce que je pensais ! Tu ne sais même pas dans quelle ville on est ? (L'accent est nécessaire pour valider la ville)" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Capitaine : Et ne sois pas en retard !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Merci Capitaine !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoTel.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Super ça a marché ! Le clavier est débloqué !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN ODD WATERS ============== */

/*=====DEBUT FINAL ============== */

	$bgiScene = "Achromatic_BG_Glitched.jpg" ;

	$dlevel[$l]['enigma'] = "Troubadour : Mais je ne me souviens plus de l’ordre ! Ok, je me concentre... " ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoReflechi.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : L'ordre c'est prog - son - graphisme - ergo - gd - gestion de projet. Mais quel symbole est quoi ? Y'a un pense-tête affiché à l'accueil." ;
	$dlevel[$l]['type'] = "badge_enigme" ;
	$dlevel[$l]['answer'] = "progsongraphergogdcdp" ;
	$dlevel[$l]['img'] = "PersoPerdu.png" ;
	$dlevel[$l]['cue'] = "Le temps presse ! Cours à l'accueil !" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Génial !" ;
	$dlevel[$l]['type'] = "start" ;
	$dlevel[$l]['answer'] = "solutionDefault" ;
	$dlevel[$l]['img'] = "PersoHeureux.png" ;
	$dlevel[$l]['cue'] = "" ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Troubadour : Je crois que c’est le moment des adieux ! Je me sens déjà nostalgique de nos aventures ! À plus dans mon jeu !" ;
	$dlevel[$l]['type'] = "win" ;
	$dlevel[$l]['answer'] = "none" ;
	$dlevel[$l]['img'] = "PersoReconnuPortail.png" ;
	$dlevel[$l]['cue'] = "Merci d'avoir joué." ;
	$dlevel[$l]['label'] = "" ;
	$dlevel[$l]['bgi'] = $bgiScene ;
	$l++ ;

/*=====FIN FINAL ============== */

/*
	$dlevel[$l]['enigma'] = "Level 2. Enigme finale des badges. Ordre: Planning, accessibilité, code, son, image, règles. L'ordre est 345621. Lorem ipsum lorem ipsum. Lorem ipsum lorem ipsum." ;
	$dlevel[$l]['type'] = "badge_enigme" ;
	$dlevel[$l]['answer'] = "345621" ;
	$dlevel[$l]['img'] = "PersoNonReconnuPortail.png" ;
	$dlevel[$l]['cue'] = "c'est écrit" ;
	$dlevel[$l]['label'] = "" ;
	$l++ ;

	$dlevel[$l]['enigma'] = "Level 3. La fin du jeu, c'est gagné." ;
	$dlevel[$l]['type'] = "win" ;
	$dlevel[$l]['answer'] = "" ;
	$dlevel[$l]['img'] = "PersoReconnuPortail.png" ;
	$dlevel[$l]['label'] = "code" ;
	$dlevel[$l]['cue'] = "" ;
	$l++ ;
*/
	/*
	if(!isset($dlevel[$Level]['bgi'])){
		$dlevel[$Level]['bgi'] = "" ;
	}
	if(!isset($dlevel[$Level]['bgc'])){
		$dlevel[$Level]['bgc'] = "" ;
	}
*/
	echo "{\"enigma\":\"".$dlevel[$Level]['enigma']."\", \"label\":\"".$dlevel[$Level]['label']."\", \"answer\":\"".$dlevel[$Level]['answer']."\", \"cue\":\"".$dlevel[$Level]['cue']."\", \"img\":\"".$dlevel[$Level]['img']."\", \"bgi\":\"".$dlevel[$Level]['bgi']."\", \"bgc\":\"".$dlevel[$Level]['bgc']."\", \"type\":\"".$dlevel[$Level]['type']."\"}" ;
	
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