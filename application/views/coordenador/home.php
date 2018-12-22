
<br><br><br><br><br><br>
<div class="pull-left">
    <?php echo "Área Restrita - Usuário: ".$this->session->userdata('nome'); ?> 
    <p></p>
</div>

 <div class="row oque-e">
    <div>
        <a href="<?php echo site_url('Aluno/'); ?>" class="btn btn-success">Lista de Alunos</a> 
    </div>
    <br>
    <div>
        <a href="<?php echo site_url('Coordenador/'); ?>" class="btn btn-success">Lista de Coordenadores</a> 
    </div>
    <br>
    <div>
        <a href="<?php echo site_url('Coordenador/edit/'); ?>" class="btn btn-success">Editar dados</a> 
    </div>
</div>