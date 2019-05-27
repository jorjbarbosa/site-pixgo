<?php
  class Pages extends Controller {
    public function __construct(){
      $this->membroModel = $this->Model('Membro');
      $this->publicacaoModel = $this->Model('Publicacao');
      $this->galeriaModel = $this->Model('Galeria');
      $this->usuarioModel = $this->Model('Usuario');
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
    public function login() {
      if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = [
          'email' => trim($_POST['email']),
          'senha' => trim($_POST['senha']),
          'email_err' => '',
          'senha_err' => ''
        ];
        //Validar o Email
        if(empty($data['email'])){
          $data['email_err'] = 'Informe o endereço de e-mail';
        }
        if(empty($data['senha'])){
          $data['senha_err'] = 'Informe a senha';
        }
        //Procurar pelo usuario
        if($this->usuarioModel->findUserByEmail($data['email'])){

        } else {
          $data['email_err'] = 'Usuário não encontrado';
        }
        //Verificar se existe algum erro
        if(empty($data['email_err']) && empty($data['senha_err'])){
          //passou
          $usuario = $this->usuarioModel->login($data['email'], $data['senha']);
          if($usuario) {
            $this->createAdminSession($usuario);
          } else {
            $data['senha_err'] = 'Senha inválida';
            $this->view('pages/login', $data);
          }
        } else {
          $this->view('pages/login', $data);
        }
      } else {
        $data = [
          'email' => '',
          'senha' => '',
          'email_err' => '',
          'senha_err' => ''
        ];
        $this->view('pages/login', $data);
      }
      
    }
    public function createAdminSession($usuario){
      $_SESSION['id_usuario'] = $usuario->id;
      $_SESSION['email_usuario'] = $usuario->email;
      $_SESSION['nome_usuario'] = $usuario->name;
      $_SESSION['tipo_usuario'] = $usuario->tipo_usuario;
      redirect('admin');
    }
    public function sair(){
      unset($_SESSION['id_usuario']);
      unset($_SESSION['email_usuario']);
      unset($_SESSION['nome_usuario']);
      unset($_SESSION['tipo_usuario']);
      session_destroy();
      redirect('pages/login');
    }
  }