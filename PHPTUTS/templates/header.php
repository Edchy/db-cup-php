
<?php
// session
session_start();
$name = $_SESSION['name'];

//get cookie
$gender = $_COOKIE['gender'] ?? 'Unknown';

?>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ninja Pizza</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    input {
      border-radius: 4px;

    }
  </style>
</head>
<body class="bg-green-slate-200">
  <nav class="bg-slate-400 py-6">
    <div class="container mx-auto flex justify-between items-center">

      <a class="text-3xl font-bold" href="index.php">Logo</a>
      <ul>
        <li class="bg-white p-2 font-bold rounded-lg shadow-lg hover:opacity-90"><a href="add.php">Add Pizza</a></li>
      </ul>
    </div>
  </nav>
  <div class="text-center text-3xl color-slate-400"><?php echo 'Hello ' . htmlspecialchars($name) ?></div>
  <div class="text-center text-3xl color-slate-400"><?php echo 'Gender ' . htmlspecialchars($gender) ?></div>
  
