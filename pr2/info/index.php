<html lang="ru">
<head>
    <title>Информационно-административную веб-страница</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <?php
    require_once 'info.php';
    $output = null;
    $result_value = null;
    $command = htmlspecialchars($_GET["command"]);//преобразует все символы, которые будут введены
    exec($command, $output);   
    printResult($output);
    ?>
</body>
</html>