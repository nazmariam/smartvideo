<?php
$contacts = get_option('general_options');
if ($contacts) {
    foreach ($contacts as $key => $value) {
//    	var_dump($value);
        if ($value) {
            switch ($key){
                case 'tel':
                    echo '<div><a class="contact ' . $key . '" href="tel:' . $value . '">' . $value . '</a></div>';
                    break;
                case 'email':
                    echo '<div><a class="contact ' . $key . '" href="skype:' . $value . '">' . $value . '</a></div>';
                    break;
                case 'address':
                    echo '<div><span class="contact ' . $key . '" href="tel:' . $value . '">' . $value . '</span></div>';
                    break;
            }
        }
    }
}