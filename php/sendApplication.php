<?php

include_once "configuration.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/PHPMailer/src/PHPMailer.php';
require '../vendor/PHPMailer/src/SMTP.php';
require '../vendor/PHPMailer/src/Exception.php';



$message = "";
$isMailSent = false;

if($_SERVER["REQUEST_METHOD"] === "POST") {

    // HIDDEN BOT CHECKER
    $botChecker = htmlspecialchars($_POST['bot-checker'], ENT_QUOTES, 'UTF-8');



    // APPLICATION DATA VALUE
    // action type
    if (isset($_POST["camp_seminar"])) {
        $actionType = htmlspecialchars($_POST['camp_seminar'], ENT_QUOTES, 'UTF-8');
    } else {
        $actionType = "";
    }

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
    if (isset($_POST["experiences"])) {
        $experiences = htmlspecialchars($_POST['experiences'], ENT_QUOTES, 'UTF-8');
    } else {
        $experiences = "";
    }

    $experiencesInfo = htmlspecialchars($_POST['experiences-info'], ENT_QUOTES, 'UTF-8');

    // health condition
    $health = htmlspecialchars($_POST['health'], ENT_QUOTES, 'UTF-8');

    // vegetarian option
    if (isset($_POST["vegetarian"])) {
        $vegetarian = htmlspecialchars($_POST['vegetarian'], ENT_QUOTES, 'UTF-8');
    } else {
        $vegetarian = "";
    }



    // RECIPIENT DATA VALUE
    // recipient
    $recipient = "klarahemplova@gmail.com";

    // subject
    $subject = "PŘIHLÁŠKA: $name";

    // email content
    $emailContent = "Druh akce: $actionType";



    // VALIDATION
    $errors = [];

    if($actionType === "") {
        $errors[] = "Nebyl vybrán druh akce.";
    }

    if($actionType === "víkendový seminář" && $seminarDate === "") {
        $errors[] = "Nebylo vybráno datum semináře.";
    }

    if($name === "") {
        $errors[] = "Nebylo vyplněno datum účastníka.";
    }

    if($birthDate === "") {
        $errors[] = "Nebylo vyplněno datum narození účastníka.";
    }

    if($street === "" || $city === "" || $zipCode === "") {
        $errors[] = "Nebyla vyplněna celá adresa účastníka.";
    }

    if($phoneParent === "") {
        $errors[] = "Nebylo vyplněno telefonní číslo zákonného zástupce.";
    }

    if($email === "") {
        $errors[] = "Nebyla vyplněna e-mailová adresa.";
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "E-mail nebyl ve správném formátu.";
    }
    
    if($experiences === "") {
        $errors[] = "Nebyl vybrán stupeň pokročilosti účastníka.";
    }



    // PHP MAILER

    if($botChecker === "" && empty($errors)) {

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
            $isMailSent = true;
        }
        catch (Exception $e) {
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


<body class="<?php echo ($isMailSent) ? "camp-color" : "payment-color" ?>">

    <!------- HEADER -------->
    <?php include_once "header.php"; ?>

    <main id="main" class="container application-sent">
        <div class="success-message <?php echo ($isMailSent) ? "green" : "red" ?>"><?php echo $message ?></div>

        <button onclick="<?php echo ($isMailSent) ? "window.location.href='../index.php'" : "history.back()" ?>">
            <?php echo ($isMailSent) ? "Zpět na hlavní stránku" : "Zpět na přihlášku" ?>
        </button>
    </main>

    
    <!------- FOOTER -------->
    <?php include_once "footer.php"; ?>

</body>
</html>