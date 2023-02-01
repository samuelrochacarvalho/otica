Tenho uma solução que vc pode usar, mas a página onde o modal vai estar precisa estar em .php. Não precisa de script nem nada. É bem simples na verdade só precisa inclur <?php include 'cadastrocontato.html';?> no modal.

Obs1: não funciona para chamar páginas de "terceiros" tipo (http://www.globo.com/), ela só vai chamar o arquivo .html do seu diretório.

Obs2: vc tem que formatar o html para encaixar dentro do Modal!

<!-- Trigger button do modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php include 'cadastrocontato.html';?> <!-- Aqui vc chama a sua página -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
Abrindo Dois modais um em cada BTN

Onde está <!-- Aqui vc chama a sua página --> vc coloca o seu .html que está no diretório.

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style>
    
</style>
</head>
<body>
    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
        Modal 1
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">CONTATO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            Condeudo do mudal 1 : <pre>&lt;?php include 'contato1.html'; ?&gt;</pre> <!-- Aqui vc chama a sua página -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
        Modal 2
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ENDEREÇO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
          