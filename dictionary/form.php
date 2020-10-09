<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
  </head>
  <body>
    <h2 class = "send1">Отправка запроса</h2>   
    <form class = "send2" action="file_put.php" method="POST">
        <dt>Name</dt>
          <dd><input type="text" name="name"></dd>
        <dt>Note</dt>
          <dd>
            <textarea rows="5" cols="20" name="note"></textarea>
          </dd>
          <dd><input type="submit"></dd>
    </form>
    <a href="/file_get.php">Read</a>
    </body>
</html>
