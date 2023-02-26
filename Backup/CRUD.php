﻿<?php if($_GET['token']!="logado"){
    header("Location:Login.php");
}?>
<!DOCTYPE html>
<html lang="pt-br">
<input type="text" name="token" class="form-control" hidden value="<?php $_GET['token'];?>" />
    <nav>
        <a href="/sistemakiwi/Login.html">Vá para a tela de Login</a>/
        <a href="/sistemakiwi/Index.html">Vá para a tela de Registro</a>/
        <a href="/sistemakiwi/Privacy.html">Vá para a tela Central</a>/
        <a href="/sistemakiwi/CRUD.html">Vá para a tela de GRID</a>
    </nav>

    <h1>Usuários</h1>

    <p>
    <a asp-action="Create">Criar Novo</a>
    </p>
    <table class="table">
    <thead>
    <tr>
    <th>
    Login
    </th>
    <th>
    Senha
    </th>
    <th></th>
    </tr>
    </thead>
    <tbody>
    
    <tr>
    <td>
    Thiago
    </td>
    <td>
    Senha do Thiago
    </td>
    <td>
    <a asp-action="Edit" asp-route-id="@item.UsuariosId">Editar</a> |
    <a asp-action="Details" asp-route-id="@item.UsuariosId">Detalhes</a> |
    <a asp-action="Delete" asp-route-id="@item.UsuariosId">Deletar</a>
    </td>
    </tr>
    <tr>
    <td>
    Edvalmore
    </td>
    <td>
    Senha do Edvalmore
    </td>
    <td>
    <a asp-action="Edit" asp-route-id="@item.UsuariosId">Editar</a> |
    <a asp-action="Details" asp-route-id="@item.UsuariosId">Detalhes</a> |
    <a asp-action="Delete" asp-route-id="@item.UsuariosId">Deletar</a>
    </td>
    </tr>
    
    </tbody>
    </table>
</html>
<link  rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
<script  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"  crossorigin="anonymous"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"  crossorigin="anonymous"></script>
<script  src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"  crossorigin="anonymous"></script>