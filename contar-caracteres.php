<!DOCTYPE HTML5>
<html>
<head>
<meta charset="utf-8">
<title>programa</title>
</head>
<body>
<form action="" method="post">
	<input type="text" name="texto">
	<input type="submit">
</form>
<?php
$palabra=$_POST['texto'];
$arrayLetras=str_split($palabra);
$numeroVocales=0;
$numeroDeO=0;
for($i=0;$i<count($arrayLetras);$i++){
	switch($arrayLetras[$i]){
	case "a":
	case "e":
	case "i":
	case "u":
	$numeroVocales++;
	break;
	case "o":
	$numeroDeO++;
	$numeroVocales++;
	break;
	};
};
echo "Número de vocales: ".$numeroVocales." numero de 'o' ".$numeroDeO;
?>

</body>
</html>
