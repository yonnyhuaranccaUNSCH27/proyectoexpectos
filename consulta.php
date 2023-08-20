<?php
$myfile=fopen("test.pl","w") or die("no es posible abir el archivo");
$nombre= $_POST["nombre"];
$edad= $_POST["edad"];


$txt = "test:-write('su nombre es: '),write('$nombre'),write(' su edad es: '),write('$edad').";

//var_dump($txt);

fwrite($myfile, $txt);
fclose($myfile); 

$cmd= 'swipl -s test.pl -g "test." -t halt.';

$output=shell_exec( $cmd);
echo "<h1>".$output."</h1>";
?>