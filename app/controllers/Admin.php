<?php
  class Admin extends Controller {
    public function __construct(){
     $this->membroModel = $this->model('Membro');
     $this->publicacaoModel = $this->model('Publicacao');
    }
    
    public function index(){
      $data = [
        'title' => 'Dashboard'
      ];
     
      $this->view('admin/index', $data);
    }

    public function show($id) {
      $data = [];
      $this->view('galeria/index', $data);
    }

    public function membros() {
      $membros = $this->membroModel->getMembros();
      $data = [
        'title' => 'Membros',
        'membros' => $membros
      ];
      $this->view('admin/membros', $data);
    }
    public function editar_membro($id) {
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = [
          'nome' => trim($_POST['nome']),
          'area_pesquisa' => trim($_POST['area_pesquisa']),
          'facebook' => trim($_POST['facebook']),
          'linkedin' => trim($_POST['linkedin']),
          'github' => trim($_POST['github']),
          'id_membro' => $id
        ];
        if($this->membroModel->editarMembro($data)){
          echo 'ok';
        } else {
          die('erro');
        }
      } else {
        $membro = $this->membroModel->getMembroById($id);
        $data = [
          'title' => 'Editar Membro',
          'membro' => $membro
        ];
        $this->view('admin/editar-membro', $data);
      }
      
    }
    public function excluir_membro($id_membro) {
      $membro = $this->membroModel->getMembroById($id_membro);
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($this->membroModel->excluirMembro($id_membro)){
          if($this->membroModel->excluirFoto($membro->foto)){
            echo 'tudo ok';
          } else {
            die('nada ok');
          }
        }
      }
    }
    public function publicacoes() {
      $publicacoes = $this->publicacaoModel->getArtigos();
      $data = [
        'title' => 'Publicações',
        'publicacoes' => $publicacoes
      ];
      $this->view('admin/publicacoes', $data);
    }

    public function cadastrar_membro() {
      $data = [
        'title' => 'Cadastrar Membro'
      ];
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ext = strtolower(substr($_FILES['foto']['name'], -4));
        $novo_nome = md5(time()) . $ext;
        $data = [
          'nome' => trim($_POST['nome']),
          'area_pesquisa' => trim($_POST['area_pesquisa']),
          'facebook' => trim($_POST['facebook']),
          'linkedin' => trim($_POST['linkedin']),
          'github' => trim($_POST['github']),
          'foto' => $novo_nome
        ];
        $caminho = $_SERVER['DOCUMENT_ROOT'].'/site-pixgo/public/img/membros/';
        if($this->membroModel->cadastrarMembro($data) && move_uploaded_file($_FILES['foto']['tmp_name'], $caminho.$novo_nome)){
          echo 'ok';
        } else {
          'erro';
        }
      }
      $this->view('admin/cadastrar-membro', $data);
    }

    public function cadastrar_publicacao() {
      $data = [
        'title' => 'Cadastrar Publicação'
      ];
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = [
          'titulo' => trim($_POST['titulo']),
          'autores' => trim($_POST['autores']),
          'conferencia' => trim($_POST['conferencia']),
          'ano' => trim($_POST['ano']),
          'url' => trim($_POST['url']),
          'tipo_publicacao' => trim($_POST['tipo'])
        ];
        if($this->publicacaoModel->cadastrarPublicacao($data)) {
          echo 'ok';
        } else {
          echo 'erro';
        }
      }
      $this->view('admin/cadastrar-publicacao', $data);
    }
    public function excluir_publicacao($id_publicacao) {
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($this->publicacaoModel->excluirPublicacao($id_publicacao)){
            echo 'tudo ok';
        } else {
          die('nada ok');
        }
      }
    }

  }