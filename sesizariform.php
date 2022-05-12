<?php

if (isset($_POST['submit'])){
  $nume = $_POST['nume'];
  $mailFrom = $_POST['email'];
  $subject = "Subiect"
  $mesaj = $_POST['mesaj'];
  $select = $_POST['select'];
  $mailTo = "cristian98a@yahoo.com";
  $headers = "De la: ".$mailFrom;
  $txt = "Ati primit o ".$select."de la ".$nume.".\n\n".$mesaj;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: sesizari.html?mailtrmis")
}

?>
