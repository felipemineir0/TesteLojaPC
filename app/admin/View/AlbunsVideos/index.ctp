<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Vídeos Álbum</span>
        </h1>
        <?php
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
                                    <th><?php echo $this->Paginator->sort('legenda'); ?></th>
                                    <th><?php echo $this->Paginator->sort('album_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('imagem'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($albunsVideos as $albunsVideo): ?>
                                    <tr>
                                        <td><?php echo h($albunsVideo['AlbunsVideo']['id']); ?>&nbsp;</td>
                                        <td><?php echo h($albunsVideo['AlbunsVideo']['legenda']); ?>&nbsp;</td>
                                        <td>
                                            <?php echo $this->Html->link($albunsVideo['Album']['nome'], array('controller' => 'albuns', 'action' => 'view', $albunsVideo['Album']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->image($albunsVideo['AlbunsVideo']['imagem'], array("heigth" => 128, "width" => 128)); ?>

                                        </td>
                                        <td>
                                            <div class='text-center'>

                                                <?php
                                                echo $this->Html->link("<i class='icon-pencil'></i> Editar", array('action' => 'edit', $albunsVideo['AlbunsVideo']['id']), array(
                                                    "class" => "btn btn-warning btn-xs has-tooltip",
                                                    "title" => "Editar",
                                                    "data-original-title" => "Editar",
                                                    "data-placement" => "top",
                                                    "escape" => false)) . "&nbsp;";
                                                echo $this->Form->postLink("<i class='icon-remove'></i>", array('action' => 'delete', $albunsVideo['AlbunsVideo']['id']), array("escape" => false,
                                                    "class" => "btn btn-danger btn-xs alert-delete has-tooltip",
                                                    "title" => "Excluir",
                                                    "data-original-title" => "Excluir",
                                                    "data-placement" => "top",
                                                        ), __('Tem certeza que deseja excluir? %s', $albunsVideo['AlbunsVideo']['imagem']));
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

