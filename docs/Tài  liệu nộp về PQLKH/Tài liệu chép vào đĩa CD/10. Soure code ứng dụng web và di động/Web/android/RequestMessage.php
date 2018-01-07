 <?php
    $url = "https://fcm.googleapis.com/fcm/send";
    $topic = "/topics/matchday";
    $serverKey = 'AAAAYRUVwuU:APA91bESgZlauF5GUD7N_zlW1FphPu6qv2Btz6yrw_aseCoKygSG8PQmOlxpQ5iSFaiwdjFpKKC_8s4aBpL1AKc52GVVfOM5TscIWaOjzUORU_9aGhkpSGRdiowb-lkjVZ3Bstn_EPik';
    $title = "Đại học Cần Thơ";
    $body = "Đã có lịch đánh giá điểm rèn luyện!";
    $notification = array('title' => $title , 'body' => $body);
    $arrayToSend = array('to' => $topic, 'notification' => $notification,'priority'=>'high');
    $json = json_encode($arrayToSend);
    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: key='. $serverKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
    //Send the request
    $response = curl_exec($ch);
    //Close request
    if ($response === FALSE) {
    die('FCM Send Error: ' . curl_error($ch));
    }
    curl_close($ch);
?>