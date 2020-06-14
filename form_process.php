<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "a.goncarov@outlook.cz";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    //send email
    mail($admin_email, "No Time To Lose:" . $subject, $message, "From:" . $email);
    
    header('Location: https://friendly-nightingale-7065dd.netlify.app/form_succes.html');
  }