<?php
class Cirkel implements OppervlakteBerekenbaar{
	private $straal;
	
	public function __construct($straal){
		$this -> straal = $straal;
	}

	public function __tostring(){
		return "Een cirkel met straal " .$this->straal;
	}
		
	public function berekenOppervlak(){
		return self::pi * pow ($this->straal, 2);
	}
}
?>
