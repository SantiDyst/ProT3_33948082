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
        <?php if(!empty($usuarios)): ?>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['perfil_id'] ?></td>
                    <td><?php echo $usuario['usuario'] ?></td>
                    <td><?php echo $usuario['email'] ?></td>
                    <td><?php echo $usuario['nombre'] ?></td>
                    <td><?php echo $usuario['apellido'] ?></td>
                    <td>
                     <a href="<?= base_url('usuario/edit/'.$usuario['id_usuario']); ?>" class="btn btn-warning btn-sm">Editar</a>
                     <a href="<?= base_url('panel/eliminar/'.$usuario['id_usuario']); ?>" class="btn btn-danger btn-sm">Borrar</a>
                    </td>
                    
                   
                
                </tr>
            <?php endforeach; ?>
            <?php else: ?>
            <tr>
                <td colspan="5">No hay usuarios logueados.</td>
            </tr>
        <?php endif; ?>
       
        </tbody>
        </table>
                        
        < <button type="submit" class="btn btn-danger"> </button>
        <a href="<?php echo base_url('registro'); ?>" class="btn btn-danger">Agregar</a>
        <br><span> <a href="<?php echo base_url('registro'); ?>"></a></span> 


                

    </div>

</div>
