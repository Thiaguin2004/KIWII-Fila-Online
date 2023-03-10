<?php if($_GET['token']!="logado"){
    header("Location:Login.php");
}?>
<!DOCTYPE html>
<html lang="pt-br">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página incial</title>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Parte Superior do site -->
    <main>
        <div class="section01 section-presentation-page">
            <div class="parallax filter">
                <div class="image" style="background-image:(); transform: translate3d(0px, 0px, 0px);"></div>
                <div class="container">
                    <nav>
                            <a href="/sistemakiwi/Login.html">Vá para a tela de Login</a>/
                            <a href="/sistemakiwi/Index.html">Vá para a tela de Registro</a>/
                            <a href="/sistemakiwi/Privacy.html">Vá para a tela Central</a>/
                            <a href=<?php if($_GET['token']=="logado"){echo"/sistemakiwi/CRUD.php?token=logado";}
                             else if($_GET['token']!="logado"){echo"/sistemakiwi/CRUD.php";} ?> >Vá para a tela de GRID</a>
                    </nav>
                    <img class="displayed" src="Logo.png" alt="">
                    <div class="content">
                        <p></p>
                        <h1 class="title-modern">Kiwii</h1>
                        <div class="separator"> ♦ </div>

                        <h3 class="central">Conte conosco para facilitar seu dia a dia, proporcionando um controle maior sobre seus problemas com eficiência!</h3>
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
                            <img class="icons1" src="~/Imagens/Facilidade.png" alt="">
                            <h3 class="central">Fácil Navegação</h3>
                            <p class="description">A equipe Kiwii oferece ferramentas e serviços bem organizados e intuitivos para uso de todas as faixas etárias .</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="info-icon">
                            <div class="icon">
                                <i class="pe-7s-albums text-danger"></i>
                            </div>
                            <img class="icons2" src="~/Imagens/Variedade.png" alt="">
                            <h3 class="central">Variedade de Serviços</h3>
                            <p class="description">Com a variedade de parcerias que temos, proporcionamos todo tipo de serviço desejado.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="info-icon">
                            <div class="icon">
                                <i class="pe-7s-vector text-danger"></i>
                            </div>
                            <img class="icons3" src="~/Imagens/Suporte.png" alt="">
                            <h3 class="central">Suporte</h3>
                            <p class="description">Estamos a todo momento em alerta para que possamos garantir suporte para sanar as suas dúvidas, sugestões e reclamções.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final da parte superior do site -->

        <div class="image" style="background-image:(); transform: translate3d(0px, 0px, 0px);"></div>
        <div class="container">
            <div class="content">
                <h1 class="title-modern">Procedimento</h1>
                <div class="separator"> ♦ </div>

                <h3 class="central">Realizado o cadastro em nosso servidor, segue o exemplo para realização do serviço desejado a cumprir.</h3>
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
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Serviço <span>Desejado</span></h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Localize o Banco e o serviço que deseja resolver seu problema. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-calendar fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                                    Agendamento <span>  </span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Escolha a melhor data e o horário desejado a estar presencial quando chegar sua vez.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mbr-col-md-10">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa-globe fa"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                                    Aguarde <span> sua vez </span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Após realizar todos os procedimentos é só aguardar o alerta que poderá comparecer ao local, podendo realizar qualquer outra atividade nesse período.</p>
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
                                <p class="mbr-fonts-style text1 mbr-text display-6">Alertado a comparecer no local, será direcionado ao serviço selecionado para que seja feito o procedimento de sua escolha. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="text" name="token" class="form-control" hidden value="<?php $_GET['token'];?>" />
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
                    <h5>Sobre Nós</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        Somos uma empresa fundada visando um projeto de facilidade e utilidade para todos, criando, organizando e notificando filas com o serviço desejado.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5>Acesso Rápido</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><a href="">Bancos</a></li>
                        <li><a href="">Serviços</a></li>
                        <li><a href="">Filas de Espera</a></li>
                        <li><a href="">Reclamações||Sugestões</a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h5>Meios de Contatos</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-home mr-2"></i> Centro, Belo Horizonte - MG</li>
                        <li><i class="fa fa-envelope mr-2"></i> contato@kiwii.com.br</li>
                        <li><i class="fa fa-phone mr-2"></i> (31) 9 9988-9898</li>
                        <li><i class="fa fa-phone mr-2"></i> 3366-6336</li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">
                    <p class="float-left">
                        <a href="#">Voltar para o topo</a>
                    </p>
                    <p class="text-right">Criado <i class="fa fa-heart"></i> por <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>Edvalmore, Yago, Thiago e Philipe</i></a> | <span>v. 2.0</span></p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<style>
    .bloc_left_price {
        color: #c01508;
        text-align: center;
        font-weight: bold;
        font-size: 150%;
    }

    .category_block li:hover {
        background-color: #007bff;
    }

        .category_block li:hover a {
            color: #ffffff;
        }

    .category_block li a {
        color: #343a40;
    }

    .add_to_cart_block .price {
        color: #c01508;
        text-align: center;
        font-weight: bold;
        font-size: 200%;
        margin-bottom: 0;
    }

    .add_to_cart_block .price_discounted {
        color: #343a40;
        text-align: center;
        text-decoration: line-through;
        font-size: 140%;
    }

    .product_rassurance {
        padding: 10px;
        margin-top: 15px;
        background: #ffffff;
        border: 1px solid #6c757d;
        color: #6c757d;
    }

        .product_rassurance .list-inline {
            margin-bottom: 0;
            text-transform: uppercase;
            text-align: center;
        }

            .product_rassurance .list-inline li:hover {
                color: #343a40;
            }

    .reviews_product .fa-star {
        color: gold;
    }

    .pagination {
        margin-top: 20px;
    }

    footer {
        padding: 40px;
    }

        footer a {
            color: #f8f9fa !important
        }

    .icon {
        width: 20px;
    }

    body {
        background: -webkit-linear-gradient(left, #124cb6, #4286be);
    }

    main {
        background-color: white;
        margin: 25px;
        padding: 20px;
        border-radius: 15px;
    }

    .title-modern {
        text-align: center;
        font-family: f;
    }

    .separator {
        text-align: center;
    }

    #linha-horizontal {
        width: 300px;
        border: 1px solid #000;
    }

    .central {
        text-align: center;
        font-family: f;
        padding: 5px;
    }

    .description {
        text-align: center;
    }

    /* Centro site */

    section {
        padding-top: 4rem;
        padding-bottom: 5rem;
    }

    .wrap {
        display: flex;
        background: white;
        padding: 1rem 1rem 1rem 1rem;
        border-radius: 0.5rem;
        box-shadow: 7px 7px 30px -5px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }

        .wrap:hover {
            background: linear-gradient(135deg,#6394ff 0%,#0a193b 100%);
            color: white;
        }

    .ico-wrap {
        margin: auto;
    }

    .mbr-iconfont {
        font-size: 4.5rem !important;
        color: #313131;
        margin: 1rem;
        padding-right: 1rem;
    }

    .vcenter {
        margin: auto;
    }

    .mbr-section-title3 {
        text-align: left;
    }

    h2 {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .display-5 {
        font-family: 'Source Sans Pro',sans-serif;
        font-size: 1.4rem;
    }

    .mbr-bold {
        font-weight: 700;
    }

    p {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        line-height: 25px;
    }

    .display-6 {
        font-family: 'Source Sans Pro',sans-serif;
        font-size: 1re
    }

    .icons1 {
        width: 40%;
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .icons2 {
        width: 40%;
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .icons3 {
        width: 40%;
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .displayed {
        width: 200px;
        height: 160px;
        display: block;
        margin-left: auto;
        margin-right: auto
    }
</style>