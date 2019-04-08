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
    <h1 class="wp-heading-inline">Social settings</h1>

    <form method="POST">
        <div class="form-group">
            <label for="tel">Telephone:</label>
            <input type="tel" class="form-control" id="tel" name="tel" value="<?=$result['tel']?>">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=$result['email']?>">
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="<?=$result['address']?>">
        </div>

        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
</div>