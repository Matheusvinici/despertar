@extends('layouts.appHome')

@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <style>
        .p{
                font-style: italic;
                font-weight: bold;
                font-size: 3000px;
                font-family: arial, sans-serif;
            }
          .espacamento{
            padding-top: 200px;
          }
        </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="background-color: #a8eaaf">
      <a class="navbar-brand text-dark" style="font-size: 23px;" href="#">SGC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-dark" style="font-size: 18px;" href="#eventos">Eventos <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" style="font-size: 18px;" href="{{ route("inscricao.index") }}">Listagem de Inscrições</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link text-dark" style="font-size: 18px;" href="{{ route("certificado.index") }}">Listagem de Certificados</a>
          </li>
        
        </ul>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="row md-3" style=" padding: 50px;">
        <div class="col">
          <img src="images/prefeitura.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="200" height="50" loading="lazy">

        </div>
        <div class="col">
          <h1 class="display-5 p">Portal de Gestão de Inscrições e Certificados</h1>
          <p style="font-size: 18px;"> Ferramenta para Gestão de Inscrições e Certificados dos Servidores do Âmbito da Secretaria de Educação de Juazeiro-Ba.
          <p><a class="btn btn-dark btn-lg" href="#eventos" role="button">Eventos &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row" id="eventos">
          <div class="col-md-4">
            <h2>Manutenção</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-dark" href="{{ route("inscricao.create") }}" role="button">Inscreva-se &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Redes</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-dark" href="{{ route("inscricao.create") }}" role="button">Inscreva-se &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Banco de Dados</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-dark" href="{{ route("inscricao.create") }}" role="button">Inscreva-se &raquo;</a></p>
          </div>
        </div>

        <hr>
        
        
      </div> <!-- /container -->

    </main>

    <div class="b-example-divider"></div>

  <div style="background-color: #a8eaaf" class=" text-secondary px-4 py-5 text-center">
    <div class="py-5">
      <h1 class="display-5 fw-bold text-dark">Sistema de Gestão de Inscrições e Certificados</h1>
      <div class="row md-3" style=" padding: 50px;">
        <div class="col">
          <img src="images/prefeitura.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="200" height="50" loading="lazy">

        </div>
        <div class="col">
          <img src="images/logoEFEP.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="330" height="150" loading="lazy">

        </div>
        <div class="col">
          <img src="images/logoNTM.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="150" loading="lazy">

        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider mb-0"></div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>

            
       
@endsection
