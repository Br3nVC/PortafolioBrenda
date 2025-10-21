<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'br04vc@gmail.com';

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['Nombre'];
  $contact->from_email = $_POST['Correo'];
  $contact->subject = $_POST['Tema'];

  $contact->add_message( $_POST['Nombre'], 'From');
  $contact->add_message( $_POST['Correo'], 'Correo');
  isset($_POST['Telefono']) && $contact->add_message($_POST['Telefono'], 'Telefono');
  $contact->add_message( $_POST['Informacion'], 'Informacion', 10);

  echo $contact->send();
?>
