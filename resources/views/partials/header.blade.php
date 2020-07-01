<header class="position-fixed">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{route("homepage")}}">
                <img src="{{asset("images/logo.png")}}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end text-center" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item text-uppercase {{ Request::route()->getName() == 'homepage' ? 'active' : '' }}">
                        <a class="nav-link" href="{{route("homepage")}} ">
                            Home
                        </a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link" href="#">
                            Corso
                        </a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link" href="#">
                            Dopo il corso
                        </a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link" href="#">
                            Lezione gratuita
                        </a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link" href="#">
                            Assumi i nostri studenti
                        </a>
                    </li>
                </ul>
                <button class="btn btn-primary text-uppercase">
                    Candidati ora
                </button>
            </div>
        </nav>
    </div>
</header>
