<?php $validation = \Config\Services::validation(); ?>

<form method="post" action="<?php echo base_url('/enviar-form'); ?>"> 
<?= csrf_field(); ?>
<?php if (!empty(session()->getFlashdata('fail'))): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
<?php endif ?>
<?php if (!empty(session()->getFlashdata('success'))): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
<?php endif ?>

<link href= <?php echo base_url('assets/css/bootstrap.min.css');?>  rel="stylesheet">

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4">
        <h2 class="card-title text-center"></h2>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="nombre" id="nombre" required

            value="<?=$dato['nombre'] ?>">

            <?php if ($validation->getError('nombre')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('nombre'); ?></div>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input name="apellido" type="text" class="form-control" placeholder="apellido" id="apellido" required

            value="<?=$dato['apellido'] ?>">
            
            <?php if ($validation->getError('apellido')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('apellido'); ?></div>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" placeholder="email" id="email" required
            value="<?=$dato['email'] ?>">

            <?php if ($validation->getError('email')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('email'); ?></div>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input name="usuario" type="text" class="form-control" placeholder="usuario" id="usuario" required
            value="<?=$dato['usuario'] ?>">

            <?php if ($validation->getError('usuario')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('usuario'); ?></div>
            <?php endif ?>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" placeholder="contraseña" id="password" required
            value="<?=$dato['pass'] ?>">

            <?php if ($validation->getError('pass')): ?>
                <div class='alert alert-danger mt-2'><?= $validation->getError('pass'); ?></div>
            <?php endif ?>
        </div>
        <input type="submit" value="guardar" class="btn btn-dark btn-lg w-100 mb-3" />
        <input type="reset" value="cancelar" class="btn btn-dark btn-lg w-100 mb-3" />
        <div class="text-center">
            <small>VOLVER <a class="fw-bold" href="<?php echo base_url('/panel'); ?>">Iniciar Sesión</a></small>
        </div>
    </div>
</div>
</form>