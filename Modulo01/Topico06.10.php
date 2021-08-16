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
                    
                            <h2 class="Titulo">6.10) Inventário de Bens Móveis:</h2>

                            <br>
                            
                            <p class="Texto">O inventário patrimonial é o levantamento físico, sendo o instrumento de controle que permite o ajuste dos dados escriturais com o saldo físico do acervo patrimonial em cada órgão e entidade, nos almoxarifados e depósitos. É o levantamento da situação dos bens, equipamentos e materiais permanentes em uso e a identificação da necessidade de manutenção ou reparos, a verificação da disponibilidade dos bens da unidade, bem como o saneamento do acervo, e ainda:</p>

                            <ol>
                                <li>Ajuste dos dados escriturais de saldos e movimentações dos estoques com o saldo físico real nas instalações de armazenagem;</li>
                                <li>Análise do desempenho das atividades do encarregado do patrimônio através dos resultados obtidos no levantamento físico;</li>
                                <li>Levantamento da situação dos materiais estocados no tocante ao saneamento dos estoques;</li>
                                <li>Levantamento da situação dos equipamentos e materiais permanentes em uso e das suas necessidades de manutenção e reparos;</li>
                                <li>Constatação de que o bem móvel não é necessário naquela unidade;</li>
                                <li>Notificação pela Comissão em face da falta de bens no local assentado na relação, no prazo máximo estabelecido para regularização ou justificativa da ausência do material.</li>
                            </ol>

                            <p>A realização de um inventário se dá em função da finalidade instituída, seja para apuração de resultados, controle e prestação de contas, exigências de ordem legal ou natureza estritamente fiscal. Dessa forma, a doutrina consagra alguns tipos usuais para a Administração Pública. Dessa forma, o inventário pode ser:</p>

                            <ol>
                                <li><strong>De verificação: </strong>realizado a qualquer tempo, com o objetivo de verificar qualquer bem ou conjunto de bens, por iniciativa da Gerência Setorial de Patrimônio ou a pedido de qualquer Detentor de Carga ou Responsável;;</li>
                                <li><strong>De transferência: </strong>realizado quando da mudança de um titular de função de confiança detentor de carga patrimonial;</li>
                                <li><strong>De criação: </strong>realizado quando da criação de uma função de confiança, de uma Unidade Administrativa, Gerência ou de novo endereço individual; </li>
                                <li><strong>De extinção: </strong>realizado quando da extinção ou transformação de uma função de confiança detentora de carga patrimonial, de uma Unidade Administrativa ou Gerência ou de endereço individual;</li>
                                <li><strong>Anual: </strong>realizado para comprovar a exatidão dos registros de controle patrimonial de todo o patrimônio do Estado, demonstrando o acervo de cada Detentor de Carga, de cada Unidade Administrativa, o valor total do ano anterior e as variações patrimoniais ocorridas no exercício, elaborado de acordo com o Plano de Contas da Administração Pública.</li>
                            </ol>

                            <p class="Texto">Sugestões para preparação e gestão do inventário:</p>

                            <ul>
                                <li>Constituir a “comissão de inventário” com servidores componentes da Unidade Setorial de Patrimônio e outros servidores de outras Unidades Administrativas do Órgão/Entidade;</li>
                                <li>Designar um servidor como Presidente da Comissão, preferencialmente com experiência na área de Administração de Material e Patrimônio;</li>
                                <li>Convocar, para auxiliar a Comissão de Inventários servidores públicos do Órgão/Entidade e funcionários de empresas prestadoras de serviços, para desenvolver tarefas administrativas sob supervisão do Presidente da Comissão;</li>
                                <li>A Comissão de Inventário é designada pelo respectivo Titular do Órgão/Entidade, antes do final de cada exercício e em tempo hábil para a execução dos levantamentos em todos os endereços individuais do Estado.</li>
                                <li> A comissão deve cientificar o dirigente de Órgão/Entidade sobre todos os endereços individuais envolvidos, com antecedência mínima de 72 horas, da data marcada para o início dos trabalhos, a fim de viabilizar o acesso aos locais em inventário;</li>
                                <li>Solicitar o livre acesso em qualquer recinto, para efetuar levantamento e vistoria de bens;</li>
                                <li>A Comissão deve solicitar aos detentores de Carga Patrimonial elementos de controle interno e outros documentos necessários aos levantamentos;</li>
                                <li>Requisitar servidores, máquinas, equipamentos, transporte, materiais e tudo mais que for necessário ao cumprimento das tarefas da Comissão;</li>
                                <li>Identificar a situação patrimonial e o estado de conservação dos bens inventariados, discriminando em relatório, os suscetíveis de desfazimento, para ciência do Titular do Órgão/Entidade;</li>
                                <li>Relacionar e identificar com numeração própria, os bens que se encontram sem o número de patrimônio ou sem o devido registro patrimonial para as providências cabíveis. Propor ao Titular do Órgão/Entidade a apuração de irregularidades constatadas;</li>
                            </ul>

                                
                            


                            
          
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
