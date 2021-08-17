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
                            <p class="SubTitulo">04.3 - Exemplos de itens considerados materiais de consumo</p>
                            <hr>

                            <br>

                           <!-- Accordion Fase 01 - Begin  -->
                           <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Material de expediente </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Agenda, alfinete de aço, almofada para carimbos, apagador, apontador de lápis, arquivo para disquete, bandeja para papéis, bloco para rascunho bobina papel para calculadoras, borracha, caderno, caneta, capa e processo, carimbos em geral, cartolina, classificador, clipe cola, colchete, corretivo, envelope, espátula, estêncil, estilete, extrator de grampos, fita adesiva, fita para máquina de escrever e calcular, giz, goma elástica, grafite, grampeador, grampos, guia para arquivo, guia de endereçamento postal, impressos e formulário em geral, intercalador para fichário, lacre, lápis, lapiseira, limpa tipos, livros de ata, de ponto e de protocolo, papéis, pastas em geral, percevejo, perfurador, pinça, placas de acrílico, plásticos, porta-lápis, registrador, régua, selos para correspondência, tesoura, tintas, toner, transparências e afins</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Material de cozinha </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Abridor de garrafa, açucareiros, artigos de vidro e plástico, bandejas, coadores, colheres, copos, ebulidores, facas, farinheiras, fósforos, frigideiras, garfos, garrafas térmicas, paliteiros, panelas, panos de cozinha, papel-alumínio, pratos, recipientes para água, suportes de copos para cafezinho, tigelas, velas, xícaras e afins.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Material de limpeza</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>Álcool etílico, anticorrosivo, aparelho de barbear descartável, balde plástico, bomba para inseticida, capacho, cera, cesto para lixo, creme dental, desinfetante, desodorizante, detergente, escova de dente, escova para roupas e sapatos, espanador, esponja, estopa, flanela, inseticida, lustra-móveis, mangueira, naftalina, pá para lixo, palha de aço, panos para limpeza, papel higiênico, pasta para limpeza de utensílios, porta-sabão, removedor, rodo, sabão, sabonete, saco para lixo, saponáceo, soda cáustica, toalha de papel, vassoura e afins.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Combustíveis e lubrificantes </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Aditivos, álcool hidratado, fluido para amortecedor, fluido para transmissão hidráulica, gasolina, graxas, óleo diesel, óleo para cárter, óleo para freio hidráulico e afins.</p>
                                            </div>
                                        </div>
                                    </div> <br>

                                    <!-- Importante -->
                                    <div class="ImportanteCaixa">
                                        <p class="ImportanteTitulo"> Importante</p>
                                        <p class="ImportanteTexto">A diferenciação entre material de consumo e material permanente é a chave para que seja efetuado o cálculo da depreciação dos bens. Quando um material é classificado como material permanente (patrimônio) torna-se obrigatória a definição de outros parâmetros que são: a taxa de depreciação, a vida útil econômica do bem e o percentual de valor residual para que tal cálculo seja possível. O Decreto Estadual nº 31.340 de 05 de novembro de 2013 que aprova o regulamento para depreciação, amortização, exaustão, reavaliação e redução ao valor recuperável do patrimônio público do Estado do Ceará, traz em seu ANEXO I a tabela com a taxa de depreciação, vida útil e percentual de valor residual das classes de bens constantes no Catálogo de Bens, Materiais e Serviços do Governo Estadual do Ceará.</p>
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
                    <a href="Topico04.2.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico05.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
