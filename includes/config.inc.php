<?php
$ablakcim = array(
    'cim' => 'Máltai Szeretet Szolgálat',
);

$fejlec = array(

	'cim' => 'Máltai Szeretet Szolgálat',
	'motto' => 'A szeretet gyógyít, a törődés életben tart bennünket!'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.', //aktuális dátum
    'ceg' => 'Máltai Szeretet Szolgálat'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),

	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>