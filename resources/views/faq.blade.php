@extends('layouts.app')
@section('content')
    <main>
        <div id="faq">
            <div id="faq-intro">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h1>
                                Domande frequenti
                            </h1>
                            <p>
                                Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando?
                                <a href="#">
                                    Contattaci
                                </a>
                                e saremo felici di darti una mano.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="faq-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6 faq-box">
                            <h2>
                                Prima del corso
                            </h2>
                            @foreach ($faq_prima as $faq)
                                <div class="faq-item">
                                    <div class="domanda d-flex justify-content-between align-items-center">
                                        <h3>
                                            {{$faq["domanda"]}}
                                        </h3>
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="risposta">
                                        <p>
                                            {{$faq["risposta"]}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-12 col-md-6 faq-box">
                            <h2>
                                Dopo il corso
                            </h2>
                            @foreach ($faq_dopo as $faq)
                                <div class="faq-item">
                                    <div class="domanda d-flex justify-content-between align-items-center">
                                        <h3>
                                            {{$faq["domanda"]}}
                                        </h3>
                                        <i class="fas fa-plus"></i>
                                    </div>
                                    <div class="risposta">
                                        <p>
                                            {{$faq["risposta"]}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('page-title', "FAQ - Boolean Careers")
