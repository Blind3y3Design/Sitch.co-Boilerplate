<div id="modal">
    <div>
        <div id="large-close" class="js-modal-close">
        </div>
        <div>
            <div id="form-wrapper">
                <div class="subscription-headline">
                    <h3></h3>
                    <a class="js-modal-close modal-close" href="#closeModal" title="Close the pop-up window"></a>
                </div>
                <div class="subscription-form">
                    <p></p>
                    <form method="post" action="" class="grid" id="subscription">
                    <div class="col_12">
                        <label for="first-name">First Name</label>
                        <input type="text" name="first_name" id="first-name" class="subscription-input" placeholder="<?php echo (array_key_exists("last_name",$errors))?$errors['first_name']:"First Name*"?>" value="<?php echo $first_name ?>">
                    </div>
                    <div class="col_12">
                        <label for="last-name">Last Name</label>
                        <input type="text" name="last_name" id="last-name" class="subscription-input" placeholder ="<?php echo (array_key_exists("last_name",$errors))?$errors['last_name']:"Last Name*"?>" value="<?php echo $last_name ?>">
                    </div>
                    <div class="col_12">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="subscription-input" placeholder="<?php echo (array_key_exists("email",$errors))?$errors['email']:"Email*"?>" value="<?php echo $email ?>">
                    </div>
                    <div class="col_12">
                        <div class="col_6">
                            <label for="state">State</label>
                            <select name="state" id="state" class="subscription-input" value="<?php echo $state?>">
                                <option selected="selected"><?php echo (array_key_exists("state",$errors))?$errors['state']:"State*"?></option>
                                <option value="AL">Alabama</option> 
                                <option value="AK">Alaska</option> 
                                <option value="AZ">Arizona</option> 
                                <option value="AR">Arkansas</option> 
                                <option value="CA">California</option> 
                                <option value="CO">Colorado</option> 
                                <option value="CT">Connecticut</option> 
                                <option value="DE">Delaware</option> 
                                <option value="DC">District Of Columbia</option> 
                                <option value="FL">Florida</option> 
                                <option value="GA">Georgia</option> 
                                <option value="HI">Hawaii</option> 
                                <option value="ID">Idaho</option> 
                                <option value="IL">Illinois</option> 
                                <option value="IN">Indiana</option> 
                                <option value="IA">Iowa</option> 
                                <option value="KS">Kansas</option> 
                                <option value="KY">Kentucky</option> 
                                <option value="LA">Louisiana</option> 
                                <option value="ME">Maine</option> 
                                <option value="MD">Maryland</option> 
                                <option value="MA">Massachusetts</option> 
                                <option value="MI">Michigan</option> 
                                <option value="MN">Minnesota</option> 
                                <option value="MS">Mississippi</option> 
                                <option value="MO">Missouri</option> 
                                <option value="MT">Montana</option> 
                                <option value="NE">Nebraska</option> 
                                <option value="NV">Nevada</option> 
                                <option value="NH">New Hampshire</option> 
                                <option value="NJ">New Jersey</option> 
                                <option value="NM">New Mexico</option> 
                                <option value="NY">New York</option> 
                                <option value="NC">North Carolina</option> 
                                <option value="ND">North Dakota</option> 
                                <option value="OH">Ohio</option> 
                                <option value="OK">Oklahoma</option> 
                                <option value="OR">Oregon</option> 
                                <option value="PA">Pennsylvania</option> 
                                <option value="RI">Rhode Island</option> 
                                <option value="SC">South Carolina</option> 
                                <option value="SD">South Dakota</option> 
                                <option value="TN">Tennessee</option> 
                                <option value="TX">Texas</option> 
                                <option value="UT">Utah</option> 
                                <option value="VT">Vermont</option> 
                                <option value="VA">Virginia</option> 
                                <option value="WA">Washington</option> 
                                <option value="WV">West Virginia</option> 
                                <option value="WI">Wisconsin</option> 
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        <div class="col_6">
                            <label for="zip">Zip Code</label>
                            <input type="text" name="zip" id="zip" class="subscription-input" placeholder="<?php echo (array_key_exists("zip",$errors))?$errors['zip']:"Zip*"?>" value="<?php echo $zip ?>">
                        </div>
                    </div>
                    <div class="col_12">
                        <input type="checkbox" name="opt_in" id="opt-in" value="1">
                        <label for="opt-in">I would like to receive emails from XXXXXXXXXX</label>
                        <p class="form-privacy">
                            <a href="privacy.php">Privacy Policy</a>
                        </p>
                    </div>
                    <div class="col_12">
                        <button type="button" id="submit_button" class="dark-blue borderless">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="scripts/subscription-functions.js"></script>