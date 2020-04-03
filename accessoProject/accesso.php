<html>
<head>
  <link href="stile.css" rel="stylesheet" type = "text/css">
  <title>
    Pagina di accesso
  </title>
</head>
<body>
  <div id = formAccess>
    <form action ="phpAccess.php" method = "post">
    <p>
      <label> Nome utente: </label>
      <input type ="text" id = "user" name = "user"/>
    </p>
    <p>
      <label> Password: </label>
      <input type ="password" id = "pass" name = "pass"/>
    </p>
    <p>
      <input type ="submit" id = "btn" value = "Login"/>
    </p>
  </form>
</div>

</body>
</html>
