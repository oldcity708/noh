<?php 
    $url = $_SERVER['REQUEST_URI'];
    if (strpos($url, 'en') !== false) {
        $lang = 'EN';
    } else {
        $lang = 'JP';
    };

    $url = parse_url($url);
    $url_section = explode('/', $url['path']);
    $count = count($url_section) - 2;
    $last = $url_section[$count];
    // echo $last;
    // print_r($url_section);
    // $last = end($url['sections']);
    // echo $last;

    // $lastSlashPosition = strrpos($url, '/');
    // $secondLastSlashPosition = strrpos($url, '/', $lastSlashPosition - strlen($url) - 1);
    // $desiredString = '';
    // if ($lastSlashPosition !== false && $secondLastSlashPosition !== false && $secondLastSlashPosition < $lastSlashPosition) {
    //     $desiredString = substr($url, $secondLastSlashPosition + 1, $lastSlashPosition - $secondLastSlashPosition - 1);
    // }
    // echo $desiredString;
?>

<header class="header">
    <div class="inner">
        <a href="./" class="header__logo">
            <img src="<?php echo APP_URL; ?>images/common/logo_noh_01.svg" alt="">
        </a>
        <div class="header__right">
            <ul class="sns-list">
                <li>
                    <a href="https://twitter.com/HKSK_studios" target="_blank">
                        <img src="<?php echo APP_URL; ?>images/common/icon_twitter.svg" alt="twitter">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/hksk_studios/" target="_blank">
                        <img src="<?php echo APP_URL; ?>images/common/icon_instagram.svg" alt="instagram">
                    </a>
                </li>
                <!-- <li>
                    <a href="">
                        <img src="<?php echo APP_URL; ?>images/common/icon_discord.svg" alt="discord">
                    </a>
                </li> -->
            </ul>
            <div class="lang">
                <span><?php echo $lang; ?></span>
                <ul class="lang__list">
                    <li class="<?php if($lang == 'JP'){echo 'disable';}?>">
                        <a href="<?php echo APP_URL; ?>">JP</a>
                    </li>
                    <li class="<?php if($lang == 'EN'){echo 'disable';}?>">
                        <a href="<?php echo APP_URL; ?>en/">EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
