<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
  <!--
  <div class="loginpic">
    <img/>
  </div>
  -->
  <form action="process.php" method="POST">
    <fieldset>
      <legend> Enter your login information below </legend>
      <label for="Username"> Username: </label> <br>
      <input type="text" name="username" id="Username"/> <br>
      <label for="Password"> Password: </label> <br>
      <input type="password" name="password" id="Password"/> <br><br>
      <input type="submit" name="login" value="Login"/>
    </fieldset>
  </form>

<!--
<form method="post" enctype="multipart/form-data">
  <input type="file" name="myFile">
  <button>Send the file</button>
</form>
-->

</body>

</html>
