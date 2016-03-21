<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" 
    type="image/png" 
    href="resource/img/favicon.png">
    <title>UFGD Game Cup</title>

    <!-- Bootstrap Core CSS -->
    <link href="resource/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="resource/css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="resource/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">



    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i><image src="resource/img/cs.png"></image></i>  <span class="light">UFGD</span> Game Cup
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Sobre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#video">Vídeo</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#regras">Regras</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#inscricao">Inscrição</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">UFGD Game Cup</h1>
                        <p class="intro-text">Primeiro campeonato de games na UFGD.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <h2>O evento</h2>
            <div class="col-lg-8 col-lg-offset-2">
                <p>O evento tem como objetivo despertar nos acadêmicos e demais participantes o interesse pelas diversas formas de se empreender no mundo corporativo, dentre elas se destaca o setor de jogos eletrônicos para o público jovem, sendo assim, proporcionará a oportunidade de alunos e demais membros da comunidade a participarem de palestras relacionadas ao setor de jogos e casos de empreendedores de sucesso.</p>
            </div>
        </div>
    </section>

    <!-- apresentação -->
    <section id="video" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Apresentação</h2>
                <div id="content-video">
                    <a href="https://www.youtube.com/watch?v=ABL_pZ0gYRE" target="_blank"><img width="100%"  src="resource/img/video.jpg"></a></a>
                    <!--iframe do video é adicionado após pagina inteira ser carregada, ele tem um consumo de 500kb X(,
                    UPDATE: o iframe não é mais adicionado, direitos autorais do video nao deixar assistir pelo site-->
                </div>
            </div>
        </div>
    </section>

    <!-- regras -->
    <section id="regras" class="content-section text-center">
        <div class="regras-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Regras</h2>
                    <p>em breve ...</p>
                    <!--<a href="#" class="btn btn-default btn-lg">baixar pdf</a>-->
                </div>
            </div>
        </div>
    </section>

    <!-- inscrição -->
    <section id="inscricao" class="container content-section text-center">
        <div class="row">
            <h2>Inscrição</h2>
            <i> em breve será aberta ...</i>
            <div class="col-lg-10 col-lg-offset-2">

                <div class="row">
                    <div class="col-lg-5">
                        <h3>1ª Opção</h3>
                        <p>Participar apenas das palestras.</p>
                    </div>
                    <div class="col-lg-5">
                        <h3>2ª Opção</h3>
                        <p>Além de participar das palestras estará também participando do campeonato de CS GO.</p>
                    </div>
                </div>
                <!-- Botões para se inscrever -->
                <div class="row">
                    <div class="col-lg-5 margin-bottom">
                        <button type="button" class="btn btn-default btn-lg" href="#" data-toggle="modal" data-target="#modal_cadopcao1">Cadastrar 1ª opção</button>
                    </div>
                    <div class="col-lg-5 margin-bottom">
                        <button id="btn-cad2"type="button" class="btn btn-default btn-lg" href="#" data-toggle="modal" data-target="#modal_cadopcao2">Cadastrar 2ª opção</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contato -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contato</h2>
                <p>Quaisquer dúvidas, nos procure nas redes sociais ou email, estaremos a disposição para esclarece-las</p>
                <p><a href="mailto:email@email.com">ufgdgamecup@gmail.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.facebook.com/ufgdgamecup/" target="_blanck" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; ufgd game cup</p>
            <p class="text-muted credit">Site desenvolvido por Juarez A. Franco Jr</p>
        </div>
    </footer>

    <!-- alertas -->
    <div class="modal fade" id="alertsuccess" role="dialog">
        <!--<div class="modal-dialog modal-sm">-->
        <div class="modal-dialog  modal-sm">
            <div id="alertsuccess-content" class="alert alert-success in">

            </div>
        </div>
    </div>
    <div class="modal fade" id="alertfail" role="dialog">
        <!--<div class="modal-dialog modal-sm">-->
        <div class="modal-dialog  modal-sm">
            <div id="alertfail-content" class="alert alert-danger in">

            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="resource/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="resource/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="resource/js/jquery.easing.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="resource/js/grayscale.js"></script>

    <!-- Scripts -->
    <script src="resource/js/jquery.maskedinput.js" type="text/javascript"></script>

    <!-- Meus scripts-->
    <script src="resource/js/cadastrar_opcao1_ajax.js" type="text/javascript"></script>
    <script src="resource/js/cadastrar_opcao2_ajax.js" type="text/javascript"></script>

    <!-- Scripts personalizados  -->
    <script type="text/javascript">
        //mascaras para os campos de cpf e telefone requisito -> maskedinput.js
        jQuery(function($){
            $(".cpf-input").mask("999.999.999-99");  
            $(".fone-input").mask("(99) 9999-9999?9"); 
        });

        //executa após pagina ser carregada
        $(window).load(function(){
            //adiciona iframe do video, esta comentado, pois não pode mais pra assistir o video no site, direitos autorais nao permite
            //foi criado um link para assistir no youtube
            /*$('#content-video').html(
                '<iframe width="100%" height="350" src="https://www.youtube.com/embed/ABL_pZ0gYRE" frameborder="0" allowfullscreen></iframe>'
                );*/
        });
        
    </script>

    <?php 
        //inclui formulários de cadastro
    include 'view/form_cadopcao1.html';
    include 'view/form_cadopcao2.php';
    include 'view/modal_loading.html';
    ?>
</body>

</html>
