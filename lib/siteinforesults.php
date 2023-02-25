<?php
    // Table data fetch code.
      $stquery = "SELECT * FROM siteinfo";
      $stresults = mysqli_query($conn, $stquery);

      if (mysqli_num_rows($stresults) > 0){
        while($stiresults = mysqli_fetch_assoc($stresults)){
          $site_title = $stiresults["site_title"];
          $site_phone = $stiresults["site_phone"];
          $site_email = $stiresults["site_email"];
          $site_address1 = $stiresults["site_address1"];
          $site_address2 = $stiresults["site_address2"];
          $site_logo = $stiresults["site_logo"];
          $site_favicon = $stiresults["site_favicon"];
    }
  }
?>