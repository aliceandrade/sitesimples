<?php
$titulo = 'Fale Conosco né';
include 'header.php' ?>

<?php

if (isset($_POST['nome']) && isset($_POST['texto'])) {

    $nome = strip_tags($_POST['nome']);
    $mensagem = strip_tags($_POST['texto']);

    $resultado = mail(CONTATO, TITULO_CONTATO, "

$nome enviou um e-mail

Mensagem: $mensagem

");
    echo 'Obrigado!';
}

?>


<form action="" method="post">
    <input type="text" name="nome" placeholder="nome">    
    <textarea name="texto" placeholder="seu texto"></textarea>
    <button type="submit">enviar</button>
</form>





<?php include 'footer.php' ?>