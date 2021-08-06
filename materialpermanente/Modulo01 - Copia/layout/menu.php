<style>
    .MenuTopico {
        color: #274F23 !important;
        font-weight: bold !important;
    }
</style>

<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active ps ps--active-y">
            <div class="m-4">
                <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                </a> -->
                <img class="img-fluid" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" alt="Logo EGPCE">
            </div>
            <div class="sidebar-menu">
                
                <ul class="menu ms-3">
                    <li class="sidebar-item">
                        <a href="Topico01.php" class="MenuTopico sidebar-link">Tópico 01 - Apresentação</a>
                    </li>

                    <li class="sidebar-item has-sub">
                        <a href="#" class="MenuTopico sidebar-link">Tópico 02 - Interação Humano-Computador</a>

                        <ul class="submenu">
                        <li class="sidebar-item">
                                <a href="Topico02.php#Inicio" class="sidebar-sub">
                                    <span>Início</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="Topico02.1.php#SubTopico1.1" class="sidebar-sub">
                                    <span>2.1 - Áreas de estudo em IHC</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="Topico03.php" class="MenuTopico sidebar-link">Tópico 03 - História de UX</a>
                    </li>

                    <li class="sidebar-item">
                        <a href="Topico04.php" class="MenuTopico sidebar-link">Tópico 04 - Disciplinas de UX</a>
                    </li>

                    <li class="sidebar-item">
                        <a href="Topico05.php" class="MenuTopico sidebar-link">Tópico 05 - Quem é usuário?</a>
                    </li>

                    <li class="sidebar-item">
                        <a href="Topico06.php" class="MenuTopico sidebar-link">Tópico 06 - Benefícios de UX</a>
                    </li>

                    <li class="sidebar-item">
                        <a href="Referencias.php" class="MenuTopico sidebar-link">Referências</a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
