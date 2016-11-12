<?php
include ("class.phpmailer.php");
include ("class.smtp.php");
function send_gmail($from_email, $from_email_pass, $to_email, $to_name, $subject, $content, $from_name=''){
            $mail = new PHPMailer();
            $mail->IsSMTP(); // set mailer to use SMTP
            $mail->Host = "smtp.gmail.com"; // specify main and backup server
            $mail->Port = 465; // set the port to use
            $mail->SMTPAuth = true; // turn on SMTP authentication
            $mail->SMTPSecure = 'ssl';
            $mail->Username = $from_email; // your SMTP username or your gmail username
            $mail->Password = $from_email_pass; // your SMTP password or your gmail password
            $mail->From = $from_email;
            $mail->FromName = $from_name; // Name to indicate where the email came from when the recepient received
            $mail->AddAddress($to_email,$to_name);
            $mail->AddReplyTo($from_email,$from_name);
            $mail->WordWrap = 50; // set word wrap
            $mail->IsHTML(true); // send as HTML
            $mail->Subject = $subject;
            $mail->Body = $content; //HTML Body
            return $mail->Send();
}
?>