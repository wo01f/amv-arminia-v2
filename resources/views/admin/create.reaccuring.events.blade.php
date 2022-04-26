<h2>Regelmäßige Termine einstellen</h2>
<div class="row spacer-small-top">
    <div class="col-xs-12 col-md-3">
        <strong>Chorprobe:</strong>
    </div>
    <div class="col-xs-10 col-md-8">Montags, 19:30 Uhr, im Wechsel auf unserem und dem Haus der Sängerschaft Frankonia-Brunonia.</div>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="ActivityDelete">
        <input type="hidden" name="activity_id" value="1">
        <div class="col-xs-2 col-md-1">
            <button type="submit" class="btn btn-primary">X</button>
        </div>
    </form>
</div><form action="index.php" method="post">
    <div class="row spacer-small-top">
        <div class="form-group col-xs-3">
            <label for="activity_name">Name</label>
            <input type="text" id="activity_name" name="activity_name" class="form-control" placeholder="Theaterprobe" />
        </div>
        <div class="form-group col-xs-9">
            <label for="activity_description">Beschreibung</label>
            <input type="text" id="activity_description" name="activity_description" class="form-control" placeholder="Donnerstags, 19:30 Uhr, auf unserem Haus." />
        </div>
    </div>
    <input type="hidden" name="action" value="ActivityCreate">
    <button type="submit" class="btn btn-primary">Termine speichern</button>
</form>
