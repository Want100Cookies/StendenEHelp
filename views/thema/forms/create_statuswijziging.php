<div class="col-md-6">
<form method="POST" action="/process/create/statuswijziging">
<div class="form-group">
	<input type="hidden" name="Status" value="Nieuw" />
</div> 

<div class="form-group">
	<label for="createStatusWijzigingTicketID">Ticket ID:</label>
    <input type="number" class="form-control" id="createStatusWijzigingTicketID">
  </div>
  
 <div class="form-group">
	<label for="createStatusWijzigingBedrijfsMedewerkerID">Bedrijfsmedewerker ID:</label>
    <input type="number" class="form-control" id="createStatusWijzigingBedrijfsMedewerkerID">
  </div>
  
   <div class="form-group">
	<label for="createStatusWijzigingMedewerkerID">Medewerker ID:</label>
    <input type="number" class="form-control" id="createStatusWijzigingMedewerkerID">
  </div>
  
   <div class="form-group">
	<label for="createStatusWijzigingBedrijfsContact">Soort Contact:</label>
    <input type="text" class="form-control" id="createStatusWijzigingBedrijfsContact">
  </div>
  
<div class="form-group">
    <label for="createStatusWijzigingMemo">Memo:</label>
	<textarea class="form-control" rows="5" id="createStatusWijzigingMemo" placeholder="Memo" resize="none"></textarea>
</div>

  <button type="submit" value="submit" class="btn btn-default">Verzend</button>
</form>
</div>


	<!-- CREATE statuswijziging (werkt) -->
<!--     <form method="POST" action="/process/create/statuswijziging">
	    <p>
		    <input type="hidden" name="Status" value="Nieuw" />
	    </p>
        <p>
            <span>Ticket ID: (wordt normaal door gegeven via de get)</span>
            <input type="number" name="idTicket" />
        </p>
        <p>
            <span>Bedrijfsmedewerker ID: (wordt normaal opgehaald uit de sessie)</span>
            <input type="number" name="idBedrijfsmedewerker" />
        </p>
        <p>
            <span>Medewerker ID ID: (wordt normaal opgehaald uit de sessie)(Wordt alleen weergegeven als de medewerker is ingelogd)</span>
            <input type="number" name="idMedewerker" />
        </p>
	    <p>
		    <span>Soort Contact: (bijv. telefonisch</span>
		    <input type="text" name="SoortContact" />
	    </p>
	    <p>
		    <span>Memo:</span>
		    <textarea rows="5" cols="75"></textarea>
	    </p>
		<p>
	    	<input type="submit" value="submit" name="submit">
	    </p>
    </form>  -->