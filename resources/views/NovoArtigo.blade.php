
<x-app-layout>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <div class="container">
    <div class="text-center">   
        <h1 class="display-4"> Criar um Evento</h1>
    </div>   
 </div> 
   
 <div class="container">
 <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Nome do Artigo</label>
    <input type="text" class="form-control form-control-sm" id="nomeDoArtigo" placeholder="Insira o nome do artigo">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Descrição do artigo</label>
    <input class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="50"></textarea>
  </div>
  <div>
    <h6>Insira uma foto para seu evento</h6>
    <input class="form-control form-control-sm" id="formFileLg" type="file">
  </div>
 </div>
    
</x-app-layout>    