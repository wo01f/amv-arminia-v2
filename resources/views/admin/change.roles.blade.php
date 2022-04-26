<form method="post" action="index.php">
    <h2>Ämter einstellen</h2>
    <label class="sr-only" for="x">Präside</label>
    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
        <div class="input-group-addon">Präside&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <input type="text" class="form-control" id="x" name="x" value="Janek v. W.">
    </div>
    <label class="sr-only" for="xx">Schriftwart</label>
    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
        <div class="input-group-addon">Schriftwart&nbsp;</div>
        <input type="text" class="form-control" id="xx" name="xx" value="Katharina W.">
    </div>
    <label class="sr-only" for="xxx">Kassenwart</label>
    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
        <div class="input-group-addon">Kassenwart&nbsp;</div>
        <input type="text" class="form-control" id="xxx" name="xxx" value="Dotti B.">
    </div>
    <label class="sr-only" for="xxxx">Fuxmajor</label>
    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
        <div class="input-group-addon">Fuxmajor&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <input type="text" class="form-control" id="xxxx" name="xxxx" value="Laura K.">
    </div>
    <input type="hidden" name="action" value="ExecutiveUpdate">
    <button type="submit" class="btn btn-primary">Ämter ändern</button>
</form>
