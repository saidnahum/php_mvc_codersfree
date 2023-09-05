<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact | Edit</title>
</head>
<body>
   <h1>Actualizar Contacto</h1>

   <form action="../<?= $contact['id'] ?>" method="POST">
      <div>
         <label for="name">Name</label>
         <input type="text" name="name" id="name" value="<?= $contact['name'] ?>">
      </div>

      <div>
         <label for="email">Email</label>
         <input type="email" name="email" id="email" value="<?= $contact['email'] ?>">
      </div>

      <div>
         <label for="phone">Phone</label>
         <input type="text" name="phone" id="phone" value="<?= $contact['phone'] ?>">
      </div>

      <button type="submit">Actualizar</button>
   </form>
</body>
</html>