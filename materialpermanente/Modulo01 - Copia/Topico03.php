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
                    
                            <h2 class="Titulo">Tópico 03 - História de UX</h2>

                            <br>

                            <p>Experiência de usuário é uma área multidisciplinar de estudo, que, ao longo do tempo, evoluiu a partir de disciplinas diferentes. Experiência de usuário é o estudo do uso que as pessoas fazem de artefatos por meio de atividades guiadas e essa base vem das ciências de comportamento, especificamente ergonomia, psicologia e ‘human factors’ (MACEDO, 2014).</p>

                            <p>A evolução do termo ao que conhecemos hoje é resultado de mais de 30 anos em pesquisas científicas aplicadas no mercado. Contar essa história será sempre de uma forma breve, já que não é possível contar a história de todas as disciplinas que esse tema abrange. Vamos agora voltar no tempo para conhecer onde essas disciplinas se encontram para resolver problemas no uso de sistemas.</p>

                            <p style="color: #465564"><strong>1857 - Ergonomia </strong></p>
                            <hr>

                            <p>A revolução industrial proveu meios para a estruturação dos estudos sobre como criar ferramentas com as quais os trabalhadores das fábricas pudessem realizar suas atividades de forma mais eficiente. O desenvolvimento dessas metodologias resultou na Ergonomia, termo cunhado por Wojciech Jastrzębowski em 1857 (MACEDO, 2014). </p>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">O termo <strong>ergonomia</strong> deriva das palavras gregas <em>ergon</em> ("trabalho") e <em>nomos</em> ("lei natural"). </p>
                            </div>

                            <br><br><p style="color: #465564"><strong>1885 - Pós-Revolução Industrial </strong></p>
                            <hr>

                            <p>Após o período da Revolução Industrial, o legado dos novos ambientes de trabalho manteve a necessidade de compreender como funcionários poderiam interagir com máquinas ou processos para entregar resultados de forma mais eficiente. A produtividade era o centro da produção Fordista e Taylorista, comumente aplicados na época.</p>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto"><a href="https://www.diferenca.com/taylorismo-fordismo-e-toyotismo/#:~:text=O%20Taylorismo%20e%20o%20Fordismo,grande%20produtividade%20com%20menor%20custo." target="_blank">O <strong>Taylorismo</strong> e o <strong>Fordismo</strong></a> enfatizaram os princípios de fabricação. O Taylorismo iniciou a partir do estudo da mão de obra na produção industrial, organizando o trabalho de modo a obter grande produtividade com menor custo. O Fordismo manteve o mecanismo de produção e organização semelhante ao taylorismo, porém adicionou a esteira rolante, ditando um novo ritmo de trabalho. O filme “Tempos Modernos”, de Charlie Chaplin representa bem esse estilo, como pode ser visto na <strong>Figura 14</strong>.</p>
                            </div><br>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura14.gif" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                    <img class="img-fluid" width="300" src="imagens/Figura14.gif" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Fonte: Google</p>
                            </div>

                            <!-- Imagem 14 - MODAL -->
                            <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura14.gif" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 14:</strong> Uma esteira rolante industrial no filme “Tempos Modernos”</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 14 - End -->

                            

                            <p>Dentro desse contexto um casal de estudiosos se destacou: <strong>Lillian Gilbreth  e Frank Gilbreth</strong> (<strong>Figura 15</strong>). Ambos engenheiros e ela doutora em psicologia, uniram as duas áreas de atuação para entender sobre otimização de tempo e produtividade, aplicando resultados de um profundo estudo psicológico nos hábitos e produções industriais. Lillian Gilbreth ainda avançou em áreas como ergonomia de materiais, ferramentas e equipamentos voltados para atividades diárias. </p>

                            <p>O casal Gilbreth é mais conhecido no âmbito da Administração, mas, como mencionado anteriormente, a experiência de usuário é multidisciplinar e a bem conhecida <strong>análise de tempos e movimentos</strong> do casal influenciou no que aplicamos e entendemos hoje como UX. Afinal, nós continuamos em busca da otimização do tempo e de processos para simplificar tarefas e em busca de melhor produtividade. </p>

                            <div class="row">
                                <p class="TituloFigura text-center"><strong>Figuras 15 e 15.1:</strong> Casal Gilbreth e o livro sobre análise de tempos e movimentos</p>
                                <div class="col-sm">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura15.png" data-bs-toggle="modal" data-bs-target="#Imagem15">
                                            <img class="img-fluid" width="250" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                        </a>
                                    </div>

                                    <!-- Imagem 15 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura15.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 15</strong> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 15 - End -->
                                    
                                </div>
                                <div class="col-sm">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura15.1.png" data-bs-toggle="modal" data-bs-target="#Imagem15_1">
                                            <img class="img-fluid" width="190"  src="imagens/Figura15.1.png" alt="Alt da imagem fica aqui">
                                        </a>
                                    </div>

                                    <!-- Imagem 15.1 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem15_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura15.1.png" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 15.1</strong> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 15.1 - End -->
                                          
                                </div>
                                <p class="FonteFigura text-center">Fonte: <a href="https://www.portal-gestao.com/artigos/7623-frank-e-lillian-gilbreth,-os-pioneiros-da-produtividade.html" target="_blank"> Portal Gestão</a> e <a href="https://www.marilia.unesp.br/Home/Eventos/2016/rodrigo-moreira-vieira.pdf" target="_blank">Blog Marília UNESP</p>
                            </div>

                            <br><!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto"><a href="https://pt.wikipedia.org/wiki/Lillian_Moller_Gilbreth" target="_blank">Lillian Gilbreth</a> foi fundamental no desenvolvimento da cozinha moderna. A ela é creditada a invenção de latas de lixo com pedal e as prateleiras internas dos refrigeradores. Quando trabalhava na General Electric, ela entrevistou mais de quatro mil mulheres para desenvolver fogões, pias e outros equipamentos de cozinha com a altura e peso adequados.</p>
                            </div>

                            <br><p style="color: #465564"><strong>1879 - Psicologia aplicada </strong></p>
                            <hr>

                            <p>Em outros lugares do mundo, cientistas estudavam os modelos de pensamento, sobre como realizamos as tarefas de maneira cognitiva, e o que nos motiva. Em 1879, Wilhelm Wundt fundou o primeiro laboratório de psicologia aplicada, como sensações táteis, percepções espaciais, processos atencionais, sentimentos e afetos, processos de associação e memória, etc (ARAUJO, 2009). A criação desse laboratório teve impacto em como as pesquisas eram realizadas e conduzidas. O protocolo de avaliação de UX hoje evoluiu a partir desse formato.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                    <img class="img-fluid" width="300" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                </a>
                                <p class="FonteFigura">Fonte: <a href="https://psicoativo.com/2016/08/quem-criou-o-primeiro-laboratorio-de-psicologia-experimental.html#:~:text=Wilhelm%20Wundt,para%20uma%20disciplina%20cient%C3%ADfica%20%C3%BAnica." target="_blank">Psicoativo</a></p>
                            </div>

                            <!-- Imagem 16 - MODAL -->
                            <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 16:</strong>Wilhelm Wundt e sua equipe no laboratório de psicologia aplicada na Universidade de Leipzig, Alemanha</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 16 - End -->

                            

                            <p style="color: #465564"><strong>1918 - Primeira Guerra Mundial </strong></p>
                            <hr>

                            <p>Com a Primeira Guerra Mundial, houve um aumento da importância de carros e aviões, e a emergência em estabelecer a nova ciência “<em>human factors</em>”, ou “fatores humanos” em português. As metodologias e <em>insights</em> da ergonomia e da psicologia foram usados para entender como as pessoas se comportavam enquanto utilizavam ferramentas complexas e submetidas a diferentes ambientes (MACEDO, 2014).</p>

                            <p style="color: #465564"><strong>1960 - Interface e indústria da computação </strong></p>
                            <hr>

                            <p>O termo “interface” foi inventado por volta de 1880, mas a palavra não teve muita repercussão até 1960 quando começou a ser utilizada pela indústria computacional (REBELO, 2009). Enquanto <em>interação</em> tem um enfoque mais amplo com novos campos de estudo envolvendo a comunicação entre usuários e computadores ou outros tipos de produtos, o termo <em>interface</em> estabelece o conceito de ponto de interação entre um computador e outra entidade (REBELO, 2009).</p>
                                
                            <p>Ainda na década de 60, Richard Saul Wurman foi uma das primeiras pessoas a usar o termo “<strong>Arquitetura da Informação</strong>”, que hoje integra um dos principais fundamentos de UX. O termo esteve presente em seus livros da época e em 1976 ele presidiu um evento que tinha esse nome e deu origem ao termo.</p>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto">O livro intitulado “<em>Information Anxiety</em>” (WURMAN, 1991), traduzido para português como “Ansiedade de informação: como transformar informação em compreensão”, defende que <strong>não temos explosão de informação, mas sim de dados</strong>. Segundo Wurman, há uma distância grande entre os dados se tornarem informação, que é ainda maior para se tornarem algo compreensível. </p>
                            </div>

                            <br><!-- Curiosidade -->
                            <div class="CuriosidadeCaixa">
                                <p class="CuriosidadeTitulo"> Curiosidade</p>
                                <p class="CuriosidadeTexto">Wurman é também um dos criadores do famoso <a href="https://www.ted.com/" target="_blank">TED — <em>Technology, Entertainment and Design</em></a>, que é um círculo de palestras rápidas que explora temas diversos em um formato inovador.</p>
                            </div>

                            <br><p style="color: #465564"><strong>1970 - UI </strong></p>
                            <hr>

                            <p>Por volta de 1970, pesquisadores da área computacional iniciam estudos sobre a <strong>interface com o usuário</strong>, do inglês <strong><em>UI – user interface</em></strong>, também conhecida por interface homem-máquina. A sofisticação dos sistemas computacionais iriam solicitar um termo mais abrangente na década seguinte.</p>

                            <p style="color: #465564"><strong>1980 - IHC </strong></p>
                            <hr>

                            <p>Em meados dos anos 80, o termo <strong>IHC</strong> é adotado por possuir um enfoque mais multidisciplinar, como é necessário para a nova área de estudo. Preece (2013) esclarece que, mais do que o projeto de interface, a área de IHC se preocupa com as comunicações ou interações entre usuários e computadores, definição já discutida na seção “2.1. Áreas de estudo em IHC”.</p>

                            <p style="color: #465564"><strong>1988 - “O design do dia-a-dia” </strong></p>
                            <hr>

                            <p>Em 1988 Don Norman, cientista cognitivo, publicou o livro <em>O Design do Dia-a-dia</em>. No livro, Norman descreve a psicologia por trás do que ele chama de design “bom” e “ruim” por meio de estudos de caso. Baseado nestes resultados, ele propõe princípios de design. </p>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto"><a href="https://pt.wikipedia.org/wiki/Donald_Norman" target="_blank">Don Norman</a> é Design Thinker, Cientista Cognitivo, e um dos maiores estudiosos de design UX. É professor emérito de ciência cognitiva na Universidade da Califórnia em San Diego, professor de ciência da computação na Universidade Northwestern, leciona na Universidade de Stanford e é co-fundador do Nielsen Norman Group, considerado atualmente o grupo mais consolidado da área. </p>
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura17.png" data-bs-toggle="modal" data-bs-target="#Imagem17">
                                        <img class="img-fluid" width="300" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Fonte: <a href="https://psicoativo.com/2016/08/quem-criou-o-primeiro-laboratorio-de-psicologia-experimental.html#:~:text=Wilhelm%20Wundt,para%20uma%20disciplina%20cient%C3%ADfica%20%C3%BAnica." target="_blank">Psicoativo</a></p>
                                </div>

                                <!-- Imagem 17 - MODAL -->
                                <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura17.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 17: </strong>Don Norman</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 17 - End -->
                                
                            </div>

                            <br><p style="color: #465564"><strong>1990 - UX </strong></p>
                            <hr>

                            <p>Don Norman popularizou o termo “<strong>user experience</strong>” enquanto trabalhava na Apple nos anos 90. Recentemente Norman falou sobre o <a href="https://www.youtube.com/watch?v=9BdtGjoIN4E&feature=youtu.be" target="_blank">termo UX</a> em um vídeo da NNGroup e relembrou de como a experiência de utilizar um computador era fraca, complexa e chegava até a dar medo. Eram estes pontos que o departamento de Arquitetura de Experiência do Usuário da Apple, onde ele trabalha, buscava melhorar. Ele também afirma que o termo hoje está sendo utilizado de forma indevida, pois desenhar uma interface não significa trabalhar na experiência do usuário. De acordo com ele, experiência do usuário “<strong>é a forma como você vê o mundo, é a forma como você experimenta sua vida, ou um serviço, ou um aplicativo</strong>”. </p>

                            <p>Além do termo UX, Norman disseminou termos da área bastante utilizados hoje. Entre estes, “<strong>design centrado no usuário</strong>” <em>(User Centered System Design)</em>, que é utilizado para descrever o design baseado nas necessidades do usuário, considerando estética, por exemplo, como algo secundário. O design centrado no usuário envolve simplificar a estrutura de tarefas, tornando coisas mais visíveis, criando correspondências corretas para controles e funcionalidades, explorando o poder das limitações, e projetando interfaces para suportar erros.</p>

                            <br><p style="color: #465564"><strong>1994 - Heurísticas de Nielsen </strong></p>
                            <hr>

                            <p>É nesse momento que conhecemos o segundo nome mais importante atualmente na área: Jakob Nielsen. Em 1994, <strong>Jakob Nielsen</strong> publicou o livro <em>Engenharia de Usabilidade</em>, que traz uma definição sobre métodos de pesquisa para usuários e compila boas práticas da área.</p>
                                
                            <p>Em 1994, Nielsen publicou as <strong>10 heurísticas de usabilidade</strong>, ainda hoje bastante utilizadas. As heurísticas de Nielsen, como são chamadas, são a base dos critérios de boas práticas de usabilidade. Elas servem como base para criação de outras heurísticas e práticas. Apesar de não terem sido as primeiras, ao longo do tempo passaram a ser as mais populares. Hoje as heurísticas são utilizadas em vários momentos do processo de design. Junto com as heurísticas, Nielsen divulgou um método de inspeção de usabilidade que era barato, rápido e fácil de aplicar.</p>

                            <!-- Saiba Mais -->
                            <div class="SaibaMaisCaixa">
                                <p class="SaibaMaisTitulo"> Saiba Mais</p>
                                <p class="SaibaMaisTexto"><a href="https://pt.wikipedia.org/wiki/Jakob_Nielsen" target="_blank"><strong>Jakob Nielsen</strong></a> é um cientista da computação com Ph.D. em interação homem-máquina. É um <strong><em>User Advocate</em></strong> (a prática de usar porta-vozes designados para facilitar a interação entre usuários e designers dos produtos que utilizam) e diretor da Nielsen Norman Group, que ele co-fundou com o Don Norman.  </p>

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                        <img class="img-fluid" width="300" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Fonte: Google</p>
                                </div>

                                <!-- Imagem 18 - MODAL -->
                                <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">
                                                <p class="TituloFigura"><strong>Figura 18:</strong> Jakob Nielsen</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 18 - End -->
                                
                            </div>

                            <br><p style="color: #465564"><strong>2000 - A era dos dispositivos portáteis </strong></p>
                            <hr>

                            <p>Neste início de século XXI, nós vivemos a popularização dos <em>smartphones</em> e mais recentemente de dispositivos vestíveis, como relógios inteligentes. Os critérios de usabilidade tornaram-se mais especializados a cada evolução dos sistemas e ganham cada vez mais espaço no mundo da tecnologia.</p>

                            <p>Hoje não é mais um privilégio das grandes empresas ter um departamento ou equipe dedicada à experiência do usuário. O número de profissionais e especialistas na área de projeto de interação cresce na medida em que a demanda por produtos mais usáveis é solicitada por usuários (REBELO, 2009). Aos poucos todos se dão conta que há um retorno positivo no cuidado com a qualidade da interação.</p>

                            <p>Em meio a uma pandemia, percebemos o quanto os dispositivos e sistemas nos conectam e estão presentes em nosso dia a dia. Como vocês viram, ao longo da história dessa área de estudo, muitos termos e especialidades foram envolvidos para tratar do mesmo assunto: interação com interfaces de sistemas. Hoje é possível falar tanto de UX quanto da arquitetura da informação de um sistema, pois os termos que vieram de diferentes disciplinas coexistem. Essa rede complexa de disciplinas busca as soluções mais adequadas às pessoas. Como você vê o futuro dessa área?</p>

                            <br><p style="color: #465564"><strong>A evolução das interfaces </strong></p>
                            <hr>

                            <p>Todos os fatos históricos apresentados acompanharam a evolução das interfaces computacionais. Entender de uma forma global a evolução das interfaces explica como a área cresceu e se popularizou. Segundo Fernandez (2007), a evolução das interfaces se apresenta da seguinte forma:</p>

                            <ol>
                                <i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Anos 1950:</strong> Interface de hardware “para engenheiros” com diversos botões de interação
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Anos 1960-1970:</strong> Interface de programação (COBOL, FORTRAN)
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Anos 1970-1990:</strong> Interface de terminais (linguagens de comando)
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Anos 1980:</strong> Interface de interação para diálogo (GUIs, multimídia)
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Anos 1990:</strong> Interface para realizar trabalho (redes e grupos)
                                <br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>A partir de 2000: </strong>Interface torna-se onipresente (Aparelhos celulares, bluetooth, dispositivos móveis, eletrônicos, por toda a parte, telas interativas e muitas tecnologias embarcada)



                            
          
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
