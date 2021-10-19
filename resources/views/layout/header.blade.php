    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('diaristas.index') }}">
                <img src="../img/logos/logo.svg" />
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="{{ route('diaristas.index') }}">
                        Diaristas
                    </a>
                    <a class="nav-link" aria-current="page" href="{{ route('diaristas.create') }}">
                        Nova Diaristas
                    </a>
                </div>
            </div>
        </div>
    </nav>
