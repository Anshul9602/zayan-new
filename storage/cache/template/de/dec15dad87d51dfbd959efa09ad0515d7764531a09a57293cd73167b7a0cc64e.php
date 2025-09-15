<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* catalog/view/template/common/about.twig */
class __TwigTemplate_ec259dee440414dce37aab5d3a7257c5be6345dc9031c591640285fa1a2d10d9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<style>
\theader {
\t\tposition: fixed;
\t\ttop: 0;
\t\tleft: 0;
\t\tright: 0;
\t\tz-index: 1000;
\t\tbackground: #fff;
\t}
</style>

<!-- Page Title -->
<section class=\"page-title-image \"  style=\"padding-top:100px;\">
\t<div class=\"page_image overflow-hidden\">
\t\t<img class=\"lazyload ani-zoom\" src=\"assets/aboutbg.jpg\" data-src=\"assets/aboutbg.jpg\" alt=\"Banner\">
\t</div>
\t<div class=\"page_content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"content\">
\t\t\t\t<h1 class=\"heading fw-bold  text-center\" style=\"color:#423c9e\">
\t\t\t\t\tAbout Zayn Jewels

\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- /Page Title -->
<!-- Hero Section -->
<section class=\"s-intro flat-spacing\">
\t<div class=\"container\">
\t\t<p class=\"brand-name\">Zayn Jewels</p>
\t\t<div class=\"box-intro\">

\t\t\t<p class=\"intro-text\">
\t\t\t\tZayn Jewels is a family owned manufacturer and distributor of fine jewelry. We specialize in private label manufacturing for small and mid-size retailers located throughout the United States. Our original collection, the Zayn Collection, is comprised of over 3,000 unique designs and is made exclusively with premium 18k and 14k gold, V/S Clarity, G/H color diamonds, Precious and Semi-precious stones. In addition, we offer custom manufacturing and production of fine jewelry made to client specifications.
\t\t\t</p>
\t\t</div>
\t</div>
</section>
<!-- /Hero Section -->
<!-- About -->
<section class=\"s-about\">
\t<div class=\"container\">
\t\t<div class=\"tf-grid-layout tf-col-2 md-col-3 xl-col-4\">
\t\t\t<div class=\"item_2 image d-none d-md-block\">
\t\t\t\t<img class=\"lazyload\" src=\"assets/about1.jpg\" data-src=\"assets/about1.jpg\" alt=\"Modal 2\">
\t\t\t</div>
\t\t\t<div class=\"wd-2-cols\">
\t\t\t\t<div class=\"content-blog text-md-start\">
\t\t\t\t\t<div class=\"d-md-inline-flex\">
\t\t\t\t\t\t<div class=\"wg-curve-text\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<svg width=\"32\" height=\"32\" viewbox=\"0 0 32 32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M25.0001 8V21C25.0001 21.2652 24.8947 21.5196 24.7072 21.7071C24.5196 21.8946 24.2653 22 24.0001 22C23.7349 22 23.4805 21.8946 23.293 21.7071C23.1054 21.5196 23.0001 21.2652 23.0001 21V10.4137L8.70757 24.7075C8.51993 24.8951 8.26543 25.0006 8.00007 25.0006C7.7347 25.0006 7.48021 24.8951 7.29257 24.7075C7.10493 24.5199 6.99951 24.2654 6.99951 24C6.99951 23.7346 7.10493 23.4801 7.29257 23.2925L21.5863 9H11.0001C10.7349 9 10.4805 8.89464 10.293 8.70711C10.1054 8.51957 10.0001 8.26522 10.0001 8C10.0001 7.73478 10.1054 7.48043 10.293 7.29289C10.4805 7.10536 10.7349 7 11.0001 7H24.0001C24.2653 7 24.5196 7.10536 24.7072 7.29289C24.8947 7.48043 25.0001 7.73478 25.0001 8Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"text-rotate\" data-text=\"Ochaka Store Fashion Style\">
\t\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t\t<div class=\"text\" id=\"circularText\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-intro\">
\t\t\t\t\t\t<h4 class=\"slogan fw-normal\">EXCEPTIONAL JEWELRY CRAFTSMANSHIP SINCE 1988</h4>
\t\t\t\t\t\t<p class=\"intro-text\">
\t\t\t\t\t\t\tAt Zayn Jewels, we pride ourselves on manufacturing top-quality finished jewelry products and providing a best-in-class suite of services to the retail jewelry industry. Our principals are jewelry veterans with over 35 years of experience in the jewelry industry. We offer our retailers unrivaled customer service, speedy delivery, and extremely competitive wholesale pricing. Contact us today to become a Zayn Jewels partner.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"item_1 image\">
\t\t\t\t<img class=\"lazyload\" src=\"assets/ab1.jpg\" data-src=\"assets/ab1.jpg\" alt=\"Modal 1\">
\t\t\t</div>
\t\t\t<div class=\" d-xl-block\">
\t\t\t\t<img class=\"lazyload \" src=\"assets/ab2.jpg\" data-src=\"assets/ab2.jpg\" alt=\"Modal 2\">
\t\t\t</div>
\t\t\t<div class=\"item_3 image\">
\t\t\t\t<img class=\"lazyload\" src=\"assets/ab3.jpg\" data-src=\"assets/ab3.jpg\" alt=\"Modal 3\">
\t\t\t</div>
\t\t\t<div class=\"item_4 image\">
\t\t\t\t<img class=\"lazyload\" src=\"assets/ab2.jpg\" data-src=\"assets/ab2.jpg\" alt=\"Modal 4\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- /About -->
<!-- Brand Story -->
<section class=\"flat-spacing d-none\">
\t<div class=\"container\">
\t\t<div class=\"sect-title text-center\">
\t\t\t<h1 class=\"s-title mb-8\">Brand Story</h1>
\t\t\t<p class=\"s-subtitle h6\">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
\t\t</div>
\t\t<div class=\"box-intro has-mb text-center\">
\t\t\t<h4 class=\"slogan fw-normal\">WE PRIORITIZE SUSTAINABLE AND ENVIRONMENTALLY FRIENDLY DEVELOPMENT.</h4>
\t\t\t<p class=\"intro-text\">
\t\t\t\tMorbi finibus erat ullamcorper malesuada placerat. Integer malesuada orci sed nulla scelerisque fermentum. Suspendisse lacinia
\t\t\t\t\t\t\t\t                        elit
\t\t\t\t<br class=\"d-none d-xxl-block\">
\t\t\t\tat bibendum tincidunt.
\t\t\t</p>
\t\t</div>
\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"15\" data-space=\"10\" data-pagination=\"1\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\">
\t\t\t<div
\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"wg-icon-image hover-img\">
\t\t\t\t\t\t<div class=\"image img-style\">
\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/section/story-1.jpg\" data-src=\"assets/images/section/story-1.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<svg width=\"56\" height=\"56\" viewbox=\"0 0 56 56\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<mask id=\"mask0_643_16068\" style=\"mask-type:luminance\" maskunits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"56\" height=\"56\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M55.25 55.25V0.75H0.75V55.25H55.25Z\" fill=\"white\" stroke=\"white\" stroke-width=\"1.5\"/>
\t\t\t\t\t\t\t\t\t</mask>
\t\t\t\t\t\t\t\t\t<g mask=\"url(#mask0_643_16068)\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M51.6682 33.5091H18.0508M30.7811 44.2344C29.205 44.2344 27.9274 42.9568 27.9274 41.3807C27.9274 39.8047 29.205 38.5271 30.7811 38.5271C32.3571 38.5271 33.6348 39.8047 33.6348 41.3807C33.6348 42.9568 32.3571 44.2344 30.7811 44.2344Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M38.5503 20.3796V6.41859H31.1682V20.3796C23.353 22.0814 17.498 29.0756 17.498 37.4452C17.498 47.0887 25.2709 54.9062 34.8593 54.9062C44.4476 54.9062 52.2205 47.0887 52.2205 37.4452C52.2205 29.0756 46.3655 22.0814 38.5503 20.3796Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M41.1696 6.41797H28.5486V1.09328H41.1696V6.41797ZM21.0637 6.41797H3.7793V1.09328H21.0637V6.41797Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M12.4262 54.9062H12.416C9.61524 54.9062 7.34473 52.6357 7.34473 49.8349V6.4186H17.4975V49.8349C17.4975 52.6357 15.227 54.9062 12.4262 54.9062Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 15.5742H17.2367\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 24.625H10.5066\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 31.5859H10.5066\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 38.5508H10.5066\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 45.5117H10.5066\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M46.9992 15.5766C46.9992 16.6087 46.1626 17.4453 45.1304 17.4453C44.0984 17.4453 43.2617 16.6087 43.2617 15.5766C43.2617 14.5446 44.0984 13.708 45.1304 13.708C46.1626 13.708 46.9992 14.5446 46.9992 15.5766Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<h3 class=\"caption fw-normal\">No harmful chemicals</h3>
\t\t\t\t\t\t\t\t<p class=\"sub-text\">Morbi finibus erat ullamcorper malesuada</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 2 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"wg-icon-image hover-img\">
\t\t\t\t\t\t<div class=\"image img-style\">
\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/section/story-2.jpg\" data-src=\"assets/images/section/story-2.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<svg width=\"56\" height=\"56\" viewbox=\"0 0 56 56\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<mask id=\"mask0_643_16092\" style=\"mask-type:luminance\" maskunits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"56\" height=\"56\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M55.25 55.25V0.75H0.75V55.25H55.25Z\" fill=\"white\" stroke=\"white\" stroke-width=\"1.5\"/>
\t\t\t\t\t\t\t\t\t</mask>
\t\t\t\t\t\t\t\t\t<g mask=\"url(#mask0_643_16092)\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M19.6885 1.09373H36.3093L28.0005 11.0117L19.6885 1.09373Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M19.6884 1.09251L16.2471 6.05309L22.6772 15.3633L28.0005 11.0105\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M36.3089 1.09251L39.7502 6.05309L33.3233 15.3633L28 11.0105\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M9.28058 18.6541C10.527 21.032 11.0447 24.4114 11.0447 26.9939V54.9062H44.956V26.9939C44.956 24.4114 45.4739 21.032 46.7201 18.6541M16.247 6.05438L9.46662 9.46173C2.42585 12.9991 1.37793 22.3559 1.37793 31.7716H11.0447M39.7505 6.05438L46.5311 9.46173C53.5719 12.9991 54.6228 22.3559 54.6228 31.7716H44.956\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M27.9941 23.4883H28.0004\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M27.9941 17.25H28.0004\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M11.0442 26.9922H1.49219\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M44.9561 26.9922H54.5051\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M44.9562 50.1289H11.0449\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<h3 class=\"caption fw-normal\">High-quality product</h3>
\t\t\t\t\t\t\t\t<p class=\"sub-text\">Morbi finibus erat ullamcorper malesuada</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 3 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"wg-icon-image hover-img\">
\t\t\t\t\t\t<div class=\"image img-style\">
\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/section/story-3.jpg\" data-src=\"assets/images/section/story-3.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<svg width=\"56\" height=\"56\" viewbox=\"0 0 56 56\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<mask id=\"mask0_643_16111\" style=\"mask-type:luminance\" maskunits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"56\" height=\"56\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M55.25 55.25V0.75H0.75V55.25H55.25Z\" fill=\"white\" stroke=\"white\" stroke-width=\"1.5\"/>
\t\t\t\t\t\t\t\t\t</mask>
\t\t\t\t\t\t\t\t\t<g mask=\"url(#mask0_643_16111)\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2432 50.3736L28.8294 52.4844C29.88 52.6111 32.1238 53.2218 34.7726 52.323L52.0644 46.4525C55.8145 44.9715 54.4284 40.1074 49.8461 40.8067L48.5738 41.0188L35.3043 43.5663L26.7343 43.6012M32.1903 43.579C35.3043 43.5663 36.6334 38.0945 30.8579 37.1769L24.4557 36.0249C23.0348 35.9268 21.1835 36.3793 18.8858 37.0629L11.2432 39.3352\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2428 51.106V38.7606C11.2428 37.8966 10.5372 37.1878 9.67004 37.1878H2.66339C1.79944 37.1878 1.09375 37.8966 1.09375 38.7606V51.106C1.09375 51.97 1.79944 52.6758 2.66339 52.6758H9.67004C10.5372 52.6758 11.2428 51.97 11.2428 51.106Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M6.80859 6.9492C8.31184 21.8296 30.1387 22.7062 25.7967 13.4748C35.2655 6.48403 14.7045 -1.75364 6.80859 6.9492Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M30.8572 23.3281C30.8572 17.0303 28.0406 13.3435 18.8535 10.3434\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M54.9058 6.9492C53.4026 21.8296 31.5726 22.7062 35.9145 13.4748C26.4489 6.48403 47.0099 -1.75364 54.9058 6.9492Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M30.8574 29.8555V23.3298C30.8574 17.0322 33.6739 13.3453 42.8611 10.3452\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M19.2783 36.9498C26.1362 24.3101 43.5452 30.1331 43.1021 42.0703\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<h3 class=\"caption fw-normal\">Environmentally friendly</h3>
\t\t\t\t\t\t\t\t<p class=\"sub-text\">Morbi finibus erat ullamcorper malesuada</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t</div>
\t</div>
</section>
<style>
\t.about-title {
\t\tfont-size: 48px;
\t\tcolor: #423c9e;
\t\tdisplay: block;
\t\tline-height: 1.1;
\t\tmargin-bottom: 38px;
\t}
\t.about-us p {
\t\tfont-size: 18px;
\t\tline-height: 1.8;
\t\tpadding-bottom: 12px;
\t\ttext-align: justify;
\t}
</style>
<section class=\"about-us section-padding ptb-30\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"about-thumb\">
\t\t\t\t\t<img src=\"assets/about3.jpg\" alt=\"about thumb\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"about-content\">
\t\t\t\t\t<h2 class=\"about-title\">What’s in a name?</h2>
\t\t\t\t\t<br>
\t\t\t\t\t<p>
\t\t\t\t\t\tThe word “Zayn” carries a lot of significance. It simultaneously conveys beauty, grace, and
\t\t\t\t\t\t\t\t\t\t\t\t                        radiance. That’s exactly what our jewelry does - it radiates effervescent beauty and grace.
\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- /Brand Story -->
<!-- Testimonial -->
\t<section class=\"flat-spacing pb-0 pt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Customer Reviews</div>
\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"1\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"24\" data-space=\"12\" data-pagination=\"1\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\" data-auto=\"true\" data-delay=\"2500\">
\t\t\t\t<div
\t\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t\t<!-- item 1 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Stunning Quality</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“The craftsmanship is exceptional! My diamond necklace looks even more beautiful in person. Truly worth every penny.“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Priya S.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 2 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Perfect Gift</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“I gifted my wife a diamond ring from here, and she was overjoyed. Amazing service and elegant design!“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Rajesh M.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 3 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Fast & Reliable</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“Super fast delivery and the packaging was luxurious. My diamond earrings arrived in perfect condition. Highly recommend!“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Ananya K.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Elegant Design</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“I love how unique and classy their diamond pendants are. Perfect balance of sparkle and subtlety!“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Sameer P.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- item 2 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Outstanding Customer Support</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“The team was so helpful when I had questions about my order. They made the process seamless.“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Meera T.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 3 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Great Value</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“Excellent value for such high-quality diamonds. I’m thrilled with my purchase and will buy again soon.“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Arjun V.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /Testimonial -->

<!-- /Customer Review -->

<br><br>

";
        // line 409
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/about.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  453 => 409,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<style>
\theader {
\t\tposition: fixed;
\t\ttop: 0;
\t\tleft: 0;
\t\tright: 0;
\t\tz-index: 1000;
\t\tbackground: #fff;
\t}
</style>

<!-- Page Title -->
<section class=\"page-title-image \"  style=\"padding-top:100px;\">
\t<div class=\"page_image overflow-hidden\">
\t\t<img class=\"lazyload ani-zoom\" src=\"assets/aboutbg.jpg\" data-src=\"assets/aboutbg.jpg\" alt=\"Banner\">
\t</div>
\t<div class=\"page_content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"content\">
\t\t\t\t<h1 class=\"heading fw-bold  text-center\" style=\"color:#423c9e\">
\t\t\t\t\tAbout Zayn Jewels

\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- /Page Title -->
<!-- Hero Section -->
<section class=\"s-intro flat-spacing\">
\t<div class=\"container\">
\t\t<p class=\"brand-name\">Zayn Jewels</p>
\t\t<div class=\"box-intro\">

\t\t\t<p class=\"intro-text\">
\t\t\t\tZayn Jewels is a family owned manufacturer and distributor of fine jewelry. We specialize in private label manufacturing for small and mid-size retailers located throughout the United States. Our original collection, the Zayn Collection, is comprised of over 3,000 unique designs and is made exclusively with premium 18k and 14k gold, V/S Clarity, G/H color diamonds, Precious and Semi-precious stones. In addition, we offer custom manufacturing and production of fine jewelry made to client specifications.
\t\t\t</p>
\t\t</div>
\t</div>
</section>
<!-- /Hero Section -->
<!-- About -->
<section class=\"s-about\">
\t<div class=\"container\">
\t\t<div class=\"tf-grid-layout tf-col-2 md-col-3 xl-col-4\">
\t\t\t<div class=\"item_2 image d-none d-md-block\">
\t\t\t\t<img class=\"lazyload\" src=\"assets/about1.jpg\" data-src=\"assets/about1.jpg\" alt=\"Modal 2\">
\t\t\t</div>
\t\t\t<div class=\"wd-2-cols\">
\t\t\t\t<div class=\"content-blog text-md-start\">
\t\t\t\t\t<div class=\"d-md-inline-flex\">
\t\t\t\t\t\t<div class=\"wg-curve-text\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<svg width=\"32\" height=\"32\" viewbox=\"0 0 32 32\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M25.0001 8V21C25.0001 21.2652 24.8947 21.5196 24.7072 21.7071C24.5196 21.8946 24.2653 22 24.0001 22C23.7349 22 23.4805 21.8946 23.293 21.7071C23.1054 21.5196 23.0001 21.2652 23.0001 21V10.4137L8.70757 24.7075C8.51993 24.8951 8.26543 25.0006 8.00007 25.0006C7.7347 25.0006 7.48021 24.8951 7.29257 24.7075C7.10493 24.5199 6.99951 24.2654 6.99951 24C6.99951 23.7346 7.10493 23.4801 7.29257 23.2925L21.5863 9H11.0001C10.7349 9 10.4805 8.89464 10.293 8.70711C10.1054 8.51957 10.0001 8.26522 10.0001 8C10.0001 7.73478 10.1054 7.48043 10.293 7.29289C10.4805 7.10536 10.7349 7 11.0001 7H24.0001C24.2653 7 24.5196 7.10536 24.7072 7.29289C24.8947 7.48043 25.0001 7.73478 25.0001 8Z\" fill=\"black\"/>
\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"text-rotate\" data-text=\"Ochaka Store Fashion Style\">
\t\t\t\t\t\t\t\t<div class=\"circle\">
\t\t\t\t\t\t\t\t\t<div class=\"text\" id=\"circularText\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"box-intro\">
\t\t\t\t\t\t<h4 class=\"slogan fw-normal\">EXCEPTIONAL JEWELRY CRAFTSMANSHIP SINCE 1988</h4>
\t\t\t\t\t\t<p class=\"intro-text\">
\t\t\t\t\t\t\tAt Zayn Jewels, we pride ourselves on manufacturing top-quality finished jewelry products and providing a best-in-class suite of services to the retail jewelry industry. Our principals are jewelry veterans with over 35 years of experience in the jewelry industry. We offer our retailers unrivaled customer service, speedy delivery, and extremely competitive wholesale pricing. Contact us today to become a Zayn Jewels partner.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"item_1 image\">
\t\t\t\t<img class=\"lazyload\" src=\"assets/ab1.jpg\" data-src=\"assets/ab1.jpg\" alt=\"Modal 1\">
\t\t\t</div>
\t\t\t<div class=\" d-xl-block\">
\t\t\t\t<img class=\"lazyload \" src=\"assets/ab2.jpg\" data-src=\"assets/ab2.jpg\" alt=\"Modal 2\">
\t\t\t</div>
\t\t\t<div class=\"item_3 image\">
\t\t\t\t<img class=\"lazyload\" src=\"assets/ab3.jpg\" data-src=\"assets/ab3.jpg\" alt=\"Modal 3\">
\t\t\t</div>
\t\t\t<div class=\"item_4 image\">
\t\t\t\t<img class=\"lazyload\" src=\"assets/ab2.jpg\" data-src=\"assets/ab2.jpg\" alt=\"Modal 4\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- /About -->
<!-- Brand Story -->
<section class=\"flat-spacing d-none\">
\t<div class=\"container\">
\t\t<div class=\"sect-title text-center\">
\t\t\t<h1 class=\"s-title mb-8\">Brand Story</h1>
\t\t\t<p class=\"s-subtitle h6\">Up to 50% off Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
\t\t</div>
\t\t<div class=\"box-intro has-mb text-center\">
\t\t\t<h4 class=\"slogan fw-normal\">WE PRIORITIZE SUSTAINABLE AND ENVIRONMENTALLY FRIENDLY DEVELOPMENT.</h4>
\t\t\t<p class=\"intro-text\">
\t\t\t\tMorbi finibus erat ullamcorper malesuada placerat. Integer malesuada orci sed nulla scelerisque fermentum. Suspendisse lacinia
\t\t\t\t\t\t\t\t                        elit
\t\t\t\t<br class=\"d-none d-xxl-block\">
\t\t\t\tat bibendum tincidunt.
\t\t\t</p>
\t\t</div>
\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"15\" data-space=\"10\" data-pagination=\"1\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\">
\t\t\t<div
\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"wg-icon-image hover-img\">
\t\t\t\t\t\t<div class=\"image img-style\">
\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/section/story-1.jpg\" data-src=\"assets/images/section/story-1.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<svg width=\"56\" height=\"56\" viewbox=\"0 0 56 56\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<mask id=\"mask0_643_16068\" style=\"mask-type:luminance\" maskunits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"56\" height=\"56\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M55.25 55.25V0.75H0.75V55.25H55.25Z\" fill=\"white\" stroke=\"white\" stroke-width=\"1.5\"/>
\t\t\t\t\t\t\t\t\t</mask>
\t\t\t\t\t\t\t\t\t<g mask=\"url(#mask0_643_16068)\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M51.6682 33.5091H18.0508M30.7811 44.2344C29.205 44.2344 27.9274 42.9568 27.9274 41.3807C27.9274 39.8047 29.205 38.5271 30.7811 38.5271C32.3571 38.5271 33.6348 39.8047 33.6348 41.3807C33.6348 42.9568 32.3571 44.2344 30.7811 44.2344Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M38.5503 20.3796V6.41859H31.1682V20.3796C23.353 22.0814 17.498 29.0756 17.498 37.4452C17.498 47.0887 25.2709 54.9062 34.8593 54.9062C44.4476 54.9062 52.2205 47.0887 52.2205 37.4452C52.2205 29.0756 46.3655 22.0814 38.5503 20.3796Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M41.1696 6.41797H28.5486V1.09328H41.1696V6.41797ZM21.0637 6.41797H3.7793V1.09328H21.0637V6.41797Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M12.4262 54.9062H12.416C9.61524 54.9062 7.34473 52.6357 7.34473 49.8349V6.4186H17.4975V49.8349C17.4975 52.6357 15.227 54.9062 12.4262 54.9062Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 15.5742H17.2367\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 24.625H10.5066\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 31.5859H10.5066\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 38.5508H10.5066\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M7.79785 45.5117H10.5066\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M46.9992 15.5766C46.9992 16.6087 46.1626 17.4453 45.1304 17.4453C44.0984 17.4453 43.2617 16.6087 43.2617 15.5766C43.2617 14.5446 44.0984 13.708 45.1304 13.708C46.1626 13.708 46.9992 14.5446 46.9992 15.5766Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<h3 class=\"caption fw-normal\">No harmful chemicals</h3>
\t\t\t\t\t\t\t\t<p class=\"sub-text\">Morbi finibus erat ullamcorper malesuada</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 2 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"wg-icon-image hover-img\">
\t\t\t\t\t\t<div class=\"image img-style\">
\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/section/story-2.jpg\" data-src=\"assets/images/section/story-2.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<svg width=\"56\" height=\"56\" viewbox=\"0 0 56 56\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<mask id=\"mask0_643_16092\" style=\"mask-type:luminance\" maskunits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"56\" height=\"56\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M55.25 55.25V0.75H0.75V55.25H55.25Z\" fill=\"white\" stroke=\"white\" stroke-width=\"1.5\"/>
\t\t\t\t\t\t\t\t\t</mask>
\t\t\t\t\t\t\t\t\t<g mask=\"url(#mask0_643_16092)\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M19.6885 1.09373H36.3093L28.0005 11.0117L19.6885 1.09373Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M19.6884 1.09251L16.2471 6.05309L22.6772 15.3633L28.0005 11.0105\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M36.3089 1.09251L39.7502 6.05309L33.3233 15.3633L28 11.0105\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M9.28058 18.6541C10.527 21.032 11.0447 24.4114 11.0447 26.9939V54.9062H44.956V26.9939C44.956 24.4114 45.4739 21.032 46.7201 18.6541M16.247 6.05438L9.46662 9.46173C2.42585 12.9991 1.37793 22.3559 1.37793 31.7716H11.0447M39.7505 6.05438L46.5311 9.46173C53.5719 12.9991 54.6228 22.3559 54.6228 31.7716H44.956\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M27.9941 23.4883H28.0004\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M27.9941 17.25H28.0004\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M11.0442 26.9922H1.49219\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M44.9561 26.9922H54.5051\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M44.9562 50.1289H11.0449\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<h3 class=\"caption fw-normal\">High-quality product</h3>
\t\t\t\t\t\t\t\t<p class=\"sub-text\">Morbi finibus erat ullamcorper malesuada</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 3 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"wg-icon-image hover-img\">
\t\t\t\t\t\t<div class=\"image img-style\">
\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/section/story-3.jpg\" data-src=\"assets/images/section/story-3.jpg\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box-icon\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<svg width=\"56\" height=\"56\" viewbox=\"0 0 56 56\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<mask id=\"mask0_643_16111\" style=\"mask-type:luminance\" maskunits=\"userSpaceOnUse\" x=\"0\" y=\"0\" width=\"56\" height=\"56\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M55.25 55.25V0.75H0.75V55.25H55.25Z\" fill=\"white\" stroke=\"white\" stroke-width=\"1.5\"/>
\t\t\t\t\t\t\t\t\t</mask>
\t\t\t\t\t\t\t\t\t<g mask=\"url(#mask0_643_16111)\">
\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2432 50.3736L28.8294 52.4844C29.88 52.6111 32.1238 53.2218 34.7726 52.323L52.0644 46.4525C55.8145 44.9715 54.4284 40.1074 49.8461 40.8067L48.5738 41.0188L35.3043 43.5663L26.7343 43.6012M32.1903 43.579C35.3043 43.5663 36.6334 38.0945 30.8579 37.1769L24.4557 36.0249C23.0348 35.9268 21.1835 36.3793 18.8858 37.0629L11.2432 39.3352\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M11.2428 51.106V38.7606C11.2428 37.8966 10.5372 37.1878 9.67004 37.1878H2.66339C1.79944 37.1878 1.09375 37.8966 1.09375 38.7606V51.106C1.09375 51.97 1.79944 52.6758 2.66339 52.6758H9.67004C10.5372 52.6758 11.2428 51.97 11.2428 51.106Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M6.80859 6.9492C8.31184 21.8296 30.1387 22.7062 25.7967 13.4748C35.2655 6.48403 14.7045 -1.75364 6.80859 6.9492Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M30.8572 23.3281C30.8572 17.0303 28.0406 13.3435 18.8535 10.3434\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M54.9058 6.9492C53.4026 21.8296 31.5726 22.7062 35.9145 13.4748C26.4489 6.48403 47.0099 -1.75364 54.9058 6.9492Z\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M30.8574 29.8555V23.3298C30.8574 17.0322 33.6739 13.3453 42.8611 10.3452\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t\t<path d=\"M19.2783 36.9498C26.1362 24.3101 43.5452 30.1331 43.1021 42.0703\" stroke=\"black\" stroke-width=\"1.5\" stroke-miterlimit=\"10\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t</svg>

\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<h3 class=\"caption fw-normal\">Environmentally friendly</h3>
\t\t\t\t\t\t\t\t<p class=\"sub-text\">Morbi finibus erat ullamcorper malesuada</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t</div>
\t</div>
</section>
<style>
\t.about-title {
\t\tfont-size: 48px;
\t\tcolor: #423c9e;
\t\tdisplay: block;
\t\tline-height: 1.1;
\t\tmargin-bottom: 38px;
\t}
\t.about-us p {
\t\tfont-size: 18px;
\t\tline-height: 1.8;
\t\tpadding-bottom: 12px;
\t\ttext-align: justify;
\t}
</style>
<section class=\"about-us section-padding ptb-30\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<div class=\"about-thumb\">
\t\t\t\t\t<img src=\"assets/about3.jpg\" alt=\"about thumb\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-7\">
\t\t\t\t<div class=\"about-content\">
\t\t\t\t\t<h2 class=\"about-title\">What’s in a name?</h2>
\t\t\t\t\t<br>
\t\t\t\t\t<p>
\t\t\t\t\t\tThe word “Zayn” carries a lot of significance. It simultaneously conveys beauty, grace, and
\t\t\t\t\t\t\t\t\t\t\t\t                        radiance. That’s exactly what our jewelry does - it radiates effervescent beauty and grace.
\t\t\t\t\t</p>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- /Brand Story -->
<!-- Testimonial -->
\t<section class=\"flat-spacing pb-0 pt-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Customer Reviews</div>
\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"1\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"24\" data-space=\"12\" data-pagination=\"1\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\" data-auto=\"true\" data-delay=\"2500\">
\t\t\t\t<div
\t\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t\t<!-- item 1 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Stunning Quality</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“The craftsmanship is exceptional! My diamond necklace looks even more beautiful in person. Truly worth every penny.“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Priya S.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 2 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Perfect Gift</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“I gifted my wife a diamond ring from here, and she was overjoyed. Amazing service and elegant design!“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Rajesh M.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 3 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Fast & Reliable</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“Super fast delivery and the packaging was luxurious. My diamond earrings arrived in perfect condition. Highly recommend!“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Ananya K.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Elegant Design</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“I love how unique and classy their diamond pendants are. Perfect balance of sparkle and subtlety!“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Sameer P.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- item 2 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Outstanding Customer Support</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“The team was so helpful when I had questions about my order. They made the process seamless.“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Meera T.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 3 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<h4 class=\"tes_title\">Great Value</h4>
\t\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t\t“Excellent value for such high-quality diamonds. I’m thrilled with my purchase and will buy again soon.“
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Arjun V.</p>
\t\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- /Testimonial -->

<!-- /Customer Review -->

<br><br>

{{ footer }}
", "catalog/view/template/common/about.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\common\\about.twig");
    }
}
