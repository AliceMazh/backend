<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drawer</title>
</head>
<body>
    <?php
    require_once 'drawer.php';
    $id = $_GET["id"];
    if($id==1){
        echo circle();
    }
    if($id==2){
        echo star();
    }
    ?>
</body>
</html>