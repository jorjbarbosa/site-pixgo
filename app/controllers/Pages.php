<?php
  class Pages extends Controller {
    public function __construct(){
      $this->membroModel = $this->Model('Membro');
    }
    
    public function index(){
      // $this->membroModel->getMembros();
      $data = [
        'title' => 'Pixgo',
      ];
     
      $this->view('pages/index', $data);
    }
  }