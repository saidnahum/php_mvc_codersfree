<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contactos</title>
</head>

<body>
   <h1>Listado de Contactos</h1>
   <a href="./create">
      Crear Contacto
   </a>
   <ul>
      <?php foreach ($contacts as $contact) : ?>
         <li>
            <a href="<?= $_SERVER['REQUEST_URI'] ?><?= $contact['id'] ?>">
               <?= $contact['name'] ?>
            </a>
         </li>
      <?php endforeach; ?>
   </ul>

</body>

</html>