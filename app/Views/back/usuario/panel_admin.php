<div class="container">
  <div class="card">  

  <div class="card-header">
        <h1>Panel De Control Admin</h1>
    </div>
   <div class="card-body">

        <table class="table"> 
            <h2>Usuarios Logueados</h2>
            <thead>
                <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Apellido</th>
                </tr>
            </thead>
        <tbody>
            <!--  ?php if(!empty($usuarios)): ?> -->
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['nombre'] ?></td>
                    <td><?php echo $usuario['apellido'] ?></td>
                    <td><?php echo $usuario['usuario'] ?></td>
                    <td><?php echo $usuario['email'] ?></td>
                    <td><?php echo $usuario['perfil_id'] ?></td>
                    
                </tr>
            <?php endforeach; ?>
       
        </tbody>
        </table>
    </div>

</div>
