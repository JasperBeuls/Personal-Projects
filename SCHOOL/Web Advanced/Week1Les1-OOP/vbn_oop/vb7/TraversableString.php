<?php
class TraversableString implements Iterator {
	private $positie;
	private $inhoud;

	public function __construct() {
		$this->inhoud = "";
		$this->positie = 0;
	}

	public function setInhoud($inhoud){
		if(is_string($inhoud)){
			$this->inhoud=$inhoud;
		}
	}

	public function current() {
		return $this->inhoud[$this->positie];
	}
	public function key() {
		return $this->positie;
	}
	public function next() {
		$this->positie++;
	}
	public function rewind() {
		$this->positie=0;
	}
	public function valid() {
		return strlen($this->inhoud) > $this->positie;
	}
}
?>

