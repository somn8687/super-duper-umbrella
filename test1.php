<?php
$curl = curl_init();
$url = 'http://localhost/22-june-2022/test.php';
curl_setopt_array($curl, array(
 CURLOPT_URL => "http://localhost/22-june-2022/test.php",
 CURLOPT_RETURNTRANSFER => true,
 CURLOPT_TIMEOUT => 30,
 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
 CURLOPT_CUSTOMREQUEST => "GET",
 CURLOPT_HTTPHEADER => array(
   "cache-control: no-cache"
 ),
));

$response = curl_exec($curl);
$json_brand = json_decode($response, true);
print_r($json_brand);
/*$i_var=count($json_brand['data']);

 /*echo "<pre>";
print_r($data2);
echo "</pre>";*/
/*$data_variant = $data2['data'];
$data = $data2['data'];
$data_group_wise = $data;*/
?>