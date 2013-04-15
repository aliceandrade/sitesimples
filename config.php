<?php

define ('TITULO', 'Meu Site');
define ('BASEURL','http://localhost/site');

define('CONTATO', 'alice.andrade@gmail.com');
define('TITULO_CONTATO', '[meu site] novo e-mail de contato');

$menu = array(
    '/index'=>'home',
    '/sobre'=> 'Sobre Nós',
    '/blog' => 'Notícias',
    '/contato' => 'Fale Conosco',
);

define ( 'DB_HOST', 'localhost');
define ( 'DB_USER', 'site');
define ( 'DB_PASS', 'site');
define ( 'DB_NAME', 'site');

function conecta()
{
   $link = mysql_connect ( DB_HOST , DB_USER , DB_PASS);
   mysql_select_db ( DB_NAME , $link);
}

function pegaPosts($limit)
{
    conecta();
    $query = 'select * from post ORDER BY id DESC LIMIT ' . $limit;
    $result =  mysql_query ($query);
    return $result;
}