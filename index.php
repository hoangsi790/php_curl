<?php
$curl = curl_init('http://hoangsi.com/feed/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
echo $result;
?>