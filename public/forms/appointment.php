<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'rucienmarayo11@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $appointment->ajax = true;

  $appointment->to = $receiving_email_address;
  $appointment->from_name = $_POST['name'];
  $appointment->from_email = $_POST['email'];
  $appointment->from_phone = $_POST['phone'];
  $appointment->from_date = $_POST['date'];
  $appointment->from_department = $_POST['department'];
  $appointment->from_doctor = $_POST['doctor'];
  $appointment->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $appointment->add_message( $_POST['name'], 'From');
  $appointment->add_message( $_POST['email'], 'Email');
  $appointment->add_message( $_POST['message'], 'Message', 10);

  echo $appointment->send();
?>
