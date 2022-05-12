<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('favicon/favicon.ico')); ?>">
    <title>Middleware page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><strong>Sailor Framework</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo e(url('/')); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/test')); ?>">Test Auth</a>
              </li>
            </ul>
            <?php if(isAuthenticated()): ?>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo e(url('/')); ?>">Welcome, <?php echo e(user()->name); ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/logout')); ?>">Logout</a>
              </li>
            </ul>
            <?php else: ?>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo e(url('/')); ?>">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(url('/logout')); ?>">Logout</a>
              </li>
            </ul>
            <?php endif; ?>
          </div>
        </div>
      </nav>

    <?php if(has('auth')): ?>
      <div class="alert alert-danger p-2 mt-4"><?php echo e(flash('auth')); ?></div>
    <?php endif; ?>

<div class="container my-3">
    <div class="card mx-auto col-md-8">
        <div class="card-header">
            <div class="card-title"><h5>Test Dashboard</h5></div>
        </div>
        <div class="card-body">
            <div class="alert alert-success"><h5>your authored</h5></div>
        </div>
    </div>
</div>
    
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\framework\resources\views/test.blade.php ENDPATH**/ ?>