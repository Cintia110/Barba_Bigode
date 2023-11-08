!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formAtendimento" action="" method="post">
            <div id="body">

                <h1><span>Atendimentos agendados</span></h1>

                <ul>

                    <li>
                        <table>
                    <tr>
                        <td>NOME</td>
                        <td>SERVIÇO</td>
                        <td>FILIAL</td>
                        <td>DATA DE ATENDIMENTO</td>
                        <td>HORÁRIO PREFERENCIAL</td>
                    </tr>
                    
                    <!-- A PARTIR DAQUI OS DADOS DA TABELA DEVEM VIR DO BANCO DE DADOS -->
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                    </li>
                    
                </ul>
                
                
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
