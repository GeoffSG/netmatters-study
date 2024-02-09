<?php
$formValid = false;
$errorMessage = '';

$db = new DatabaseController();
$formController = new ContactUsController($db);

if (isset($_SERVER['REQUEST_METHOD'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $formController->send();
            $formValid = true;
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
            echo $errorMessage;
        }
    } else {
        echo 'GET request received!';
    }
} else {
    echo 'No request received!';
}

?>

<?php if ($formValid) : ?>
    <div class="alert alert-success" role="alert">
        Your message has been sent successfully!
    </div>
<?php endif ?>

<form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <label class="required" for="name">Your Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="company">Company Name</label>
        <input type="text" name="company" id="company">
    </div>
    <div class="form-group">
        <label class="required" for="email">Your Email</label>
        <input type="text" name="email" id="email">
    </div>
    <div class="form-group">
        <label class="required" for="telephone">Your Telephone Number</label>
        <input type="text" name="telephone" id="telephone">
    </div>
    <div class="form-group">
        <label class="required" for="message">Message</label>
        <textarea name="message" id="message" cols="50" rows="10">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send an email?</textarea>
    </div>
    
    <div class="form-group form-checkbox">
        <input
        class="form-checkbox-input"
        type="checkbox"
        name="marketing"
        id="marketing"
        />
        <label class="form-checkbox-label" for="marketing">
        <span class="media-left">
            <span class="form-checkbox-button">
            <span class="form-checkbox-icon"></span>
            </span>
        </span>
        <span class="form-checkbox-label-text">
            Please tick this box if you wish to receive marketing
            information from us. Please see our
            <a href="#">Privacy Policy</a> for more information on how
            we keep your data safe.
        </span>
        </label>
    </div>
    <p class="recaptcha">This site is protected by reCAPTCHA and the Google <a href="">Privacy Policy</a> and <a href="">Terms of Service</a> apply.</p>
    <div class="group">
        <button class="btn btn-dark" type="submit">Send Enquiry</button>
        <small class="required-notice"><span>*</span> Fields Required</small>
    </div>
</form>