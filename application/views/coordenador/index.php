<br>
<br>
<br>
<h4><?php echo $this->session->flashdata('response');?></h4>
<div class="pull-left">
    <br><h1 class="custom-text-primary">Área restrita</h1> 
    <?php echo "Usuário: ".$this->session->userdata('nome'); ?> 
</div>
<br>
 <div class="row oque-e">
    <div>
        <a href="<?php echo site_url('Aluno/'); ?>" class="btn btn-success">Lista de Alunos</a> 
    </div>
    <br>
    <div>
        <a href="<?php echo site_url('Coordenador/lista_coord/'); ?>" class="btn btn-success">Lista de Coordenadores</a> 
    </div>
    <br>
    <div>
        <a href="<?php echo site_url('Coordenador/edit/'); ?>" class="btn btn-success">Editar dados</a> 
    </div>
</div>