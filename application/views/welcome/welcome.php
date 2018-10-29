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
                                <li role="presentation"><a href="#mission"  class="a-infos" aria-controls="mission" role="tab" data-toggle="tab" style="font-size:15px;">O que é Valeu a Pena?</a></li>
                                <li role="presentation"><a href="#goal" aria-controls="goal" class="a-infos" role="tab" data-toggle="tab" style="font-size:15px;">Missão</a></li>
                                <li role="presentation"><a href="#vision" aria-controls="vision" class="a-infos" role="tab" data-toggle="tab" style="font-size:15px;"> Visão e valores</a></li>
                            </ul>

                            <div class="tab-content">
                                <br/>
                                <div role="tabpanel" class="tab-pane active text-justify" id="mission">O <b>Valeu a Pena?</b> é um portal com objetivo de concentrar informações de bacharéis em Sistemas de Informação pela Universidade Federal Fluminense a fim de que os próprios alunos possam opinar sobre o curso e servir como base para aqueles que prentendem ingressar.
                                    <br/>
                                </div>
                                <div role="tabpanel" class="tab-pane text-justify" id="goal">Promover de forma integrada a produção e difusão do conhecimento científico, tecnológico, artístico e cultural, e a formação de um cidadão imbuído de valores éticos que, com competência técnica, contribua para o desenvolvimento econômico-social auto-sustentado do Brasil.
                                    <br/>
                                </div>
                                <div role="tabpanel" class="tab-pane text-justify" id="vision"> Ser reconhecida nacional e internacionalmente pela excelência do curso, sua produção científica e pelo impacto social das suas atividades.
                                    <br/>
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
                            <div class="item">
                                <div class="testi_item">
                                    <div class="media">
                                        <!--<div class="d-flex">
                                                <img class="img-fluid" src="images/team/testi-1.png">
                                             </div>-->
                                        <div class="media-body">
                                            <p>Curso voltado ao mercado, com menos teoria e mais prática.</p>
                                            <h4>Marcus Vinicius</h4>
                                            <h5>Desenvolvedor Android em Full Lab</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_item">
                                    <div class="media">
                                        <!--<div class="d-flex">
                                                <img src="images/team/testi-1.png" alt="">
                                            </div>-->
                                        <div class="media-body">
                                            <p>Sou eternamente grata à todos os professores por serem maravilhosos. Sem eles, não teria chegado até aqui!</p>
                                            <h4>Ana Barroso</h4>
                                            <h5>Product Manager em Microsoft</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_item">
                                    <div class="media">
                                        <!--<div class="d-flex">
                                                <img src="images/team/team-2.png" alt="">
                                             </div>-->
                                        <div class="media-body">
                                            <p>Acredito que o curso tenha me disponibilizado tudo o que o mercado necessita!</p>
                                            <h4>Luiz Barbosa</h4>
                                            <h5>Engenheira de software em B2W</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_item">
                                    <div class="media">
                                        <!--<div class="d-flex">
                                                <img src="images/team/team-2.png" alt="">
                                            </div>-->
                                        <div class="media-body">
                                            <p>Curso muito bom, com professores exigentes porém muito atenciosos. Indico para todos!</p>
                                            <h4>Mariana Alves</h4>
                                            <h5>Analista de sistemas em Globo.com</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testi_item">
                                    <div class="media">
                                        <!--<div class="d-flex">
                                                <img src="images/team/team-2.png" alt="">
                                            </div>-->
                                        <div class="media-body">
                                            <p>Amei esta experiência... Os laboratórios são novos, com boa infraestrutura e professores sempre atualizados nas novas tecnologias!</p>
                                            <h4>Rodrigo Monte</h4>
                                            <h5>Cientista de dados em Google</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </section>    
            </div>
        </div>
<!--  **FIM - DEPOIMENTOS ** -->

<!--  **INÍCIO - EX-ALUNOS ** -->
        <div class="container-stories">
            <div class="container">
                <div class="page-header" id="ex-alunos">
                    <h1 class="custom-text-primary text-center">Ex-alunos</h1>
                </div><br>  
                <div class="testi_slider owl-carousel">
                    <section class="team_area p_120">
                        <div class="row team_inner">
                            <div class="col-lg-3 col-sm-4">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="img-fluid" src="./images/team/team-1.jpg" alt="">
                                        <div class="hover">
                                            <a href="#"><i class="fa fa-facebook custom-icon"></i></a>
                                            <a href="#"><i class="fa fa-twitter custom-icon"></i></a>
                                            <a href="#"><i class="fa fa-linkedin custom-icon"></i></a>
                                        </div>
                                    </div>
                                    <div class="team_name">
                                        <h4>João da Silva</h4>
                                        <b>Atualmente: </b><p>Desenvolvedor Java em X</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="img-fluid" src="images/team/team-2.jpg" alt="">
                                        <div class="hover">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team_name">
                                        <h4>Henrique Matos</h4>
                                        <b>Atualmente: </b><p>UX designer em Full Lab</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="img-fluid" src="images/team/team-3.jpg" alt="">
                                        <div class="hover">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team_name">
                                        <h4>Gabriel Oliveira</h4>
                                        <b>Atualmente: </b><p>Analista de sistemas em B2W</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="img-fluid" src="images/team/team-4.jpg" alt="">
                                        <div class="hover">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team_name">
                                        <h4>Marina Pereira</h4>
                                        <b>Atualmente: </b><p>Engenheira de software em Stone</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="img-fluid" src="images/team/team-5.jpg" alt="">
                                        <div class="hover">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team_name">
                                        <h4>Júlia Oliveira</h4>
                                        <b>Atualmente: </b><p>Agile specialist em Google</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="img-fluid" src="images/team/team-6.jpg" alt="">
                                        <div class="hover">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team_name">
                                        <h4>Pedro Pereira</h4>
                                        <b>Atualmente: </b><p>Analista de TI em ALERJ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="img-fluid" src="images/team/team-7.jpg" alt="">
                                        <div class="hover">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team_name">
                                        <h4>Lucas Teixeira</h4>
                                        <b>Atualmente: </b><p>Consultor de TI em Visagio</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="team_item">
                                    <div class="team_img">
                                        <img class="img-fluid" src="images/team/team-8.jpg" alt="">
                                        <div class="hover">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="team_name">
                                        <h4>Luciana Farias</h4>
                                        <b>Atualmente: </b><p>Desenvolvedora WEB em TAM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
<!--  **FIM - EX-ALUNOS ** -->

<!--  **INÍCIO - CONTATO ** -->
        <div class="container-contact">
            <div class="container">
                <div class="page-header" id="contact">
                    <h2 class="text-center custom-text-primary">Contato</h2>
                    <br>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="contact_info">
                                <div class="info_item">
                                    <i class="fa fa-home"></i>
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

