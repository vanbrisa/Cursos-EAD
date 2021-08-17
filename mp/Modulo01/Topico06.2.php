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
                    
                            <h2 class="Titulo">6.2) Conceitos básicos e nomenclaturas da gestão de material permanente:</h2>

                            <br>

                            <ul class="Texto">
                                
                                <i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Gestão de Material Permanente</strong> - conjunto de ações destinadas a assegurar os registros e os controles das atividades relacionadas com o emprego, a movimentação e o desfazimento dos materiais dessa natureza.
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Incorporação Patrimonial</strong> - inclusão de um bem no acervo patrimonial da Administração Pública, bem como a adição do seu valor à conta do ativo imobilizado.
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Transferência Patrimonial</strong> – modalidade de movimentação de material permanente dentro do Poder Executivo da Administração Direta com transferência de responsabilidade, de uma unidade organizacional para outra;
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Doação</strong> – operação de transferência do direito de posse e de propriedade de bens, mediante autorização competente;
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Cessão</strong> – modalidade de movimentação provisória de material do acervo, com transferência gratuita de posse e de responsabilidade entre os órgãos e entidades da Administração Direta e Indireta;
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Saída Provisória</strong> – É a movimentação de bens patrimoniais para fora da instalação ou dependência onde estão localizados, em decorrência da necessidade de conserto, manutenção ou da sua utilização temporária por outro órgão ou entidade.
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Carga Patrimonial</strong> – é o instrumento administrativo de atribuição de responsabilidade pela guarda, conservação e uso dos bens permanentes ao seu consignatário;
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Descarga</strong> – é o instrumento administrativo de transferência de responsabilidade pela guarda e uso do material.
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Termo de Responsabilidade</strong> – é o instrumento administrativo que comprova e atribui a responsabilidade pela guarda, conservação e uso dos bens permanentes, devendo ser firmado pelo titular da área usuária.
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Material Inservível</strong> – é o que não mais pode ser utilizado para o fim a que se destina, em virtude da perda de suas características.
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Material Antieconômico</strong> - é o material permanente cuja manutenção ou recuperação seja de alto custo e apresente mau desempenho em razão do esgotamento de sua vida útil, desgaste prematuro ou obsoletismo.
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Material Recuperável</strong> - é o material cuja recuperação seja possível, orçando o conserto em até 50% (cinqüenta por cento) de seu valor de mercado. Art 3º, parágrafo único do Decreto Federal n° 99.658 de 30/10/1990.
                                <br><br><i class="fa fa-check-circle CorVerdeClaroEstado"></i> <strong>Desincorporação Patrimonial</strong> – é a saída de bens do acervo do órgão/entidade decorrente de venda, permuta, doação ou transferência.
                            </ul>

                            <p class="Texto">Como regra todo material permanente antes de compor o acervo patrimonial do órgão ou entidade passa pelo processo de recebimento o qual tivemos oportunidade de estudar no item 6.1 - Recebimento de materiais e bens. Tal processo, tanto na forma operacional como financeira, considera o material permanente recebido como “estoque” e enquanto permanecer nessa condição não sofrerá a depreciação, mesmo que classificado como material permanente no Catálogo de Materiais. Excetuando-se logicamente os bens imóveis que terão procedimento específico, o ciclo da gestão patrimonial iniciará com a retirada do material do estoque tendo como resultante as funcionalidades na sequência.</p>
                                
                            


                            
          
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
