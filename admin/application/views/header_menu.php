        <ul id="imoveis" class="dropdown-content">
            <li><a href="<?php echo base_url('imovel/inserir');?>">Inserir</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url('imovel/buscar');?>">Buscar</a></li>  
        </ul>
        <ul id="clientes" class="dropdown-content">
            <li><a href="#1">Interessados</a></li>
            <li class="divider"></li>
            <li><a href="#2">Proprietários</a></li>  
            <li class="divider"></li>
            <li><a href="#2">Atendimentos</a></li>  
        </ul>
        <nav>
            <div class="nav-wrapper">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="<?php echo base_url();?>">Início</a></li>
                    <li><a class="dropdown-imoveis" href="#!" data-activates="imoveis">Imóveis<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                    <li><a class="dropdown-clientes" href="#!" data-activates="clientes">Clientes<i class="mdi-navigation-arrow-drop-down right"></i></a></li>
                    <li><a href="<?php echo base_url();?>">Documentos</a></li>
                    <li><a href="<?php echo base_url();?>">Relatórios</a></li>
                    <li><a href="<?php echo base_url();?>">Config</a></li>
                </ul>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="<?php echo base_url('logout');?>">Sair</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="<?php echo base_url();?>">Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>">Imóveis</a></li>
                    <li><a href="<?php echo base_url();?>">Clientesa</a></li>
                </ul>
            </div>
        </nav>