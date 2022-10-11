
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Despertar - 2022</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .teste3{
        padding: 40px;
      }

      .teste{
          padding-bottom: 10px;
          padding-left: 55px;
      }
      .teste4{
        padding-left: 50px; 
      }
      .teste5{
        padding-top: 20px;
        padding-bottom: 10px;
          padding-left: 55px;
      }
      .customizacao{
          padding-bottom: 10px;
      }
      .customizacao2{
          padding-top: 10px;
          padding-bottom: 10px;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 1.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">
  </head>
  <body>
    
<main>

        <!-- Header -->
        <header style="background-color: #466320" class="header d-flex  text-white" id="teste">
         <div class="teste5">
          <img  src="https://www.juazeiro.ba.gov.br/wp-content/uploads/2021/11/logo-footer-juazeiro.png" width="100px" class="mb-3"  >
         </div>

        <nav style="background-color: #466320; font-family:Cambria; " class="navbar navbar-expand-lg navbar-light  text-white teste3">
          <!-- Example single danger button -->
            <div class="btn-group teste4">
              <button type="button" class="btn btn-light dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eixo 1
              </button>
              <div class="dropdown-menu bg-success">
                <a class="dropdown-item bg-success text-white" href="{{ route('gestao') }}">Gestão Democrática</a>
            </div>
            </div>
            
            <div class="btn-group teste4">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eixo 2
              </button>
              <div class="dropdown-menu bg-success">
                <a class="dropdown-item bg-success text-white" href="{{ route('curriculo') }}">Currículo</a>
              </div>
            </div>

            <div class="btn-group teste4">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eixo 3
              </button>
              <div class="dropdown-menu bg-success">
                <a class="dropdown-item bg-success text-white" href="{{ route('producao') }}">Espaço Físico e Produção Sustentável</a>
              </div>
            </div>



            <div class="btn-group teste4">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eixo 4
              </button>
              <div class="dropdown-menu bg-success">
                <a class="dropdown-item bg-success text-white" href="{{ route('protagonismo') }}">Protagonismo Infantojuvenil</a>
              </div>
            </div>

            <div class="btn-group teste4">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eixo 5
              </button>
              <div class="dropdown-menu bg-success">
                <a class="dropdown-item bg-success  text-white" href="{{ route('comunitaria') }}">Ação Comunitária</a>
              </div>
            </div>

            <div class="btn-group teste4">
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eixo 6
              </button>
              <div class="dropdown-menu bg-success">
                <a class="dropdown-item bg-success text-white" href="{{ route('colaborativa') }}">Redes Colaborativas e Conectividade</a>
              </div>
            </div>

          
        </nav>
        </header>


      
  <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center ">
      <div class="col-10 col-sm-8 col-lg-6">
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/inicio1.jpeg" width="200px" height="450px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/inicio2.jpeg" width="200px" height="450px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/inicio3.jpeg" width="200px" height="450px" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev " type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next " type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
          
        </div>      </div>
      <div id="projeto" class="col-lg-6">
        <h1 class=""><strong> Despertar - 2022</strong></h1>
        <p class="lead">Produção de Alimentos e Sustentabilidade: do Campo à Mesa.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a type="button" href="#acesso" class="btn btn-success btn-lg px-4 me-md-2">Quem somos</a>
          <a type="button" href="#sobre" class="btn btn-outline-success btn-lg px-4">Sobre nós</a>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div id="acesso" class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Quem somos:</h1>
        <br>
        <p class="col-lg-9 fs-7">Juazeiro é um município brasileiro do estado da Bahia. Em conjunto com o vizinho município de Petrolina, em Pernambuco, forma o maior aglomerado urbano do semi-árido. Localizada na região sub-média da bacia hidrográfica do São Francisco, a cidade se destaca pela agricultura irrigada que se firmou na região graças às águas do rio São Francisco. Além da sede, Juazeiro possui alguns distritos em seu território, os quais são Abóbora, Pinhões, Maniçoba, Itamotinga, Massaroca, Juremal, Carnaíba, e Junco.  Fonte: (https://www.familysearch.org/wiki/pt/Juazeiro,_Bahia_-_Genealogia)</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/juazeiro1.jpg" width="200px" height="350px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/juazeiro2.jpeg" width="200px" height="350px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/juazeiro3.jpg" width="200px" height="350px" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
     
        
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div  class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Equipe Gestora</h1>
        <p class="lead"><strong>Prefeita:</strong> Suzana Alexandre Ramos de Carvalho<br><strong>Secretário de Educação:</strong> Wank Medrado<br>
          <strong>Superintendente de Ensino: </strong> Willany Cunha Reis<br><strong>Superintendente de Gestão e Programas:</strong> Maria Alexandrina dos Santos Araújo<br>
        <strong>Coordenadora do Despertar: </strong> Lusilêna Pires de Jesus<br><strong> Assessor Pedagógico do Programa Despertar: </strong> Airton Soares de Carvalho Filho
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="#acesso" type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Sobre Nós</a>
          <a type="button" href="#projeto" class="btn btn-outline-secondary btn-lg px-4">Projeto</a>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-3 overflow-hidden ">
        <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/prefeita.jpeg" width="250px" height="350px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/willany.jpeg" width="250px" height="350px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/alexandrina.jpeg" width="250px" height="350px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/lusilena.jpeg" width="250px" height="350px" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="images/airton.jpeg" width="250px" height="350px" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>     
      
      </div>
    </div>
  </div>


      <section class="teste3" style="background-color: #466320">
        <div class="row md-3 ">
          <div class="col ">
            <img src="images/despertar.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400" height="250" loading="lazy">

          
          </div>
          <div class="col">

            <h1 class="display-4 fw-bold lh-1 mb-3 text-white">O despertar em Juazeiro-BA:<br><br></h1>
            <p class="col-lg-9 fs-7 text-white">Nosso município participa do Programa Despertar desde 2005.<br><br>

              O Programa Despertar nos possibilitou a implementação de vários projetos muito importantes para a nossa comunidade rural e por isso é sempre muito bem-vindo e esperado.</p>
          </div>
        </div>
      
      </section>
      <div class="b-example-divider"></div>

  <div id="sobre" class="bg-dark text-white px-4 py-5 text-center">
      <h1 class="display-5 fw-bold text-white">Onde Estamos</h1>
    <br>
      <div class="row md-3">
        <div class="col">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62972.07139058952!2d-40.563995963800934!3d-9.442918012827416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x773718dc881547f%3A0xbcbb39e48d5134de!2sJuazeiro%2C%20BA!5e0!3m2!1spt-BR!2sbr!4v1665083679898!5m2!1spt-BR!2sbr" width="350" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col">
            <p>
              <br><br><br>
              JUAZEIRO-BAHIA, encravada na região semiárida do Nordeste brasileiro, em pleno polígono das secas, Juazeiro encontra-se em posição privilegiada, num entroncamento rodoferroviário, fluvial e aéreo, distante 504 km da capital, Salvador.
            </p>
        </div>
      </div>


    
    </div>
    <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>

   
  <div class="b-example-divider mb-0"></div>
</main>


    <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>

<script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
<script>
  $(function () {
    $('.dropdown-toggle').dropdown();
  }); 
</script>