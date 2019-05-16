<?php require APPROOT . '/views/inc/header.php'; ?>
<section id="inicio">
    <div class="container">
      <div class="center">
        <img src="<?php echo URLROOT;?>/img/logo.webp"  alt=""> 
        <h3>Laboratório de Pesquisa em Computação | (Lab Comp II)</h3>
      </div>
    </div>
</section>
<section id="quem-somos">
  <div class="container">
    <h1 class="title">QUEM SOMOS</h1>
    <div class="row">
      <div class="col-md-6">
        <p class="description-gray text-justify">O PixGo! é um laboratório atuante em pesquisas e desenvolvimento de softwares, com foco em áreas de tecnologias emergentes. Aliando sua experiência acumulada na indústria de software e infraestrutura tecnológica com sua capacidade produtiva, tem como premissa auxiliar alunos e professores à atingir seus objetivos. Sempre investindo em tecnologia de ponta e alunos de altíssimo nível, neste sentido, o PixGo! oferece a combinação ideal, entre estratégias para o melhor aprendizado e desenvolvimento de soluções.</p>
        <p class="description-gray text-justify">As soluções desenvolvidas abrangem todos os atuantes do laboratório, afim de aplicar melhores soluções a determinados problemas que ocorrem nos mais diversas áreas de aplicação e desenvolvimento de software. A PixGo! desenvolve soluções por meio de uma metodologia testada e implementada nos mais diversos cenários, utilizando fortes componentes de avaliação de contexto, análise de alternativas e proposições de soluções que abrangem todo o mercado. PixGo! evoluiu junto ao mercado de tecnologia da informação, sempre direcionado a oferecer a seus alunos aprendizados cada vez mais flexíveis, capazes de gerar agilidade, eficiência e ganho de experiência.</p>
        <a href="#" class="btn btn-lg btn-pixgo">
          Projetos de Pesquisa
        </a>
      </div>
      <div class="col-md-6">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo URLROOT; ?>/img/slides/slide1.webp" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo URLROOT; ?>/img/slides/slide2.webp" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo URLROOT; ?>/img/slides/slide4.webp" alt="Third slide">
          </div>
        </div>
        <a data-scroll-ignore class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a data-scroll-ignore class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
    </div>
  </div>
</section>
<section id="pesquisa" class="bg-gray">
  <div class="container">
    <h1 class="title">ÁREAS DE PESQUISA</h1>
    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="card-pesquisa text-center">
          <div class="icone-pesquisa">
            <img src="<?php echo URLROOT;?>/img/iot.png" alt="">
          </div>
          <h4>Internet das Coisas</h4>
          <p class="description-gray">Man greater image shall land air winged replenish whose winged great fifth fruitful Set days sealand over great</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card-pesquisa text-center">
          <div class="icone-pesquisa">
            <img src="<?php echo URLROOT;?>/img/machine.png" alt="">
          </div>
          <h4>Machine Learning</h4>
          <p class="description-gray">Man greater image shall land air winged replenish whose winged great fifth fruitful Set days sealand over great</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card-pesquisa text-center">
          <div class="icone-pesquisa">
            <img src="<?php echo URLROOT;?>/img/industria.png" alt="">
          </div>
          <h4>Industria 4.0</h4>
          <p class="description-gray">Man greater image shall land air winged replenish whose winged great fifth fruitful Set days sealand over great</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card-pesquisa text-center">
          <div class="icone-pesquisa">
            <img src="<?php echo URLROOT;?>/img/healthcare.png" alt="">
          </div>
          <h4>Healthcare</h4>
          <p class="description-gray">Man greater image shall land air winged replenish whose winged great fifth fruitful Set days sealand over great</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card-pesquisa text-center">
          <div class="icone-pesquisa">
            <img src="<?php echo URLROOT;?>/img/robotic.png" alt="">
          </div>
          <h4>Automação e Robótica</h4>
          <p class="description-gray">Man greater image shall land air winged replenish whose winged great fifth fruitful Set days sealand over great</p>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card-pesquisa text-center">
          <div class="icone-pesquisa">
            <img src="<?php echo URLROOT;?>/img/educacao.png" alt="">
          </div>
          <h4>Educação 4.0</h4>
          <p class="description-gray">Man greater image shall land air winged replenish whose winged great fifth fruitful Set days sealand over great</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="publicacoes">
  <div class="container">
    <h1 class="title">PUBLICAÇÕES</h1>
    <ul class="nav justify-content-center nav-tabs bg-pixgo" id="myTab" role="tablist">
      <li class="nav-item">
        <a data-scroll-ignore class="nav-link active" id="artigos-tab" data-toggle="tab" href="#artigos" role="tab" aria-controls="artigos" aria-selected="true">Artigos</a>
      </li>
      <li class="nav-item">
        <a data-scroll-ignore class="nav-link" id="resumos-tab" data-toggle="tab" href="#resumos" role="tab" aria-controls="artigos" aria-selected="false">Resumos</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="artigos" role="tabpanel" aria-labelledby="artigos-tab">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Título do Artigo</th>
            <th scope="col">Autores</th>
            <th scope="col">Conferência</th>
            <th scope="col">Ano</th>
            <th scope="col">Acessar</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($data['artigos'] as $artigo):?>
          <tr>
            <td><?php echo $artigo->titulo;?></td>
            <td><?php echo $artigo->autores;?></td>
            <td><?php echo $artigo->conferencia;?></td>
            <td><?php echo $artigo->ano;?></td>
            <td><a href="<?php echo $artigo->url;?>" class="btn btn-pixgo">Acessar</a></td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
      </div>
      <div class="tab-pane fade" id="resumos" role="tabpanel" aria-labelledby="resumos-tab">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Título do Resumo</th>
              <th scope="col">Autores</th>
              <th scope="col">Conferência</th>
              <th scope="col">Ano</th>
              <th scope="col">Acessar</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($data['resumos'] as $resumo):?>
            <tr>
              <td><?php echo $resumo->titulo;?></td>
              <td><?php echo $resumo->autores;?></td>
              <td><?php echo $resumo->conferencia;?></td>
              <td><?php echo $resumo->ano;?></td>
              <td><a href="<?php echo $resumo->url;?>" class="btn btn-pixgo">Acessar</a></td>
            </tr>
          <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!-- <section id="eventos" class="bg-gray">
  <div class="container">
    <h1 class="title">EVENTOS</h1>
  </div>
</section> -->
<section id="equipe" class="bg-gray">
  <div class="container text-center">
    <h1 class="title">EQUIPE</h1>
    <div class="membros owl-carousel">
    <?php foreach($data['membros'] as $membro): ?>
      <div class="member-card text-center">
        <div class="img-membro">
          <img src="<?php echo URLROOT.'/img/membros/'.$membro->foto;?>">
        </div>
        <div class="info">
          <h4><?php echo $membro->nome;?></h4>
          <p><?php echo $membro->area_pesquisa;?></p>
        </div>
        <div class="socials">
          <a href="<?php echo $membro->facebook;?>"><i class="fab fa-facebook-square"></i></a>
          <a href="<?php echo $membro->linkedin;?>"><i class="fab fa-linkedin"></i></a>
          <a href="<?php echo $membro->github;?>"><i class="fab fa-github"></i></a>
        </div>
      </div>
    <?php endforeach;?>
    </div>  
  </div>
</section>   
<!-- <section id="parceiros" class="bg-gray">
  <div class="container">
    <h1 class="title">NOSSOS PARCEIROS</h1>
    
  </div>
</section> -->
<section id="galeria">
  <div class="container">
    <h1 class="title">GALERIA DE FOTOS</h1>
  </div>
</section>  
<section id="contato">
  <div class="container">
   <h1 class="title">ENTRE EM CONTATO</h1>
    <div class="row">
      <div class="col-md-6">
        <p>Universidade Federal do Amazonas - UFAM </p>
        <p>Instituto de Ciências Exatas e Tecnologia em Itacoatiara - ICET</p>
        <p>Laboratório 303</p>
        <p>Rua Nossa Senhora do Rosário, 3863, Tiradentes.  Itacoatiara, AM - Brasil.</p>
        <p>CEP: 69103-128</p>
        <p>E-mail: vandermi@ufam.edu.br</p>
        <p>Telefone: (92) 99254-7005 - (92) 8125-2248</p>
        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1880.1115305438514!2d-58.4306586788348!3d-3.142806723696285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x926f544670d3fc23%3A0x8bde91222107db8d!2sUniversidade+Federal+do+Amazonas+-+Instituto+de+Ci%C3%AAncias+Exatas+e+Tecnologia!5e0!3m2!1spt-BR!2sbr!4v1557758907804!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>
      <div class="col-md-6">
        <form action="#" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="seu@email.com">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="assunto" placeholder="Assunto">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="msg" id="" cols="30" rows="10" placeholder="Sua Mensagem"></textarea>
          </div>
          <input type="submit" class="btn btn-pixgo float-right" value="Enviar">
        </form>
      </div>
    </div>
  </div>
</section>
<?php require APPROOT . '/views/inc/footer.php'; ?>
