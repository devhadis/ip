<?php
$host = '8.8.8.8'; // Google DNS para o teste de ping
exec("ping -c 4 " . escapeshellarg($host), $output, $status);

echo "<h1>Ping Results</h1>";
if ($status == 0) {
    echo "<pre>";
    foreach ($output as $line) {
        echo $line . "\n";
    }
    echo "</pre>";
} else {
    echo "<p>Ping failed.</p>";
}
?>

