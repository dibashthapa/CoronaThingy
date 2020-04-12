<?php

if (isset($_POST'submit')) {
  $name=$_POST['name'];
  $mail_form=$_POST['email'];
  $info=$_POST['Info'];

  $mail_to="binod.koirala@plan-interntional.org";
  $headers= "Email ".$mail_form;
  $txt="You have recieved mail from ."$name ."\n\n".$info;


  mail($mail_to,$headers,$txt);
  header("Location: main.php?mailsend");
}





 ?>
