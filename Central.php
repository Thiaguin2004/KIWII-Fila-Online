<?php $cpf = $_GET['cpf'];
$token = $_GET['token'];
if($token!="logado"){
header("Location:Login.php");
}?>
<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <title>Central</title>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contato.css">
    <link rel="stylesheet" href="Central.css">
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <img src="imagens/Logo.png" style="width: 50px" alt="">
        <a style="font-family:'Times New Roman', Times, serif" class="navbar-brand" href=<?php echo"/sistemakiwi/Central.php?token=$token&cpf=$cpf"; ?>>Kiwii</a>
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Central.php?token=$token&cpf=$cpf"; ?>>Página Central</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Serviços.php?token=$token&cpf=$cpf"; ?>>Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Bancos.php?token=$token&cpf=$cpf"; ?>>Bancos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Contato.php?token=$token&cpf=$cpf"; ?>>Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Equipe.php?token=$token&cpf=$cpf"; ?>>Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/AreaRestrita.php?token=$token&cpf=$cpf"; ?>>Área Restrita</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn btn-success btn-sm ml-3" href=<?php echo"/sistemakiwi/Perfil.php?token=$token&cpf=$cpf"; ?>>
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
                        <div class="separator"> ♦ </div>

                        <h3 class="central">Conte conosco para facilitar seu dia a dia, proporcionando um controle maior
                            sobre seus problemas com eficiência!</h3>
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
                            <img class="icons0" src="imagens/Facilidade.png" alt="icon">
                            <h3 class="central">Fácil Navegação</h3>
                            <p class="description">A equipe Kiwii oferece ferramentas e serviços bem organizados e
                                intuitivos para uso de todas as faixas etárias .</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="info-icon">
                            <div class="icon">
                                <i class="pe-7s-albums text-danger"></i>
                            </div>
                            <img class="icons0" src="imagens/Variedade.png" alt="icon">
                            <h3 class="central">Variedade de Serviços</h3>
                            <p class="description">Com a variedade de parcerias que temos, proporcionamos todo tipo de
                                serviço desejado.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="info-icon">
                            <div class="icon">
                                <i class="pe-7s-vector text-danger"></i>
                            </div>
                            <img class="icons0" src="imagens/Suporte.png" alt="icon">
                            <h3 class="central">Suporte</h3>
                            <p class="description">Estamos a todo momento em alerta para que possamos garantir suporte
                                para sanar as suas dúvidas, sugestões e reclamções.</p>
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
                <div class="separator"> ♦ </div>

                <h3 class="central">Realizado o cadastro em nosso servidor, segue o exemplo para realização do serviço
                    desejado a cumprir.</h3>
            </div>
        </div>
        </div>
        <!-- Centro do site -->

        <section>
            <div class="container">

                <div class="row mbr-justify-content-center">

                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-volume-up fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Serviço
                                    <span>Desejado</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Localize o Banco e o serviço que
                                    deseja resolver seu problema. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-calendar fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> Agendamento <span>
                                    </span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Escolha a melhor data e o horário
                                    desejado a estar presencial quando chegar sua vez.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-globe fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> Aguarde <span> sua
                                        vez </span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Após realizar todos os procedimentos
                                    é só aguardar o alerta que poderá comparecer ao local, podendo realizar qualquer
                                    outra atividade nesse período.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-trophy fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Problema
                                    <span>Resolvido</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Alertado a comparecer no local, será
                                    direcionado ao serviço selecionado para que seja feito o procedimento de sua
                                    escolha. </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <div class="separator"> ♦ </div>
        <!-- Fim do centro do site -->


    </main>
    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5 class="text-center"> <a style="text-decoration:none" href=""> Sobre Nós </a></h5>
                    <hr class="bg-white w-header my-4">
                    <p style="text-align: justify;" class="mb-0"> <a style="text-decoration:none; " href="">
                            Somos uma empresa fundada visando um projeto de facilidade e utilidade para todos, criando,
                            organizando e notificando filas com o serviço desejado.
                        </a>
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5 class="text-center"> <a style="text-decoration:none" href=""> Acesso Rápido </a></h5>
                    <hr class="bg-white w-header my-4">
                    <ul class="list-unstyled">
                        <li><a href=<?php echo"/sistemakiwi/Bancos.php?token=$token&cpf=$cpf"; ?>>Bancos</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Serviços.php?token=$token&cpf=$cpf"; ?>>Serviços</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Perfil.php?token=$token&cpf=$cpf"; ?>>Perfil</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Contato.php?token=$token&cpf=$cpf"; ?>>Contato</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 ">
                    <h5 class="text-center"> <a style="text-decoration:none" href=""> Meios de Contatos </a></h5>
                    <hr class="bg-white w-header my-4">
                    <ul class="list-unstyled"> <a style="text-decoration:none" href="">
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
                        <p class="text-right text-center"> <a href=""> Criado </a><a href=""><i
                                    class="fa fa-heart"></a></i><a href=""> por </a><a href=""><i>Edvalmore, Yago,
                                    Thiago e Philipe</i></a></p>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>