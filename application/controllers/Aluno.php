<?php

class Aluno extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Aluno_model');
        //$this->output->enable_profiler(true);
    }

    /*
     * Listing of alunos
     */

    function index() {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('aluno/index?');
        $config['total_rows'] = $this->Aluno_model->get_all_alunos_count();

        $this->pagination->initialize($config);

        $data['alunos'] = $this->Aluno_model->get_all_alunos($params);

        $data['titulo_da_pagina'] = '';
        $data['_view'] = 'aluno/lista';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new aluno
     */

    function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[50]');
        $this->form_validation->set_rules('cpf', 'cpf', 'required|valid_cpf');
        $this->form_validation->set_rules('email', 'Email', 'max_length[50]|valid_email');
        $this->form_validation->set_rules('matricula', 'Matricula', 'max_length[9]');
        $this->form_validation->set_rules('senha', 'Senha', 'max_length[8]');



        if ($this->form_validation->run()) {
            $params = array(
                'nome' => $this->input->post('nome'),
                'cpf' => $this->input->post('cpf'),
                'email' => $this->input->post('email'),
                'matricula' => $this->input->post('matricula'),
                'senha' => $this->input->post('senha')
            );

            $aluno_id = $this->Aluno_model->add_aluno($params);
            redirect('Welcome');
        } else {
            
        $data['titulo_da_pagina'] = '';
        $data['_view'] = 'aluno/add';
        $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editando aluno pelo peril coordenador
     */

    function edit($id) {

        if ($this->session->userdata('logado') == 'coordenador') {
            $data['aluno'] = $this->Aluno_model->get_aluno($id);

            $this->load->library('form_validation');
            $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[50]');
            $this->form_validation->set_rules('cpf', 'Cpf', 'required|max_length[14]');
            $this->form_validation->set_rules('email', 'Email', 'max_length[50]|valid_email');
            $this->form_validation->set_rules('matricula', 'Matricula', 'max_length[9]');
            $this->form_validation->set_rules('depoimento', 'Conhecimento', 'required');
            $this->form_validation->set_rules('empresa', 'Empresa', 'required|max_length[30]');
            $this->form_validation->set_rules('funcao', 'Função', 'required|max_length[30]');

            if ($this->form_validation->run()) {
                
                $params = array(
                    'nome' => $this->input->post('nome'),
                    'cpf' => $this->input->post('cpf'),
                    'email' => $this->input->post('email'),
                    'matricula' => $this->input->post('matricula'),
                    'depoimento' => $this->input->post('depoimento'),
                    'empresa' => $this->input->post('empresa'),
                    'funcao' => $this->input->post('funcao'),
                );               

                $this->Aluno_model->update_aluno($id, $params);
                redirect('aluno/index');
            } else {
                $data['titulo_da_pagina'] = '';
                $data['_view'] = 'aluno/edit_meusdados';
                $this->load->view('layouts/main', $data);
            }
        } else {
            
        }
    }

    /*
     * Deleting aluno
     */

    function remove($id) {
        $aluno = $this->Aluno_model->get_aluno($id);

        // check if the aluno exists before trying to delete it
        if (isset($aluno['id'])) {
            $this->Aluno_model->delete_aluno($id);
            redirect('aluno/index');
        } else
            show_error('The aluno you are trying to delete does not exist.');
    }

    function aprovar($id) {
        $aluno = $this->Aluno_model->get_aluno($id);

        if ($aluno['cadastro_aprovado'] == 'S') {
            $params = array('cadastro_aprovado' => 'N');
        } else {
            $params = array('cadastro_aprovado' => 'S');
        }
        $this->Aluno_model->aprovar_aluno($id, $params);

        $this->index();
    }

    function aprovarDepoimento($id) {
        $aluno = $this->Aluno_model->get_aluno($id);

        if ($aluno['depoimento_aprovado'] == 'S') {
            $params = array('depoimento_aprovado ' => 'N');
        } else {
            $params = array('depoimento_aprovado ' => 'S');
        }
        $this->Aluno_model->update_aluno($id, $params);

        $this->index();
    }

    function resetar($id) {
        $params = array('senha' => '123@123');
        $this->Aluno_model->update_aluno($id, $params);

        $this->index();
    }

    function home() {
        $data['titulo_da_pagina'] = 'Aluno logado!';
        $data['_view'] = 'aluno/home';
        $this->load->view('layouts/main', $data);
    }

    function meus_dados() {

        if ($this->session->userdata('logado') == 'aluno') {
            $foto_aluno = $this->session->userdata('id') . '.jpg';

            if (!file_exists(FCPATH . "images/team/$foto_aluno")) {
                $data['foto'] = base_url(SEM_IMAGEM);
            } else {
                $data['foto'] = base_url(PATH_IMAGEM . $this->session->userdata('id') . '.jpg');
            }

            $data['titulo_da_pagina'] = '';
            $data['_view'] = 'aluno/index';
            $this->load->view('layouts/main', $data);
        } else {
            
        }
    }

    function editar_meus_dados() {

        if ($this->session->userdata('logado') == 'aluno'){
            $data['aluno'] = $this->Aluno_model->get_aluno($this->session->userdata('id'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[50]');
            $this->form_validation->set_rules('cpf', 'Cpf', 'required|max_length[14]');
            $this->form_validation->set_rules('email', 'Email', 'max_length[50]|valid_email');
            $this->form_validation->set_rules('matricula', 'Matricula', 'max_length[9]');
            $this->form_validation->set_rules('depoimento', 'Conhecimento', 'required');
            $this->form_validation->set_rules('empresa', 'Empresa', 'required|max_length[30]');
            $this->form_validation->set_rules('funcao', 'Função', 'required|max_length[30]');

            if ($this->form_validation->run()) {
                $params = array(
                    'nome' => $this->input->post('nome'),
                    'cpf' => $this->input->post('cpf'),
                    'email' => $this->input->post('email'),
                    'matricula' => $this->input->post('matricula'),
                    'depoimento' => $this->input->post('depoimento'),
                    'empresa' => $this->input->post('empresa'),
                    'funcao' => $this->input->post('funcao'),
                );

                
                if( $this->input->post('depoimento') != $this->session->userdata('depoimento')){
                    $params['depoimento_aprovado'] = 'N';
                }

                $this->Aluno_model->update_aluno($this->session->userdata('id'), $params);
                $dados = $this->Aluno_model->get_aluno($this->session->userdata('id'));
                $this->session->set_userdata($dados);

                redirect('aluno/meus_dados');
            } else {
                $data['titulo_da_pagina'] = '';
                $data['_view'] = 'aluno/edit_meusdados';
                $data['Título_da_pagina'] = 'Editar dados';
                $this->load->view('layouts/main', $data);
            }
        } else {
            
        }
    }

    function upload() {

        if ($this->session->userdata('logado') == 'aluno') {
            $config['upload_path'] = './images/team';
            $config['allowed_types'] = 'jpg';
            $config['max_size'] = 1024;
            $config['overwrite'] = true;
            $config['file_name'] = $this->session->userdata('id');

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {

                $data['erro'] = $this->upload->display_errors();
                $data['_view'] = 'aluno/foto';
                $data['titulo_da_pagina'] = '';
                $this->load->view('layouts/main', $data);
            } else {

                redirect('Aluno/meus_dados');
            }
        } else {
            
        }
    }

    function registrar() {

        if ($this->session->userdata('logado') == 'aluno') {
            $data['aluno'] = $this->Aluno_model->get_aluno($this->session->userdata('id'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[50]');
            $this->form_validation->set_rules('cpf', 'Cpf', 'required|max_length[14]');
            $this->form_validation->set_rules('email', 'Email', 'max_length[50]|valid_email');
            $this->form_validation->set_rules('matricula', 'Matricula', 'max_length[9]');
            $this->form_validation->set_rules('depoimento', 'Conhecimento', 'required');
            $this->form_validation->set_rules('empresa', 'Empresa', 'required|max_length[30]');
            $this->form_validation->set_rules('funcao', 'Função', 'required|max_length[30]');

            if ($this->form_validation->run()) {
                $params = array(
                    'nome' => $this->input->post('nome'),
                    'cpf' => $this->input->post('cpf'),
                    'email' => $this->input->post('email'),
                    'matricula' => $this->input->post('matricula'),
                    'depoimento' => $this->input->post('depoimento'),
                    'empresa' => $this->input->post('empresa'),
                    'funcao' => $this->input->post('funcao'),
                );

                $this->Aluno_model->update_aluno($this->session->userdata('id'), $params);
                $dados = $this->Aluno_model->get_aluno($this->session->userdata('id'));
                $this->session->set_userdata($dados);

                redirect('aluno/meus_dados');
            } else {
                $data['titulo_da_pagina'] = 'Editar Meus Dados';
                $data['_view'] = 'aluno/edit_meusdados';
                $this->load->view('layouts/main', $data);
            }
        } else {
            
        }
    }
    
    function painel_ex() {
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $anoselecionado = (int) $this->input->post('selecao_ano');
        } else{
            $anoselecionado = '11';
        }
        
        //echo $anoselecionado;
        //die();
        $data['anos']=  $this->Aluno_model->get_anos();
        $data['anoselecionado']=  $anoselecionado;
        $dados = $this->Aluno_model->get_aluno_por_ano($anoselecionado);
        
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
        
        $data['titulo_da_pagina'] = '';
        $data['_view'] = 'aluno/painel_ex';
        $this->load->view('layouts/main', $data);
    }

}
