<?php
  class Persona
	{
		// Proprietà come variabili con attributo pubblico e privato
			public $nome;
			public $eta;
		//	costruttore della classe			
			function __construct($nome, $eta)
			{
				$this->nome = $nome;
				$this->eta = $eta;
			}
	}
?>
