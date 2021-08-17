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
                    
                            <h2 class="Titulo">6.7) Bens de propriedade de terceiros:</h2>

                            <br>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">6.7.1) Comodato: </p>
                            <hr>
                            
                            <p class="Texto">O comodato é um contrato para o usufruto de alguma coisa (produto ou objeto) por intermédio de empréstimo, ou seja, ele não é seu e terá de ser devolvido ao final de um prazo determinado. Nesse tipo de contrato, um lado (o comandatário-empresário) cede seu produto ao outro lado (comodante-consumidor) em troca de um valor, ou serviço. Na maioria das vezes, pelo fornecimento exclusivo de alguns produtos, o comandatário – fornecedor – cede gratuitamente certos equipamentos ao comodante (cliente).
                            <br><br>No segmento de Limpeza, é de praxe encontrar fornecedores de produtos sanitários que cedem, em regime de comodato, dispensers de papel toalha, papel higiênico, sabonetes, desodorizadores e enxaguantes bucais em troca da aquisição desses produtos. E até mesmo equipamentos grandes como lavadoras de piso, polidoras High Speed e lavadoras de louça são comuns no regime de comodato. Além desses produtos, também é possível encontrar fornecedores que instalam centrais de dosagem que produzem produtos de limpeza na medida exata do necessário para suas atividades.</p>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">6.7.2) Locação: </p>
                            <hr>

                            <p>A locação de bens móveis nasce quando uma das partes de uma relação comercial se obriga a ceder o direito de uso e gozo de um bem a terceiro, por tempo determinado ou não, mediante certa retribuição, que na maior parte das vezes se reflete na prestação pecuniária estabelecida por intermédio de contrato. 
                            <br><br>Na constância deste contrato, existem obrigações mútuas entre as partes, as quais sempre devem ser cumpridas. O Locador tem a obrigação de entregar o bem locado ao locatário, com suas pertenças e bom estado para o uso que se destina, bem como garantir que durante o tempo do contrato o seu pleno funcionamento.
                            <br><br>Já com relação ao Locatário, este se obriga a utilizar o bem locado apenas naquilo que foi previamente convencionado, zelar pela integridade do bem, efetuar o pagamento do aluguel no prazo e local estipulado, informar o locador acerca de questões fora da ordenação estabelecida e restituir o bem locado no fim da locação, caso este não esteja em condições de uso, salvas as deteriorações naturais do uso regular.
                            <br><br>Importante salientar, caso o locatário venha fazer uso diverso do que fora ajustado ou danificar o equipamento devido uso inadequado, o Locador poderá rescindir o contrato imediatamente, além de exigir perdas e danos sobre eventual prejuízo causado.
                            <br><br>Em contraponto, o Locador não poderá exigir a devolução do bem locado, em meio ao prazo da constância do contrato com prazo determinado, sem ressarcir o Locatário em perda e danos resultantes da rescisão antecipada do contrato. Assim como, o Locatário não poderá devolver o bem locado antes do término do contrato, salvo pagando proporcionalmente o aluguel e multa previamente estipulada no contrato.
                            <br><br>Por fim, a extinção do contrato de locação se dará no fim do prazo determinado, quando este existir, sem a necessidade de notificar o Locatário. No entanto, caso o locatário permaneça em posse do bem locado, sem oposição do Locador.
                            <br><br>É importante frisar que nesse tipo de relação, tanto comodato quanto a locação, há necessidade de ganho mútuo. Vejamos alguns aspectos inegáveis desse ganho:</p>

                            <ol>
                                <li>equipamentos, cedidos em comodato ou locados, tem grande chance de ter o uso e consumo otimizados pelos fornecedores. Uma vez que isso ocorra, o cliente obterá os melhores resultados no seu uso, seja ele em economia, produtividade ou qualidade.</li>
                                <li>a manutenção dos itens locados ou em regime de comodato é, muitas vezes, realizada pelo fornecedor ou em rede autorizada, o que evidentemente traz vantagens para os clientes, uma vez que as eventuais paradas são minimizadas ou até mesmo neutralizadas;</li>
                                <li>ausência de investimento nos equipamentos.</li>
                            </ol>

                            <p class="Texto">Um último e importantíssimo aspecto é o da atualização tecnológica, pois muitos equipamentos locados ou cedidos em comodato passam por melhorias constantes e impossíveis de se acompanhar quando os clientes são os donos dos equipamentos. 
                            <br><br>No entanto para que sejam garantidas as cláusulas pactuadas em contrato os bens de terceiros provenientes de comodato e locação deverão ser relacionados no Termo de Responsabilidade e seguir os mesmos critérios de controle físico utilizados no caso de bem próprio inclusive inventariados periodicamente. Em caso de desaparecimento dos mesmos, o órgão poderá ser penalizado de acordo com o previsto no respectivo Contrato em Comodato ou Locação.
                            </p>

                                
                            


                            
          
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
