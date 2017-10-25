
<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-home'></i>
            <span>Gerenciador de Site</span>
        </h1>
    </div>

    <div class='row'>
        <div class='col-sm-6 col-md-4'>
            <div class='box'>
                <div class='row'>
                    <div class='col-sm-12 LinksHome'>

                        <div class='box-content text-center' >

                            <?php echo $this->Html->image('/upload/users/' . $usuario["id"] . '/m_' . $usuario["imagem"]); ?>

                            <h4>Olá <?php echo($usuario["nome"]); ?>,</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="icon-envelope text-purple"></i>
                                    <?php echo($usuario["email"]); ?>
                                </li>

                                <li>
                                    <i class="icon-user text-red"></i>
                                    <?php
                                    echo $this->Html->link("Alterar dados", array("controller" => "users",
                                        "action" => "edit", $usuario["id"]
                                            ), array("escape" => false));
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript'>
            $(document).ready(function() {
                $('#Home').addClass('active');
                $('.LinksHome').children("a").click(function() {
                    var href = $(this).attr("href");
                    $('.ListUl').children("li").children("a").each(function() {
                        if ($(this).attr("href") == href)
                            $(this).click();
                    });
                });
            });
        </script>