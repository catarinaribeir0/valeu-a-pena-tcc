<div class="container bootstrap snippet aluno-info">

  <div class="row">
    <div class="col-sm-3">              

    <div class="text-center">
      <img src="<?php echo base_url() ?>uploads/1.jpg"  class="avatar img-circle img-thumbnail" alt="avatar">
      <h6>Faça o upload da sua foto<a href="<?php echo site_url('Upload/Upload_form'); ?>"> aqui</a>.</h6>
      <!-- <input type="file" class="text-center center-block file-upload">-->
    </div></hr><br>

      <!--        
        <div class="panel panel-default">
          <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
          <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
        </div>
        -->
        
        <ul class="list-group">
          <li class="list-group-item text-left"><strong><a onclick="openLink(event, 'edit')">Editar dados</a> </strong> <i class="fa fa-edit fa-1x"></i></li>         
          <li class="list-group-item text-left"><strong><a onclick="openLink(event, 'show')">Visualizar colegas de classe</a></strong> <i class="fa fa-users"></i></li>
          <li class="list-group-item text-left"><strong><a onclick="openLink(event, 'show')">Seus depoimentos</a></strong> <i class="fa fa-comments"></i></li>
          <li class="list-group-item text-left"><strong><a  href="<?php echo site_url('aluno/msg-recebidas'); ?>">Mensagens recebidas</a></strong></strong> <i class="fa fa-envelope"></i></li>
          <li class="list-group-item text-left"><strong><a  href="<?php echo site_url('aluno/msg-enviadas'); ?>">Mensagens enviadas</a></strong> <i class="fa fa-envelope-open"></i></li>
        </ul> 
      
      <!--         
        <div class="panel panel-default">
          <div class="panel-heading">Social Media</div>
          <div class="panel-body">
            <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
          </div>
        </div>
      </div>
      -->
  </div>
  
  <div class="col-sm-9">
    <div class="container"> 

      <div id="edit" class="custom-tab">
          <h3>Edit</h3>
          <p>London is the capital city of England.</p>
      </div>

      <div id="show" class="custom-tab">
          <h3>Show</h3>
          <p>London is the capital city of England.</p>
      </div>
    </div>
  </div>

  </div>
</div>                                            