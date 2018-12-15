<div class="pull-left">
	<a href="<?php echo site_url('aluno/add'); ?>" class="btn btn-success">Incluir</a> 
        <a href="<?php echo site_url('Coordenador/Home'); ?>" class="btn btn-danger">Retornar</a> 
        <p></p>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Cadastro Aprovado</th>
                <th>Internet</th>
		<th>Ações</th>
    </tr>
	<?php foreach($alunos as $a){ ?>
    <tr>
		<td><?php echo $a['id']; ?></td>
		<td><?php echo $a['nome']; ?></td>
		<td><?php echo $a['cadastro_aprovado']; ?></td>
                <td><?php echo $a['depoimento_aprovado']; ?></td>
		<td>
            <a href="<?php echo site_url('aluno/edit/'.$a['id']); ?>" class="btn btn-info btn-xs">Editar</a> 
            <a href="<?php echo site_url('aluno/aprovar/'.$a['id']); ?>" class="btn btn-warning btn-xs">(Des)Aprovar</a>
            <a href="<?php echo site_url('aluno/habilitar/'.$a['id']); ?>" class="btn btn-warning btn-xs">(Des)Habilitar</a>
            <a href="<?php echo site_url('aluno/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs">Excluir</a>
            <a href="<?php echo site_url('aluno/resetar/'.$a['id']); ?>" class="btn btn-success btn-xs">Resetar Senha</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
