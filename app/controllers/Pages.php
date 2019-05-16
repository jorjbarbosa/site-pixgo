<?php
  class Pages extends Controller {
    public function __construct(){
      $this->membroModel = $this->Model('Membro');
    }
    
    public function index(){
      $membros = $this->membroModel->getMembros();
      $data = [
        'title' => 'Pixgo',
        'membros' => $membros
      ];     
      $this->view('pages/index', $data);
    }
  }