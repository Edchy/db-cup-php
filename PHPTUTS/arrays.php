<?php 
//
// indexed arrays
//
$peopleOne = ['shaun', 'ryu', 'wario'];
echo $peopleOne[1];
$ages = array(1,2,3);

// add to array
$ages[] = 4;
array_push($ages, "im poppped");
// remove
$pop = array_pop($ages);
echo $pop;

// print readable array
print_r($ages);

// count
echo count($ages);

// merge
$array3 = array_merge($peopleOne, $ages);
print_r($array3);

//
// associative arrays (key - value pairs)
//
$ninjasOne = ['shaun' => 'black', 'mario'=>'orange', 'luigi'=>'brown'];
$ninjasOne['mario'] = 'white';
echo $ninjasOne['mario'];

//
// Multidimensional arrays
//
// indexed
$blogs = [
  ['mario party', 'mario', 'lorem', 30],
  ['mario cheats', 'wario', 'lorem', 130],
  ['mario games', 'luigi', 'lorem', 2]
  ];
echo $blogs[1][3];

// associative
$blogs2 = [
  ['title'=>'mario party', 'author'=>'mario', 'likes'=>30],
  ['title'=>'mario cheats', 'author'=>'wario', 'likes'=>330]
];
echo $blogs2[1]['title'];
echo $blogs2[0]['author'];
?>