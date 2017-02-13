<?php
	error_reporting(E_ALL);
	ini_set('display_errors',1);

class Quadre {

	protected $color;

	function __construct($color) {

		// Cojemos el color de la variable de tauler
		$this->color=$color;

		// Mostramos...
		$this->show();
	}



	function show() {
		//Montamos la tabla...
		echo '<td style="padding-left:42px;background-color:'.$this->color.'">'.'<div style="height:50px; overflow:hidden"></div> </td>';
	}



}
