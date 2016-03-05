<?php
abstract class TweedimensionaalObject{

	private $beschrijving;
	
	public function __construct($beschrijving){
		$this->beschrijving = $beschrijving;
	}

	public function __tostring(){
		return self::getBeschrijving();
	}
	
	public function getBeschrijving(){
		return $this->beschrijving;
	}
	
	public abstract function berekenOppervlak();

}
?>

