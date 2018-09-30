<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="http://www.ic.uff.br" title="Valeu a Pena">
                <img class="logo" src="images/logo.png" alt="Valeu a Pena" style="margin-top:5px;" />
            </a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		   <ul class="nav navbar-nav navbar-left">
				<li><a href="<?php echo base_url('Welcome') ?>" class="smooth-scroll"><h2><strong>Sistemas de Informação</strong> - Valeu a pena</h2></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smooth-scroll">Sobre</a></li>
				<li><a href="#pets" class="smooth-scroll">Nossos ex-alunos</a></li>
				<li><a href="#stories" class="smooth-scroll">Depoimentos</a></li>
				<li><a href="#contact" class="smooth-scroll">Contato</a></li>
				<li><a href="<?php echo base_url('Login') ?>" class="smooth-scroll">Login</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

