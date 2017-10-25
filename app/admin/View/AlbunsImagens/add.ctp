<div class='col-xs-12'>
    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-user'></i>
            <span>Imagens</span>
        </h1>
    </div>
</div>

<div class='row'>
    <div class='col-sm-12'>
        <div class='box'>
            <div class='box-content'>
                <?php
                echo $this->Form->create('AlbunsImagem', $this->FormAdmin->formConfigs);
                ?>
                <span style="margin-left:280px; color:#FFB14E">Você pode colocar a legenda e a descrição de todas as fotos do album de uma só vez.</span>
                <br />
                <span style="margin-left:280px; color:#FFB14E">Caso alguma das fotos tenha a legenda ou descrição diferente das demais é só editar a própria imagem</span>
                <?php
                echo $this->Form->input('legenda');
                ?>
                <span style="margin-left:280px; color:#FFB14E">Você pode inserir a ordem da imagem, porém caso suba mais de uma imagem a ordem será a mesma para todas.</span>
                <?php
                echo $this->Form->input('ordem');
                echo $this->Form->input('descricao', array('type' => 'textarea'));
                echo $this->Form->input('album_id', array("readonly" => "readonly"));
                ?>
                <span style="margin-left:280px; color:#FFB14E">Você pode selecionar quantos arquivos de imagem desejar.</span>
                <br />
                <span style="margin-left:280px; color:#FFB14E">Caso cada um dos arquivos seja maior que 2MB faça vários uploads separados</span>
                <?php
                echo $this->Form->input('files.', array('type' => 'file', 'multiple', "accept" => "image/gif, image/png, image/jpeg", "required" => "required"));
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

