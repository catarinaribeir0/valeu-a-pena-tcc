<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo form_open('Aluno/painel_ex') ?>
<div class="row">
    <div class="col-8"> 
    <h1 class="custom-text-primary"> Ex-alunos</h1> <br>
        <div class="form-group">
            <div class="col-md-8">
                <select name="selecao_ano" id="selecao_ano" class="form-control">
                    <?php
                    foreach ($anos as $a) {
                        $selected = ($a['ano'] == $anoselecionado) ? ' selected="selected"' : "";

                        echo '<option value="' . $a['ano'] . '" ' . $selected . '>' . 'Alunos de 20'.$a['ano'] . '</option>';
                    }
                    ?>
                </select>
                
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Filtrar</button>
            </div> 

        </div>

    </div>
</div>
<?php echo form_close(); ?>
<P></P>
<hr>
<?php for ($i = 0; $i < count($alunos); $i = $i + 2) { ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="media">
                <div class="media-left">
                    <img src="<?php echo $alunos[$i]['foto'] ?>" class="media-object" style="width:60px">
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $alunos[$i]['nome'] ?></h4>
                    <p>Atualmente:<?php echo $alunos[$i]['funcao'] ? $alunos[$i]['funcao'] : " - " ?> em <?php echo $alunos[$i]['empresa'] ? $alunos[$i]['empresa'] : " -" ?></p>
                </div>
            </div>  
        </div>
        <?php if (($i + 1) < count($alunos)) { ?>
            <div class="col-lg-6">
                <div class="media">
                    <div class="media-left">
                        <img src="<?php echo $alunos[$i + 1]['foto'] ?>" class="media-object" style="width:60px">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $alunos[$i + 1]['nome'] ?></h4>
                        <p>Atualmente:<?php echo $alunos[$i + 1]['funcao'] ? $alunos[$i + 1]['funcao'] : " - " ?> em <?php echo $alunos[$i + 1]['empresa'] ? $alunos[$i + 1]['empresa'] : " -" ?></p>
                    </div>
                </div>  
            </div>  
        <?php } ?>
    </div>
    <p></p>



<?php } ?>



