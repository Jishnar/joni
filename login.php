<?php

  
  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];
    
    
      
     if ($email == 'admin@gmail.com' && $pass == 'admin@sms') {
      
      $_SESSION['login'] = true;
      header('Location: ../admin/dashboard.php');
    }
    else {
      echo 'Invailid Credentials';
    }
  }