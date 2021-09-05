<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Grupo de Pesquisa Tecnológica Smart Campus do Instituto Federal de São Paulo Campus Catanduva">
  <meta name="description" content="O IFSP é uma instituição federal de educação, ciência e tecnologia que visa impulsionar o desenvolvimento sustentável das regiões onde atua.">
  <meta name="keywords" content="ifsp,inovação,pesquisa,extensão,ensino,rede_federal,academia,indústria,parceria,cooperação,desenvolvimento, inovação,empreendedorismo,ciência,pesquisa,extensão,ensino,rede_federal,academia,indústria,parceria,cooperação,desenvolvimento,ifsp, smart campus, Catanduva, internet das coisas">
  <title>Campus Inteligente - IFSP Catanduva</title>
  <link rel="icon" type="./bootstripe/image/png" href="https://ctd.ifsp.edu.br/templates/padraogoverno01/favicon.ico">
    <!-- Google fonts Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- JavaScript Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>


  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-primary-color" id="navbar">
      <div class="container py-3">
        <a class="navbar-brand" href="#">
        <img id="logo" src="https://integra.ifsp.edu.br/img/logo-instituto-vertical.fa5ca40e.png" alt="Instituto Federal de São Paulo" width="60px" height="70px"><span>Smart Campus</span> 
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbar-items"
          aria-controls="navbar-items"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar-items">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=clientes">Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=vendas">Equipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?pagina=dashboard">Dashboard</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

                
        <?php
 
  


        if(isset($_GET['pagina'])) {

          switch ($_GET['pagina']) {
            case 'pedidos':
            echo '<h2>Histórico</h2>';
            include 'historico.php';
            break;

            case 'clientes':
            include 'cadastro_cliente.php';
            break;

            case 'vendas':

            include 'cadastro_vendas.php';
            break;

            case 'dashboard':
             // include 'dashboard.php'; 
              include 'painel.php'; include 'painel2.php';
              break;

            default:
          //  include 'dashboard.php'; 
            include 'painel.php'; include 'painel2.php'; 

            break;
          } 

          } else {
            include 'capa.php';




        }



        ?>

      </main>
    </div>
  </div>

   
          <!-- FOOTER BOTTOM -->
          <div class="col-12" id="footer-bottom">
            <div class="row justify-content-between">
              <div class="col-12 col-md-3">
                <p class="secondary-color">Campus Inteligente IFSP Catanduva &copy; 2021</p>
              </div>
              <div class="col-12 col-md-3">
                <p class="secondary-color">
                Desenvolvido por <a href="mailto:mchavesferreira@ifsp.edu.br" target="_blank">Marcos Chaves</a>

       
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


  </body>
</html>
