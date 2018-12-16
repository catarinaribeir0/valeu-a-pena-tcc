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
        </ul> 
  </div>
  
  <div class="col-sm-9">
    <div class="container">
  <!-- ** INÍCIO EDIÇÃO DE DADOS ** -->
  <?php echo form_open('aluno/editar_meus_dados/', array("class" => "form-horizontal")); ?>
  <div class="col-sm-9" style="display: block">
    <div class="container">   
      <div id="edit" class="custom-tab">
      <h1 class="custom-text-primary">Editar seus dados</h1> <br>
      <form class="edit-form">
            <div class="form-group">
            <!-- * NOME *-->
                <label for="Nome">Nome:</label>
                <input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $this->session->userdata('nome')); ?>" class="form-control" style="width: 55%" id="nome" />
                <span class="text-danger"><?php echo form_error('nome'); ?></span>
            </div>

            <!-- * E-MAIL *-->
            <div class="form-group">
                <label for="Email">E-mail:</label>
                <input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $this->session->userdata('email')); ?>" class="form-control" style="width: 55%" id="email" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>
                <small id="emailHelp" class="form-text text-muted">E-mail profissional ou pessoal</small>
            </div>

            <!-- * EMPRESA ATUAL *-->
            <div class="form-group">
                <label for="Empresa">Empresa atual:</label>
                <input type="text" name="empresa" value="<?php echo ($this->input->post('empresa') ? $this->input->post('empresa') : $this->session->userdata('empresa')); ?>" class="form-control" style="width: 55%" id="empresa" />
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
            <input type="text" name="funcao" value="<?php echo ($this->input->post('funcao') ? $this->input->post('funcao') : $this->session->userdata('funcao')); ?>" class="form-control" style="width: 55%" id="funcao" />
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
</div>

<!-- ** INÍCIO DEPOIMENTOS ** -->
  <?php echo form_open('Aluno/depoimento').$this->session->userdata('id'); ?>
    <div id="depo" class="custom-tab">
      <div class="form-group">
        <form class="edit-form">
        <h1 class="custom-text-primary">Depoimento</h1>
            <label for="depo">Digite aqui sua experiência durante a graduação na UFF. Valeu a pena?</label>
            <textarea class="form-control" id="depo" rows="5"  value="<?php echo $this->session->userdata('depoimento'); ?>"></textarea>
            <small id="depoHelp" class="form-text text-muted">Lembre-se: seu depoimento ainda será aprovado pela coordenação e será exibido na página inicial!</small>
        </form>
      </div>
      <button type="submit" class="btn btn-success">Salvar</button>
    </div>
  <?php echo form_close(); ?>
<!-- ** FIM DEPOIMENTOS ** -->
        </div>
    </div>
  </div>
</div>                                            

</div>
<p></p>
