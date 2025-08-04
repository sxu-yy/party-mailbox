<?php
  $fname = "/public/persistent_storage/mailbox.txt";
  if (!empty($_POST)) {
    $mail = htmlspecialchars($_POST['tosend']);
    $fh = fopen($fname, 'a') or die("Can't open file");
    fwrite($fh, $mail);
    fwrite($fh, "\n");
    fclose($fh);
  }

  $fh = fopen($fname, 'r');
  while (($contents = fgets($fh, 4096)) !== false) {
    echo $contents;
    echo "<br>";
  }
  fclose($fh);
?>
