<html>
<head>
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="/admin/update/<?= $usuario['id_usuarios'] ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?= $usuario['nombre'] ?>" required>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $usuario['email'] ?>" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>