<ul class='nav nav-stacked'>
    <li id='Home'>
        <?php
        echo $this->Html->link("<i class='icon-home'></i>Home", array("controller" => "Home",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
    <li>
        <a class='dropdown-collapse' href='#' id='ServicosBloco'>
            <i class='icon-briefcase'></i>
            <span>Serviços</span>
            <i class='icon-angle-down angle-down'></i>
        </a>
        <ul class='nav nav-stacked' id='ServicosBloco_ul'>
            <li class='servicos' id="servicos">
                <?php
                echo $this->Html->link("<i class='icon-briefcase'></i>Serviços", array("controller" => "Servicos",
                    "action" => "index"), array("escape" => false));
                ?>
            </li>
            <li class='categoriaservicos' id="categoriaservicos">
                <?php
                echo $this->Html->link("<i class='icon-bookmark'></i>Categoria de Serviço", array("controller" => "CategoriaServicos",
                    "action" => "index"), array("escape" => false));
                ?>
            </li>
        </ul>
    </li>
    <li id="users">
        <?php
        echo $this->Html->link("<i class='icon-user'></i>Usuários", array("controller" => "Users",
            "action" => "index"), array("escape" => false));
        ?>
    </li>
</ul>