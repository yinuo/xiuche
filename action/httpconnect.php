<?php
function send_post($post_data) {
 
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-type:application/x-www-form-urlencoded',
            'content' => $post_data,
            'timeout' => 15 * 60 
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents("http://192.168.4.114:8888", false, $context);
 
    return $result;
}
?>
