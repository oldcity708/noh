<?php 
    // $path_arr = explode('/', $SERVER['REQUEST_URI'];
    // $path_arr = array_reverse($path_arr);
    // $second_dir = $path_arr[1];
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
                <span>JP</span>
                <ul class="lang__list">
                    <li class="disable">
                        <a href="<?php echo APP_URL; ?>">JP</a>
                    </li>
                    <li>
                        <a href="<?php echo APP_URL; ?>en/">EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
