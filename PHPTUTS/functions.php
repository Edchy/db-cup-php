<?php

function hello($name = "there", $time = "morning"){
  echo 'hello '.$name;
  echo "good $time $name";
};
hello();
hello('Asshole', 'evening');

//

function formatProduct($product){
  return "{$product['name']} costs €{$product['price']} to buy";
};

$formatted = formatProduct(['name'=>'gold star', 'price'=> '20']);
echo $formatted;




// SCOPE

$globalvariable = "i am global";

function func(){
  global $globalvariable;
  echo $globalvariable;
}

func();
?>