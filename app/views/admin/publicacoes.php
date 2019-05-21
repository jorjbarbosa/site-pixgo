<?php require APPROOT . '/views/inc/header_admin.php'; ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-pixgo text-white">
            Publicações Cadastradas
          </div>
          <div class="card-body bg-light ">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Título</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($data['publicacoes'] as $publicacao) :?>
                <tr>
                  <th scope="row"><?php echo $publicacao->id_publicacao;?></th>
                  <td><?php echo $publicacao->titulo;?></td>
                  <td>
                    <form action="<?php echo URLROOT.'/admin/excluir_publicacao/'.$membro->id_membro;?>" class="form-aux float-right ">
                      <input type="submit" class="btn btn-danger" value="Excluir">
                    </form>
                    <a href="<?php echo URLROOT.'/admin/editar_publicacao/'.$membro->id_membro;?>" class="btn btn-primary float-right mr-2">Editar</a>
                  </td>
                  
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
        <a href="<?php echo URLROOT;?>/admin/cadastrar_publicacao" class="btn btn-pixgo float-right mt-3">Cadastrar Publicação</a>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer_admin.php'; ?>