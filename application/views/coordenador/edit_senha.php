<?php echo form_open('coordenador/alterar_senha/', array("class" => "form-horizontal")); ?>

<div class="form-group">
    <label for="senha1" class="col-md-4 control-label"><span class="text-danger">*</span>Senha</label>
    <div class="col-md-8">
        <input type="password" name="senha1" value="" class="form-control" id="senha1" />
        <span class="text-danger"><?php echo form_error('senha1'); ?></span>
    </div>
    <label for="senha2" class="col-md-4 control-label"><span class="text-danger">*</span>Redigite a Senha</label>
    <div class="col-md-8">
        <input type="password" name="senha2" value="" class="form-control" id="senha2" />
        <span class="text-danger"><?php echo form_error('senha2'); ?></span>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Confirmar</button>
        <a href="<?php echo base_url('Coordenador') ?>" class="btn btn-danger" role="button">Retornar</a>
    </div>
</div>

<?php echo form_close(); ?>