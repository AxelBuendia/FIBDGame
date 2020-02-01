<?php
if(strpos($_SERVER['HTTP_HOST'], 'www') === FALSE){
	header("Location: http://www.interaction-project.net/PNR/");
}
?>
<html>
<head>
	<title>PNR: Personnage Non Reconnu</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--if we do an icon <link rel="icon" type="image/png" href="http://www.interaction-project.net/PNR/icon.png">
	<link rel="apple-touch-icon" href="/iphoneICON.png" />-->
	<style type="text/css">
		@font-face {
		    font-family: Roboto;
		    src: url('img/fonts/Roboto/Roboto-Light.ttf') format('truetype');
		}
		@font-face {
		    font-family: Odibee;
		    src: url('img/fonts/Odibee_Sans/OdibeeSans-Regular') format('truetype');
		}

		body{
			font-family: Odibee ;
		}

		#main-container{
			max-width: 500px;
			max-height:750px;
  			margin: auto;
			height:100%;
			border:1px solid #81d99c;
			text-align: center;
			position:relative;
			
			/*background: url(img/PersoAspirateur.png);*/
			background-position: center;
			background-color:#ffffff;
			background-repeat: no-repeat;
			background-size: cover;
		}

		#game-title{
			color:#ffffff;
			font-size:30px;
			font-weight: bold;
			padding-top:5px;
			padding-bottom:5px;
			background-color:#81d99c;
		}

		#footer{
			height:20px;
			width:100%;
			background-color:#81d99c;
			position: absolute;
			padding-top:3px;
			padding-bottom:3px;
  			bottom: 0;
  			text-align: center;
		}

		.footer-button{
			color:#fff;
			background-color: #000000;
  			border: none;
  			border-radius: 8px;
  			margin-right:3px;
  			/*margin-left:3px;
  			margin-top:2px;*/
  			font-family: Odibee ;
  			font-size:18px;
		}

		.buttonClass{
			border:1px solid lightgrey;
			background-size: 40px;
			width:40px;
			height:40px;
			background-color: 000;
		}

		.answerBadgeContainer{
			display: inline-block;
			width:150px;
			height:26px;
			padding:3px;
			border:1px solid #81d99c;
		}

		.answerBadge{
			width:21px;
			height:21px;
			background-color: 000;
		}

		#badge_answer, #reset_badges, #affiche_answer, #no_answer {
			font-size:18px;
			background-color: #81d99c;
  			border: none;
  			border-radius: 8px;
  			font-family: Odibee ;
		}

		.illustration{
			/*width:100%;*/
			max-width:250px;
			max-height:250px;
			background-color: rgb(255,255,255,0.3);
    		border-radius: 25px;
		}

		@media only screen and (max-width: 350px) {
			.illustration{
			/*width:100%;*/
			max-width:150px;
			max-height:150px;
			background-color: rgb(255,255,255,0.3);
    		border-radius: 25px;
		}
		}

		.message{
			margin:auto;
			width:90%;
			border:1px dotted black;
			border-radius: 8px;
			background-color: #fefefe;
			padding:5px;
			font-size:14px;
			font-family: Roboto ;
		}

		#answer, #no_answer{
			margin-top:10px;
			width:200px;
			border:1px solid #81d99c;
		}

		#answer{
			font-size:14px;
			font-family: Roboto ;
		}

		#help, #credits {
			position: fixed;
			right: 0px;
			top: 0px;
			z-index: 300;
			/*border: 3px;
			padding: 3px;
			border-style: dashed;
			border-color: #555;*/
			width:100%;
			height: 100%;
			background-color: rgba(129, 217, 156, 1);
		}

		.overlay-content{
			position:relative;
			margin:auto;
			width:100%;
			height: 100%;
			max-width: 500px;
			max-height:750px;
			border: 3px;
			border-style: dashed;
			border-color: #81d99c;
			box-sizing: border-box;
			padding:5px;
			font-family: Roboto ;
		}

		.overlay-title{
			font-size:26px;
			font-weight: bold;
			padding-top:5px;
			padding-bottom:5px;
			background-color:#81d99c;
			margin-bottom:5px;
			font-family: Odibee ;
		}

		.overlay-span{
			padding:5px;
		}

		.link_credit{
			color:#fff;
			text-decoration: underline;
		}

		.overlay-button{
			height:20px;
			width:100%;
			background-color:#81d99c;
			position: absolute;
			padding-top:3px;
			padding-bottom:3px;
  			bottom: 50px;
  			text-align: center;
		}

		.overlay-button button{
			background-color:#fff;
			border: none;
  			border-radius: 8px;
  			font-family: Odibee ;
  			font-size:20px;
		}

		.hidden {
			display: none;
		}

		.loader {
			position: absolute;
			top     : 0px;
			left    : 0px;
			z-index : 0;
			visibility: hidden;
		}

		.bullet{
			display: inline-block;
			vertical-align: middle;
		}

		::-webkit-input-placeholder { /* Edge */
		  color: grey;
		  text-align:center;
		}

		:-ms-input-placeholder { /* Internet Explorer */
		  color: grey;
		  text-align:center;
		}

		::placeholder {
		  color: grey;
		  text-align:center;
		}

	</style>
	<script src="http://www.interaction-project.net/reptools/tinystatosaurus/tinystatosaurus_config_PNR.js"></script>	
	<script src="http://www.interaction-project.net/reptools/tinystatosaurus/tinystatosaurus.js"></script>
	<script type="text/javascript">

		function restart(){
			var r = confirm("Si vous pressez ok. Vos progrès seront effacés et vous recommencerez l'aventure dès le début.");
			if (r == true) {
				setCookie("LevelPNR", 0, 0);
				TinyStato.logThis(100, "restart_game", "", Level) ;
				location.reload();
			}
		}

		function setCookie(cname, cvalue, exdays){
			localStorage[cname] = cvalue ;
		}

		function getCookie(name){
			return localStorage[name] ;
		}

		function loadJSON(url, callback){
			var xobj = new XMLHttpRequest();
			xobj.overrideMimeType("application/json");
			xobj.open('GET', url, true);
			xobj.onreadystatechange = function () {
				if (xobj.readyState == 4 && xobj.status == "200") {
					try{
						//console.log(xobj);
						var jsonVal = JSON.parse(xobj.response);
						callback(jsonVal);
					}catch(e){
						console.error('Not a json text ['+jsonVal+']');
						console.log(e);
					}
				}
			};
			xobj.send(null);
		}

		function sendJSON(url, json, callback){
			var xobj = new XMLHttpRequest();
			xobj.overrideMimeType("application/json");
			xobj.open('POST', url);
			xobj.setRequestHeader("Content-Type", "application/json");
			xobj.onreadystatechange = function () {
				if (xobj.readyState == 4 && xobj.status == "200") {
					try{
						//console.log(xobj);
						var jsonVal = JSON.parse(xobj.response);
						callback(jsonVal);
					}catch(e){
						console.error('Not a json text ['+jsonVal+']');
						console.log(e);
					}
				}
			};
			xobj.send(JSON.stringify(json));
		}

		function AddBadge(el){
			el.classList.add('hidden');

			var bAnswer = document.getElementById("badge_answer") ;
			/*if(bAnswer.value != ""){
				bAnswer.value = bAnswer.value + "," ;
			}*/
			bAnswer.value = bAnswer.value+el.value ;
			var imgB = "<img src='img/badge_"+el.value+".png' class='answerBadge'/>" ;
			//document.getElementById("badgeVisibleAnswer").innerHTML += "Badge "+el.value ;

			document.getElementById("badgeVisibleAnswer").innerHTML += imgB ;
		}

		function ResetBadges(){
			for(i=1;i<=6;i++){
				document.getElementById('b'+i).classList.remove('hidden');
			}
			document.getElementById("badgeVisibleAnswer").innerHTML = "" ;

			var answerElt = document.getElementById('badge_answer');
			answerElt.value = "";
			TinyStato.logThis(13, "reset_badge", "", Level) ;
		}

		function openCredits(){
			var mainElt = document.getElementById('credits');
			mainElt.classList.remove('hidden');
			TinyStato.logThis(101, "credit", "open", Level) ;
		}

		function closeCredits(){
			var mainOElt = document.getElementById('credits');
			mainOElt.classList.add('hidden');
			TinyStato.logThis(102, "credit", "close", Level) ;
		}

		function openHelp(){
			var mainElt = document.getElementById('help');
			mainElt.classList.remove('hidden');
			TinyStato.logThis(103, "help", "open", Level) ;
		}

		function closeHelp(){
			var mainOElt = document.getElementById('help');
			mainOElt.classList.add('hidden');
			TinyStato.logThis(104, "help", "close", Level) ;
		}

		//----- VARIABLES -----
		//var LevelJSON = {"enigma":"test default", "answer":"solutionDefault", "type":"affiche_enigme"};
		//var LevelJSON = {"enigma":"Lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem. Ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores lorem ipsum dolores.", "answer":"345621", "type":"badge_enigme"};
		var LevelJSON;
		var Level;

		function VerifyAnswer(el) {
			var answerElt
			if(el == null){
				answerElt = document.getElementById('answer');
			}else{
				answerElt = el ;
			}

			var answerCleared = answerElt.value.replace(/[^a-z0-9]/gi, '') ;
			var solutionCleared = LevelJSON.answer.replace(/[^a-z0-9]/gi, '') ;

			//console.log (answerCleared + " - " + solutionCleared) ;

			if(answerElt.value.toLowerCase() == LevelJSON.answer.toLowerCase()
				|| answerCleared.toLowerCase() == solutionCleared.toLowerCase()){
				Level++;
				setCookie("LevelPNR", Level, 1);
				TinyStato.logThis(10, "good_answer", (Level-1), answerElt.value.toLowerCase()) ;
				location.reload();
			}else{
				TinyStato.logThis(11, "wrong_answer", Level, answerElt.value.toLowerCase()) ;

				var cue = LevelJSON.cue ;
				if(typeof cue === 'undefined' || cue == ""){
					cue = "Dommage, essayez encore !" ;
				}
				alert(cue) ;
				answerElt.value = "";
				if(LevelJSON.type == "badge_enigme"){
					ResetBadges() ;
				}
			}
		}

		//NK: a little refactor wouldn't hurt
		function loadData () {
			Level = getCookie("LevelPNR");
			if (Level == undefined) Level = 0;

			TinyStato.logThis(5, "load_level", Level) ;

			loadJSON("/PNR/game.php?Level="+Level, function(jsonVal){
				LevelJSON = jsonVal;
				
				//console.log(LevelJSON) ;

				var type = LevelJSON.type;

				var bg_img = LevelJSON.bgi ;
				var bg_c = LevelJSON.bgc ;

				var mc = document.getElementById('main-container') ;

				if(bg_img != ""){
					mc.style.backgroundImage = "url('img/background/"+bg_img+"')";
				}
				if(bg_c != ""){
					mc.style.backgroundColor = bg_c ;
				}

				switch(type){

					case "start":

					var mainSElt = document.getElementById('mainStart');
					mainSElt.classList.remove('hidden');

					var enigmaElt = document.getElementById('startMessage');
					enigmaElt.innerHTML = LevelJSON.enigma;
					
					var mainElt = document.getElementById('main');
					mainElt.classList.add('hidden');

					var main2Elt = document.getElementById('main2');
					main2Elt.classList.add('hidden');

					var theillu = document.getElementById('mainStartimg');
					theillu.src = "img/"+LevelJSON.img ;

					break;

					case "affiche_enigme":

					var enigmaElt = document.getElementById('enigma');
					enigmaElt.innerHTML = LevelJSON.enigma;

					var mainOElt = document.getElementById('main2');
					mainOElt.classList.add('hidden');

					var mainElt = document.getElementById('main');
					mainElt.classList.remove('hidden');

					var answerElt = document.getElementById('answer');
					answerElt.value = "";
					if(typeof LevelJSON.label !== undefined && LevelJSON.label != ""){
						answerElt.placeholder = LevelJSON.label;
					}

					var theillu = document.getElementById('mainimg');
					theillu.src = "img/"+LevelJSON.img ;

					break;

					case "badge_enigme":

					var enigmaElt = document.getElementById('badge_enigma');
					enigmaElt.innerHTML = LevelJSON.enigma;

					var mainOElt = document.getElementById('main');
					mainOElt.classList.add('hidden');

					var mainElt = document.getElementById('main2');
					mainElt.classList.remove('hidden');

					var answerElt = document.getElementById('badge_answer');
					answerElt.value = "";

					var theillu = document.getElementById('main2img');
					theillu.src = "img/"+LevelJSON.img ;

					break;

					case "win":

					var enigmaElt = document.getElementById('win_message');
					enigmaElt.innerHTML = LevelJSON.enigma;

					var mainElt = document.getElementById('main');
					mainElt.classList.add('hidden');

					var main2Elt = document.getElementById('main2');
					main2Elt.classList.add('hidden');

					var mainWElt = document.getElementById('mainW');
					mainWElt.classList.remove('hidden');

					var theillu = document.getElementById('mainWimg');
					theillu.src = "img/"+LevelJSON.img ;

					break;
				}
			});
		}

		window.addEventListener('load', loadData, false);

	</script>
</head>
<body>
	<div class="loader">
		<div class="hidden">
			<script type="text/javascript">
				<!--//--><![CDATA[//><!--
					function preload(files, list) {
						for (i = 0; i < files.length; i++) {
							var img = new Image();
							img.src = files[i];
							if(typeof list !== "undefined"){
								list[i] = img;
							}
						}
					}

					preload(["img/PersoPerdu.png", "img/PersoNonReconnuPortail", "img/PersoReflechi.png", "img/PersoTel.png", "img/PersoHeureux.png", "img/Aspirateur.png", "img/PersoReconnuPortail.png", "img/background/Tae_BG_Glitched.jpg", "img/background/Littleseed_glitched.jpg", "img/background/Achromatic_BG_Glitched.jpg","img/background/Aurore_BG_Glitched.jpg","img/background/Achromatic_BG.jpg", "img/background/Littleseeds_BG.jpg","img/background/Architect_BG_Resize.jpg","img/background/Oddwaters_BG_Glitched.jpg"]);
				//--><!]]>
			</script>
		</div>
	</div>
	<div id="main-container">
		<div id="game-title">PNR: Personnage Non Reconnu</div>
		<div id='mainStart' class="hidden">
			<img id="mainStartimg" src="" class="illustration"/>
			<br/><br/>
			<div id='startMessage' class="message"></div>
			<button id="no_answer" value="solutionDefault" onclick="VerifyAnswer(this)">OK</button>
		</div>

		<div id='main' class="hidden">
			<img id="mainimg" src="" class="illustration"/>
			<br/><br/>
			<div id='enigma' class="message"></div>
			<input id='answer' placeholder="Tapez votre réponse ici..."></input><button id="affiche_answer" onclick="VerifyAnswer()">OK</button>
		</div>

		<div id='main2' class="hidden">
			<img id="main2img" src="" class="illustration"/>
			<br/><br/>
			<div id="badge_enigma" class="message"></div>
			<br/>
			<div style="height:42px">
			<button id="b1" value="prog" class="buttonClass" style="background-image:url('img/badge_prog.png')" onclick="AddBadge(this)"></button>
			<button id="b2" class="buttonClass" style="background-image:url('img/badge_graph.png')" value="graph" onclick="AddBadge(this)"></button>
			<button id="b3" class="buttonClass" style="background-image:url('img/badge_son.png')" value="son" onclick="AddBadge(this)"></button>
			<button id="b4" class="buttonClass" style="background-image:url('img/badge_ergo.png')" value="ergo" onclick="AddBadge(this)"></button>
			<button id="b5" class="buttonClass" style="background-image:url('img/badge_gd.png')" value="gd" onclick="AddBadge(this)"></button>
			<button id="b6" class="buttonClass" style="background-image:url('img/badge_cdp.png')" value="cdp" onclick="AddBadge(this)"></button>
			</div>
			<br/>
			<div id="badgeVisibleAnswer" class="answerBadgeContainer"></div>
			<button id="badge_answer" value="" onclick="VerifyAnswer(this)">OK</button>&nbsp;&nbsp;<button id="reset_badges" value="" onclick="ResetBadges()">RESET</button>
		</div>

		<div id='mainW' class="hidden">
			<img id="mainWimg" src="" class="illustration"/>
			<br/><br/>
			<div id="win_message" class="message"></div>
		</div>
		<div id="footer"><button class="footer-button" onclick="openHelp()">Aide</button><button class="footer-button" onclick="openCredits()">Crédits</button><button class="footer-button" onclick="restart()">Recommencez l'aventure</button>
		<div id="help" class="hidden">
			<div class="overlay-content">
				<div class="overlay-title">Aide</div>
				<span class="overlay-span">PNR est jouable uniquement le dimanche 2 décembre dans le bâtiment du Nil à l'occasion du FIBD 2020 à Angoulême.<br/>Voici quelques conseils :<br/><br/>- Sachez observer l'intérieur du bâtiment pour trouver les affiches de jeu qui vous donneront les réponses aux nombreuses énigmes.<br/>- Pour répondre, vous n'avez jamais besoin de mettre des majuscules et le jeu précise lorsque vous n'avez pas besoin de mettre de déterminants.<br/>- Les quelques énigmes qui nécessitent des chiffres ne fonctionnent qu'avec les chiffres en toutes lettres.<br/>Les réponses doivent avoir les bons accents.</span>
				<div class="overlay-button"><button onclick="closeHelp()">Fermer l'aide</button></div>
			</div>
		</div>
		<div id="credits" class="hidden">
			<div class="overlay-content">
				<div class="overlay-title">Crédits</div>
				<span class="overlay-span">Une réalisation <a class="link_credit" href="http://www.cnam-enjmin.fr/" target="_blank">cnam-enjmin</a> par :<br/><br/>
					<a class="link_credit" href="http://www.sophiegoudjil.fr/" target="_blank">Sophie Goudjil</a> (Game Writer)<br/>
					<a class="link_credit" href="http://smader.interaction-project.net/" target="_blank">Stéphanie Mader</a> (Game Designer/Dev)<br/>
					<a class="link_credit" href="https://www.artstation.com/pandamnesik" target="_blank">Perrine Pau</a> (Game Artist).<br/>
					<a class="link_credit" href="https://www.artstation.com/ineshelmer" target="_blank">Inès Helmer</a> (Game Artist)<br/>
					<a class="link_credit" href="https://www.linkedin.com/in/catherine-rolland-10747248/" target="_blank">Catherine Rolland</a> (Conception)<br/>
					Axel Buendia (Game Developer)<br/>
					<br/><br/>
					Ce jeu d’énigmes sur téléphone mobile a été développé pour être jouable le dimanche 2 février dans le bâtiment du Nil à l’occasion du Festival International de la Bande Dessinée 2020 à Angoulême.
					</span>
				<div class="overlay-button"><button onclick="closeCredits()">Fermer les crédits</button></div>
			</div>
		</div>
</body>
</html>