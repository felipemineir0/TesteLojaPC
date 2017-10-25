<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Fotos Álbum</span>
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
                                    <th><?php echo $this->Paginator->sort('ordem'); ?></th>
                                    <th><?php echo $this->Paginator->sort('album_id'); ?></th>
                                    <th><?php echo $this->Paginator->sort('imagem'); ?></th>
                                    <th class="actions"><?php echo __('Actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($albunsImagens as $albunsImagem): ?>
                                    <tr>
                                        <td><?php echo h($albunsImagem['AlbunsImagem']['id']); ?>&nbsp;</td>
                                        <td><?php echo h(!empty($albunsImagem['AlbunsImagem']['legenda']) ? $albunsImagem['AlbunsImagem']['legenda'] : ""); ?>&nbsp;</td>
                                        <td align="center" >
                                        <input type="number" id="selOrdem-<?php echo ($albunsImagem['AlbunsImagem']['id']); ?>" value="<?php echo h($albunsImagem['AlbunsImagem']['ordem']); ?>" style="width:40px; text-align:center; border:1px solid #00acec" >
                                        </td>
                                        <td>
                                            <?php echo $this->Html->link($albunsImagem['Album']['nome'], array('controller' => 'albuns', 'action' => 'view', $albunsImagem['Album']['id'])); ?>
                                        </td>
                                        <td>
                                            <?php echo $this->Html->image('../../site/upload/albuns/' . $albunsImagem['Album']['id'] . '/s_' . $albunsImagem['AlbunsImagem']['imagem']); ?>

                                        </td>
                                        <td>
                                            <div class='text-center'>

                                                <?php
                                                echo $this->Html->link("<i class='icon-pencil'></i> Editar", array('action' => 'edit', $albunsImagem['AlbunsImagem']['id']), array(
                                                    "class" => "btn btn-warning btn-xs has-tooltip",
                                                    "title" => "Editar",
                                                    "data-original-title" => "Editar",
                                                    "data-placement" => "top",
                                                    "escape" => false)) . "&nbsp;";
                                                echo $this->Form->postLink("<i class='icon-remove'></i>", array('action' => 'delete', $albunsImagem['AlbunsImagem']['id']), array("escape" => false,
                                                    "class" => "btn btn-danger btn-xs alert-delete has-tooltip",
                                                    "title" => "Excluir",
                                                    "data-original-title" => "Excluir",
                                                    "data-placement" => "top",
                                                    ), __('Tem certeza que deseja excluir? %s', $albunsImagem['AlbunsImagem']['imagem']));
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

    <script type="text/javascript">
        $(function () {

          $('input[id^="selOrdem-"]').each(function () {
            $(this).change(function () {
              var codigo = ($(this).attr("id").toString().replace("selOrdem-", ""));
              var ordem = $(this).val();
              changeOrdem(codigo, ordem);
              return false;
          });
        });
      });


        function changeOrdem(codigo, ordem) {
          $("#selOrdem-" + codigo).parent().parent().animate({ opacity: 0.2 });
          $.ajax({
            type: 'POST',
            url: "../../AlbunsImagens/changeOrdem",
            data: { "id": codigo, "ordem": ordem },
            success: function (data) {
              if (data) {
                $("#selOrdem-" + codigo).parent().parent().animate({ opacity: 1.0 });
            }
            else
                alert(data);
        }
    });
      }

  </script>