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
                    
                            <h2 class="Titulo">6.8) Saída provisória:</h2>

                            <br>
                            
                            <p class="Texto">Caracteriza-se pela movimentação de bens patrimoniais para fora da instalação ou dependência onde estão localizados, em decorrência da necessidade de conserto, manutenção ou da sua utilização temporária por outro órgão ou entidade, quando devidamente autorizado. 
                            <br><br>Qualquer que seja motivo da saída provisória, deverá ser autorizada pela Coordenação ou Gerência Administrativa Financeira do órgão ou entidade onde o bem está alocado por intermédio da AUTORIZAÇÃO DE SAÍDA PROVISÓRIA que deve especificar a descrição e tombo do bem, o usuário signatário do Termo de Responsabilidade e a data de previsão de retorno. 
                            <br><br>A saída de veículo, quando de interesse do serviço, não é caracterizada como saída provisória, devendo ser efetuada de acordo com procedimento adotado para controle de uso em cada órgão ou entidade. 
                            </p>

                            

                                
                            


                            
          
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
