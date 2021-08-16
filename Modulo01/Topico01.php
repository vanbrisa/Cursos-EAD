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
                            
                            <h2 class="Titulo">Tópico 01 - O CONCEITO DE PATRIMÔNIO:</h2>

                            <br>
                         
                            <p><strong>Objetivos:</strong> Compreender o conceito de patrimônio e como está estruturado o seu sistema de controle segundo a lei nº 4.320, assim como identificar dentro do conjunto de bens direitos e obrigações o que são bens tangíveis e a necessidade de depreciação.</p>
                            
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
                                                <p>são os bens e direitos que uma entidade possui e que podem ser convertidos em dinheiro. É a parte positiva do patrimônio e identifica onde os recursos da entidade foram aplicados. Para que um ativo possa ser considerado desta forma, é necessário que ele seja considerado um bem ou um direito para a entidade, seja de propriedade da mesma (tem que ter nota fiscal em nome da entidade se for um bem, por exemplo), poder ter seu valor monetário calculado e gerar benefícios futuros para a entidade.</p>
                                                <p>Em contabilidade, pode ser classificado como ativo tudo o que pode ser convertido em dinheiro de alguma forma. Por exemplo, o dinheiro em banco é um ativo, o estoque da entidade pode ser vendido e virar dinheiro, então é um ativo, o carro da entidade pode ser vendido e virar dinheiro, então é um ativo. Todos estes itens são de propriedade da entidade, tem seu valor estabelecido em nota fiscal ou outro documento fiscal e geram benefícios futuros.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>PASSIVO:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>São todas as obrigações e dívidas financeiras de uma entidade, derivadas de eventos passados, cujos pagamentos se esperam que resultem em saídas de recursos capazes de gerar benefícios econômicos ou potencial de serviços para a entidade. Assim, fazem parte dos passivos de uma entidade as despesas relacionadas a pagamento de salários, impostos, tributos, empréstimos, fornecedores, entre muitas outras. Ou seja, o passivo também é visto como o saldo redutor do valor do patrimônio de uma entidade. Isso quer dizer que, quanto maior ele for, menos valor a entidade terá.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>PATRIMÔNIO LÍQUIDO:</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase03">
                                            <div class="accordion-body">
                                                <p>é o valor residual dos ativos da entidade depois de deduzidos todos seus passivos. Em linhas gerais, corresponde à riqueza de uma entidade, o que ela possui descontadas as contas que precisa pagar. Ele representa a fonte interna de recursos e o quanto tem investido na entidade.</p>
                                            </div>
                                        </div>
                                    </div>

                            <!-- Sub Título -->
                            <p class="SubTitulo">01.1 - O PATRIMÔNIO PÚBLICO</p>
                            <hr>
                                

                            <p>O Estado enquanto organizado politicamente como nação, tem amplo poder incluindo a capacidade de estabelecer e fazer cumprir requisitos legais e alterar esses requisitos é soberano para exercer tal poder sobre todas as coisas que se encontra em seu território. Tudo o que pertencer a particulares, ou não pertencer a ninguém, ficará sujeito às limitações administrativas impostas pelo Estado. 
                            
                            <p>Este poder é denominado domínio público. Contudo, apesar de possuir o domínio público sobre o que está em seu território, o patrimônio público é constituído somente pelos bens dos quais o Estado possui o direito de uso pessoal e real.</p>

                            <p>O Conselho Federal de Contabilidade em sua colaboração ao esforço de convergência da contabilidade pública brasileira às Normas Internacionais de Contabilidade, em uma de suas primeiras publicações sobre o tema, especificamente a norma NBCT SP Nº 16.2, conceitua:</p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success">
                                <p class="Texto">
                                    <em>Patrimônio Público é o conjunto de direitos e bens, tangíveis ou intangíveis, onerados ou não, adquiridos, formados, produzidos, recebidos, mantidos ou utilizados pelas entidades do setor público, que seja portador ou represente um fluxo de benefícios, presente ou futuro, inerente à prestação de serviços públicos ou à exploração econômica por entidades do setor público e suas obrigações.</em>
                                </p>
                            </div>

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">Diante da abrangência desse conceito pudemos interpretar que o patrimônio público engloba o patrimônio de todas as entidades que compõem a Administração Pública ou seja: tanto as entidades das Administrações Públicas diretas, autárquicas e fundacionais da União, Estados, Distrito Federal e Municípios, quanto às empresas públicas, incluindo a parte do capital estatal nas sociedades de economia mista, que também são tratados como patrimônio público.</p>
                            </div>
                            <hr>


                            <p>A Contabilidade Pública é um ramo da contabilidade regido pela Lei 4.320, de 17 de março de 1964. Seu objetivo é o controle sistemático dos recursos econômico-financeiros do Estado, por intermédio das ações administrativas de seus agentes – União, Estados, Municípios e Distrito Federal.</p>

                            <p>Segundo a Lei 4.320, podemos definir a Contabilidade Pública como a parte da contabilidade que coleta, registra, controla e analisa os atos e os fatos da Fazenda Pública; ela reflete o Patrimônio Público e suas variações, bem como acompanha e demonstra a execução do orçamento; diferindo das demais contabilidades porque os seus procedimentos estão ligados diretamente à Administração Pública, cuja ordenação se faz por meio de leis e regulamentos.</p>

                            <p>A Contabilidade pública é estruturada, segundo a Lei nº 4.320/64, em quatro sistemas contábeis que interagem entre si, objetivando o acompanhamento orçamentário, a composição financeira e patrimonial, bem como a evidenciação de compromissos assumidos pela Administração Pública, nas contas de compensação, ou seja, os sistemas de contas da Contabilidade Pública classificam-se em: Sistema Orçamentário, Sistema Financeiro, Sistema Patrimonial e Sistema de Compensação.</p>
                            
                            <p>Daremos aqui enfoque ao Sistema Patrimonial que é constituído das contas que registram as movimentações que concorrem ativa e passivamente para a formação do patrimônio da entidade, ou seja, são registrados os bens patrimoniais (móveis, imóveis, estoques, créditos, obrigações, valores, operações de crédito, dentre outras), originadas ou não da execução orçamentária. É registrado também no Sistema Patrimonial o resultado econômico do exercício.</p>
                            
                            <p>No Sistema Patrimonial os lançamentos que correspondem a incorporação ou desincorporação de ativos e passivos são feitos isoladamente dentro deste sistema, ainda que o fato venha a motivar uma entrada ou saída de recurso do Sistema Financeiro.</p>

                            <p>Vale ressaltar que as contas patrimoniais registram valores sintéticos, que para serem conciliados periodicamente, necessitam de um controle auxiliar denominado controle administrativo, os arts. 94 e 95 da <strong>lei nº 4.320/64</strong> expressa o seguinte:</p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success">
                                <p class="Texto">
                                    <em><strong>Art. 94.</strong> Haverá registros analíticos de todos os bens de caráter permanente, com indicação dos elementos necessários para a perfeita caracterização de cada um deles e dos agentes responsáveis pela sua guarda e administração.
                                    
                                    <br><strong>Art. 95</strong> A contabilidade manterá registros sintéticos dos bens móveis e imóveis.</em>
                                </p>
                            </div>

                            <p>Apesar de não ser objeto da lei nº 4.320/64, para as entidades públicas de administração direta, no sistema patrimonial deve ser procedido o registro da depreciação dos bens móveis e imóveis, levando-a para a conta de resultados em contrapartida com a conta de depreciação acumulada.</p>

                            <p>Ao longo do tempo, a Administração Pública esteve voltada para os aspectos orçamentários e financeiros, dando menor importância para a questão de controle do patrimônio público. Com o advento da Lei Complementar nº 101, de 4 de maio de 2000, muito conhecida como a Lei de Responsabilidade Fiscal (LRF), os entes políticos perceberam a necessidade de se ter um maior controle e preservação do patrimônio público.</p>

                            <p>Atualmente, o sistema de gestão utilizado pela União e pela maioria dos Estados e Municípios, já demonstram a sua preocupação com o patrimônio, exigindo dos órgãos um detalhamento maior do seu patrimônio.</p>


                                                             
                            
                            
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
