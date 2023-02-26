<?php $cpf = $_GET['cpf'];
$token = $_GET['token'];
if($token!="logado"){
header("Location:Login.php");
}
if($cpf==1234){
    header("Location:NaoTemAcesso.php");
}?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Perfil.css">

    <title>Perfil</title>
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
        <hr>
        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-sm-10">
                    <h1>Perfil</h1>
                </div>
                <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image"
                            class="img-circle img-responsive" src="Imagens/Logo.png"></a></div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <!--left col-->

                    <div class="text-center">
                        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                            class="avatar img-circle img-thumbnail" alt="avatar">
                        <h6>Escolha outra foto</h6>
                        <input type="file" class="text-center center-block file-upload">
                    </div>
                    </hr><br>


                    <div class="panel panel-default">
                        <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
                        <div class="panel-body"><a href="http://instagram.com">instagram.com</a></div>
                    </div>

                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


                    <div class="panel panel-default">
                        <div class="panel-heading">Redes sociais</div>
                        <div class="panel-body">
                            <i class="fa fa-facebook fa-2x"></i>
                            <i class="fa fa-github fa-2x"></i> 
                            <i class="fa fa-twitter fa-2x"></i>
                            <i class="fa fa-pinterest fa-2x"></i>
                            <i class="fa fa-google-plus fa-2x"></i>
                        </div>
                    </div>

                </div>
                <!--/col-3-->
                <div class="col-sm-9">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Principal</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="first_name">
                                            <h4>Nome</h4>
                                        </label>
                                        <input type="text" class="form-control" name="first_name" id="first_name"
                                            placeholder="Nome" title="Entre com seu nome.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="last_name">
                                            <h4>Sobrenome</h4>
                                        </label>
                                        <input type="text" class="form-control" name="last_name" id="last_name"
                                            placeholder="Sobrenome" title="Entre com seu sobrenome.">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="phone">
                                            <h4>Telefone</h4>
                                        </label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="Telefone" title="Entre com seu telefone.">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile">
                                            <h4>Celular</h4>
                                        </label>
                                        <input type="text" class="form-control" name="mobile" id="mobile"
                                            placeholder="Celular" title="Entre com seu celular.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email">
                                            <h4>Email</h4>
                                        </label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="seu@email.com" title="Entre com seu e-mail.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email">
                                            <h4>Endereço</h4>
                                        </label>
                                        <input type="email" class="form-control" id="location" placeholder="Endereço"
                                            title="Entre com seu endereço">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="password">
                                            <h4>Senha</h4>
                                        </label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Senha" title="Entre com sua senha.">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="password2">
                                            <h4>Reescreva a senha</h4>
                                        </label>
                                        <input type="password" class="form-control" name="password2" id="password2"
                                            placeholder="Senha" title="Entre com sua senha.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success" type="submit"><i
                                                class="glyphicon glyphicon-ok-sign"></i> Salvar</button>
                                        <button class="btn btn-lg" type="reset"><i
                                                class="glyphicon glyphicon-repeat"></i> Resetar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--/col-9-->
                    </div>
                    <!--/row-->
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
    <link rel="stylesheet" href="Perfil.js">
</body>

</html>