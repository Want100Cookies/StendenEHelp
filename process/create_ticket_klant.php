<?php

$create = new create;

if(isset($_POST['submit']) && $_POST['submit'] == 'submit'){
	$ticketID = $create->db->link->lastInsertID();
	$create->db->db_table = 'BEDRIJFSMEDEWERKER';
	$idBedrijfsMedewerker = $create->db->select(array('idBedrijfsMedewerker'), array('Gebruikersnaam' => $_SESSION['gebruikersnaam']))[0]['idBedrijfsMedewerker'];
	$idBedrijf = $create->db->select(array('idBedrijf'), array('idBedrijfsMedewerker' => $idBedrijfsMedewerker))[0]['idBedrijf'];

	if($create->statusWijziging($ticketID, $idBedrijfsMedewerker, $idBedrijf, NULL, "Nieuw") == TRUE){
	
	echo'<div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Succes!</strong> De ticket is aangemaakt.</div>';
        ?><p>U word terug gestuurd naar de ticket indienen pagina in <span id="counter">5</span> seconden.</p>
        <script type="text/javascript">
        function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML)<=1) {
        location.href = '/klantpaneel/ticket/';
    }
    i.innerHTML = parseInt(i . innerHTML) - 1;
}
setInterval(function(){countdown();}, 1000);
</script><?php
	

	} 
} else {
	echo "Please post the next time!";
}