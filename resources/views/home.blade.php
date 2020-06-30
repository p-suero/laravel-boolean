@extends('layouts.app')
@section('content')
    <main>
        <section id="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h1 class="text-uppercase">
                            Diventa
                            <strong>
                                Sviluppatore web
                            </strong>
                        </h1>
                        <p class="subtitle">
                            Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.
                        </p>
                        <ul>
                            <li>
                                <strong>
                                    6 mesi
                                </strong>
                                di corso intensivo online in diretta
                            </li>
                            <li>
                                <strong>
                                    Nessuna competenza
                                </strong>
                                di programmazione richiesta
                            </li>
                            <li>
                                Siamo certi del tuo successo, altrimenti ti rimborsiamo
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                        <img src="{{asset("images/jumbotron-image.gif")}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="results">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-3 text-center">
                        <h3>
                            98%
                        </h3>
                        <p>
                            La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.
                        </p>
                    </div>
                    <div class="col-12 col-md-3 text-center">
                        <h3>
                            <span>
                                €
                            </span>
                            23.000
                        </h3>
                        <p>
                            La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.
                        </p>
                    </div>
                    <div class="col-12 col-md-3 text-center">
                        <h3>
                            98%
                        </h3>
                        <p>
                            La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="partner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center text-md-left">
                            I nostri studenti sono stati assunti da:
                        </h4>
                    </div>
                </div>
                <div class="row text-center text-md-left line-img">
                    <div class="col-12 col-md-4">
                        <img src="{{asset("images/partner_facile.png")}}" alt="Facile.it">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="{{asset("images/partner_oneday.png")}}" alt="One day">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="{{asset("images/partner_prima.png")}}" alt="Prima.it">
                    </div>
                </div>
                <div class="row text-center text-md-right line-img">
                    <div class="col-12 col-md-4">
                        <img src="{{asset("images/partner_fabb_dig.png")}}" alt="Fabbrica digitale">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="{{asset("images/partner_nephila.png")}}" alt="Nephila">
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="{{asset("images/partner_rds.png")}}" alt="RDS">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('page-title', "Boolean")
