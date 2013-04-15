<?php $titulo = 'Notícias'; include 'header.php' ?>

<h2>Noticias</h2>

<?php $resultado = pegaPosts(10); ?>
<?php while ($linha = mysql_fetch_array($resultado)): ?>

<h3><a href="blog_item.php?id=<?php echo $linha['id'] ?>" title="Leia mais disto: <?php echo $titulo = htmlentities($linha['titulo'], ENT_QUOTES, 'iso8859-1') ?>"><?php echo $titulo ?></a></h3>

<p><?php echo htmlentities ($linha['conteudo'], ENT_QUOTES, 'iso8859-1') ?></p>

<?php endwhile ?> 

<?php include 'footer.php' ?>
