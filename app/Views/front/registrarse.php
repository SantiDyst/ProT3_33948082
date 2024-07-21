<h1 style="text-align:center"> registrarse </h1>

<div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4">
            <h2 class="card-title text-center"></h2>
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirmarPassword" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirmarPassword" required>
                </div>
                <button type="submit" class="btn btn-primary w-100" href= "<?php echo base_url('/registro'); ?>">Registrarse</button>
            </form>
        </div>
    </div>