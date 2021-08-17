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
                            <p class="SubTitulo">03.2 - Planejamento Patrimonial</p>
                            <hr>

                            <br>

                            <p><strong>Planejamento patrimonial é um conjunto de atividades que visa à alocação de recursos de uma entidade em investimentos de maneira eficiente, incluindo todo o processo de aquisição (identificação do bem a ser adquirido, realização de orçamentos com fornecedores, formas de pagamento, etc.) passando ao recebimento, incorporação, controle físico e de responsabilidade, mensuração, reavaliação, manutenção e desfazimento dos bens permanentes.</strong></p>

                            <p>Nos últimos tempos, temos visto um aumento da exigência da sociedade por uma melhor gestão de recursos públicos, em especial quanto à gestão do patrimônio público. Do outro lado, vemos a Administração Pública, pressionada pela promulgação da Lei de Responsabilidade Fiscal (Lei Complementar nº 101/2000), um interesse maior na gestão do patrimônio público, demonstrando à sociedade uma maior responsabilidade com os recursos cada vez mais escassos. Diante dessa nova postura, os órgãos e as entidades da Administração Pública veem tratando do assunto com maior empenho.</p>
                            
                            <p>As ferramentas de planejamento têm auxiliado as Administrações Públicas nesta etapa de gestão patrimonial, estruturando a atividade em etapas. </p>
   
          
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
                    <a href="Topico03.1.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.3.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>

