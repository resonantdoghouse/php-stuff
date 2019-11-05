<html>
  <head>
    <title>PHP Form with $_GET</title>
  </head>
  <body>
    <form method="get">
        <input type="text" name="name" placeholder="your name" />
        <input type="email" name="email" placeholder="your email"/>
        <input type="submit">
    </form>
     <?php
         $name = '';
         $email = '';

         if (!empty($name)) {
             $name = $_GET['name'];
             echo "<p>Name: {$name}</p>";
         }

         if (!empty($email)) {
             $email = $_GET['email'];
             echo "<p>Email: {$email}</p>";
         }
     ?>
  </body>
</html>