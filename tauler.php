<?php

require 'quadre.php';

class Tauler {
	private $peces=Array();
	private $tipus; // Damas o aleat
	private $nRows=null;
	private $nCols=null;


	function __construct($nRows=null, $nCols=null, $tipus) {
		$this->tipus=$tipus;
		switch ($this->tipus) {
			case 'dames':$this->dames($nRows=null,$nCols0null,$tipus):
				break;
			case 'aleat': $this->aleat($nRows=null,$nCols0null,$tipus);
				break;
		} // fin de switch
	} // fin de consturct
	
	function dames($nRows=null,$nCols=null,$tipus) {
		// Aqui.....
	}

	function aleat($nRows=null,$nCols=null,$tipus) {
		// Aqui.....
	}

	function show() {
		// Aqui.....
	}

} // Fin de Class



class Quadre {

	protected $color;

	function __construct($solor) {
		$this->color=$color;
	}



	function show() {
		echo '<td style="padding-left:2px;background-color:'$this->.'">'.'<div style="height:50px; overflow:hidden"></div></td>';
	}
}

