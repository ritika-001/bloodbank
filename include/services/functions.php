<?php
require 'config.php';
function send_mail($email,$name,$subject,$body){
    $root='/xampp/htdocs/bloodbank';
    $admin_name='ritika';
    $admin_email='ritikamuk0445@gmail.com';
    $admin_password='ritumakk1027';
	require_once($root.'/PHPMailer/src/PHPMailer.php');
	require_once($root.'/PHPMailer/src/Exception.php');
	require_once($root.'/PHPMailer/src/SMTP.php');
	$mail=new PHPMailer\PHPMailer\PHPMailer();
    if(!$mail->validateAddress($email)){
    	echo 'Invalid Email Address : '.$email;
        return;
    }
    $mail->IsSMTP();
    //$mail->SMTPDebug = 3;
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    // $mail->Port = 465;
    // $mail->SMTPSecure = 'ssl';
    $mail->Username = $admin_email;
    $mail->Password = $admin_password;
    $mail->setFrom($admin_email,$admin_name);
    $mail->AddReplyTo($admin_email,$admin_name);
    $mail->addAddress($email,$name);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;
    if(!$mail->send()){
        return 'Mailer Error: ' . $mail->ErrorInfo;
    }else{
        return 'success';
    }
}
function random_string($n,$s='aA1'){
    $a='';
    if(strpos($s,'a')!==false){
        $a.='abcdefghijklmnopqrstuvwxyz';
    }
    if(strpos($s,'A')!==false){
        $a.='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if(strpos($s,'1')!==false){
        $a.='0123456789';
    }
    if(strpos($s,'@')!==false){
        $a.='@#$%^?&.,\'";:+-*/';
    }
    $r='';
    for ($i=0;$i<$n;$i++) { 
        $r.=$a[rand(0,strlen($a)-1)];
    }
    return $r;
}
?>