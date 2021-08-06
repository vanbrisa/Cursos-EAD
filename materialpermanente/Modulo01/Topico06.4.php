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
                    
                            <h2 class="Titulo">6.4) Registro e tombamento:</h2>

                            <br>
                            
                            <p class="Texto">Deverá ser efetuado o registro analítico de todos os bens de caráter permanente indicando os elementos necessários para a perfeita caracterização e localização de cada um deles, bem como garantindo a identificação do agente responsável por sua guarda e manutenção. 
                            <br><br>Atente-se para o fato de que todo e qualquer evento que resultar em incorporação, transferência, alienação ou perda de bem móvel, ou implicar a alteração do responsável pela sua guarda, deverá ser objeto de registro imediato no sistema SIGA/SGBM.
                            <br><br>Na prática, o registro dos bens móveis é realizado por intermédio do tombamento e do cadastramento. No tombamento, esses bens devem ser identificados por um código gravado em etiquetas metálicas ou por outros meios não removíveis facilmente, que servirão para controle posteriormente. Aqueles bens móveis em que não for possível fazer tal identificação, em função de suas características peculiares, deverão, ainda assim, ser identificados, usando-se, para tanto, outra forma. Uma vez tombados, esses bens devem ser cadastrados com todas as suas características, o que torna possível identificá-los.
                            <br><br>Também vale ressaltar que o bem móvel deverá ter seu registro efetuado na unidade de patrimônio, do órgão/entidade segundo as informações mínimas relativas ao registro conforme anexo III do Decreto Estadual nº 27.786 de 02 de maio de 2005 que padroniza os campos e informações nos formulários de uso geral no âmbito do Poder Executivo Estadual e dá outras providências:</p>

                            <ul>
                                <i class="fa fa-check-circle CorVerdeClaroEstado"></i> Identificação do órgão/entidade;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Especificação do bem com características físicas e técnicas;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Nº de identificação (tombo)
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Data de aquisição
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Nº e Data da Nota Fiscal ou do Termo específico (publicação no D.O.E)
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Nome do Fornecedor ou Cedente.
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Valor de aquisição do Bem.
                            </ul>

                            <p>Na fixação da plaqueta deverão ser observados os seguintes aspectos:</p>

                            <ul>
                                <i class="fa fa-check-circle CorVerdeClaroEstado"></i> Local de fácil visualização para efeito de identificação, preferencialmente na parte frontal do bem. 
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Evitar áreas que possam curvar ou dobrar a plaqueta. 
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Evitar fixar a plaqueta em partes que não ofereçam boa aderência. 
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Evitar áreas que possam acarretar a deterioração da plaqueta. 
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Não fixar a plaqueta apenas por uma das extremidades.
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Não fixar a plaqueta sobre alguma indicação importante do bem. 
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Os bens patrimoniais recebidos sofrerão marcação física antes de serem distribuídos aos setores.
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Os bens patrimoniais cujas características físicas ou a sua própria natureza impossibilitem a aplicação de plaqueta também terão número de tombamento, mas serão marcados em separado. 
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Em caso de perda, descolagem ou deterioração da plaqueta, o responsável pelo setor onde o bem está localizado deverá comunicar, impreterivelmente, o fato ao Gestor do Patrimônio do Órgão/Entidade. 
                            </ul>
                            



                                
                            


                            
          
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
