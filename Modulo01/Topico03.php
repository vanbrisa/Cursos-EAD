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
                    
                            <h2 class="Titulo">Tópico 03 - Importância da gestão de bens (CONTROLE ADMINISTRATIVO):</h2>

                            <br>

                            <p><strong>Objetivo:</strong> Compreender a importância da Gestão de Bens como sistema de controle e conciliação dos saldos patrimoniais das entidades da administração pública, assim como os mecanismos de preservação do patrimônio público implantado pela Lei Complementar nº 101 de 04 de maio de 2000, além dos elementos básicos para o planejamento patrimonial.</p>

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">A gestão de bens na administração pública e privada é de grande importância, pois exerce influência direta na formação da estrutura de uma entidade. Na atividade pública, o conjunto de bens são destinados a satisfação do interesse coletivo e na prestação do serviço público, por sua vez, na atividade privada os bens patrimoniais são destinados a produção de riqueza para a entidade.</p>
                            </div>

                            <p>A gestão patrimonial compreende diversas atividades, entre elas a de tombamento, registro, guarda, controle, movimentação, preservação, baixa, incorporação e inventário dos bens que integram o acervo patrimonial da entidade pública ou privada, além da designação de pessoas responsáveis pela condução dessa atividade.</p>
                            
                            <p>A gestão patrimonial, além de prover informações para a tomada de decisão, também é transparente o suficiente para atender a outros interessados, como contadores, auditores internos e independentes, bancos, exigências licitatórias, entre outros. Em processos de auditoria, executados tanto pelo Tribunal de Contas do Estado – TCE como pela Controladoria Geral do Estado – CGE, por exemplo, costuma-se realizar diversas análises e conferências para certificação dos saldos constantes nas demonstrações financeiras com os saldos físicos localizados nas instalações da entidade. Como, geralmente, a conta de ativo imobilizado é bem expressiva em termos de valores e importância operacional, um grande esforço é dedicado para certificar a coesão do controle patrimonial. </p>


                            <p>As instituições, tanto privadas como as públicas, cada vez mais tem revisado sua forma de gerenciar seus patrimônios. Considerando que, os recursos para a aquisição e manutenção das entidades têm sido escassos, faz-se necessário um aprimorando constante de suas formas de controle, para que reflitam em uma maior eficiência e eficácia nos resultados obtidos, demonstrando responsabilidade com a gestão dos recursos públicos e diretamente com a população, que é sua principal financiadora.</p>

                            <!-- Fique Atento -->
                            <div class="FiqueAtentoCaixa">
                                <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                <p class="FiqueAtentoTexto">O controle patrimonial das entidades públicas, para que seja utilizado de maneira eficiente, demanda esforços para o desenvolvimento de ferramentas para monitoramento, como o cadastramento, a identificação física, a emissão do termo de responsabilidade e de movimentação desses bens assinados pelo gestor direto do patrimônio, além da realização de inventários.</p>
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
                    <a href="Topico02.1.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
