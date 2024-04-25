<?php
session_start();
require_once './model/Mensagem.php';
//echo ($_POST);
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="./css/homeStyle.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <script src="script.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/Avaliacoes.css">
  <script src="https://cdn.knightlab.com/libs/timeline3/latest/js/timeline.js"></script>
  <link rel="stylesheet" href="https://cdn.knightlab.com/libs/timeline3/latest/css/timeline.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@339&display=swap" rel="stylesheet">

  <title>Magma - home</title>
  <style>
    /* Estilos para a linha do tempo */
    #timeline {
      margin: 50px auto;
      max-width: 700px;
      height: 350px;
    }

    .project-box {
      width: 25%;
      /* Definir a largura do contêiner para 100% */
      height: auto;
      /* Permitir que a altura se ajuste automaticamente à largura */
      background-color: transparent;
      /* Remover a cor de fundo */
      margin: 0;
      /* Remover margens */
      padding: 0;
      /* Remover padding */
      position: relative;
      overflow: hidden;
      transition: all 0.3s ease;
      border-radius: 20px;
    }

    .project-box img {
      width: 25%;
      /* Fazer a imagem ocupar 100% da largura do contêiner */
      height: auto;
      /* Permitir que a altura se ajuste automaticamente à largura */
      border-radius: 20px;
    }

    .project-box:hover {
      transform: scale(1.1);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .project-info {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0;
      transition: opacity 0.3s ease;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 10px;
      border-radius: 5px;
    }

    .project-box:hover .project-info {
      opacity: 1;
    }
  </style>
</head>

<body style="background-color: white; padding: 0;">
  <?php
  require_once "./componentes/nav.php";
  ?>
  <div id="Home"></div>
  <div class="row-md-6 vh-100 d-flex justify-content-center d-flex align-items-center">
    <div class="cover-Image d-flex w-100 h-100 p-3 flex-column mx-auto d-flex justify-content-center d-flex align-items-center"></div>
    <div class="cover-container d-flex w-100 h-100 p-3 flex-column mx-auto d-flex justify-content-center d-flex align-items-center">
      <img src="./img/magmaText.png" class="magmaImg m-5">
      <main class="px-4 row d-flex justify-content-between align-items-center" style="padding-top: 300px">
        <div class="col-md-3 col-sm-3 tituloCover text-center">
          <p class="text-start m-1" style="color: black; font-size: 7vh; line-height: 1;font-weight: bold; font-family: 'Josefin Sans', sans-serif;">Sites e aplicativos sob medida</p>
          <a href="#Quemsomos" class="btn btn-lg btn-dark fw-bold border-white bg-orange" style="width: 300px; height: 60px; border-radius: 45px; font-size: 35px; font-family: 'Josefin Sans', sans-serif;">Saiba Mais</a>
        </div>
        <div class="col-md-6 col-sm-6 d-flex justify-content-end align-items-end">
          <img src="./img/Person.png" alt="Man with notebook" style="width: 600px; max-width: 100%; height: auto; ">
        </div>
      </main>
    </div>
  </div>
  <div id="Dispositivos"></div>
  <div class="d-flex justify-content-center d-flex align-items-center">
    <div class="cover-2 d-flex w-100 h-100 p-3 flex-column mx-auto d-flex justify-content-center d-flex align-items-center">
      <main class="px-3 p-5">
        <div class="row d-flex justify-content-center d-flex align-items-center" style="padding-top: 150px;">
          <div class="col-xs-4 col-sm-4 col-md-4">
            <p class="lead text-center m-4" style="color: black; font-size: 6vh; font-weight: bold; font-family: 'Josefin Sans', sans-serif;">Desenvolvemos para todas as plataformas</p>
          </div>
          <div class="col-xs-7 col-sm-7 col-md-7">
            <img src="./img/Platforms.png" alt="plataformas" style="width: 900px; max-width: 100%; height: auto;">
            <div id="Magma"></div>
            <div id="Quemsomos"></div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="d-flex justify-content-center d-flex align-items-center">
    <div class="cover-2 d-flex w-100 h-100 flex-column mx-auto d-flex justify-content-center d-flex align-items-center">
      <img src="./img/detailLeft.png" class="detailLeft">
      <img src="./img/detailRight.png" class="detailRight">
      <!--Parte que inicia o Quem Somos da empresa-->
      <main class="px-3 p-5">
        <p class="text-center" style="font-size: 50px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; padding-top:30px">Quem somos</p>
        <div class="row d-flex justify-content-center d-flex align-items-center">
          <div class="col-xs-7 col-sm-7 col-md-7">
            <p class="lead m-4" style="color: black; font-size: 2.5vh; font-weight: normal; font-family: 'Josefin Sans', sans-serif; text-align: justify;">A Magma é uma empresa voltada ao setor de técnologia da informação, sendo especializada no desenvolvimento de
              sistemas web, apps e software sob medida para empresas de pequeno e médio porte.</p>
          </div>
        </div>
        <!-- Elemento onde a linha do tempo será exibida -->
        <div id="timeline"></div>
        <!--<img src="./img/historicoEmpresa.png" alt="plataformas" style="width: 1200px; max-width: 100%; height: auto; padding-top:20px">-->
        <div id="Projetos"></div>
      </main>

    </div>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <div class="cover-3 d-flex w-100 h-100 flex-column mx-auto justify-content-center align-items-center">
      <main class="px-5 p-5">
        <p class="text-center" style="font-size: 50px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; padding-top:50px; padding-bottom:20px;">Nossos Projetos</p>
        <div class="row justify-content-center align-items-center" style="padding-bottom: 70px;">
          <div class="col-xs-12  col-md-4 project-box" style="margin:10px;">
            <img src="./img/breve.png" alt="plataformas" style="width: 800px; max-width: 100%; height: auto;  border-radius: 20px;">
            <div class="project-info">
              <p>Em breve um novo projeto Magma para vocês!</p>
            </div>
          </div>
          <div class="col-xs-12  col-md-4 project-box" style="margin:10px;">
            <img src="./img/prjColaAi.png" alt="plataformas" style="width: 800px; max-width: 100%; height: auto;  border-radius: 20px;">
            <div class="project-info">
              <p>Cola Aí, a sua plataforma digital para eventos infantis!</p>
            </div>
          </div>
          <div class="col-xs-12 col-md-4 project-box" style="margin:10px;">
            <img src="./img/breve.png" alt="plataformas" style="width: 800px; max-width: 100%; height: auto; border-radius: 20px;">
            <div class="project-info">
              <p>Em breve um novo projeto Magma para vocês!</p>
            </div>
            <div id="Equipe"></div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <div class="d-flex justify-content-center d-flex align-items-center">
    <div class="cover-2 d-flex w-100 h-100 flex-column mx-auto d-flex justify-content-center d-flex align-items-center">
      <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3" style="padding: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; font-size: 50px; padding-top:30px;">Equipe</h1>
      <div id="carouselExampleInterval" class="carousel carousel-dark slide w-100 h-100" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <div class="container">
              <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/bruna.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Bruna Luiza</h3>
                      <h4 class="title">Desenvolvedora Front-end</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/bruno.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Bruno Geanini</h3>
                      <h4 class="title">Desenvolvedor Front-end</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/carlos.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Carlos Eduardo</h3>
                      <h4 class="title">DBA</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/guilherme.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Guilherme Martins</h3>
                      <h4 class="title">Desenvolvedor</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <div class="container">
              <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/murilo.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Murilo Dholfy</h3>
                      <h4 class="title">Desenvolvedor Front-end</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/nycolly.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Nycolly Pereira</h3>
                      <h4 class="title">DBA & Designer</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/otavio.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Otávio Ferreira</h3>
                      <h4 class="title">Desenvolvedor Front-end</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/raphael.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Raphael Pereira</h3>
                      <h4 class="title">Desenvolvedor Back-end</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row d-flex justify-content-center">
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/ruan.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Ruan Santos</h3>
                      <h4 class="title">Desenvolvedor Front-End</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/stephanie.png">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Stephanie Medeiros</h3>
                      <h4 class="title">Gerente de Projetos</h4>
                    </div>
                    <ul class="social">
                      <li><a href="https://github.com/Phaniee" class="fa fa-github" aria-hidden="true" target="_blank"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                  <div class="our-team">
                    <div class="picture">
                      <img class="img-fluid" src="./pessoas/victor.jpg">
                    </div>
                    <div class="team-content">
                      <h3 class="name">Victor David</h3>
                      <h4 class="title">DBA</h4>
                    </div>
                    <ul class="social">
                      <li><a href="#" class="fa fa-github" aria-hidden="true"></a></li>
                      <li><a href="#" class="fa fa-linkedin" aria-hidden="true"></a></li>
                    </ul>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="Faleconosco"></div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" style="z-index: 5;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" style="z-index: 5;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <img src="./img/detailLeft2.png" class="detailLeft2" style="width: 200px; max-width: 40%; height: auto; ">
      <main class="px-4">
        <!--Parte que inicia o Fale conosco da empresa-->
        <p class="text-center" style="font-size: 50px; font-family: 'Josefin Sans', sans-serif; font-weight: bold ;padding-top: 100px; ">Fale Conosco</p>
        <div class="row d-flex justify-content-center d-flex align-items-center">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <form id="formularioContato" class="row" method="post" action="contatoProcess.php">
              <div class="col-6 mb-3">
                <p class="text-start" style="font-size: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold;  margin: 0px 0px 0px;">Nome:</p>
                <input type="text" name="nomeContato" class="form-control" style="border-width: 3px; border-color: black; border-radius: 15px; height: 5vh; font-size: 20px; box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" required>
              </div>
              <div class="col-6 mb-3">
                <p class="text-start" style="font-size: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; margin: 0px 0px 0px;">Sobrenome:</p>
                <input type="text" name="sobrenomeContato" class="form-control" style="border-width: 3px; border-color: black; border-radius: 15px; height: 5vh; font-size: 20px; box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" required>
              </div>
              <div class="col-12 mb-3">
                <p class="text-start" style="font-size: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; margin: 0px 0px 0px">Email:</p>
                <input type="email" name="emailContato" class="form-control" style="border-width: 3px; border-color: black; border-radius: 15px; height: 5vh; font-size: 20px; box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" required>
              </div>
              <div class="col-12 mb-3">
                <p class="text-start" style="font-size: 30px; font-family: 'Josefin Sans', sans-serif; font-weight: bold; margin: 0px 0px 0px">Mensagem:</p>
                <textarea class="form-control" name="mensagemContato" id="exampleFormControlTextarea1" rows="3" style="border-width: 3px; border-color: black; border-radius: 15px; height: 100px; font-size: 20px; box-shadow: 0 8px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" required></textarea>
              </div>
              <div class="col-12 mb-3 text-end"> <!-- Aqui está a mudança -->
                <button type="submit" class="btn btn-lg btn-dark fw-bold border-white bg-orange" name="acao" value="SALVAR" style="width: 150px; height: 50px; border-radius: 45px; font-size: 30px; font-family: 'Josefin Sans', sans-serif;" onclick="enviarFormulario()">
                  Enviar
                </button>
              </div>
            </form>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <img src="./img/person2.png" alt="plataformas" style="width: 400px; max-width: 60%; height: auto; bottom:0;">
            <img src="./img/detailRight3.png" class="detailRight2" style="width: 600px; max-width: 70%; height: auto;">
          </div>
        </div>
      </main>
    </div>
  </div>
  <!-- Modal de confirmação -->
  <div class="modal fade" id="confirmacaoModal" tabindex="-1" aria-labelledby="confirmacaoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmacaoModalLabel">Contato Enviado</h5>
          <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Seu contato foi enviado com sucesso!
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <?php
  require_once "./componentes/footer.php";
  ?>
</body>
<script>
  var timelineData = {
    "events": [{
        "start_date": {
          "year": "2023",
          "month": "8",
          "day": "19"
        },
        "text": {
          "headline": "Fundação da Magma",
          "text": "A empresa Magma foi fundada em 19 de agosto de 2023."
        }
      },
      {
        "start_date": {
          "year": "2023",
          "month": "8",
          "day": "28"
        },
        "text": {
          "headline": "Definição do Nome e Identidade Visual",
          "text": "Foi decidido o nome da empresa e a sua identidade visual em 28 de agosto de 2023."
        }
      },
      {
        "start_date": {
          "year": "2023",
          "month": "9",
          "day": "18"
        },
        "text": {
          "headline": "Primeiro Projeto",
          "text": "Foi decidido o primeiro projeto a ser implementado pela empresa Magma em 18 de setembro de 2023."
        }
      },
      {
        "start_date": {
          "year": "2023",
          "month": "10",
          "day": "2"
        },
        "text": {
          "headline": "Nome e Identidade Visual do Projeto",
          "text": "Foi decidido o nome do projeto e a sua identidade visual em 2 de outubro de 2023."
        }
      }
    ]
  };

  // Inicialize a linha do tempo
  window.onload = function() {
    var timeline = new TL.Timeline('timeline', timelineData);
  };

  // Função para lidar com o envio do formulário
  function enviarFormulario() {
    var form = document.getElementById('formularioContato');
    // Verificar se o formulário é válido
    if (form.checkValidity()) {
      // Enviar o formulário
      form.submit();
      // Exibir o modal de confirmação
      var myModal = new bootstrap.Modal(document.getElementById('confirmacaoModal'));
      myModal.show();
    }
  }
</script>

</html>