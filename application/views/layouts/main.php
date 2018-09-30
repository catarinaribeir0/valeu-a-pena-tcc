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

<div class="container">
<p></p>
<?php	
            echo "<h1> $Título_da_pagina </h1>";
            if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>
</div>


  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
	
