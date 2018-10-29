<?php


class Aluno extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Aluno_model');
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

        $data['Título_da_pagina'] = '';
        $data['_view'] = 'aluno/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new aluno
     */

    function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[50]');
        $this->form_validation->set_rules('cpf', 'Cpf', 'required|max_length[14]');
        $this->form_validation->set_rules('email', 'Email', 'max_length[50]|valid_email');
        $this->form_validation->set_rules('matricula', 'Matricula', 'max_length[9]');



        if ($this->form_validation->run()) {
            $params = array(
                'nome' => $this->input->post('nome'),
                'cpf' => $this->input->post('cpf'),
                'email' => $this->input->post('email'),
                'matricula' => $this->input->post('matricula'),
                'cadastro_aprovado' => 'N'
            );

            $aluno_id = $this->Aluno_model->add_aluno($params);
            redirect('Welcome');
        } else {
            
       $data['Título_da_pagina'] = 'Registre-se no Portal';
        $data['_view'] = 'aluno/add';
        $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a aluno
     */

    function edit($id) {
        // check if the aluno exists before trying to edit it
        $data['aluno'] = $this->Aluno_model->get_aluno($id);

        if (isset($data['aluno']['id'])) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[50]');
            $this->form_validation->set_rules('cpf', 'Cpf', 'required|max_length[14]');
            $this->form_validation->set_rules('email', 'Email', 'max_length[50]|valid_email');
            $this->form_validation->set_rules('senha', 'Senha', 'max_length[8]');
            $this->form_validation->set_rules('telefone', 'Telefone', 'max_length[13]');
            $this->form_validation->set_rules('matricula', 'Matricula', 'max_length[9]');
            $this->form_validation->set_rules('disponibilidade', 'Disponibilidade', 'max_length[50]');
            $this->form_validation->set_rules('conhecimento', 'Conhecimento', 'max_length[50]');
            $this->form_validation->set_rules('periodo', 'Periodo', 'integer');
            $this->form_validation->set_rules('cadastro_aprovado', 'Cadastro Aprovado', 'required|max_length[1]');

            if ($this->form_validation->run()) {
                $params = array(
                    'id_atuacao' => $this->input->post('id_atuacao'),
                    'nome' => $this->input->post('nome'),
                    'cpf' => $this->input->post('cpf'),
                    'email' => $this->input->post('email'),
                    'senha' => $this->input->post('senha'),
                    'telefone' => $this->input->post('telefone'),
                    'matricula' => $this->input->post('matricula'),
                    'disponibilidade' => $this->input->post('disponibilidade'),
                    'conhecimento' => $this->input->post('conhecimento'),
                    'periodo' => $this->input->post('periodo'),
                    'cadastro_aprovado' => $this->input->post('cadastro_aprovado'),
                );

                $this->Aluno_model->update_aluno($id, $params);
                redirect('aluno/index');
            } else {


                $data['_view'] = 'aluno/edit';
                $data['Título_da_pagina'] = 'Editar alunos';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The aluno you are trying to edit does not exist.');
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

    function habilitar($id) {
        $aluno = $this->Aluno_model->get_aluno($id);

        if ($aluno['estagio_habilitado'] == 'S') {
            $params = array('estagio_habilitado ' => 'N');
        } else {
            $params = array('estagio_habilitado ' => 'S');
        }
        $this->Aluno_model->aprovar_aluno($id, $params);

        $this->index();
    }

    function home()
    {
        $data['Título_da_pagina'] = 'Aluno logado!';
        $data['_view'] = 'aluno/home';
        $this->load->view('layouts/main',$data);
    }

}
