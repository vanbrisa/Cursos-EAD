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
                    
                            <h2 class="Titulo">05 - Classificação e Catalogação de Materiais:</h2>

                            <br>

                            <p><strong>Objetivo:</strong> Compreender os benefícios de classificar os materiais para fins de padronização e manejo segundo suas características.</p>

                            <p>Abordamos aqui o tema classificação e catalogação de materiais que é um assunto importante tanto para gestão dos materiais de consumo (almoxarifado) quanto para os materiais permanentes (bens móveis). O objetivo da classificação de materiais e bens é catalogar, simplificar, especificar, normalizar, padronizar e codificar todos os materiais geralmente utilizados pela organização nas suas operações seja este material de consumo ou material permanente (bens). A necessidade de um sistema de classificação é primordial para qualquer organização, pois a sua ausência impede o controle eficiente dos estoques, a criação de procedimentos de armazenagem adequados e a correta operacionalização do almoxarifado e do controle patrimonial.</p>
                           
                            <p>Simplificar material é, por exemplo, reduzir a diversidade de um item empregado para o mesmo fim. Quando houver duas peças para uma finalidade qualquer, aconselha-se a simplificação, ou seja, a opção pelo uso de uma delas. Ao simplificarmos um material, favorecemos sua normalização, reduzimos as despesas e suas flutuações. Por exemplo: cadernos com capa, números de folhas e formato idênticos contribuem para que haja a normalização. Ao requisitar uma quantidade desse material, o usuário fornecerá todos os dados (tipo de capa, número de folhas e formato), o que facilitará sobremaneira não somente sua aquisição, como também o desempenho daqueles que se servem do material, pois se este um dia apresentar uma forma e outro dia outra forma de maneira totalmente diferente será imediatamente identificado. </p>
                            
                            <p>Aliada a simplificação, é necessária uma especificação do material, que é uma descrição minuciosa que possibilita melhor entendimento entre o consumidor e fornecedor quanto ao tipo de material a ser adquirido.</p>

                            
                            <p>A normalização se ocupa de maneira pela qual devem ser utilizados os materiais em suas diversas finalidades, bem como da padronização e identificação do material, de modo que tanto o usuário como o almoxarifado possa requisitar e atender os itens utilizando a mesma terminologia. A normalização é aplicada também no caso de peso, medida e formato. </p>

                            <p>Classificar um material é agrupá-lo segunda sua forma, dimensão, peso tipo, uso, etc. A classificação não deve gerar confusão, ou seja, um produto não poderá ser classificado de modo que seja confundido com outro, mesmo havendo semelhanças. A classificação, ainda deve ser feita de maneira que cada gênero de material ocupe seu respectivo local. Por exemplo: produtos químicos poderão estragar produtos alimentícios se estiverem próximos entre si. Classificar material, em outras palavras, significa ordená-lo segundo critérios adotados, agrupando-o de acordo com a semelhança, sem causar confusão ou dispersão no espaço e alteração na qualidade.   </p>

                            <p>Em função de uma boa classificação do material, pode-se partir para a codificação do mesmo, ou seja, representar todas as informações necessárias, suficientes e desejadas por meio de números e/ou letras. Os sistemas de codificação mais comumente usados são: o alfabético, o alfanumérico e o numérico.</p>

                            <p>É de extrema importância manter os citados benefícios da classificação de materiais, isso pode ser obtido por intermédio da Catalogação que consiste em registrar os dados que dizem respeito aos materiais em um sistema de informações que facilite a consulta por parte dos usuários pela sua classificação, especificação ou código. Na tabela abaixo é apresentada a conceituação de cada etapa da classificação de materiais:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura003.png" data-bs-toggle="modal" data-bs-target="#Imagem003">
                                    <img class="img-fluid" width="450" src="imagens/Figura003.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>
                            <!-- Imagem 003 - MODAL -->
                            <div class="modal fade text-center" id="Imagem003" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura003.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 003 - End -->

                            



                            
          
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
                    <a href="Topico04.3.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico05.1.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
