<?php
  if (isset($_POST['submit']))  {
  
    //Email information
    $admin_email = "vipet@notimetolose.eu";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "No Time To Lose:" . $telefon, $message, "From:" . $email);
    
    header('Location: http://www.notimetolose.eu/form_succes.html');
  }
?>