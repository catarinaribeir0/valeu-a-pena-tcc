<div class="container bootstrap snippet aluno-info">
  <div class="row">
    <div class="col-sm-3">              
    <div class="text-center">
      <img src="<?php echo $foto ?>" alt="<?php echo mb_strtoupper($this->session->userdata('nome')) ?>"  class="avatar img-circle img-thumbnail img-resposive" alt="avatar">
      <h6>Faça o upload da sua foto<a href="<?php echo base_url('Aluno\upload') ?>" > aqui</a>.</h6>
    </div></hr><br>
        <ul class="list-group">
          <li class="list-group-item text-left"><strong><a onclick="openLink(event, 'edit')">Editar dados</a> </strong> <i class="fa fa-edit fa-1x"></i></li>        
          <li class="list-group-item text-left"><strong><a onclick="openLink(event, 'depo')">Depoimento</a></strong> <i class="fa fa-comments"></i></li>
          <li class="list-group-item text-left"><strong><a onclick="openLink(event, 'show')">Visualizar colegas de classe</a></strong> <i class="fa fa-users"></i></li>
          <!--<li class="list-group-item text-left"><strong><a href="<?php echo site_url('aluno/msg-recebidas'); ?>">Mensagens recebidas</a></strong></strong> <i class="fa fa-envelope"></i></li>
          <li class="list-group-item text-left"><strong><a href="<?php echo site_url('aluno/msg-enviadas'); ?>">Mensagens enviadas</a></strong> <i class="fa fa-envelope-open"></i></li>-->
        </ul> 
  </div>
  
  <!-- ** INÍCIO EDIÇÃO DE DADOS ** -->
  <?php echo form_open('aluno/editar_meus_dados/', array("class" => "form-horizontal")); ?>
  <div class="col-sm-9" style="display: block">
    <div class="container">   
      <div id="edit" class="custom-tab">
      <h1 class="custom-text-primary">Editar seus dados</h1>
      <form class="edit-form">
            <div class="form-group">
            <!-- * NOME *-->
                <label for="Nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $this->session->userdata('nome')); ?>" class="form-control" id="nome" />
                <span class="text-danger"><?php echo form_error('nome'); ?></span>
            </div>

            <!-- * E-MAIL *-->
            <div class="form-group">
                <label for="Email">E-mail:</label>
                <input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $this->session->userdata('email')); ?>" class="form-control" id="email" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>
                <small id="emailHelp" class="form-text text-muted">E-mail profissional ou pessoal</small>
            </div>

            <!-- * EMPRESA ATUAL *-->
            <div class="form-group">
                <label for="Empresa">Empresa atual:</label>
                <input type="text" name="empresa" value="<?php echo ($this->input->post('empresa') ? $this->input->post('empresa') : $this->session->userdata('empresa')); ?>" class="form-control" id="empresa" />
                <span class="text-danger"><?php echo form_error('empresa'); ?></span>
            </div>

        <!-- * CARGO ATUAL *-->
        <!-- <div class="form-group">
          <label for="cargo-atual">Cargo atual:</label>
            <select id="multipleSelect1" class="selectpicker show-menu-arrow form-control">
                <option>Selecione</option>
                <option>Analista de sistemas</option>
                <option>Desenvolvedor</option>
                <option>Cientista de dados</option>
                <option>Marketing digital</option>
                <option>Engenheiro de software</option>
                <option>Analista de Big Data</option>
                <option>Segurança da informação</option>
                <option>Administrador de banco de dados</option>
                <option>Administrador de redes</option>
                <option>Outro</option>
            </select>
         </div>-->
         <div class="form-group">
            <label for="Empresa">Função:</label>
            <input type="text" name="funcao" value="<?php echo ($this->input->post('funcao') ? $this->input->post('funcao') : $this->session->userdata('funcao')); ?>" class="form-control" id="funcao" />
            <span class="text-danger"><?php echo form_error('funcao'); ?></span>
        </div>
         <!-- * PÓS OU GRADUAÇÃO *-->
         <!-- <input type="text" style="display: none" id="cargoOutro" />
            <div class="form-group">
                <label for="OutraGraduacao">Sua pós gradução ou graduação:</label>
                <input type="outragraduacao" class="form-control" id="outragraduacao" placeholder="Digite a sua pós gradução/graduação e local">
                <small id="emailHelp" class="form-text text-muted">Caso não esteja fazendo outra pós gradução ou graduação, deixe o espaço acima em branco</small>
            </div>

           <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>-->
            <button type="submit" class="btn btn-success">Salvar</button>
          </form>
  </div>
 <!-- ** FIM EDIÇÃO DE DADOS ** -->

<!-- ** INÍCIO DEPOIMENTOS ** -->
  <?php echo form_open('Aluno/depoimento').$this->session->userdata('id'); ?>
    <div id="depo" class="custom-tab">
      <div class="form-group">
        <form class="edit-form">
        <h1 class="custom-text-primary">Depoimento</h1>
            <label for="depo">Digite aqui sua experiência durante a graduação</label>
            <textarea class="form-control" id="depo" rows="5"  value="<?php echo $this->session->userdata('depoimento'); ?>"></textarea>
            <small id="depoHelp" class="form-text text-muted">Lembre-se: seu depoimento ainda será aprovado pela coordenação e será exibido na página inicial!</small>
        </form>
      </div>
      <button type="submit" class="btn btn-success">Salvar</button>
    </div>
  <?php echo form_close(); ?>
      
<!-- ** FIM DEPOIMENTOS ** -->

<!-- ** INÍCIO VISUALIZAR COLEGAS DE CLASSE ** -->
       <div id="show" class="custom-tab">
          <h3>Ainda não fiz porque não sei se vai ter</h3>
      </div>
<!-- ** FIM VISUALIZAR COLEGAS DE CLASSE ** -->

    </div>
  </div>

  </div>
</div>                                            


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
