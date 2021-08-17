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
                    
                            <h2 class="Titulo">6.3) Incorporação Patrimonial:</h2>

                            <br>
                            
                            <p class="Texto">É o processo de ingresso físico de um material permanente no acervo patrimonial do Estado, mediante aquisição, doação, construção, confecção ou produção própria, permuta, dação em pagamento ou adjudicação.</p>

                            <!-- Accordion Fase 01 - Begin  -->
                           <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Aquisição:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Na aquisição a incorporação é realizada quando o material permanente é entregue no setor de almoxarifado. Como regra, os seguintes procedimentos são observados quando da aquisição de materiais permanentes:</p>

                                                <ul>
                                                    <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ordens de Compra – Todas as compras devem ser efetuadas mediante Ordens de Compra devidamente formalizadas, que contenham o código e a descrição detalhada dos materiais permanentes a serem adquiridos oriundos do sistema de Catálogo, assim como informações da quantidade, preço, condições de pagamento além da assinatura da autoridade requisitante competente.
                                                    <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Licitação – Previamente à aquisição deve ser procedida à licitação, visando a selecionar a proposta mais vantajosa à Administração Pública e a promoção do desenvolvimento nacional sustentável, ou formalizada a sua dispensa ou inexigibilidade, de acordo com a legislação vigente e nos casos nela previstos (artigos 24 a 26 da Lei Federal nº 8.666/93).
                                                    <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Contrato – O instrumento de contrato deve ser formalizado nos casos em que a legislação assim o exigir (Lei Federal nº 8.666/93).
                                                    <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Gravame da despesa - A despesa deve ser previamente empenhada, nos termos da Lei Federal nº 4.320/64, com emissão da nota de empenho correspondente, que deverá ser entregue ao fornecedor.
                                                    <i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Recebimento – Os materiais permanentes adquiridos devem ser recebidos no setor de almoxarifado, ocasião em que se efetuará a conferência do que está sendo entregue com as especificações da Ordem de Compra.
                                                </ul>

                                                <p>Essa fase é essencial para a liquidação da despesa, a qual deve ser procedida pelo setor financeiro do órgão à vista da documentação pertinente, devendo ser verificado, inclusive, se as especificações constantes na nota fiscal coincidem com as da nota de empenho e do edital de licitação, quando for o caso.<br><br>O processo de liquidação da despesa deverá estar acompanhado, além de documentos comprobatórios do respectivo crédito, dos documentos de tombamento e cadastramento, que comprovem que o bem está incluído no sistema SIGA/SGBM, e quando da sua colocação em uso do Termo de Responsabilidade Patrimonial, o qual identificará o departamento e o nome da pessoa que responderá imediatamente pelo controle do bem.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Doação: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> O processo administrativo de doação de bens móveis (material permanente) ao ente público deverá ser formalizado com o respectivo Termo de Doação (público ou particular), com a manifestação do ordenador de despesa de que aceita o bem doado, bem como deverá conter a nota fiscal ou outro documento equivalente com a descrição e o valor estimado do bem objeto da doação.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Construção, Confecção ou Produção Própria:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Nos casos em que os bens tenham sido construídos, confeccionados ou produzidos no próprio órgão, deverá haver indicação precisa de suas características e de seu valor, por intermédio da apropriação dos custos incorridos em sua elaboração, apurando-se, assim, o valor final do bem, para fins de registro patrimonial e contábil. O bem também deverá ser incluído no sistema de Catálogo.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Permuta:   </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> A permuta consiste no recebimento de bens, públicos ou particulares, em troca de outros da mesma espécie ou de espécie diferente. A permuta de bem público necessita de avaliação prévia, nos termos do artigo 17 da Lei Federal nº 8.666/93.</p>
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
