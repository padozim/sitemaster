<?php
require_once __DIR__ . "/header.php";

$nome = filter_input(INPUT_POST, "nome");
$email = filter_input(INPUT_POST, "email");
$assunto = filter_input(INPUT_POST, "assunto");
$mensagem = filter_input(INPUT_POST, "mensagem");

if ($nome) {
    echo "<div class='container'>";
    echo "<h3>Dados enviados:</h3>";
    echo "<p>{$nome}</p>";
    echo "<p>{$email}</p>";
    echo "<p>{$assunto}</p>";
    echo "<p>{$mensagem}</p>";
    echo "<hr />";
    echo "</div>";
}
?>
<br>
<div class='container'>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form role="form" action="" method="POST">
                <div class="form-group" draggable="true">
                    <label class="control-label" for="exampleInputNome">Nome</label>
                    <input class="form-control" id="exampleInputNome" 
                           placeholder="Entre com seu nome" type="text" name="nome" 
                           required="required">
                </div>
                <div class="form-group" draggable="true">
                    <label class="control-label" for="exampleInputEmail">Email</label>
                    <input class="form-control" id="exampleInputEmail" 
                           placeholder="Entre com seu email" type="email" name="email"
                           required="required">
                </div>
                <div class="form-group">
                    <label class="control-label" for="exampleInputAssunto">Assunto</label>
                    <input class="form-control" id="exampleInputAssunto"
                           placeholder="Entre com o assunto desejado" type="text" name="assunto" required="required">
                </div>
                <div class="form-group" draggable="true">
                    <label class="control-label" for="exampleInputMensagem">Mesagem</label>
                    <textarea class="form-control" id="exampleInputMensagem"
                              placeholder="Entre com a sua mensagem" name="mensagem" required="required"></textarea>
                </div>                
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>
</div>
<?php
require_once __DIR__ . "/footer.php";
