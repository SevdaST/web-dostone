<?php

$dir = "./images/emprador/";


// Check if the directory exists
if (file_exists($dir) && is_dir($dir) ) {
  
    // Get the files of the directory as an array
    $scan_arr = scandir($dir);
    $files_arr = array_diff($scan_arr, array('.','..') );
    // echo "<pre>"; print_r( $files_arr ); echo "</pre>";
    // Get each files of our directory with line break
    foreach ($files_arr as $file) {
      //Get the file path
      $file_path = $dir.$file;
      // Get the file extension
      $file_ext = pathinfo($file_path, PATHINFO_EXTENSION);
      if ($file_ext=="jpg" || $file_ext=="png" || $file_ext=="JPG" || $file_ext=="PNG") {
        echo $file."<br/>";
      }
      
    }
}
else {
  echo "Dorectory does not exists";
}

?>