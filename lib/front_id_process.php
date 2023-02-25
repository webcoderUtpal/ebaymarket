<?php
  include '../admin/lib/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //EMPTY ERROR CHECK & TAKE INTO VARIABLE
  if (!empty($_POST['uniqid'])) {
    	$uniqid = $_POST['uniqid'];

      // Front Id File upload path
    	$front_id_targetDir = "../admin/uploads/frontid/";
  		$front_idName = basename($_FILES["front_id"]["name"]);
    	$front_id_targetFilePath = $front_id_targetDir . $front_idName;
    	$front_id_fileType = pathinfo($front_id_targetFilePath,PATHINFO_EXTENSION);

    	// Allow certain file formats
    	$allowTypes = array('jpg','png','jpeg','gif','pdf');
  }
  else{
    $_SESSION['sessionNull']="something went to wrong. Try again!";
    Header( 'Location: ../contact-information-and-shipping-address/');
  }
  	
    // If file formats okay check
    if((in_array($front_id_fileType, $allowTypes))){
        // Upload file to server
        if((move_uploaded_file($_FILES["front_id"]["tmp_name"], $front_id_targetFilePath))){
            // Insert/update images file name into database
              $sql = "UPDATE customer_informations SET front_id= '$front_idName' WHERE uniqid='$uniqid'";
              $update = mysqli_query($conn, $sql);

            if($update){
                $_SESSION['uniqid']="$uniqid";
      			  Header( 'Location:../upload-back/');
       			  exit();
            }
            else{
                $_SESSION['fail']="Not Saved. Try again!!";
                Header( 'Location: ../upload-front');
                exit();
            } 
        }
        else{
            $_SESSION['fail']="Sorry, there was an error uploading your file.";
                Header( 'Location: ../upload-front');
                exit();
        }
    }
    else{
      $_SESSION['fail']="Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
                Header( 'Location: ../upload-front');
                exit();
    }
}
?>