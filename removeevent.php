<?php

include './settings.php';

$_POST = json_decode(file_get_contents('php://input'), true);

$tablename = 'events';

  if (isset($_POST["id"])) {

    $id = $_POST['id'];

    $sql = mysqli_query($link, "DELETE FROM `$tablename` WHERE ID = $id");
    if ($sql) {
      echo $id;
    } else {
      echo 'fail: ' . mysqli_error($link) . '</p>';
    }
  }
?>