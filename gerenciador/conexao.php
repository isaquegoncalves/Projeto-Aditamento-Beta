<?php
//-----------Conexão com o Banco De dados---------
define("host", "127.0.0.1");
define("user", "root");
define("pass", "user1234@");
define("dbname", "escala");
$conn = mysqli_connect(host, user, pass, dbname);

    //Teste de conexão
    if (!$conn) {
        die ("<br>A conexao falhou: ". mysqli_connect_error());
    } 