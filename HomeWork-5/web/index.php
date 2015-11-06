<?php
require __DIR__ . '/../config/autoload.php';

use Entity\Triangle;
use Layer\Connector\MyConnect;

$connect1 = new MyConnect();
$con = $connect1->connect($config['host'],$config['db_user'],$config['db_password'],$config['db_name']);

$tri = new Triangle();
if(isset($_POST['a'])) $tri->setA($_POST['a']); else $tri->setA('');
if(isset($_POST['b'])) $tri->setB($_POST['b']); else $tri->setB('');
if(isset($_POST['c'])) $tri->setC($_POST['c']); else $tri->setC('');
?>

<div>
    <h3>Triangle</h3>
    <form method="post">
        <label for="a">Side A</label>
        <input type="text" name="a"><br>
        <label for="a">Side B</label>
        <input type="text" name="b"><br>
        <label for="a">Side C</label>
        <input type="text" name="c"><br>
        <button type="submit">LET'S DO IT!!!!</button>
    </form>
</div>

<?php

echo 'Perimeter figure = '.$tri->calcPerimeterFigure()."<br>";
echo 'Square figure = '.$tri->calcSquareFigure()."<br>";

?>