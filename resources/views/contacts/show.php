<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contacts | Show</title>
</head>
<body>
   
   <h1>Detalle del contacto</h1>

   <a href="./">Volver</a>
   <a href="./<?= $contact['id'] ?>/edit">Editar</a>
   
   <form action="./<?= $contact['id'] ?>/delete" method="POST">
      <button type="submit" href="./<?= $contact['id'] ?>/delete">Eliminar</button>
   </form>

   <p>ID: <strong><?= $contact['id'] ?></strong></p>
   <p>Nombre: <strong><?= $contact['name'] ?></strong></p>
   <p>Email: <strong><?= $contact['email'] ?></strong></p>
   <p>Teléfono: <strong><?= $contact['phone'] ?></strong></p>
</body>
</html>