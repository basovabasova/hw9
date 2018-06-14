<?php 

$products = [
    ['name' => 'гарри поттер', 'category' => 'Книги', 'discount' => 5, 'price' => 300],
    ['name' => 'самсунг галакси', 'category' => 'смартфоны', 'discount' => 5, 'price' => 10000],
    ['name' => 'шкода', 'category' => 'авто', 'discount' => 5, 'price' => 400000]
];

/*foreach ($products as $product) {
    echo $product['name'] . ' стоит ';
        if ($product['category'] != 'смартфоны') {
            echo $product['price'] . ' рублей' . '<br>';
        } else {
            echo round($product['price'] - $product['price']*0.1) . '<br>';
        }
  
}*/

/*function getPrice($price, $discount, $category) {
    $phoneDiscount = ($category == 'смартфоны') ? 10 : 0;
    $discount = min($discount, $phoneDiscount);

    if ($discount) {
        return round($price - ($price * $discount / 100));
    } else {
      return $price;
    }
}

foreach ($products as $product) {
    echo $product['name'] . ' стоит ' . getPrice($product['price'], $product['discount'], $product['category']) . '<br>';
}
*/

/*class SimpleClass {
  //пустой класс
}
*/
/*
class SimpleClass {
    public $simpleProperty; //св-во без значения . Публичное свойство. Раньше был var.
    public $simplePropertyWithValue = 200; // св-во со значением по умолчанию
    public function simpleMethod() {
      //return 'результат выполнения метода';//тело метода
      $this -> simpleProperty = 300;// меняем значение свойства. $this указывает на конкретный объект, в рамках которого вызывается.
    }
    public function anotherMethod($a, &$b, $c = 'значение') {
      //тело метода. Методы, как и функции, могут принимать входные параметры, иметь параметры по умолчанию, возвращать или не возвращать значения.
    }
}

$object = new SimpleClass();
$anotherObject = new SimpleClass();// а это объекты

$object -> simpleProperty = 100; //присваиваем значение свойству
$object -> simplePropertyWithValue = 1;
echo $object -> simpleProperty; //100
echo $object -> simplePropertyWithValue;//1
echo $anotherObject -> simplePropertyWithValue; //200

//обращаемся к методу и выводим его результат
$object -> simpleMethod(); //поменяли значение
echo $object -> simpleProperty;//300
echo $anotherObject -> simpleProperty; //ничего не покажет, т.к. значение свойства не задано


class Car
{
  public $model;
  public $color = 'белый';
  public $price;
  
  public function changeColor($newcolor) {
    $this -> color = $newcolor;
  }
}

$audi = new Car;
$bmw = new Car;

$audi -> changeColor('красный');
echo $bmw -> color;
echo $audi -> color;


/*class Product {
  public $name; 
  public $category;
  public $price;
  public $discount; //это все свойства

  public function getPrice() {
    //тут базовая логика из нашей функции
    // упростил - нет скидки за смартфоны
    if ($this -> discount) {
      return round($this -> price - ($this -> price * $this -> discount));
    } else {
      return $this -> price;
    }
  }
}*/
/*
class Product {
  public $name; 
  public $category;
  public $price;
  public $discount; //это все свойства

  public function getPrice() {
    $phoneDiscount = ($this -> category == 'смартфоны') ? 10 : 0;
    $discount = min($this -> discount, $phoneDiscount);

    if ($discount) {
      return round($this -> price - ($this -> price * $this -> discount / 100));
    } else {
      return $this -> price;
    }
  }
}
//не раюотает. где-то ошибка
$product = new Product();
$product -> name = 'Apple iPhone 7';
$product -> price = 50000;
$product -> discount = 10;
echo $product -> getPrice();
$anotherProduct = new Product();
$anotherProduct -> name = 'Samsung Galaxy S7 Edge';
$anotherProduct -> price = 40000;
$anotherProduct -> category = 'смартфоны';
echo $anotherProduct -> getPrice();

*/
class Fun {
  public $property;
  public function __construct($property) {
    //содержимое конструктора
    $this -> property = $property;
    echo 'создан объект класса Fun';
  }
}

$object = new Fun(100);
$anotherObject = new Fun(200);
$superObject = new Fun(300);


echo $object -> property;// 100
echo $anotherObject -> property;// 200
echo $superObject -> property;// 300

$object -> property = 1000;
echo $object -> property; // 1000

class Nice {
  public $name; 
  public $category;
  public $price;
  public $discount; //это все свойства

  public function __construct($name, $price, $discount) {
  $this -> name = $name;
  $this -> price = $price;
  $this -> discount = $discount;
}

  public function getPrice() {
    if ($this -> discount) {
      return round($this -> price - ($this -> price * $this -> discount/100));
    } else {
      return $this -> price;
    }
  }
}

$iphone = new Nice('Apple iPhone 7', 50000, 10);
$galaxy = new Nice('Samsung Galaxy', 40000, 5);

echo $iphone -> price;
echo $galaxy -> price;
echo $iphone -> getPrice();

?>


<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Классы</title>
</head>
<body>

  <p>hello</p>

</body>
</html>