<?php

$create = new create;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	var_dump($create->ticket());
	echo "<br>";
	$ticketID = $create->db->link->lastInsertID();
	$create->db->db_table = 'BEDRIJFSMEDEWERKER';
	$idBedrijfsMedewerker = $create->db->select(array('idBedrijfsMedewerker'), array('Gebruikersnaam' => $_SESSION['gebruikersnaam']))[0]['idBedrijfsMedewerker'];
	$idBedrijf = $create->db->select(array('idBedrijf'), array('idBedrijfsMedewerker' => $idBedrijfsMedewerker))[0]['idBedrijf'];
	var_dump($create->statusWijziging($ticketID, $idBedrijfsMedewerker, $idBedrijf, NULL, "Nieuw"));
} else {
	echo "Please post the next time!";
}