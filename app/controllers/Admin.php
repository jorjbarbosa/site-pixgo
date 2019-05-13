<?php
  class Galeria extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [];
     
      $this->view('pages/index', $data);
    }
    public function show($id) {
      $data = [];
      $this->view('galeria/index');
    }
  }