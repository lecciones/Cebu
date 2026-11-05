<?php

echo "<h2>PHP cURL Diagnostic</h2>";

echo "<p>PHP Version: " . PHP_VERSION . "</p>";

echo "<p>Loaded php.ini: "
    . (php_ini_loaded_file() ?: "Not found")
    . "</p>";

echo "<p>cURL Extension: "
    . (extension_loaded('curl') ? "ENABLED" : "DISABLED")
    . "</p>";

echo "<p>curl_init(): "
    . (function_exists('curl_init') ? "AVAILABLE" : "NOT AVAILABLE")
    . "</p>";

?>