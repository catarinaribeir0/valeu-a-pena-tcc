<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="br">
<head>
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
                   <img class="img-responsive" src="images/gallery/gallery1.jpg" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <img class="img-responsive"  src="images/gallery/gallery2.jpg" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <img class="img-responsive"  src="images/gallery/gallery3.jpg" />
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
			<h2 class="text-center text-primary">Contact us using the form below</h2>
			<br />
			<div class="row">
				<div class="col-md-6">
					<div id="googlemap"></div>
				</div>
				<div class="col-md-6">
					<form>
						<div class="form-group">
							<label for="form-name">Name</label>
							<input type="email" class="form-control" id="form-name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="form-email">Email Address</label>
							<input type="email" class="form-control" id="form-email" placeholder="Email Address">
						</div>
						<div class="form-group">
							<label for="form-subject">Telephone</label>
							<input type="text" class="form-control" id="form-subject" placeholder="Subject">
						</div>
						<div class="form-group">
							<label for="form-message">Email your Message</label>
							<textarea class="form-control" id="form-message" placeholder="Message"></textarea>
						</div>
						<button class="button-more-primary btn btn-lg" type="ubmit" style="margin:10px;">Register Now</button>
						<br /><br />
					</form>
				 </div>
			</div>
        </div>
    </div>
</div>

<footer id="subfooter" class="clearfix">
    <div class="container">
        <div class="row text-justify">
            <div class="col-md-4">
				<h3>About Us</h3>
				<br />
                <p>Our mission is to find the homeless animals around the country and give them a better life.</p>
				<hr style="border-color:#bbb;">
				<p>54, North Road, PA 45086, USA</p>
                <p>+1 888 455 6677</p>
                <p><a href="mailto:mail@example.com" style="color:#4BAFD3;">mail@example.com</a></p>
            </div>
			<div class="col-md-4">
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
				<br />
				<div class="row text-justify">
					<div class="col-md-4">
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
        </div>
    </div>
</footer>

<footer id="footer" class="clearfix">
    <div class="container">
        <div class="row">
			<div class="col-md-8">
                <p>Created by <a href="https://www.shieldui.com" title="Shield UI" style="color: #4BAFD3;">Shield UI</a> and hosted by <a href="https://www.prepbootstrap.com" title="PrepBootstrap" style="color: #4BAFD3;">PrepBootstrap</a></p>
            </div>
			<div class="col-md-4">
                <p>
                    <a class="fa fa-twitter footer-socialicon" target="_blank" href="https://twitter.com/"></a>
                    <a class="fa fa-facebook footer-socialicon" target="_blank" href="https://www.facebook.com/"></a>
                    <a class="fa fa-google-plus footer-socialicon" target="_blank" href="https://plus.google.com/"></a>
                    <a class="fa fa-linkedin footer-socialicon" target="_blank" href="https://plus.google.com/"></a>
                </p>
            </div>
            
        </div>
    </div>
</footer>

  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
	
