<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once "gerenciador/conexao.php";?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aditamento Online - (Beta)</title>
    <link rel="stylesheet" href="estilos/design/modelo-principal.css">
    <link rel="icon" href="estilos/imagens/icones/favicon-brasao/favicon-16x16.png" type="image/png">

</head>
<body>
    <main> <!--Main = Controle da centralização da página-->
        <header> 
            <h1>Aditamento Online <span>beta</span></h1>
            <img id="brasao" src="estilos/imagens/brasao.png" alt="brasão">
        </header>

        <div class="box-conteudo">
            <h2>1º Bateria de Mísseis</h2>
        <p>
            Para o conhecimento desta bateria e devida execução, publico o seguinte:
        </p>
        </div>

        <div class="partes">
            <h3>1º Parte - Serviços Diários</h3>
            <p>Escala para o Dia X de julho de 2023 - (Dia da Semana)</p>
        </div>
        
    <!--Lista do Aditamento-->
        <h4>Serviços Internos</h4>

        <!--======SERVIÇOS INTERNOS========-->
        <table>
            <thead>
                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT alfandega FROM internos";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th style="border-top-left-radius: 5px;">Desembaraço Alfandegário: </th>';
                            echo '<th style="border-top-right-radius: 5px;">' . $row["alfandega"] . '</th>';
                        }
                    ?>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT telefonista FROM internos";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Telefonista: </th>';
                            echo '<th>' . $row["telefonista"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT bombeiro FROM internos";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Bombeiro de dia: </th>';
                            echo '<th>' . $row["bombeiro"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT ht FROM internos";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Permanência ao HT: </th>';
                            echo '<th>' . $row["ht"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT rancho FROM internos";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Auxiliar de dia ao Rancho: </th>';
                            echo '<th>' . $row["rancho"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT motorista FROM internos";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th style>Motorista de dia: </th>';
                            echo '<th>' . $row["motorista"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT patrulha FROM internos";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Patrulha Marítima: </th>';
                            echo '<th>' . $row["patrulha"] . '</th>';
                        }
                    ?>
                </tr>
            </tbody>
        </table>

        <br><br>

        <!--==========ESCALA DA GUARDA=============-->
        <h4>Escala da Guarda</h4>
        <table>
            <thead>
                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT sup FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th style="border-top-left-radius: 5px;">Superior de Dia: </th>';
                            echo '<th style="border-top-right-radius: 5px;">' . $row["sup"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT ten FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th style="background-color: gray;">Oficial de Dia: </th>';
                            echo '<th style="background-color: gray;">' . $row["ten"] . '</th>';
                        }
                    ?>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT adj FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Adjunto: </th>';
                            echo '<th>' . $row["adj"] . '</th>';
                        }
                    ?>
                </tr>
                    

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT cmtg FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Comandante da Guarda: </th>';
                            echo '<th>' . $row["cmtg"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT cbg FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Cabo da Guarda: </th>';
                            echo '<th>' . $row["cbg"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT p1 FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>P1: </th>';
                            echo '<th>' . $row["p1"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT p2 FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>P2: </th>';
                            echo '<th>' . $row["p2"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT p3 FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>P3: </th>';
                            echo '<th>' . $row["p3"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT p4 FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>P4: </th>';
                            echo '<th>' . $row["p4"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT p5 FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>P5: </th>';
                            echo '<th>' . $row["p5"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT p6 FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>P6: </th>';
                            echo '<th>' . $row["p6"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT p7 FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>P7: </th>';
                            echo '<th>' . $row["p7"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT p8 FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>P8: </th>';
                            echo '<th>' . $row["p8"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT p9 FROM guarnicao";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th style="border-bottom-left-radius: 5px;">P9: </th>';
                            echo '<th style="border-bottom-right-radius: 5px;">' . $row["p9"] . '</th>';
                        }
                    ?>
                </tr>
            </tbody>
        </table>

        <br><br>

        <!--========ESCALA DA SU=======-->
        <h4>Serviços na Su</h4>

        <table>
            <thead>
                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT sgtdia FROM su";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th style="border-top-left-radius: 5px;">Sargento de dia: </th>';
                            echo '<th style="border-top-right-radius: 5px;">' . $row["sgtdia"] . '</th>';
                        }
                    ?>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT cbdia FROM su";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Cabo de dia: </th>';
                            echo '<th>' . $row["cbdia"] . '</th>';
                        }
                    ?>
                </tr>

                <tr>
                    <?php
                        //Exibição dos dados
                        $instrucaoSQL = "SELECT plantoes FROM su";
                        $resultado = mysqli_query($conn, $instrucaoSQL);

                        //Processamento de dados
                        while ($row = mysqli_fetch_assoc($resultado)){
                            echo '<th>Plantões: </th>';
                            echo '<th>' . $row["plantoes"] . '</th>';
                        }
                    ?>
                </tr>
            </tbody>
        </table>

        <div class="box-conteudo">
            <h2>Parada Diária</h2>
            <p><strong>GDH:</strong> 01, 02, 03, 04 e 05 de JUN 23 - 7:30h pronto para o Sgt de Dia</p>

            <p><strong>OBS:</strong> O Sgt de Dia entrando de serviço deverá conduzir os militares ao local da atividade.</p>

            <p><strong>Cautela do armamento:</strong> 1º Bateria de Mísseis</p>
        </div>

        <!-------------2º Parte------------->
        <div class="partes">
            <h2>2º Parte Instução</h2>
            <p>Uniformes para o Dia X de Julho de 2023</p>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th style="border-top-left-radius: 5px;">Atividade</th>
                    <th style="border-top-right-radius: 5px;">Uniforme</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th>TFM</th>
                    <th>14º</th>
                </tr>

                <tr>
                    <th>Manutenção das Instalações</th>
                    <th>12º</th>
                </tr>

                <tr>
                    <th style="border-bottom-left-radius: 5px;">Demais Atividades</th>
                    <th style="border-bottom-right-radius: 5px;">9º/10º C2</th>
                </tr>
            </tbody>
        </table>
        <br><br>

        <!------3º Parte--------->
        <div class="partes">
            <h2>3º Parte Assuntos Gerais</h2>
        </div>

        <div class="box-conteudo">
            <h2>Expediente</h2>
            <p><strong>GHD:</strong>Dia 10 7:30h JUN de 23</p>
            <p><strong>Atividade:</strong> TFM</p>
        </div>

        <div class="box-conteudo">
            <h2>Avisos</h2>
            <p>O seguintes militares deve se apresentar na Sargenteação:</p>
            <ul>
                <li>Sd EV 500 Recruta</li>
                <li>Sd EV 500 Recruta</li>
                <li>Sd EV 500 Recruta</li>
            </ul>
        </div>

        <div class="box-conteudo">
            <h2>Faltas ao Expediente</h2>
            <p>Não Houve</p>
        </div>

        <!---------4º Parte--------->
        <div class="partes">
            <h2>4º Parte Justiça & Disciplina</h2>
            <p>Sem Alteração</p>
        </div>

        <div class="rodape">
            <h2 style="font-weight: 500;">CAP - Gabriel Almeida Moraes Júnior</h2>
            <p>Comandante da 1º Bateria de Mísseis</p>
        </div>
        
        <img id="box-img" src="estilos/imagens/logo.png" alt="Brasão da 1º Bateria de mísseis">

        <footer>
            <p> &copy; Desenvolvido por 517 <strong>Brandão</strong></p>
        </footer>
    </main>

</body>
</html>