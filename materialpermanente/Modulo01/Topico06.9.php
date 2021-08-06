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
                    
                            <h2 class="Titulo">6.9) Controle Físico de Bens Móveis:</h2>

                            <br>
                            
                            <p class="Texto">É o conjunto de procedimentos, adotados pela Administração Pública, voltado à verificação da localização, do estado de conservação, bem como do prazo de validade certificados de garantia e dos contratos de manutenção dos bens patrimoniais. O controle físico tem caráter permanente, em decorrência da própria necessidade de acompanhamento da posição físico-financeira do ativo imobilizado de cada Órgão e Entidade. O controle físico envolve as seguintes modalidades:</p>

                            <!-- Accordion Fase 01 - Begin  -->
                           <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Controle de Localização: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Consiste na verificação sistemática do local onde está situado o bem, inclusive da Unidade Administrativa que o detém, com vista à determinação fidedigna das informações existentes no cadastro sobre essa localização. A divergência constatada entre a localização real dos bens e a que constar no relatório de cadastro, deve ser imediatamente corrigida pela Gerência Setorial de Patrimônio. </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Controle do Estado de Conservação: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Consiste no acompanhamento sistemático do estado de conservação dos bens patrimoniais, objetivando manter sua integridade física, observando-se a proteção do bem contra agentes da natureza, mediante a tomada de medidas para evitar a corrosão, oxidação, deterioração e outros agentes que possam reduzir a sua vida útil.
                                                <br><br>A manutenção dos bens patrimoniais será realizada com pessoal próprio das Unidades Administrativas onde o bem está alocado ou por empresa contratada para esse fim, e será solicitada pelas Gerências, à Gerência Setorial de Patrimônio.
                                                <br><br>A verificação do estado físico dos bens será realizada mediante inventários locais periódicos, realizados por iniciativa da Gerência Setorial de Patrimônio, ou no decorrer do inventário anual, podendo ser identificadas as seguintes condições de conservações:</p>
                                                <ol>
                                                    <li>Novo;</li>
                                                    <li>Bom;</li>
                                                    <li>Recuperável;</li>
                                                    <li>Inservível.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Controle de Utilização:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Consiste na identificação e análise, pela Gerência Setorial de Patrimônio, das condições de utilização dos bens patrimoniais, observando o seguinte:</p>

                                                <ol>
                                                    <li>Conhecimento das condições de utilização do bem, em função das atividades desenvolvidas pela Unidade Administrativa;</li>
                                                    <li>Cumprimento das normas técnicas do fabricante, no que se refere à capacidade operacional e manuseio.</li>
                                                    <li>Compatibilidade entre a finalidade e características do bem, com a natureza dos serviços a ele atribuídos.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Controle de Garantia e Manutenção:  </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Consiste no acompanhamento do vencimento dos prazos de garantia e dos contratos de manutenção; os contratos deverão ser controlados pela Gerência Setorial de Patrimônio de cada órgão ou entidade, observando rigorosamente o seu prazo de vencimento, bem como a data de expiração da garantia.
                                                <br><br>Nenhum bem pode ser reparado, restaurado ou revisado sem autorização da Gerência Setorial de Patrimônio. Serviços realizados por terceiros, não autorizados, em bem em período de garantia, é irregularidade passível de penalização </p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong>Dação em Pagamento:   </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> A chamada dação em pagamento corresponde ao recebimento de bens para pagamento de débitos constituídos ou inscritos em Dívida Ativa. Nesse caso, é necessária a avaliação do bem a ser entregue para a quitação da dívida junto ao ente público.</p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            <strong>Adjudicação: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Existe também a hipótese de incorporação por adjudicação de bens que foram penhorados em decorrência de processos de cobrança judicial de créditos do ente público, em que este aceita recebê-los como forma de quitação de tais créditos.</p>
                                            </div>
                                        </div>
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
