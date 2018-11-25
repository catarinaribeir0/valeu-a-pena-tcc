<div class="container bootstrap snippet aluno-info">
  <div class="row">
    <div class="col-sm-3">              
    <div class="text-center">
      <img src="<?php echo base_url() ?>uploads/<?php if($this->session->userdata('cpf') !== null)
        {
          echo $this->session->userdata('cpf');
        }else {
          $data['avatar'] = "avatar";
          echo $data['avatar'];
        } ?>.jpg"  class="avatar img-circle img-thumbnail img-resposive" alt="avatar">
      <h6>Faça o upload da sua foto<a href="<?php echo site_url('Upload/Upload_form'); ?>"> aqui</a>.</h6>
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
  <div class="col-sm-9" style="display: block">
    <div class="container">   
      <div id="edit" class="custom-tab">
      <h1 class="custom-text-primary">Editar seus dados</h1>
      <form class="edit-form">
            <div class="form-group">
            <!-- * NOME *-->
                <label for="Nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>

            <!-- * E-MAIL *-->
            <div class="form-group">
                <label for="Email">E-mail:</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu e-mail">
                <small id="emailHelp" class="form-text text-muted">E-mail profissional ou pessoal</small>
            </div>

            <!-- * EMPRESA ATUAL *-->
            <div class="form-group">
                <label for="Empresa">Empresa atual:</label>
                <input type="text" class="form-control" id="empresa" placeholder="Digite a empresa que você trabalha">
            </div>
            <!-- * ESTADO CIVIL *-->
          <label for="estado-civil">Estado civil:</label> 
            <div class="form-group">
              <div class="row">
                  <div class="radio">
                    <label><input type="radio" name="optradio">Solteiro(a)</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Casado(a)</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Divorciado(a)</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="optradio">Viúvo(a)</label>
                  </div>
             </div>
          </div>

        <!-- * CARGO ATUAL *-->
         <div class="form-group">
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
         </div>

         <!-- * PÓS OU GRADUAÇÃO *-->
          <input type="text" style="display: none" id="cargoOutro" />
            <div class="form-group">
                <label for="OutraGraduacao">Sua pós gradução ou graduação:</label>
                <input type="outragraduacao" class="form-control" id="outragraduacao" placeholder="Digite a sua pós gradução/graduação e local">
                <small id="emailHelp" class="form-text text-muted">Caso não esteja fazendo outra pós gradução ou graduação, deixe o espaço acima em branco</small>
            </div>

           <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
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