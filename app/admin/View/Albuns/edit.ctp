<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Albuns</span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <?php
                echo $this->Form->create('Album', $this->FormAdmin->formConfigs);
                echo $this->Form->input('id');
                echo $this->Form->input('nome');
                //echo $this->Form->input('sintese', array('type' => 'textarea'));
                echo $this->Form->input('albuns_tipo_id');
                ?>
                <div class="input select" id="div_album_refenrencia">
                    <div class="form-group"><label for="AlbumCodigoFk" class="col-md-2 control-label">Referência</label>
                        <div class="col-md-5 controls" id="div_codigo_fk">

                        </div>
                    </div>
                </div>
                <?php
                if (!empty($referencia)) {
                    echo $this->Form->input('codigo_fk', array("value" => key($referencia), "type" => "hidden"));
                    ?>
                    <div class="input select" id="div_album_refenrencia">
                        <div class="form-group"><label for="AlbumCodigoFk" class="col-md-2 control-label">Referência</label>
                            <div class="col-md-5 controls" id="div_codigo_fk">
                                <input value="<?php echo $referencia[key($referencia)] ?>" class="form-control" readonly="readonly" />
                            </div>
                        </div>
                    </div>


                    <?php
                }

                //echo $this->Form->input('video', array('options' => array(1 => "Sim", 0 => "Não"), 'empty' => 'Selecione'));
                ?>
                <!--<span style="margin-left:280px; color:#FFB14E">Esta imagem será a capa do álbum</span>-->
                <?php
                //echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
                ?>
                <?php if ($this->request->data["Album"]["imagem"] != "") { ?>
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="arquivo">Imagem atual</label>
                        <div class="col-md-5 controls">
                            <?php echo $this->Html->image('../../site/upload/albuns/' . $this->request->data["Album"]["id"] . '/s_' . $this->request->data["Album"]["imagem"]); ?>
                        </div>
                    </div>
                <?php } ?>
                <div class='form-actions form-actions-padding-sm'>
                    <div class='row'>
                        <div class='col-md-10 col-md-offset-2'>
                            <button class='btn btn-primary BtnSubmit' type='submit'>
                                <i class='icon-save'></i>
                                Salvar
                            </button>
                            <?php echo $this->Html->link("Cancelar", array('action' => 'index'), array('class' => 'btn'));
                            ?>
                        </div>
                    </div>
                </div>
                <?php echo $this->Form->end(); ?>

            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#div_album_refenrencia").hide();
        $("#AlbumAlbunsTipoId").change(function() {
            if ($(this).val() > 1) {

                getReferencias($(this).val());
            }
            else {
                $("#div_album_refenrencia").hide();
                $("#div_codigo_fk").empty();
            }
        });


    });
    function getReferencias(id_tipo)
    {
        jQuery.ajax({
            type: "GET",
            url: "getCodigoTipo",
            data: {"albuns_tipo_id": id_tipo},
            success: function(data)
            {
                $("#div_album_refenrencia").show();
                $("#div_codigo_fk").html(data);
            }
        });
    }
</script>