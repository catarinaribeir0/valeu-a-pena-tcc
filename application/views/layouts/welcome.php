<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="br">
<head>
	<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Valeu a Pena? | UFF </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/css/linericon/style.css">
        <link rel="stylesheet" href="./assets/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="./assets/css/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="./assets/css/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="./assets/css/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="./assets/css/style-idea3.css">
        <link rel="stylesheet" href="./assets/css/responsive.css">
<?php	
   $this->load->view("layouts\cabecalho");
?>
</head>
  <body>

<?php	
   $this->load->view("layouts\menu");
?>

 <!-- Carousel -->
    <div id="theme-carousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/carousel1b.jpg" alt="carousel1" style="width: 100%" />
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-7">
                        </div>
                        <div class="col-md-5">
                            <h2>SAVE LIFE ADOPT A PET</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
							<br />
							<button class="button-more-primary btn btn-lg" type="button" style="margin:10px;">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/carousel1b.jpg" alt="carousel2" style="width: 100%" />
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-5">
                            <h1>Curso de Sistemas de Informação</h1>
                            <h3>Valeu a Pena</h3>
							<br />
							<button class="button-more-primary btn btn-lg" type="button" style="margin:10px;">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/carousel1b.jpg" alt="carousel3" style="width: 100%">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-md-7">
                        </div>
                        <div class="col-md-5">
                            <h2>ANIMALS NEED THE SUPPORT</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
							<br />
							<button class="button-more-primary btn btn-lg" type="button" style="margin:10px;">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#theme-carousel" role="button" data-slide="prev">
            <div class="carousel-control-arrow">&#8249;</div>
        </a>
        <a class="right carousel-control" href="#theme-carousel" role="button" data-slide="next">
            <div class="carousel-control-arrow">&#8250;</div>
        </a>
    </div>

<div class="container-about">
    <div class="container">
	    <div class="page-header" id="home">
		    <h1 class="text-primary  text-center">Sobre Nós</h1>
	    </div>
		<div class="row">
		<div class="col-md-6">
			<img class="img-responsive" src="images/image1.jpg"/>
		</div>
		<div class="col-md-6">
			<div>
			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab" style="font-size:20px;">Missão</a></li>
				<li role="presentation"><a href="#goal" aria-controls="goal" role="tab" data-toggle="tab" style="font-size:20px;">Objetivo</a></li>
				<li role="presentation"><a href="#vision" aria-controls="vision" role="tab" data-toggle="tab" style="font-size:20px;">Visão</a></li>
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
				<br />
				<div role="tabpanel" class="tab-pane active text-justify" id="mission">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
				<br />
				<button class="button-more-success btn" type="button" style="margin:10px;">READ MORE</button>
				</div>
				<div role="tabpanel" class="tab-pane text-justify" id="goal">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
				<br />
				<button class="button-more-success btn" type="button" style="margin:10px;">READ MORE</button>
				</div>
				<div role="tabpanel" class="tab-pane text-justify" id="vision">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.
				<br />
				<button class="button-more-success btn" type="button" style="margin:10px;">READ MORE</button>
				</div>
				</div>
			</div>
		</div>
	</div>
    </div>
</div>


<div class="container-stories">
	 <div class="container">
	    <div class="page-header" id="stories">
		    <h1 class="text-primary text-center">Depoimentos</h1>
	    </div>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-3">
						<img class="img-responsive" src="images/image2.jpg" />
					</div>
					<div class="col-md-8">
						<h3>Isabella</h3>
						<p>and Rex</p>
						<br />
						<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<br />
						<button class="button-more-success btn" type="button" style="margin:10px;">READ MORE</button>
						<br />
					</div>
				</div>
			</div>
			 <div class="col-md-6">
				<div class="row">
					<div class="col-md-3">
						<img class="img-responsive" src="images/image2.jpg" />
					</div>
					<div class="col-md-8">
						<h3>Isabella</h3>
						<p>and Rex</p>
						<br />
						<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<br />
						<button class="button-more-success btn" type="button" style="margin:10px;">READ MORE</button>
						<br />
					</div>
				</div>
			</div>

		</div>
		<br />
		<br />
	    <div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2">
						<img class="img-responsive" src="images/image4.jpg" />
					</div>
					<div class="col-md-10">
						<h3>Isabella</h3>
						<p>and Rex</p>
						<br />
						<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
						<br />
						<button class="button-more-success btn" type="button" style="margin:10px;">READ MORE</button>
						<br />
					</div>
				</div>
			</div>

		</div>
		
	</div>
</div>



<div class="container-gallery">
    <div class="container">
        <div class="page-header" id="gallery">
            <h1 class="text-center text-primary">Egresso de Sistemas de Informação</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                   <img class="img-responsive" src="https://scontent.fsod4-1.fna.fbcdn.net/v/t1.0-9/22008266_1586887777998243_4817197258739246334_n.jpg?_nc_cat=111&oh=a6b87e16e6978b638e3b092f29dd0568&oe=5C5FC7C1" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <img class="img-responsive"  src="https://scontent.fsod4-1.fna.fbcdn.net/v/t1.0-9/31815445_1839747492712269_1450118638601240576_n.jpg?_nc_cat=102&oh=451c32dd5ab38ea5e15d8820a94d6e4a&oe=5C6122E8" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <img class="img-responsive"  src="https://scontent.fsod4-1.fna.fbcdn.net/v/t1.0-9/22046612_1586887591331595_8284458241820219911_n.jpg?_nc_cat=111&oh=e8561115b729a408a01cbae78f5961b1&oe=5C55F39A" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <img class="img-responsive"  src="images/gallery/gallery4.jpg" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <img class="img-responsive"  src="images/gallery/gallery5.jpg" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <img class="img-responsive" src="images/gallery/gallery6.jpg" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <img class="img-responsive"  src="images/gallery/gallery7.jpg" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <img class="img-responsive" src="images/gallery/gallery8.jpg" />
                </div>
            </div>
			<div class="col-md-4">
                <div class="well">
                    <img class="img-responsive"  src="images/gallery/gallery9.jpg" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-contact">
    <div class="container">
	    <div class="page-header" id="contact">
			<h2 class="text-center text-primary">Contato</h2>
			<br>
			<div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="fa fa-home"></i>
                                <h6 class="">Niterói, Rio de Janeiro</h6>
                                <p>Av. Gal. Milton Tavares de Souza,, s/n - São Domingos, Niterói - RJ, 24210-310</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">(21) 2629-5667	</a></h6>
                                <p>Secretaria do curso de Sistemas de Informação</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">secretaria.bsi@ic.uff.br</a></h6>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form"  action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Enviar mensagem</button>
                            </div>
                        </form>
                    </div>
                </div>
		</div>
    </div>
</div>

<footer id="subfooter" class="clearfix">
    <div class="container">
        <div class="row text-justify">
            <div class="col-md-6">
				<h3>Contate o Instituto:</h3>
				<br>
				<i class="lnr lnr-home"></i>
				<p>Av. Gal. Milton Tavares de Souza, s/nº São Domingos - Niterói - RJ. CEP: 24210-346</p>	
				<p>(21) 2629-5667</p>	
				<p>secretaria.bsi@ic.uff.br</p>	
				<hr style="border-color:#bbb;">
				<p>Desenvolvido por: Catarina Ribeiro e Duerton Ralph</p>
            </div>
			<!--<div class="col-md-4">
				<h3>Animals For Adoption</h3>
				<br />
                 <div class="row text-justify">
					<div class="col-md-4">
						<img class="img-responsive" src="images/gallery/gallery1.jpg" />
					</div>
					<div class="col-md-8">
						<p>What is Lorem Ipsum?</p>
					</div>
				</div>
				<div class="row text-justify">
					<div class="col-md-6">
						<img class="img-responsive" src="images/gallery/gallery2.jpg" />
					</div>
					<div class="col-md-8">
						<p>Where does it come from?</p>
					</div>
				</div>
				<br />
				<div class="row text-justify">
					<div class="col-md-4">
						<img class="img-responsive" src="images/gallery/gallery3.jpg" />
					</div>
					<div class="col-md-8">
						<p>Why do we use it?</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
                <h3>Last Adopted</h3>
				<br />
				<div class="row text-justify">
					<div class="col-md-4">
						<img class="img-responsive" src="images/image4.jpg" />
					</div>
					<div class="col-md-8">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
				<br />
				<div class="row text-justify">
					<div class="col-md-4">
						<img class="img-responsive" src="images/image2.jpg" />
					</div>
					<div class="col-md-8">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
					</div>
				</div>
            </div>
        </div>-->
    </div>
</footer>

<!-- <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget ab_wd">
                            <h6 class="footer_title">Sobre nós</h6>
                            <p>Portal desenvolvido pelos ex-alunos Catarina Ribeiro e Duerton Ralph.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget contact_wd">
                            <h6 class="footer_title">Contate o Instituto:</h6>
                            <p>Av. Gal. Milton Tavares de Souza, s/nº São Domingos - Niterói - RJ. CEP: 24210-346</p>	
                            <b>(21) 2629-5667</b>		
							<br>							
                            <b>secretaria.bsi@ic.uff.br</b>			
                        </div>
                    </div>	-->					

  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
          <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="./assets/js/jquery-3.2.1.min.js"></script>
        <script src="./assets/js/popper.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script src="./assets/js/stellar.js"></script>
        <script src="./assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="./assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="./assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="./assets/vendors/isotope/isotope-min.js"></script>
        <script src="./assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="./assets/vendors/counter-up/jquery.counterup.js"></script>
        <!-- contact js -->
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="./assets/js/gmaps.min.js"></script>
        <script src="./assets/js/theme.js"></script>
        <script src="./assets/js/theme-idea3.js"></script>
  </body>
</html>
	
