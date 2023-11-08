<!DOCTYPE html>
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

                <h1>Agende Atendimento</h1>
                <ul>
                <li>Nome</li>
                    <li>
                        <input type="text" class="textbox" required="" placeholder="Nome Completo" name="txtNome" />
                    </li>
                <li>Serviço</li>
                    <li>
                            <select name="selServico" class="form-control">
                            <option value=""> Selecione um serviço</option>
                             </select>
                    </li>
                <li>Filial</li>
                    <li>
                            <select name="selFilial" class="form-control">
                            <option value=""> Selecione uma filial</option>
                             </select>
                    </li>
                <li>Data</li>
                    <li>
                        <input type="date" class="textbox" required="" placeholder="DD/MM/AAAA" name="txtData" />
                    </li>
                    <li>Horário preferencial para atendimento</li>
                    <li>
                            <select name="selServico" class="form-control">
                            <option value="">07:00 às 09:00</option>
                            <option value="">09:00 às 10:30</option>
                            <option value="">10:30 às 12:00</option>
                            <option value="">13:00 às 15:00</option>
                            <option value="">15:00 às 16:30</option>
                            <option value="">16:30 às 19:00</option>
                            </select>
                    </li>
                    <li>
                        <input type="button" value="Enviar" class="botao"/>
                    </li>
                </ul>
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>