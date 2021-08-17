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
                    
                            <h2 class="Titulo">6.11) Leilão de Bens Móveis:</h2>

                            <br>
                            
                            <p class="Texto">Leilão é uma antiga modalidade de compra e venda de bens, utilizada por empresas privadas, onde vence quem oferecer o maior lance. O Leilão é, também, uma modalidade de Licitação utilizada por órgãos públicos conforme a Lei 8666/93 - Artigo 22 - parágrafo 5º.</p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success">
                                <p class="Texto">
                                    <em>"Art. 22 -§ 5º Leilão é a modalidade de licitação entre quaisquer interessados para a venda de bens móveis inservíveis para a administração ou de produtos legalmente apreendidos ou penhorados, ou para a alienação de bens imóveis prevista no art. 19, a quem oferecer o maior lance, igual ou superior ao valor da avaliação. (Redação dada pela Lei nº 8.883, de 08/06/94).”</em>
                                </p>
                            </div>

                            <p class="Texto">Qualquer pessoa, física ou jurídica, com exceção de menores de 18 anos, pode participar de um Leilão.
                            <br></br>O Lance é o valor oferecido pelo comprador para a compra do bem. O lance inicial é pré-definido mediante uma avaliação prévia e os compradores dão os seus lances acima deste valor. Os lances são ofertados pelos compradores presentes no leilão até que o leiloeiro define o comprador através do lance máximo.
                            <br><br>O leiloeiro é o profissional habilitado para realizar e conduzir os leilões e a sua atuação é regulamentada e controlada pelas Juntas Comerciais do Estado conforme a Lei 21.981 de 19/10/1932 e alterações.
                            <br><br>Os Leilões promovidos por órgãos públicos têm os seus avisos e editais publicados em diários oficiais, onde constarão as datas e locais de visitação para a avaliação dos bens com a colaboração de técnicos especializados. 
                            <br><br>Algumas fases deverão ser cumpridas para que o leilão público seja bem-sucedido, são estas: </p>

                            <!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Fase de providências que antecedem o leilão: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>A identificação dos bens e materiais permanentes inservíveis ou anti-econômicos destinados ao desfazimento por intermédio de leilão público deverão ser originados a partir do inventário anual ou inventário específico.
                                                <br><br>Uma vez identificados os bens deverão ser entregues sob a guarda do Departamento responsável pela gestão do patrimônio do Órgão/Entidade.
                                                <br><br>A entrega dos bens para leilão deverá ser formalizada pelo TERMO DE RESPONSABILIDADE DE GUARDA PARA LEILÃO discriminando: </p>

                                                <ul>
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nº do Termo,
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Data de Entrega do Bem ao setor de Patrimônio, 
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Departamento e responsável pela entrega do bem, 
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> nº do tombo de identificação,
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Especificação do bem suas características, componentes e acessórios,
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Estado de conservação,
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Valor estimado,
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Assinatura do remetente e destinatário
                                                </ul>

                                                <p>O referido TERMO DE RESPONSABILIDADE DE GUARDA PARA LEILÃO, ficará arquivado até a ocasião que o bem for arrematado. Nos casos de bem que tenha impossibilidade de remoção para área destinada à guarda, além das informações acima discriminadas deverá conter também endereço onde se localiza o bem e o co-responsável pela guarda que deverá também assinar o referido documento. A partir dos referidos Termos, o departamento responsável pela gestão do patrimônio elaborará a RELAÇÃO DE BENS PARA LEILÃO a ser encaminhada para o órgão central com atribuição exclusiva para realizar os leilões públicos.
                                                <br><br>A RELAÇÃO DE BENS PARA LEILÃO deverá estar classificada em “Bens”, “Materiais” e “Veículos” e conter no mínimo as seguintes informações:
                                                <br><br><strong>Relação de Bens:</strong></p>

                                                <ul>
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nº do tombo;
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Descrição detalhada do bem; 
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Observações quanto ao estado de conservação do bem classificando-o como INSERVÍVEL ou ANTI-ECONÔMICO;
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Valor original;
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Valor estimado.
                                                </ul>

                                                <p><strong>Relação de Veículos:</strong></p>
                                                
                                                <ul>
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nº da Placa
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Marca
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Modelo
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ano Fabricação
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Ano Modelo
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nº Chassis
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nº Renavam
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Observações quanto ao estado de conservação do veículo classificando-o como INSERVÍVEL, ANTI-ECONÔMICO ou SUCATA;
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Valor Original;
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Valor estimado.
                                                </ul>

                                                <p><strong>Relação de Materiais:</strong></p>

                                                <ul>
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nº do Item;
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Descrição do Material;
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Unidade;
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Qtde;
                                                    <br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Valor estimado.
                                                </ul>

                                                <p><strong>Observação:</strong> Nos casos em que os bens relacionados estejam localizados em endereços diferentes, para cada endereço deverá ter uma relação correspondente, especificando o nome do servidor co-responsável pela guarda do bem.
                                                <br><br>Os veículos a serem disponibilizados para leilão pelo órgão/entidade, deverão antecipadamente ser verificado sua situação junto ao Órgão Executivo de Trânsito Responsável pelo Registro (DETRAN-CE) com o objetivo de detectar pendência judicial ou pendência de transferência de propriedade do veículo, assim como, débitos referentes a IPVA, licenciamento, multas DETRAN, multas RENAINF, multas de outras prefeituras municipais e multas PRF.
                                                <br><br>Recomenda-se que os veículos para leilão devem estar com sua situação regularizada junto ao DETRAN-CE, a responsabilidade sobre a regularização e pagamento de quaisquer débitos relativos ao veículo será do órgão ou entidade proprietário ou que tenha a posse do veículo.
                                                <br><br>Os veículos antes de serem disponibilizados para leilão, deverão ser avaliados pela comissão inventariante e deverá:</p>

                                                <ol>
                                                    <li>- Ser identificado quais os veículos que após recuperados terão condições de segurança para trafegar em via aberta ao público e quais os veículos que deverão ser leiloados como sucata;</li>
                                                    <li>Proceder à avaliação de cada veículo e sucata de veículo, estabelecendo um valor estimado para arrematação;</li>
                                                    <li>Dos veículos identificados como sucata, proceder a inutilização das partes do chassi que contém o registro VIN e suas placas, assim como providenciar a baixa do registro junto ao Órgão Executivo de Trânsito responsável pelo registro (DETRAN-CE).</li>
                                                </ol>

                                                <p>Os bens, materiais e veículos disponibilizados para leilão que compõem a relação encaminhada ao órgão central, deverão ficar identificados e separados fisicamente de outros bens até que seja efetuado o recolhimento por parte do leiloeiro contratado para o leilão.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Fase preparatória do leilão: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> A fase preparatória do leilão é uma fase administrativa onde o órgão central fará a consolidação de todas as relações de bens, materiais e veículos encaminhados para leilão, assim como verificará pendências administrativas e multas dos veículos no Departamento Estadual de Trânsito – DETRAN-CE. Nessa fase também serão formalizadas, junto ao titular de cada órgão, as autorizações para transferência de propriedade dos veículos. Finalizando essa fase iniciará o processo licitatório de Tomada de Preço para a escolha do leiloeiro oficial que realizará o leilão.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Fase licitatória do leilão: </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>A fase licitatória para a escolha do leiloeiro será realizada mediante a modalidade de Tomada de Preço ou Pregão onde o objeto de disputa será a menor taxa administrativa a ser paga pelo serviço realização do leilão. O vencedor da disputa arcará com todas as despesas de realização do leilão, que serão custeadas mediante a taxa administrativa aplicada ao valor total dos bens alienados. Nessa modalidade de licitação é preciso uma grande quantidade de bens para que o leilão se torne viável.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item04">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Fase de Realização do leilão:  </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> A fase de realização do leilão inicia com o recolhimento dos bens para um depósito onde serão arrumados os lotes para visitação dos interessados. Com isso o leiloeiro contratado irá recolher em cada um dos órgãos comitentes os materiais e veículos colocados para leilão, nesse momento é de fundamental importância a organização dos bens e o acesso facilitado das equipes do leiloeiro que farão o recolhimento. Na fase de realização do leilão é também de fundamental importância o controle dos bens que foram efetivamente recolhidos pelo leiloeiro. A relação dos bens que foram recolhidos deverá ser arquivada temporariamente até que o leilão seja finalizado. Quando apresentada a prestação de contas do leilão tal relação será desarquivada para que seja efetuada a desincorporação dos bens do patrimônio do órgão/entidade.</p>
                                            </div>
                                        </div>
                                    </div> 

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item05">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong>Fase de prestação de contas do leilão:  </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Na fase de prestação de contas, o leiloeiro contratado efetuará a apuração dos valores recebidos dos arrematantes e emitirá um relatório destacando os bens vendidos e seus respectivos valores classificados por órgão comitente. Poderão também ser apresentadas nesse relatório, as despesas decorrentes de multas de trânsito que porventura foram atribuídas aos veículos antes de serem recolhidos para o leilão.</p>
                                            </div>
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
