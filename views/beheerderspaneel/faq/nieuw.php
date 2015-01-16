<div class="col-md-6 showback">
    <form method="POST" action="/process/create/faq">
        <div class="form-group">
            <h2> Nieuwe FAQ entry</h2><br />
            <label for="createFaqVraag">Vraag:</label>
            <input type="text" class="form-control" id="createFaqVraag" name="Vraag" placeholder="Vraag"  required>
        </div>

        <div class="form-group">
            <label for="createFaqBeschrijving">Beschrijving:</label>
            <textarea class="form-control" rows="5" id="createFaqBeschrijving" name="Beschrijving" placeholder="Beschrijving" required></textarea>
        </div>

        <div class="form-group">
            <label for="createFaqOplossing">Oplossing:</label>
            <textarea class="form-control" rows="5" id="createFaqOplossing" name="Oplossing" placeholder="Oplossing" required></textarea>
        </div>

        <button type="submit" name="submit" value="submit" class="btn btn-default">Verzend</button>
    </form>
</div>