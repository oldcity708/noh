<?php
$path = realpath(dirname(__FILE__).'/');
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
        <img src="./images/top/mv_catch.svg" alt="">   
      </div>
      <span class="mv__scroll">SCROLL</span>
      <span class="mv__left">（能）</span>
    </div>
  </div>


  <div id="cursor"></div>

  <div class="movie">
    <div class="inner">
      <div class="movie__movie">
        <video autoplay="" muted="muted" playsinline="playsinline" loop="loop">
          <source src="https://livestreaming.ricoh/videos/movie02.mp4" type="video/mp4">
        </video>
      </div>
    </div>
    <div class="movie__modal">
      <div class="movie__modal__youtube">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/3VAhPvzs8BY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
      </div>
      <button class="close">
        <img src="./images/common/btn_close.png" alt="">
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
          <div class="c-text-shuffle" id="shuffle01">
            <h2>
              <span class="c-text-shuffle--element">The intersection of</span><br>
              <span class="c-text-shuffle--element">Japanese culture</span><br>
              <span class="c-text-shuffle--element">and technology</span>
            </h2>
          </div>
        </div>
        <div class="right">
          <p class="c-text01">能の精神と現代ファッション、AR技術の融合を通じて、新たな自己表現の形を模索するブランド「NOH」。ブランドの世界観は3体のキャラクター、RYUJIN・ONI-CHAN・KOCHOを通じて構築され、ARと能という日本の伝統芸術を組み合わせることで、新しい自己を発見し、人々とつながる新たな手段を提供する。</p>  
        </div>
      </div>
      <div class="technology__img">
        <div class="img img01">
          <img src="./images/top/technology_img_01.png" alt="">
        </div>
        <div class="img img02">
          <img src="./images/top/technology_img_02.png" alt="">
        </div>
      </div>
    </div>
  </section>


  <section class="fashion">
    <div class="inner">
      <div class="cont">
        <div class="fashion__head">
          <h2><img src="./images/common/fashion_ttl.svg" alt="Phygital Fashion NOH by XRT"></h2>
          <p class="c-text01">フィジタルとは、Physical（フィジカル）とDigital（デジタル）をかけ合わせた造語で、リアル世界とデジタル世界を融合させることであり、物理的な要素とデジタル要素を兼ね備えた体験をユーザーに提供します。</p>
        </div>
        <div class="fashion__list-wrap">
          <ul class="fashion__list">
            <li>
              <a href="">
                <div class="image-wrap">
                  <div class="image">
                    <div class="thumb"><img src="./images/top/alien.png" alt=""></div>
                    <video playsinline muted loop><source type="video/mp4" crossorigin="use-credentials" src="https://cdn.rtfkt.com/assets/videos/vial/alien.mp4"></video>
                    <div class="tag">
                      <div class="tag-list">
                        <span>NFC TAG</span>
                        <span>XR</span>
                      </div>
                      <div class="tag-list">
                        <span>現実</span>
                      </div>
                    </div>
                    <div class="bottom">
                      <span>PHYSICAL ASSET</span>
                    </div>
                  </div>
                </div>
                <div class="text">
                  <p>服のNFCタグを読み込むことでXRライセンスとの紐付けが可能。また、胸のARマーカーを読み込むことでTシャツがXR表現で拡張される。</p>
                </div>
              </a>
            </li>
            <li>
              <a href="">
                <div class="image-wrap">
                  <div class="image">
                    <div class="thumb"><img src="./images/top/alien.png" alt=""></div>
                    <video playsinline muted loop><source type="video/mp4" crossorigin="use-credentials" src="https://cdn.rtfkt.com/assets/videos/vial/alien.mp4"></video>
                    <!-- <div class="thumb"><img src="./images/top/fashion_img_02.png" alt=""></div> -->
                    <div class="tag">
                      <div class="tag-list">
                        <span>NFC</span>
                      </div>
                      <div class="tag-list">
                        <span>所有証明&キー</span>
                      </div>
                    </div>
                    <div class="bottom">
                      <span>PHYSICAL ASSET</span>
                    </div>
                  </div>
                </div>
                <div class="text">
                  <p>リアルでの所有と紐付け所有証明と各種権利へのアクセスキーとなり、リアル世界とデジタル世界を繋ぐアイテムとなる。</p>
                </div>
              </a>
            </li>
            <li>
              <a href="">
                <div class="image-wrap">
                  <div class="image">
                    <div class="thumb"><img src="./images/top/alien.png" alt=""></div>
                    <video playsinline muted loop><source type="video/mp4" crossorigin="use-credentials" src="https://cdn.rtfkt.com/assets/videos/vial/alien.mp4"></video>
                    <!-- <div class="thumb"><img src="./images/top/fashion_img_03.png" alt=""></div> -->
                    <div class="tag">
                      <div class="tag-list">
                        <span>METAVERSE</span>
                      </div>
                      <div class="tag-list">
                        <span>デジタルワールド</span>
                      </div>
                    </div>
                    <div class="bottom">
                      <span>DIGITAL ASSET</span>
                    </div>  
                  </div>
                </div>
                <div class="text">
                  <p>ライセンスの所有者のみがアクセスできる分散型データベースにアクセスが可能。メタバースでTシャツの着用が可能（開発中）に。</p>
                </div>
              </a>
            </li>
          </ul>  
        </div>
      </div>
    </div>
  </section>


  <section class="asset">
    <div class="asset__logo"><img src="./images/common/logo_xrt_01.svg" alt=""></div>
    <div class="asset__scroll-text">
      <div class="scroll-wrap"><img src="./images/top/asset_scroll-text.svg" alt="Connecting Real and Digital Communication."><img src="./images/top/asset_scroll-text.svg" alt="Connecting Real and Digital Communication."></div>
    </div>
    <div class="cont">
      <div class="inner">
        <div class="asset__doll-slider swiper">
          <div class="swiper-wrapper">    
            <div class="asset__doll-slider__slide swiper-slide">
              <img src="./images/top/asset_doll.png" alt="">
              <!-- <video muted autoplay playsinline loop preload="metadata" class="content-media-video"><source src="https://community-lens.storage.googleapis.com/preview-media/final/e9f8ccc3-9bff-4952-b7f3-86afcfc0c139.mp4" type="video/mp4"></video> -->
            </div>
            <div class="asset__doll-slider__slide swiper-slide">
              <img src="./images/top/asset_doll.png" alt="">
              <!-- <video muted autoplay playsinline loop preload="metadata" class="content-media-video"><source src="https://community-lens.storage.googleapis.com/preview-media/final/bc0b59cb-0296-419a-acb7-7c8ec89aac0e.mp4" type="video/mp4"></video> -->
            </div>
            <div class="asset__doll-slider__slide swiper-slide">
              <img src="./images/top/asset_doll.png" alt="">
              <!-- <video muted autoplay playsinline loop preload="metadata" class="content-media-video"><source src="https://community-lens.storage.googleapis.com/preview-media/final/765af446-87e4-4da1-99f2-29d07f48c5f9.mp4" type="video/mp4" data-v-62372636=""></video> -->
            </div>
          </div>
        </div>
        <div class="left">
          <span class="c-sub-ttl">( XRT TECHNOLOGY - PHYGITAL ASSET )</span>
          <div class="c-text-shuffle" id="shuffle02">
            <h2>
              <span class="c-text-shuffle--element">The intersection of</span>
              <span class="c-text-shuffle--element">Japanese culture</span><br>
              <span class="c-text-shuffle--element">and technology</span>
            </h2>
          </div>
        </div>
        <div class="right">
          <p class="c-text01">アセットの所有を証明し、利用権を与える。リアルワールド用のTシャツの発行とデジタルワールドでのTシャツの着用（開発中）が可能。</p>
          <div class="asset__thumb-slider swiper">
            <div class="swiper-wrapper">
              <div class="asset__thumb-slider__slide swiper-slide">
                <img src="./images/top/asset_img_01.jpg" alt="">
                <span class="progress-bar"></span>
              </div>
              <div class="asset__thumb-slider__slide swiper-slide">
                <img src="./images/top/asset_img_01.jpg" alt="">
                <span class="progress-bar"></span>
              </div>
              <div class="asset__thumb-slider__slide swiper-slide">
                <img src="./images/top/asset_img_01.jpg" alt="">
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
        <div class="img"><img src="./images/top/chip_bg.png" alt=""></div>
        <div class="text">
          <span class="c-sub-ttl">( XRT TECHNOLOGY - CHIP )</span>
          <div class="c-text-shuffle" id="shuffle03">
            <h2>
              <span class="c-text-shuffle--element">The intersection of</span><br>
              <span class="c-text-shuffle--element">Japanese culture</span><br>
              <span class="c-text-shuffle--element">and technology</span>
            </h2>
          </div>
          <p class="c-text01">NFCタグ封入のXRTオリジナルチップ。スマホをかざすとARフィルターが起動し、Tシャツを拡張する。チップとNFTのPOAPが連動し、集めることで表現が変化するなどの特典も。</p>
        </div>
      </div>
      <div class="col2">
        <div class="cont-02">
          <div class="row">
            <div class="row__item row01">
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_01.png" alt=""></div>
            </div>
          </div>
          <div class="row">
            <div class="row__item row02">
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_02.png" alt=""></div>
            </div>
          </div>
          <div class="row">
            <div class="row__item row03">
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
              <div class="img"><img src="./images/top/chip_scroll_03.png" alt=""></div>
            </div>
          </div>
        </div>
        <div class="cont-03">
          <div class="img"><img src="./images/top/chip_img_01.png" alt=""></div>
        </div>    
      </div> 
    </div>
  </section>


  <section class="effect">
    <div class="inner">
      <div class="effect__text">
        <span class="c-sub-ttl">( XRT TECHNOLOGY - AR EFFECT )</span>
        <div class="c-text-shuffle" id="shuffle04">
          <h2>
            <span class="c-text-shuffle--element">The intersection of</span>
            <span class="c-text-shuffle--element">Japanese culture</span>
            <span class="c-text-shuffle--element">and technology</span>
          </h2>
        </div>
        <p class="c-text01">オリジナルチップで起動したARフィルターで胸のARマーカーを読み込むことで、キャラクターから生まれたお面が具現化し、それぞれの特性にそったエフェクトを纏うことができる。</p>
      </div>
      <div class="effect__list-wrap">
        <ul class="effect__list">
          <li>
            <div class="effect__list__wrap">
              <div class="movie">
                <video muted="muted" playsinline="" preload="metadata" loop="" class="video" data-v-62372636=""><source src="https://community-lens.storage.googleapis.com/preview-media/final/765af446-87e4-4da1-99f2-29d07f48c5f9.mp4" type="video/mp4" data-v-62372636=""></video>
              </div>
              <div class="xrt">
                <span class="xrt__logo"><img src="./images/common/logo_xrt_02.svg" alt=""></span>
              </div>
            </div>
            <div class="grap"><img src="./images/common/grap_ryujin.svg" alt=""></div>
            <span class="name">( NOH - RYUJIN )</span>
          </li>
          <li>
            <div class="effect__list__wrap">
              <div class="movie">
                <video muted="muted" playsinline="" preload="metadata" loop="" class="video" data-v-62372636=""><source src="https://community-lens.storage.googleapis.com/preview-media/final/765af446-87e4-4da1-99f2-29d07f48c5f9.mp4" type="video/mp4" data-v-62372636=""></video>
              </div>
              <div class="xrt">
                <span class="xrt__logo"><img src="./images/common/logo_xrt_02.svg" alt=""></span>
              </div>
            </div>
            <div class="grap grap02"><img src="./images/common/grap_onichan.svg" alt=""></div>
            <span class="name">( NOH - ONI-CHAN )</span>
          </li>
          <li>
            <div class="effect__list__wrap">
              <div class="movie">
                <video muted="muted" playsinline="" preload="metadata" loop="" class="video" data-v-62372636=""><source src="https://community-lens.storage.googleapis.com/preview-media/final/765af446-87e4-4da1-99f2-29d07f48c5f9.mp4" type="video/mp4" data-v-62372636=""></video>
              </div>
              <div class="xrt">
                <span class="xrt__logo"><img src="./images/common/logo_xrt_02.svg" alt=""></span>
              </div>
            </div>
            <div class="grap grap03"><img src="./images/common/grap_kocho.svg" alt=""></div>
            <span class="name">( NOH - KOCHO )</span>
          </li>
        </ul>
      </div>
      <span class="message">A world where a healthy and prosperous life can be built through good connections.</span>
    </div>
  </section>


  <section class="look">
    <div class="look__scroll">
      <div class="img-wrap">
        <div class="img"><img src="./images/top/look_img_01.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_02.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_03.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_04.png" alt=""></div> 
        <div class="img"><img src="./images/top/look_img_01.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_02.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_03.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_04.png" alt=""></div> 
        <div class="img"><img src="./images/top/look_img_01.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_02.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_03.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_04.png" alt=""></div>        
        <div class="img"><img src="./images/top/look_img_01.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_02.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_03.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_04.png" alt=""></div>        
        <div class="img"><img src="./images/top/look_img_01.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_02.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_03.png" alt=""></div>
        <div class="img"><img src="./images/top/look_img_04.png" alt=""></div>        
      </div>
    </div>
  </section>


  <section class="comingsoon">
    <div class="inner">
      <ul class="comingsoon__list">
        <li>
          <div></div>
        </li>
        <li>
          <div></div>
        </li>
      </ul>
    </div>
  </section>


  <section class="logo-area">
    <div class="inner">
      <div class="logo"><img src="./images/common/logo_noh_02.svg" alt=""></div>
    </div>
  </section>

</main>


<!-- Footer
======================================================================-->
<?php include $path.'/libs/footer.php'; ?>


<!-- Scripts
======================================================================-->
<?php include $path.'/libs/scripts.php'; ?>
</body>
</html>
