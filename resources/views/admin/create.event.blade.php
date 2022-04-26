
<form action="index.php" method="post">
    <h2>Veranstaltung erstellen</h2>
    <div class="form-group">
        <label for="event_name">Name der Veranstaltung</label>
        <input type="text" id="event_name" class="form-control" name="event_name" placeholder="Beginn der Lehrveranstaltungen">
    </div>
    <div class="row">
        <div class="form-group col-xs-6">
            <label for="event_date">Datum</label>
            <input type="date" class="form-control" id="event_date" placeholder="yyyy-mm-dd" name="event_date">
        </div>
        <div class="form-group col-xs-6">
            <label for="event_time">Uhrzeit</label>
            <input type="time" id="event_time" name="event_time" placeholder="hh:mm" class="form-control"  />
        </div>
        <div class="form-group col-xs-6">
            <label for="event_days">Dauer in Tagen (normal ist 1 Tag)</label>
            <input type="number" id="event_days" name="event_days" value="1" class="form-control"  />
        </div>
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Logo der Veranstaltung</label>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-book">
                <i class="fa fa-book text-primary"></i> #Lehrveranstaltung
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-users">
                <i class="fa fa-users text-primary"></i> #Konvent
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-beer">
                <i class="fa fa-beer text-primary"></i> #Kneipe #Festkommers
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-cutlery">
                <i class="fa fa-cutlery text-primary"></i> #Heimatabend #Saugrillen #OV-Grillen
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-microphone">
                <i class="fa fa-microphone text-primary"></i> #Chorfahrt #Auftritt #Kleinkunstabend
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-flag">
                <i class="fa fa-flag text-primary"></i> #SV-Fest #SV #SV-Musikwochenende
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-glass">
                <i class="fa fa-glass text-primary"></i> #Cocktailwanderung #Cocktailparty
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-recycle">
                <i class="fa fa-recycle text-primary"></i> #Hausputz #Gartentag
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-university">
                <i class="fa fa-university text-primary"></i> #Vortragsabend #Tutorium
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="event_icon" value="fa-volume-up">
                <i class="fa fa-volume-up text-primary"></i> #Party #BuRiPi
            </label>
        </div>
    </div>
    <input type="hidden" name="action" value="EventCreate">
    <button type="submit" class="btn btn-primary">Veranstaltung speichern</button>
</form>
