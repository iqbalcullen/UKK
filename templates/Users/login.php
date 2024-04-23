<?php $this->layout = 'CakeLte.login'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Daftar untuk penyesalan hidup </p>
      <div class="users form">
        <?= $this->Flash->render() ?>
        <?= $this->Form->create() ?>
        <fieldset>
            <?= $this->Form->control('username') ?>
            <?= $this->Form->control('password') ?>
        </fieldset>
    </div>
        <div class="row">
            <div class="col">
                <?= $this->Form->submit(__('Login'),["style"=>"width:155px;height:40px;"]); ?>
            </div>
          <!-- /.col -->
          <div class="col">
            <button class="btn btn-success btn-block" >
                <?= $this->Html->link(__('Daftar'), ['action' => 'add'],["style"=>"color:white;height:20px;"]) ?>
            </button>
          </div>
          <!-- /.col -->
        </div>

      <div class="social-auth-links text-center mb-3">
        <p>- Atau -</p>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-instagram mr-2"></i> Login Instagram
        </a>
        <a href="#" class="btn btn-block btn-dark">
          <i class="fab fa-google mr-2"></i> Login Google
        </a>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Login Facebook
        </a>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
