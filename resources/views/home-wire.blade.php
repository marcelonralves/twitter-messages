<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Recados Twitter</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">
    @livewireStyles
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/heroes.css') }}" rel="stylesheet">
</head>
<body>

<main>

    <div class="px-4 py-5 my-5 text-center">
        <div class='responseAlert alert d-none' role='alert'></div>
        <h1 class="display-5 fw-bold">Mande seu Recado!</h1>
        <div class="col-lg-6 mx-auto">

            <p class="lead mb-4">Quer mandar um recado para alguém no Twitter? De forma anônima? Basta escrever a
                mensagem no campo abaixo e clicar em enviar!</p>
            <p class="lead mb-4">Para ver os recados basta ver o perfil <a href="https://twitter.com/recanonimos_" target="_blank">@recanonimos_</a></p>
            <livewire:post-tweet />
        </div>
    </div>

</main>
@livewireScripts
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>


</body>
</html>
