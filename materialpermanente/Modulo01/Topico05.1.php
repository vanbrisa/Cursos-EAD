<?php 
    // HEADER
    include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid Texto">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo">Tópico 05.1 - ATRIBUTOS ADICIONAIS A SEREM CONSIDERADOS NA CLASSIFICAÇÃO DE MATERIAIS:</h2>

                            <br>

                            <p>Devemos também considerar alguns atributos adicionais para melhor entender por que a classificação de materiais é tão importante para a gestão do estoque e do patrimônio:</p>

                            <ol>
                                <li><strong>Abrangência</strong> – A classificação deve tratar de uma gama de características dos materiais em vez de reunir apenas materiais para serem classificados sob uma única ótica. Características como: </li>
                                    <ul>
                                        <i class="fa fa-circle CorAzulEstado01"></i> Tamanho (comprimento, largura e altura);
                                        <br><i class="fa fa-circle CorAzulEstado01"></i> Densidade e Peso (por unidade ou volume);
                                        <br><i class="fa fa-circle CorAzulEstado01"></i> Forma (achatada, curva, compacta);
                                        <br><i class="fa fa-circle CorAzulEstado01"></i> Risco de danos (frágil, explosivo, contaminável, tóxico, corrosivo);
                                        <br><i class="fa fa-circle CorAzulEstado01"></i> Condição (Instável, pegajoso, úmido, perecível);
                                        <br><i class="fa fa-circle CorAzulEstado01"></i> Quantidade (relativa a intensidade de uso ou ao volume, no total e em tamanho de remessa ou por lote);
                                        <br><i class="fa fa-circle CorAzulEstado01"></i> Cronometria (regularidade, urgência, sazonal);
                                        <br><i class="fa fa-circle CorAzulEstado01"></i> Medidas Especiais (regulamentações, padrões internos da organização, critérios de operação).
                                    </ul>
                                <li> <strong>Flexibilidade:</strong> deve permitir interfaces entre os diversos tipos de classificação, de modo que se obtenha ampla visão do gerenciamento de estoques; em termos frequência de aquisição, quantidade em estoque, armazenagem, custo, assim como durabilidade no caso dos materiais permanentes.</li>
                                <li><strong>Praticidade:</strong> a classificação deve ser direta e simples atendendo os requerimentos que são efetivamente importantes para a gestão dos estoques na modalidade de operação da organização.</li>
                            </ol>

                            


                            
          
                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->
                    
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico06.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
