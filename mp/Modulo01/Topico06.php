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
                    
                            <h2 class="Titulo">06 - Atribuições Básicas da Gestão de Material Permanente</h2><hr>

                            <br>

                            <p><strong>Objetivo:</strong> Compreender o processo de gestão de material permanente no tocante ao controle interno, movimentação até o desfazimento dos bens. </p>

                            

                            <p>O almoxarifado, tanto nas entidades públicas como privadas, é o setor que centraliza a responsabilidade pelo recebimento, pela estocagem e distribuição dos materiais de consumo e bens de uso permanente, sendo importante elo da gestão de materiais, sua importância organização e preservação daquilo que é necessário à execução das atividades de cada setor da entidade.</p>

                            <p>Sendo assim o processo de gestão patrimonial inicia-se no recebimento do material permanente que ocorre no almoxarifado. </p>
                            
                            <!-- Sub Título -->
                            <p class="SubTitulo">06.1 - Recebimento de materiais e bens</p>
                            <hr>
                            
                            <p>O recebimento de materiais é um importante ponto de controle para avaliação da qualidade de atendimento dos fornecedores, no tocante a prazo, qualidade e volume de pedido. Em termos práticos o processo de recebimento de materiais e bens pode ser subdividido em 3 atividades: agendamento de recebimento, recebimento de materiais e bens e regularização do recebimento. </p>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">06.1.1 - Agenda de Recebimento</p>
                            <hr>

                            <p>Toda e qualquer atividade mesmo a mais simples que possa parecer é mais bem executada quando é antecipadamente planejada. O recebimento de materiais é um ponto crítico de controle por que é o momento em que a entidade atesta o aceite dos materiais que foram pedidos ao fornecedor e a partir deste aceite será efetuado o pagamento ao mesmo.
                            <br><br>Além do mais, planejar essa atividade é fundamental por se tratar do início do ciclo operacional da gestão patrimonial, e nesse momento qualquer problema, que não seja prontamente resolvido, poderá comprometer as atividades seguintes. 
                            <br><br>No planejamento do recebimento são importantes que sejam asseguradas as seguintes etapas:</p>

                           <!-- Accordion Fase 01 - Begin  -->
                           <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="Item01">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Configuração da Área de Recebimento </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p>	O almoxarifado geralmente é um setor muito requisitado por outros departamentos da organização e por isso deve operar com um alto nível de eficiência para que não haja pendências de suprimento que comprometam a operação de outros setores. Por se tratar de um setor de apoio operacional, a prioridade do almoxarifado sempre será atender as solicitações de consumo com um alto nível de serviço e para que isso aconteça os materiais deverão antecipadamente estar armazenados de forma organizada, com rápida localização e acesso facilitado.
                                                <br><br>Dessa forma, na configuração do armazém, é imprescindível que tenha delimitada uma área exclusiva para o recebimento para que durante esse processo não haja interferência na atividade principal do almoxarifado que é atender as requisições de consumo de material. É muito difícil estabelecer uma fórmula para delimitar o tamanho adequado da área de recebimento devido à concorrência cada vez maior com a disponibilidade para área de armazenagem.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item02">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Definição da Capacidade de Recebimento </strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> Delimitada uma área de recebimento, já se pode saber o quanto é possível descarregar de uma só vez para que seja efetuada a inspeção de recebimento. É recomendável que esta área seja dividida em quadrantes visando facilitar o controle dos volumes inspecionados, muitas vezes a carga é menor que a área delimitada, ou pode-se receber cargas de várias origens em um mesmo descarregamento. A divisão em quadrantes ajuda no sequenciamento da operação e na divisão de trabalho do pessoal envolvido. Outra questão a considerar na definição da capacidade de recebimento é a disponibilidade de pessoal qualificado para proceder as conferências de recebimento (quantitativa e qualitativa), a regularização e registro no controle de estoque assim como a armazenagem dos materiais. E finalmente estabelecer o tempo necessário para que todo esse ciclo seja cumprido, até que a área de recebimento esteja desocupada para um novo descarregamento. A capacidade de recebimento é expressa em quadrante hora, evidentemente que esta medida poderá variar em função da quantidade de pessoal envolvido, mas se for mantida uma quantidade padrão de pessoas envolvidas no recebimento esta variável poderá ser controlada.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item Texto">
                                        <h2 class="accordion-header" id="Item03">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Elaboração da Agenda de Recebimentos</strong>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                            <div class="accordion-body">
                                                <p> À medida que os pedidos de fornecimento vão sendo confirmados, pelo departamento de compras, para recebimento dentro de determinado período, o almoxarifado prepara a Agenda de Recebimento considerando além do volume de pedido confirmado a capacidade de recebimento estabelecida, delimitando assim a quantidade de veículos que poderão ser descarregados no período estabelecido. De posse da Agenda de Recebimento o almoxarifado monitora junto aos transportadores a expectativa de recebimento da carga, e mobiliza o pessoal envolvido para o recebimento. A Agenda de Recebimento é um instrumento muito importante para a integração do almoxarifado com os demais departamentos da entidade: 
                                                <ul>
                                                    <i class="fa fa-dot-circle CorVerdeClaroEstado"></i>  <strong>Departamento de Compras:</strong> para balanceamento dos prazos de entrega de novos pedidos de fornecimento com o que já está programado para recebimento, auxiliando assim o acompanhamento das compras; </li>
                                                    <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>  <strong>Setor de Portaria:</strong> para o controle de entrada e saída de veículos de descarregamento nas dependências da organização, liberando os veículos à medida que o almoxarifado esteja mobilizado para o recebimento;</li>
                                                    <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>  <strong>Departamento Financeiro:</strong> para confirmação dos pagamentos programados, conforme o atesto de recebimento dos Pedidos de Fornecimento.</li>
                                                </ul></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <br><p>Uma análise prévia do conteúdo dos Pedidos de Fornecimento agendados para recebimento é recomendável para um bom planejamento dos recebimentos principalmente com relação a fatores como: </p>

                            <ul>
                                <i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Existência no Pedido de Fornecimento de itens de materiais novos ainda não cadastrados como itens de catálogo e que precisam de maiores informações e maior tempo para regularização; </li>
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Nível de fracionamento e acondicionamento em unidades de fornecimento dos materiais constantes no Pedido de forma a adequar ao máximo os equipamentos e procedimentos de movimentação no recebimento um exemplo disso são os materiais recebidos a granel; </li>
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Itens de material que necessitam de laudo técnico de área especializada para que possam ter o atesto de recebimento, entre outras questões.</li>
                            </ul>

                            <p>Outro fator importante que pode também ser previsto com antecedência ao recebimento de materiais é a disponibilização de espaço para armazenagem dos itens que serão recebidos, isso dinamiza a movimentação de armazenamento do material liberando mais rapidamente a área de recebimento para outros recebimentos agendados. Apesar da atividade de recebimento de material ter menor intensidade que a atividade de atendimento de requisição para consumo, pela própria dinâmica com que são efetuadas as compras para ressuprimento de estoque, a entrega dos fornecedores tendem a concorrerem em um mesmo período de tempo, ou seja, chega tudo no mesmo tempo. Esta é mais uma razão para que seja planejado o recebimento de materiais, por intermédio do planejamento, o almoxarifado pode na medida do possível antecipar as requisições junto aos setores da organização e disponibilizar maior parcela de pessoal para realizar as inspeções de recebimento.</p>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">06.1.2 - Ato do Recebimento</p>
                            <hr>

                            <p>Recebimento de materiais é um ponto crítico de controle por ser a atividade intermediária entre a compra, pagamento ou aceitação junto ao fornecedor, exigindo assim um alto nível de responsabilidade na conferência dos materiais destinados à entidade de forma a não haver descontinuidade nas operações por problemas de ressuprimento.
                            <br><br>É no recebimento que a responsabilidade pela guarda e conservação do material é transferida do fornecedor à entidade recebedora. O recebimento pode ser subdividido em duas etapas: provisório e definitivo.
                            </p>

                            <!-- item 07 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item07">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        <strong>Recebimento Provisório </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> O material adquirido é entregue à entidade no local definido, não implicando necessariamente em aceitação. Nesse momento serão realizados procedimentos de conferência para aceitar ou não a carga. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- fim item 07 -->

                            <!-- item 08 -->
                            <div class="accordion-item Texto">
                                <h2 class="accordion-header" id="Item08">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                        <strong>Recebimento Definitivo </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p> Ato por meio do qual se declara, na documentação fiscal, que o material recebido está de acordo com as especificações do Pedido de Fornecimento. </p>                             
                                    </div>
                                </div>
                            </div>
                            <!-- fim item 08 -->

                                    
                            <br><p>O objetivo de se realizar o recebimento de materiais da forma sistematizada é assegurar que o material entregue esteja em conformidade com as especificações constantes no contrato e/ou no Pedido de Fornecimento ou documento equivalente.
                            <br><br>Essa preocupação visa aumentar o controle e a confiabilidade em relação aos fornecedores, além de evitar retrabalho desperdícios e ineficiência no almoxarifado.
                            <br><br>O recebimento de materiais não consiste somente no ato de descarregá-los e armazená-los em algum lugar onde exista um espaço livre, para posterior utilização. As atividades de recebimento envolvem desde a recepção do material na entrega pelo fornecedor até a entrada nos estoques. É de extrema importância que seja realizado o procedimento de conferência antes de proceder ao recebimento definitivo.
                            <br><br>Alguns critérios devem ser verificados para o recebimento dos materiais adquiridos.
                            <br><br>Para aquisições com valores superiores a R$ 80.000,00, o recebimento não poderá ser feito pela equipe do almoxarifado. Nesse caso, o recebimento deve ser realizado por uma comissão com, no mínimo, três membros. Essa determinação está prevista no art. 15 § 8º da Lei Federal nº. 8.666, de 21 de junho de 1993.
                            <br><br>Nesse caso, o almoxarifado receberá provisoriamente os materiais, para que a comissão designada realize o exame qualitativo conforme especificações contratadas. Após a verificação pela comissão responsável e respectiva aceitação, o almoxarifado poderá dar entrada nos materiais recebidos tanto fisicamente quanto no Sistema de Gestão de Almoxarifado.
                            <br><br>Quando os materiais adquiridos dependem apenas da conferência e da validação da nota fiscal em relação ao Pedido de fornecimento, poderão ser recebidos e aceitos pelo almoxarife.
                            <br><br>As atribuições básicas durante o recebimento de materiais são:</p>

                            <br><p><strong>I - Recepcionar os veículos de transportadores</strong></p>
                            <hr>

                            <p>A recepção dos veículos transportadores representa o início do processo de recebimento que tem como objetivos:</p>

                            <ul>
                                <i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Controlar a entrada dos veículos transportadores nas dependências da organização;
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Efetuar a triagem da documentação suporte para o recebimento;
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Constatar se o fornecimento, objeto da Nota Fiscal em análise, foi programado na Agenda de Recebimento e se está dentro do prazo de entrega contratual;
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Constatar se o número do Pedido de Fornecimento consta na Nota Fiscal;
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Atualizar a Agenda de Recebimento com as informações referentes aos descarregamentos autorizados.   
                            </ul>

                            <p>O setor de Portaria que geralmente efetua a recepção dos veículos de transportadores controla a entrada e saída dos veículos nas dependências da entidade, nesse momento somente estão autorizados a entrar os veículos dos transportadores que constam na Agenda de Recebimento. Os Pedidos de Fornecimento que não constam na agenda devem ser inicialmente recusados, transcrevendo-se os motivos no verso da Nota Fiscal. Nesses casos somente o responsável pelo almoxarifado dependendo da classificação do material pode autorizar a entrada do veículo. É importante que o almoxarifado esteja sempre atualizando a Agenda de Recebimento conforme as chegadas de Pedidos de Fornecimento, e se possível por intermédio de recurso informatizado dependendo da intensidade de recebimento o apoio da informática facilita a operação e aumenta a produtividade.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura05.png" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                    <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 05 - MODAL -->
                            <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura05.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 5:</strong> Portaria de Recepção de Veículo de Transportadores</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 01 - End -->

                            <br><p><strong>2 - Proceder a conferência visual</strong></p>
                            <hr>

                            <p>Verificar as condições da embalagem quanto a possíveis avarias na carga transportada e, se for o caso, apontando as ressalvas nos respectivos documentos
                            <br><br>Também no momento da recepção dos veículos dos transportadores, o setor de Portaria executa a “conferência visual” com o objetivo de identificar avarias na carga que está sendo entregue, o documento que serve para suporte às operações de análise de avarias e conferência de volumes é o “Conhecimento de Transporte Rodoviário de Carga”, que é emitido quando do recebimento da mercadoria a ser transportada. Geralmente a carga transportada tem cobertura de seguro, no entanto, é importante que ao identificar avarias o setor de Portaria, entre em contato com o Setor de Compras para verificar a existência de seguro e obter a autorização para a liberação do veículo para descarregamento.
                            <br><br>As divergências e irregularidades insanáveis constatadas em relação às condições de contrato devem motivar a recusa do recebimento, anotando-se no verso da Nota Fiscal as circunstâncias que motivaram a recusa, bem como nos documentos do transportador. O exame para constatação das avarias é feito por meio da análise da disposição das cargas, da observação das embalagens, quanto a evidências de quebras, umidade, dentre outros danos.
                            <br><br>Os materiais que passaram por essa primeira etapa devem ser encaminhados ao Almoxarifado. Para efeito de descarga do material no Almoxarifado, a recepção é voltada apenas para a conferência de volumes, confrontando-se a Nota Fiscal com os respectivos registros na Agenda de Recebimento.</p>

                            <br><p><strong>3 - Proceder a conferência quantitativa e qualitativa dos materiais recebidos </strong></p>
                                    <hr>

                            <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Conferência quantitativa:</strong> verificação se a quantidade declarada pelo fornecedor na nota fiscal corresponde efetivamente à quantidade fisicamente recebida, podendo ser realizada de duas formas a saber: </p>       

                            <!-- CAIXA AZUL -->
                            <div class="bd-callout bd-callout-primary">
                                <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Pelo volume total da entrega:</strong> quando a carga é averiguada em sua integralidade, contabilizando-se todos os itens que foram entregues. Pode ser realizada de duas maneiras:</p>

                                <ul>
                                    <i class="fa fa-angle-double-right CorVerdeClaroEstado"></i> O conferente verifica a nota fiscal e, sabendo dos quantitativos dos materiais, faz a contagem da carga para apurar possíveis desvios;
                                    <br><i class="fa fa-angle-double-right CorVerdeClaroEstado"></i> O conferente faz a contagem da carga e depois compara com os quantitativos da nota fiscal identificando possíveis desvios. Essa técnica é conhecida como “contagem cega”.
                                    <br><br>Sendo ou não a “contagem cega”, dependendo da natureza dos materiais envolvidos, estes podem ser contados utilizando-se também outros métodos, tais como:
                                        <br><br><ul>
                                            <i class="fa fa-angle-right CorVerdeClaroEstado"></i> <strong>Manual:</strong> para casos de pequenas quantidades. 
                                            <br><i class="fa fa-angle-right CorVerdeClaroEstado"></i> <strong>Por meio de cálculo:</strong> para os casos que envolvem embalagens padronizadas com grandes quantidades.
                                            <br><i class="fa fa-angle-right CorVerdeClaroEstado"></i> <strong>Por meio de balanças contadoras:</strong> para casos que envolvem grande quantidade de pequenas peças, como parafusos, porcas ou arruelas.
                                            <br><i class="fa fa-angle-right CorVerdeClaroEstado"></i> <strong>Medição:</strong> em geral, as medições são efetuadas por meio de trenas.
                                        </ul>
                                </ul>
                            </div>
                            <!-- FIM CAIXA AZUL -->

                            <!-- CAIXA AZUL -->
                            <div class="bd-callout bd-callout-primary">
                                <p><i class="fa fa-arrow-right CorVerdeClaroEstado"></i><strong> Por amostragem da carga:</strong> do quantitativo declarado na nota fiscal é definido um percentual de cada item que será objeto de verificação para apuração de possíveis desvios. 
                                <br><br> A escolha do método para a conferência quantitativa, seja pelo total da carga ou por amostragem, será decisão do responsável pelo almoxarifado, no entanto sempre deverá estar especificado na Nota Fiscal do recebimento o método pelo qual foi efetuada a conferência.</p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                        <img class="img-fluid" width="200" src="imagens/Figura06.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>
                                <!-- Imagem 06 - MODAL -->
                                <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid"  src="imagens/Figura06.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 6:</strong> Funcionário executando inspeção de recebimento</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 06 - End -->
                            </div>
                            <!-- FIM CAIXA AZUL -->

                            <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Conferência qualitativa:</strong> é a inspeção técnica de qualidade do material por meio da confrontação das condições contratadas no Pedido de Fornecimento com as consignadas na Nota Fiscal pelo fornecedor. Essa análise visa garantir o recebimento adequado do material contratado por meio do exame de suas características dimensionais, específicas e restrições de especificação. O objetivo é garantir a adequação do material ao fim que se destina. São utilizados no processo de inspeção: </p>

                            <ul>
                                <i class="fa fa-check-circle CorVerdeClaroEstado"></i> A especificação de compra do material e alternativas aprovadas; desenhos e catálogos técnicos; dentre outros. 
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> A análise visual que tem por finalidade verificar o acabamento do material, possíveis defeitos, danos à pintura, etc. 
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> A análise dimensional que tem por objetivo verificar as dimensões dos materiais, tais como largura, comprimento, altura, espessura, diâmetro. 
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Os ensaios específicos para materiais mecânicos e elétricos comprovam a qualidade, a resistência mecânica, o balanceamento e o desempenho de materiais ou equipamentos. 
                            </ul>

                            <p>A depender da quantidade, a inspeção pode ser total ou por amostragem, utilizando-se de conceitos estatísticos.</p>

                            <br><p><strong>IV - Decidir pela recusa, aceite ou devolução, conforme o caso; </strong></p>
                                    <hr>

                            <p>Diariamente muitas decisões são tomadas dentro de uma entidade, seja pelos seus administradores, seja por seus funcionários. Decisões essas que vão desde o mais trivial até escolhas que poderão afetar todo o andamento da operação.
                            <br><br>As decisões são tomadas por pessoas que são afetadas pelo meio onde vivem, por suas percepções, experiências e até mesmo por suas crenças, o que torna o processo em si subjetivo, pois não existe a “decisão perfeita”, o que existe é a busca pela melhor alternativa. Para diminuir a subjetividade das decisões, alguns gestores dividem o processo decisório em cinco etapas:  
                            <br><br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>1° Etapa - Reconhecimento:</strong> Reconhecer um problema, essa etapa é crucial, pois se não for bem feita todo o trabalho da equipe de recebimento será desperdiçado, dimensionar as consequências da aceitação ou não da irregularidade no fornecimento do material identificada durante as conferências é a parte mais difícil da decisão. É recomendável que os tipos de irregularidades sejam identificados é atribuído peso para facilitar a decisão, como exemplificado na tabela abaixo:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura005.png" data-bs-toggle="modal" data-bs-target="#Imagem005">
                                    <img class="img-fluid" src="imagens/Figura005.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 005 - MODAL -->
                            <div class="modal fade text-center" id="Imagem005" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 005:</strong> Tabela de possíveis irregularidades no recebimento de materiais</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 01 - End -->

                            <p><br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>2ª Etapa - Elaboração:</strong> Elaborar as alternativas de ação, toda e qualquer decisão é necessário elaborar alternativas, pois se elas não existem, não há decisão a ser tomada. No caso de recebimento de material serão três alternativas a serem elaboradas, a saber: </p>

                            <ul>
                                <i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Aceite do Recebimento:</strong> Quando não foram identificadas irregularidades nas conferências de recebimento ou as ocorrências não justificarem a recusa ou devolução do Recebimento.
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Recusa:</strong> Quando as irregularidades identificadas, nas conferências de recebimento ocasionar possibilidade de prejuízo financeiro, comprometimento do resultado final das atividades que dependem do uso do material ou possibilitar acidentes de trabalho, deterioração do material, risco a saúde entre outras questões.
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Devolução:</strong> Quando a irregularidade identificada refere-se ao quantitativo maior que o solicitado no Pedido de Fornecimento, ou quando se justificar uma recusa parcial, ou seja, somente de parte do material envolvido no recebimento será aceito devido a sua classificação como material crítico ou estoque extremamente insuficiente para atender ao consumo. O restante do material será recebido com ressalvas em relação ao nível de atendimento do fornecedor.
                            </ul>

                            <p><br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>3ª Etapa – Planejamento:</strong> Avaliar as vantagens e desvantagens de cada alternativa elaborada, nessa etapa é importante ter senso crítico para avaliar quais serão as possíveis consequências da escolha de qualquer uma das alternativas (aceitar, recusar ou devolver o recebimento) e se necessário planejar cursos de ação que minimizem os impactos previstos decorrentes da opção escolhida.  </p>

                            <p><br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>4ª Etapa – Decisão e implementação:</strong> Selecionar a alternativa escolhida e após efetuar a escolha deve-se anunciá-la com confiança e de forma incisiva, pois caso contrário poderá despertar um sentimento de insegurança naqueles que serão afetados com a decisão. Outra questão importante é implementar a decisão imediatamente após ter sido efetuada a escolha, um erro comum em muitos tomadores de decisão é postergar ou demorar na implementação da alternativa escolhida principalmente se esta trazer descontentamentos. Postergar decisões podem gerar pendências que levarão a problemas irremediáveis.   </p>

                            <p><br><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>5ª Etapa – Controle:</strong> Avaliar os resultados da decisão, nessa etapa é importante documentar ao máximo a decisão que foi implementada de forma que possa ser facilmente rastreada, casos seus efeitos demorem a surgir ou não forem os efeitos esperados. As anotações efetuadas na Nota Fiscal ou no Conhecimento de Transporte Rodoviário de Carga e Pedido de Fornecimento, acerca da decisão de aceitar, recusar ou devolver um recebimento, deverão expressar claramente os motivos, datas e ter os nomes e vistos dos conferentes envolvidos assim como os métodos de conferência aplicados. Para consolidar essas informações o almoxarife deve elaborar o Relatório Técnico de Inspeção de Recebimento, especificando as ações decorrentes do aceite ou não do recebimento e anexando ao mesmo a documentação anteriormente citada envolvida no recebimento do material. 
                            <br><br>Mesmo procurando racionalizar a subjetividade da tomada de decisão por meio das cinco etapas apresentadas, entendemos que é impossível encontrar num processo de decisão a melhor alternativa, na prática o que se busca é a alternativa que, mesmo não sendo a melhor, leve para o alcance do objetivo da decisão. É importante também esclarecermos que quem decide está suscetível ao erro e nesses casos é perfeitamente compreensível admiti-los muitas vezes sai mais barato admitir o erro que manter a decisão equivocada. O maior erro é não decidir. </p>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">06.1.3 - Regularização do recebimento:</p>
                            <hr>

                            <p class="Texto">A regularização é caracterizada pela formalização do processo de recebimento, quando são confirmadas as conferências: visual, qualitativa e quantitativa, respectivamente, por meio do Relatório Técnico de Inspeção de Recebimento dando aceite ou não ao recebimento.
                            <br><br>O citado relatório atesta a confrontação das quantidades conferidas e faturadas, dando origem a uma das seguintes situações: </p>

                            <ul class="Texto">
                                <i class="fa fa-check-circle CorVerdeClaroEstado"></i> Liberação de pagamento ao fornecedor;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Liberação parcial de pagamento ao fornecedor;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Devolução de material ao fornecedor;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Recusa do recebimento;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Reclamação de falta do fornecedor junto ao órgão/unidade gestora de compras.
                            </ul>

                            <p class="Texto">Os procedimentos de regularização, visando à confrontação dos dados, objetivando recontagem e aceite ou não de quantidades remetidas em excesso pelo fornecedor, envolvem os seguintes documentos: </p>

                            <ul class="Texto">
                                <i class="fa fa-check-circle CorVerdeClaroEstado"></i> Nota Fiscal;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Conhecimento de transporte rodoviário de carga;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Documento de contagem efetuada;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Relatório técnico de inspeção de recebimento;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Especificação de compra;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Catálogos técnicos;
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> Desenhos.
                            </ul>

                            <p class="Texto">O material em excesso ou com irregularidade identificada será devolvido ao fornecedor, dentro de um prazo estabelecido pela direção da entidade a contar da data do recebimento, acompanhado da Nota Fiscal de Devolução, emitida pela entidade compradora.
                            <br><br>O material isento de irregularidade dará entrada no Sistema de Controle de Estoque e após esse registro acondicionado nos locais destinados a armazenagem.
                            <br><br>Na tabela a seguir é apresentado um resumo das fases que compõem o processo de recebimento de materiais. </p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura006.png" data-bs-toggle="modal" data-bs-target="#Imagem006">
                                    <img class="img-fluid" src="imagens/Figura006.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 006 - MODAL -->
                            <div class="modal fade text-center" id="Imagem006" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura006.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Tabela 06:</strong> Tabela de Resumo das fases no recebimento de materiais</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 006 - End -->

                                    




                                    
                            
                            

                            


                            
          
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
                    <a href="Topico05.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
