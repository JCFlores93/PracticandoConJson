<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>TUTORIAL JSON</h1>
	<div id="contenedor"> </div>
	<?php
	$varios=array (
	 "nombre" => "Jean Carlo Flores",
	  "id_profesor" => "2013018928",
	   "profesor" => true ,
	   "idCursos" => array (10,20,30,40,50),
	   "num_Cursos" => array ( "marketing" => "MI PRIMERA APLICACION PARA IPHONE",
	   						   "programacion" => array (
	   						   		"Objective-C","Xcode ","Json" ) 
	   						   ) ,
	   "vacaciones" => null );


	echo json_encode($varios);?>
</body>
</html>