<?php
  include('classi/Umano.php');
	class Impiegato1 extends Umano
	{
		// Proprietà come variabili con attributo pubblico e privato
			public $mansione;
			public $nome;
			public static $visitors;
		//	costruttore della classe			
			function __construct($razza, $mansione, $nome)
			{
				parent::__construct($razza);	
				$this->mansione = $mansione;
			    $this->nome = $nome;
				self::$visitors++;
			}
			static function getVisitors()
			{
				return self::$visitors;
			}
			// funzione distruttore	
/*			function __destruct()
			{
				echo "La pagina &eacute; stata rimossa dalla memoria";
			}
*/	}
?>
