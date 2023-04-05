<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="shortcut icon" href="/icon.ico" type="image/x-icon">

  </head>

<body>

    <footer>
          <div class="footer-content">
              
              <div class="about">
                  <h3 style="text-align: center;">Firmamız</h3>
                  <p style="font-size: 15px;">YYY; doğal taşı, tüm güzelliğiyle mekanlarınıza taşımaktayız. Doğal taşa olan tutkumuzla,
						48TY.</p>
              </div>
              <div class="contact">
                  <ul class="socials">
                      <h3 style="text-align: center;">Socials</h3>
                      <li><a href="#"><i class="fa-brands fa-facebook"> Facebook</i></a></li>
                      <li><a href="#"><i class="fa-brands fa-twitter"> Twitter</i></a></li>
                      <li><a href="#"><i class="fa-brands fa-google"> Google</i></a></li>
                      <li><a href="#"><i class="fa-brands fa-youtube"> Youtube</i></a></li>
                      <li><a href="#"><i class="fa-brands fa-linkedin"> Linkedin</i></a></li>
  
              
                  </ul>
              </div>
              
              <div class="form">
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                      <h3>Contact</h3>
                      <input type="text" style="width: 200px;" placeholder="Ad, Soyad" name="adsoyad" id="adsoyad"/><br>
                      <input type="text" style="width: 200px;" placeholder="E-mail"name="email" id="email"/><br>
                      <textarea name="mesaj" style="width: 200px; height: 80px;" placeholder="Mesajınızı Buraya Yazınız..." id="mesaj"  ></textarea><br>
                      <input type="hidden" name="islem" value="gonder" style="width: 100px;" required>
                      <button id="gonder" type="submit" value="gonder">Gönder</button>
                      <br><br>
                      </form>
                  </div>
        <?php

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            if (isset($_POST["islem"]) && $_POST["islem"] == "gonder") {

            //Formdan gelen verilerin eksiksiz olup olmadığını kontrol ediyoruz.
            if (!empty($_POST["adsoyad"]) && !empty($_POST["email"]) && !empty($_POST["mesaj"])) {

            //PHPMailer

            require 'phpmailer/src/smtp.php';
            require 'phpmailer/src/PHPMailer.php';

            $mail = new PHPMailer();
            try {
            $mail->IsSMTP(); // enable SMTP
            //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            //$mail->Debugoutput = 'html';
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; //Set the SMTP port number - likely to be 25, 465 or 587
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; //Set the encryption system to use - ssl (deprecated) or tls
            $mail->Username = "dostonemarble@gmail.com";
            $mail->Password = "kcvjdmlwkkjtcxil";
            //$mail->setFrom('dostonemarble@gmail.com', 'First Last');
            $mail->setFrom($_POST["email"], $_POST["adsoyad"]);
            $mail->addAddress('dostonemarble@gmail.com', 'Umit Tilki');
            $mail->Subject = ' İletişim mesaji';
            //$mail->msgHTML("for test, please ignore.");
            $mail->IsHTML(true);
            $Body    = '<p><strong>Gönderen:</strong> ' . $_POST["adsoyad"] . 
                    '<p><strong>Email:</strong> ' . $_POST["email"] . '</p>'.
                    '<p><strong>Mesaj:</strong> ' . $_POST["mesaj"] . '</p>';
            $mail->msgHTML($Body);
            $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
            );

            if (!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "<script>alert('Mesajınız Gönderildi')</script>"; 
            }
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            }
            }
            }
        ?>
            <div class="footer-bottom">
                <p>copyright &copy;2022 DoSTone</p>
            </div>
        </div>     
</footer>
<a href="https://api.whatsapp.com/send?phone=5349191943&text=" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
</body>
</html>
