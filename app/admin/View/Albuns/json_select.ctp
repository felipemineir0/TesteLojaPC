<select id="AlbumCodigoFk" name="data[Album][codigo_fk]" class="form-control">
    <?php foreach ($lista as $key => $value): ?>
        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
        <?php
    endforeach;
    ?>
</select>