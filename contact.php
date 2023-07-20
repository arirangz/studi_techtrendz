<?php 
require_once __DIR__."/lib/config.php";
require_once __DIR__."/templates/header.php"; 
?>


<?php 
    $messages = [];
    $errors = [];

    if (isset($_POST["sendContact"])) {
        if (!isset($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'adresse e-mail n'est pas valide";
        }
        if (!isset($_POST["message"]) || $_POST["message"] == "") {
            $errors[] = "Le message ne doit pas être vide";
        }
        if (!$errors) {
            $to = _APP_EMAIL_;
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $subject = "[TechTrendz] Formulaire de contact";
            $emailContent = "Email : $email<br>"
                        ."Message : <br>".nl2br(htmlentities($_POST["message"]));
            $headers = "From: "._APP_EMAIL_ . "\r\n" .
                        "MIME-Version: 1.0" . "\r\n" .
                        "Content-type: text/html; charset=utf-8";
    
    
    
            if(mail($to, $subject, $emailContent, $headers)) {
                $messages[] = "Votre email a bien été envoyé";
    
            } else {
                $errors[] = "Une erreur s'est produite durant l'envoi";
            }
        }

    }

?>

<h1>Contact</h1>

<?php foreach($messages as $message) { ?>
    <div class="alert alert-success">
        <?=$message; ?>
    </div>
<?php } ?>

<?php foreach($errors as $error) { ?>
    <div class="alert alert-success">
        <?=$error; ?>
    </div>
<?php } ?>
<form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>

        <input type="submit" name="sendContact" class="btn btn-primary" value="Envoyer">

    </form>
<?php require_once __DIR__."/templates/footer.php"; ?>

