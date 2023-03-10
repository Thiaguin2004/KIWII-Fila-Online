<?php $cpf = $_GET['cpf'];
$token = $_GET['token'];
if($token!="logado"){
header("Location:Login.php");
}
if($cpf==1234){
    header("Location:NaoTemAcesso.php");
}?>
<!DOCTYPE html>
<html lang="pt-br">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<head>
    <title>Bancos</title>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Contato.css">
    <link rel="stylesheet" href="Bancos.css">
</head>

<!-- Parte Superior do site -->

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Central.php?token=$token&cpf=$cpf"; ?>>P??gina Central</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?php echo"/sistemakiwi/Servi??os.php?token=$token&cpf=$cpf"; ?>>Servi??os</a>
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
        <!-- Card -->
        <h3 style="font-family:'Times New Roman', Times, serif;" class="display-4 text-center"> Bancos Parceiros </h3>
        <hr class="bg-dark mb-4 w-25">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card">
                        <img class="card-img-top" src="images/BancoCaixa.png" alt="Card image cap">
                        <div class="card-block p-3">
                            <h4 style="font-family:'Times New Roman', Times, serif;" class="card-title">Caixa</h4>
                            <p class="card-text">A caixa Econ??mica Federal ?? uma institui????o financeira brasileira,
                                sob a forma de empresa
                                p??blica, com patrim??nio pr??prio e autonomia administrativa em todo o territ??rio
                                nacional.</p>
                            <a href=<?php echo"/sistemakiwi/Servi??os.php?token=$token&cpf=$cpf"; ?> class="btn btn-primary rounded-0 mb-2">Servi??os</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card">
                        <img class="card-img-top" src="images/BancoBrasil.png" alt="Card image cap">
                        <div class="card-block p-3">
                            <h4 style="font-family:'Times New Roman', Times, serif;" class="card-title">Banco do
                                Brasil
                            </h4>
                            <p class="card-text">Banco do Brasil ?? um banco brasileiro, constitu??do na forma de
                                sociedade de economia mista, com participa????o do Governo Federal do Brasil em 50%
                                das
                                a????es. </p>
                            <a href=<?php echo"/sistemakiwi/Servi??os.php?token=$token&cpf=$cpf"; ?> class="btn btn-primary rounded-0 mb-2">Servi??os</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card">
                        <img class="card-img-top" src="images/BancoBradesco.png" alt="Card image cap">
                        <div class="card-block p-3">
                            <h4 style="font-family:'Times New Roman', Times, serif;" class="card-title">Bradesco
                            </h4>
                            <p class="card-text">Com um modelo de atua????o eficiente, focado em atividades
                                priorit??rias,
                                atuando nas principais ??reas do segmento financeiro, com empresas que se destacam
                                por
                                seu desempenho e resultados.</p>
                            <a href=<?php echo"/sistemakiwi/Servi??os.php?token=$token&cpf=$cpf"; ?> class="btn btn-primary rounded-0 mb-2">Servi??os</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card">
                        <img class="card-img-top" src="images/BancoSicoob.png" alt="Card image cap">
                        <div class="card-block p-3">
                            <h4 style="font-family:'Times New Roman', Times, serif;" class="card-title">Sicoob</h4>
                            <p class="card-text">?? composto por cooperativas financeiras e empresas de apoio, que em
                                conjunto oferecem aos associados servi??os de conta corrente, cr??dito, investimento,
                                cons??rcio, seguros, dentre outros.</p>
                            <a href=<?php echo"/sistemakiwi/Servi??os.php?token=$token&cpf=$cpf"; ?> class="btn btn-primary rounded-0 mb-2">Servi??os</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card">
                        <img class="card-img-top" src="images/BancoNubank.png" alt="Card image cap">
                        <div class="card-block p-3">
                            <h4 style="font-family:'Times New Roman', Times, serif;" class="card-title">Nubank</h4>
                            <p class="card-text">O Nubank ?? uma institui????o financeira e uma plataforma de servi??os
                                financeiros digital popularmente conhecida como banco digital ou fintech.</p>
                            <a href=<?php echo"/sistemakiwi/Servi??os.php?token=$token&cpf=$cpf"; ?> class="btn btn-primary rounded-0 mb-2">Servi??os</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card">
                        <img class="card-img-top" src="images/BancoInter.png" alt="Card image cap">
                        <div class="card-block p-3">
                            <h4 style="font-family:'Times New Roman', Times, serif;" class="card-title">Inter</h4>
                            <p class="card-text">Banco Inter ?? um banco brasileiro, constitu??do na forma de
                                sociedade
                                an??nima. Caracteriza-se por ser um dos primeiros bancos digitais do Brasil, e pela
                                aus??ncia de taxas sobre servi??os b??sicos.</p>
                            <a href=<?php echo"/sistemakiwi/Servi??os.php?token=$token&cpf=$cpf"; ?> class="btn btn-primary rounded-0 mb-2">Servi??os</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Card -->

    </main>
    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5 class="text-center"> <a style="text-decoration:none" href=""> Sobre N??s </a></h5>
                    <hr class="bg-white w-header my-4">
                    <p style="text-align: justify;" class="mb-0"> <a style="text-decoration:none; " href="">
                            Somos uma empresa fundada visando um projeto de facilidade e utilidade para todos, criando,
                            organizando e notificando filas com o servi??o desejado.
                        </a>
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5 class="text-center"> <a style="text-decoration:none" href=""> Acesso R??pido </a></h5>
                    <hr class="bg-white w-header my-4">
                    <ul class="list-unstyled">
                        <li><a href=<?php echo"/sistemakiwi/Bancos.php?token=$token&cpf=$cpf"; ?>>Bancos</a></li>
                        <li><a href=<?php echo"/sistemakiwi/Servi??os.php?token=$token&cpf=$cpf"; ?>>Servi??os</a></li>
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