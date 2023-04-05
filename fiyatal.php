<html>
    <head>
        <title> Fiyat Talep Formu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="Fiyat Talep Formu"/>
        <meta name="description" content="DoSTone Marble"/>
        <meta name="keywords" content="DoSTone,Marble"/>
        <link rel="shortcut icon" href=""/>
        <!--web sitesi stil kodları -->
        <style> 
            .anaFormAlani{
                max-width: 450px;
                height: auto;
                border: 1px solid #ccc;
                padding: 10px;
                margin:0 auto 0 auto;
                display: table;
                background: #eee;

                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
            }
            #fiyattalepformu input[type=text]{
                width: 100%;
                margin: 0 0 15px 0;
                padding:5px 2% 5px 2%;
            }
            #fiyattalepformu textarea{
                width: 100%;
                height: 100px;
                margin: 0 0 15px 0;
                padding:5px 2% 5px 2%;
            }
            #fiyattalepformu input[type=submit]{
                width: 100%;
                height: 30px;
                text-align: center;
                padding:5px 2% 5px 2%;
            }
        </style> <!--web sitesi stil kodları -->
        
    </head>
    <body>
     <div calss="anaFormAlani" style="max-width: 450px; display: table;">
        <form name="fiyattalepformu" id="fiyattalepformu" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post">
            <input type="text" placeholder="Ad, Soyad" name="adsoyad" id="adsoyad"/>
            <input type="text" placeholder="E-mail"name="email" id="email"/>
            <input type="text" placeholder="Telefon Numarası"name="telefon" id="telefon"/>
            <input type="text" placeholder="Konu" name="konu" id="konu"/>
            <textarea name="mesaj" placeholder="İstediğiniz Ölçü Bilgisini ve Mesajınızı Buraya Yazınız..." id="mesaj"  ></textarea>
            <input type="hidden" name="islem" value="gonder" style="width: 100px;" required>
            <input type="submit" value="Gönder" name="gonder" id="gonder">
            </form>
        </div>

        <?php
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

            if (isset($_POST["islem"]) && $_POST["islem"] == "gonder") {
          // echo "aaa";
	    //Formdan gelen verilerin eksiksiz olup olmadığını kontrol ediyoruz.
    	    if (!empty($_POST["adsoyad"]) && !empty($_POST["email"]) && !empty($_POST["konu"]) && !empty($_POST["telefon"]) && !empty($_POST["mesaj"])) {
           // echo "bbb";
		    //PHPMailer

		    require 'phpmailer/src/smtp.php';
		    require 'phpmailer/src/PHPMailer.php';

		    $mail = new PHPMailer();
		    try {
			    $mail->IsSMTP(); // enable SMTP
    			//$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    			//$mail->SMTPDebug  = SMTP::DEBUG_OFF;
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
			    $mail->Subject = $_POST["konu"] .' -- fiyat talep mesaji';
			    //$mail->msgHTML("for test, please ignore.");
			    $mail->IsHTML(true);
				$Body    = '<p><strong>Gönderen:</strong> ' . $_POST["adsoyad"] . 
                            '<p><strong>Email:</strong> ' . $_POST["email"] . '</p>'.
                            '<p><strong>Telefon:</strong> ' . $_POST["telefon"] . '</p>'.
						    '<p><strong>Konu:</strong> ' . $_POST["konu"] . '</p>'.
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
                    echo "<script>window.close();</script>";
                }
		    } catch (Exception $e) {
			    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
		    }
	    }
    }	
	?>


</body>
</html>