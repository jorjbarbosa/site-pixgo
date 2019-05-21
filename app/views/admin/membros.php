<?php require APPROOT . '/views/inc/header_admin.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-pixgo text-white">
            Membros Cadastrados
          </div>
          <div class="card-body bg-light ">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Área de Pesquisa</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data['membros'] as $membro) :?>
                <tr>
                  <th scope="row"><?php echo $membro->id_membro;?></th>
                  <td><?php echo $membro->nome;?></td>
                  <td><?php echo $membro->area_pesquisa;?></td>
                  <td>
                    
                    <a href="#" class="btn btn-danger float-right">Excluir</a>
                    <a href="#" class="btn btn-primary float-right">Editar</a>
                  </td>
                  
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer_admin.php'; ?>