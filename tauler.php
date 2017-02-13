<?php
	error_reporting(E_ALL);
	ini_set('display_errors',1);



//Incluimos QuadrePHP...
require 'quadre.php';
class Tauler
{
	private $peces = array();
	private $tipus; //Damas o aleatorio
	private $nRows=null;
	private $nCols=null;
	
	function __construct($nRows=null,$nCols=null,$tipus) {
		
		$this->tipus=$tipus;
		$this->nRows=$nRows;
		$this->nCols=$nCols;

		switch ($this->tipus) {
			case 'dames': $this->dames($nRows, $nCols, $tipus);
				break;
			case 'aleat': $this->aleat($nRows, $nCols, $tipus);
				break;			
		
		} // Fin de switch

	} // fin de Construct

	//Creamos las damas...
	function dames($nRows=null, $nCols=null, $tiipus){
		
		for($i=0; $i<$nRows; $i++) {
			for($x=0; $x<$nCols; $x++)  {
				if($i%2==0)	{
					if($x%2==0){
						$color="black";
					}
					else {
						$color="whitesmoke";
					}
					$this->peces[$i][$x] = $color;
				} // Fin del if
				else{
					if($x%2==0){
						$color="whitesmoke";
					}
					else{
						$color="black";
					}
					$this->peces[$i][$x] = $color;
				} //fin d eelse
			} // Fin del 2o For...
		} // Fin de 1r For...
	} // Fin de function



	function aleat($nRows=null, $nCols=null, $tipus) {
		
		for($i=0;$i<$nRows;$i++) {
			for($x=0;$x<$nCols;$x++) {	
				// Valores aleatorios para las filas y columnas
				$row= rand(1, 2);
				$col= rand(1, 2);
				if($i%$row==0)	{
					if($x%$col==0) {
						$color="black";
					}
					else {
						$color="whitesmoke";
					}
					$this->peces[$i][$x] = $color;
				} // Fin del if				
				else {
					if($x%$col==0) {
						$color="whitesmoke";
					}
					else {
						$color="black";
					}
					$this->peces[$i][$x] = $color;
				}
			}
		} // fin de For
	} // fin de Function



	// Mostramos la tabla html.... 
	function show() {
		echo "<table>";
					
		for($i = 0; $i< $this->nRows; $i++)	{
			echo "<tr>";

			for($x = 0; $x < $this->nCols; $x++) {
			 $quadre = new Quadre($this->peces[$i][$x]);
			}
			echo "</tr>";
		} // Fin de for
		echo "</table>";
	} // Fin de function show



} // Fin de class

  

