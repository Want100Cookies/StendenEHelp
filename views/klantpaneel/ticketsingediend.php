<?php
$db = new db;
$Gebruikersnaam = $_SESSION['gebruikersnaam'];
$idBedrijf = $db->select(NULL, NULL, "SELECT idBedrijf 
                                 FROM BEDRIJFSMEDEWERKER
                                 WHERE Gebruikersnaam = '" . $Gebruikersnaam . "'");
var_dump($idBedrijf);

   $result = $idBedrijf['idBedrijf'];

var_dump($result);
foreach($db->select(NULL, NULL, "SELECT IncidentType, Probleemstelling, Oplossing 
                                 FROM STATUS_WIJZIGING, TICKET, BEDRIJF
                                 WHERE TICKET.idTicket = STATUS_WIJZIGING.idTicket
                                 AND STATUS_WIJZIGING.idBedrijf = BEDRIJF.idBedrijf
                                 AND BEDRIJF.idBedrijf = '%" . $result . "%'") as $key => $value)
{
    echo "<tr>";
    foreach ($value as $tickets)
    {
    echo "<td>" . $tickets;
    echo "</td>";
    }
    echo "</tr>";
}
?>
