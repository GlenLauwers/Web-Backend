<?php

  //var_dump($_POST);
  
  session_start();

  if (isset($_GET['action'])) 
  {
      session_destroy();
  }

  define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER[ 'PHP_SELF']);
  $message  = false;


  if (isset($_POST['submit']))
  {
    $todoItem   = $_POST['todo'];
    $todoItem   = trim($todoItem);

    if (!empty( $todoItem)) 
    {
      $_SESSION['todos'][]  = array('text' => $todoItem, 'status' => 'todo');
    }

    else
    {
      $message['type']  = 'error';
      $message['text']  = 'todo-item mag niet leeg zijn.';
    }

  }

  $todos    = (isset ($_SESSION['todos']));

  var_dump($_SESSION);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Oplossing examen Todo</title>
  </head>
  <body>
  <div class="modal <?= $message['type']?>"> <?= $message['text']?></div>
    <form action="<?= BASE_URL?>" method="POST">
      <label for="todo">Voeg todo toe</label>
      <input type="text" name="todo" id="todo">
  
      <input type="submit" name="submit">

      <a href="<?= BASE_URL?>?action=session_destroy">Verwijder sessie</a>
      
    </form>

    <h1>Todos</h1>

    <h1>Todo</h1>
    
    <h1>Done</h1>
  </body>
</html>