<?php
if(isset($_POST['email'])){
    $email=$_POST['email'];

    $four_digit_code = random_int(100000,999999);

    $MailBody = "<div>Your otp code is $four_digit_code</div>";

    $subject = "Twitter creation";
    $from = "pramithapemmi@gmail.com";
    $to = $email;
    $mailForm = "TwitterAccount code";
    $headers = 'From: ' . $mailForm . "\r\n";
    $headers .= 'Reply-To: ' . $to . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    echo $four_digit_code; 

    if($email != ''){
        mail($to, $subject, $MailBody, $headers);
    }
}


    // $subject="Twiter creation";
    // $from="tweet@gmail.com";
    // $to=$email;
    // $mailForm="TwitterAccount code ";
    // $headers='From: '.$mailForm . "\r\n";
    // $headers .='Reply-To: '.$to ."\r\n";
    // $headers .='MIME-Version: 1.0'."\r\n";
    // $headers .= 'Content-type:text/html;charset=ios-8859-1'."\r\n".'X-Mailer: PHP/'.phpversion();

?>