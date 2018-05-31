<?php
require 'mail.php';
echo '
    <!doctype html>
    <html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../static/css/common.css" rel="stylesheet" type="text/css">
    <title>NEHSCSA-Mail</title>
    </head>
    <body>
    ';

$Nname = $_POST['Nname'];
$Nmail = $_POST['Nmail'];
$Nmessage = $_POST['Nmessage'];

$mail = new PHPMailer;
$mail->SMTPDebug = 0;                           // Disable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;       // Enable SMTP authentication
$mail->Username = 'nehscsa@gmail.com'; // SMTP username
$mail->Password = 'jbesbuonrmhdpqkv';             // SMTP password
$mail->SMTPSecure = 'tls';      // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;              // TCP port to connect to
$mail->CharSet = "utf-8";
$mail->setFrom('nehscsa@gmal.com', 'Contact');
$mail->addAddress('nehscsa@gmail.com');
$mail->isHTML(true);

$mail->Subject = '來自'.$Nmail.'留言';
$mail->Body    = '寄件者：'.$Nmail.'<br />內容：'.$Nmessage;
$mail->AltBody = 'NEHSCSA';
?>

<script>
<?php
if(!$mail->send()){
echo "alert('Email 發送失敗！');location.href='./';";
} else {
echo "alert('Email 發送成功！');location.href='./';";
}
?>
</script>

<?php echo '</body>'; ?>
