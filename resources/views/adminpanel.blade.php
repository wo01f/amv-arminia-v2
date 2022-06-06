@extends('layouts.app')

@section('content')

    <div class="container-fluid" id="contact">



        <div class="row col-lg-6 mx-auto">
            <div class="px-4 py-5 my-5">
                @if (session('status'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ session('status') }}</strong>
                    </div>
                @endif
                <div class="row py-5 my-5">
                    <div class="col-12">
                        <h1>Veranstaltungskalender</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Start</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Typ</th>
                                    <th scope="col">Bearbeiten</th>
                                    <th scope="col">Löschen</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{$event->start->format('d.m.Y H:i')}}</td>
                                    <td>{{$event->name}}</td>
                                    <td>{{$event->type_translated()}}</td>
                                    <td><a href="admin/events/edit/{{$event->id}}"><div class="btn btn-warning">Bearbeiten</div></a></td>
                                    <td><a href="admin/events/delete/{{$event->id}}"><div class="btn btn-danger">Löschen</div></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                    <div class="row py-5 my-5">
                        <div class="col-12">
                            <h1>Wöchentliche Termine</h1>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Start</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Typ</th>
                                    <th scope="col">Bearbeiten</th>
                                    <th scope="col">Löschen</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($reaccuring_events as $reaccuring_event)
                                    <tr>
                                        <td>{{$reaccuring_event->start->format('d.m.Y H:i')}}</td>
                                        <td>{{$reaccuring_event->name}}</td>
                                        <td>{{$reaccuring_event->type_translated()}}</td>
                                        <td><a href="admin/reaccuring_events/edit/{{$reaccuring_event->id}}"><div class="btn btn-warning">Bearbeiten</div></a></td>
                                        <td><a href="admin/reaccuring_events/delete/{{$reaccuring_event->id}}"><div class="btn btn-danger">Löschen</div></a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <form method="post" action="/admin/events">
                                @csrf
                                @method('PUT')
                                <h2>Veranstaltung einstellen</h2>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name der Veranstaltung</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Datum der Veranstaltung</label>
                                    <input type="date" class="form-control" name="start_date" id="start_date" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="start_time" class="form-label">Uhrzeit der Veranstaltung</label>
                                    <input type="time" class="form-control" name="start_time" id="start_time" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Art der Veranstaltung</label>
                                    <select class="form-select" name="type" id="type" aria-label="">
                                        <option selected value="1">Intern</option>
                                        <option value="2">Mit Anmeldung</option>
                                        <option value="3">Öffentlich</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Beschreibung der Veranstaltung <small>(Kann leer gelassen werden)</small></label>
                                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Veranstaltung erstellen</button>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form method="post" action="/admin/reaccuring_events">
                                @csrf
                                @method('PUT')
                                <h2>Wöchentlichen Termin einstellen</h2>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name der Veranstaltung <small>z.B. Chorprobe</small></label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="start_time" class="form-label">Uhrzeit der Veranstaltung</label>
                                    <input type="time" class="form-control" name="start_time" id="start_time" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Art der Veranstaltung</label>
                                    <select class="form-select" name="type" id="type" aria-label="">
                                        <option selected value="1">Intern</option>
                                        <option value="2">Mit Anmeldung</option>
                                        <option value="3">Öffentlich</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Beschreibung der Veranstaltung</label>
                                    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Wöchentlichen Termin erstellen</button>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form method="post" action="/admin/roles">
                                @csrf
                                @method('PUT')
                                <h2>Ämter einstellen</h2>
                                <div class="mb-3">
                                    <label for="role_x" class="form-label">Präside</label>
                                    <input type="text" class="form-control" name="x" id="role_x" value="{{$x}}" placeholder="Janek v. W.">
                                </div>
                                <div class="mb-3">
                                    <label for="role_xx" class="form-label">Schriftwart</label>
                                    <input type="text" class="form-control" name="xx" id="role_xx" value="{{$xx}}" placeholder="Katharina W.">
                                </div>
                                <div class="mb-3">
                                    <label for="role_xxx" class="form-label">Kassenwart</label>
                                    <input type="text" class="form-control" id="role_xxx" name="xxx" value="{{$xxx}}" placeholder="Dotti B.">
                                </div>
                                <div class="mb-3">
                                    <label for="role_xxxx" class="form-label">Fuxmajor</label>
                                    <input type="text" class="form-control" id="role_xxxx" name="xxxx" value="{{$xxxx}}" placeholder="Laura K.">
                                </div>


                                <button type="submit" class="btn btn-primary">Ämter ändern</button>
                            </form>
                        </div>

                    </div>

            </div>
            <div class="row py-5 my-5">
                <div class="col-12">
                    <h1>Website-Texte</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Typ</th>
                            <th scope="col">Text</th>
                            <th scope="col">Bearbeiten</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{$article->name}}</td>
                                <td>{{$article->type_translated()}}</td>
                                <td>{{$article->description}}</td>
                                <td><a href="admin/article/edit/{{$article->id}}"><div class="btn btn-warning">Bearbeiten</div></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            </div>
        </div>
    </div>

@endsection
