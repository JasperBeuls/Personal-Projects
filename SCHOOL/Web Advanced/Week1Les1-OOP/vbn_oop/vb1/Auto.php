<?php
class Auto {
	// eigenschappen
	private  $nummerplaat;
	private  $maxSnelheid;
	private static $aantalAutos = 0;
	const landCode = 'B';
	
	//constructor
	function   __construct ($nummerplaat, $maxSnelheid){
		$this -> nummerplaat = $nummerplaat;
		$this -> maxSnelheid = $maxSnelheid;
		self::$aantalAutos++;
		print("<br/>\n---- constructor, ".
			"aantal = " .self::$aantalAutos."<br/>\n");
	}

	//destructor
	function   __destruct (){
		self::$aantalAutos--;
		print("<br/>\n---- destructor Auto, aantal = " 					
			.self::$aantalAutos."<br/>\n");
	}

	// tostring
	function   __tostring(){
		return 	"Auto, code = ". self::landCode. ",
			 nummerplaat = " . 	$this->nummerplaat . 
			", maxSnelheid = " . $this->maxSnelheid . 
			", aantalAutos = " . self::$aantalAutos;
	}
	

	//setters en getters
	public function setNummerPlaat($nummerplaat){
		$this -> nummerplaat = $nummerplaat;
	}
	
	public function setMaxSnelheid($maxSnelheid){
		$this -> maxSnelheid = $maxSnelheid;
	}
	
   	public function getNummerPlaat(){
		return $this -> nummerplaat;
	}
	
	public function getMaxSnelheid(){
		return $this -> maxSnelheid;
	}

	public static function getAantalAutos(){
		return self::$aantalAutos;
	}
}
?> 
