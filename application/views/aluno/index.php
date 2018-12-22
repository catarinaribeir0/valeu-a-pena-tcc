<div class="panel_info" >
    <div class="row">
        <img class="img-thumbnail" src="<?php echo $foto ?>" alt="<?php echo mb_strtoupper($this->session->userdata('nome')) ?>">
        <h4><?php echo mb_strtoupper($this->session->userdata('nome')) ?></h4>
    </div>
    <p><strong>Mat.: </strong><?php echo $this->session->userdata('matricula') . "  -<strong> Email:</strong> " . $this->session->userdata('email') . " -<strong> CPF: </strong>" . $this->session->userdata('cpf') ?></p>
    <p><strong>Função: </strong><?php echo $this->session->userdata('funcao') ? $this->session->userdata('funcao') : ' - '; ?> <strong> em </strong> <?php echo $this->session->userdata('empresa') ? $this->session->userdata('empresa') : ' - ' ?>
    <p><strong>Valeu a pena cursar Sistenas de Informação - UFF? Seu depoimento:</strong></p>
    <?php echo $this->session->userdata('depoimento'); ?>
    <hr>
    <a href="<?php echo base_url('Aluno\editar_meus_dados') ?>" class="btn btn-primary">Editar dados</a> 
    <a href="<?php echo base_url('Aluno\upload') ?>" class="btn btn-primary">Upload Foto</a>


</div>
<p></p>