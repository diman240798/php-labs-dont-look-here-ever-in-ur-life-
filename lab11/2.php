<?php
  $newXML = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\" ?><library/>");//Объявляем тег внутри которого будут другие теги
  $newXML->addChild('book','');
  $newXML->book->addAttribute('price', '300 руб.');
  $newXML->book->addChild('author','Р.А.Уайк');
  $newXML->book->title="PHP. Справочник";
  $newXML->asXML("book.xml");//Сохраняем в xml файле
?>
