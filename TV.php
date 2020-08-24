<?php

class Televisi {
	var $Polytron;
	var $Samsung;
	var $Sharp;

	function TV_Polytron(){
	return "TV Polytron harga : Rp.1800000-3910000";
	}
	function TV_Samsung(){
	return "TV Samsung harga : Rp.1739999-6375000";
	}
	function TV_Sharp(){
	return "TV Sharp harga : Rp.1175000-12299000";
	}
}

$Televisi = new Televisi();
$Televisi = new Televisi();
$Televisi = new Televisi();

echo $Televisi -> TV_Polytron();
echo "<br />";
echo $Televisi -> TV_Samsung();
echo "<br />";
echo $Televisi -> TV_Sharp();
echo "<br />";

?>