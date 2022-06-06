@extends('layouts.app')

@section('content')




    <main>

        <div class="px-4 text-center" id="banner">
            <img src="/img/wappen.png">
            <h1 class="display-5 fw-bold my-5">AMV ARMINIA IM SV</h1>
            <hr/>
            <div class="col-lg-6 mx-auto">

                <p class="lead mb-4">
                    Akademisch Musische Vereinigung Arminia zu Braunschweig<br>im Sondershäuser Verband
                </p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <a href="#aboutus"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Über uns</button></a>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-primary" id="aboutus">
            <div class="px-4 py-5 text-center">
                <h1 class="display-5 fw-bold">{{$aboutus->name}}</h1>
                <hr/>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">
                        {{$aboutus->description}}
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="#history"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Weitere Infos</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="events">
            <div class="px-4 py-5 text-center">
                <h1 class="display-5 fw-bold">Veranstaltungskalender</h1>
                <hr/>
                <div class="col-lg-6 mx-auto">
                   <div class="row">
                       <div class="col-md-10">
                           <div class="row">
                           @foreach($events as $event)

                               <div class="col-md-4 px-4 py-4">
                                   <h2 class="featurette-heading">{{$event->name}}</h2>
                                   <small>Am&nbsp;{{$event->start->format('d.m.Y')}} um {{$event->start->format('H:i')}} Uhr.</small>
                                   <p>{{$event->description}}</p>
                               </div>

                           @endforeach
                           </div>
                       </div>
                       <div class="col-md-2 bg-primary px-2 py-4">
                           <h5>Regelmäßige Termine</h5>
                           @foreach($reaccuring_events as $reaccuring_event)

                               <div class="col-md-12">
                                   <p class="heading">{{$reaccuring_event->name}}: <span class="text-muted">{{$reaccuring_event->description}}</span></p>
                               </div>

                           @endforeach
                       </div>

                   </div>
                </div>
            </div>
        </div>


        <div class="container-fluid" id="#house">
            <div class="text-center px-4 py-5">
                <h1 class="display-5 fw-bold">Das Haus</h1>
                <hr/>
            </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-1 col-lg-8 mx-auto">
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" src="img/1.jpg"  role="img" aria-label="Placeholder: صورة مصغرة"  focusable="false"><title>Placeholder</title>
                            </img>

                            <div class="card-body">
                                <p class="card-text">Am Wendenwehr 9 - von Außen</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" src="img/5.jpg"  role="img" aria-label="Placeholder: صورة مصغرة"  focusable="false"><title>Placeholder</title>
                            </img>

                            <div class="card-body">
                                <p class="card-text">Die Aktivenzimmer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" src="img/3.jpg"  role="img" aria-label="Placeholder: صورة مصغرة"  focusable="false"><title>Placeholder</title>
                            </img>

                            <div class="card-body">
                                <p class="card-text">Fernseher, Xbox, Nintendo 64 - der Club</p>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" src="img/6.jpg"  role="img" aria-label="Placeholder: صورة مصغرة"  focusable="false"><title>Placeholder</title>
                            </img>

                            <div class="card-body">
                                <p class="card-text">Gasherd, Mikrowelle, Gefrierschrank - die Küche</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" src="img/2.jpg"  role="img" aria-label="Placeholder: صورة مصغرة"  focusable="false"><title>Placeholder</title>
                            </img>
                            <div class="card-body">
                                <p class="card-text">Grill, Kanu, Surfbrett - der Garten</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" src="img/4.jpg"  role="img" aria-label="Placeholder: صورة مصغرة"  focusable="false"><title>Placeholder</title>
                            </img>
                            <div class="card-body">
                                <p class="card-text">Saal mit Theke</p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row col-lg-8 mx-auto text-center mt-4">
                <h3 class="text-center py-4">{{$rooms->name}}</h3>
                <p class="lead">
                    {{$rooms->description}}
                </p>

                <a href="#contact"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Ruf an & vereinbare einen Termin!</button></a>
            </div>
        </div>

        <div class="container-fluid bg-primary" id="history">
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">{{$history->name}}</h1>
                <hr/>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">{{$history->description}}</p>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="contact">
            <div class="row col-lg-6 mx-auto">
                <div class="px-4 py-5 my-5">
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Kontaktiere uns!<span class="text-muted">&nbsp;Wir schlagen nicht.</span></h2>
                            <p class="lead">Wenn wir dein Interesse geweckt haben, dann melde dich gerne bei uns, oder komm am besten einfach mal vorbei!
                                Zu finden sind wir am folgenden Standort:<br>
<br>
                                Am Wendenwehr 9<br>
                                38114, Braunschweig<br>
                                Deutschland</p>
                        </div>
                        <div class="col-md-5 px-5">
                            <h3><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-forward-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.761.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
                                </svg>&nbsp;&nbsp;+49 531 12899001
                            </h3>
                            <h3><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                </svg>&nbsp;&nbsp;info(@)amv-arminia.de</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid bg-primary" id="roles">
            <div class="px-4 py-5 my-5 text-center">
                <div class="col-lg-6 mx-auto">
                    <div class="row">
                        <div class="col-lg-3">
                            <span>Präside</span>
                            <h4>{{$x}}</h4>
                            <small>x@amv-arminia.de</small>
                        </div>
                        <div class="col-lg-3">
                            <span>Schriftwart</span>
                            <h4>{{$xx}}</h4>
                            <small>xx@amv-arminia.de</small>
                        </div>
                        <div class="col-lg-3">
                            <span>Kassenwart</span>
                            <h4>{{$xxx}}</h4>
                            <small>xxx@amv-arminia.de</small>
                        </div>
                        <div class="col-lg-3">
                            <span>Fuxmajor</span>
                            <h4>{{$xxxx}}</h4>
                            <small>xxxx@amv-arminia.de</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
