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
                            <p class="SubTitulo">03.3 - Etapas do Planejamento Patrimonial</p>
                            <hr>

                            <br>

                            <p>Planejar todas as etapas é essencial para a implantação de uma gestão patrimonial eficiente. Uma das formas de auxiliar o gestor neste processo é a utilização de uma metodologia de gestão patrimonial conhecida como 5W1H que consiste em fazer seis perguntas antes de fazer qualquer coisa ou de tomar decisão. Veja os tópicos a seguir: </p>

                            <!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>WHO: Quem é o responsável pela gestão patrimonial?</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Definição de quem ou que grupo planeja. Essa etapa é importante especialmente para instituições em que não existe cultura de planejamento, pois busca ajudar a esclarecer os efeitos positivos das ações de planejamento no dia a dia de trabalho dos envolvidos.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>WHAT: O que planejar? </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Nesta etapa é definido o bem que será planejado, investido e controlado. A avaliação deverá considerar, preliminarmente, se o bem é imobilizado ou apenas material de consumo da entidade. O conceito de imobilizado define que são os bens necessários à manutenção das atividades da entidade pública, caracterizados por apresentar-se na forma tangível (edifícios, máquinas, etc.).</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>WHERE: Onde controlar os bens patrimoniais (ativo imobilizado)? </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>O controle pode ser centralizado pelo órgão do topo hierárquico ou descentralizado, transferindo assim os controles aos níveis mais baixos da hierarquia governamental.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>WHEN: Quando se inicia e quando termina o controle dos bens patrimoniais? </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Na realização do planejamento é necessária a execução de procedimentos específicos para, então, iniciar o controle dos bens patrimoniais.</p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong>WHY: Por que controlar os bens patrimoniais? </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> O controle dos bens patrimoniais possibilita a gestão do risco de eventuais sinistros e pode evitar investimentos desnecessários.</p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            <strong>HOW: Como controlar os bens patrimoniais? </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Registros de bens podem ser mantidos manualmente ou por sistemas computadorizados de controle patrimonial, dependendo do volume e distribuição física dos bens patrimoniais da entidade.</p>
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
                    <a href="Topico03.2.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.4.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
