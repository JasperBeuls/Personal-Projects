<?php

class Persoon {
	private  $naam;
	private  $auto ;
	
	public function   __construct ($naam, Auto $a =NULL){
		$this -> naam = $naam;
		$this -> auto = $a;
	}

	public function   __tostring(){
		if ($this->auto === NULL){
			return 	"Persoon, naam = ". $this->naam . 
				" zonder auto ";
		} else {
			return 	"Persoon, naam = ". $this->naam . 
				" met auto " . 	$this->auto;
			// __tostring van auto wordt in bovenstaande 
			// regel aangeroepen (door de concatenatie)
		}
	}
		
	public function setAuto(Auto $a){
		$this -> auto = $a;
	}
	

	public function getAuto(){
		return $this -> auto;
	}
}  
?>

