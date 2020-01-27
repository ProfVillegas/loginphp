<?php

$fp = fopen("salida.txt","a");


echo $linea =json_encode($_REQUEST);
fwrite($fp, $linea . PHP_EOL);

fclose($fp);
?>