<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact | Create</title>
</head>
<body>
   <h1>Crear Contacto</h1>

   <form action="../contacts" method="POST">
      <div>
         <label for="name">Name</label>
         <input type="text" name="name" id="name">
      </div>

      <div>
         <label for="email">Email</label>
         <input type="email" name="email" id="email">
      </div>

      <div>
         <label for="phone">Phone</label>
         <input type="text" name="phone" id="phone">
      </div>

      <button type="submit">Crear</button>
   </form>
</body>
</html>