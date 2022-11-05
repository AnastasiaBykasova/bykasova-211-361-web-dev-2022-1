<?php
include "db_term.php";

$sql = mysqli_query($conn, 'SELECT * FROM `terms`');
  while ($result = mysqli_fetch_array($sql)) {
    echo '<tr>'.'<td>' .$result['id'].'</td>'.'<td>'. $result['term'].'</td>'.'<td>' .$result['definition'].'</td>'.'</tr>';
  }
?>
