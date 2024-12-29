#!/opt/homebrew/opt/php@8.3/bin/php
<?php

$key = "Server_Version";
$value = "1.1.2.3";
$iterations = 100000000;

// Option 1
$start = microtime(true);
for ($i = 0; $i < $iterations; $i++) {
    $config[strtolower($key)] = $value;
}
$end = microtime(true);
echo "Option 1 Time: " . ($end - $start) . " seconds<br />\n";

// Option 2
$start = microtime(true);
for ($i = 0; $i < $iterations; $i++) {
    $keyLower = strtolower($key);
    $config[$keyLower] = $value;
}
$end = microtime(true);
echo "Option 2 Time: " . ($end - $start) . " seconds<br />\n";

?>