
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/urunler.js" charset="utf-8"></script>
    <script src="js/index.js" charset="utf-8"></script>
    <title>DoStone Marble</title>
    <link rel="shortcut icon" href="/icon.ico" type="image/x-icon">
  
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript">
      function urungoster (kategori) {
       // function urungoster () {
            document.getElementById("islem").value =kategori;
            document.getElementById("form").submit();
            }
    </script>
</head>
  <body>
     <div>   
      <?php   include("topbar.php") ; ?>
    </div>

    <div class="row" style="babackground-color:rgb(197, 193, 193)";>
    <aside class="col-sm-3" style="background-color:rgb(197, 193, 193);"><!--ürün filtreleme kısmı-->              
        <h2 style="text-align:center;"><b>Ürün Kategorisi</b></h2>
        <form id="form" method="get">
            <ul class="kategori"><!--Türe göre filtre--> 
            <input type="hidden" id="islem" name="islem" required> 
            <?php
                  $Mydir = './images/'; //  use 'anydirectory_of_your_choice/';
            
            foreach (glob($Mydir . '*', GLOB_ONLYDIR) as $dir) { //images altındaki klasörler isimlerine göre ul oluşturur
            
              $dirname = basename($dir);
              if ($dirname != "icons") {
                $withoutExt = ucfirst(preg_replace('/\\.[^.\\s]{3,4}$/', '', basename($dir)));

                //echo '<li> <a  id="' . $dirname . '" href="#urunpanosu" onclick=urungoster("'.$dirname.'")>' . $withoutExt . '</a></li> ';
                echo '<li> <a  id="' . $dirname . '" href="#urunpanosu" onclick="urungoster(id)">' . $withoutExt . '</a></li>';
              }
            }
            ?>
            </ul>  
        </form>                  
                            
            </aside>
             
            <section id="urunpanosu" class="col-sm-9" style="background-color:rgb(197, 193, 193);"><!--ürün fotoğraflarının gösterildiği kısım -->
                <?php  if (isset($_GET["islem"])) { include("urungoster.php") ; }?>
            </section>
        </div>
  
        <footer>
        <?php include("footer.php");?>
      </footer>
    
         </div>    
</div><!-- Main sonu-1.div -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </main>
  </body>
</html>