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
                    
                            <h2 class="Titulo">Tópico 04 - Diferenciação entre material de consumo e material permanente:</h2>

                            <br>

                            <p><strong>Objetivo:</strong> Compreender os critérios de diferenciação entre material de consumo e material permanente estabelecidos pela Portaria Nº 448/2002 da Secretaria do Tesouro Nacional, de forma a classificar adequadamente as despesas com materiais.</p>

                            <p>Como regra, considera-se material permanente os bens com duração superior a dois anos. Contudo, a Portaria STN n° 448/2002, assim como o Manual de Contabilidade Aplicado ao Setor Público – MCASP, ao interpretar a referida regra considera que alguns bens, apesar de terem durabilidade superior a dois anos, podem sofrer um desgaste significativo com o uso, ser perecíveis, frágeis ou mesmo destinados à incorporação ou transformação de outros bens, fator que os enquadraria como bens de consumo.</p>

                            <p>Dessa forma, devem-se analisar a adoção de cinco parâmetros excludentes para a identificação do material permanente, sendo classificado como material de consumo aquele que se enquadrar em um ou mais itens dos que se seguem:  </p>

                           <ol type="I">
                               <li><strong>Durabilidade</strong> - quando o material em uso normal perde ou tem reduzidas as suas condições de funcionamento, no prazo máximo de dois anos;</li>
                               <li><strong>Fragilidade</strong> – material cuja estrutura esteja sujeita a modificação, por ser quebradiço ou deformável, caracterizando-se pela irrecuperabilidade e/ou perda de sua identidade ou funcionalidade;</li>
                               <li><strong>Perecibilidade</strong> – material sujeito a modificação (químicas ou físicas) ou que se deteriora ou perde sua característica normal de uso;</li>
                               <li><strong>Incorporabilidade</strong> - quando destinado à incorporação a outro bem, não podendo ser retirado sem prejuízo das características físicas e funcionais do principal;</li>
                               <li><strong>Transformabilidade</strong> - quando adquirido para fim de transformação.</li>
                           </ol>
                       
                        


                            
          
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
                    <a href="Topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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
