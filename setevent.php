<?php

include './settings.php';
$tablename = 'events';

  if (isset($_GET["mileage"]) && isset($_GET["volume"]) && isset($_GET["date"])) {

    if (!isset($_GET["isfull"])) {
      $isfull = 0;
    }
    else {
      $isfull = $_GET["isfull"];
    }

    if (!isset($_GET["comment"])) {
      $comment = 444;
    }
    else {
      $comment = $_GET["comment"];
    }

    $mileage = $_GET['mileage'];
    $volume = $_GET['volume'];
    $date = $_GET['date'];


    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO `$tablename` (`mileage`, `ltrs`, `date`, `isfull`, `comment`) VALUES ('{$mileage}', '{$volume}', '{$date}', '{$isfull}', '{$comment}')");
    //Если вставка прошла успешно
    if ($sql) {
      echo 'success';
    } else {
      echo 'fail: ' . mysqli_error($link) . '</p>';
    }
  }
?>