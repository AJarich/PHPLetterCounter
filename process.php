<?php

  if(isset($_POST['data'])){

    $values = $_POST['data'];
    $length = strlen($values);
    echo "The Characters are " . $length;
  }

?>
