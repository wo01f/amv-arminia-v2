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

                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post" action="/admin/reaccuring_events/edit/{{$event->id}}">
                                @csrf
                                @method('PATCH')
                                <h2>Veranstaltung einstellen</h2>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name der Veranstaltung</label>
                                    <input type="text" class="form-control" name="name" value="{{$event->name}}" id="name" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="start_time" class="form-label">Uhrzeit der Veranstaltung</label>
                                    <input type="time" class="form-control" value="{{$event->start->format('H:i')}}" name="start_time" id="start_time" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <label for="type" class="form-label">Art der Veranstaltung</label>
                                    <select class="form-select" name="type" id="type" aria-label="">
                                        <option {{$event->type === 1 ? 'selected' : ''}} value="1">Intern</option>
                                        <option {{$event->type === 2 ? 'selected' : ''}} value="2">Mit Anmeldung</option>
                                        <option {{$event->type === 3 ? 'selected' : ''}} value="3">Öffentlich</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Beschreibung der Veranstaltung <small>(Kann leer gelassen werden)</small></label>
                                    <textarea class="form-control" name="description" id="description" rows="4">{{$event->description}}</textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Änderung speichern</button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
