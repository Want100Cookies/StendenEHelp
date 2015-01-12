<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Tourist Information Amsterdam</title>
		
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	</head>



<body>

<div class="container">
<div class="row">
<div class="col-md-6">
<form method="POST" action="/process/edit/statuswijziging">
    <div class="form-group">
	<label for="editStatusWijzigingStatus">Status:</label>
    <div class="radio">
		<label>
		<input type="radio" id="editStatusWijzigingStatusNieuw" value="Nieuw" name="Status" <?= $data['Status'] == 'Nieuw' ? 'checked' : '' ?>>
		Nieuw
		</label>
	</div>
	
	<div class="radio">
	<label>
		<input type="radio" id="editStatusWijzigingStatusBehandeling" value="In behandeling" name="Status" <?= $data['Status'] == 'In behandeling' ? 'checked' : '' ?>>
		In Behandeling
	</label>
	</div>
	
	<div class="radio">
		<label>
		<input type="radio"  id="editStatusWijzigingStatusEngineer" value="Doorgestuurd naar engineer" name="Status" <?= $data['Status'] == 'Doorgestuurd naar engineer' ? 'checked' : '' ?>>
		Doorgestuurd naar engineer
		</label>
	</div>
	
	<div class="radio">
	<label>
		<input type="radio" id="editStatusWijzigingStatusManager" value="Doorgestuurd naar account manager" name="Status" <?= $data['Status'] == 'Doorgestuurd naar account manager' ? 'checked' : '' ?>>
		Doorgestuurd naar accountmanager
	</label>
	</div>
	
	<div class="radio">
	<label>
		<input type="radio" id="editStatusWijzigingStatusOpgelost" value="opgelost" name="Status" <?= $data['Status'] == 'opgelost' ? 'checked' : '' ?>>
		Opgelost
	</label>
	</div>
	
	<div class="radio">
	<label>
		<input type="radio" id="editStatusWijzigingStatusAfgemeld" value="afgemeld" name="Status" <?= $data['Status'] == 'afgemeld' ? 'checked' : '' ?>>
		Afgemeld
	</label>
	</div>
	
	<div class="form-group">
            <label for="editStatusWijzigingBedrijfsmedewerkerId">Bedrijfsmedewerker ID:</label>
            <input type="number" class="form-control" id="editStatusWijzigingBedrijfsmedewerkerId" name="idBedrijfsMedewerker" value="<?= $data['idBedrijfsMedewerker'] ?>">
    </div>
		
	<div class="form-group">
            <label for="editStatusWijzigingMedewerkerId">Medewerker ID:</label>
            <input type="number" class="form-control" id="editStatusWijzigingBedrijfsmedewerkerId" name="idMedewerker" value="<?= $data['idMedewerker'] ?>">
    </div>
	
	<div class="form-group">
            <label for="editStatusWijzigingContact">Contact:</label>
            <input type="text" class="form-control" id="editStatusWijzigingContact" name="Contact" value="<?= $data['SoortContact'] ?>">
    </div>
	
	<div class="form-group">
            <label for="createStatusWijzigingMemo">Memo:</label>
            <textarea class="form-control" rows="5" id="createStatusWijzigingMemo" placeholder="Memo" name="Memo"></textarea>
    </div>
	<input type="hidden" name="idStatus" value="<?= $idStatus ?>" />
	<button type="submit" name="submit" value="submit" class="btn btn-default">Verzend</button>
</form>
</div>




</div>
</div>
</body>
</html>