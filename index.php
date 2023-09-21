<?php

echo 'Hello World';
// print 'Hello World';
// printf('Hello World');

// line comment

/**
 * 
 * 
 *  Multi line comment
 */

$hello = 'World'; // variables always start with $
$hello = 3;
$world = '\nHello $hello';
$world = "\nHello $hello";
echo $world;
$array = array(1, 2, 3, 4);
$array = [1, 2, 3, 4];
$array[] = 5;
print_r($array);
var_dump($world);
$array = ['name' => 'Kaspar', 'age' => 30];
var_dump($array);
$array = [
    'name' => 'Kaspar',
    'age' => 30,
    3,
    4,
    5,
    6,
];
var_dump($array);
$array = [
    -3 => 3,
    4,
    5,
    6,
];
var_dump($array);

if($array){

} else if(!$array){

} else {

}
$num = 1;
switch($num) {
    case 1: 
        echo 'hello';
        break;
    case 2:
        echo 'world';
        break;
    default:
        echo 'default';
}

for($i = 1; $i<10; $i++){
    var_dump($i);
}
$i=0;
while($i<10){
    var_dump($i);
    $i++;
}
do {
    var_dump($i);
    $i++;
} while($i<10);

foreach($array as $item){
    var_dump($item);
}

foreach($array as $key=>$item){
    var_dump($key, $item);
}
var_dump($array);
foreach($array as &$item){
    $item = 0;
}
var_dump($array);