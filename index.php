<html>

<head>
<title> Site numero 1 em PHP </title>
</head>

<body>
<! --  o ? indica onde começa; o ? onde termina o PHP -->

<! --  o . no PHP é concatenar -->

<! --  o $i é o numero inicial, desse jeito ele vai comando 1 a cada linha até o 9, por ser menor que 10 -->

	<?php
		for ( $i = 0 ; $i < 10 ; $i++ ) {
			print( "Linha número " . $i . "<br />");
		}
	?>


</body>



</html>