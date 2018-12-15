<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Navbar -->
<nav class="navbar navbar-fixed-top custom-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="http://www.ic.uff.br" title="Valeu a Pena">
                <img class="logo" src="<?php echo base_url() ?>images/logo.png" alt="Valeu a Pena" style="margin-top:5px;" />
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left nav-custom">
                <li><h2 class="custom-title"><strong>Valeu a pena?</strong></h2></li>
                <p class="custom-subtitle">Sistema de Informação - UFF</p>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url() ?>" class="smooth-scroll a-header">Home</a></li>
                <li><a href="<?php echo base_url('Aluno/painel_ex') ?>" class="smooth-scroll a-header">Nossos ex-alunos</a></li>
                <li><a href="<?php echo base_url('Depoimento') ?>" class="smooth-scroll a-header">Depoimentos</a></li>
                <!--<li><a href="#contact" class="smooth-scroll a-header">Contato</a></li>-->
                <?php if (($this->session->userdata('logado') == 'coordenador')) { ?>
                       <li><a href="<?php echo base_url('Aluno/index') ?>" class="smooth-scroll a-header">Ex-Alunos</a></li>
                       <li><a href="<?php echo base_url('Coordenador') ?>" class="smooth-scroll a-header">Coordenadores</a></li>
                 <?php } ?>
                <?php if (($this->session->userdata('logado') == 'aluno') || ($this->session->userdata('logado') == 'coordenador')) { ?>
                    <li><a href="<?php echo base_url('Logout') ?>" class="smooth-scroll a-header">Logout</a
                    <?php } else { ?>
                    <li><a href="<?php echo base_url('Aluno/add') ?>" class="smooth-scroll a-header">Registrar</a></li>
                    <li><a href="<?php echo base_url('Login') ?>" class="smooth-scroll a-header">Login</a></li>
                    <?php } ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

