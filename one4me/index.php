<html>
<head>
<body>
    <h1>
    <?php 
    
    $name = 'me';
  
    if ($_GET['name'] != '') {
    $name = $_GET['name'];
    }

    echo "One for $name, one for me";

    ?>

        </h1>
    </body>
    </head>
</html>
