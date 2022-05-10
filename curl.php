<?php 
// create a new cURL resource
$ch = curl_init();
//setting option
curl_setopt($ch, CURLOPT_URL,"https://www.php.net/manual/en/language.oop5.php");
//copy the resource
$cpy=curl_copy_handle($ch);
//execution
curl_exec($ch);
//error checking 
if(curl_errno($ch))
{
    $info = curl_getinfo($ch);
    echo "error".curl_error($ch);
}
//reset
curl_reset($ch);
//close
curl_close($ch);
?>
