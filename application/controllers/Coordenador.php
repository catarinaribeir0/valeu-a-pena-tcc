<?php

class Coordenador extends CI_Controller {

    function __construct() {
        parent::__construct();
         if ($this->session->userdata('logado') != 'coordenador') {
              redirect('Login');
         }
        $this->load->model('Coordenador_model');
    }

    function index() {
        $data['titulo_da_pagina'] = '';
        $data['_view'] = 'coordenador/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Listing of coordenador
     */

    function lista_coord() {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('coordenador/index?');
        $config['total_rows'] = $this->Coordenador_model->get_all_coordenador_count();
        $this->pagination->initialize($config);
        $data['coordenador'] = $this->Coordenador_model->get_all_coordenador($params);
        $data['titulo_da_pagina'] = '';
        $data['_view'] = 'coordenador/lista_coord';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new coordenador
     */

    function add() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[40]');
        $this->form_validation->set_rules('cpf', 'Cpf', 'required|max_length[14]');
        $this->form_validation->set_rules('email', 'Email', 'required|max_length[255]|valid_email');

        if ($this->form_validation->run()) {
            $params = array(
                'nome' => $this->input->post('nome'),
                'cpf' => $this->input->post('cpf'),
                'email' => $this->input->post('email'),
            );

            $coordenador_id = $this->Coordenador_model->add_coordenador($params);
            $this->session->set_flashdata('response',"Inserido com sucesso");
            redirect('coordenador/lista_coord');
        } else {
            $data['titulo_da_pagina'] = 'Incluir coordenador';
            $data['_view'] = 'coordenador/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a coordenador
     */

    function alterar_senha() {


        if ($_SERVER['REQUEST_METHOD'] === 'POST') :

            $this->form_validation->set_rules('senha1', 'Senha', 'trim|required|min_length[8]|max_length[10]');
            $this->form_validation->set_rules('senha2', 'Segunda Senha', 'trim|required|min_length[8]|max_length[10]|matches[senha1]');

            if ($this->form_validation->run() == FALSE) {
                $data['titulo_da_pagina'] = 'Alterar Senha';
                $data['_view'] = 'coordenador/edit_senha';
                $this->load->view('layouts/main', $data);
            } else {

                $data['senha'] = $this->input->post('senha1');
                $data['id'] = $this->session->userdata('id');

                $data = $this->security->xss_clean($data);
                if (!$this->security->xss_clean($data)) {
                    $data['titulo_da_pagina'] = 'Alterar Senha';
                    $data['_view'] = 'coordenador/edit_senha';
                    $this->load->view('layouts/main', $data);
                } else {

                    $this->Coordenador_model->update_coordenador($this->session->userdata('id'), $params);
                    redirect('coordenador/index');
                }
            }
        else :
                $data['titulo_da_pagina'] = 'Alterar Senha';
                $data['_view'] = 'coordenador/edit_senha';
                $this->load->view('layouts/main', $data);
        endif;

    }

    /*
     * Deleting coordenador
     */

    function remove($id) {
        $coordenador = $this->Coordenador_model->get_coordenador($id);

        // check if the coordenador exists before trying to delete it
        if (isset($coordenador['id'])) {
            $this->Coordenador_model->delete_coordenador($id);
            $this->session->set_flashdata('response',"Removido com sucesso");
            redirect('coordenador/lista_coord');
        } else
            show_error('The coordenador you are trying to delete does not exist.');
    }

    function edit() {
        // check if the coordenador exists before trying to edit it

        if ($this->session->userdata('logado') == 'coordenador') {
            $data['coordenador'] = $this->Coordenador_model->get_coordenador($this->session->userdata('id'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[40]');
            $this->form_validation->set_rules('cpf', 'Cpf', 'required|max_length[14]');
            $this->form_validation->set_rules('email', 'Email', 'required|max_length[255]|valid_email');

            if ($this->form_validation->run()) {
                $params = array(
                    'nome' => $this->input->post('nome'),
                    'cpf' => $this->input->post('cpf'),
                    'email' => $this->input->post('email'),
                );

                $this->Coordenador_model->update_coordenador($this->session->userdata('id'), $params);
                
                $this->session->set_flashdata('response',"Salvo com sucesso");
                redirect('coordenador/index');
            } else {
                $this->session->set_flashdata('response',"Não foi possivel salvar");
                $data['titulo_da_pagina'] = 'Editar coordenador';
                $data['_view'] = 'coordenador/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The coordenador you are trying to edit does not exist.');
    }

}
