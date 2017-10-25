<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Vídeo</span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <?php
                echo $this->Form->create('AlbunsVideo', $this->FormAdmin->formConfigs);
                echo $this->Form->input('album_id', array("readonly" => "readonly"));
                echo $this->Form->input('legenda');
                echo $this->Form->input('descricao', array('type' => 'textarea'));
                ?>
                <span style="margin-left:280px; color:#FFB14E">Informe a url de um vídeo vindo do youtube.</span>
                <?php
                echo $this->Form->input("url");
                ?>
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

