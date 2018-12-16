<h2 class="custom-text-primary">Registre-se</h2>
<?php echo form_open('aluno/add',array("class"=>"form-horizontal")); ?>
	
	<div class="container form form-create">
		<div class="form-group">
          <label class="custom-label" for="nome">Nome:</label>
		  <input type="nome" class="form-control" id="nome" value="" placeholder="Digite seu nome" name="nome">
		  <span class="text-danger"><?php echo form_error('nome');?></span>
		</div>
		
		<div class="form-group">
          <label class="custom-label" for="nome">CPF:</label>
		  <input type="nome" class="form-control" id="cpf" value="" placeholder="Digite seu CPF" name="cpf">
		  <span class="text-danger"><?php echo form_error('CPF');?></span>
		  <small id="Help" class="text-center">Utilize pontos hífens. Exemplo: XXX.XXX.XXX-XX</small>
		</div>
		
		<div class="form-group">
          <label class="custom-label" for="nome">Matrícula:</label>
		  <input type="nome" class="form-control" id="matricula" value="" placeholder="Digite sua matrícula" name="matricula">
		  <span class="text-danger"><?php echo form_error('matricula');?></span>
		</div>

		<div class="form-group">
          <label class="custom-label" for="nome">E-mail:</label>
		  <input type="nome" class="form-control" id="email" value="" placeholder="Digite seu e-mail" name="email">
		  <span class="text-danger"><?php echo form_error('email');?></span>
		</div>
		
		<div class="form-group">
          <label class="custom-label" for="nome">Senha:</label>
		  <input type="password" class="form-control" id="senha" value="" placeholder="Digite sua senha" name="senha">
		  <span class="text-danger"><?php echo form_error('senha');?></span>
        </div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-success">Registrar</button>
		</div>
	</div>

<?php echo form_close(); ?>