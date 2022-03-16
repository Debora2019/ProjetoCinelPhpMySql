<?php
//instal.php
//Criar a base de dados que suporta o site

include 'config.php';

//preparar a ligação a bd
$ligacao = new PDO ("mysql: host=$host", $user, $password);
$motor = $ligacao->prepare ("CREATE DATABASE $base_dados");
$motor-> execute();
$ligacao=null;

//mensagem na tela
echo '<p>Base de dados criada com sucesso!</p><hr>';

$ligacao = new PDO ("mysql: dbname=$base_dados;host=$host", $user, $password);

//criar tabela user
$sql="CREATE TABLE users(
        id_user         INT NOT NULL PRIMARY KEY,
        username        VARCHAR(30),
        pass            VARCHAR(100),
        avatar          VARCHAR(250)
        )";

$motor = $ligacao->prepare($sql);
$motor->execute();

echo '<p>Tabela users criada com sucesso</p>';


//criar tabela posts
$sql="CREATE TABLE posts
id_post     INT NOT NULL PRIMARY KEY,
id_user     INT NOT NULL,
titulo      VARCHAR(100),
mensagem    TEXT,
data_post   DATETIME,
FOREIGN KEY(id_user) REFERENCES users(id_user) ON DELETE CASCATE
)";

$motor = $ligacao->prepare($sql);
$motor->execute();
$ligacao=null;

echo '<p>Tabela posts criada com sucesso</p>';
echo '<hr>';
echo '<p>Processo de criação da base de dados terminados com sucesso</p>';

?>