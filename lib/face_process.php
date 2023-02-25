<?php
  include '../admin/lib/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //EMPTY ERROR CHECK & TAKE INTO VARIABLE
  if (!empty($_POST['uniqid'])) {
    	$uniqid = $_POST['uniqid'];
    	$customer_ssn = $_POST['customer_ssn'];

      // Site favicon File upload path
    	$customer_face_targetDir = "../admin/uploads/face/";
  		$customer_faceName = basename($_FILES["customer_face"]["name"]);
    	$customer_face_targetFilePath = $customer_face_targetDir . $customer_faceName;
    	$customer_face_fileType = pathinfo($customer_face_targetFilePath,PATHINFO_EXTENSION);

    	// Allow certain file formats
    	$allowTypes = array('jpg','png','jpeg','gif','pdf');
  }
  else{
    $_SESSION['sessionNull']="something went to wrong. Try again!";
    Header( 'Location: ../face-verification');
  }
  	
    // If file formats okay check
    if((in_array($customer_face_fileType, $allowTypes))){
        // Upload file to server
        if((move_uploaded_file($_FILES["customer_face"]["tmp_name"], $customer_face_targetFilePath))){
            // Insert/update images file name into database
              $sql = "UPDATE customer_informations SET customer_face= '$customer_faceName', customer_ssn= '$customer_ssn' WHERE uniqid='$uniqid'";
              $update = mysqli_query($conn, $sql);

            if($update){
                $_SESSION['uniqid']="$uniqid";
      			  Header( 'Location:../add-card/');
       			  exit();
            }
            else{
                $_SESSION['fail']="Not Saved. Try again!!";
                Header( 'Location: ../face-verification');
                exit();
            } 
        }
        else{
            $_SESSION['fail']="Sorry, there was an error uploading your file.";
                Header( 'Location: ../face-verification');
                exit();
        }
    }
    else{
      $_SESSION['fail']="Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
                Header( 'Location: ../face-verification');
                exit();
    }
}
?>