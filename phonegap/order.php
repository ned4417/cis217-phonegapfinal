<?php
/**
 * Created by JetBrains PhpStorm.
 * User: edwardt6926
 * Date: 5/21/13
 * Time: 9:49 AM
 * To change this template use File | Settings | File Templates.
 */
if (isset($_POST['place_order']))
{
    $to      = 'ned4417@gmail.com';
    $subject = 'The Order';
    $message = 'hello';
    $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Order Placed.';
}



?>
