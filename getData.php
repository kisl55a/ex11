<?php
      include "python_db.php";

      //get small-values
      $sql="SELECT COUNT(id) FROM mydata WHERE weight < 1.0";
      $result = $db->query($sql);
      $small = $result->fetch(PDO::FETCH_COLUMN);

      //get medium values
      $sql="SELECT COUNT(id) FROM mydata WHERE weight between  1.0 and 2.0";
      $result = $db->query($sql);
      $medium = $result->fetch(PDO::FETCH_COLUMN);

      //get large values
      $sql="SELECT COUNT(id) FROM mydata WHERE weight > 2.0";
      $result = $db->query($sql);
      $large = $result->fetch(PDO::FETCH_COLUMN);
      ?>
    