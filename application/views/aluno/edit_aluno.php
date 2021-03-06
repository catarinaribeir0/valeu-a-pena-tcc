<?php echo form_open('aluno/edit/', array("class" => "form-horizontal")); ?>
<h1 class="custom-text-primary">Editar dados do aluno</h1> <br>


<div class="form-group">
    <label for="nome" class=" col-md-1 control-label"><span class="text-danger">*</span>Nome: </label>
    <div class="col-md-6">
        <input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $aluno['nome']); ?>" class="form-control" id="nome" />
        <span class="text-danger"><?php echo form_error('nome'); ?></span>
    </div>
</div>
<div class="form-group">
    <label for="cpf" class="col-md-1 control-label"><span class="text-danger">*</span>CPF: </label>
    <div class="col-md-6">
        <input type="text" name="cpf" value="<?php echo ($this->input->post('cpf') ? $this->input->post('cpf') : $aluno['cpf']); ?>" class="form-control" id="cpf" />
        <span class="text-danger"><?php echo form_error('cpf'); ?></span>
        <small id="Help" class="text-center">Utilize pontos e hífens. Exemplo: XXX.XXX.XXX-XX</small>
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-md-1 control-label"><span class="text-danger">*</span>E-mail: </label>
    <div class="col-md-6">
        <input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $aluno['email']); ?>" class="form-control" id="email" />
        <span class="text-danger"><?php echo form_error('email'); ?></span>
    </div>
</div>
<div class="form-group">
    <label for="matricula" class="col-md-1 control-label"><span class="text-danger">*</span>Matrícula:</label>
    <div class="col-md-6">
        <input type="text" name="matricula" value="<?php echo ($this->input->post('matricula') ? $this->input->post('matricula') : $aluno['matricula']); ?>" class="form-control" id="matricula" />
        <span class="text-danger"><?php echo form_error('matricula'); ?></span>
        <small id="Help" class="text-center">Sua matrícula quando era estudante da UFF</small>
    </div>
</div>
<div class="form-group">
    <label for="depoimento" class="col-md-1 control-label"><span class="text-danger">*</span>Depoimento: </label>
    <div class="col-md-11">
        <textarea class="form-control" rows="5" name="depoimento" id="depoimento"><?php echo ($this->input->post('depoimento') ? $this->input->post('depoimento') : $aluno['depoimento']); ?></textarea>
    </div>
</div>

<div class="form-group">
    <label for="empresa" class="col-md-1 control-label"><span class="text-danger">*</span>Empresa: </label>
    <div class="col-md-6">
        <input type="text" name="empresa" value="<?php echo ($this->input->post('empresa') ? $this->input->post('empresa') : $aluno['empresa']); ?>" class="form-control" id="empresa" />
        <span class="text-danger"><?php echo form_error('empresa'); ?></span>
        <small id="Help" class="text-center">A empresa em que está trabalhando no momento</small>
    </div>
</div>
<div class="form-group">
    <label for="funcao" class="col-md-1 control-label"><span class="text-danger">*</span>Função: </label>
    <div class="col-md-6">
        <input type="text" name="funcao" value="<?php echo ($this->input->post('funcao') ? $this->input->post('funcao') : $aluno['funcao']); ?>" class="form-control" id="funcao" />
        <span class="text-danger"><?php echo form_error('funcao'); ?></span>
        <small id="Help" class="text-center">Exemplos: desenvolvedor, analista de sistemas, gerente de TI...</small>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-success">Confirmar</button>
        <a href="<?php echo base_url('Aluno/index') ?>" class="btn btn-danger" role="button">Retornar</a>
    </div>
</div>

<?php echo form_close(); ?>