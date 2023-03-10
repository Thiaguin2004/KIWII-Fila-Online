<?php if($_GET['token']!="logado"){
    header("Location:Login.php");
}?>
<!DOCTYPE html>
<html lang="pt-br">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <head>  
        <title>Equipe Kiwii </title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='css/bootstrap.css' rel='stylesheet'/>
        <link rel="stylesheet" href="Contato.css">
        <link rel="stylesheet" href="Equipe.css">
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
                        <a class="nav-link" href="product.html">Servi??os</a>
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
            
                        <form class="form-inline my-2 my-lg-0">
                            <a class="btn btn-success btn-sm ml-3" href=<?php if($_GET['token']=="logado"){echo"/sistemakiwi/Perfil.php?token=logado";}
                             else if($_GET['token']!="logado"){echo"/sistemakiwi/Perfil.php";} ?>>
                                <img class="icon" style="width: 20px;" src="imagens/IconFila.png" alt="">
                                <i class="fa "></i> Perfil
                            </a>
                        </form>
                    </div>
                </div>
            </nav>
            <input type="text" name="token" class="form-control" hidden value="<?php $_GET['token'];?>" />
        <main>
            <section>
                <link href='css/rotating-card.css' rel='stylesheet' />
                <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
                <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
                
                    <h1 class="title text-center">
                        Essa ?? a nossa Equipe
                        <br>
                        <small>Temos o prazer em t??-los aqui! <br></small>
                        <p></p>
                        ???
                    </h1>

                    <div class="col-md-4 col-sm-6">
                        <div class="card-container">
                            <div class="card">
                                <div class="front">
                                    <div class="cover">
                                        <img src="images/rotating_card_thumb3.png"/>
                                    </div>
                                    <div class="user">
                                        <img class="img-circle" src="images/rotating_card_profile3.png"/>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h3 class="name">Edvalmore</h3>
                                            <p class="profession">CEO</p>
                                            <p class="text-center">???Tenha a coragem de seguir seu cora????o e sua intui????o. Eles, de alguma forma, j?? sabem o que voc?? realmente quer se tornar. Todo o resto ?? secund??rio???</p>
                                        </div>
                                        <div class="footer">
                                            <i class="fa fa-mail-forward"></i> Rota????o Autom??tica
                                        </div>
                                    </div>
                                </div> <!-- end front panel -->
                                <div class="back">
                                    <div class="header">
                                        <h5 class="motto">"Autoconhecimento ?? essencial!"</h5>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h4 class="text-center">Descri????o do trabalho</h4>
                                            <p class="text-center">Web design, Adobe Photoshop, HTML, CSS, Corel entre outros...</p>

                                            <div class="stats-container">
                                                <div class="stats">
                                                    <h4>202</h4>
                                                    <p>
                                                        Seguidores
                                                    </p>
                                                </div>
                                                <div class="stats">
                                                    <h4>253</h4>
                                                    <p>
                                                        Seguindo
                                                    </p>
                                                </div>
                                                <div class="stats">
                                                    <h4>8</h4>
                                                    <p>
                                                        Projetos
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="social-links text-center">
                                            <a href="https://www.instagram.com/ed_oliver19/" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                                            <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                            <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                            <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div> <!-- end col sm 3 -->
                    <!--<div class="col-sm-1"></div> -->

                    <div class="col-md-4 col-sm-6">
                        <div class="card-container">
                            <div class="card">
                                <div class="front">
                                    <div class="cover">
                                        <img src="images/rotating_card_thumb3.png"/>
                                    </div>
                                    <div class="user">
                                        <img class="img-circle" src="images/rotating_card_profile.png"/>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h3 class="name">Yago</h3>
                                            <p class="profession">CEO</p>

                                            <p class="text-center">???N??o tenha medo de fracassar. Saia, experimente e obtenha uma taxa com base em suas experi??ncias. Tente e voc?? aprender?? do que ?? capaz, qual ?? seu potencial e onde as oportunidades est??o???</p>
                                        </div>
                                        <div class="footer">
                                            <div class="rating">
                                                <i class="fa fa-mail-forward"></i> Rota????o autom??tica
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end front panel -->
                                <div class="back">
                                    <div class="header">
                                        <h5 class="motto">"A vida ?? muito curta para n??o ser desfrutada!"</h5>
                                    </div>
                                    <div class="content">
                                        <div class="main">
                                            <h4 class="text-center">Descri????o do trabalho</h4>
                                            <p class="text-center">Web design, Adobe Photoshop, HTML, CSS, entre outros...</p>

                                            <div class="stats-container">
                                                <div class="stats">
                                                    <h4>52</h4>
                                                    <p>
                                                        Seguidores
                                                    </p>
                                                </div>
                                                <div class="stats">
                                                    <h4>62</h4>
                                                    <p>
                                                        Seguindo
                                                    </p>
                                                </div>
                                                <div class="stats">
                                                    <h4>4</h4>
                                                    <p>
                                                        Projetos
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="social-links text-center">
                                            <a href="https://www.instagram.com/mineirim_sofrido/" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                                            <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                            <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                            <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- end back panel -->
                            </div> <!-- end card -->
                        </div> <!-- end card-container -->
                    </div> <!-- end col-sm-3 -->
                    </div> <!-- end col-sm-10 -->
                </div> <!-- end row -->
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="images/rotating_card_thumb3.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="images/rotating_card_profile2.png"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">Thiago</h3>
                                    <p class="profession">CEO</p>
                                    <p class="text-center">???Um dos maiores erros que as pessoas cometem ?? tentar for??ar um interesse. Voc?? n??o escolhe suas paix??es; elas o escolhem???</p>
                                </div>
                                <div class="footer">
                                    <i class="fa fa-mail-forward"></i> Rota????o Autom??tica
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"A verdade ?? sempre a melhor sa??da!"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Descri????o do trabalho</h4>
                                    <p class="text-center">Web design, HTML, CSS, Asp.Net, PHP, entre outros...</p>

                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>691</h4>
                                            <p>
                                                Seguidores
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>1758</h4>
                                            <p>
                                                Seguindo
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>21</h4>
                                            <p>
                                                Projetos
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <a href="https://www.instagram.com/eothigas._/" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col sm 3 -->
            <!--<div class="col-sm-1"></div> -->

            <div class="col-md-4 col-sm-6">
                <div class="card-container">
                    <div class="card">
                        <div class="front">
                            <div class="cover">
                                <img src="images/rotating_card_thumb3.png"/>
                            </div>
                            <div class="user">
                                <img class="img-circle" src="images/rotating_card_profile4.png"/>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h3 class="name">Philipe Cupertino</h3>
                                    <p class="profession">CEO</p>

                                    <p class="text-center">???Nunca pare de aprender. Seja no n??vel de rec??m-formado ou de um CEO, voc?? n??o sabe tudo. Admitir isso n??o ?? um sinal de fraqueza. Os maiores l??deres s??o aqueles que se tornam alunos por toda a vida???</p>
                                </div>
                                <div class="footer">
                                    <div class="rating">
                                        <i class="fa fa-mail-forward"></i> Rota????o autom??tica
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end front panel -->
                        <div class="back">
                            <div class="header">
                                <h5 class="motto">"Pare de adiar o seu futuro!"</h5>
                            </div>
                            <div class="content">
                                <div class="main">
                                    <h4 class="text-center">Descri????o do trabalho</h4>
                                    <p class="text-center">Web design, HTML, CSS, entre outros...</p>

                                    <div class="stats-container">
                                        <div class="stats">
                                            <h4>405</h4>
                                            <p>
                                                Seguidores
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>740</h4>
                                            <p>
                                                Seguindo
                                            </p>
                                        </div>
                                        <div class="stats">
                                            <h4>5</h4>
                                            <p>
                                                Projetos
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer">
                                <div class="social-links text-center">
                                    <a href="https://www.instagram.com/cupeertino/" class="instagram"><i class="fa fa-instagram fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                    <a href="https://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                </div>
                            </div>
                        </div> <!-- end back panel -->
                    </div> <!-- end card -->
                </div> <!-- end card-container -->
            </div> <!-- end col-sm-3 -->
            </div> <!-- end col-sm-10 -->
        </div> <!-- end row -->
    </div>
            
                <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
                <script src="js/bootstrap.min.js" type="text/javascript"></script>

                <script type="text/javascript">
                    $().ready(function(){
                        $('[rel="tooltip"]').tooltip();

                        $('a.scroll-down').click(function(e){
                            e.preventDefault();
                            scroll_target = $(this).data('href');
                            $('html, body').animate({
                                scrollTop: $(scroll_target).offset().top - 60
                            }, 1000);
                        });

                    });

                    function rotateCard(btn){
                        var $card = $(btn).closest('.card-container');
                        console.log($card);
                        if($card.hasClass('hover')){
                            $card.removeClass('hover');
                        } else {
                            $card.addClass('hover');
                        }
                    }
                </script>

            <div>
                <h1 class="title" style="font-size: 25px">
                    
                </h1>
            </div>

                <div>
                    <h1 class="title" style="font-size: 20px; text-align: left; text-align: justify;">
                        <p></p> ??? <br><p></p>
                        Trabalhar em equipe ?? saber ser parte de um todo. ?? como ser uma parte fundamental de um corpo, mas sabendo que sem corpo essa parte de nada serve. Ter a capacidade de trabalhar bem em equipe mostra humildade, toler??ncia, intelig??ncia emocional e companheirismo.
                        <br><p></p>
                        Ningu??m ?? nada sozinho. E se queremos fazer algo grande, importante e que nos traga orgulho, precisamos fazer em equipe. Alcan??ar o sucesso com um esfor??o coletivo ?? muito mais prazeroso.
                        <br><p></p>
                        Trabalhando em equipe ficamos mais motivados e comprometidos, afinal uns dependem dos outros, e todos s??o respons??veis pelas falhas e pelo sucesso. Por isso, o trabalho em equipe deixa todos mais fortes.
                        <br><p></p>
                        O trabalho em equipe ?? uni??o e amizade em prol de um bem e de um objetivo comum, por isso ?? muito mais nobre do que uma batalha individual. Todos s??o pe??as importantes no trabalho em equipe, cada um representa uma pequena parcela do resultado final, quando um falha, todos devem se unir, para sua reconstru????o. 
                        <p></p> ???
                    </h1>
                </div>
            </section>
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

