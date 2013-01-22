<?php
  // includo la classe Login
	include('classi/ArticoloVar.php');

	$codiceArt = new ArticoloVar("1234567890" , "Tavolo allungabile",  1000.50, "kg", "disponibile");
	$codiceArt->stampaArticolo();
	$codiceArt->display();
	$codiceArt->setUm("gr");
	$codiceArt->setCategoria("Esaurito");
	$codiceArt->display();
	
	Articolo::stampaId();
	if ($codiceArt instanceof ArticoloVar){
		echo '$codiceArt appartiene alla classe Articolo <br/>';
	}
	else
	{
		echo '$codiceArt non appartiene alla classe Articolo<br/>';
	}
	$ogg = new ArticoloVar("222222", "Tavolo rotondo", "500", "mt", "In esaurimento");
	echo $ogg->codice() . " " . $ogg->descrizione() . "<br/>";
	$a = class_exists("ArticoloVar");
	echo $a ."<br/>";
	echo get_class($ogg) ." ";
	
	$var = get_class_methods("ArticoloVar");
	foreach($var as $val)
	{
		echo $val . " ";
	}
	
	$var = get_class_vars("ArticoloVar");
	foreach($var as $val)
	{
		echo $val . "<br/>";
	}
    $a = is_a($ogg, "ArticoloVar");
	echo $a;
	$a = method_exists($ogg, "stampaArticolo");
	echo $a . "<br/>";
?>
