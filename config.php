<?php

// Detect environment
if ($_SERVER['HTTP_HOST'] == 'localhost') {

    // XAMPP MODE
    define('DB_ENABLED', true);

} else {

    // Railway MODE (UI ONLY)
    define('DB_ENABLED', false);

}

?>