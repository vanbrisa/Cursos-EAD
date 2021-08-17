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
                            
                            <h2 class="Titulo">01 - O Conceito de Patrimônio</h2>
                            <br>
                         
                            <p><strong>Objetivo:</strong> Compreender o conceito de patrimônio e como está estruturado o seu sistema de controle segundo a lei nº 4.320, assim como identificar dentro do conjunto de bens direitos e obrigações o que são bens tangíveis e a necessidade de depreciação.</p>
                            
                            <p>De uma forma geral podemos conceituar o “Patrimônio” como a reunião de objetos administrados por uma determinada entidade (seja esta pública ou privada) para atingir seus objetivos fundamentais. No entanto, é imprescindível que tais objetos, além de possuírem forte vinculação com os objetivos da entidade sejam também avaliáveis em moeda.</p>

                            <p>Ampliando o conceito de patrimônio do ponto de vista contábil, o patrimônio é um conjunto de bens, direitos e obrigações pertencentes a uma pessoa física ou jurídica. Interpretando isso de uma forma prática e considerando a mensuração do patrimônio em moeda, este será formado pelo somatório dos valores dos BENS mais os DIREITOS (ativos), subtraídos pelo valor das OBRIGAÇÕES (passivo) possuídos por uma pessoa ou entidade. Assim, entende-se que o patrimônio é estruturado da seguinte forma:</p>

                            <!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Ativo</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>São os bens e direitos que uma entidade possui e que podem ser convertidos em dinheiro. É a parte positiva do patrimônio e identifica onde os recursos da entidade foram aplicados. Para que um ativo possa ser considerado desta forma, é necessário que ele seja considerado um bem ou um direito para a entidade, seja de propriedade da mesma (tem que ter nota fiscal em nome da entidade se for um bem, por exemplo), poder ter seu valor monetário calculado e gerar benefícios futuros para a entidade.</p>
                                                <p>Em contabilidade, pode ser classificado como ativo tudo o que pode ser convertido em dinheiro de alguma forma. Por exemplo, o dinheiro em banco é um ativo, o estoque da entidade pode ser vendido e virar dinheiro, então é um ativo, o carro da entidade pode ser vendido e virar dinheiro, então é um ativo. Todos estes itens são de propriedade da entidade, tem seu valor estabelecido em nota fiscal ou outro documento fiscal e geram benefícios futuros.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Passivo</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>São todas as obrigações e dívidas financeiras de uma entidade, derivadas de eventos passados, cujos pagamentos se esperam que resultem em saídas de recursos capazes de gerar benefícios econômicos ou potencial de serviços para a entidade. Assim, fazem parte dos passivos de uma entidade as despesas relacionadas a pagamento de salários, impostos, tributos, empréstimos, fornecedores, entre muitas outras. Ou seja, o passivo também é visto como o saldo redutor do valor do patrimônio de uma entidade. Isso quer dizer que, quanto maior ele for, menos valor a entidade terá.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Patrimônio Líquido</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>É o valor residual dos ativos da entidade depois de deduzidos todos seus passivos. Em linhas gerais, corresponde à riqueza de uma entidade, o que ela possui descontadas as contas que precisa pagar. Ele representa a fonte interna de recursos e o quanto tem investido na entidade.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <br><br>

                            

                                                             
                            
                            
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
                    <a href="Apresentacao.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico01.1.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
