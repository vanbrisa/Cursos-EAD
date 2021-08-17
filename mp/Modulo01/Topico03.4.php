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

                            <!-- Sub Título -->
                            <p class="SubTitulo">03.4 - Fases do Planejamento Patrimonial</p>
                            <hr>

                            <br>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-warning">
                                <p>
                                    O planejamento pode ser entendido como um processo interativo, dividido em fases diferenciadas: 
                                    <ol>
                                        <li><strong>Diagnóstico:</strong> demonstra o conhecimento da realidade.</li>
                                        <li><strong>Política:</strong> fase em que se define os objetivos.</li>
                                        <li><strong>Estratégia:</strong> indica as opções a serem seguidas para alcançar os objetivos.</li>
                                        <li><strong>Plano:</strong> é uma das ferramentas mais eficientes e simples de um planejamento, a qual deve possibilitar, via documento, todas as ações planejadas para atingir os objetivos desejados.</li>
                                        <li><strong>Execução:</strong> é a fase em que as ações planejadas serão colocadas em prática.</li>
                                        <li><strong>Controle:</strong> é fundamental desenvolver estratégias para o acompanhamento da evolução do plano e, quando identificado algum problema, deve-se identificar suas causas e atribuir uma solução para sua resolução.</li>
                                    </ol>
                                </p>
                            </div>
                            
                            <p>O Decreto Estadual <strong>nº Nº32.564</strong>, de 26 de março de 2018 que dispõe sobre diretrizes para gestão de almoxarifado e bens móveis de propriedade dos órgãos e entidades públicas estaduais na esfera do Poder Executivo, estabelece em seu arts. 1º até o art. 13 as bases iniciais do planejamento patrimonial (bens de consumo e bens móveis) do Poder Executivo do Estado do Ceará.</p>

                            

                            



                            
          
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
                    <a href="Topico03.3.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
