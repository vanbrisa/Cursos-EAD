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
            
                <div class="main-content container-fluid" id="#Apresentacao"> <!-- Begin main-content -->
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title Texto">
                            
                            <h2 class="Titulo">01.2 - DIFERENCIAÇÃO DE BENS TANGÍVEIS E INTANGÍVEIS:</h2>

                            <br>

                            <p>Como já vimos anteriormente a representação do patrimônio de uma entidade, na contabilidade, está dividida em três grandes grupos: Ativo, Passivo e Patrimônio Líquido. Aqui, o que nos interessa é o Ativo, pois é onde se encontram os bens tangíveis e intangíveis.</p>
                            
                            <p>O <strong>Ativo</strong> de uma entidade é composto por bens (estoques, automóveis, móveis e utensílios, etc.) e direitos (créditos a receber, aplicações financeiras, etc.). Ele é subdividido em dois grandes subgrupos: <strong>Ativo Circulante e Ativo Não Circulante</strong>. O Circulante é onde são registrados os bens e direitos que podem ser convertidos em moeda em até 365 dias. Já no Não Circulante estão registrados os bens e direitos que a entidade possui, mas que não pode (ou não tem a intenção) de transformar em moeda nos próximos 365 dias. Esse subgrupo está dividido em 4 categorias: </p>

                            <!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Realizável a Longo Prazo:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Correspondem a bens e direitos que a entidade possui a intenção de convertê-lo em moeda, mas não há expectativa de que isso ocorra em um prazo inferior a 365 dias, sem que haja considerável perda de seu valor contábil. Aqui podemos ter registrados, por exemplo, aplicações financeiras de longo prazo, depósitos bancários, despesas antecipadas de longo prazo, etc.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Investimentos: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>São registrados nesta categoria os investimentos em outras entidades ou aqueles de caráter permanente ou indefinido, como investimento em ouro, obras de arte, propriedade para investimento, etc.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Imobilizado (ou bens tangíveis): </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Aqui são registrados os bens de natureza permanente que são utilizados para a manutenção da atividade da entidade. Eles precisam se apresentar na forma tangível (bens corpóreos), ter uma vida útil de no mínimo 2 anos e a entidade não pode ter a intenção de vendê-los. Alguns exemplos são terrenos, edificações, máquinas e equipamentos, etc.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Intangível: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> As entidades públicas frequentemente despendem recursos ou contraem obrigações com a aquisição, o desenvolvimento, a manutenção ou o aprimoramento de recursos intangíveis, como conhecimento científico ou técnico; projeto e implantação de novos processos ou sistemas; licenças; propriedade intelectual; e marcas registradas (incluindo nomes comerciais e títulos de publicações). Exemplos de itens que se enquadram nessas categorias são: softwares; patentes; direitos autorais; direitos sobre filmes cinematográficos; listas de usuários de um serviço; licenças de pesca; quotas de importação adquiridas; e relacionamentos com usuários de um serviço.</p>
                                            </div>
                                        </div>
                                    </div> 

                            

                                                             
                            
                            
                            <!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                            </div> <!-- End page-title -->                            
                        </div> <!-- End page-title -->

                        <div class="col-md-1"></div>
                    </div> <!-- End row -->
                    
                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
