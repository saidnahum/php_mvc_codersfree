<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <h1>Contactos</h1>
   <?php foreach ($data as $user) : ?>
      <p>Nombre: <?= $user['name'] ?></p>
      <p>Correo: <?= $user['email'] ?></p>
      <br>
   <?php endforeach; ?>
</body>

</html>