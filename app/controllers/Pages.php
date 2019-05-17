<?php
  class Pages extends Controller {
    public function __construct(){
      $this->membroModel = $this->Model('Membro');
      $this->publicacaoModel = $this->Model('Publicacao');
      $this->galeriaModel = $this->Model('Galeria');
    }
    
    public function index(){
      $membros = $this->membroModel->getMembros();
      $artigos = $this->publicacaoModel->getArtigos();
      $resumos = $this->publicacaoModel->getResumos();
      $galeria = $this->galeriaModel->getGalerias();
      $thumbnails = [];
      foreach ($galeria as $g) {
        
      }
      $data = [
        'title' => 'Pixgo',
        'membros' => $membros,
        'artigos' => $artigos,
        'resumos' => $resumos,
        'galeria' => $galeria
      ];     
      $this->view('pages/index', $data);
    }
  }