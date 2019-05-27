<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pixgo - Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT;?>/css/login.css">
</head>
<body>
  <div class="container  ">
      <div class="row min-vh-100 ">
        <div class="col-md-4 mx-auto align-self-center">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center">Login</h2>
            <form action="<?php echo URLROOT; ?>/pages/login" method="post">
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" name="email">
                <div class="invalid-feedback">
                  <?php echo $data['email_err']; ?>
                </div>
              </div>
              <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control <?php echo (!empty($data['senha_err'])) ? 'is-invalid' : ''; ?>" name="senha">
                <div class="invalid-feedback">
                  <?php echo $data['senha_err']; ?>
                </div>
              </div>
              <input type="submit" class="btn btn-primary btn-block" value="Entrar">
            </form>
          </div>
        </div>
        </div>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>