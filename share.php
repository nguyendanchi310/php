<?php
 
/* == ID tài khoản muốn tăng share == */
$user = 'nguyendanchi3110';
/* == Token tài khoản chứa page == */
$token = EAAAAAYsX7TsBADnMwNxmbZClwJUOcX3kri8mV1E29CWC1CX34AvrbSJ2k1XyZAFhsz94wZCKjxqoCrvC7WH8QzdgMkNXMiuPCk86RE0IKb4Dsr3ggDt8YzSpMUwoMhxPg7N6RDwj0zNHOWGzWMG4HkGoFaPmLa1hR0Qf0ySFmUCoYjZAXuP33dNjMaONppR8I2yM4Huet9ZCFOjnDcFsg
$accounts = json_decode(cURL('https://graph.facebook.com/me/accounts?access_token=' . $token),true);
 
$feed = json_decode(cURL('https://graph.facebook.com/' . $user . '/feed?access_token='.$token.'&limit=1'),true);
 
foreach ($accounts['data'] as $data) {
    //echo $data['access_token'] . '<br/>';
    echo cURL('https://graph.facebook.com/' . $feed['data'][0]['id'] . '/sharedposts?method=post&access_token='.$data['access_token']) . '<br/><br/><br/>';
}
 
/* == Hàm get == */
function cURL ($url) {
    $data = curl_init();
    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($data, CURLOPT_URL, $url);
    $hasil = curl_exec($data);
    curl_close($data);
    return $hasil;
}
 
?>
 
<meta http-equiv="refresh" content="0">
