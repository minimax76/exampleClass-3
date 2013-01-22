<?php
  // includo la classe Login
	include('classi/Impiegato1.php');
	include('classi/Impiegato.php');

	$luca = new Impiegato1("bianca ", "Impiegato ", "Luca "); 
	echo $luca->mansione;
	echo $luca->nome;	
	echo $luca->razza;
	//
/*	if ($luca instanceof Impiegato1){
		echo "$luca appartiene alla classe Umano";
	}
	else
	{
		echo "$luca non appartiene alla classe Umano";
	}
	
*/	
	// verificare a casa
	class_alias("Impiegato1", "Nuovoimpiegato");
	$ogg = new Nuovoimpegato("bianca", "Operaio", "Marco");
	echo $ogg->mansione;
	$a = class_exists("Impiegato1"); // deve dare 1
	echo get_class($ogg); //restituisce la classe dell'oggetto
	$var = get_class_methods("Impiegato1"); // restituisce in un array tutti i nomi dei metodi della classe
	foreach($var as $val)
	{
		echo $val;
	}
	$var = get_class_vars("Impiegato1"); // restituisce tutte le proprietà
	
	// get_object_vars($ogg); verificare
	// get_paret_class($ogg); il nome della classe genitore
	// is_a($ogg, "Classe") return TRUE se l'oggetto appartiene alla classe specificata
	// method_exists($ogg, "getValue"); se all'interno dell'oggetto esiste il metodo getValue
	
		$Andrea = new Impiegato();
		$Andrea->nome = "Alessandro";
		echo $Andrea->nome;
?>
