@extends('layouts.app')

@section('content')




    <main>

        <div class="px-4 text-center" id="banner">
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

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container-fluid bg-primary" id="aboutus">
            <div class="px-4 py-5 text-center">
                <h1 class="display-5 fw-bold">Wir sind Arminia!</h1>
                <hr/>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">
                        Bei der akademisch, musischen Vereinigung Arminia treffen sich sowohl Studenten als auch Studentinnen verschiedener Fachrichtungen, um sich gemeinsam musischen, kreativen und gemeinschaftlichen Interessen zu widmen. Neben unserem vierstimmigen Chor betreiben wir auch eine Theatergruppe. Spaß steht hierbei für uns im Vordergrund. Als zentraler Punkt dient unser Haus Am Wendenwehr 9, das durch große Räumlichkeiten und mit einem Garten zur Oker ausreichend Platz für die unterschiedlichsten Aktivitäten bietet. Ziel der Arminia ist es, die während des Studiums gewachsene Verbundenheit ihrer Mitglieder ein Leben lang aufrechtzuhalten. Wenn wir nun dein Interesse geweckt haben, bist du herzlich eingeladen, bei uns vorbeizuschauen. Wir freuen uns auf dich!
                    </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="#history"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Weitere Infos</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="#house">
            <div class="row col-lg-8 mx-auto">
                <h1 class="text-center">Das Haus</h1>
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
                <h3 class="text-center">Wir vergeben zu jedem Semester einige Zimmer.</h3>
                <a href="#contact"><button type="button" class="btn btn-primary btn-lg px-4 gap-3">Ruf an & vereinbare einen Termin!</button></a>
            </div>
        </div>

        <div class="container-fluid bg-primary" id="history">
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">Unsere Geschichte</h1>
                <hr/>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">
                        Hervorgegangen aus dem 1896 gegründeten "Akademisch-Pharmazeutischen Kegelklub Carolo-Willhelmina" trat die Sängerschaft 1900 als "Akademisch-Pharmazeutischer Verein" ins Leben. Der Zirkel weist bis heute mit seinen Buchstaben "A", "Ph", und "V" noch auf die Entstehung hin. Mit dem Beitritt zum "Arnstädter Cartellverband" im Jahre 1909 nahm die Verbindung den Namen "Arminia" an. Die Zugehörigkeit zu diesem Verband endete 1913. Ein Jahr später, im Jahre 1914, trat die Arminia dem SV bei. Neben der Tatsache, dass die Verbindung nichtfarbentragend war, trug auch der Einfluss des SV-Ortsverbandes Braunschweig zu diesem Schritt bei. Nach dem ersten Weltkrieg konnte die musikalische Arbeit in der Verbindung, die zunehmend Angehörige aller Fakultäten umfasste, intensiviert werden. Der Auflösung der Korporationen fiel 1935 auch die Arminia zum Opfer. Der damalige Vorstand des Altherrenverbandes konnte den Bund aber im geheimen weiter zusammenhalten, wozu auch das Weitererscheinen des 1924 gegründete "Arminenblattes" bis 1944 beitrug. Einige Erinnerungsstücke, unter anderem auch die Arminen-Fahne, befinden sich heute in der Erinnerungsstätte des SV in Sondershausen. Nach dem Krieg fand 1949 in Vlotho das erste große Arminentreffen statt. Im Januar 1950 wurde die Verbindung zunächst als "Akademisch-Musikalische" wieder zur Hochschule zugelassen, nahm im Juli 1950 wieder den alten Namen "Arminia" an und 1952 dann die Bezeichnung "Sängerschaft". Seit 1973 lautet der offizielle Name "Akademisch-Musische Vereinigung (AMV) Arminia". 1954 erfolgte die Einweihung des ersten Arminenheims in der Spielmannstraße, 1977 bezog die Arminia ihr jetziges Domizil. 1987 entschloss sich die Aktivitas, auch Frauen aufzunehmen und gründete 1989 den "Verein Philistrierter Arminen (VPA)". 1989 sowie zuletzt 2013 stellte die Arminia den Vorsitz des Sondershäuser Verbands.                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="contact">
            <div class="row col-lg-6 mx-auto">
                <div class="px-4 py-5 my-5">
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">Kontaktiere uns!<span class="text-muted">&nbsp;Wir schlagen nicht.</span></h2>
                            <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
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


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>
@endsection
