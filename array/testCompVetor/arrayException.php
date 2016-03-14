<?php 

$componente = array();
assertTrue(count($componente) == 0);

$componente[] = "elemente";
assertTrue(count($componente)==2);

function assertTrue($condicao){

	if(!$condicao){
		throw new Exception('Asserção falhou');
	}

}

