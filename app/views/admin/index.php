<?php require APPROOT . '/views/inc/header_admin.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-pixgo text-white">
            Visão geral
          </div>
          <div class="card-body bg-light ">
            <div class="card-admin">
              <i class="fas fa-users"></i>
              <h4>Membros</h4>
              <a href="<?php echo URLROOT;?>/admin/membros">Detalhes</a>
            </div>
            <div class="card-admin">
              <i class="fas fa-copy"></i>
              <h4>Publicação</h4>
              <a href="<?php echo URLROOT;?>/admin/membros">Detalhes</a>
            </div>
            <div class="card-admin">
              <i class="fas fa-images"></i>
              <h4>Galeria</h4>
              <a href="<?php echo URLROOT;?>/admin/membros">Detalhes</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer_admin.php'; ?>