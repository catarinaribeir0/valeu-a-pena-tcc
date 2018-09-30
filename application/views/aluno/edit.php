<?php echo form_open('aluno/edit/'.$aluno['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_atuacao" class="col-md-4 control-label">Área Atuação</label>
		<div class="col-md-8">
			<select name="id_atuacao" class="form-control">
				<option value="">Selecione a Área de Atuação</option>
				<?php 
				foreach($all_area_atuacao as $area_atuacao)
				{
					$selected = ($area_atuacao['id'] == $aluno['id_atuacao']) ? ' selected="selected"' : "";

					echo '<option value="'.$area_atuacao['id'].'" '.$selected.'>'.$area_atuacao['id'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="nome" class="col-md-4 control-label"><span class="text-danger">*</span>Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $aluno['nome']); ?>" class="form-control" id="nome" />
			<span class="text-danger"><?php echo form_error('nome');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="cpf" class="col-md-4 control-label"><span class="text-danger">*</span>Cpf</label>
		<div class="col-md-8">
			<input type="text" name="cpf" value="<?php echo ($this->input->post('cpf') ? $this->input->post('cpf') : $aluno['cpf']); ?>" class="form-control" id="cpf" />
			<span class="text-danger"><?php echo form_error('cpf');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $aluno['email']); ?>" class="form-control" id="email" />
			<span class="text-danger"><?php echo form_error('email');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="senha" class="col-md-4 control-label">Senha</label>
		<div class="col-md-8">
			<input type="text" name="senha" value="<?php echo ($this->input->post('senha') ? $this->input->post('senha') : $aluno['senha']); ?>" class="form-control" id="senha" />
			<span class="text-danger"><?php echo form_error('senha');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="telefone" class="col-md-4 control-label">Telefone</label>
		<div class="col-md-8">
			<input type="text" name="telefone" value="<?php echo ($this->input->post('telefone') ? $this->input->post('telefone') : $aluno['telefone']); ?>" class="form-control" id="telefone" />
			<span class="text-danger"><?php echo form_error('telefone');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="matricula" class="col-md-4 control-label">Matricula</label>
		<div class="col-md-8">
			<input type="text" name="matricula" value="<?php echo ($this->input->post('matricula') ? $this->input->post('matricula') : $aluno['matricula']); ?>" class="form-control" id="matricula" />
			<span class="text-danger"><?php echo form_error('matricula');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="disponibilidade" class="col-md-4 control-label">Disponibilidade</label>
		<div class="col-md-8">
			<input type="text" name="disponibilidade" value="<?php echo ($this->input->post('disponibilidade') ? $this->input->post('disponibilidade') : $aluno['disponibilidade']); ?>" class="form-control" id="disponibilidade" />
			<span class="text-danger"><?php echo form_error('disponibilidade');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="conhecimento" class="col-md-4 control-label">Conhecimento</label>
		<div class="col-md-8">
			<input type="text" name="conhecimento" value="<?php echo ($this->input->post('conhecimento') ? $this->input->post('conhecimento') : $aluno['conhecimento']); ?>" class="form-control" id="conhecimento" />
			<span class="text-danger"><?php echo form_error('conhecimento');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="periodo" class="col-md-4 control-label">Periodo</label>
		<div class="col-md-8">
			<input type="text" name="periodo" value="<?php echo ($this->input->post('periodo') ? $this->input->post('periodo') : $aluno['periodo']); ?>" class="form-control" id="periodo" />
			<span class="text-danger"><?php echo form_error('periodo');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="cadastro_aprovado" class="col-md-4 control-label"><span class="text-danger">*</span>Cadastro Aprovado</label>
		<div class="col-md-8">
			<input type="text" name="cadastro_aprovado" value="<?php echo ($this->input->post('cadastro_aprovado') ? $this->input->post('cadastro_aprovado') : $aluno['cadastro_aprovado']); ?>" class="form-control" id="cadastro_aprovado" />
			<span class="text-danger"><?php echo form_error('cadastro_aprovado');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Confirmar</button>
                        <a href="<?php echo base_url('Aluno')?>" class="btn btn-danger" role="button">Retornar</a>
        </div>
	</div>
	
<?php echo form_close(); ?>