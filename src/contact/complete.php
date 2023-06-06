<?php

/*
 * 日本語対策
 */
mb_language('japanese');
mb_internal_encoding('UTF-8');

function data_htmlspecialchars($data)
{
    if (is_array($data)) {
        return array_map('data_htmlspecialchars', $data);
    } else {
        return htmlspecialchars($data, ENT_QUOTES);
    }
}

$path = realpath(dirname(__FILE__).'').'/../';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$secretKey = 'シークレットキー';
$captchaResponse = $_POST['g-recaptcha-response'];

// APIリクエスト
$verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$captchaResponse}");

// APIレスポンス確認
$responseData = json_decode($verifyResponse);
// if ($responseData->success) {

// PHPMailerを配置するパスを自身の環境に合わせて修正
require $path.'contact/jp_send_mail.php';
  
$datas = $_POST;
$datas['email'] = 'ys@nuxil.jp';

$post_message = '--------------------------------------------------------------

  
--------------------------------------------------------------
';


# ユーザへ通知
$message = '';


jp_send_mail([
  'from'    => 'ys@nuxil.jp',
  'to'      => $datas['email'],
  'subject' => 'お問い合わせありがとうございます。',
  'body'    => $message
]);


# 管理者へ通知
$message = 'ホームページからお問い合わせがありました。

'.$post_message;

jp_send_mail([
  'from'    => 'ys@nuxil.jp',
  'to'      => 'ys@nuxil.jp',
  'subject' => 'ホームページからお問い合わせがありました。',
  'body'    => $message
]);


    include $path.'/app_config.php';
    include $path.'/libs/meta.php'; ?>
</head>

<body class="contact-body">


<!-- Header
======================================================================-->
<?php include $path.'/libs/header.php'; ?>


<main>

</main>
<!-- Footer
======================================================================-->
<?php include $path.'/libs/footer.php'; ?>



<!-- Scripts
======================================================================-->
<?php include $path.'/libs/scripts.php'; ?>
</body>
</html>
<?php
// } else {
//         echo '不正なアクセスです。';
//     }
