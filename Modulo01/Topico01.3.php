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
                            
                            <h2 class="Titulo">01.3 - BENS TANGÍVEIS:</h2>

                            <br>

                            <p>Os bens tangíveis referem-se aos recursos físicos de longo prazo que uma entidade possui e que consegue mensurar o valor. Esses ativos são adquiridos com a intenção de realizar operações que gerem benefícios econômicos e/ou manutenção da atividade da entidade. Outra característica é que este tipo de bem, na maioria dos casos, possui uma vida útil econômica. Por isso, eles devem ser depreciados. Isso quer dizer que, mensalmente, deve ser deduzido uma quota do valor contábil de cada bem, para que no final de sua vida útil reste apenas o seu valor residual.</p>
                            
                            <p>O intuito da depreciação é garantir que, ao final da vida útil do bem, a entidade tenha uma reserva para adquirir outro e, assim, continuar a sua operação. Por isso, a depreciação é uma despesa, mas não representa uma saída de dinheiro. Ao mesmo tempo, a depreciação é uma conta redutora do ativo imobilizado. Isso, na prática, garante que o seu balanço patrimonial reflita a realidade com mais precisão, uma vez que o valor dos ativos é ajustado com o passar do tempo.</p>

                            <p>Por outro lado, alguns bens tangíveis não perdem valor com o passar do tempo, tampouco possui uma vida útil econômica. Por isso, não há o que se falar em depreciação. Os exemplos mais conhecidos são os terrenos. Vale ressaltar que entidades que trabalham com exploração de minas e jazidas devem registrar esses bens em seu grupo de ativo imobilizado. Apesar de ser uma espécie de terreno, este tipo de bem é utilizado para uma finalidade específica, que é a extração de recursos naturais. Por sua vez, esses recursos são finitos. Logo, é preciso mensurar esses ativos de acordo com sua capacidade produtiva e reduzir seu valor contábil à medida que os recursos forem se esgotando. Neste caso, a nomenclatura utilizada para demonstrar a redução do valor do bem é “exaustão” e não “depreciação”.</p>

                            <p>As normas contábeis para registro, mensuração e avaliação do ativo imobilizado do setor público foram editadas pelo Conselho Federal de Contabilidade especificamente a norma NBC TSP 07 – Ativo Imobilizado. Os bens tangíveis do ativo imobilizado, especificamente os materiais permanentes (bens móveis) serão o enfoque do curso daqui por diante.</p>

                      
                            

                                                             
                            
                            
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
