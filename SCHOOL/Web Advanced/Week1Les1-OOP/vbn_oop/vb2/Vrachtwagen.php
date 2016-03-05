<?php

class Vrachtwagen extends Auto {

	// eigenschappen
	private $laadvermogen;
	
	//constructor
	function   __construct ($nummerplaat, $maxSnelheid, $laadvermogen){
		parent::__construct ($nummerplaat, $maxSnelheid);	
		$this->laadvermogen = $laadvermogen;
	}

	//destructor
	function   __destruct (){
		parent::__destruct ();	
	}

	// tostring
	function   __tostring(){
		return 	"Vrachtwagen is een ". parent::__tostring() 
			. " laadvermogen = ".$this->laadvermogen;		
	}
	
	//setters en getters
	public function setLaadvermogen($laadvermogen){
		$this -> laadvermogen = $laadvermogen;
	}
	
	public function getLaadvermogen(){
		return $this -> laadvermogen;
	}
}

 ?> 

