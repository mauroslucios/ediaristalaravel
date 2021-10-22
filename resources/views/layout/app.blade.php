<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('logo-icon.png') }}" type="image/x-icon" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('diaristas.index') }}">
                <img src="{{ asset('img/logos/logo.svg') }}" />
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
                    <a class="nav-link" aria-current="page" href="{{ route('diarista.create') }}">
                        Nova Diaristas
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <!--validation erros-->
        <div class="" style="height: 100vh;">
            @include('flash-message')
            @yield('main')
        </div>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-12 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="text-center">© 2021 Company, Inc</span>
        </div>
    </footer>

    <!-- End your project here-->

    <!-- MDB -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"
        integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $(".alert").delay(5000).fadeOut("slow");

        });
        $(document).ready(function() {
            $("#data").mask("99/99/9999");
            $("#telefone").mask("(99) 99999-9999");
            $("#cpf").mask("999.999.999-99");
            $("#cep").mask("99999-999");
            $("#cnpj").mask("99.999.999/9999-99");
            $("#placa").mask("aaa - 9999");
        });
    </script>

</body>

</html>
