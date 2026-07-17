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
        padding: 70px 0;
        background: #fff;
    }

    .whats-new-copy {
        max-width: 320px;
    }

    .whats-new-copy h2 {
        font-family: Georgia, "Times New Roman", serif;
        font-size: 42px;
        line-height: 1.1;
        color: #111;
        margin-bottom: 18px;
    }

    .whats-new-copy p {
        color: #666;
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 28px;
    }

    .whats-new-btn {
        display: inline-block;
        padding: 12px 22px;
        border: 1px solid #111;
        color: #111;
        text-decoration: none;
        font-size: 13px;
        letter-spacing: 0.04em;
        transition: all 0.2s ease;
    }

    .whats-new-btn:hover {
        background: #111;
        color: #fff;
        text-decoration: none;
    }

    .whats-new-card {
        display: block;
        color: inherit;
        text-decoration: none;
    }

    .whats-new-card:hover {
        text-decoration: none;
        color: inherit;
    }

    .whats-new-card-image {
        background: #fff;
        border-bottom: 1px solid #e5e5e5;
        padding: 18px 12px 0;
        min-height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .whats-new-card-image img {
        width: 100%;
        max-height: 220px;
        object-fit: contain;
    }

    .whats-new-brand {
        font-size: 11px;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: #111;
        margin: 16px 0 6px;
        font-weight: 600;
    }

    .whats-new-title {
        font-size: 13px;
        color: #666;
        line-height: 1.5;
        margin: 0;
        min-height: 40px;
    }

    #whats-new-slider .splide__arrow {
        background: transparent;
        opacity: 1;
        width: 2.2em;
        height: 2.2em;
    }

    #whats-new-slider .splide__arrow svg {
        fill: #bbb;
    }

    #whats-new-slider .splide__pagination {
        display: none;
    }

    @media (max-width: 991px) {
        .whats-new-section {
            padding: 50px 0;
        }

        .whats-new-copy {
            max-width: none;
            text-align: center;
            margin-bottom: 35px;
        }

        .whats-new-copy h2 {
            font-size: 34px;
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
    <div class="container-fluid" style="padding: 0 6%;">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="whats-new-copy">
                    <h2>What's New</h2>
                    <p>Stay ahead of the curve with our newest arrivals</p>
                    <a href="<?php echo $whats_new_href; ?>" class="whats-new-btn">Shop What's New &rarr;</a>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <?php if (!empty($whats_new)) { ?>
                <div id="whats-new-slider" class="splide splide-whats-new" aria-label="What's New">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php foreach ($whats_new as $product) { ?>
                            <li class="splide__slide">
                                <a href="<?php echo $product['href']; ?>" class="whats-new-card">
                                    <div class="whats-new-card-image">
                                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                                    </div>
                                    <div class="whats-new-brand"><?php echo $product['manufacturer']; ?></div>
                                    <p class="whats-new-title"><?php echo $product['name']; ?></p>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
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



<section class="section-padding pb-0 " style="padding-top: 60px;">
    <div style="padding: 0 5%;">
        <div class="row desk_dis">

            <div class="col-md-6 mb-md-0 mb-3" style="align-items: center;display: flex;justify-content: center;">
                <div class="serv-name3 text-center">

                    <h1 class="text-collection mb-3">Tennis Connection</h1>
                    <a href="index.php?route=product/category&path=99">
                        <button class="btn btn-primary">VIEW COLLECTION</button>
                    </a>


                </div>
                <a href="index.php?route=product/category&path=99" style="width: 100%;overflow:hidden;    background: black;">

                    <img src="image/new/col2.jpg" alt="" style="width:100%;opacity: 0.6; transition: transform 8s;"
                        class="zoom1 serv-img" title="" />
                </a>
            </div>
            <div class="col-md-6   " style="align-items: center;display: flex;justify-content: center;">
                <div class="serv-name3 text-center">


                    <h1 class="text-collection mb-3">Zayn Lite</h1>
                    <a href="index.php?route=product/category&path=95">
                        <button class="btn btn-primary">VIEW COLLECTION</button>
                    </a>

                </div>
                <a href="index.php?route=product/category&path=95" style="width: 100%;overflow:hidden;    background: black;">

                    <img src="image/new/col1.jpg" alt="" style="width:100%;opacity:0.6; transition: transform 8s;"
                        class="zoom1 serv-img" title="" />
                </a>
            </div>

        </div>
        <div class="row mob_dis">
            <div class="splide splidecol" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">

                        <li class="splide__slide">
                            <div class="col-12 " style="align-items: center;display: flex;justify-content: center;">
                                <div class="serv-name3 text-center">

                                    <h1 class="text-collection">Tennis Connection</h1>
                                </div>
                                <a href="index.php?route=product/category&path=99" style="width: 100%;overflow:hidden;    background: black;">

                                    <img src="image/new/col2.jpg" alt=""
                                        style="width:100%;opacity: 0.6; transition: transform 8s;"
                                        class="zoom1 serv-img" title="" />
                                </a>
                            </div>

                        </li>
                        <li class="splide__slide">
                            <div class="col-12   " style="align-items: center;display: flex;justify-content: center;">
                                <div class="serv-name3 text-center">


                                    <h1 class="text-collection">Zayn Lite</h1>

                                </div>
                                <a href="index.php?route=product/category&path=95" style="width: 100%;overflow:hidden;    background: black;">

                                    <img src="image/new/col1.jpg" alt=""
                                        style="width:100%;opacity:0.6; transition: transform 8s;" class="zoom1 serv-img"
                                        title="" />
                                </a>
                            </div>

                        </li>

                    </ul>
                </div>
            </div>



        </div>
    </div>

</section>

<section class="pb-4" style="margin-top: 60px;">

    <div class=" desk_dis"style="padding: 0 5%;">
        <div class="row  height_main" style="    justify-content: space-between;">
            
            <div class="col-md-12 pdmob ">
                <a href="https://www.zaynjewels.com/index.php?route=common/diamondsdemo"><img src="image/new/col-61.JPG"
                        style="width:100%;" alt="">

                    <h6 class="css-kl8k2i mt-1" >DIAMONDS</h6>
                </a>
            </div>
        </div>
    </div>
    <div class="container mob_dis">
        <div class="row m-0" style="justify-content: space-around;">
            <div class="col-md-6 row p-0" style="height: 100%;">
                <div class="col-12 pdmob">
                    <a href="https://www.zaynjewels.com/index.php?route=common/diamondsdemo"><img
                            src="image/new/col-61.JPG" style="height: auto;" alt=""></a>


                </div>

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
            perPage: 4,
            perMove: 1,
            gap: '1.5rem',
            arrows: true,
            pagination: false,
            breakpoints: {
                640: {
                    perPage: 1
                },
                767: {
                    perPage: 2
                },
                1024: {
                    perPage: 3
                },
                1200: {
                    perPage: 4
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

    var splide = new Splide('.splidecol', {
        type: 'loop',
        perPage: 1,
        perMove: 1,
        breakpoints: {
            640: {
                perPage: 1,

            },
            767: {
                perPage: 1,

            },
            1024: {
                perPage: 1,

            },
        },

        gap: '1em',
    });

    splide.mount();


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