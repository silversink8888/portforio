<?php
// 入力内容の取得・変数に格納

$name = '';
$to = '';
$subject = '';
$message = '';
$portforio_name = '';
$portforio_from = '';
$mail_message = '';

$name    = $_POST['name'];     // 氏名
$to        = $_POST['email'];       // メールアドレス
$subject = $_POST['subject'];  // 件名
$message = $_POST['message'];  // 本文

$portforio_name = 'ポートフォリオ用'; // ポートフォリオ用
$portforio_from  = 'silva21.ts8@gmail.com'; // ポートフォリオ用送信先メールアドレス


//メール文
$mail_message =  '---------------------------------' . "\r\n" ;
$mail_message .=  '名前 : ' . $name . "\r\n";
$mail_message .=  'メール : ' . $to . "\r\n";
$mail_message .=  '件名 : ' . $subject . "\r\n";
$mail_message .=  '本文 : ' . $message . "\r\n";
$mail_message .=  '---------------------------------' . "\r\n" ;

// メール日本語対応
mb_language("japanese");
mb_internal_encoding("UTF-8");

// PHPMailer クラスをネーム空間にインポート
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Composer の autoloader をロード
require 'vendor/autoload.php';

// インスタンス生成
$mail = new PHPMailer(true);

try {
    // SMTPの設定
    $mail->isSMTP();                                          // SMTP 利用
    $mail->Host           = 'smtp.gmail.com';             // SMTP サーバー(Gmail の場合これ)
    $mail->SMTPAuth   = true;                             // SMTP認証を有効にする
    $mail->Username    = 'silverworkers@gmail.com'; // ユーザ名 (Gmail ならメールアドレス)
    $mail->Password    = 'gnddkpitmasdhrcv';      // 2段階認証　パスワード
    $mail->SMTPSecure = 'tls';                          // 暗号化通信 (Gmail では使えます)
    $mail->Port           = 587;                          // TCP ポート (TLS の場合 587)

    // メール本体
    $mail->setFrom('XXXXX@gmail.com', 'test');  // 送信元メールアドレスと名前
    $mail->addAddress($portforio_from, mb_encode_mimeheader($portforio_name, 'ISO-2022-JP'));  // 送信元メールアドレスと名前
    $mail->Subject = mb_encode_mimeheader($subject, 'ISO-2022-JP');  // 件名
    $mail->Body    = mb_convert_encoding($mail_message, "JIS","UTF-8");  // 本文

// 送信
    $mail->send();
    echo 'Send completely !';
} catch (Exception $e) {
    echo "Send NG: {$mail->ErrorInfo}";
}
?>