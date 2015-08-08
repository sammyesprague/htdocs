<!DOCTYPE html>
<html>

<head>
  <title>Process PHP</title>
</head>

<body>
  <?php
  // The global $_POST variable allows you to access the data sent with the POST method
  // To access the data sent with the GET method, you can use $_GET
  $username = htmlspecialchars($_POST['username']);
  $password  = htmlspecialchars($_POST['password']);
  echo $username + $password;
  echo "Hello World";
  ?>
</body>

</html>
