<?php
  class Articolo
	{
		private $codice;
		private $descrizione;
		private $prezzo;
		public static $id;
		// setta il costruttore dell'articolo
		function __construct($val1, $val2, $val3)
		{
			$this->codice = $val1;
			$this->descrizione = $val2;
			$this->prezzo = $val3;
			self::$id++;
		}
		public function setCodice($val)
		{
			$this->codice = $val;
		}
		public function codice()
		{
			return $this->codice;
		}
		public function setDescrizione($val){
			$this->descrizione = $val;
		}
			
		public function descrizione(){
			return $this->descrizione;
		}
		public function setPrezzo($val){
			$this->prezzo = $val;
		}
		public function prezzo(){
			return $this->prezzo;
		}
		// setta le proprieta dell'articolo come usa Php
/*		function __set($nome, $val)
		{
			$this->codice = $val;
			$this->descrizione = $val;
			$this->prezzo = $val;	
		}
		function __get($nome)
		{
			$vars = array(codice, descrizione, prezzo);
			if(in_array($nome, $vars))
			{
				return $this->nome;
			}
			else
			{
				echo "Nessuna variabile settata";
			}
*/		
			
		public static function  stampaId()
		{
			echo self::$id;
		}
		public function stampaArticolo()
		{
			printf("Codice Articolo %s <br/>", $this->codice);
			printf("descrizione Articolo %s <br/>", $this->descrizione);
			printf("prezzo Articolo %s <br/>", $this->prezzo);
		}
	}
?>
