<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Albuns</span>
        </h1>
        <?php
        //exit(debug($albuns));
        if (empty($this->request["pass"]["0"])) {
            echo $this->Html->link("<i class='icon-plus'></i><span>Adicionar</span>", array('action' => 'add'), array("class" => "btn btn-primary btn-lg", "title" => "Adicionar novo Registro", "style" => "float: right; margin: 18px 0 0 0;", "escape" => false));
        } else
        if (!empty($this->request["pass"]["1"])) {
            echo $this->Html->link("<i class='icon-plus'></i><span>Adicionar</span>", array('action' => 'add', $this->request["pass"]["0"], $this->request["pass"]["1"]), array("class" => "btn btn-primary btn-lg", "title" => "Adicionar novo Registro", "style" => "float: right; margin: 18px 0 0 0;", "escape" => false));
        } else
            echo $this->Html->link("<i class='icon-plus'></i><span>Adicionar</span>", array('action' => 'add', $this->request["pass"]["0"]), array("class" => "btn btn-primary btn-lg", "title" => "Adicionar novo Registro", "style" => "float: right; margin: 18px 0 0 0;", "escape" => false));
        ?>

    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='box bordered-box orange-border' style='margin-bottom:0;'>
                <div class='box-content box-no-padding'>
                    <div class="">
                        <table class='data-table table table-bordered table-striped' style='margin-bottom:0;' >
                            <thead>
                                <tr>
                                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('nome'); ?></th>
                                    <th><?php echo $this->Paginator->sort('albuns_tipo_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                                    <th>Arquivos</th>

                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($albuns as $album): ?>
                                    <tr>
                                        <td><?php echo h($album['Album']['id']); ?>&nbsp;</td>
                                        <td><?php echo h($album['Album']['nome']); ?>&nbsp;</td>
                                        <td><?php echo h($album['AlbunsTipo']['nome']); ?>&nbsp;</td>
                                        <td><?php echo h($album['Album']['modified']); ?>&nbsp;</td>
                                        <td align="center">
                                            <?php
                                            if ($album['Album']['video'] == 0) {
                                                echo $this->Html->link("<i class='icon-pencil'></i> Imagens ", array("controller" => "AlbunsImagens", 'action' => 'index', $album['Album']['id']), array(
                                                    "class" => "btn btn-primary btn-xs has-tooltip",
                                                    "title" => "Imagens",
                                                    "data-original-title" => "Imagens",
                                                    "data-placement" => "top",
                                                    "escape" => false)) . "&nbsp;";
                                            } else {
                                                echo $this->Html->link("<i class='icon-pencil'></i> Vídeos ", array("controller" => "AlbunsVideos", 'action' => 'index', $album['Album']['id']), array(
                                                    "class" => "btn btn-primary btn-xs has-tooltip",
                                                    "title" => "Vídeos",
                                                    "data-original-title" => "Vídeos",
                                                    "data-placement" => "top",
                                                    "escape" => false)) . "&nbsp;";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <div class='text-center'>

                                                <?php
                                                echo $this->Html->link("<i class='icon-pencil'></i> Editar", array('action' => 'edit', $album['Album']['id']), array(
                                                    "class" => "btn btn-warning btn-xs has-tooltip",
                                                    "title" => "Editar",
                                                    "data-original-title" => "Editar",
                                                    "data-placement" => "top",
                                                    "escape" => false)) . "&nbsp;";
                                                if (($album['Album']['video'] == 0 && count($album["AlbunsImagem"]) == 0) || $album['Album']['video'] == 1 && count($album["AlbunsVideo"]) == 0) { // se for imagem
                                                    //echo("vazio");
                                                    echo $this->Form->postLink("<i class='icon-remove'></i>", array('action' => 'delete', $album['Album']['id']), array("escape" => false,
                                                        "class" => "btn btn-danger btn-xs alert-delete has-tooltip",
                                                        "title" => "Excluir",
                                                        "data-original-title" => "Excluir",
                                                        "data-placement" => "top",
                                                            ), __('Tem certeza que deseja excluir? %s', $album['Album']['nome']));
                                                }
                                                ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <?php echo $this->element('paginacao'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


