<?php 
  $isValid = true;

  $validSalutations = ['Herr', 'Frau'];
  
  // Form values
  $salutation = $_POST['salutation'] ?? '';
  $surname = trim($_POST['surname'] ?? '');
  $lastname  = trim($_POST['last_name'] ?? '');
  $email     = trim($_POST['email'] ?? '');
  $message   = trim($_POST['message'] ?? '');

  // check that form values are not empty and/or valid
  if(empty($surname) || empty($lastname) || empty($message) ){
    $isValid = false;
  }

  // check for valid salutation
  if (!in_array($salutation, $validSalutations)) {
    $isValid = false;
  }

  // Check email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $isValid = false;
  }

  if($isValid){
    echo "<div style='background-color: green;color: white; padding: 20px;'>Vielen Dank, " . htmlspecialchars($surname) . ", wir haben deine Nachricht erhalten.</div>";
  }
  else{
    echo "<div style='background-color: red;color: white; padding: 20px;'>Bitte füllen Sie alle Felder korrekt aus.</div>";
  }
?>
