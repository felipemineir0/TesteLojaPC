<?php if (!empty($albuns)):  ?>    
        <?php foreach ($albuns as $albun) : 
           foreach ($albun["AlbunsImagem"] as $imagem) :?>
            <?php if (!empty($imagem)) : ?>
                <li><?php echo $this->Html->image('/upload/albuns/' . $imagem["album_id"] . '/l_' . $imagem["imagem"], array("class" => "img-responsive")); ?></li>

            <?php endif; ?>
        <?php endforeach; ?>
<?php endforeach; ?>
<?php endif; ?>