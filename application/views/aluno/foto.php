<?php echo form_open_multipart('Aluno/upload', array("class" => "form-horizontal")); ?>
<br><h1 class="custom-text-primary">Adicionar foto</h1> <br>
<div class="form-group">
    <div class="col-md-8">
        <label for="userfile">Arquivo de imagem .jpg e tamanho máximo de 1 MB</label>
        <input type="file" name="userfile" size="20" />
        <span class="text-danger"><?php echo empty($erro) ? "" : $erro; ?></span>
    </div>
</div>

<br>
<div class="form-group">
    <div class="col-md-8">
        <button type="submit" class="btn btn-success">Confirmar</button>
        <a href="<?php echo base_url('Aluno/meus_dados') ?>" class="btn btn-danger" role="button">Retornar</a>
    </div>
</div>

<?php echo form_close(); ?>