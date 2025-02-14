<?php
$products = [
  ['name'=>'shiny star', 'price'=>'30'],
  ['name'=>'green shell', 'price'=>'10'],
  ['name'=>'red shell', 'price'=>'15'],
  ['name'=>'gold coin', 'price'=>'20'],
  ['name'=>'banana skin', 'price'=>'25']
];


$price = 50;

if ($price < 40) {
  echo 'condition met';
} else {
  echo 'condition not met';
}

foreach ($products as $p) {
  if ($p['price'] < 20) {
    echo '<br>';
    echo $p['name'].' - '. $p['price'];
  }
};


$vv = 20;

echo $vv > 40 ? 'more' : 'less';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <ul>
      <?php foreach($products as $p) { ?>
        <?php if ($p['price'] < 21) { ?>
          <li>?</li>
        <?php } ?>
      <?php } ?>
    </ul>
  </div>
</body>
</html>

