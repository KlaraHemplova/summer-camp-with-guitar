<?php

include_once "configuration.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';
require '../vendor/PHPMailer/src/Exception.php';



if(isset($_POST["submit"])) {

    // HIDDEN BOT CHECKER
    $botChecker = htmlspecialchars($_POST['bot-checker'], ENT_QUOTES, 'UTF-8');



    // APPLICATION DATA VALUE
    // action type
    $actionType = htmlspecialchars($_POST['camp_seminar'], ENT_QUOTES, 'UTF-8');
    $seminarDate = htmlspecialchars($_POST['seminar-date'], ENT_QUOTES, 'UTF-8');

    // participant
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $birthDate = htmlspecialchars($_POST['birth-date'], ENT_QUOTES, 'UTF-8');

    // adress
    $street = htmlspecialchars($_POST['street'], ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars($_POST['city'], ENT_QUOTES, 'UTF-8');
    $zipCode = htmlspecialchars($_POST['zip-code'], ENT_QUOTES, 'UTF-8');

    // contact
    $phoneParticipant = htmlspecialchars($_POST['phone-participant'], ENT_QUOTES, 'UTF-8');
    $phoneParent = htmlspecialchars($_POST['phone-parent'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

    // participant experiences
    $experiences = htmlspecialchars($_POST['experiences'], ENT_QUOTES, 'UTF-8');
    $experiencesInfo = htmlspecialchars($_POST['experiences-info'], ENT_QUOTES, 'UTF-8');

    // health condition
    $health = htmlspecialchars($_POST['health'], ENT_QUOTES, 'UTF-8');

    // vegetarian option
    $vegetarian = htmlspecialchars($_POST['vegetarian'], ENT_QUOTES, 'UTF-8');



    // RECIPIENT DATA VALUE
    // recipient
    $recipient = "klarahemplova@gmail.com";

    // subject
    $subject = "PŘIHLÁŠKA: $name";

    // email content
    $emailContent = "Druh akce: $actionType";



    // PHP MAILER
    $message = "";

    if($botChecker === "") {

        $mail = new PHPMailer(true);

        try {
            // server settings
            $mail->isSMTP();
            $mail->Host       = $SMTPhost;
            $mail->SMTPAuth   = true;
            $mail->Username   = $SMTPusername;
            $mail->Password   = $SMTPpassword;
            $mail->SMTPSecure = "ssl";
            $mail->Port       = 465;
            $mail->CharSet    = "UTF-8";
        
            // recipient
            $mail->setFrom($SMTPusername, 'Letní tábor s kytarou');
            $mail->addAddress($recipient, 'Klára Hemplová');
            $mail->addCC($email);
            $mail->addReplyTo($email);
        
            //Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $emailContent;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $mail->send();
            $message = "<h2>Vaše přihláška byla odeslána.</h2>";

        } catch (Exception $e) {
            $message = "<h2>Něco se pokazilo!</h2><p>Error: {$mail->ErrorInfo}</p>";
        }
    } 
    else {
        $message = "<h2>Něco se pokazilo!</h2>";
    }

}
?>




<!DOCTYPE html>
<html lang="cs">

<!------- HEAD -------->
<?php include_once "head.php"; ?>


<body class="application-color">

    <div><?php echo $message ?></div>

    
</body>
</html>