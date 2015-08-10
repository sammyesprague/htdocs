<!DOCTYPE html>
<html>

<head>
  <title>Process PHP</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
  <?php
  // define variables and set to empty values
  $username = $password = "";

  echo $_SERVER["REQUEST_METHOD"];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

</body>

</html>
