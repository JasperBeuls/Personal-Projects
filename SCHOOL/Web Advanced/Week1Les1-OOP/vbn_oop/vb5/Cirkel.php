<?php
class Cirkel extends TweedimensionaalObject{
	private $straal;
	
	public function __construct($straal){
		$beschrijving = "Een cirkel met straal $straal";
		$this -> straal = $straal;
		parent::__construct ($beschrijving);
	}

	public function __tostring(){
		return parent::__tostring();
	}
	
	public function berekenOppervlak(){
		return M_PI * pow ($this->straal, 2);
	}
}
?>

