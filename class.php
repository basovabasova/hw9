<?php 
/*
$products = [
    ['name' => 'гарри поттер', 'category' => 'Книги', 'discount' => 5, 'price' => 300],
    ['name' => 'самсунг галакси', 'category' => 'смартфоны', 'discount' => 5, 'price' => 10000],
    ['name' => 'шкода', 'category' => 'авто', 'discount' => 5, 'price' => 400000]
];

foreach ($products as $product) {
    echo $product['name'] . ' стоит ';
        if ($product['category'] != 'смартфоны') {
            echo $product['price'] . ' рублей' . '<br>';
        } else {
            echo round($product['price'] - $product['price']*0.1) . '<br>';
        }
  
}

echo '<hr>';

function getPrice($price, $discount, $category) 
{
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

echo '<hr>';

/*
class SimpleClass 
{
  //пустой класс
}

/*
class SimpleClass 
{
    public $simpleProperty; //св-во без значения . Публичное свойство. Раньше был var.
    public $simplePropertyWithValue = 200; // св-во со значением по умолчанию
    public function simpleMethod() 
    {
        //return 'результат выполнения метода';//тело метода
        $this -> simpleProperty = 300;// меняем значение свойства. $this указывает на конкретный объект, в рамках которого вызывается.
    }
    public function anotherMethod($a, &$b, $c = 'значение') 
    {
        //тело метода. Методы, как и функции, могут принимать входные параметры, иметь параметры по умолчанию, возвращать или не возвращать значения.
    }
}

$object = new SimpleClass();
$anotherObject = new SimpleClass();// а это объекты

$object -> simpleProperty = 100; //присваиваем значение свойству
$object -> simplePropertyWithValue = 1;
echo $object -> simpleProperty . '<br>'; //100
echo $object -> simplePropertyWithValue . '<br>';//1
echo $anotherObject -> simplePropertyWithValue . '<br>'; //200

//обращаемся к методу и выводим его результат
$object -> simpleMethod(); //поменяли значение
echo $object -> simpleProperty . '<br>';//300
echo $anotherObject -> simpleProperty . '<br>'; //ничего не покажет, т.к. значение свойства не задано


class Car
{
    public $model;
    public $color = 'белый';
    public $price;
  
    public function changeColor($newcolor) 
    {
        $this -> color = $newcolor;
    }
}

$audi = new Car;
$bmw = new Car;

$audi -> changeColor('красный');
echo $bmw -> color . '<br>';
echo $audi -> color . '<br>';

/*
class Product 
{
    public $name; 
    public $category;
    public $price;
    public $discount; //это все свойства

    public function getPrice() 
    {
        //тут базовая логика из нашей функции
        // упростил - нет скидки за смартфоны
        if ($this -> discount) {
            return round($this -> price - ($this -> price * $this -> discount / 100));
        } else {
            return $this -> price;
        }
    }
}

*/
class Product 
{
    public $name; 
    public $category;
    public $price;
    public $discount; //это все свойства

    public function getPrice() 
    {
        $phoneDiscount = ($this -> category == 'смартфоны') ? 10 : 0;
        $discount = min($this -> discount, $phoneDiscount);

        if ($this -> discount) {
            return round($this -> price - ($this -> price * $this -> discount / 100));
        } else {
            return $this -> price;
        }
    }
}

$product = new Product();
$product -> name = 'Apple iPhone 7';
$product -> price = 50000;
$product -> discount = 10;
echo $product -> getPrice() . '<br>';
$anotherProduct = new Product();
$anotherProduct -> name = 'Samsung Galaxy S7 Edge';
$anotherProduct -> price = 40000;
$anotherProduct -> category = 'смартфоны';
echo $anotherProduct -> getPrice() . '<br>';


class Fun 
{
    public $property;
    
    public function __construct($property) 
    {
        //содержимое конструктора
        $this -> property = $property;
        echo 'создан объект класса Fun' . '<br>';
    }
}

$object = new Fun(100);
$anotherObject = new Fun(200);
$superObject = new Fun(300);


echo $object -> property . '<br>';// 100
echo $anotherObject -> property . '<br>';// 200
echo $superObject -> property . '<br>';// 300

$object -> property = 1000;
echo $object -> property . '<br>'; // 1000

class Nice 
{
    public $name; 
    public $category;
    private $price;
    public $discount; //это все свойства

    public function __construct($name, $price, $discount) 
    {
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

//echo $iphone -> price . '<br>';
//echo $galaxy -> price . '<br>';
echo $iphone -> getPrice() . '<br>';
echo $galaxy -> getPrice() . '<br>';
echo "<pre>";
print_r($iphone);
print_r($galaxy);
echo "<hr>";
/*
class Aaa
{
    private $privateProperty = 100;

    public getPrivateProperty($value) {
        return $this -> privateProperty = $value;
    }
}
//тут чето не работает
$object1 = new Aaa();
$object1 -> getPrivateProperty(200);
*/

class IiiClass
{
    public $publicProperty;

    public static $staticProperty = 0; //статическое свойство.

    public function __construct()
    {//при вызове конструктора меняем статическое свойство.  изменяя статическое свойство, мы изменяем его для всех объектов 
        self::$staticProperty++;
    }
    
    public function publicMethod()
    {
        echo self:: $staticProperty . '<br>';
    }

    public static function staticMethod() //статический метод
    {   
        echo self:: $staticProperty . '<br>';
        //echo $this -> publicProperty; //ошибка. в статических методах нельзя обратиться к $this
    }
} 
echo IiiClass::$staticProperty . '<br>'; //вот так можно. 
$object5 = new IiiClass();
$object5:: $staticProperty; //а вот так нельзя. свойства класса, а не объекта
$object5 -> publicMethod();
$object5:: staticMethod(); //вот так тоже можно

$object6 = new IiiClass(); //тут вызвался конструктор
$object7 = new IiiClass(); //и тут вызвался конструктор
$object8 = new IiiClass(); // и даже тут
echo IiiClass:: $staticProperty . '<br>';//4

class ConstClass
{
    const CONSTANT = 'Значение константы';
    
    public function showConstant() 
    {
        echo self:: CONSTANT;
    }
} 
echo ConstClass:: CONSTANT . '<br>';
$object4 = new ConstClass();
echo $object4 -> showConstant() . '<br>';


class AaaClass
{
    public function publicMethod()
    {
        echo 'Hello ';
        $this->anotherMethod(); //Методы можно вызывать в других методах.
    } 
    
    public function anotherMethod()
    {
        echo 'world';
    }
}

$object2 = new AaaClass();
$anotherObject2 = new AaaClass();
echo $object2 -> anotherMethod() . '<br>';
echo $object2 -> publicMethod() . '<br>';

class EeeClass //Объекты всегда передаются по ссылке.
{
    public $publicProperty = 0;
} 

function increment($obj)
{
    $obj -> publicProperty++;
}

$object3 = new EeeClass();
echo $object3 -> publicProperty . '<br>';
increment($object3);
echo $object3 -> publicProperty . '<br>';

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