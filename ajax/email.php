<?php
    
    $res = [];

    if(isset($_POST['email']))
    {
        $name    = $_POST['name'];
        $phone   = $_POST['phone'];       
        $email   = $_POST['email'];
        $message = $_POST['message'];

        $to = 'muralidharana71@gmail.com';
        $from = "From: $email";
        $body ="Name: $name\nphone: $phone\nMessage: $message";

        $headers = "From: $email\r\nReply to: $email";
        if(mail($to, $from, $subject, $body))
        {
            $res['status']  = 'Success';
            $res['remarks'] = 'Email sent successfully';
        }
        else
        {
            $res['status']  = 'Failed';
            $res['remarks'] = 'Unable to send email.';
        }
    }
    else
    {
        $res['status']  = 'Error';
        $res['remarks'] = 'Error in backend';
    }

    echo json_encode($res);
?>