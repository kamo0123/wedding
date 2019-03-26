<?php
// Qdmailを使ったメール送信
require_once "libs/qd/qdmail.php";
require_once "libs/qd/qdsmtp.php";

// SMTPの設定
$param = array(
    "host"    =>"w1.sim.zdrv.com",
    "port"    =>25,
    "from"    =>"zd3F05@sim.zdrv.com",
    "protocol"=>"SMTP"
);

// メールの送信
$mail = new Qdmail();
$mail ->from("zd3F05@sim.zdrv.com");
$mail ->to("zd3F05@sim.zdrv.com");
$mail ->subject("PHPからメール送信のテスト");
$mail ->text("こんにちは！このメールはPHPのプログラムから送信しています。");
$mail ->smtp(TRUE);
$mail ->smtpServer($param);
$flag = $mail->send();

if ($flag == TURE) {
    echo "メールを送信しました。";
}
else{
    echo"メールの送信に失敗しました。";
}

?>