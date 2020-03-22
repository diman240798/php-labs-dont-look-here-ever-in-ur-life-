
<?php
  if (file_exists('library.xml')) {
    //преобразует правильно сформированный xml-документ,   в объект класса SimpleXMLElement
    $xml = simplexml_load_file('library.xml');
?>

<html>
<head>
    <title>Библиотека</title>
    <style>
    table{
      border-collapse: collapse;
      background-color:#F5DEB3;
      color:#730000;
      text-align: center;
      width: 40%;
    }
    </style>
</head>
<body>
<table width="100%" border="1" class="lib">
  <tr>
    <th colspan="4">Библиотека</th>
  </tr>
  <tr>
    <th>Название</th>
    <th>Автор</th>
    <th>Цена</th>
    <th>Рейтинг читателей</th>
  </tr>

<?php
  foreach($xml->book as $book){
?>

<tr>
    <td><b><?php echo $book->title; ?></b></td>
    <td><?php echo $book->author; ?></td>
    <td><?php echo $book->price . " руб."; ?></td>
    <td><i><?php
    if($book->rating==1)
    {
      $book->rating="Ужастно";
    }
    elseif($book->rating==2)
    {
        $book->rating="Плохо";
    }
    elseif($book->rating==3)
    {
        $book->rating="Так себе";
    }
    elseif($book->rating==4)
    {
        $book->rating="Хорошо";
    }
    else
    {
        $book->rating="Прекрасно";
    }
     echo $book->rating; ?></i></td>
</tr>

<?php
}
?>
</table>
</body>
</html>

<?php
  }
  else {
    exit('Не удалось открыть файл library.xml.');
  }
?>
