<?php 
$componente = array();
echo count($componente)==0 ?  "ok \n" : " não ok \n"; // If ternário

$componente[]= 'elemento';

echo count($componente)==1 ? "ok \n" : "não ok \n";

?>
