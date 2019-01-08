<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->model('Aluno_model');
    //$this->output->enable_profiler(true);
  }

	public function index()
	{
    $depoimento = $this->Aluno_model->get_alldepoimentos();
    $alunos_cadastroAprovado = $this->Aluno_model->get_allcadastroAprovado();
    $alunos = array();
    foreach($alunos_cadastroAprovado as $a) {
      $foto_aluno = $a['foto'].".jpg";
      if (!file_exists(FCPATH . "images/team/$foto_aluno")) {
          $a['foto'] = base_url(SEM_IMAGEM);
      } else {
          $a['foto'] = base_url(PATH_IMAGEM . $foto_aluno);
      }
      array_push($alunos, $a);
    }
    shuffle($alunos_cadastroAprovado);
    $cont = count($alunos_cadastroAprovado);
    $cont < 6 ? $data['cont'] =  $cont : $data['cont'] =  6;
    $data['alunosCadastroAprovado'] = $alunos;
    $data['depoimento'] = $depoimento;
    $this->load->view('welcome/welcome', $data);
            
	}

}
