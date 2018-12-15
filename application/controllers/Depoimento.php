<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Depoimento extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Aluno_model');
        $this->output->enable_profiler(true);
    }

    public function index() {


        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('Depoimento/index?');
        $config['total_rows'] = $this->Aluno_model->get_count_depoimentos();

        $this->pagination->initialize($config);
        $data['paginacao'] = $this->pagination->create_links();

        $dados = $this->Aluno_model->get_alldepoimentos($params);

        $alunos = array();
        foreach($dados as $a) {
            $foto_aluno = $a['foto'].".jpg";
            if (!file_exists(FCPATH . "images/team/$foto_aluno")) {
                $a['foto'] = base_url(SEM_IMAGEM);
            } else {
                $a['foto'] = base_url(PATH_IMAGEM . $foto_aluno);
            }
            array_push($alunos, $a);

        }
        $data['alunos'] = $alunos;

        $data['titulo_da_pagina'] = 'Depoimentos';
        $data['_view'] = 'depoimento/index';
        $this->load->view('layouts/main', $data);
    }

}
