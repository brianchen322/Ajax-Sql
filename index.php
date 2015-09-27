<?php 
include 'src/core/Task.php';

$task = new Task();
$data = $task->getAll();
$task->close(); 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>To-Do list </title>

   <meta name="title" content="To-Do list" />
   <meta name="description" content="Stop giving up! You can do it! You should get to the point. Where anyone else would quit. Do it! Just do it! What are you wating for? Do it! Just do it! Wake up and work! Make your dreams come true. Yesterday you sad tomorrow. Stop giving up! " />
   <meta name="author" content="depekur@gmail.com" />
   <meta name="copyright" content="http://bananagarden.net/" />
   <meta name="robots" content="index, follow" /> 

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="src/style.css">

</head>
<body>

   <aside class="sidebar">
      <img class="logo" src="src/img/hipsterlogogenerator_1443267333449.png" alt="to-do list">

      <form class="task-form" method="post" action="index.php">

         <input type="text" maxlength="28" name="title" placeholder="Stop giving up" required autofocus><br>
         <textarea name="message" cols="25" rows="7" placeholder="Make your dreams come true" required ></textarea><br>
         <button type="submit">just do it</button>
      </form>
   </aside>

   <section class="content">

      <?php include 'src/core/loop.php'; ?>
      
   </section>

   <script type="text/javascript" src="src/js/jquery-1.11.3.min.js"></script>
   <script type="text/javascript" src="src/js/wookmark.min.js"></script>
   <script type="text/javascript" src="src/js/app.js"></script>
</body>
</html>
