<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['name'])&& isset($_POST['email'])) {
$name= $_POST['name'];
$asunto= $_POST['asunto'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$politica= $_POST['politica'];

$servername = "localhost";
$database = "clientes";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "INSERT INTO customer_date (nombre, asunto, email, cel, mensaje, acepto_politica) VALUES ('$name', '$asunto', '$email', '$phone', '$message', '$politica')";
if (mysqli_query($conn, $sql)) {
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP(); 
    $mail->CharSet = 'UTF-8';                                           //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'brayammartinezperdomo@gmail.com';                     //SMTP username
    $mail->Password   = 'drqqbd77ss*16';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('brayammartinezperdomo@gmail.com', 'Brayam');
    $mail->addAddress('brayammartinezperdomo@gmail.com');     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Mi Web.com - Cotización';
    $mail->Body    = "
<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'> <!-- utf-8 works for most cases -->
    <meta name='viewport' content='width=device-width'> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv='X-UA-Compatible' content='IE=edge'> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name='x-apple-disable-message-reformatting'>  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href='https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700' rel='stylesheet'>

    <!-- CSS Reset : BEGIN -->
    <style>

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #B0B0B0;
}

/* What it does: Stops email clients resizing small text. */
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}

/* What it does: Centers email on Android 4.4 */
div[style*='margin: 16px 0'] {
    margin: 0 !important;
}

/* What it does: Stops Outlook from adding extra spacing to tables. */
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}

/* What it does: Fixes webkit padding issue. */
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}

/* What it does: Uses a better rendering method when resizing images in IE. */
img {
    -ms-interpolation-mode:bicubic;
}

/* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */
a {
    text-decoration: none;
}

/* What it does: A work-around for email clients meddling in triggered links. */
*[x-apple-data-detectors],  /* iOS */
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}

/* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}

/* What it does: Prevents Gmail from changing the text color in conversation threads. */
.im {
    color: inherit !important;
}

/* If the above doesn't work, add a .g-img class to any image in question. */
img.g-img + div {
    display: none !important;
}

/* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
/* Create one of these media queries for each additional viewport size you'd like to fix */

/* iPhone 4, 4S, 5, 5S, 5C, and 5SE */
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
/* iPhone 6, 6S, 7, 8, and X */
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
/* iPhone 6+, 7+, and 8+ */
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}


    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>

        .primary{
    background: #17bebb;
}
.bg_white{
    background: #ffffff;
}
.bg_light{
    background: #f7fafa;
}
.bg_black{
    background: #000000;
}
.bg_dark{
    background: rgba(0,0,0,.8);
}
.email-section{
    padding:2.5em;
}

/*BUTTON*/
.btn{
    padding: 10px 15px;
    display: inline-block;
}
.btn.btn-primary{
    border-radius: 5px;
    background: #17bebb;
    color: #ffffff;
}
.btn.btn-white{
    border-radius: 5px;
    background: #ffffff;
    color: #000000;
}
.btn.btn-white-outline{
    border-radius: 5px;
    background: transparent;
    border: 1px solid #fff;
    color: #fff;
}
.btn.btn-black-outline{
    border-radius: 0px;
    background: transparent;
    border: 2px solid #000;
    color: #000;
    font-weight: 700;
}
.btn-custom{
    color: rgba(0,0,0,.3);
    text-decoration: underline;
}

h1,h2,h3,h4,h5,h6{
    font-family: 'Poppins', sans-serif;
    color: #000000;
    margin-top: 0;
    font-weight: 400;
}

body{
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 15px;
    line-height: 1.8;
    color: rgba(0,0,0,.4);
}

a{
    color: #17bebb;
}

table{
}
/*LOGO*/

.logo h1{
    margin: 0;
}
.logo h1 a{
    color: #17bebb;
    font-size: 24px;
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
}

/*HERO*/
.hero{
    position: relative;
    z-index: 0;
}

.hero .text{
    color: rgba(0,0,0,.3);
}
.hero .text h2{
    color: #000;
    font-size: 34px;
    margin-bottom: 0;
    font-weight: 200;
    line-height: 1.4;
}
.hero .text h3{
    font-size: 24px;
    font-weight: 300;
}
.hero .text h2 span{
    font-weight: 600;
    color: #000;
}

.text-author{
    bordeR: 1px solid rgba(0,0,0,.05);
    max-width: 50%;
    margin: 0 auto;
    padding: 2em;
}
.text-author img{
    border-radius: 50%;
    padding-bottom: 20px;
}
.text-author h3{
    margin-bottom: 0;
}
ul.social{
    padding: 0;
}
ul.social li{
    display: inline-block;
    margin-right: 10px;
}

/*FOOTER*/

.footer{
    border-top: 1px solid rgba(0,0,0,.05);
    color: rgba(0,0,0,.5);
}
.footer .heading{
    color: #000;
    font-size: 20px;
}
.footer ul{
    margin: 0;
    padding: 0;
}
.footer ul li{
    list-style: none;
    margin-bottom: 10px;
}
.footer ul li a{
    color: rgba(0,0,0,1);
}


@media screen and (max-width: 500px) {


}


    </style>


</head>

<body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;'>
    <center style='width: 100%; background-color: #B0B0B0;'>
    <div style='display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;'>
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style='max-width: 600px; margin: 0 auto;' class='email-container'>
        <!-- BEGIN BODY -->
      <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
        <tr>
          <td valign='top' class='bg_white' style='padding: 1em 2.5em 0 2.5em;'>
            <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
                <tr>
                    <td class='logo' style='text-align: center;'>
                        <h1><a href='index.php'>MiWeb.com</a></h1>
                      </td>
                </tr>
            </table>
          </td>
          </tr><!-- end tr -->
                <tr>
          <td valign='middle' class='hero bg_white' style='padding: 2em 0 4em 0;'>
            <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%'>
                <tr>
                    <td style='padding: 0 2.5em; text-align: center; padding-bottom: 3em;'>
                        <div class='text'>
                            <h1>¡HOLA!</h1><br>
                            <h2>Brayam Y Yesid</h2>
                            <h3><span style='font-size:30px;'>&#128073;</span>$name Se ha puesto en contacto con ustedes. </h3>
                        </div>
                    </td>
                </tr>
                <tr>
                      <td style='text-align: center;'>
                        <div class='text-author'>
                            <img src='assets/images/x-icon/favicon.png' alt='' style='width: 100px; max-width: 600px; height: auto; margin: auto; display: block;'>
                            <h3 class='name'>Miweb.Com</h3>
                            <span class='position' style='font-size:80px;'>&#128231;</span>
                            <h2>Estos son los datos de $name:</h2>
                        </div>
                      </td>
                    </tr>
            </table>
          </td>
          </tr><!-- end tr -->
      <!-- 1 Column Text + Button : END -->
      </table>
      <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>
        <tr>
          <td valign='middle' class='bg_light footer email-section'>
            <table>
                <tr>
                <td valign='top' width='33.333%' style='padding-top: 20px;'>
                  <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                    <tr>
                      <td style='text-align: left; padding-right: 10px;'>
                        <h3 class='heading'>Asunto:</h3>
                        <h3 class='heading'>Nombres:</h3>
                        <h3 class='heading'>Correo:</h3>
                        <h3 class='heading'>Cel/Tel:</h3>
                        <h3 class='heading'>Mensaje:</h3>
                        <h3 class='heading'>Sí, Acepto las políticas de miwebpuntocom:</h3>
                      </td>
                    </tr>
                  </table>
                </td>
                <td valign='top' width='33.333%' style='padding-top: 20px;'>
                  <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                    <tr>
                      <td style='text-align: left; padding-right: 10px;'>
                        <h3 class='heading'>$asunto</h3>
                        <h3 class='heading'>$name</h3>
                        <h3 class='heading'>$email</h3>
                        <h3 class='heading'>$phone</h3>
                        <h3 class='heading'>$message</h3>
                        <h3 class='heading'>$politica</h3>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr><!-- end: tr -->
        <tr>
          <td class='bg_light' style='text-align: center;'>
            <p><a href='index.php' style='color: rgba(0,0,0,.8);'>MiWeb.com</a></p>
          </td>
        </tr>
      </table>

    </div>
  </center>
</body>
</html>"
    ;

    $mail->AltBody = 'Este es el cuerpo en texto sin formato para clientes de correo que no son HTML';
    $mail->send();
   // echo "<script type='text/javascript'>window.location.href='http://localhost/miwebpuntocom/reveal/index.html';></script>";
    echo '<script>
        alert("Su correo ha sido enviado con éxito");
        window.location.href="http://localhost/plantilla/miwebpuntocom/index.php";
    </script>';
} catch (Exception $e) {
    echo '<script>
        alert("Error al Enviar");
        window.location.href="http://localhost/plantilla/miwebpuntocom/index.php";
    </script>';
}
}

?>