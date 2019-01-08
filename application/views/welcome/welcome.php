<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="br">
    <head>
        <!-- Meta TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Valeu a Pena? | UFF </title>
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/custom.css">

        <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="http://prepbootstrap.com/Content/shieldui-lite/dist/css/light/all.min.css" />
        <link id="themecss" rel="stylesheet" type="text/css" href="https://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />

    </head>

    <body>


        <?php
        $this->load->view("layouts\menu");
        ?>

<!--  **INÍCIO - SOBRE ** -->
        <div class="container-about">
            <div class="container">
                <div class="row oque-e" id="home">
                    <div class="col-md-6">
                        <img class="img-responsive img-custom" src="images/image1.jpg"/>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="#mission"  class="a-infos" aria-controls="mission" role="tab" data-toggle="tab" style="font-size:16px;">O que é Valeu a Pena?</a></li>
                                <li role="presentation"><a href="#goal" aria-controls="goal" class="a-infos" role="tab" data-toggle="tab" style="font-size:16px;">Sobre o curso de S.I.</a></li>
                            </ul>

                            <div class="tab-content">
                                <br/>
                                <div role="tabpanel" class="tab-pane active text-justify" id="mission"  style="font-size:16px;">O <b>Valeu a Pena?</b> é um portal com objetivo de concentrar informações de bacharéis em Sistemas de Informação pela Universidade Federal Fluminense a fim de que os próprios alunos possam opinar sobre o curso e servir como base para aqueles que prentendem ingressar.
                                    <br/>
                                </div>
                                <div role="tabpanel" class="tab-pane text-justify" id="goal"  style="font-size:16px;">Capacitar o profissional para a utilização instrumental da tecnologia da computação na <b>solução criativa de problemas diversos de empresas</b>.
                                                                                            <br>O perfil dos egressos é de um profissional apto para tratar da inovação, do planejamento e dos recursos humanos, financeiros e tecnológicos e do desenvolvimento, implantação e gestão das tecnologias nas organizações, indústrias e empresas. <br>Para saber mais, acesse o site do <a href="http://www.ic.uff.br/index.php/pt/informacoes-gerais-sistemas-de-informacao/">Instituto</a>. <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--  **FIM - SOBRE ** -->

<!--  **INÍCIO - DEPOIMENTOS ** -->
        <div class="container-gallery">
            <div class="container">
                <div class="page-header" id="depoimentos">
                    <h1 class="text-center custom-text-primary">Depoimentos</h1>
                </div>
                <section class="testimonials_area p_120">
                    <div class="container">
                        <div class="testi_slider owl-carousel">
                        <?php foreach ($depoimento as $aluno):?>
                            <div class="item">
                                <div class="testi_item">
                                    <div class="media">
                                        <div class="media-body">
                                            <p><?php echo $aluno['depoimento'] ?></p>
                                            <h4><?php echo $aluno['nome'] ?></h4>
                                            <h5><?php echo $aluno['funcao'] ? $aluno['funcao'] : " - " ?> em <?php echo $aluno['empresa'] ? $aluno['empresa'] : " -" ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                        </div>
                    </div>  
                </section>    
                <small id="Help" class="text-center">Arraste para a direita para visualizar mais depoimentos</small>
            </div>
        </div>
        <div class="text-center">
            <a type="submit" href="<?php echo base_url('Aluno/painel_depoimento') ?>" value="submit" class="btn btn-success">Ver todos</a>
        </div>
<!--  **FIM - DEPOIMENTOS ** -->

<!--  **INÍCIO - EX-ALUNOS ** -->
<div class="container-stories">
	<div class="container">
	    <div class="page-header" id="ex-alunos">
            <h1 class="text-center custom-text-primary">Nossos ex-alunos</h1>
	    </div>
		<div class="row">
        <?php for ($i = 0; $i < 3 && $cont > $i; $i++) {?>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-4">
                        <img src="<?php echo $alunosCadastroAprovado[$i]['foto'] ?>" class="media-object" style="width:60px">
					</div>
					<div class="col-md-4">
						<h4><?php echo $alunosCadastroAprovado[$i]['nome'] ?></h4>
					    <p class="text-justify"><?php echo $alunosCadastroAprovado[$i]['funcao'] ? $alunosCadastroAprovado[$i]['funcao'] : " - " ?> em <?php echo $alunosCadastroAprovado[$i]['empresa'] ? $alunosCadastroAprovado[$i]['empresa'] : " -" ?></p>
                    </div>
                </div>
			</div>
        <?php }?>    
        </div>
		</div>
		<br/>
        <br/>
        <div class="container">
		<div class="row">
        <?php for ($i = 3; $i < 6 && $cont > $i; $i++) {?>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-4">
                        <img src="<?php echo $alunosCadastroAprovado[$i]['foto'] ?>" class="media-object" style="width:60px">
					</div>
					<div class="col-md-4">
						<h3><?php echo $alunosCadastroAprovado[$i]['nome'] ?></h3>
					    <p class="text-justify"><?php echo $alunosCadastroAprovado[$i]['funcao'] ? $alunosCadastroAprovado[$i]['funcao'] : " - " ?> em <?php echo $alunosCadastroAprovado[$i]['empresa'] ? $alunosCadastroAprovado[$i]['empresa'] : " -" ?></p>
                    </div>
                </div>
			</div>
        <?php }?>
        </div>
    </div>
</div>

<div class="text-center">
    <a type="submit" href="<?php echo base_url('Aluno/painel_ex') ?>" value="submit" class="btn btn-success">Ver todos</a>
</div>
<!--  **FIM - EX-ALUNOS ** -->

<!--  **INÍCIO - CONTATO ** -->
        <div class="container-contact">
            <div class="container">
                <div class="page-header" id="contact">
                    <h2 class="text-center custom-text-primary">Contato</h2>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact_info ">
                                <div class="info_item">
                                    <i class="fa fa-home "></i>
                                    <h6 class="">Niterói, Rio de Janeiro</h6>
                                    <p>Av. Gal. Milton Tavares de Souza, s/n - São Domingos, Niterói - RJ, 24210-310</p>
                                </div>
                                <div class="info_item">
                                <i class="fa fa-phone"></i>
                                    <h6>(21) 2629-5667</h6>
                                    <p>Secretaria do curso de Sistemas de Informação</p>
                                </div>
                                <div class="info_item">
                                    <i class="fa fa-envelope"></i>
                                    <h6>secretaria.bsi@ic.uff.br</h6>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--  **FIM - CONTATO ** -->

<!--  **INÍCIO - FOOTER ** -->
        <footer id="subfooter" class="clearfix">
            <div class="container">
                <div class="row text-justify">
                    <div class="col-md-12">
                        <p>Desenvolvido por: Catarina Ribeiro e Duerton Ralph</p>
                    </div>
                </div>
            </div>
        </footer>
<!--  **FIM - FOOTER ** -->

        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="./assets/js/jquery-3.2.1.min.js"></script>
        <script src="./assets/js/popper.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/stellar.js"></script>
        <script src="./assets/js/simpleLightbox.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
        <script src="./assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="./assets/js/isotope-min.js"></script>
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.waypoints.min.js"></script>
        <script src="./assets/js/jquery.counterup.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/contact.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="./assets/js/gmaps.min.js"></script>
        <script src="./assets/js/theme.js"></script>
        <script src="./assets/js/theme-idea3.js"></script>

    </body>
</html>

