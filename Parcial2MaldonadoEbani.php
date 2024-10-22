<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$telefonos=array("Samsumg"=> 500, "Motorola" => 2500, "Chaiphon" => 5000, "Cubot" => 4000, "Realme" => 10000,);
echo"<p>";


foreach ($telefonos as $telefono=>$precio){

echo "El telefono  $telefono tiene un costo de $precio <br>";
}
$telefonos += ["Oppo" => 7238, "Huawei"=> 2343];
echo "<p>";

arsort($telefonos);
foreach ($telefonos as $telefono=>$precio){
	echo "El telefono $telefono tiene un costo de $precio <br>";
}



?>
</body>
</html>