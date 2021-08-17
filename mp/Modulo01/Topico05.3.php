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

                            <!-- Sub Título -->
                            <p class="SubTitulo">05.3 - Estrutura Básica de Um Catálogo de Bens, Materiais e Serviços</p>
                            <hr>

                            <br>

                            <p>A Administração Pública brasileira de uma forma geral, para padronizar seus itens de materiais tomou como modelo o Federal Supply Classification - FSC, esse sistema, criado pelo Departamento de Defesa dos Estados Unidos e estabelecido em 1949, surgiu da grande dificuldade operacional com suprimento de materiais durante a Segunda Guerra Mundial, uma vez que os vários órgãos de defesa utilizavam sistemas de classificação próprios.</p>

                            <p>A adoção de um número único de item de material por meio de um sistema unificado de catalogação de suprimentos possibilita que um item seja encontrado em qualquer lugar da Administração Pública.</p>
                           
                            <p>O FSC classifica, descreve e numera uniformemente os itens de suprimento de forma que possam ser encontrados em qualquer lugar do mundo onde atuam os órgãos do governo americano. Ainda, o FSC possui estrutura simples e flexível, permitindo seu uso em entidades, observando-se as adaptações necessárias. </p>
                            
                            <p>O FSC é constituído por quatro algarismos, divididos em dois pares que representam, respectivamente, o grupo e subgrupo, como mostra abaixo. A associação desses dois pares forma a classe, que compreende todo o universo de materiais. O grupo comporta os materiais que tem alguma relação entre si, possibilitando 99 variações. O subgrupo representa uma subdivisão dentro do grupo, juntando itens que tem finalidade e características semelhantes e possui igualmente 99 possibilidades.</p>

                            
                            <p>A normalização se ocupa de maneira pela qual devem ser utilizados os materiais em suas diversas finalidades, bem como da padronização e identificação do material, de modo que tanto o usuário como o almoxarifado possa requisitar e atender os itens utilizando a mesma terminologia. A normalização é aplicada também no caso de peso, medida e formato. </p>

                            <p>Classificar um material é agrupá-lo segunda sua forma, dimensão, peso tipo, uso, etc. A classificação não deve gerar confusão, ou seja, um produto não poderá ser classificado de modo que seja confundido com outro, mesmo havendo semelhanças. A classificação, ainda deve ser feita de maneira que cada gênero de material ocupe seu respectivo local. Por exemplo: produtos químicos poderão estragar produtos alimentícios se estiverem próximos entre si. Classificar material, em outras palavras, significa ordená-lo segundo critérios adotados, agrupando-o de acordo com a semelhança, sem causar confusão ou dispersão no espaço e alteração na qualidade.   </p>

                            <p>Em função de uma boa classificação do material, pode-se partir para a codificação do mesmo, ou seja, representar todas as informações necessárias, suficientes e desejadas por meio de números e/ou letras. Os sistemas de codificação mais comumente usados são: o alfabético, o alfanumérico e o numérico.</p>

                            <p>É de extrema importância manter os citados benefícios da classificação de materiais, isso pode ser obtido por intermédio da Catalogação que consiste em registrar os dados que dizem respeito aos materiais em um sistema de informações que facilite a consulta por parte dos usuários pela sua classificação, especificação ou código. Na tabela abaixo é apresentada a conceituação de cada etapa da classificação de materiais:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Fonte: Estrutura do Federal Supply Classification.</p>
                            </div>
                            <!-- Imagem 02 - MODAL -->
                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 02 - End -->

                            <p>A partir do <em>Federal Supply Classification - FSC</em> os entes federativos da administração pública brasileira desenvolvem sistemas computadorizados de compras eletrônicas, no controle de estoque dos materiais de consumo e controle de material permanente.</p>

                            <p>A estrutura de classificação de um Catálogo adaptado do Federal Supply Classification apresenta-se da seguinte forma:</p>

                            <ul>
                                <i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Nível 0 – Categoria:</strong> Subdivida em Material de Consumo, Material Permanente e Serviço.
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Nível 1 – Grupo:</strong> Estabelece a classificação das categorias.
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Nível 2 – Classe:</strong> Subdivisão do grupo segundo a sua natureza.
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Nível 3 – Material:</strong> Descrição genérica do material/serviço sem caracterização.
                                <br><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Nível 4 – Item de Material:</strong> Especificação do item contendo todas as características de individualização e identificação.
                            </ul>

                            <p>Ver o exemplo a seguir:</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                    <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 03 - MODAL -->
                            <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 03 - End -->

                            <br><p>Decreto Estadual <strong>Nº 32.901</strong> de 17/12/2018, que regulamenta no âmbito da administração pública estadual direta e indireta, o sistema logístico de suprimentos e dá outras providências, em seu CAPÍTULO V DO CATÁLOGO DE BENS, MATERIAIS E SERVIÇOS estabelece o seguinte:</p>

                            <br><center><strong><h4>CAPÍTULO V<br> DO CATÁLOGO DE BENS, MATERIAIS E SERVIÇOS</h4></strong></center><hr>

                            <p><strong>Art. 16.</strong> Catálogo de Bens, Materiais e Serviços será utilizado para classificação e catalogação dos itens nos padrões de qualidade e de desempenho exigidos pelo Governo do Estado, visando a uniformidade e padronização das especificações dos itens adquiridos pela Administração Pública Estadual.</p>

                            <p><strong>Parágrafo único.</strong> Os Órgãos da Administração Pública Estadual Direta, Fundos Especiais, Autarquias, Fundações, Empresas Públicas, Sociedades de Economia Mista e demais entidades controladas direta ou indiretamente pelo Estado, inclusive a Central de Licitações, deverão, obrigatoriamente, utilizar o Catálogo de Bens, Materiais e Serviços do Estado para fazer uso dos itens nas licitações, contratações diretas, chamadas públicas e aquisições por registro de preços.</p>

                            <p><strong>Art. 17.</strong> A Seplag é o Órgão Gestor Geral do Catálogo de Bens, Materiais e Serviços do Estado do Ceará e terá como atribuições:</p>

                            <ol type="I">
                                <li>Indicar o Órgão Gestor do Catálogo de Bens, Materiais e Serviços para cada categoria de itens;</li>
                                <li>Definir as regras para utilização e manutenção do Catálogo de Bens, Materiais e Serviços;</li>
                                <li>Coordenar o plano de manutenção e a atualização do Catálogo de Bens, Materiais e Serviços;</li>
                                <li>Realizar a gestão do Catálogo de Bens, Materiais e Serviços;</li>
                                <li>Garantir a manutenção das funcionalidades do sistema de Catálogo de Bens, Materiais e Serviços; </li>
                                <li>Coordenar os estudos de padronização das especificações dos itens a serem comprados pelos órgãos e entidades da Administração Pública Estadual;</li>
                                <li>Articular a implementação de capacitação para os usuários do Catálogo de Bens, Materiais e Serviços; e</li>
                                <li>Validar e autorizar a inclusão de novos itens no Catálogo de Bens, Materiais e Serviços.</li>
                            </ol>

                            <p><strong>Art. 18.</strong> O Gestor do Catálogo de Bens, Materiais e Serviços, no âmbito da categoria de itens pela qual é responsável, terá como atribuições:</p>

                            <ol type="I">
                                <li>participar da execução do plano de manutenção e a atualização do Catálogo de Bens, Materiais e Serviços;</li>
                                <li>pesquisar, analisar e propor melhorias nas especificações e a inclusão de itens ao Gestor Geral de Catálogo de Bens, Materiais e Serviços;</li>
                                <li>articular com os órgãos e entidades, visando garantir o contínuo aperfeiçoamento do catálogo; e</li>
                                <li>manter o Catálogo de Bens, Materiais e Serviços, no âmbito da categoria de itens pela qual é responsável.</li>
                            </ol>

                            <p>O Catálogo de Bens, Materiais e Serviços do Estado do Ceará poderá ser acessado pelo   <a href="https://s2gpr.sefaz.ce.gov.br/catalogo-web/paginas/catalogo/ItemMaterialServicoListCompleto.seam" target="_blank"> “Portal de Compras”</a> no endereço eletrônico.</p>

                            



                            
          
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
                    <a href="Topico05.2.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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
