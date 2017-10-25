<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Notícias</span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <?php
                echo $this->Form->create('AlbunsImagem', $this->FormAdmin->formConfigs);
                echo $this->Form->input('id');
                echo $this->Form->input('legenda');
                echo $this->Form->input('ordem');
                echo $this->Form->input('descricao', array('type' => 'textarea'));
                echo $this->Form->input('album_id', array("readonly" => "readonly"));
                echo $this->Form->input("imagem", array('type' => 'file', "accept" => "image/gif, image/png, image/jpeg"));
                ?>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="arquivo">Imagem atual</label>
                    <div class="col-md-5 controls">
                        <?php echo $this->Html->image('../../site/upload/albuns/' . $this->request->data["Album"]["id"] . '/s_' . $this->request->data["AlbunsImagem"]["imagem"]); ?>
                    </div>
                </div>
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
                <?php
                echo $this->Form->end();
                ?>

            </div>
        </div>
    </div>

</div>


<script>
    //CKEDITOR
    function CkEditorReload() {
        var seletor_base = $("#cms-site").contents().find('.cms-conteudo');

        if (seletor_base.length > 0) {
            var iframe_CKEDITOR = document.getElementById("cms-site").contentWindow.CKEDITOR;
            for (name in iframe_CKEDITOR.instances)
            {
                iframe_CKEDITOR.instances[name].destroy()
            }

            seletor_base.find('.campo-edita').each(function(i) {
                $(this).attr('contenteditable', 'true')
            });

            //$('.cms-conteudo img').resizable();
            iframe_CKEDITOR.inlineAll();

            for (name in iframe_CKEDITOR.instances)
            {
                iframe_CKEDITOR.instances[name].on('change', function() {
                    if (!$('#Salvar i').hasClass('red'))
                        $('#Salvar i').addClass('red');
                });
            }
        }

    }
</script>
