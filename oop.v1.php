<!doctype html>
<html lang="ru">
<html>
  <head>
    <title>
    </title>
  </head>
  <body>
<?php ## Пример класса
## Один файл - один класс
class MathComplex ## Новый класс с именем
{
  
  public ## Модификатор
  $re, ## Член класса = свойство = переменная
  $im; ## Член класса = свойство = переменная
  
  function add($re, $im){## Метод = Функция
    $this ## Переменная
    ->## Оператор
    re +=$re;
    $this ## Переменная
    ->## Оператор
  im +=$im;
	  
## Статической метод(функция)
public static function getSizes(){ 
return array('small','medium','large');
}
}
}

$obj ## Экземпляр класса (Копия)
= new MathComplex; 
## Свойства объекта $obj
$obj->re = 6;   ## Член объекта = свойство = переменная
$obj->im = 101; ## Член объекта = свойство = переменная

$sizes = Entree::getSizes(); ## Вызов статического методо(функции)
?>
  </body>
</html>
