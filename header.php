<?php require_once 'config.php' ?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8">
        <title>
            <?php echo TITULO ?>
            <?php if (isset ($titulo)): ?>
            - <?php echo $titulo ?>
            <?php endif ?>
        </title> 
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1><?php echo TITULO ?></h1>
        <?php include 'menu.php' ?>
        <div id="conteudo">
            
       