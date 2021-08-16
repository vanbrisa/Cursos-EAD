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
                    
                            <h2 class="Titulo">Tópico 03.1 - Lei de Responsabilidade Fiscal</h2>

                            <br>

                            <p>Com o advento da promulgação da Lei de Responsabilidade Fiscal (Lei Complementar nº 101, de 04 de maio de 2000), os agentes públicos perceberam a necessidade de um maior controle sobre a gestão do patrimônio público, uma vez que ele pertence a todos os cidadãos, dispondo de um capítulo inteiro para tratar do assunto.</p>

                            <p>A LRF (BRASIL, 2000) apresenta medidas destinadas à preservação do patrimônio público. A mais evidente é a que trata sobre o resultado da venda de bens móveis e imóveis e de direitos que integram o patrimônio público não poderem mais ser aplicado em despesas correntes, com exceção se a lei autorizativa destiná-la aos financiamentos dos regimes de previdência social, geral e própria dos servidores. Dessa forma, os recursos decorrentes da desincorporação de ativos por venda, que é receita de capital, devem ser aplicados em despesa de capital, provocando a desincorporação de dívidas (passivo), por meio da despesa de amortização da dívida ou o incremento de outro ativo, com a realização de despesas de investimento, de forma a manter preservado o valor do patrimônio público.</p>
                            
                            <p>Outra medida importante oferecida pela Lei de Responsabilidade Fiscal estabelece que a lei orçamentária poderá receber novos projetos (investimentos) somente após serem atendidas adequadamente os projetos em andamento e contemplada as despesas de conservação do patrimônio público. </p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-primary">
                                <p class="Texto">
                                    Temos observado que entre as diversas atribuições da Administração Pública está a gestão patrimonial, que consiste na aquisição, manutenção, controle e desfazimento do seu ativo permanente. Os estados, municípios e a União estão cada vez melhor aparelhado, tanto do ponto de vista administrativo quanto tecnológico, e tem atuado de forma mais rigorosa na fiscalização do uso e conservação do patrimônio público. Para manter um estado de controle e gestão sobre o patrimônio, os órgãos e entidades da Administração Pública necessitam realizar um bom planejamento patrimonial, as principais fases de desenvolvimento de um planejamento para gestão patrimonial, principalmente a distinção do planejamento nas atividades públicas e privadas.
                                </p>
                            </div>



                            



                            
          
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
                    <a href="Topico02.1.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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
