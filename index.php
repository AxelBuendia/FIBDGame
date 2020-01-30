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
		/*@font-face {
		    font-family: 'Augusta';
		    src: url('Augusta.ttf') format('truetype');
		}
		@font-face {
		    font-family: 'Deutsch';
		    src: url('Deutsch.ttf') format('truetype');
		}
		@font-face {
		    font-family: 'PrinceValiant';
		    src: url('PrinceValiant.ttf') format('truetype');
		}*/

		#main-container{
			max-width: 500px;
			max-height:750px;
  			margin: auto;
			height:100%;
			border:1px solid #74a3ed;
			text-align: center;
			position:relative;
		}

		#game-title{
			font-size:20px;
			font-weight: bold;
			padding-top:5px;
			padding-bottom:5px;
			background-color:#74a3ed;
		}

		#footer{
			height:20px;
			width:100%;
			background-color:#74a3ed;
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
  			margin-left:3px;
  			margin-top:2px;
		}

		.buttonClass{
			background-size: 40px;
			width:40px;
			height:40px;
		}

		.answerBadgeContainer{
			display: inline-block;
			width:150px;
			height:26px;
			padding:3px;
			border:1px solid black;
		}

		.answerBadge{
			width:21px;
			height:21px;
		}

		#badge_answer, #reset_badges, #affiche_answer, #no_answer {
			font-size:14px;
			background-color: #74a3ed;
  			border: none;
  			border-radius: 8px;
		}

		.illustration{
			/*width:100%;*/
			max-width:250px;
			max-height:250px;
		}

		.message{
			margin:auto;
			width:90%;
			border:1px dotted black;
			border-radius: 8px;
			background-color: #fefefe;
			padding:5px;
			font-size:14px;
		}

		#answer, #no_answer{
			margin-top:10px;
			width:200px;
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
			background-color: rgba(200, 200, 200, 0.9);
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
			border-color: #555;
		}

		.overlay-title{
			font-size:20px;
			font-weight: bold;
			padding-top:5px;
			padding-bottom:5px;
			background-color:#74a3ed;
			margin-bottom:5px;
		}

		.overlay-span{
			padding:5px;
		}

		.overlay-button{
			height:20px;
			width:100%;
			background-color:#74a3ed;
			position: absolute;
			padding-top:3px;
			padding-bottom:3px;
  			bottom: 50px;
  			text-align: center;
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
		/*footer {
		  position: fixed;
		  bottom  : 0px;
		  left    : 0px;
		}*/
	</style>
	<script type="text/javascript">

		/*
		function setCookie(cname, cvalue, exdays) {
		  var d = new Date();
		  d.setTime(d.getTime() + (exdays*24*60*60*1000));
		  var expires = "expires="+ d.toUTCString();
		  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}

		function getCookie(name){
			var cookies = document.cookie;
			var start = cookies.indexOf(name+"=");
			while(start > 0 && name[pos-1] != ";"){
				start = cookies.indexOf(name+"=", start+1);
			}
			if(start == -1){ return undefined; }
			start += name.length + 1;
			var end = cookies.indexOf(";", start);
			var value;
			if(end >= 0)
				value = cookies.substring(start, end);
			else
				value = cookies.substring(start);
			return value;
		}*/

		function restart(){
			var r = confirm("Si vous pressez ok. Vos progrès seront effacés et vous recommencerez l'aventure dès le début.");
			if (r == true) {
				setCookie("LevelPNR", 0, 0);
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
			var imgB = "<img src='img/badge"+el.value+".png' class='answerBadge'/>" ;
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
		}

		function openCredits(){
			var mainElt = document.getElementById('credits');
			mainElt.classList.remove('hidden');
		}

		function closeCredits(){
			var mainOElt = document.getElementById('credits');
			mainOElt.classList.add('hidden');
		}

		function openHelp(){
			var mainElt = document.getElementById('help');
			mainElt.classList.remove('hidden');
		}

		function closeHelp(){
			var mainOElt = document.getElementById('help');
			mainOElt.classList.add('hidden');
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
				location.reload();
			}else{
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

			loadJSON("/PNR/game.php?Level="+Level, function(jsonVal){
				LevelJSON = jsonVal;
				
				var type = LevelJSON.type;

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
				//--><!]]>
			</script>
		</div>
	</div>
	<div id="main-container">
		<div id="game-title">PNR: Personnage Non Reconnu</div>
		<div id='mainStart' class="hidden">
			<img id="mainStartimg" src="img/test1.png" class="illustration"/>
			<br/><br/>
			<div id='startMessage' class="message"></div>
			<button id="no_answer" value="solutionDefault" onclick="VerifyAnswer(this)">OK</button>
		</div>

		<div id='main' class="hidden">
			<img id="mainimg" src="img/test1.png" class="illustration"/>
			<br/><br/>
			<div id='enigma' class="message"></div>
			<input id='answer' placeholder="Tapez votre réponse ici..."></input><button id="affiche_answer" onclick="VerifyAnswer()">OK</button>
		</div>

		<div id='main2' class="hidden">
			<img id="main2img" src="img/test1.png" class="illustration"/>
			<br/><br/>
			<div id="badge_enigma" class="message"></div>
			<br/>
			<div style="height:42px">
			<button id="b1" value="1" class="buttonClass" style="background-image:url('img/badge1.png')" onclick="AddBadge(this)"></button>
			<button id="b2" class="buttonClass" style="background-image:url('img/badge2.png')" value="2" onclick="AddBadge(this)"></button>
			<button id="b3" class="buttonClass" style="background-image:url('img/badge3.png')" value="3" onclick="AddBadge(this)"></button>
			<button id="b4" class="buttonClass" style="background-image:url('img/badge4.png')" value="4" onclick="AddBadge(this)"></button>
			<button id="b5" class="buttonClass" style="background-image:url('img/badge5.png')" value="5" onclick="AddBadge(this)"></button>
			<button id="b6" class="buttonClass" style="background-image:url('img/badge6.png')" value="6" onclick="AddBadge(this)"></button>
			</div>
			<br/>
			<div id="badgeVisibleAnswer" class="answerBadgeContainer"></div>
			<button id="badge_answer" value="" onclick="VerifyAnswer(this)">OK</button>&nbsp;&nbsp;<button id="reset_badges" value="" onclick="ResetBadges()">RESET</button>
		</div>

		<div id='mainW' class="hidden">
			<img id="mainWimg" src="img/test1.png" class="illustration"/>
			<br/><br/>
			<div id="win_message" class="message"></div>
		</div>
		<div id="footer"><button class="footer-button" onclick="openHelp()">Aide</button><button class="footer-button" onclick="openCredits()">Crédits</button><button class="footer-button" onclick="restart()">Recommencez l'aventure</button>
		<div id="help" class="hidden">
			<div class="overlay-content">
				<div class="overlay-title">Aide</div>
				<span class="overlay-span">Lorem ipsum dolores lalalalala. Lorem ipsum dolores lalalalala. Lorem ipsum dolores lalalalala <br/> Lorem ipsum dolores lalalalala</span>
				<div class="overlay-button"><button onclick="closeHelp()">Fermer l'aide</button></div>
			</div>
		</div>
		<div id="credits" class="hidden">
			<div class="overlay-content">
				<div class="overlay-title">Crédits</div>
				<span class="overlay-span">Lorem ipsum dolores lalalalala <br/> Lorem ipsum dolores lalalalala Lorem ipsum dolores lalalalala <br/> Lorem ipsum dolores lalalalala</span>
				<div class="overlay-button"><button onclick="closeCredits()">Fermer les crédits</button></div>
			</div>
		</div>
</body>
</html>