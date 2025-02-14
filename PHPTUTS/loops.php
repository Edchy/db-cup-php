<?php 

// for
$blogs = ['blog1', 'blog2', 'blog3'];

for ($i = 0; $i < count($blogs); $i++) {
  echo $blogs[$i].'<br />';
}

// forEach
foreach($blogs as $blog) {
  echo $blog.'<br />';
}

//
$products = [
  ['name'=>'shiny star', 'price'=>'30'],
  ['name'=>'green shell', 'price'=>'10'],
  ['name'=>'red shell', 'price'=>'15'],
  ['name'=>'gold coin', 'price'=>'20'],
  ['name'=>'banana skin', 'price'=>'25']
];

foreach ($products as $p) {
  echo $p['name']. ' - '.$p['price'];
  echo '<br />';
}

// while
$i = 0;

while($i < count($products)) {
  echo $products[$i]['name'];
  echo '<br />';
  $i++;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Products</h1>
  <ul>
    <?php foreach($products as $p) {  ?>
      <h3><?php echo $p['name']; ?></h3>
      <div><?php echo $p['price']; ?></div>
    <?php }  ?>
  </ul>
</body>
</html>