<?php
$path = realpath(dirname(__FILE__).'/../');
include $path.'/app_config.php';
include $path.'/libs/meta.php';

?>
</head>

<body class="top">


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
<!-- <script src="https://www.google.com/recaptcha/api.js?render=サイトキー"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('サイトキー', {action: 'homepage'}).then(function(token) {
        var recaptchaResponse = document.getElementById('g-recaptcha-response');
        recaptchaResponse.value = token;
    });
});
</script> -->
</body>
</html>
