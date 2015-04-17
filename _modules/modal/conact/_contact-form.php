<div id="form-wrapper">
    <div class="contact-headline">
        <h3></h3>
        <a class="js-modal-close modal-close" href="#closeModal" title="Close the pop-up window"></a>
    </div>
    <div class="contact-form">
        <p></p>
        <form method="post" action="" class="grid" id="contact">
        <div class="col_12">
            <label for="first-name">First Name</label>
            <input type="text" name="first_name" id="first-name" class="contact-input" placeholder="<?php echo (array_key_exists("last_name",$errors))?$errors['first_name']:"First Name*"?>" value="<?php echo $first_name ?>">
        </div>
        <div class="col_12">
            <label for="last-name">Last Name</label>
            <input type="text" name="last_name" id="last-name" class="contact-input" placeholder ="<?php echo (array_key_exists("last_name",$errors))?$errors['last_name']:"Last Name*"?>" value="<?php echo $last_name ?>">
        </div>
        <div class="col_12">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="contact-input" placeholder="<?php echo (array_key_exists("email",$errors))?$errors['email']:"Email*"?>" value="<?php echo $email ?>">
        </div>
        <div class="col_12">
            <label for="message">Message</label>
            <input type="text" name="message" id="message" class="contact-input" placeholder="<?php echo (array_key_exists("message",$errors))?$errors['message']:"message*"?>" value="<?php echo $message ?>">
        </div>
        <div class="col_12">
            <button type="button" id="submit_button" class="dark-blue borderless">Submit</button>
        </div>
        </form>
    </div>
</div>

<!-- Include functions required for module -->
<!-- <script src="scripts/contact-functions.js"></script> -->

<script type="text/javascript">

(function() {
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'scripts/modules/contact-functions.js';
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
})();

</script>