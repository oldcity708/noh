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


  <div class="mv">
    <div class="inner">
      <div class="mv__text">
        <img src="../images/top/mv_catch.svg" alt="">   
      </div>
      <span class="mv__scroll">SCROLL</span>
      <!-- <span class="mv__left">（能）</span> -->
    </div>
  </div>


  <div id="cursor"></div>

  <div class="movie">
    <div class="inner">
      <div class="movie__movie">
        <video autoplay="" muted="muted" playsinline="playsinline" loop="loop">
          <source src="../movie/movie_tmb.mp4" type="video/mp4">
        </video>
        <div class="movie__movie__play sp">
          <img src="../images/common/btn_play_sp.svg" alt="">
        </div>
      </div>
    </div>
    <div class="movie__modal">
      <div class="movie__modal__bg"></div>
      <div class="movie__modal__youtube">
        <div id="player"></div>
      </div>
      <button class="close">
        <img src="../images/common/btn_close.png" alt="">
      </button>    
    </div>
  </div>


  <section class="technology">
    <div class="inner">
      <div class="technology__read">
        <div class="draw-svgs">
          <svg xmlns="http://www.w3.org/2000/svg" width="285.387" height="246.17" viewBox="0 0 285.387 246.17"><path id="path01" data-name="path01" d="M.5,3.915v244.67H39.845V56.894h8.781L231.8,248.43l.147.155h52.936V3.415H245.542V195.106h-8.781L53.583,3.57l-.148-.154h-.214Z" transform="translate(0 -2.915)" fill="none" stroke="#fcfaf2" stroke-width="1" opacity="0.25" style="visibility: visible; stroke-dashoffset: 0; stroke-dasharray: none;"></path></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="325.193" height="252" viewBox="0 0 325.193 252"><path id="path02" data-name="path02" d="M553.555.5H537.487c-43.533,0-82.264,10.769-110.126,31.073s-44.85,50.163-44.85,88.232V132.2c0,38.8,16.972,68.646,44.852,88.78C455.226,241.1,493.957,251.5,537.487,251.5h16.068c42.983,0,81.258-10.4,108.8-30.526,27.56-20.136,44.347-49.985,44.347-88.779v-12.39c0-38.067-16.789-67.915-44.345-88.231S596.541.5,553.555.5ZM424.778,119.805c0-26.806,11.424-47.609,31.2-61.729,19.791-14.133,47.98-21.591,81.512-21.591h14.607c33.349,0,61.538,7.457,81.376,21.591C653.288,72.2,664.8,93,664.8,119.805V132.2c0,27.353-11.517,48.155-31.332,62.137-19.836,14-48.024,21.183-81.377,21.183H537.487c-33.536,0-61.724-7.186-81.514-21.182C436.2,180.351,424.778,159.55,424.778,132.2Z" transform="translate(-382.011)" fill="none" stroke="#fcfaf2" stroke-width="1" opacity="0.25" style="visibility: visible; stroke-dashoffset: 0; stroke-dasharray: none;"></path></svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="278.083" height="246.169" viewBox="0 0 278.083 246.169"><path id="path03" data-name="path03" d="M804.917,3.415h-.5v245.17h41.171V141.077H1040.33V248.585h41.17V3.415h-41.17V107.278H845.588V3.415H804.917Z" transform="translate(-803.917 -2.916)" fill="none" stroke="#fcfaf2" stroke-width="1" opacity="0.25" style="visibility: visible; stroke-dashoffset: 0; stroke-dasharray: none;"></path></svg>
        </div>
        <div class="left">
          <div class="c-text-shuffle" id="shuffle01" data-trigger>
            <h2>
              <span class="c-text-shuffle--element">Expand Japanese</span><br>
              <span class="c-text-shuffle--element">culture through XR</span><br>
              <span class="c-text-shuffle--element">communication.</span>
            </h2>
          </div>
        </div>
        <div class="right">
          <p class="c-text01" data-trigger>"This is a fashion project that allows the wearer to possess the psychic powers of three characters "RYUJIN", "ONI-CHAN", and "KOCHO", who possess the spirit of "Noh", a traditional Japanese performing art.<br>The project is built on the "XRT" technology, a new standard for fashion that extends the world view through "XR communication". <br>Digital items and physical items can be authenticated with each other to create a next-generation identity."</p>  
        </div>
      </div>
      <div class="technology__img">
        <div class="img img01" data-trigger>
          <video autoplay="" muted="muted" playsinline="playsinline" loop="loop">
            <source src="../movie/noh_ryujin.mp4" type="video/mp4">
          </video>
        </div>
        <div class="img img02" data-trigger>
          <img src="../images/top/technology_img_02.png" alt="">
        </div>
      </div>
    </div>
  </section>


  <section class="fashion">
    <div class="inner">
      <div class="cont">
        <div class="fashion__head">
          <h2 data-trigger><img src="../images/common/fashion_ttl.svg" alt="Phygital Fashion NOH by XRT"></h2>
          <p class="c-text01" data-trigger>Phygital is a new word combining Physical and Digital." Physical," "Phygital," and "Digital" Each item is mutually authenticated to provide a new, cross-media, fashion experience.</p>
        </div>
        <div class="fashion__list-wrap" data-trigger>
          <ul class="fashion__list">
            <li>
              <a>
                <div class="image-wrap">
                  <div class="image">
                    <div class="thumb"><img src="../images/top/fashion_img_01.png" alt=""></div>
                    <!-- <video playsinline muted loop><source type="video/mp4" crossorigin="use-credentials" src="https://cdn.rtfkt.com/assets/videos/vial/alien.mp4"></video> -->
                    <div class="tag">
                      <div class="tag-list">
                        <span>WORLD：Real</span>
                      </div>
                      <div class="tag-list">
                        <span>TECH：NFC, AR</span>
                      </div>
                    </div>
                    <div class="bottom">
                      <span>PHYSICAL ITEM</span>
                    </div>
                  </div>
                </div>
                <div class="text">
                  <p>By reading the activation tag, "physical items" and "digital items" are authenticated. By reading the AR marker with the camera, the garment is augmented with AR.</p>
                </div>
              </a>
            </li>
            <li class="current-slide">
              <a>
                <div class="image-wrap">
                  <div class="image">
                    <div class="thumb"><img src="../images/top/fashion_img_02.png" alt=""></div>
                    <!-- <video playsinline muted loop><source type="video/mp4" crossorigin="use-credentials" src="https://cdn.rtfkt.com/assets/videos/vial/alien.mp4"></video> -->
                    <div class="tag">
                      <div class="tag-list">
                        <span>WORLD：Distributed database</span>
                      </div>
                      <div class="tag-list">
                        <span>TECH：NFT</span>
                      </div>
                    </div>
                    <div class="bottom">
                      <span>PHYGITAL ITEM</span>
                    </div>
                  </div>
                </div>
                <div class="text">
                  <p>By authenticating each other, each item proves that you own it and is an access key to various licenses and experiences.</p>
                </div>
              </a>
            </li>
            <li>
              <a>
                <div class="image-wrap">
                  <div class="image">
                    <div class="thumb"><img src="../images/top/fashion_img_03.png" alt=""></div>
                    <!-- <video playsinline muted loop><source type="video/mp4" crossorigin="use-credentials" src="https://cdn.rtfkt.com/assets/videos/vial/alien.mp4"></video> -->
                    <div class="tag">
                      <div class="tag-list">
                        <span>WORLD：Game,Metaverse</span>
                      </div>
                      <div class="tag-list">
                        <span>TECH：(Under development)</span>
                      </div>
                    </div>
                    <div class="bottom">
                      <span>DIGITAL ITEM</span>
                    </div>  
                  </div>
                </div>
                <div class="text">
                  <p>Access to a decentralized database when playing various games and in the metaverse. Once your item ownership is verified, you will be able to wear the garment in games and in the metaverse. (Under development)</p>
                </div>
              </a>
            </li>
          </ul>  
        </div>
      </div>
    </div>
  </section>


  <section class="asset">
    <div class="asset__logo"><img src="../images/common/logo_xrt_01.svg" alt=""></div>
    <div class="asset__scroll-text">
      <div class="scroll-wrap"><img src="../images/top/asset_scroll-text.svg" alt="Connecting Real and Digital Communication."><img src="../images/top/asset_scroll-text.svg" alt="Connecting Real and Digital Communication."></div>
    </div>
    <div class="cont">
      <div class="inner">
        <div class="asset__doll-slider swiper">
          <div class="swiper-wrapper">    
            <div class="asset__doll-slider__slide swiper-slide">
              <!-- <img src="./images/top/asset_doll.png" alt=""> -->
              <video muted autoplay playsinline loop preload="metadata" class="content-media-video"><source src="../movie/230619_xrt_asset_ryujin_v10_alpha_compressed.mp4" type="video/mp4"></video>
            </div>
            <div class="asset__doll-slider__slide swiper-slide">
              <!-- <img src="./images/top/asset_doll.png" alt=""> -->
              <video muted autoplay playsinline loop preload="metadata" class="content-media-video"><source src="../movie/230619_xrt_asset_onichan_v10_alpha_compressed.mp4" type="video/mp4"></video>
            </div>
            <div class="asset__doll-slider__slide swiper-slide">
              <!-- <img src="./images/top/asset_doll.png" alt=""> -->
              <video muted autoplay playsinline loop preload="metadata" class="content-media-video"><source src="../movie/230619_xrt_asset_cocho_v10_alpha_compressed.mp4" type="video/mp4" data-v-62372636=""></video>
            </div>
          </div>
        </div>
        <div class="left">
          <span class="c-sub-ttl" data-trigger>FEATURED TECH - PHYGITAL ITEM（NFT）</span>
          <div class="c-text-shuffle" id="shuffle02" data-trigger>
            <h2>
              <span class="c-text-shuffle--element">Blockchain verifies</span>
              <span class="c-text-shuffle--element">ownership,</span><br>
              <span class="c-text-shuffle--element">links your own</span><br>
              <span class="c-text-shuffle--element">items.</span>
            </h2>
          </div>
        </div>
        <div class="right">
          <!-- <p class="c-text01" data-trigger>アセットの所有を証明し、利用権を与える。リアルワールド用のTシャツの発行とデジタルワールドでのTシャツの着用（開発中）が可能。</p> -->
          <div class="asset__thumb-slider swiper" data-trigger>
            <div class="swiper-wrapper">
              <div class="asset__thumb-slider__slide swiper-slide">
                <img src="../images/top/asset_img_01.jpg" alt="">
                <span class="progress-bar"></span>
              </div>
              <div class="asset__thumb-slider__slide swiper-slide">
                <img src="../images/top/asset_img_02.jpg" alt="">
                <span class="progress-bar"></span>
              </div>
              <div class="asset__thumb-slider__slide swiper-slide">
                <img src="../images/top/asset_img_03.jpg" alt="">
                <span class="progress-bar"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="chip">
    <div class="inner">
      <div class="cont-01">
        <div class="img"><img src="../images/top/chip_bg.png" alt=""></div>
        <div class="text">
          <span class="c-sub-ttl" data-trigger>FEATURED TECH - CHIP（NFC）</span>
          <div class="c-text-shuffle" id="shuffle03" data-trigger>
            <h2>
              <span class="c-text-shuffle--element">Infuse animation</span><br>
              <span class="c-text-shuffle--element">with a wearable chip.</span>
            </h2>
          </div>
          <p class="c-text01" data-trigger>A wearable original chip that encapsulates the character's super powers. The AR filter is activated by attaching the chip to the holder and holding a smartphone over the built-in NFC tag.</p>
        </div>
      </div>
      <div class="col2">
        <div class="cont-02">
          <div class="row">
            <div class="row__item row01">
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_01.png" alt=""></div>
            </div>
          </div>
          <div class="row">
            <div class="row__item row02">
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_02.png" alt=""></div>
            </div>
          </div>
          <div class="row">
            <div class="row__item row03">
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="../images/top/chip_scroll_03.png" alt=""></div>
            </div>
          </div>
        </div>
        <div class="cont-03">
          <div class="img"><img src="../images/top/chip_img_01.png" alt=""></div>
        </div>    
      </div> 
    </div>
  </section>


  <section class="product">
    <div class="inner">
      <div class="product__ttl">
        <span class="c-sub-ttl" data-trigger>FEATURED TECH - PHYGICAL ITEM（T-Shirts）</span>
        <div class="c-text-shuffle" id="shuffle05" data-trigger>
          <h2 class="pc">
            <span class="c-text-shuffle--element">Custom-designed T-shirt</span><br>
            <span class="c-text-shuffle--element">materializes animation</span>
          </h2>
          <h2 class="sp">
            <span class="c-text-shuffle--element">Custom-designed</span><br>
            <span class="c-text-shuffle--element">T-shirt</span><br>
            <span class="c-text-shuffle--element">materializes animation</span>
          </h2>
        </div>
      </div>
      <div class="product__image">
        <img data-trigger src="../images/top/product_img_01.png" alt="">
      </div>
      <ul class="product__detail">
        <li data-trigger>
          <div class="product__detail__image">
            <img src="../images/top/product_detail_01.png" alt="">
          </div>
          <div class="product__detail__text">
            <span class="item">AR marker</span>
            <p class="text">The woven pattern graphic printed on the front is an AR marker. AR effects are triggered by reading the graphic with a camera.</p>
          </div>
        </li>
        <li data-trigger>
          <div class="product__detail__image">
            <img src="../images/top/product_detail_02.png" alt="">
          </div>
          <div class="product__detail__text">
            <span class="item">Activation Tag</span>
            <p class="text">By holding a smartphone over the hem activation tag, the user's wallet and database are consulted to authenticate the owner.</p>
          </div>
        </li>
        <li data-trigger>
          <div class="product__detail__image">
            <img src="../images/top/product_detail_03.png" alt="">
          </div>
          <div class="product__detail__text">
            <span class="item">Chip holder</span>
            <p class="text">Holder parts attached to the cuff. A wearable original chip can be detached.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>


  <section class="effect">
    <div class="inner">
      <div class="effect__text">
        <span class="c-sub-ttl" data-trigger>FEATURED TECH - AR EFFECT</span>
        <div class="c-text-shuffle" id="shuffle04" data-trigger>
          <h2>
            <span class="c-text-shuffle--element">Wear extraordinary,</span><br>
            <span class="c-text-shuffle--element">a marvel of an experience.</span>
          </h2>
        </div>
        <p class="c-text01" data-trigger>AR effects are seamlessly triggered by the simple actions of "holding up the chip" and "reading it with the camera. You can wear the supernatural powers of the character at any time.</p>
      </div>
      <div class="effect__list-wrap" data-trigger>
        <ul class="effect__list">
          <li>
            <div class="effect__list__wrap">
              <div class="movie">
                <video muted="muted" playsinline="" preload="metadata" loop="" class="video" data-v-62372636=""><source src="../movie/ar_yujin_demo.mp4" type="video/mp4" data-v-62372636=""></video>
              </div>
              <div class="xrt">
                <span class="xrt__logo"><img src="../images/common/logo_xrt_02.svg" alt=""></span>
              </div>
            </div>
            <div class="grap"><img src="../images/common/grap_ryujin.svg" alt=""></div>
            <span class="name">( NOH - RYUJIN )</span>
          </li>
          <li>
            <div class="effect__list__wrap">
              <div class="movie">
                <video muted="muted" playsinline="" preload="metadata" loop="" class="video" data-v-62372636=""><source src="../movie/ar_oni_demo.mp4" type="video/mp4" data-v-62372636=""></video>
              </div>
              <div class="xrt">
                <span class="xrt__logo"><img src="../images/common/logo_xrt_02.svg" alt=""></span>
              </div>
            </div>
            <div class="grap grap02"><img src="../images/common/grap_onichan.svg" alt=""></div>
            <span class="name">( NOH - ONI-CHAN )</span>
          </li>
          <li>
            <div class="effect__list__wrap">
              <div class="movie">
                <video muted="muted" playsinline="" preload="metadata" loop="" class="video" data-v-62372636=""><source src="../movie/ar_kocho_demo.mp4" type="video/mp4" data-v-62372636=""></video>
              </div>
              <div class="xrt">
                <span class="xrt__logo"><img src="../images/common/logo_xrt_02.svg" alt=""></span>
              </div>
            </div>
            <div class="grap grap03"><img src="../images/common/grap_kocho.svg" alt=""></div>
            <span class="name">( NOH - KOCHO )</span>
          </li>
        </ul>
      </div>
      <span class="message" data-trigger>Anime, Manga, Games,,,<br>Let's start a new play that expands our world, along with the <br class="pc">beloved culture that overflows in Japan.<br>XRT starts.</span>
    </div>
  </section>


  <section class="look">
    <div class="look__scroll">
      <div class="img-wrap">
        <div class="img"><img src="../images/top/look_img_01.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_02.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_03.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_04.png" alt=""></div>   
        <div class="img"><img src="../images/top/look_img_01.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_02.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_03.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_04.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_01.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_02.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_03.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_04.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_01.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_02.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_03.png" alt=""></div>
        <div class="img"><img src="../images/top/look_img_04.png" alt=""></div>    
      </div>
    </div>
  </section>


  <section class="comingsoon">
    <div class="inner">
      <ul class="comingsoon__list">
        <li data-trigger>
          <div>
            <img src="../images/top/comingsoon_img_01.png" alt="">
          </div>
        </li>
        <li data-trigger>
          <div>
            <img src="../images/top/comingsoon_img_02.png" alt="">
          </div>
        </li>
      </ul>
    </div>
  </section>


  <section class="logo-area">
    <div class="inner">
      <div class="logo"><img src="../images/common/logo_noh_02.svg" alt=""></div>
    </div>
  </section>

</main>


<!-- Footer
======================================================================-->
<?php include $path.'/libs/footer_en.php'; ?>


<!-- Scripts
======================================================================-->
<?php include $path.'/libs/scripts.php'; ?>
<script>
  var tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  var player;
  var vid = '97xOlTUBIPw';
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player',{
      width: '100%',
		  height: '100%',
      videoId: vid,
      playerVars: {
          'rel'      : 0,
          'showinfo' : 0,
          'fs': 0,
          'playsinline': 1,
      },
    });
  }
  $('.movie__movie').on('click',function(){
    player.playVideo();
  });
  $('.close').on('click',function(){
    player.pauseVideo();
  });
  $('.movie__modal__bg').on('click',function(){
    player.pauseVideo();
  });
</script>
</body>
</html>
