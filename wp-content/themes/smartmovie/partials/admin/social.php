<?php
if ($_POST) {
    $social_options = array();

    foreach ($_POST as $key => $value) {
        $social_options[$key] = $value;
    }
    update_option('social_options', $social_options);
}
$result = get_option('social_options');
?>
<div class="wrap">
    <h1 class="wp-heading-inline">Social settings</h1>

    <form method="POST">
        <div class="form-group">
            <label for="facebook">Facebook link:</label>
            <input type="url" class="form-control" id="facebook" name="facebook" value="<?=$result['facebook']?>">
        </div>

        <div class="form-group">
            <label for="twitter">Twitter link:</label>
            <input type="url" class="form-control" id="twitter" name="twitter" value="<?=$result['twitter']?>">
        </div>

        <div class="form-group">
            <label for="instagram">Instagram link:</label>
            <input type="url" class="form-control" id="instagram" name="instagram" value="<?=$result['instagram']?>">
        </div>

        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
</div>