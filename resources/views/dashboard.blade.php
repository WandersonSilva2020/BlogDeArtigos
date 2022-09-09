<x-app-layout>
    <link rel="styleshett" href="resources/CSS/home.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <x-slot name="header">
        <div class="font-semibold text-xl text-gray-800 leading-tight">
           <h2 class="text-center"> {{ __('Bem vindo Usuario') }}
            <form name="Pesquisa" id="Pesquisa" action="/Pesquisa">
            <div class="form-group input-group" name="formularioDePesquisa" id="FormularioDePesquisa" action="/Pesquisa>
                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                <input name="consulta" id="txt_consulta" placeholder="Consultar" type="text" class="form-control">
                  <div id="submit" class="btn btn-dark">
                    <input type="submit" name="search" value="Pesquisar "><ion-icon name="search" size="small"></ion-icon>
              </div>
            </form>
            </div>
           </h2>
        </div>
           </x-slot>
    
        <div class="card" style="width: 40rem; height:30rem">
        <img src="/img/landscapegold.jpg" class="card-img-top" alt="Foto do artigo">
        <div class="card-body" style="">
          <h5 class="card-title">Titulo do Artigo </h5>
          <br>
          <h6 class="card-text">Autor do Artigo</h6>
          <h6 class="card-text">Criando em: dd-mm-yy</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-dark btn-sm" style="position: relative; top: 35%; left: 85%">Vizualizar</a>
        </div>
      </div>

       <div class="card" style="width: 40rem; height:30rem">
        <img src="/img/landscapegold.jpg" class="card-img-top" alt="Foto do artigo">
        <div class="card-body" style="">
          <h5 class="card-title">Titulo do Artigo </h5>
          <br>
          <h6 class="card-text">Autor do Artigo</h6>
          <h6 class="card-text">Criando em: dd-mm-yy</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-dark btn-sm" style="position: relative; top: 35%; left: 85%">Vizualizar</a>
        </div>
      </div>
  
    
     
</x-app-layout>
