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
      $galeria = $this->galeriaModel->getGalerias();
      $thumbnails = [];
      foreach ($galeria as $g) {
        
      }
      $data = [
        'title' => 'Pixgo',
        'membros' => $membros,
        'artigos' => $artigos,
        'galeria' => $galeria
      ];     
      $this->view('pages/index', $data);
    }
  }