<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php foreach($alunos as $a){ ?>
<div class="media">
  <div class="media-left media-middle">
    <img src="<?php echo $a['foto'] ?>" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?php echo mb_strtoupper($a['nome']) ?></h4>
    <p><?php echo $a['depoimento'] ?></p>
    <p><?php echo "Atualmente: ".$a['funcao']. " em ".$a['empresa']  ?></p>
  </div>
</div>
<?php } ?>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
