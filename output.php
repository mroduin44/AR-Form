<?php
session_start();
$form = "form.txt";
// Check if a text file exists. If not create one and initialize it.
if (!file_exists($form)) {
  $f = fopen($form, "w");
  fwrite($f,$_POST["Firstname"]);
  fwrite($f,$_POST["Lastname"]);
  fwrite($f,$_POST["StudentID"]);
  fwrite($f,$_POST["course"]);
  fwrite($f,$_POST["teacher"]);
  fwrite($f,$_POST["period"]);
  fwrite($f,$_POST["Accommodations"]);
  fwrite($f,$_POST["Email"]);
  fclose($f);
}
?>