<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Micuim</title>
    
    <link href="../../aula-frameworks-master/assets/css/framework.css">
    
</head>
<body>
    <h1>@yield('title','Sistema de dadastro de atletas')</h1>
    <div class="painel">
        @section('content')
            Bem vindo ao Micuim.
        @show
        @section('nav')
        <div class="menu">
            <a href="/athlete">Lista de Atletas</a>
            <a href="/athlete/create">Cadastra de Atletas</a>
        </div>
         <div>
            <a href="/sports">Lista de Esportes</a>
            <a href="/sports/create">Cadastra de esportes</a>
        </div>
        <div>
            <a href="/team">Lista de Times</a>
            <a href="/team/create">Cadastra de Times</a>
        </div>
        <div>
            <a href="/city">Lista de Cidades</a>
            <a href="/city/create">Cadastro de Cidades</a>
        </div>
        <div>
            <a href="/users">Lista de Usuarios</a>           
        </div>
        @show
    </div>
    <footer>
       @section('footer')
        <p>
        <br>
            Sistema Gerenciamento atividades desportivas &copy; todos os direitos reservados
        </p>
        @show
    </footer>
</body>
</html>