<?php
function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="assets/icons/logo.svg" />' . "\n";
}
add_action('wp_head', 'favicon_link');


?>