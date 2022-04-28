<html>

<head>
<title> Site numero 2 em PHP - CSS e Java </title>

<! -- tag pra poder importar o java lá debaixo - esse site é onde tem as versões do java no jquery -->

<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>


<! -- lembra da época dos blogs? Então... voltamos! Joga o CSS aqui gata! E depois joga o span class pra identificar onde vai hahahaha -->

<style type-"text/css">
	.line {
		font-weight: bold;
		color: blue;
		padding-left: 10px;
		line-height: 40px;
	}
</style>

</head>

<body>
<! --  o ? indica onde começa; o ? onde termina o PHP -->

<! --  o . no PHP é concatenar -->

<! --  o $i é o numero inicial, desse jeito ele vai comando 1 a cada linha até o 9, por ser menor que 10 -->

	<?php
		for ( $i = 0 ; $i < 10 ; $i++ ) {
			print( "<span class=\"line\">Linha número " . $i . "</span><br />");
		}
	?>


</body>


<! -- codigo java que manda a página carregar inteira primeiro, depois fazer as funções dele; vai mandar um popup dizendo o que eu quiser -->

<script type="text/javascript">
	$(document).ready(function() {
		alert("You did it girl!");
	});
</script>

</html>