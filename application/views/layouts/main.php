<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="br">
    <head>
        <!--Meta TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Valeu a Pena? | UFF </title>
        
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap/css/bootstrap.css">
    </head>

    <body>

        <?php
        $this->load->view("layouts\menu");
        ?>

        <div class="container">
            <p></p>
            <?php
            echo "<h1> $Título_da_pagina </h1>";
            if (isset($_view) && $_view) {
                $this->load->view($_view);
            }
            ?>

        </div>


            <footer id="subfooter" class="clearfix">
                <div class="container">
                    <div class="row text-justify">
                        <div class="col-md-12">
                            <p>Desenvolvido por: Catarina Ribeiro e Duerton Ralph</p>
                        </div>
                    </div>
                </div>
            </footer>

        
        <!-- JavaScript -->
        <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/popper.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>      
    </body>
</html>

