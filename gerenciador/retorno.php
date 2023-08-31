<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
    <link rel="stylesheet" href="../estilos/design/modelo-principal.css">
</head>
<body>
    <main>
        <header> 
            <h1>Aditamento Online <span>beta</span></h1>
            <img id="brasao" src="../estilos/imagens/brasao.png" alt="brasão">
        </header>

        <?php
            //REQUISIÇÃO DE CONEXÃO
            require_once "conexao.php";

            //Preparação da tabela para receber novos valores.
            $instrucaoSQL = "DELETE FROM internos";
            $resultado = mysqli_query($conn, $instrucaoSQL);

            $instrucaoSQL = "DELETE FROM guarnicao";
            $resultado = mysqli_query($conn, $instrucaoSQL);

            $instrucaoSQL = "DELETE FROM su";
            $resultado = mysqli_query($conn, $instrucaoSQL);

            //*******TRATAMENTO DE DADOS RECEBIDOS*******:
                //Dados do serviços internos:
                $alfandega = $_POST["n_alfandega"];
                $telefonista = $_POST["n_telefonista"];
                $bombeiro = $_POST["n_bombeiro"];
                $ht = $_POST["n_ht"];
                $rancho = $_POST["n_rancho"];
                $motorista = $_POST["n_motorista"];
                $patrulha = $_POST["n_patrulha"];

                //Dados da guarda:
                $sup = $_POST ["n_sup"];
                $oficial = $_POST["n_oficial"];
                $adjunto = $_POST ["n_adjunto"];
                $cmtg = $_POST ["n_cmtg"];
                $cbg = $_POST ["n_cbg"];
                $p1 = $_POST ["n_p1"];
                $p2 = $_POST ["n_p2"];
                $p3 = $_POST ["n_p3"];
                $p4 = $_POST ["n_p4"];
                $p5 = $_POST ["n_p5"];
                $p6 = $_POST ["n_p6"];
                $p7 = $_POST ["n_p7"];
                $p8 = $_POST ["n_p8"];
                $p9 = $_POST ["n_p9"];

                //Dados dos serviços da SU
                $sgtdia = $_POST["n_sgtdia"];
                $cbdia = $_POST["n_cbdia"];
                $plantoes = $_POST["n_plantoes"];

            //********DEBUG PARA TESTES*******
                //UTILIZAR SOMENTE PARA ANALISE DOS DADOS.
                /*
                echo '<div class="box-conteudo">';
                    //Debug dos serviços internos
                    echo "<h2>Status geral:</h2>";

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $alfandega");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $telefonista");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $bombeiro");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $ht");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $rancho");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $motorista");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $patrulha");

                    //Debug da guarda
                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $sup");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $oficial");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $adjunto");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $cmtg");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $cbg");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $p1");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $p2");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $p3");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $p4");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $p5");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $p6");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $p7");
                    
                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $p8");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $p9");

                    //Dados dos serviços da SU
                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $sgtdia");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $cbdia");

                    echo "<br>Status do dado enviado: <strong>Tipo:</strong> ";
                    echo var_dump("<strong>Saida na tabela:</strong> $plantoes");
                    
                echo '</div>';
            */
            //*******INSERÇÃO DE DADOS********

                //Inserção de dados dos serviços internos
                $instrucao_dados = ("INSERT INTO internos VALUES(default, '$alfandega', '$telefonista', '$bombeiro', '$ht', '$rancho', '$motorista', '$patrulha');");
                $SQL_dados = mysqli_query($conn, $instrucao_dados);
                echo "<br>" . mysqli_error($conn);

                //Inserção de dados da guarda
                $instrucao_dados = ("INSERT INTO guarnicao VALUES (default, '$sup', '$oficial', '$adjunto', '$cmtg', '$cbg', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9');");
                $SQL_dados = mysqli_query($conn, $instrucao_dados);
                echo "<br>" . mysqli_error($conn);

                //Inserção de dados dos serviços da SU
                $instrucao_dados = ("INSERT INTO su VALUES(default, '$sgtdia', '$cbdia', '$plantoes');");
                $SQL_dados = mysqli_query($conn, $instrucao_dados);
                echo "<br>" . mysqli_error($conn);

            echo '<h2 style="text-align: center;">&#10003; Dados Enviados Para o Aditamento Online </h2>';
        ?>
        <footer>
            <p><a href="http://127.0.0.1/Projeto-Aditamento-Beta">Acessar Aditamento Online &rarr;</a></p>
        </footer>
    </main>
</body>
</html>

