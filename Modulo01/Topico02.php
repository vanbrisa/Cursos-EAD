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
                                            
                            <h2 class="Titulo">Tópico 02 - O reflexo das Novas Normas Contábeis no controle patrimonial:</h2>

                            <p><strong>Objetivo:</strong> Compreender os conceitos introduzidos pelas Normas Brasileiras de Contabilidade Aplicadas ao Setor Público – NBCASP referentes à mensuração e avaliação do patrimônio público, assim como a mecânica do cálculo da depreciação. </p>

                            <p>Considerando a necessidade de adaptações à economia mundial globalizada, as diversas áreas da Contabilidade brasileira vêm passando por significativas mudanças nos últimos anos. Essas mudanças visam à adequação e convergência aos padrões e procedimentos internacionais.</p>
                            
                            <p>É importante destacar que essas modificações não afetam somente a Contabilidade Comercial, afetam também a Contabilidade Aplicada ao Setor Público. Partindo da premissa que no Brasil a Contabilidade Pública está pautada na Lei Federal 4.320/64 e que esta lei possui um enfoque orçamentário, muitas mudanças são necessárias para a evidenciação do patrimônio público e para que se possa acompanhar de maneira efetiva a evolução dele. </p>

                           
                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <p class="FiqueAtentoTexto">Partindo dessa necessidade de buscar uma melhor evidenciação dos fenômenos patrimoniais, tornou-se necessária a elaboração de normas que padronizassem os registros contábeis na entidade pública aos padrões internacionais. Essas mudanças estão em curso e visam aproximar a Contabilidade Aplicada ao Setor Público das mesmas regras da Contabilidade aplicada ao setor privado, ambas com enfoque patrimonial, sem deixar de atender as peculiaridades da Lei Federal 4.320/64, com seu foco orçamentário.</p>
                            </div>

                            <br><p>Nesse sentido o Conselho Federal de Contabilidade editou as Normas Brasileiras de Contabilidade Aplicadas ao Setor Público denominado “NBC T 16”. Foram editadas inicialmente 11 normas (NBC T 16.1 a NBC T 16.11) que foram publicadas na forma de Resoluções do Conselho Federal de Contabilidade. Ainda estão vigentes a NBC T 16.7 e a NBC T 16.11 o restante foi revogada e substituída pelas Normas Brasileiras de Contabilidade Técnicas do Setor Público NBC TSP com maior convergência às normas contábeis emitidas pelo <em>International Public Sector Accounting Standards – IPSAS</em> que representa um conjunto de normas para utilização na preparação das demonstrações financeiras por entidades do setor público em todo o mundo. Esses padrões são baseados nos <em>IFRS – International Financial Reporting Standards</em>.</p>

                            <p>Atualmente a distribuição das NBC TSP apresentam-se na tabela a seguir:</p>

                            <p>Para uma interface mais alinhada com o uso real do sistema, podemos utilizar a abordagem de <strong>fora para dentro</strong>, que começa investigando os atores envolvidos, seus interesses, objetivos, atividades, responsabilidades, motivações, os artefatos utilizados, o domínio, o contexto de uso, dentre outros (BARBOSA; SILVA, 2010), para somente depois identificar oportunidades de intervenção na interação atual e como essa estrutura será viabilizada pelas tecnologias utilizadas.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura001.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid" src="imagens/Figura001.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 001 - MODAL -->
                            <div class="modal fade text-center" id="Imagem001" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura001.png" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 001 - End -->

                            <p>As primeiras Novas Normas Contábeis editadas pelo Conselho Federal de Contabilidade denominada “NBC T 16”, trouxeram alguns conceitos que passaram a ser considerados nos procedimentos administrativos de controle patrimonial que passaram a incorporá-los de forma que as variações patrimoniais possam ser mais bem apuradas e reflitam na Contabilidade ao fim de cada exercício financeiro, são estes: </p>

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                    <ul class="ImportanteTexto">
                                        <i class="fa fa-circle CorAzulEstado01"></i><strong>Depreciação: </strong>a redução do valor dos bens tangíveis pelo desgaste ou perda de utilidade por uso, ação da natureza ou obsolescência.
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Valor bruto contábil: </strong>o valor do bem registrado no controle escritural, em uma determinada data, sem a dedução da correspondente depreciação acumulada. 
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Valor líquido contábil: </strong>o valor do bem registrado no controle escritural, em determinada data, deduzido da correspondente depreciação acumulada. 
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Valor depreciável: </strong>o valor original de um bem deduzido do seu valor residual.
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Valor residual: </strong>o montante líquido que a entidade espera, com razoável segurança, obter por um bem no fim de sua vida útil econômica, deduzidos os gastos esperados para sua alienação.
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Vida útil econômica: </strong>o período de tempo definido ou estimado tecnicamente, durante o qual se espera obter fluxos de benefícios futuros de um bem. 
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Avaliação patrimonial: </strong>a atribuição de valor monetário a itens do ativo e do passivos decorrentes de julgamento fundamentado em consenso entre as partes e que traduza, com razoabilidade, a evidenciação dos atos e dos fatos administrativos. 
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Reavaliação: </strong>a adoção do valor de mercado ou de consenso entre as partes para bens do ativo, quando esse for diferente do valor líquido contábil.
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Redução ao valor recuperável <em>(impairment)</em>: </strong>é a redução nos benefícios econômicos futuros ou no potencial de serviços de um bem do ativo que reflete o declínio na sua utilidade, além do reconhecimento sistemático por meio da depreciação. 
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Valor recuperável: </strong> o valor de mercado de um ativo menos o custo para a sua alienação, ou o valor que a entidade do setor público espera recuperar pelo uso futuro desse ativo nas suas operações, o que for maior. 
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Valor de aquisição: </strong>a soma do preço de compra de um bem com os gastos suportados direta ou indiretamente para colocá-lo em condição de uso. 
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Valor justo: </strong>é o preço que seria recebido pela venda de um ativo ou que seria pago pela transferência de um passivo em uma transação não forçada entre participantes do mercado na data de mensuração.
                                        <br><i class="fa fa-circle CorAzulEstado01"></i><strong>Valor realizável líquido: </strong>a quantia que a entidade do setor público espera obter com a alienação ou a utilização de itens de inventário quando deduzidos os gastos estimados para seu acabamento, alienação ou utilização. 
                                    </ul> 
                            </div>

                            <p>A partir dos referidos conceitos apresentados pelas Novas Normas Contábeis, os procedimentos administrativos de controle patrimonial, passaram também a incorporar regras de mensuração que permitam traduzir em moeda corrente o valor econômico dos bens. Tais regras são as seguintes:</p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-primary">
                                <p class="Texto">
                                    <ol>
                                        <li>Um bem do ativo imobilizado, incluindo os gastos adicionais ou complementares, é mensurado ou avaliado com base no valor de aquisição, produção ou construção. Critério também previsto no art. 106 iteM II da lei nº 4.320 de 17/03/1964.</li>
                                        <li>Os gastos posteriores à aquisição ou ao registro do bem devem ser incorporados ao valor desse bem quando houver possibilidade de geração de benefícios econômicos futuros ou potenciais de serviços. Qualquer outro gasto que não gere benefícios futuros deve ser reconhecido como despesa do período em que seja incorrido.</li>
                                        <li>Quando um bem do ativo imobilizado tiver vida útil econômica limitada, fica sujeito a depreciação durante esse período, sem prejuízo das exceções expressamente consignadas na legislação vigente.</li>
                                        <li>Para o registro da depreciação dos bens devem ser observados os seguintes aspectos:</li>
                                            <ul>
                                                <i class="fa fa-circle CorAzulEstado01"></i> obrigatoriedade do seu reconhecimento;
                                                <br><i class="fa fa-circle CorAzulEstado01"></i> valor da parcela que deve ser reconhecida no resultado como decréscimo patrimonial, e, no balanço patrimonial, representada em conta redutora do respectivo ativo;
                                                <br><i class="fa fa-circle CorAzulEstado01"></i> circunstâncias que podem influenciar seu registro.
                                            </ul>
                                        <li>O valor depreciado apurado mensalmente deve ser reconhecido nas contas de resultado do exercício.</li>
                                        <li>Quando se tratar de bens obtidos a título gratuito deve ser considerado o valor resultante da avaliação obtida com base em procedimento técnico ou valor patrimonial definido nos termos da doação.</li>
                                        <li>O critério de avaliação dos bens obtidos a título gratuito e a eventual impossibilidade de sua mensuração devem ser registrados em documento próprio para que possam ser evidenciados em notas explicativas por ocasião do balanço patrimonial. </li>
                                        <li>No caso de transferências de ativos, o valor a atribuir deve ser o valor contábil líquido constante nos registros da entidade de origem. Em caso de divergência deste critério com o fixado no instrumento de autorização da transferência, o mesmo deve ser evidenciado em notas explicativas.</li>
                                        <li>Nos casos de bens reavaliados, a depreciação deve ser calculada e registrada sobre o novo valor, considerada a vida útil econômica indicada em laudo técnico específico.</li>
                                        <li>O valor residual e a vida útil econômica de um bem do ativo devem ser revisados, pelo menos, no final de cada exercício. Quando as expectativas diferirem das estimativas anteriores, as alterações devem ser efetuadas.</li>
                                        <li>A depreciação deve ser reconhecida até que o valor líquido contábil do bem seja igual ao valor residual.</li>
                                        <li>A depreciação de um bem do ativo começa quando o item estiver em condições de uso.</li>
                                        <li>A depreciação não cessa quando o bem torna-se obsoleto ou é retirado temporariamente de operação.</li>
                                        <li>Os seguintes fatores devem ser considerados ao se estimar a vida útil econômica de um bem:</li>
                                            <ul>
                                                <i class="fa fa-circle CorAzulEstado01"></i> A capacidade de geração de benefícios futuros;
                                                <br><i class="fa fa-circle CorAzulEstado01"></i> O desgaste físico decorrente de fatores operacionais ou não;
                                                <br><i class="fa fa-circle CorAzulEstado01"></i> A obsolescência tecnológica;
                                                <br><i class="fa fa-circle CorAzulEstado01"></i> Os limites legais ou contratuais sobre o uso ou a exploração do ativo.
                                            </ul>
                                        <li>A vida útil econômica deve ser definida com base em parâmetros e índices admitidos em norma ou laudo técnico específico. </li>
                                        <li>Não estão sujeitos ao regime de depreciação:</li>
                                            <ul>
                                                <i class="fa fa-circle CorAzulEstado01"></i> Bens móveis de natureza cultural, tais como obras de artes, antiguidades, documentos, bens com interesse histórico, bens integrados em coleções, entre outros;
                                                <br><i class="fa fa-circle CorAzulEstado01"></i> Bens de uso comum que absorveram ou absorvem recursos públicos, considerados tecnicamente, de vida útil indeterminada;
                                                <br><i class="fa fa-circle CorAzulEstado01"></i> Animais que se destinam à exposição e à preservação;
                                                <br><i class="fa fa-circle CorAzulEstado01"></i> Terrenos rurais e urbanos.
                                            </ul>
                                        <li>Os métodos de depreciação, amortização e exaustão devem ser compatíveis com a vida útil econômica do ativo e aplicados uniformemente. </li>
                                            <ul>
                                                <i class="fa fa-circle CorAzulEstado01"></i> Sem prejuízo da utilização de outros métodos de cálculo dos encargos de depreciação, podem ser adotados: o método das quotas constantes; o método das somas dos dígitos; o método das unidades produzidas.
                                                <br><i class="fa fa-circle CorAzulEstado01"></i> A depreciação de bens imóveis deve ser calculada com base, exclusivamente, no custo de construção, deduzido o valor dos terrenos.
                                            </ul>
                                    </ol>
                                </p>
                            </div>

                            <p>Para um melhor entendimento da aplicabilidade das Novas Normas Contábeis, no tocante a mensuração de bens e o controle administrativo com cálculo da depreciação, vejamos o exemplo a seguir:</p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success">
                                <p class="Texto">
                                    <em>Em uma situação hipotética, um caminhão caçamba é registrado na contabilidade pelo valor de R$ 400.000,00. Sabe-se que a taxa de depreciação do caminhão é de 20% a.a., sua vida útil econômica está estimada em 5 anos e seu valor residual é de 10%. Considerando que a taxa de depreciação é aplicada sobre o valor depreciável (R$ 360.000,00) a representação das variações patrimoniais do bem são apresentadas na tabela abaixo.</em>
                                </p>
                            </div>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura002.png" data-bs-toggle="modal" data-bs-target="#Imagem002">
                                    <img class="img-fluid" src="imagens/Figura002.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Fonte: Dados do autor </p>
                            </div>
                            <!-- Imagem 002 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura002.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura">Tabela de exemplo do cálculo da depreciação</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 002 - End -->

                        
                           
                            

                        <!-- SCRIPT LIGHTBOX -->
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
                    <a href="Topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico02.1.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
