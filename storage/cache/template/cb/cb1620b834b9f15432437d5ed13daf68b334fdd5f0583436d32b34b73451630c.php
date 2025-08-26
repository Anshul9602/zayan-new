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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_1ea4976a5474dd0d7c7b57f676de644be7e772ef963d0f5a5695a5ab00129cb5 extends Template
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
\t.tf-swiper.home .swiper-slide {
\t\theight: 100vh;
\t}
\t.hover-img .img-style > img {
\t\theight: auto;
\t}
\t.h1 {
\t\tfont-size: 32px;
\t}
\theader {
\t\tposition: fixed;
\t\ttop: 0;
\t}
\t.wg-cls-2 .tag_cls {
\t\tfont-size: 22px;
\t}
</style>

<!-- Banner -->

<div class=\"tf-slideshow home type-abs tf-btn-swiper-main hover-sw-nav\" >
\t<div dir=\"ltr\" class=\"swiper tf-swiper home sw-slide-show slider_effect_fade\" data-auto=\"true\" data-loop=\"true\" data-effect=\"fade\" data-delay=\"3000\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 28
            yield "\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"slider-wrap\">
\t\t\t\t\t\t<div class=\"sld_image\">
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 32);
            yield "\" class=\"\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 33);
            yield "\" data-src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 33);
            yield "\" alt=\"Image\" class=\"lazyload\" style=\"width: 100%; \"></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "\t\t</div>
\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t</div>

</div>

<div class=\"s-collection\">
\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-pagination=\"1\" data-space-lg=\"24\" data-space-md=\"15\" data-space=\"10\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\">
\t\t<div
\t\t\tclass=\"swiper-wrapper\">
\t\t\t<!-- item 1 -->
\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 51
            yield "\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"wg-cls-2 d-flex hover-img\">
\t\t\t\t\t\t<a href=\"";
            // line 53
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 53);
            yield "\" class=\"image img-style\">
\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 54);
            yield "\" data-src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 54);
            yield "\" alt=\"Slider\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"cls-content_wrap b-16\">
\t\t\t\t\t\t\t<div class=\"cls-content\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 58);
            yield "\" class=\"tag_cls h3 link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 58);
            yield "</a>
\t\t\t\t\t\t\t\t<span class=\"br-line type-vertical\"></span>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 60
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 60);
            yield "\" class=\"tf-btn-line text-nowrap\">
\t\t\t\t\t\t\t\t\tShop now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "\t\t</div>
\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t</div>
</div>

<!-- Product -->


<!-- New -->
<div class=\" flat-animate-tab pt-5 pb-5\">
\t<div class=\"container\">
\t\t<div class=\"sect-title wow fadeInUp\">
\t\t\t<div class=\"h1 title text-center mb-24\">New Arrivals</div>
\t\t\t<ul class=\"tab-product_list\" role=\"tablist\">
\t\t\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["featured_tabs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 83
            yield "\t\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t\t<a href=\"#tab-";
            // line 84
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "path_id", [], "any", false, false, false, 84);
            yield "\" data-bs-toggle=\"tab\" class=\"tf-btn-line tf-btn-tab ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 84) == 1)) {
                yield "active";
            }
            yield "\">
\t\t\t\t\t\t\t";
            // line 85
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 85);
            yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "\t\t\t</ul>
\t\t</div>
\t\t<div class=\"tab-content\">
\t\t\t";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["featured_tabs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 93
            yield "\t\t\t\t<div class=\"tab-pane ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93) == 1)) {
                yield "active show";
            }
            yield "\" id=\"tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "path_id", [], "any", false, false, false, 93);
            yield "\" role=\"tabpanel\">

\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over wow fadeInUp\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\" data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\" data-grid=\"2\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["product_html"]) {
                // line 98
                yield "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">";
                yield $context["product_html"];
                yield "</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product_html'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "\t\t</div>

\t</div>
</div>
<!-- /New -->

<!-- Shop This Look -->
<div class=\"themesFlat pt-5\">
\t<div class=\"container-full\">
\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Shop This Look</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xl-4\">
\t\t\t\t<div class=\"box-image_V01 hover-img mb-xl-0 wow fadeInUp\">
\t\t\t\t\t<a href=\"#\" class=\"box-image_image img-style\" style=\"background: #000;\">
\t\t\t\t\t\t<img src=\"assets/col2.jpg\" data-src=\"assets/col2.jpg\" alt=\"Image\" class=\"lazyload\" style=\"opacity: 0.6;\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"box-image_content\">
\t\t\t\t\t\t<a href=\"#\" class=\"title text-display fw-semibold text-white link\">Tennis Connection</a>
\t\t\t\t\t\t<span class=\"sub-title h5 text-white\">";
        // line 125
        yield ($context["shop_total"] ?? null);
        yield " products</span>
\t\t\t\t\t\t<a href=\"index.php?route=product/category&language=en-gb&path=60_67\" class=\"tf-btn-line style-white\">
\t\t\t\t\t\t\tEXPLORE NOW
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-8\">
\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over wow fadeInUp\" data-preview=\"3\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\" data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"3\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["shop_look_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_html"]) {
            // line 136
            yield "\t\t\t\t\t\t<div class=\"swiper-slide\">";
            yield $context["product_html"];
            yield "</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_html'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- /Shop This Look -->

<!-- Testimonial -->
<section class=\"flat-spacing pb-0 pt-5\">
\t<div class=\"container\">
\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Customer Reviews</div>
\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"1\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"24\" data-space=\"12\" data-pagination=\"1\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\">
\t\t\t<div
\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h4 class=\"tes_title\">Best Product Quality</h4>
\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t“The build quality is excellent and everything works smoothly. I can feel the difference compared to other
\t\t\t\t\t\t\t\t                                        brands“
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Brooklyn Simmons</p>
\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t<div class=\"tes_product\">
\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/products/product-35.jpg\" data-src=\"assets/images/products/product-35.jpg\" alt=\"Diamond Ring\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-infor\">
\t\t\t\t\t\t\t\t<h5 class=\"prd_name\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"link\">
\t\t\t\t\t\t\t\t\t\tDiamond Ring
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<h6 class=\"prd_price\">\$14,99</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 2 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h4 class=\"tes_title\">Dedicated Service</h4>
\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t“The support from ACIS has been outstanding. Anytime we had a question or needed help, their team
\t\t\t\t\t\t\t\t                                        responded quickly and professionally.“
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Mas Shin</p>
\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t<div class=\"tes_product\">
\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/products/product-40.jpg\" data-src=\"assets/images/products/product-40.jpg\" alt=\"UrbanCool Work Shirt\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-infor\">
\t\t\t\t\t\t\t\t<h5 class=\"prd_name\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"link\">
\t\t\t\t\t\t\t\t\t\tUrbanCool Work Shirt
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<h6 class=\"prd_price\">\$59,99</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 3 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h4 class=\"tes_title\">Exceptional Reliability</h4>
\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t“No surprises, just consistent and dependable performance every single time without fail.“
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Manh Tran</p>
\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t<div class=\"tes_product\">
\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/products/product-13.jpg\" data-src=\"assets/images/products/product-13.jpg\" alt=\"UrbanCool Work Shirt\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-infor\">
\t\t\t\t\t\t\t\t<h5 class=\"prd_name\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"link\">
\t\t\t\t\t\t\t\t\t\tWorkMode Lite
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<h6 class=\"prd_price\">\$39,99</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t</div>
\t</div>
</section>
<!-- /Testimonial -->


<!-- Blog -->
<div class=\"flat-spacing\">
\t<div class=\"container\">
\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Read Our Blog</div>
\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"2\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"24\" data-space=\"12\" data-pagination=\"1\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\">
\t\t\t<div
\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"article-blog type-space-2 hover-img4 wow fadeInLeft\">
\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_image img-style4\">
\t\t\t\t\t\t\t<img src=\"assets/images/blog22.jpg\" data-src=\"assets/images/blog22.jpg\" alt=\"Image\" class=\"lazyload aspect-ratio-0\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"entry_tag\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"name-tag h6 link\">March 2, 2025</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_name link h4\">
\t\t\t\t\t\t\t\tHistory of Cross Jewelry
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p class=\"text h6\">
\t\t\t\t\t\t\t\tCross necklaces have a long and varied history, deeply intertwined with religious, cultural, and fashion traditions.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"tf-btn-line\">
\t\t\t\t\t\t\t\tRead more
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 2 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"article-blog type-space-2 hover-img4 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_image img-style4\">
\t\t\t\t\t\t\t<img src=\"assets/images/blog33.png\" data-src=\"assets/images/blog33.png\" alt=\"Image\" class=\"lazyload aspect-ratio-0\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"entry_tag\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"name-tag h6 link\">March 2, 2025</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_name link h4\">
\t\t\t\t\t\t\t\tSpot Jewelry According to your Birthstone</a>
\t\t\t\t\t\t\t<p class=\"text h6\">
\t\t\t\t\t\t\t\tWe are very connected with our birth month, and jewels with your birthstone are the new way to flaunt who you really are.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g1\" class=\"tf-btn-line\">
\t\t\t\t\t\t\t\tRead more
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t</div>
\t</div>
</div>
<!-- /Blog -->


<!-- New Letter -->
<div class=\"modal modalCentered fade modal-newletter auto-popup\" id=\"newLetter\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content p-0\">
\t\t\t<div class=\"modal-heading\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<img class=\"lazyload\" src=\"assets/col-61.jpg\" data-src=\"assets/col-61.jpg\" alt=\"Image\">
\t\t\t\t</div>
\t\t\t\t<span class=\"icon-close-popup\" data-bs-dismiss=\"modal\">
\t\t\t\t\t<i class=\"icon-close\"></i>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p class=\"h6 sub-title\">Subscribe to our newletter!</p>
\t\t\t\t<h3 class=\"fw-normal title\">Receive 20% off your next order, along with exclusive offers and more!</h3>
\t\t\t\t<form class=\"form-newletter\">
\t\t\t\t\t<fieldset class=\"mb-12\">
\t\t\t\t\t\t<input class=\"style-stroke\" type=\"text\" placeholder=\"Enter your email\" required>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<button type=\"submit\" class=\"tf-btn w-100 animate-btn\">Subscribe</button>
\t\t\t\t</form>
\t\t\t\t<ul class=\"tf-social-icon justify-content-center w-100\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.instagram.com/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://x.com/\" target=\"_blank\" class=\"social-x\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-x\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.tiktok.com/\" target=\"_blank\" class=\"social-tiktok\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-tiktok\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- /New Letter -->


<script>
\t\$(window).on(\"scroll\", function () {
if (\$(this).scrollTop() > 50) { // adjust 50 to when you want the color change
\$(\"header\").css(\"background-color\", \"white\");

} else {
\$(\"header\").css(\"background-color\", \"transparent\");

}
});
</script>

";
        // line 403
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
        return "catalog/view/template/common/home.twig";
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
        return array (  596 => 403,  329 => 138,  320 => 136,  316 => 135,  303 => 125,  283 => 107,  263 => 100,  254 => 98,  250 => 97,  238 => 93,  221 => 92,  216 => 89,  198 => 85,  190 => 84,  187 => 83,  170 => 82,  154 => 68,  140 => 60,  133 => 58,  124 => 54,  120 => 53,  116 => 51,  112 => 50,  99 => 39,  85 => 33,  81 => 32,  75 => 28,  71 => 27,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<style>
\t.tf-swiper.home .swiper-slide {
\t\theight: 100vh;
\t}
\t.hover-img .img-style > img {
\t\theight: auto;
\t}
\t.h1 {
\t\tfont-size: 32px;
\t}
\theader {
\t\tposition: fixed;
\t\ttop: 0;
\t}
\t.wg-cls-2 .tag_cls {
\t\tfont-size: 22px;
\t}
</style>

<!-- Banner -->

<div class=\"tf-slideshow home type-abs tf-btn-swiper-main hover-sw-nav\" >
\t<div dir=\"ltr\" class=\"swiper tf-swiper home sw-slide-show slider_effect_fade\" data-auto=\"true\" data-loop=\"true\" data-effect=\"fade\" data-delay=\"3000\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t{% for banner in banners %}
\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"slider-wrap\">
\t\t\t\t\t\t<div class=\"sld_image\">
\t\t\t\t\t\t\t<a href=\"{{ banner.link }}\" class=\"\">
\t\t\t\t\t\t\t\t<img src=\"{{ banner.image }}\" data-src=\"{{ banner.image }}\" alt=\"Image\" class=\"lazyload\" style=\"width: 100%; \"></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t</div>

</div>

<div class=\"s-collection\">
\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-pagination=\"1\" data-space-lg=\"24\" data-space-md=\"15\" data-space=\"10\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\">
\t\t<div
\t\t\tclass=\"swiper-wrapper\">
\t\t\t<!-- item 1 -->
\t\t\t{% for banner in banners2 %}
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"wg-cls-2 d-flex hover-img\">
\t\t\t\t\t\t<a href=\"{{ banner.link }}\" class=\"image img-style\">
\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"{{ banner.image }}\" data-src=\"{{ banner.image }}\" alt=\"Slider\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"cls-content_wrap b-16\">
\t\t\t\t\t\t\t<div class=\"cls-content\">
\t\t\t\t\t\t\t\t<a href=\"{{ banner.link }}\" class=\"tag_cls h3 link\">{{ banner.title }}</a>
\t\t\t\t\t\t\t\t<span class=\"br-line type-vertical\"></span>
\t\t\t\t\t\t\t\t<a href=\"{{ banner.link }}\" class=\"tf-btn-line text-nowrap\">
\t\t\t\t\t\t\t\t\tShop now
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t</div>
</div>

<!-- Product -->


<!-- New -->
<div class=\" flat-animate-tab pt-5 pb-5\">
\t<div class=\"container\">
\t\t<div class=\"sect-title wow fadeInUp\">
\t\t\t<div class=\"h1 title text-center mb-24\">New Arrivals</div>
\t\t\t<ul class=\"tab-product_list\" role=\"tablist\">
\t\t\t\t{% for tab in featured_tabs %}
\t\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t\t<a href=\"#tab-{{ tab.path_id }}\" data-bs-toggle=\"tab\" class=\"tf-btn-line tf-btn-tab {% if loop.index == 1 %}active{% endif %}\">
\t\t\t\t\t\t\t{{ tab.name }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"tab-content\">
\t\t\t{% for tab in featured_tabs %}
\t\t\t\t<div class=\"tab-pane {% if loop.index == 1 %}active show{% endif %}\" id=\"tab-{{ tab.path_id }}\" role=\"tabpanel\">

\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over wow fadeInUp\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\" data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\" data-grid=\"2\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t{% for product_html in tab.products %}
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">{{ product_html }}</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t{% endfor %}
\t\t</div>

\t</div>
</div>
<!-- /New -->

<!-- Shop This Look -->
<div class=\"themesFlat pt-5\">
\t<div class=\"container-full\">
\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Shop This Look</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xl-4\">
\t\t\t\t<div class=\"box-image_V01 hover-img mb-xl-0 wow fadeInUp\">
\t\t\t\t\t<a href=\"#\" class=\"box-image_image img-style\" style=\"background: #000;\">
\t\t\t\t\t\t<img src=\"assets/col2.jpg\" data-src=\"assets/col2.jpg\" alt=\"Image\" class=\"lazyload\" style=\"opacity: 0.6;\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"box-image_content\">
\t\t\t\t\t\t<a href=\"#\" class=\"title text-display fw-semibold text-white link\">Tennis Connection</a>
\t\t\t\t\t\t<span class=\"sub-title h5 text-white\">{{ shop_total }} products</span>
\t\t\t\t\t\t<a href=\"index.php?route=product/category&language=en-gb&path=60_67\" class=\"tf-btn-line style-white\">
\t\t\t\t\t\t\tEXPLORE NOW
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-xl-8\">
\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over wow fadeInUp\" data-preview=\"3\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\" data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"3\">
\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t{% for product_html in shop_look_products %}
\t\t\t\t\t\t<div class=\"swiper-slide\">{{ product_html }}</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- /Shop This Look -->

<!-- Testimonial -->
<section class=\"flat-spacing pb-0 pt-5\">
\t<div class=\"container\">
\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Customer Reviews</div>
\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"1\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"24\" data-space=\"12\" data-pagination=\"1\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\">
\t\t\t<div
\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h4 class=\"tes_title\">Best Product Quality</h4>
\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t“The build quality is excellent and everything works smoothly. I can feel the difference compared to other
\t\t\t\t\t\t\t\t                                        brands“
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Brooklyn Simmons</p>
\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t<div class=\"tes_product\">
\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/products/product-35.jpg\" data-src=\"assets/images/products/product-35.jpg\" alt=\"Diamond Ring\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-infor\">
\t\t\t\t\t\t\t\t<h5 class=\"prd_name\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"link\">
\t\t\t\t\t\t\t\t\t\tDiamond Ring
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<h6 class=\"prd_price\">\$14,99</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 2 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h4 class=\"tes_title\">Dedicated Service</h4>
\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t“The support from ACIS has been outstanding. Anytime we had a question or needed help, their team
\t\t\t\t\t\t\t\t                                        responded quickly and professionally.“
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Mas Shin</p>
\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t<div class=\"tes_product\">
\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/products/product-40.jpg\" data-src=\"assets/images/products/product-40.jpg\" alt=\"UrbanCool Work Shirt\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-infor\">
\t\t\t\t\t\t\t\t<h5 class=\"prd_name\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"link\">
\t\t\t\t\t\t\t\t\t\tUrbanCool Work Shirt
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<h6 class=\"prd_price\">\$59,99</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 3 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"testimonial-V01 wow fadeInLeft\" data-wow-delay=\"0.2s\">
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<h4 class=\"tes_title\">Exceptional Reliability</h4>
\t\t\t\t\t\t\t<p class=\"tes_text h4\">
\t\t\t\t\t\t\t\t“No surprises, just consistent and dependable performance every single time without fail.“
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<div class=\"tes_author\">
\t\t\t\t\t\t\t\t<p class=\"author-name h5\">Manh Tran</p>
\t\t\t\t\t\t\t\t<i class=\"author-verified icon-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"rate_wrap\">
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t\t<i class=\"icon-star text-star\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t<div class=\"tes_product\">
\t\t\t\t\t\t\t<div class=\"product-image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/images/products/product-13.jpg\" data-src=\"assets/images/products/product-13.jpg\" alt=\"UrbanCool Work Shirt\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"product-infor\">
\t\t\t\t\t\t\t\t<h5 class=\"prd_name\">
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"link\">
\t\t\t\t\t\t\t\t\t\tWorkMode Lite
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t<h6 class=\"prd_price\">\$39,99</h6>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t</div>
\t</div>
</section>
<!-- /Testimonial -->


<!-- Blog -->
<div class=\"flat-spacing\">
\t<div class=\"container\">
\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Read Our Blog</div>
\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"2\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"24\" data-space=\"12\" data-pagination=\"1\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\">
\t\t\t<div
\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"article-blog type-space-2 hover-img4 wow fadeInLeft\">
\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_image img-style4\">
\t\t\t\t\t\t\t<img src=\"assets/images/blog22.jpg\" data-src=\"assets/images/blog22.jpg\" alt=\"Image\" class=\"lazyload aspect-ratio-0\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"entry_tag\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"name-tag h6 link\">March 2, 2025</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_name link h4\">
\t\t\t\t\t\t\t\tHistory of Cross Jewelry
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p class=\"text h6\">
\t\t\t\t\t\t\t\tCross necklaces have a long and varied history, deeply intertwined with religious, cultural, and fashion traditions.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"tf-btn-line\">
\t\t\t\t\t\t\t\tRead more
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- item 2 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"article-blog type-space-2 hover-img4 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_image img-style4\">
\t\t\t\t\t\t\t<img src=\"assets/images/blog33.png\" data-src=\"assets/images/blog33.png\" alt=\"Image\" class=\"lazyload aspect-ratio-0\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"entry_tag\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"name-tag h6 link\">March 2, 2025</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_name link h4\">
\t\t\t\t\t\t\t\tSpot Jewelry According to your Birthstone</a>
\t\t\t\t\t\t\t<p class=\"text h6\">
\t\t\t\t\t\t\t\tWe are very connected with our birth month, and jewels with your birthstone are the new way to flaunt who you really are.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g1\" class=\"tf-btn-line\">
\t\t\t\t\t\t\t\tRead more
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t</div>
\t</div>
</div>
<!-- /Blog -->


<!-- New Letter -->
<div class=\"modal modalCentered fade modal-newletter auto-popup\" id=\"newLetter\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content p-0\">
\t\t\t<div class=\"modal-heading\">
\t\t\t\t<div class=\"image\">
\t\t\t\t\t<img class=\"lazyload\" src=\"assets/col-61.jpg\" data-src=\"assets/col-61.jpg\" alt=\"Image\">
\t\t\t\t</div>
\t\t\t\t<span class=\"icon-close-popup\" data-bs-dismiss=\"modal\">
\t\t\t\t\t<i class=\"icon-close\"></i>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<p class=\"h6 sub-title\">Subscribe to our newletter!</p>
\t\t\t\t<h3 class=\"fw-normal title\">Receive 20% off your next order, along with exclusive offers and more!</h3>
\t\t\t\t<form class=\"form-newletter\">
\t\t\t\t\t<fieldset class=\"mb-12\">
\t\t\t\t\t\t<input class=\"style-stroke\" type=\"text\" placeholder=\"Enter your email\" required>
\t\t\t\t\t</fieldset>
\t\t\t\t\t<button type=\"submit\" class=\"tf-btn w-100 animate-btn\">Subscribe</button>
\t\t\t\t</form>
\t\t\t\t<ul class=\"tf-social-icon justify-content-center w-100\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.facebook.com/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.instagram.com/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://x.com/\" target=\"_blank\" class=\"social-x\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-x\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"https://www.tiktok.com/\" target=\"_blank\" class=\"social-tiktok\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-tiktok\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- /New Letter -->


<script>
\t\$(window).on(\"scroll\", function () {
if (\$(this).scrollTop() > 50) { // adjust 50 to when you want the color change
\$(\"header\").css(\"background-color\", \"white\");

} else {
\$(\"header\").css(\"background-color\", \"transparent\");

}
});
</script>

{{ footer }}
", "catalog/view/template/common/home.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\home.twig");
    }
}
