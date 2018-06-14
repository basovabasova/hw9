<?php

class Car 
{
    public $name; 
    public $color;
    public $price;

    public function __construct($name, $price, $color) 
    {
        $this -> name = $name;
        $this -> color = $color;
        $this -> price = $price;
    }

    public function getCar() 
    {
        $this -> price = 500000;
    }  
}

$skoda = new Car('SCODA Octavia II', 450000, 'white');
$isuzu = new Car('Isuzu Trooper', 800000, 'green');
echo $skoda -> name . ' ' . $skoda -> price . 'руб.' . ' ' . $skoda -> color . '<br>';
$isuzu -> getCar();
echo $isuzu -> name . ' ' . $isuzu -> price . 'руб.' . ' ' . $isuzu -> color . '<br>';

class TV
{
    public $name;
    public $type;
    public $screen;
    private $price;

    public function __construct($name, $type, $screen, $price)
    {
        $this -> name = $name;
        $this -> type = $type;
        $this -> screen = $screen; 
        $this -> price = $price;
    }

    public function getTV()
    {
        echo $this -> name . ' ' . $this -> screen . ' ' . $this -> price . 'руб.' . '<br>';
    }
}

$lg = new TV('LG 24LH451U', 'LED', 24, 12489);
$sony = new TV('Sony KD-65A1', 'OLED', 65, 369989);
$lg -> getTV();
$sony -> getTV();

class Pen
{
    public $mark;
    public $color;
    public $type;
    private $price;
   
    public function __construct($mark, $color, $type, $price)
    {
        $this -> mark = $mark;
        $this -> color = $color;
        $this -> type = $type; 
        $this -> price = $price;
    }

    public function getPen()
    {
        echo "На мой взгляд, {$this -> mark} - очень дорогая ручка. {$this -> price}руб., Карл!" . '<br>';
    }
    public function getNewPen()
    {
        if ($this -> price > 30000) {
            echo 'Безобразие.' . '<br>'; 
        }
        else {
            echo 'Все равно дорого.' . '<br>';
        } 
        if ($this -> type !== 'ballpen') {
            echo "В задании сказано - Шариковая ручка! А {$this -> mark} - перьевая." . '<br>';
        } 
    } 
}

$parker = new Pen('Parker Premier - Custom Tartan ST', 'black', '
a fountain pen', 45300);
$parker -> getPen();
$parker -> getNewPen();
$waterman = new Pen('Waterman Carene - Contemporary White ST', 'red', 'ballpen', 21400);
$waterman -> getPen();
$waterman -> getNewPen();

class Duck
{
    public $name;
    public $type;
    private $weight = '3кг';

    public function __construct($name, $type)
    {
        $this -> name = $name;
        $this -> type = $type;     
    }

    public function getDuck()
    {
        if ($this -> type == 'home') {
            echo $this -> name . ' весит примерно ' . $this -> weight . '<br>';
        }
        else {
            echo $this -> name . ' - молодец!' . '<br>';
        }
    }
}

$trueDuck = new Duck('Настоящая Утка', 'true');
$homeDuck = new Duck('Домашняя Утка', 'home');
$trueDuck -> getDuck();
$homeDuck -> getDuck();

class Product 
{
    public $name; 
    public $category;
    private $price;
    private $discount; 

    public function __construct($name, $price, $discount) 
    {
        $this -> name = $name;
        $this -> price = $price;
        $this -> discount = $discount;
    }

    public function getPrice() 
    {
        if ($this -> discount) {
            return round($this -> price - ($this -> price * $this -> discount/100));
        } else {
            return $this -> price;
        }
    }
}

$pelmeni = new Product('Пельмени Цезарь "Классические"', 344, 27);
$cookie = new Product('Печенье OREO', 128, 5);
$pelmeni -> getPrice();
$cookie -> getPrice();
echo $pelmeni -> name . ' ' . ' - ' . $pelmeni -> getPrice() . 'руб.' . '<br>';
echo $cookie -> name . ' ' . ' - ' . $cookie -> getPrice() . 'руб.' . '<br>';

class News 
{
    private $title;
    private $time;
    private $content;

    public function __construct($title, $time, $content)
    {
        $this -> title = $title;
        $this -> time = $time;
        $this -> content = $content;
    }
    public function getNews ()
    {
        $news = '<h3>' . $this -> title . '</h3>' . '<small>' . $this -> time . '</small>' . '<p>' . $this -> content . '</p>' . '<br>';
        return $news;
    }
}

$newsFirstCanal = new News('Все хорошо!', '14.06.2018 16:02', 'Тот-кого-нельзя-называть вернулся!');
$newsRTR = new News('Новость дня', '14.06.2018 16:04', 'Синие коляски порождают много слухов среди соседей.');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Классы и объекты</title>
</head>
<body>
  <h1>Мое понимание инкапсуляции</h1>
  <p>Инкапсуляция – это свойство системы, позволяющее объединить данные и методы, работающие с ними, в классе и скрыть детали реализации от пользователя.</p>
  <p>Я нажимаю на кнопку "вкл." на увлажнителе воздуха, и он работает. А что у него там внутри включается, запускается я не вижу и не знаю. Я могу  разобрать увлажнитель и посмотреть на все его внутренности, и понять как они работают. Но я этого делать не хочу и просто нажимаю на кнопку. Так вот способность увлажнителя работать от простого нажатия на кнопку, без уточнения деталей для меня, и есть инкапсуляция. Но это не точно.</p>
  <p></p>

  <h2>Плюсы и минусы объектов</h2>
  <ul>Плюсы
    <li>Удобство - все свойства и методы в одном месте</li>
    <li>Красивый код</li>
    <li>Меньше ошибок</li>  
  </ul>
  <ul>Минусы
    <li>Хотели как лучше, а получился длинный код</li>
  </ul>

  <h2>Дополнительное задание про новости</h2>
  <?= $newsFirstCanal -> getNews(); ?>
  <?= $newsRTR -> getNews(); ?>
</body>
</html>