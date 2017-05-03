<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>TUTORIAL JSON</h1>
	<div id="contenedor"> </div>
<?php
$varios='{
		"nombre":"Jean Carlo Flores",
		"id_profesor":2013018928,
		"profesor":true,
		"idCursos":[10,20,30,40,50],
		"num_Cursos":{
			"marketing":"MI PRIMERA APLICACION PARA IPHONE",
			"programacion":[
				"Objective-C",
				"Xcode",
				"Json"
			]
		},
		"vacaciones":null
	}';

	print_r(json_decode($varios,true));
?>
</body>
</html>