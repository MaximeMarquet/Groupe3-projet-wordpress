<?php

if(isset($_POST['newsletter_email'])){
    $email = $_POST['newsletter_email'];
    $email = htmlentities($email);

    global $wpdb;

    $result = $wpdb->insert('wp_newsletter', ['email' => 'test'], ['%s']);

    if($result){
        echo 'Success';
    }else{
        echo 'Error';
    }
}
