<?php
$ip = $_SERVER['REMOTE_ADDR'];
$dns_records = dns_get_record($ip);

echo "<h1>DNS Information</h1>";
if ($dns_records) {
    echo "<pre>";
    print_r($dns_records);
    echo "</pre>";
} else {
    echo "<p>No DNS records found for IP: " . $ip . "</p>";
}
?>
