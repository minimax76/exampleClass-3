<?php
  include('classi/Articolo.php');
	class ArticoloVar extends Articolo
	{
		private $um;
		private $categoria;
		// setta il costruttore dell'articolo
		function __construct($val1, $val2, $val3, $val4, $val5)
		{
			$this->um = $val4;
			$this->categoria = $val5;
			parent::__construct($val1, $val2, $val3);

		}
		
		public function setUm($val)
		{
			$this->um = $val;
		}
	    public function um()
		{
			return $this->um;
		}
		
		public function setCategoria($val)
		{
			$this->categoria = $val;
		}
		public function categoria()
		{
			return $this->categoria; 
		}
		
		public function display()
		{
			echo $this->um . "<br/>";
			echo $this->categoria . "<br/>";
		}
	}
?>
