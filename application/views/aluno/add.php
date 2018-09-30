<?php echo form_open('aluno/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nome" class="col-md-4 control-label"><span class="text-danger">*</span>Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
			<span class="text-danger"><?php echo form_error('nome');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="cpf" class="col-md-4 control-label"><span class="text-danger">*</span>Cpf</label>
		<div class="col-md-8">
			<input type="text" name="cpf" value="<?php echo $this->input->post('cpf'); ?>" class="form-control" id="cpf" />
			<span class="text-danger"><?php echo form_error('cpf');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="senha" class="col-md-4 control-label">Senha</label>
		<div class="col-md-8">
			<input type="text" name="senha" value="<?php echo $this->input->post('senha'); ?>" class="form-control" id="senha" />
			<span class="text-danger"><?php echo form_error('senha');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="telefone" class="col-md-4 control-label">Telefone</label>
		<div class="col-md-8">
			<input type="text" name="telefone" value="<?php echo $this->input->post('telefone'); ?>" class="form-control" id="telefone" />
			<span class="text-danger"><?php echo form_error('telefone');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="matricula" class="col-md-4 control-label">Matricula</label>
		<div class="col-md-8">
			<input type="text" name="matricula" value="<?php echo $this->input->post('matricula'); ?>" class="form-control" id="matricula" />
			<span class="text-danger"><?php echo form_error('matricula');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="disponibilidade" class="col-md-4 control-label">Disponibilidade</label>
		<div class="col-md-8">
			<input type="text" name="disponibilidade" value="<?php echo $this->input->post('disponibilidade'); ?>" class="form-control" id="disponibilidade" />
			<span class="text-danger"><?php echo form_error('disponibilidade');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="conhecimento" class="col-md-4 control-label">Conhecimento</label>
		<div class="col-md-8">
			<input type="text" name="conhecimento" value="<?php echo $this->input->post('conhecimento'); ?>" class="form-control" id="conhecimento" />
			<span class="text-danger"><?php echo form_error('conhecimento');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="periodo" class="col-md-4 control-label">Periodo</label>
		<div class="col-md-8">
			<input type="text" name="periodo" value="<?php echo $this->input->post('periodo'); ?>" class="form-control" id="periodo" />
			<span class="text-danger"><?php echo form_error('periodo');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="cadastro_aprovado" class="col-md-4 control-label"><span class="text-danger">*</span>Cadastro Aprovado</label>
		<div class="col-md-8">
			<input type="text" name="cadastro_aprovado" value="<?php echo $this->input->post('cadastro_aprovado'); ?>" class="form-control" id="cadastro_aprovado" />
			<span class="text-danger"><?php echo form_error('cadastro_aprovado');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>