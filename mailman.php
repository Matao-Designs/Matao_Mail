<?php
    require_once './config/config.php';
    $MAILMAN_ID = $_POST['postman_id'];
    $MAILMAN_SECTION = $_POST['postman_section'];
    if($MAILMAN_ID == $ID_NUMBER && $MAILMAN_SECTION == $DISTRICT_NUMBER) {
        $to = $_POST['mail_to'];
        $subject = $_POST['mail_subject'];
        $headers = 'From: ' . $_POST['mail_headers'];
        $message = $_POST['mail_message'];
        mail($to, $subject, $message, $headers);
    }
?>