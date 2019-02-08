<?php

include './settings.php';
$tablename = 'events';


 $sql = mysqli_query($link, 'SELECT `ID`, `mileage`, `ltrs`, `date`, `isfull`, `comment` FROM `events`');
  while ($result = mysqli_fetch_array($sql)) {
    echo json_encode($result);
  }

  if (!$sql) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}


?>
