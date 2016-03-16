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
                <p>O jogo mais popular do mundo, o Counter-Strike, é um remake do FPS shooter mais famoso do mundo.O destaque de Counter-Strike Online fica por conta dos diversos modos de jogo que incluem a participação de zumbis. Neles, sua missão é enfrentar hordas enormes de mortos-vivos com a ajuda de poderosas armas de fogo. No entanto, também é possível jogar pelo outro lado e encarnar uma terrível criatura devoradora de homens.</p>
                <p>falta conteudo sobre o evento</p>
            </div>
        </div>
    </section>

    <!-- apresentação -->
    <section id="video" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Apresentação</h2>
                <div id="content-video">
                <!--iframe do video é adicionado após pagina inteira ser carregada, ele tem um consumo de 500kb X(-->
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
                    <p>aqui as regras do evento</p>
                    <a href="#" class="btn btn-default btn-lg">baixar pdf</a>
                </div>
            </div>
        </div>
    </section>

    <!-- inscrição -->
    <section id="inscricao" class="container content-section text-center">
        <div class="row">
            <h2>Inscrição</h2>
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
                <div class="row">
                    <div class="col-lg-5 margin-bottom">
                        <button type="button" class="btn btn-default btn-lg" href="#" data-toggle="modal" data-target="#modal_cadopcao1">Cadastrar 1ª opção</button>
                    </div>
                    <div class="col-lg-5 margin-bottom">
                        <button type="button" class="btn btn-default btn-lg" href="#" data-toggle="modal" data-target="#alertsuccess">Cadastrar 2ª opção</button>
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
                <p><a href="mailto:email@email.com">feedback@email.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.facebook.com/ufgdgamecup/" target="_blanck" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- mapa -->
    <!--
    <div id="map">
        
        <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2612.1763798516936!2d-54.93165914257094!3d-22.19544474605655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x4a73b8f7660f5f81!2sUFGD+-+Universidade+Federal+da+Grande+Dourados+(Unidade+II)!5e0!3m2!1spt-BR!2sbr!4v1457225158489" width="85%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </center>
        
    </div>
    -->
    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; ufgd game cup</p>
        </div>
    </footer>

    <div class="modal fade" id="alertsuccess" role="dialog">
        <!--<div class="modal-dialog modal-sm">-->
        <div class="modal-dialog  modal-sm">
            <div class="alert alert-success in">
                <a href="#" class="close" data-dismiss="modal">&times;</a>
                <strong>Tudo certo!</strong> O cadastro foi efetuado com sucesso.
            </div>
        </div>
    </div>

    <div class="modal fade" id="alertfail" role="dialog">
        <!--<div class="modal-dialog modal-sm">-->
        <div class="modal-dialog  modal-sm">
            <div class="alert alert-success in">
                <a href="#" class="close" data-dismiss="modal">&times;</a>
                <strong>Tudo certo!</strong> O cadastro foi efetuado com sucesso.
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
    <script src="resource/js/submitting_ajax.js" type="text/javascript"></script>

    <!-- Scripts personalizados  -->
    <script type="text/javascript">
        //mascaras para os campos de cpf e telefone requisito -> maskedinput.js
        jQuery(function($){
            $(".cpf-input").mask("999.999.999-99");  
            $(".fone-input").mask("(99) 9999-9999?9"); 
        });

        //executa após pagina ser carregada
        $(window).load(function(){
            //adiciona iframe do video
            $('#content-video').html(
                '<iframe width="100%" height="350" src="https://www.youtube.com/embed/ABL_pZ0gYRE" frameborder="0" allowfullscreen></iframe>'
            );
        });
        
    </script>

    <?php 
        //inclui formulários de cadastro
    include 'view/form_cadopcao1.html';
    include 'view/form_cadopcao2.html';
    include 'view/modal_loading.html';
    ?>
</body>

</html>
