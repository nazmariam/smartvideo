<?php
if ($_POST) {
    $general_options = array();

    foreach ($_POST as $key => $value) {
        $general_options[$key] = $value;
    }
    if (update_option('general_options', $general_options)){
        echo '<div id="message" class="updated notice notice-success is-dismissible"><p>Settings updated.</p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>';
    }
}
$result = get_option('general_options');
?>
    <div class="wrap">
        <h1 class="wp-heading-inline">General theme settings</h1>

        <form method="POST">
            <fieldset class="lang_box">
                <legend>Google reCaptcha credentials</legend>

                <div class="form-group">
                    <label for="recaptcha_sitekey">reCaptcha Sitekey:</label>
                    <input type="text" class="form-control" id="recaptcha_sitekey" name="recaptcha_sitekey" value="<?=$result['recaptcha_sitekey']?>">
                </div>

                <div class="form-group">
                    <label for="recaptcha_secret">reCaptcha Secret:</label>
                    <input type="password" class="form-control" id="recaptcha_secret" name="recaptcha_secret" value="<?=$result['recaptcha_secret']?>">
                </div>
            </fieldset>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
    </div>