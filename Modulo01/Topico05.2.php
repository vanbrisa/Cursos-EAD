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
                    
                            <h2 class="Titulo">5.2 - FORMAS DE CLASSIFICAÇÃO DE MATERIAIS:</h2>

                            <br>

                            <p>Algumas formas de classificação são igualmente importantes para a maioria das organizações independentes da sua modalidade de operação são estas:</p>

                            <p>Quanto ao tipo de demanda, a classificação pode ser dividida em: </p>

                            <!-- Accordion Fase 01 - Begin  -->
                           <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <!-- item 01 -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Materiais de estoque: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>São materiais que devem existir em estoque e para os quais são determinados critérios e parâmetros de ressuprimento automático, com base na demanda prevista e na importância para a organização. Os critérios de ressuprimento fixados para esses materiais possibilitam a renovação do estoque sem a participação do usuário.
                                                <br>Os materiais de estoque geralmente são classificados quanto ao consumo anual e quanto à importância operacional:</p>

                                                
                                                <p><i class="fa fa-circle CorAzulEstado01"></i> <strong>Valor do consumo anual: </strong>Método pelo qual se determina a importância dos materiais em função do valor expresso pelo próprio consumo em determinado período. Utiliza-se como ferramenta de classificação a Curva ABC ou Curva de Pareto. Os materiais são classificados em A, B ou C:</p>

                                                <ul>
                                                    <li>Materiais A: materiais de grande valor de consumo;</li>
                                                    <li>Materiais B: materiais de médio valor de consumo;</li>
                                                    <li>Materiais C: materiais de baixo valor de consumo.</li>
                                                </ul>

                                                <p><i class="fa fa-circle CorAzulEstado01"></i><strong> Importância operacional: </strong> Adota-se a classificação da importância operacional, visando identificar materiais imprescindíveis ao funcionamento da organização;</p>

                                                <ul>
                                                    <li>Materiais X: materiais de aplicação não importante, com possibilidade de uso de similar existente na organização;</li>
                                                    <li>Materiais Y: materiais de importância média, com ou sem similar na organização;</li>
                                                    <li>Materiais Z: materiais de importância vital sem similar na organização, cuja falta acarreta a paralisação de uma ou mais fases operativas.</li>
                                                </ul>

                                                <p>Em se tratando de organização industrial, a seleção XYZ pode ser facilitada por meio das seguintes indagações:</p>

                                                <ul>
                                                    <li>Material é imprescindível ao equipamento?</li>
                                                    <li>Equipamento pertence à linha de produção?</li>
                                                    <li>Material possui similar?</li>
                                                </ul>

                                                <ol>
                                                    <li><strong>Materiais que não são de estoque:</strong> São materiais de demanda imprevisível para os quais não são definidos parâmetros para o ressuprimento automático. São características desses materiais: </li>

                                                    <ul>
                                                        <li>Inexistência de regularidade de consumo;</li>
                                                        <li>Aquisição somente é efetuada a partir da solicitação do usuário;</li>
                                                        <li>São comprados para utilização imediata;</li>
                                                        <li>São debitados no centro de custo de aplicação;</li>
                                                        <li>Podem ser comprados para uso posterior, ficando temporariamente estocado no almoxarifado.</li>
                                                    </ul>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- item 02 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Materiais críticos; </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>São materiais de reposição específica de um equipamento ou de um grupo de equipamentos iguais, cuja demanda não é previsível e cuja decisão de estocar é tomada com base na análise de risco que a organização corre, caso esses materiais não estejam disponíveis quando necessário. Os materiais críticos podem ser identificados da seguinte forma:</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura004.png" data-bs-toggle="modal" data-bs-target="#Imagem004">
                                                        <img class="img-fluid" src="imagens/Figura004.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>

                                                <!-- Imagem 004 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura004.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Imagem 004 - End -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- item 03 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Perecibilidade:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>É o critério de classificação pelo qual o material é adquirido em função da probabilidade ou não de perecer ou de desaparecer suas propriedades físico-químicos. Esse critério permite tomar as seguintes medidas:</p>

                                                <ol>
                                                    <li>Determinar lotes de compra mais racionais;</li>
                                                    <li>Programar revisões periódicas para detectar falhas de estocagem;</li>
                                                    <li>Selecionar adequadamente os locais de estocagem;</li>
                                                    <li>Utilizar técnicas adequadas de manuseio e transporte;</li>
                                                    <li>Orientar os funcionários quanto aos cuidados a serem observados.</li>
                                                </ol>

                                                <p>Os materiais podem ser classificados em perecíveis e não perecíveis. Os materiais perecíveis podem ser classificados ainda:</p>

                                                <ol>
                                                    <li>Pela ação da umidade;</li>
                                                    <li>Pela limitação do tempo;</li>
                                                    <li>Instáveis;</li>
                                                    <li>Voláteis;</li>
                                                    <li>Por contaminação pela água;</li>
                                                    <li>Por contaminação por partículas sólidas;</li>
                                                    <li>Pela ação da gravidade;</li>
                                                    <li>Por queda, colisão ou vibração;</li>
                                                    <li>Pela mudança de temperatura;</li>
                                                    <li>Pela ação da luz;</li>
                                                    <li>Por ação de atmosfera agressiva;</li>
                                                    <li>Pela ação de animais.</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- item 04 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Periculosidade;   </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Visa identificar materiais que, por suas características físico-químicas, possuam incompatibilidade com outros, oferecendo riscos à segurança durante o manuseio, transporte e armazenagem desses materiais.</p>
                                            </div>
                                        </div>
                                    </div> 

                                    <!-- item 05 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Possibilidade de fazer ou comprar: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Essa classificação determina quais os materiais que poderão ser recondicionados, fabricados internamente ou comprados. O custo de recuperação de um material deve ser inferior ao de compra de um novo.</p>
                                            </div>
                                        </div>
                                    </div> 

                                    <!-- item 06 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item06">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            <strong>Tipos de estocagem:  </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <ol>
                                                    <i class="fa fa-circle CorAzulEstado01"></i> Estocagem permanente: deve sempre existir saldo no almoxarifado;
                                                    <br><i class="fa fa-circle CorAzulEstado01"></i> Estocagem temporária: materiais que necessitam ficar estocados no almoxarifado durante determinado tempo até sua utilização.
                                                </ol>
                                            </div>
                                        </div>
                                    </div> 

                                    <!-- item 07 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item07">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            <strong>Dificuldade de aquisição:   </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> As dificuldades na obtenção de materiais podem provir de: fabricação especial, escassez no mercado, sazonalidade, monopólio ou tecnologia exclusiva, logística sofisticada, ou importações.
                                                <br>Quanto à dificuldade de aquisição, os materiais podem ser classificados em: F – fácil aquisição; - D – difícil aquisição. Os principais benefícios desse tipo de classificação são:
                                                </p>

                                                <ol>
                                                    <i class="fa fa-circle CorAzulEstado01"></i> Dimensionar os níveis de estoque;
                                                    <br><i class="fa fa-circle CorAzulEstado01"></i> Selecionar o método a ser adotado para ressuprimento;
                                                    <br><i class="fa fa-circle CorAzulEstado01"></i> Propiciar maior experiência aos compradores.
                                                </ol>
                                            </div>
                                        </div>
                                    </div> 

                                    <!-- item 08 -->
                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item08">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                            <strong>Mercado fornecedor  </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Os materiais desse grupo serão classificados em função do: </p>

                                                <ol>
                                                    <i class="fa fa-circle CorAzulEstado01"></i> Mercado nacional;
                                                    <br><i class="fa fa-circle CorAzulEstado01"></i> Mercado estrangeiro;
                                                    <br><i class="fa fa-circle CorAzulEstado01"></i> Materiais em processo de nacionalização.
                                                </ol>

                                                <p>O mapa mental a seguir auxilia na visualização dos diversos tipos de classificação de materiais:</p>

                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>

                                                <!-- Imagem 01 - MODAL -->
                                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                                            </div>
                                                            <div class="modal-footer text-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Imagem 01 - End -->
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
