 <?php
  

function send_LINE($msg){
 $access_token = 'NFW1D7t3bPXrO0Zq2CbDcnUiAy1y2+BuMrfNbSzygHXQsDA/RR4oK8kPNkFMZ+G2YG15uxVeJfVJ6Rvdv+ZMI6iRCDNb9xiTLTqtC7WWONwZ4c905w6DvFF149KuMREGTzvwsE7iW7/iNNxs6GvnoAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uac725e9302fb87d93d175cb633a2fa98',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
