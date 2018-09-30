<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        
        $data['Título_da_pagina'] = 'Login';
        $data['_view'] = 'login';
        $this->load->view('layouts/main',$data);
    }

    public function validar() {

        $this->form_validation->set_rules('cpf', 'cpf', 'required|valid_cpf');
        $this->form_validation->set_rules('senha', 'senha', 'required');
        $this->form_validation->set_rules('tipo_usuario', 'Tipo do Usuário', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            
            $cpf = $this->input->post('cpf');
            $senha = $this->input->post('senha');
            $tipo_usuario = $this->input->post('tipo_usuario');
            
            $data = array("cpf"=>"$cpf", "senha"=>"$senha");
            
            switch ($tipo_usuario) {
                case "aluno":
                    $this->load->model("Aluno_model");
                    $dados = $this->Aluno_model->login($data);
                    if (empty($dados)){
                        $this->index();  
                    }
                    else{
                        
                        $this->session->set_userdata($dados);
                        $this->session->set_userdata('logado', 'aluno');
                        redirect("Aluno");
                        
                    }
                    break;
                case "coordenador":
                    $this->load->model("Coordenador_model");
                    $dados = $this->Coordenador_model->login($data);
                    if (empty($dados)){
                        $this->index();  
                    }
                    else{
                        
                        $this->session->set_userdata($dados);
                        $this->session->set_userdata('logado', 'coordenador');
                        redirect("Coordenador/home");
                        
                    }
                                       
                   
                    break;
            }
            
          
        }
    }

}
