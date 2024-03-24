<?php 
require 'cabecalho.php'
?>
<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Formulário para contato</h1>
    </div>
    <form  class="col-12" action="destinoform.php" method="POST">
        
        <div class="row">
            <div class="col-6">
                <label class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        
            <div class="col-6">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
        </div>
        <div>
            <label class="form-label">Mensagem:</label>
            <textarea name="msg" class="form-control" id="msg"></textarea>
        </div></br>
        
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-warning">Limpar</button>
    </form>
    <a href="../" class="btn btn-info">Voltar</a>
</div>
<?php 
require 'rodape.php'
?>