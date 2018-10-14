<div class="pull-left">
    <?php echo "Área Restrita - Usuário: ".$this->session->userdata('nome'); ?> 
    <p></p>
</div>
<br>
<?php $teste = "Área Restrita - Usuário: ".$this->session->userdata('id'); ?> 
<br>
<div>
    <a href="<?php echo site_url('aluno/'); ?>" class="btn btn-success">Lista de Alunos</a> 
</div>
<br>
<div>
    <a href="<?php echo site_url('Coordenador/'); ?>" class="btn btn-success">Lista de Coordenadores</a> 
</div>
<br>
<div>
    <a href="<?php echo site_url('Coordenador/edit/'.$this->session->userdata('id')); ?>" class="btn btn-success">Editar dados</a> 
</div>