<?php
function sendSMS($contact,$message){
    // Account details
    $apiKey = urlencode('hcH6JdCDKWU-eycN6gRdfmMGozGfJCOanaTD7ITkPp');
    //  $sender = urlencode('TXTLCL');
    $message_data = rawurlencode($message); 
    $data = 'apikey=' . $apiKey . "&numbers=" . $contact . "&sender=" . 'TXTLCL' . "&message=" . $message_data;
    // Send the GET request with cURL
    $ch = curl_init('https://api.textlocal.in/send/?' . $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    //echo $response;
}
?>