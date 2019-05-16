<?php
  class Pages extends Controller {
    public function __construct(){
      $this->membroModel = $this->Model('Membro');
      $this->publicacaoModel = $this->Model('Publicacao');
    }
    
    public function index(){
      $membros = $this->membroModel->getMembros();
      $artigos = $this->publicacaoModel->getArtigos();
      $resumos = $this->publicacaoModel->getResumos();
      $data = [
        'title' => 'Pixgo',
        'membros' => $membros,
        'artigos' => $artigos,
        'resumos' => $resumos
      ];     
      $this->view('pages/index', $data);
    }
  }