<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Micuim</title>
    <style>
    .msg {
        padding: 10px;
        border: 1px dotted #cdf;
    }
    </style>
    
    {{ HTML::style('/assets/css/framework.css') }}
    
</head>
<body>  
  <div class="container">        
    @section('nav')
        <div class="menu">
          
          <nav>
            <ul>
               <li><a href='/'><span>Home</span></a></li>
               <li><a href='#'><span>Atletas</span></a>
                  <ul>
                    <li><a href="/athlete/create">Cadastro</a></li>
                    <li><a href="/athlete">Lista</a></li>
                  </ul>
               </li>
               <li><a href='#'><span>Esportes</span></a>
                  <ul>
                    <li><a href="/sports/create">Cadastro</a></li>
                     <li><a href="/sports">Lista</a></li>
                  </ul>
               </li>
               
               <li><a href='#'><span>Times</span></a>
                  <ul>
                    <li><a href="/team/create">Cadastro</a></li>
                      <li><a href="/team">Lista</a></li>
                  </ul>
               </li>
               
               
               <li><a href='#'><span>Cidades</span></a>
                  <ul>
                    <li><a href="/city/create">Cadastro</a></li>
                    <li><a href="/city">Lista</a></li>
                  </ul>
               </li>
               <li><a href='#'><span>Usuários</span></a>
                  <ul>
                    <li><a href="/users/create">Cadastro</a></li>
                    <li><a href="/users">Lista</a></li>
                  </ul>
               </li>
               <li>
                    @section('login')
                        @if(Auth::check())
                            <a href="/logout">Logout</a>
                        @else
                            <a href="/login">Login</a>
                        @endif
                    @show
               </li>
            </ul>
           </nav>
            @show         
        </div>        
    @show
  </div><br><br><br>
  <div class="conteiner">
      @section('message')
            @if($errors->any())
                <div class="msg">
                    {{ $errors->first() }}
                </div>
            @endif            
        @show
     
      @section('content')

      @show
   </div>
</body>
</html>