<?php
  class Impiegato
	{
		// Proprietà come variabili con attributo pubblico e privato
			private $nome;
			private $cognome;
			private $eta;

			function __construct($nome, $cognome, $eta)
			{
				$this->nome = $nome;
			    $this->cognome = $cognome;
				$this->eta = $eta;
			}

		//	per settare la proprita			
			function __set($name, $propValue){
				$this->$nome = $propValue;
				$this->$cognome = $propValue;
				$this->$eta = $propValue;
			}	
			function __get($name)
			{
				$vars=array("nome", "cognome", "eta");
				if(in_array($name, $vars)){
					return $this->$name;
				}
				else
				{
					return "Nessuna propietà";
				}
			}
	}
?>
