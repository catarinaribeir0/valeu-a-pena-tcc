<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
  <?php echo validation_errors(); ?>
  <?php echo form_open('Login/validar'); ?>
    <div class="container form">
        <div class="form-group">
          <label class="custom-label" for="cpf">CPF:</label>
          <input type="cpf" class="form-control" id="cpf" value="" placeholder="Entre com o CPF" name="cpf">
        </div>
        <div class="form-group">
          <label class="custom-label" for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" value="" placeholder="Entre com a sua senha" name="senha">
        </div>
        <div class="form-group"> 
        <label class="radio-inline">
          <input checked="checked" value="aluno" type="radio" id="tipo_usuario" name="tipo_usuario">Ex-Aluno
        </label>
        <label class="radio-inline">
          <input type="radio" id="tipo_usuario" value="coordenador" name="tipo_usuario">Coordenador
        </label>
        </div>
        <button type="submit" class="btn btn-success">Login</button>
      </div>
  <?php echo form_close(); ?>
  <br>

