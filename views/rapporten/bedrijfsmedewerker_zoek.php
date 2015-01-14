<?php
isset($_POST['zoekterm']) ? $zoekterm = filter_input(INPUT_POST, 'zoekterm') : $zoekterm = '';
?>
<div class="col-lg-12">
	<div class="form-panel">
		<h4 class="mb"><i class="fa fa-angle-right"></i> Zoek bedrijfsmedewerker</h4>
		<form class="form-inline" method="POST" action="" role="form">
			<div class="form-group">
				<label class="sr-only" for="zoekterm">Voor of achternaam:</label>
				<input type="text" name="zoekterm" class="form-control" id="zoekterm" placeholder="Zoekterm" value="<?= $zoekterm ?>">
			</div>
			<button type="submit" class="btn btn-theme">Zoek</button>
			<small>Klik op de rij om meer informatie over de specifieke bedrijfsmedewerker te krijgen.</small>
		</form>
	</div><!-- /form-panel -->
		<?php
		if (isset($_POST['zoekterm']))
		{
			echo "<div class='content-panel'>";
			$db = new db();
			$zoekterm = filter_input(INPUT_POST, 'zoekterm');
			$stmt = $db->link->prepare("SELECT * FROM BEDRIJFSMEDEWERKER WHERE Voornaam LIKE ? OR Achternaam LIKE ?");
			$stmt->bindValue(1, "%" . $zoekterm . "%");
			$stmt->bindValue(2, "%" . $zoekterm . "%");
			$stmt->execute();
			$returnArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "<table class='table table-hover'>";
			echo "<tr>";
			echo "<th> idBedrijf </th>";
			echo "<th> Gebruikersnaam </th>";
			echo "<th> Email </th>";
			echo "<th> Voornaam </th>";
			echo "<th> Achternaam </th>";
			echo "<th> Tussenvoegsel </th>";
			echo "<th> Functie </th>";
			echo "</tr>";
			foreach($returnArray as $result)
			{
				$id = $result['idBedrijfsMedewerker'];
				?><tr onclick="window.document.location='/rapporten/bedrijfsmedewerker/<?= $id ?>'"> <?php
				foreach($result as $key => $subresult){
					if($key == "idBedrijfsMedewerker")
						continue;
					echo "<td>";
					echo $subresult;
					echo "</td>";
				}
				echo "</a></tr>";
			}
			echo "</table>";
			echo "	</div>";
		}
		?>
</div><!-- /col-lg-12 -->