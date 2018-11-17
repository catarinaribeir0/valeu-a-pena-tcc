<?php

class Upload extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url'));
  }

  public function index()
  {
    $this->load->view('upload_form', array('error' => ' ' ));
  }

  public function do_upload()
  {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 100;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;
    $config['file_name']            = '1';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('userfile'))
    {
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('upload_form', $error);
    }
    else
    {
      $data['Título_da_pagina'] = 'Alterar foto';
      $data['_view'] = 'upload/upload_success';
      $this->load->view('layouts/main',$data);
    }
  }

  function upload_form() {
    $data['Título_da_pagina'] = 'Alterar foto';
    $data['_view'] = 'upload/upload_form';
    $this->load->view('layouts/main',$data);
  }
}
?>