<?php
$startTime = microtime(true);
$testSize = 5 * 1024 * 1024; // 5 MB
$data = str_repeat('0', $testSize);
$endTime = microtime(true);

$timeTaken = $endTime - $startTime;
$uploadSpeed = round(($testSize / 1024 / 1024) / $timeTaken, 2);

echo "<h1>Upload Speed Test</h1>";
echo "<p>Upload Speed: " . $uploadSpeed . " MB/s</p>";
?>
