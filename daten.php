<?php

//db configuration
include("datenbank.php");

if(isset($_POST)) {
    $amount = $_POST['amount'];
    $original_currency = $_POST['original_currency'];
    $target_currency = $_POST['target_currency'];
    if ($original_currency == $target_currency) {
      echo "Ursprung und Zielwährung sind gleich";
    } else {
      $sql = "SELECT `conversion_rate` FROM `umrechner`" . 
      "WHERE `original_currency` = '$original_currency' and `target_currency` = '$target_currency'";
      $result = $conn->query($sql);
      if ($result->num_rows == 1) {
          while($row = $result->fetch_assoc()) {
            $convertedAmount = $row["conversion_rate"] * $amount;
            echo "$convertedAmount $target_currency";
          }
        } else {
          echo "Umrechnung nicht möglich";
        }
    
      $conn->close();
    }
}

?>