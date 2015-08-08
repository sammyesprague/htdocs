<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>
  <p>
    Please Login Below
  </p>
  <form action="https://www.stowelllims.comprocess.php" method="POST"> <!-- URL of the process.php page-->
    Username: <input type="text" name="username"/>
    Password: <input type="password" name="password"/>
    <input type="submit" name="login" value="Login"/>
  </form>

<!--
<form method="post" enctype="multipart/form-data">
  <input type="file" name="myFile">
  <button>Send the file</button>
</form>
-->

</body>

</html>
