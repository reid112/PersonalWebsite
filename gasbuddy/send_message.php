<?php

if ( isset( $_POST['submit'] ) ) {

    $PASSWORD = "";

    $url = "api.rjreid.ca/gasbuddy/SendMessage.php";

    $name = $_POST['name'];
    $secret = $_POST['secret'];
    $message = $_POST['message'];

    if ($secret == $PASSWORD) {
        $curl = curl_init();
        $post_data = array(
                'name' => $name,
                'message' => $message
            );

        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        curl_close($curl);
    }

    header("Location: /gasbuddy/sendmessage.html");
}

?>