<?php
	error_reporting(E_ALL);
	ini_set('display_errors',1);



	// Incluimos tauler.php
	require 'tauler.php';

	 // Creamos nuevo tauler...
	$tauler =  new Tauler(8,8,'aleat');
	
	// Mostramos tabla... 
	$tauler->show();



