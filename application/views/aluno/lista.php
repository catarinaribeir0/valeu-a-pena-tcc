<div class="pull-left">
	<a href="<?php echo site_url('aluno/add'); ?>" class="btn btn-success">Incluir</a> 
        <p></p>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Matricula</th>
		<th>Ações</th>
    </tr>
	<?php foreach($alunos as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['nome']; ?></td>
		<td><?php echo $a['matricula']; ?></td>
		<td>
            <a href="<?php echo site_url('aluno/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">Editar</a>
			<?php if($a['cadastro_aprovado'] ==  'N'){ ?>
            	<a href="<?php echo site_url('aluno/aprovar/'.$a['id']); ?>" class="btn btn-warning btn-xs">Aprovar</a>
			<?php } else { ?>
				<a class="btn btn-success btn-xs" readonly>Aprovado</a>
			<?php } ?>
			<?php if($a['depoimento_aprovado'] ==  'N' && $a['depoimento'] == null){ ?>
            	<a href="<?php echo site_url('aluno/aprovarDepoimento/'.$a['id']); ?>" class="btn btn-warning btn-xs" disabled>Aprovar</a>
			<?php } else if($a['depoimento_aprovado'] ==  'N'){ ?>
            	<a href="<?php echo site_url('aluno/aprovarDepoimento/'.$a['id']); ?>" class="btn btn-warning btn-xs">Aprovar</a>
			<?php } else { ?>
				<a class="btn btn-success btn-xs" readonly>Aprovado</a>
			<?php } ?>
            <a href="<?php echo site_url('aluno/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">Excluir</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>