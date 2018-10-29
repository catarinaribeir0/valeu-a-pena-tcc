<?php echo form_open('aluno/add',array("class"=>"form-horizontal")); ?>
    
	<div class="container form form-create">
		<div class="form-group">
          <label class="custom-label" for="nome">Nome:</label>
		  <input type="nome" class="form-control" id="nome" value="" placeholder="Digite o nome" name="nome">
		  <span class="text-danger"><?php echo form_error('nome');?></span>
		</div>
		
		<div class="form-group">
          <label class="custom-label" for="nome">CPF:</label>
		  <input type="nome" class="form-control" id="cpf" value="" placeholder="Digite o CPF" name="cpf">
		  <span class="text-danger"><?php echo form_error('cpf');?></span>
		</div>
		
		<div class="form-group">
          <label class="custom-label" for="nome">Matrícula:</label>
		  <input type="nome" class="form-control" id="matricula" value="" placeholder="Digite a matrícula" name="matricula">
		  <span class="text-danger"><?php echo form_error('matricula');?></span>
		</div>

		<div class="form-group">
          <label class="custom-label" for="nome">E-mail:</label>
		  <input type="nome" class="form-control" id="email" value="" placeholder="Digite o e-mail" name="email">
		  <span class="text-danger"><?php echo form_error('email');?></span>
        </div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-success">Registrar</button>
		</div>
	</div>

<?php echo form_close(); ?>