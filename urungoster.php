     <?php
     function pre_r($array){//dizin i test etmek için oluşturuldu program içinde kullanılmadı
         echo '<pre>';
         print_r($array);
         echo '</pre>';
     }
     $dirPath = '';
            if (isset($_GET["islem"])){
                $dirPath = "./images/".$_GET['islem']."/";
                //echo $dirPath;
            }


     if ($dirPath != '') {
         $files = (clean_readdir($dirPath));

         foreach ($files as $value) {

             //on $filr remove file extension and make first caracter Upper and keep in a new array
             $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $value);
             $imageheaders[] = ucfirst($withoutExt);
             $bilgidosyasipath = $dirPath.$withoutExt;
             $bilgidosyasi = $bilgidosyasipath.".txt";
             if (file_exists($bilgidosyasi)) {
                 $urunbilgisi = file_get_contents($bilgidosyasi);
             } else {
                 $urunbilgisi = "";}
             echo "<div class='row' style=' text-align: center; border: 3px solid black; background-color: lightsteelblue; height:22rem '>";
             echo   "<h4 style='background-color: blue; color:black; height:2rem '>$withoutExt</h4>";
             echo   "<div style='height:18rem; width:30rem; float: left;'>";            
             echo       "<img style = 'height:17rem; width:17rem; margin:auto; padding-top:1%; margin-left:%2 ' src='" . $dirPath . $value . "'></image>";
             echo     "</div>";
             echo   "<div style='height:18rem; width:30rem;float: right;>";
             echo         "<p><label for='bilgitext'>Ürün Bilgisi</label></p>";
             echo    "<textarea id='bilgitext' name='bilgitext' rows='6' cols='50'>". htmlspecialchars($urunbilgisi)."</textarea>" ;
             echo "<br><br>";
             echo          "<a style=' font-size: 25px;' href='fiyatal.php' target='_blank'>Fiyat Teklifi Al</a>";
             echo   "</div>";
             echo "</div>";
             echo "<br>";

         }
     }
     function clean_readdir($dir){
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
                //echo $file."<br/>";
                $files[] = $file;
              }
              
            }
        }
        else {
          echo "Dorectory does not exists";
        }
         return $files;
     }
     
     ?>
        

