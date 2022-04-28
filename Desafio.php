<html>

<head>
<title> Desafio Aula de Primeiros Passos Web </title>

<! -- Desafio - fazer um site usando o Accordion do JQuery - https://www.devmedia.com.br/jquery-accordion-dica/28599 -->

<! -- tag pra poder importar o java lá debaixo - esse site é onde tem as versões do java no jquery -->

<link rel="stylesheet"
href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" 
/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


<! -- lembra da época dos blogs? Então... voltamos! Joga o CSS aqui gata! E depois joga o span class pra identificar onde vai hahahaha -->

<style type-"text/css">
	.drive {
		font-family: cursive;
		font-weight: bold;
		color: DodgerBlue;
		padding-left: 10px;
		line-height: 30px;
	}
	.gone {
		font-family: URW Chancery L;
		font-weight: bold;
		color: BlueViolet;
		padding-left: 10px;
		line-height: 30px;
	}
	.stars {
		font-family: Brush Script MT;
		font-weight: bold;
		color: DeepPink;
		padding-left: 10px;
		line-height: 30px;
	}
</style>

</head>

<body>
<! --  o ? indica onde começa; o ? onde termina o PHP -->

<! --  o . no PHP é concatenar -->

<! --  o $i é o numero inicial, desse jeito ele vai comando 1 a cada linha até o 9, por ser menor que 10 -->

<div id="accordion">
	<h3>Incubus - Drive</h3>
	<div><Spam class="drive">
Whatever tomorrow brings I'll be there <br/>
With open arms and open eyes yeah <br/>
Whatever tomorrow brings <br/>
I'll be there, I'll be there <br/></spam>
	</div>
	<h3>Goo Goo Dolls - Here is Gone</h3>
	<div><Spam class="gone">
I have no solution <br/>
To the sound of this pollution in me <br/>
And I was not the answer <br/>
So forget you ever thought it was me <br/></spam>
	</div>
	<h3>Adam Levine - Lost Stars</h3>
	<div><Spam class="stars">
But are we all lost stars <br/>
Trying to light up the dark? <br/>
Who are we? <br/>
Just a speck of dust within the galaxy <br/></spam>
	</div>
</div>


<script>
$(function() {
	$("#accordion").accordion();
});
</script>

</body>


<! -- codigo java que manda a página carregar inteira primeiro, depois fazer as funções dele; vai mandar um popup dizendo o que eu quiser -->

<script type="text/javascript">
	$(document).ready(function() {
		alert("My favorite songs <3");
	});
</script>

</html>