<?php echo $header; ?>

<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<link href="
assets/css/home.css
" rel="stylesheet">
<style>
    #New .splide__pagination {
        display: none !important;
    }
    .product-name:hover {
        color: #423c9e;
    }
    .product-name {
        font-weight: 500;
        color: #222222;
        text-transform: capitalize;
    }

    .whats-new-section {
        --wn-ink: #1d1b2e;
        --wn-brand: #423c9e;
        --wn-muted: #6f6b7d;
        --wn-line: rgba(66, 60, 158, 0.18);
        position: relative;
        padding: 90px 0;
        overflow: hidden;
        background:
            radial-gradient(circle at 12% 20%, rgba(66, 60, 158, 0.10), transparent 42%),
            radial-gradient(circle at 88% 70%, rgba(163, 129, 41, 0.08), transparent 40%),
            linear-gradient(180deg, #f7f6fb 0%, #ffffff 55%, #f4f3f9 100%);
    }

    .whats-new-section::before {
        content: "";
        position: absolute;
        inset: 24px 4%;
        border: 1px solid var(--wn-line);
        pointer-events: none;
    }

    .whats-new-inner {
        position: relative;
        z-index: 1;
        padding: 0 7%;
    }

    .whats-new-copy {
        max-width: 340px;
        padding-right: 20px;
        animation: wnFadeUp 0.8s ease both;
    }

    .whats-new-eyebrow {
        display: inline-block;
        margin-bottom: 14px;
        font-family: "Questrial", sans-serif;
        font-size: 11px;
        font-weight: 400;
        letter-spacing: 0.28em;
        text-transform: uppercase;
        color: var(--wn-brand);
    }

    .whats-new-copy h2 {
        font-family: "Questrial", sans-serif;
        font-size: 42px;
        font-weight: 400;
        line-height: 1.15;
        color: var(--wn-ink);
        margin: 0 0 16px;
        letter-spacing: 0.04em;
    }

    .whats-new-copy h2 span {
        display: inline;
        font-style: normal;
        color: var(--wn-brand);
    }

    .whats-new-rule {
        width: 54px;
        height: 2px;
        background: linear-gradient(90deg, var(--wn-brand), #a38129);
        margin-bottom: 18px;
    }

    .whats-new-copy p {
        font-family: "Questrial", sans-serif;
        color: var(--wn-muted);
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .whats-new-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 26px;
        border: 1px solid var(--wn-brand);
        background: var(--wn-brand);
        color: #fff;
        text-decoration: none;
        font-family: "Questrial", sans-serif;
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        transition: transform 0.25s ease, box-shadow 0.25s ease, background 0.25s ease;
    }

    .whats-new-btn span {
        transition: transform 0.25s ease;
    }

    .whats-new-btn:hover {
        background: #322c82;
        color: #fff;
        text-decoration: none;
        transform: translateY(-2px);
        box-shadow: 0 10px 24px rgba(66, 60, 158, 0.25);
    }

    .whats-new-btn:hover span {
        transform: translateX(4px);
    }

    .whats-new-slider-wrap {
        animation: wnFadeUp 0.9s ease 0.12s both;
    }

    .whats-new-card {
        display: block;
        color: inherit;
        text-decoration: none;
        height: 100%;
        padding: 8px;
        transition: transform 0.35s ease;
    }

    .whats-new-card:hover {
        text-decoration: none;
        color: inherit;
        transform: translateY(-6px);
    }

    .whats-new-card-inner {
        background: rgba(255, 255, 255, 0.88);
        border: 1px solid rgba(66, 60, 158, 0.08);
        box-shadow: 0 8px 28px rgba(29, 27, 46, 0.06);
        transition: box-shadow 0.35s ease, border-color 0.35s ease;
        height: 100%;
        overflow: hidden;
    }

    .whats-new-card:hover .whats-new-card-inner {
        border-color: rgba(66, 60, 158, 0.22);
        box-shadow: 0 16px 36px rgba(29, 27, 46, 0.12);
    }

    .whats-new-card-image {
        position: relative;
        background: linear-gradient(180deg, #f4f3f8 0%, #ebe9f4 100%);
        aspect-ratio: 1 / 1;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whats-new-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.55s ease;
    }

    .whats-new-card:hover .whats-new-card-image img {
        transform: scale(1.06);
    }

    .whats-new-card-overlay {
        position: absolute;
        inset: auto 0 0 0;
        padding: 14px;
        display: flex;
        justify-content: center;
        background: linear-gradient(180deg, transparent, rgba(29, 27, 46, 0.55));
        opacity: 0;
        transform: translateY(8px);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .whats-new-card:hover .whats-new-card-overlay {
        opacity: 1;
        transform: translateY(0);
    }

    .whats-new-view {
        font-family: "Questrial", sans-serif;
        font-size: 11px;
        font-weight: 400;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        color: #fff;
        border-bottom: 1px solid rgba(255, 255, 255, 0.7);
        padding-bottom: 2px;
    }

    .whats-new-card-body {
        padding: 16px 14px 18px;
        text-align: center;
    }

    .whats-new-brand {
        font-family: "Questrial", sans-serif;
        font-size: 10px;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: var(--wn-brand);
        margin: 0 0 8px;
        font-weight: 400;
    }

    .whats-new-title {
        font-family: "Questrial", sans-serif;
        font-size: 13px;
        font-weight: 400;
        color: var(--wn-ink);
        line-height: 1.45;
        margin: 0;
        min-height: 40px;
        letter-spacing: 0.04em;
        text-transform: uppercase;
        transition: color 0.25s ease;
    }

    .whats-new-card:hover .whats-new-title {
        color: var(--wn-brand);
    }

    #whats-new-slider .splide__arrow {
        background: #fff;
        border: 1px solid var(--wn-line);
        opacity: 1;
        width: 42px;
        height: 42px;
        box-shadow: 0 6px 18px rgba(29, 27, 46, 0.08);
        transition: background 0.2s ease, border-color 0.2s ease;
    }

    #whats-new-slider .splide__arrow:hover {
        background: var(--wn-brand);
        border-color: var(--wn-brand);
    }

    #whats-new-slider .splide__arrow svg {
        fill: var(--wn-brand);
        width: 14px;
        height: 14px;
        transition: fill 0.2s ease;
    }

    #whats-new-slider .splide__arrow:hover svg {
        fill: #fff;
    }

    #whats-new-slider .splide__arrow--prev {
        left: -8px;
    }

    #whats-new-slider .splide__arrow--next {
        right: -8px;
    }

    #whats-new-slider .splide__pagination {
        display: none;
    }

    @keyframes wnFadeUp {
        from {
            opacity: 0;
            transform: translateY(18px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 991px) {
        .whats-new-section {
            padding: 60px 0;
        }

        .whats-new-section::before {
            inset: 16px 3%;
        }

        .whats-new-copy {
            max-width: none;
            text-align: center;
            margin: 0 auto 40px;
            padding-right: 0;
        }

        .whats-new-rule {
            margin-left: auto;
            margin-right: auto;
        }

        .whats-new-copy h2 {
            font-size: 42px;
        }

        #whats-new-slider .splide__arrow--prev {
            left: 0;
        }

        #whats-new-slider .splide__arrow--next {
            right: 0;
        }
    }
</style>


<!-- hero slider area start -->
<section class="slider-area">
    <div class="desktop-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
        <?php foreach ($banners as $banner) { ?>
        <a href="<?php echo $banner['link']; ?>">
            <img src="<?php echo $banner['image']; ?>" alt="">

        </a>
        <?php } ?>
    </div>

    <div class="mobile-slider hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
        <?php foreach ($banners2 as $banner) { ?>
        <a href="<?php echo $banner['link']; ?>">
            <img src="<?php echo $banner['image']; ?>" alt="" class="img-response">


        </a>
        <?php } ?>
    </div>
</section>
<!-- hero slider area end -->

<section class="whats-new-section">
    <div class="whats-new-inner">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-12">
                <div class="whats-new-copy">
                    <div class="whats-new-eyebrow">Just Arrived</div>
                    <h2>What's <span>New</span></h2>
                    <div class="whats-new-rule"></div>
                    <p>Stay ahead of the curve with our newest arrivals, crafted to shine in every collection.</p>
                    <a href="<?php echo $whats_new_href; ?>" class="whats-new-btn">Shop What's New <span>&rarr;</span></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <?php if (!empty($whats_new)) { ?>
                <div class="whats-new-slider-wrap">
                    <div id="whats-new-slider" class="splide splide-whats-new" aria-label="What's New">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($whats_new as $product) { ?>
                                <li class="splide__slide">
                                    <a href="<?php echo $product['href']; ?>" class="whats-new-card">
                                        <div class="whats-new-card-inner">
                                            <div class="whats-new-card-image">
                                                <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['name'], ENT_QUOTES); ?>">
                                                <div class="whats-new-card-overlay">
                                                    <span class="whats-new-view">View Details</span>
                                                </div>
                                            </div>
                                            <div class="whats-new-card-body">
                                                <div class="whats-new-brand"><?php echo $product['manufacturer']; ?></div>
                                                <p class="whats-new-title"><?php echo $product['name']; ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<!--Most wanted designs-->
<section id="most-wanted-designs" class="section-padding pb-0 pt-0" style="margin-top:60px;">
    <div style="padding:0 7%;">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-12 text-center">
                <h6 class="mob_font1">EXPERIENCE THE MAGIC OF FINE JEWELRY</h6>
            </div>
            <div class="tab col-md-6 col-12 text-center row" style="margin-top: 20px;">
                <button class="tablinks tab1 col-md-6 col-6 text-end active" onclick="openCity(event, 'New')">New
                    Arrivals</button>
                <button class="tablinks tab2 col-md-6 col-6 text-start" onclick="openCity(event, 'Most')">Most
                    Popular</button>

            </div>
            <div class="col-sm-12 col-12 text-center" style="margin-top: 40px;    height: 100%;">
                <div id="New" class="tabcontent " style="display: block;">
                    <div class="splide splidenew" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($newcat as $category) { ?>
                                <li class="splide__slide">
                                    <a href="<?php echo $category['href']; ?>">
                                        <img src="<?php echo $category['image']; ?>" alt="" class="img-responsive" />
                                        <h6 class="product-name mt-2 text-center">
                                            <?php echo $category['name']; ?>
                                        </h6>

                                    </a>

                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-sm-12 text-center">
                            <a href="index.php?route=product/category&path=97">
                                <button class="btn btn-primary">DISCOVER OUR CREATIONS</button>
                            </a>

                        </div>
                    </div>
                </div>

                <div id="Most" class="tabcontent">
                    <div class="splide splidemost" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($mostcat as $category) { ?>
                                <li class="splide__slide">
                                    <a href="<?php echo $category['href']; ?>">
                                        <img src="<?php echo $category['image']; ?>" alt="" class="img-responsive" />
                                        
                                        <h6 class="product-name mt-2 text-center">
                                                <?php echo $category['name']; ?>
                                         </h6>
                                         
                                    </a>
                                    
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-sm-12 text-center">
                            <a href="index.php?route=product/category&path=98">
                                <button class="btn btn-primary">DISCOVER OUR CREATIONS</button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</section>



<section class="mob-height" style="padding-top: 60px;height:700px; overflow:hidden;">

    
    <video style="width:100%; z-index:1;position:sticky;" autoplay loop muted playsinline src="image/new/Rahdika2.mov"></video>


</section>



<section class="shop-looks-section">
    <div class="shop-looks-inner">
        <div class="row shop-looks-row">
            <div class="col-md-4 col-12 shop-looks-col">
                <a href="index.php?route=product/category&path=99" class="shop-looks-card">
                    <div class="shop-looks-image">
                        <img src="image/new/col2.jpg" alt="Tennis Connection">
                    </div>
                    <div class="shop-looks-overlay">
                        <h3 class="shop-looks-title">Tennis Connection</h3>
                        <span class="shop-looks-btn">See All</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-12 shop-looks-col">
                <a href="index.php?route=product/category&path=95" class="shop-looks-card">
                    <div class="shop-looks-image">
                        <img src="image/new/col1.jpg" alt="Zayn Lite">
                    </div>
                    <div class="shop-looks-overlay">
                        <h3 class="shop-looks-title">Zayn Lite</h3>
                        <span class="shop-looks-btn">See All</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-12 shop-looks-col">
                <a href="index.php?route=common/diamondsdemo" class="shop-looks-card">
                    <div class="shop-looks-image">
                        <img src="image/new/col-61.JPG" alt="Diamonds">
                    </div>
                    <div class="shop-looks-overlay">
                        <h3 class="shop-looks-title">Diamonds</h3>
                        <span class="shop-looks-btn">See All</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    .shop-looks-section {
        padding: 60px 0 20px;
        background: #fff;
    }

    .shop-looks-inner {
        padding: 0 1%;
    }

    .shop-looks-row {
        margin: 0 -8px;
    }

    .shop-looks-col {
        padding: 0 8px 16px;
    }

    .shop-looks-card {
        position: relative;
        display: block;
        overflow: hidden;
        text-decoration: none;
        color: #fff;
        background: #111;
    }

    .shop-looks-card:hover,
    .shop-looks-card:focus {
        text-decoration: none;
        color: #fff;
    }

    .shop-looks-image {
        position: relative;
        aspect-ratio: 1 / 1.15;
        overflow: hidden;
    }

    .shop-looks-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        opacity: 0.85;
        transition: transform 0.7s ease, opacity 0.35s ease;
    }

    .shop-looks-card:hover .shop-looks-image img {
        transform: scale(1.06);
        opacity: 0.7;
    }

    .shop-looks-overlay {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        padding: 0 20px 36px;
        text-align: center;
        z-index: 2;
        background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.35) 100%);
    }

    .shop-looks-title {
        font-family: "Questrial", sans-serif !important;
        font-size: 18px !important;
        font-weight: 400 !important;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: #fff !important;
        margin: 0 0 14px !important;
        line-height: 1.3;
    }

    .shop-looks-btn {
        display: inline-block;
        background: #423c9e;
        color: #fff;
        font-family: "Questrial", sans-serif;
        font-size: 11px;
        font-weight: 400;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        padding: 10px 22px;
        border: 1px solid #423c9e;
        transition: background 0.25s ease, color 0.25s ease, border-color 0.25s ease;
    }

    .shop-looks-card:hover .shop-looks-btn {
        background: #fff;
        color: #423c9e;
        border-color: #fff;
    }

    @media (max-width: 767px) {
        .shop-looks-section {
            padding: 40px 0 10px;
        }

        .shop-looks-inner {
            padding: 0 4%;
        }

        .shop-looks-image {
            aspect-ratio: 1 / 1;
        }

        .shop-looks-title {
            font-size: 16px !important;
        }
    }
</style>

<section class="pb-4" style="margin-top: 30px;">
    <div class="container mob_dis">
        <div class="row m-0" style="justify-content: space-around;">
            <div class="col-md-6 row p-0" style="height: 100%;">
                <div class="col-6 pdmob "><a href="index.php?route=product/category&path=79_85">
                        <img src="image/new/e1.jpg" style="width: 100%;">
                        <h6 class="css-kl8k2i mt-1 mob_font1 text-center">PENDANTS
                        </h6>
                    </a>

                </div>
                <div class="col-6 pdmob "><a href="index.php?route=product/category&path=79_82">
                        <img src="image/new/p1.jpg" style="width: 100%;" alt="">
                        <h6 class="css-kl8k2i mt-1 mob_font1 text-center">EARRINGS</h6>
                    </a>


                </div>


            </div>

        </div>
    </div>
</section>

<div class="para-div section-padding1 sec-top" style="height:auto;margin-top:60px;">
    <div class="container">
        <div class="row att-row">
            <div class="col-sm-3 col-3 text-center">
                <img src="image/new/1.png" class="icon-img" style="width:40px;height:40px;">
                <p class="att-p">In-house manufacturing</p>
            </div>
            <div class="col-sm-3 col-3 text-center">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <p class="att-p">ethically sourced</p>
            </div>
            <div class="col-sm-3 col-3 text-center">
                <i class="fa fa-star" aria-hidden="true"></i>
                <p class="att-p">Latest Designs</p>
            </div>
            <div class="col-sm-3  col-3 text-center">
                <img src="image/new/4.png" class="icon-img" style="width:40px;height:40px;">
                <p class="att-p">quick turn-around</p>
            </div>
        </div>
    </div>

</div>
<script>
    document.getElementById('vid').play();
</script>

<script>
    if (document.querySelector('.splide-whats-new')) {
        new Splide('.splide-whats-new', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            gap: '1.25rem',
            arrows: true,
            pagination: false,
            speed: 650,
            easing: 'cubic-bezier(0.25, 1, 0.5, 1)',
            breakpoints: {
                640: {
                    perPage: 1,
                    gap: '0.75rem'
                },
                767: {
                    perPage: 2
                },
                1024: {
                    perPage: 2
                },
                1200: {
                    perPage: 3
                }
            }
        }).mount();
    }

    var splide = new Splide('.splidenew', {
        type: 'loop',
        perPage: 5,
        perMove: 1,
        breakpoints: {
            640: {
                perPage: 2,

            },
            767: {
                perPage: 3,

            },
            1024: {
                perPage: 5,

            },
        },

        gap: '3em',
    });

    splide.mount();
    var splide = new Splide('.splidemost', {
        type: 'loop',
        perPage: 5,
        perMove: 1,
        breakpoints: {
            640: {
                perPage: 2,

            },
            767: {
                perPage: 3,

            },
            1024: {
                perPage: 5,

            },
        },

        gap: '3em',
    });
    splide.mount();

    if (document.querySelector('.splidecol')) {
        var splideCol = new Splide('.splidecol', {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            breakpoints: {
                640: {
                    perPage: 1
                },
                767: {
                    perPage: 1
                },
                1024: {
                    perPage: 1
                }
            },
            gap: '1em'
        });
        splideCol.mount();
    }


</script>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>


<?php echo $footer; ?>