<?php if($_GET['token']!="logado"){
    header("Location:Login.php");
}?>
<!DOCTYPE html>
<html lang="pt-br">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <head>  
        <title>Central</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='css/bootstrap.css' rel='stylesheet'/>
        <link rel="stylesheet" href="Contato.css">
        <link rel="stylesheet" href="Central.css">
    </head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Parte Superior do site -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <img src="imagens/Logo.png" style="width: 50px" alt="">
            <a class="navbar-brand" href="Login.php">Kiwii</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if($_GET['token']=="logado"){echo"/sistemakiwi/Central.php?token=logado";}
                             else if($_GET['token']!="logado"){echo"/sistemakiwi/Central.php";} ?>">P??gina Central</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Servi??os</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php if($_GET['token']=="logado"){echo"/sistemakiwi/Bancos.php?token=logado";}
                             else if($_GET['token']!="logado"){echo"/sistemakiwi/Bancos.php";} ?>>Bancos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php if($_GET['token']=="logado"){echo"/sistemakiwi/Contato.php?token=logado";}
                             else if($_GET['token']!="logado"){echo"/sistemakiwi/Contato.php";} ?>>Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?php if($_GET['token']=="logado"){echo"/sistemakiwi/Equipe.php?token=logado";}
                             else if($_GET['token']!="logado"){echo"/sistemakiwi/Equipe.php";} ?>>Equipe</a>
                    </li>
                </ul>
    
                <form class="form-inline my-2 my-lg-0 off">
                    <a class="btn btn-success btn-sm ml-3" href=<?php if($_GET['token']=="logado"){echo"/sistemakiwi/Perfil.php?token=logado";}
                             else if($_GET['token']!="logado"){echo"/sistemakiwi/Perfil.php";} ?>>
                        <img class="icon" style="width: 20px;" src="imagens/IconFila.png" alt="">
                        <i class="fa "></i> Perfil
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <main>
        <div class="section01 section-presentation-page">
            <div class="parallax filter">
                <div class="image" style="background-image:(); transform: translate3d(0px, 0px, 0px);"></div>
                    <div class="container">
                    <img class="displayed" src="Imagens/Logo.png" alt="logo">
                    <div class="content">
                    <p></p>
                    <h1 class="title-modern">Kiwii</h1>
                    <div class="separator"> ??? </div>

                    <h3 class="central">Conte conosco para facilitar seu dia a dia, proporcionando um controle maior sobre seus problemas com efici??ncia!</h3>
                    <p></p>
        
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-we-do-presentation">
        <div class="container">
        <div class="row">
        <div class="col-md-4 col-sm-4">
        <div class="info-icon">
        <div class="icon">
        <i class="pe-7s-keypad text-danger"></i>
        </div>
        <img class="icons1" src="imagens/Facilidade.png" alt="">
        <h3 class="central">F??cil Navega????o</h3>
        <p class="description">A equipe Kiwii oferece ferramentas e servi??os bem organizados e intuitivos para uso de todas as faixas et??rias .</p>
        </div>
        </div>
        <div class="col-md-4 col-sm-4">
        <div class="info-icon">
        <div class="icon">
        <i class="pe-7s-albums text-danger"></i>
        </div>
        <img class="icons2" src="imagens/Variedade.png" alt="">
        <h3 class="central">Variedade de Servi??os</h3>
        <p class="description">Com a variedade de parcerias que temos, proporcionamos todo tipo de servi??o desejado.</p>
        </div>
        </div>
        <div class="col-md-4 col-sm-4">
        <div class="info-icon">
        <div class="icon">
        <i class="pe-7s-vector text-danger"></i>
        </div>
        <img class="icons3" src="imagens/Suporte.png" alt="">
        <h3 class="central">Suporte</h3>
        <p class="description">Estamos a todo momento em alerta para que possamos garantir suporte para sanar as suas d??vidas, sugest??es e reclam????es.</p>
        </div>
        </div>
        </div>
        </div>
        </div>
<!-- Final da parte superior do site -->

<div class="image" style="background-image:(); transform: translated(0px, 0px, 0px);"></div>
                    <div class="container">
                    <div class="content">
                    <h1 class="title-modern">Procedimento</h1>
                    <div class="separator"> ??? </div>

                    <h3 class="central">Realizado o cadastro em nosso servidor, segue o exemplo para realiza????o do servi??o desejado a cumprir.</h3>        
                    </div>
                </div>
            </div>
<!-- Centro do site -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section>
<div class="container">
	
		<div class="row mbr-justify-content-center">

            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-volume-up fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Servi??o <span>Desejado</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Localize o Banco e o servi??o que deseja resolver seu problema. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-calendar fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> Agendamento <span>  </span>
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Escolha a melhor data e o hor??rio desejado a estar presencial quando chegar sua vez.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-globe fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> Aguarde <span> sua vez </span>
                        </h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Ap??s realizar todos os procedimentos ?? s?? aguardar o alerta que poder?? comparecer ao local, podendo realizar qualquer outra atividade nesse per??odo.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont fa-trophy fa"></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Problema <span>Resolvido</span></h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Alertado a comparecer no local, ser?? direcionado ao servi??o selecionado para que seja feito o procedimento de sua escolha. </p>
                    </div>
                </div>
            </div>
        </div>

</div>
<input type="text" name="token" class="form-control" hidden value="<?php $_GET['token'];?>" />
</section>
<div class="separator"> ??? </div>
<!-- Fim do centro do site -->


    </main>
        <!-- Footer -->
        <footer class="text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-4 col-xl-3">
                        <h5 class="text-center"> <a href=""> Sobre N??s </a></h5>
                        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                        <p class="mb-0"> <a href="">
                            Somos uma empresa fundada visando um projeto de facilidade e utilidade para todos, criando, organizando e notificando filas com o servi??o desejado.
                        </a>
                        </p>
                    </div>
        
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                        <h5 class="text-center"> <a href=""> Acesso R??pido </a></h5>
                        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                        <ul class="list-unstyled">
                            <li><a href="Bancos.html">Bancos</a></li>
                            <li><a href="Contato.html">Contato</a></li>
                            <li><a href="">Servi??os</a></li>
                            <li><a href="">Filas de Espera</a></li>
                        </ul>
                    </div>
        
                    <div class="col-md-4 col-lg-3 col-xl-3">
                        <h5 class="text-center"> <a href=""> Meios de Contatos </a></h5>
                        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                        <ul class="list-unstyled"> <a href="">
                            <li><i class="fa fa-home mr-2"></i> Centro, Belo Horizonte - MG</li>
                            <li><i class="fa fa-envelope mr-2"></i> contato@kiwii.com.br</li>
                            <li><i class="fa fa-phone mr-2"></i> (31) 9 9988-9898</li>
                            <li><i class="fa fa-phone mr-2"></i> 3366-6336</li>
                        </a>
                        </ul>
                    </div>
                    
                    <div class="col-12 copyright mt-3 text-center">
                        <h5 class="text-center"> <a href=""> Voltar para o topo </a></h5>
                        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                        <ul>
                        <p class="text-right text-center"> <a href=""> Criado </a><a href=""><i class="fa fa-heart"></a></i><a href=""> por </a><a href=""><i>Edvalmore, Yago, Thiago e Philipe</i></a></p>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>