<?php

include './settings.php';

$_POST = json_decode(file_get_contents('php://input'), true);

//print_r($_POST);

$tablename = 'events';

  if (isset($_POST["mileage"]) && isset($_POST["volume"]) && isset($_POST["date"])) {

    if (!isset($_POST["isfull"])) {
      $isfull = 0;
    }
    else {
      $isfull = $_POST["isfull"];
      if ($isfull == 'on') {
//          $isfull = 1;
      }
    }

    if (!isset($_POST["comment"])) {
      $comment = 444;
    }
    else {
      $comment = $_POST["comment"];
    }

    $mileage = $_POST['mileage'];
    $volume = $_POST['volume'];
    $date = $_POST['date'];

//    print_r($isfull);die;

//    $date=strtotime('22-04-0018');

//    print_r($date);

//    echo 'qweqwe';

    $date = strtotime($date);

//    print_r($date);die;

//    $date = 111;

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