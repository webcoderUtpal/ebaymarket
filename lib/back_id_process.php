<?php
  include '../admin/lib/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //EMPTY ERROR CHECK & TAKE INTO VARIABLE
  if (!empty($_POST['uniqid'])) {
    	$uniqid = $_POST['uniqid'];

      // Site favicon File upload path
    	$back_id_targetDir = "../admin/uploads/backid/";
  		$back_idName = basename($_FILES["back_id"]["name"]);
    	$back_id_targetFilePath = $back_id_targetDir . $back_idName;
    	$back_id_fileType = pathinfo($back_id_targetFilePath,PATHINFO_EXTENSION);

    	// Allow certain file formats
    	$allowTypes = array('jpg','png','jpeg','gif','pdf');
  }
  else{
    $_SESSION['sessionNull']="something went to wrong. Try again!";
    Header( 'Location: ../upload-back');
  }
  	
    // If file formats okay check
    if((in_array($back_id_fileType, $allowTypes))){
        // Upload file to server
        if((move_uploaded_file($_FILES["back_id"]["tmp_name"], $back_id_targetFilePath))){
            // Insert/update images file name into database
              $sql = "UPDATE customer_informations SET back_id= '$back_idName' WHERE uniqid='$uniqid'";
              $update = mysqli_query($conn, $sql);

            if($update){
                $_SESSION['uniqid']="$uniqid";
      			  Header( 'Location:../face-verification/');
       			  exit();
            }
            else{
                $_SESSION['fail']="Not Saved. Try again!!";
                Header( 'Location: ../upload-back');
                exit();
            } 
        }
        else{
            $_SESSION['fail']="Sorry, there was an error uploading your file.";
                Header( 'Location: ../upload-back');
                exit();
        }
    }
    else{
      $_SESSION['fail']="Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
                Header( 'Location: ../upload-back');
                exit();
    }
}
?>