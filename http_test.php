<?php
$url = "https://www.example.com"; // URL de teste
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);

$response = curl_exec($ch);

echo "<h1>HTTP Test</h1>";

if ($response === false) {
    echo "<p>Error: " . curl_error($ch) . "</p>";
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "<p>HTTP Status Code: " . $httpCode . "</p>";
    echo "<pre>";
    echo substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    echo "</pre>";
}

curl_close($ch);
?>
