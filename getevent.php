<?php

include './settings.php';
$tablename = 'events';


 $sql = mysqli_query($link, 'SELECT `ID`, `mileage`, `ltrs`, `date`, `isfull`, `comment` FROM `events`');

 $resarr = [];
  while ($result = mysqli_fetch_array($sql)) {
    // echo json_encode($result);
    // print_r ($result);
    // echo '/////////////';
    array_push($resarr, $result);
  }

  echo (json_encode($resarr));


  if (!$sql) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
  }


?>
