<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Каталог</title>
  <style>
    table{
      border-collapse: collapse;
      border: 1px solid black;
    }
    tr, td, th{
      padding: 7px 10px;
      border: 1px solid black;
    }
  </style>
 </head>
 <body>
  <h1>Список работ</h1>
  <table>
     <tr>
      <th>Название</th>
      <th>Тип</th>
      <th>Описание</th>
    </tr>
       <?php foreach ($works as $work) : ?>
        <tr> 
          <td>
            <?php echo $work['work_name'] ?>
          </td>
          <td>
            <?php echo $work['work_type'] ?>
          </td>
          <td>
            <?php echo $work['work_desc'] ?>
          </td>
        </tr>
      <?php endforeach; ?> 
  </table>
 </body>
</html>