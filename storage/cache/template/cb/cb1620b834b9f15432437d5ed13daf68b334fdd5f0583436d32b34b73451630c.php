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
\t.modal-newletter .modal-dialog {
\t\tmax-width: 60%;
\t}
\t.modal-newletter .modal-content {
\t\tpadding: 0;
\t}
\t.mob{
\t\tdisplay: none;
\t}
\t@media (max-width: 768px) {\t
\t.desk{
\t\tdisplay: none;
\t}
\t.mob{
\t\tdisplay: block;
\t}
\t}
</style>

<!-- Banner -->

<div class=\"tf-slideshow home type-abs tf-btn-swiper-main hover-sw-nav\">
\t<div dir=\"ltr\" class=\"swiper tf-swiper home sw-slide-show slider_effect_fade\" data-auto=\"true\" data-loop=\"true\" data-effect=\"fade\" data-delay=\"3000\">
\t\t<div class=\"swiper-wrapper desk\">
\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 45
            yield "\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"slider-wrap\">
\t\t\t\t\t\t<div class=\"sld_image\">
\t\t\t\t\t\t\t<a href=\"";
            // line 49
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 49);
            yield "\" class=\"\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 50
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 50);
            yield "\" data-src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 50);
            yield "\" alt=\"Image\" class=\"lazyload\" style=\"width: 100%; \"></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "\t\t</div>
\t\t<div class=\"swiper-wrapper mob\">
\t\t\t
\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"slider-wrap\">
\t\t\t\t\t\t<div class=\"sld_image\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t<img src=\"assets/banner_mob.jpg\" data-src=\"assets/banner_mob.jpg\" alt=\"Image\" class=\"lazyload\" style=\"width: 100%; \"></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t</div>

</div>

<div class=\"s-collection\">
\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-pagination=\"1\" data-space-lg=\"24\" data-space-md=\"15\" data-space=\"10\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\" data-auto=\"true\" data-delay=\"2500\">
\t\t<div
\t\t\tclass=\"swiper-wrapper\">
\t\t\t<!-- item 1 -->
\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 82
            yield "\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"wg-cls-2 d-flex hover-img\">
\t\t\t\t\t\t<a href=\"";
            // line 84
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 84);
            yield "\" class=\"image img-style\">
\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"";
            // line 85
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 85);
            yield "\" data-src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 85);
            yield "\" alt=\"Slider\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"cls-content_wrap b-16\">
\t\t\t\t\t\t\t<div class=\"cls-content\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 89
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 89);
            yield "\" class=\"tag_cls h3 link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 89);
            yield "</a>
\t\t\t\t\t\t\t\t<span class=\"br-line type-vertical\"></span>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 91
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 91);
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
        // line 99
        yield "\t\t</div>
\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t</div>
\t<div class=\"d-none\">
\t\t";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners2"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 104
            yield "\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"wg-cls-2 d-flex hover-img\">
\t\t\t\t\t<a href=\"";
            // line 106
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 106);
            yield "\" class=\"image img-style\">
\t\t\t\t\t\t<img class=\"lazyload\" src=\"";
            // line 107
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 107);
            yield "\" data-src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 107);
            yield "\" alt=\"Slider\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"cls-content_wrap b-16\">
\t\t\t\t\t\t<div class=\"cls-content\">
\t\t\t\t\t\t\t<a href=\"";
            // line 111
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 111);
            yield "\" class=\"tag_cls h3 link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 111);
            yield "</a>
\t\t\t\t\t\t\t<span class=\"br-line type-vertical\"></span>
\t\t\t\t\t\t\t<a href=\"";
            // line 113
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 113);
            yield "\" class=\"tf-btn-line text-nowrap\">
\t\t\t\t\t\t\t\tShop now
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "\t</div>

\t<!-- Product -->


\t<!-- New -->
\t<div class=\" flat-animate-tab pt-5 pb-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"sect-title wow fadeInUp\">
\t\t\t\t<div class=\"h1 title text-center mb-24\">Featured Products</div>
\t\t\t\t<ul class=\"tab-product_list\" role=\"tablist\">
\t\t\t\t\t";
        // line 132
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
            // line 133
            yield "\t\t\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a href=\"#tab-";
            // line 134
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "path_id", [], "any", false, false, false, 134);
            yield "\" data-bs-toggle=\"tab\" class=\"tf-btn-line tf-btn-tab ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 134) == 1)) {
                yield "active";
            }
            yield "\">
\t\t\t\t\t\t\t\t";
            // line 135
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 135);
            yield "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
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
        // line 139
        yield "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"tab-content\">
\t\t\t\t";
        // line 142
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
            // line 143
            yield "\t\t\t\t\t<div class=\"tab-pane ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 143) == 1)) {
                yield "active show";
            }
            yield "\" id=\"tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "path_id", [], "any", false, false, false, 143);
            yield "\" role=\"tabpanel\">

\t\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over wow fadeInUp\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\" data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\" data-grid=\"2\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 147));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 148
                yield "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-product grid\" data-availability=\"In stock\" data-brand=\"automet\" data-product-id=\"";
                // line 149
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 149);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-product_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
                // line 152
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 152);
                yield "\" class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-product\" src=\"";
                // line 153
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 153);
                yield "\" data-src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 153);
                yield "\" alt=\"";
                yield ($context["name"] ?? null);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-hover\" src=\"";
                // line 154
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 154);
                yield "\" data-src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 154);
                yield "\" alt=\"";
                yield ($context["name"] ?? null);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 157
                yield "\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"product-action_list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon btn-add-to-cart\" data-url=\"";
                // line 160
                yield ($context["cart_add"] ?? null);
                yield "\" data-product-id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 160);
                yield "\" data-quantity=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-shopping-cart-simple\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon btn-add-wishlist\" data-url=\"";
                // line 166
                yield ($context["wishlist_add"] ?? null);
                yield "\" data-product-id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 166);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon btn-quick-view\" data-product-id=\"";
                // line 172
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 172);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Quick view</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-product_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 180
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 180);
                yield "\" class=\"name-product h4 link\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 180);
                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 182
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 182)) {
                    // line 183
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old h6 fw-normal\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 183);
                    yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">";
                    // line 184
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 184);
                    yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 186
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 186);
                    yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 188
                yield "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


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
        // line 201
        yield "\t\t\t</div>

\t\t</div>
\t</div>
\t<!-- /New -->

\t<!-- Shop This Look -->
\t<div class=\"themesFlat pt-5\">
\t\t<div class=\"container-full\">
\t\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Shop This Look</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-4\">
\t\t\t\t\t<div class=\"box-image_V01 hover-img mb-xl-0 wow fadeInUp\">
\t\t\t\t\t\t<a href=\"#\" class=\"box-image_image img-style\" style=\"background: #000;\">
\t\t\t\t\t\t\t<img src=\"assets/col21.jpg\" data-src=\"assets/col21.jpg\" alt=\"Image\" class=\"lazyload\" style=\"opacity: 0.6;\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"box-image_content\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"title text-display fw-semibold text-white link\">Tennis Connection</a>
\t\t\t\t\t\t\t<span class=\"sub-title h5 text-white d-none\">";
        // line 219
        yield ($context["shop_total"] ?? null);
        yield "
\t\t\t\t\t\t\t\tproducts</span>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&language=en-gb&path=60_67\" class=\"tf-btn-line style-white mt-4\">
\t\t\t\t\t\t\t\tEXPLORE NOW
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over wow fadeInUp\" data-preview=\"3\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\" data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"3\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["shop_look_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 231
            yield "\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card-product grid\" data-availability=\"In stock\" data-brand=\"automet\" data-product-id=\"";
            // line 232
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 232);
            yield "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-product_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\thref=\"";
            // line 235
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 235);
            yield "\" class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-product\" src=\"";
            // line 236
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 236);
            yield "\" data-src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 236);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-hover\" src=\"";
            // line 237
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 237);
            yield "\" data-src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 237);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 240
            yield "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"product-action_list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon btn-add-to-cart\" data-url=\"";
            // line 243
            yield ($context["cart_add"] ?? null);
            yield "\" data-product-id=\"";
            yield ($context["product_id"] ?? null);
            yield "\" data-quantity=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-shopping-cart-simple\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon btn-add-wishlist\" data-url=\"";
            // line 249
            yield ($context["wishlist_add"] ?? null);
            yield "\" data-product-id=\"";
            yield ($context["product_id"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon btn-quick-view\" data-product-id=\"";
            // line 255
            yield ($context["product_id"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Quick view</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-product_info\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 263
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 263);
            yield "\" class=\"name-product h4 link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 263);
            yield "</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 265
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 265)) {
                // line 266
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old h6 fw-normal\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 266);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">";
                // line 267
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 267);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 269
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 269);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 271
            yield "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"product-color_list d-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip color-filter\">Pink</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"swatch-value bg-hot-pink\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/RG.JPG\" data-src=\"assets/RG.JPG\" alt=\"Product\">
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip color-filter\">Beige</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"swatch-value bg-light-beige\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/WG.jpg\" data-src=\"assets/WG.jpg\" alt=\"Product\">

\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip color-filter\">Dusty Olive</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"swatch-value bg-dusty-olive\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/YG.JPG\" data-src=\"assets/YG.JPG\" alt=\"Product\">
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Shop This Look -->

\t<!-- Testimonial -->
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


\t<!-- Blog -->
\t<div class=\"flat-spacing\">
\t\t<div class=\"container\">
\t\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Read Our Blog</div>
\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"2\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"24\" data-space=\"12\" data-pagination=\"1\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\">
\t\t\t\t<div
\t\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t\t<!-- item 1 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"article-blog type-space-2 hover-img4 wow fadeInLeft\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_image img-style4\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/blog22.jpg\" data-src=\"assets/images/blog22.jpg\" alt=\"Image\" class=\"lazyload aspect-ratio-0\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"entry_tag\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"name-tag h6 link\">March 2, 2025</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_name link h4\">
\t\t\t\t\t\t\t\t\tHistory of Cross Jewelry
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text h6\">
\t\t\t\t\t\t\t\t\tCross necklaces have a long and varied history, deeply intertwined with religious, cultural, and fashion traditions.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"tf-btn-line\">
\t\t\t\t\t\t\t\t\tRead more
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 2 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"article-blog type-space-2 hover-img4 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_image img-style4\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/blog33.png\" data-src=\"assets/images/blog33.png\" alt=\"Image\" class=\"lazyload aspect-ratio-0\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"entry_tag\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"name-tag h6 link\">March 2, 2025</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_name link h4\">
\t\t\t\t\t\t\t\t\tSpot Jewelry According to your Birthstone</a>
\t\t\t\t\t\t\t\t<p class=\"text h6\">
\t\t\t\t\t\t\t\t\tWe are very connected with our birth month, and jewels with your birthstone are the new way to flaunt who you really are.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g1\" class=\"tf-btn-line\">
\t\t\t\t\t\t\t\t\tRead more
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Blog -->


\t<!-- New Letter -->
\t<div class=\"modal modalCentered fade modal-newletter auto-popup\" id=\"newLetter\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content p-0\">
\t\t\t\t<span class=\"icon-close-popup\" data-bs-dismiss=\"modal\">
\t\t\t\t\t<i class=\"icon-close\"></i>
\t\t\t\t</span>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\" style=\"display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t<div class=\"modal-heading\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/news.jpg\" data-src=\"assets/news.jpg\" alt=\"Image\" style=\"width: 80%;  object-fit: cover;\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<p class=\"h6 sub-title\">Subscribe to our newletter!</p>
\t\t\t\t\t\t\t<h3 class=\"fw-normal title\">Receive 10% off your next order, along with exclusive offers and more!</h3>
\t\t\t\t\t\t\t<form class=\"form-newletter\">
\t\t\t\t\t\t\t\t<fieldset class=\"mb-12\">
\t\t\t\t\t\t\t\t\t<input class=\"style-stroke\" type=\"text\" placeholder=\"Enter your email\" required>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"tf-btn w-100 animate-btn\">Subscribe</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<ul class=\"tf-social-icon justify-content-center w-100\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/zaynjewels/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/zaynjewels/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UC0KmddVZ3BX4Ly5jjBRW7SA\" target=\"_blank\" class=\"social-tiktok\">
\t\t\t\t\t\t\t\t\t\t <span class=\"icon\"><i class=\"fab fa-youtube\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /New Letter -->


\t<script>
\t\t\$(window).on(\"scroll\", function () {
if (\$(this).scrollTop() > 50) { // adjust 50 to when you want the color change
\$(\"header\").css(\"background-color\", \"white\");

} else {
\$(\"header\").css(\"background-color\", \"transparent\");

}
});
\t</script>

\t";
        // line 591
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
        return array (  910 => 591,  611 => 294,  583 => 271,  577 => 269,  572 => 267,  567 => 266,  565 => 265,  558 => 263,  547 => 255,  536 => 249,  525 => 243,  520 => 240,  512 => 237,  504 => 236,  500 => 235,  494 => 232,  491 => 231,  487 => 230,  473 => 219,  453 => 201,  433 => 194,  422 => 188,  416 => 186,  411 => 184,  406 => 183,  404 => 182,  397 => 180,  386 => 172,  375 => 166,  364 => 160,  359 => 157,  351 => 154,  343 => 153,  339 => 152,  333 => 149,  330 => 148,  326 => 147,  314 => 143,  297 => 142,  292 => 139,  274 => 135,  266 => 134,  263 => 133,  246 => 132,  233 => 121,  219 => 113,  212 => 111,  203 => 107,  199 => 106,  195 => 104,  191 => 103,  185 => 99,  171 => 91,  164 => 89,  155 => 85,  151 => 84,  147 => 82,  143 => 81,  116 => 56,  102 => 50,  98 => 49,  92 => 45,  88 => 44,  42 => 1,);
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
\t.modal-newletter .modal-dialog {
\t\tmax-width: 60%;
\t}
\t.modal-newletter .modal-content {
\t\tpadding: 0;
\t}
\t.mob{
\t\tdisplay: none;
\t}
\t@media (max-width: 768px) {\t
\t.desk{
\t\tdisplay: none;
\t}
\t.mob{
\t\tdisplay: block;
\t}
\t}
</style>

<!-- Banner -->

<div class=\"tf-slideshow home type-abs tf-btn-swiper-main hover-sw-nav\">
\t<div dir=\"ltr\" class=\"swiper tf-swiper home sw-slide-show slider_effect_fade\" data-auto=\"true\" data-loop=\"true\" data-effect=\"fade\" data-delay=\"3000\">
\t\t<div class=\"swiper-wrapper desk\">
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
\t\t<div class=\"swiper-wrapper mob\">
\t\t\t
\t\t\t\t<!-- item 1 -->
\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t<div class=\"slider-wrap\">
\t\t\t\t\t\t<div class=\"sld_image\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"\">
\t\t\t\t\t\t\t\t<img src=\"assets/banner_mob.jpg\" data-src=\"assets/banner_mob.jpg\" alt=\"Image\" class=\"lazyload\" style=\"width: 100%; \"></a>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t</div>
\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t</div>

</div>

<div class=\"s-collection\">
\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"3\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-pagination=\"1\" data-space-lg=\"24\" data-space-md=\"15\" data-space=\"10\" data-pagination-sm=\"1\" data-pagination-md=\"2\" data-pagination-lg=\"3\" data-auto=\"true\" data-delay=\"2500\">
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
\t<div class=\"d-none\">
\t\t{% for banner in banners2 %}
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<div class=\"wg-cls-2 d-flex hover-img\">
\t\t\t\t\t<a href=\"{{ banner.link }}\" class=\"image img-style\">
\t\t\t\t\t\t<img class=\"lazyload\" src=\"{{ banner.image }}\" data-src=\"{{ banner.image }}\" alt=\"Slider\">
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"cls-content_wrap b-16\">
\t\t\t\t\t\t<div class=\"cls-content\">
\t\t\t\t\t\t\t<a href=\"{{ banner.link }}\" class=\"tag_cls h3 link\">{{ banner.title }}</a>
\t\t\t\t\t\t\t<span class=\"br-line type-vertical\"></span>
\t\t\t\t\t\t\t<a href=\"{{ banner.link }}\" class=\"tf-btn-line text-nowrap\">
\t\t\t\t\t\t\t\tShop now
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>

\t<!-- Product -->


\t<!-- New -->
\t<div class=\" flat-animate-tab pt-5 pb-5\">
\t\t<div class=\"container\">
\t\t\t<div class=\"sect-title wow fadeInUp\">
\t\t\t\t<div class=\"h1 title text-center mb-24\">Featured Products</div>
\t\t\t\t<ul class=\"tab-product_list\" role=\"tablist\">
\t\t\t\t\t{% for tab in featured_tabs %}
\t\t\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t\t\t<a href=\"#tab-{{ tab.path_id }}\" data-bs-toggle=\"tab\" class=\"tf-btn-line tf-btn-tab {% if loop.index == 1 %}active{% endif %}\">
\t\t\t\t\t\t\t\t{{ tab.name }}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endfor %}
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"tab-content\">
\t\t\t\t{% for tab in featured_tabs %}
\t\t\t\t\t<div class=\"tab-pane {% if loop.index == 1 %}active show{% endif %}\" id=\"tab-{{ tab.path_id }}\" role=\"tabpanel\">

\t\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over wow fadeInUp\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\" data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\" data-grid=\"2\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t{% for product in tab.products %}
\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-product grid\" data-availability=\"In stock\" data-brand=\"automet\" data-product-id=\"{{ product.product_id }}\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-product_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\t\thref=\"{{ product.href }}\" class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-product\" src=\"{{  product.thumb }}\" data-src=\"{{ product.thumb }}\" alt=\"{{ name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-hover\" src=\"{{  product.thumb }}\" data-src=\"{{ product.thumb }}\" alt=\"{{ name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <img class=\"lazyload img-product\" src=\"assets/RG.JPG\" data-src=\"assets/RG.JPG\" alt=\"{{ product.name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-hover\" src=\"assets/RG.JPG\" data-src=\"assets/RG.JPG\" alt=\"{{ product.name }}\"> #}
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"product-action_list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon btn-add-to-cart\" data-url=\"{{ cart_add }}\" data-product-id=\"{{ product.product_id }}\" data-quantity=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-shopping-cart-simple\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon btn-add-wishlist\" data-url=\"{{ wishlist_add }}\" data-product-id=\"{{ product.product_id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon btn-quick-view\" data-product-id=\"{{ product.product_id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Quick view</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-product_info\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"name-product h4 link\">{{ product.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if product.special %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old h6 fw-normal\">{{ product.price }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">{{ product.special }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">{{ product.price }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t{% endfor %}
\t\t\t</div>

\t\t</div>
\t</div>
\t<!-- /New -->

\t<!-- Shop This Look -->
\t<div class=\"themesFlat pt-5\">
\t\t<div class=\"container-full\">
\t\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Shop This Look</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-4\">
\t\t\t\t\t<div class=\"box-image_V01 hover-img mb-xl-0 wow fadeInUp\">
\t\t\t\t\t\t<a href=\"#\" class=\"box-image_image img-style\" style=\"background: #000;\">
\t\t\t\t\t\t\t<img src=\"assets/col21.jpg\" data-src=\"assets/col21.jpg\" alt=\"Image\" class=\"lazyload\" style=\"opacity: 0.6;\">
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"box-image_content\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"title text-display fw-semibold text-white link\">Tennis Connection</a>
\t\t\t\t\t\t\t<span class=\"sub-title h5 text-white d-none\">{{ shop_total }}
\t\t\t\t\t\t\t\tproducts</span>
\t\t\t\t\t\t\t<a href=\"index.php?route=product/category&language=en-gb&path=60_67\" class=\"tf-btn-line style-white mt-4\">
\t\t\t\t\t\t\t\tEXPLORE NOW
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over wow fadeInUp\" data-preview=\"3\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\" data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"3\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t{% for product in shop_look_products %}
\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"card-product grid\" data-availability=\"In stock\" data-brand=\"automet\" data-product-id=\"{{ product.product_id }}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-product_wrapper\">
\t\t\t\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\t\t\t\thref=\"{{ product.href }}\" class=\"product-img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-product\" src=\"{{ product.thumb }}\" data-src=\"{{ product.thumb }}\" alt=\"{{ name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-hover\" src=\"{{ product.thumb }}\" data-src=\"{{ product.thumb }}\" alt=\"{{ name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{# <img class=\"lazyload img-product\" src=\"assets/RG.JPG\" data-src=\"assets/RG.JPG\" alt=\"{{ product.name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload img-hover\" src=\"assets/RG.JPG\" data-src=\"assets/RG.JPG\" alt=\"{{ product.name }}\"> #}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"product-action_list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon btn-add-to-cart\" data-url=\"{{ cart_add }}\" data-product-id=\"{{ product_id }}\" data-quantity=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-shopping-cart-simple\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to cart</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon btn-add-wishlist\" data-url=\"{{ wishlist_add }}\" data-product-id=\"{{ product_id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon btn-quick-view\" data-product-id=\"{{ product_id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-view\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Quick view</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"card-product_info\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"name-product h4 link\">{{ product.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if product.special %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old h6 fw-normal\">{{ product.price }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">{{ product.special }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">{{ product.price }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"product-color_list d-none\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip color-filter\">Pink</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"swatch-value bg-hot-pink\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/RG.JPG\" data-src=\"assets/RG.JPG\" alt=\"Product\">
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip color-filter\">Beige</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"swatch-value bg-light-beige\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/WG.jpg\" data-src=\"assets/WG.jpg\" alt=\"Product\">

\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip color-filter\">Dusty Olive</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"swatch-value bg-dusty-olive\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/YG.JPG\" data-src=\"assets/YG.JPG\" alt=\"Product\">
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Shop This Look -->

\t<!-- Testimonial -->
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


\t<!-- Blog -->
\t<div class=\"flat-spacing\">
\t\t<div class=\"container\">
\t\t\t<div class=\"h1 sect-title text-black fw-medium text-center wow fadeInUp\">Read Our Blog</div>
\t\t\t<div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"2\" data-tablet=\"2\" data-mobile-sm=\"2\" data-mobile=\"1\" data-space-lg=\"48\" data-space-md=\"24\" data-space=\"12\" data-pagination=\"1\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\">
\t\t\t\t<div
\t\t\t\t\tclass=\"swiper-wrapper\">
\t\t\t\t\t<!-- item 1 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"article-blog type-space-2 hover-img4 wow fadeInLeft\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_image img-style4\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/blog22.jpg\" data-src=\"assets/images/blog22.jpg\" alt=\"Image\" class=\"lazyload aspect-ratio-0\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"entry_tag\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"name-tag h6 link\">March 2, 2025</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_name link h4\">
\t\t\t\t\t\t\t\t\tHistory of Cross Jewelry
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<p class=\"text h6\">
\t\t\t\t\t\t\t\t\tCross necklaces have a long and varied history, deeply intertwined with religious, cultural, and fashion traditions.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"tf-btn-line\">
\t\t\t\t\t\t\t\t\tRead more
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- item 2 -->
\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t<div class=\"article-blog type-space-2 hover-img4 wow fadeInLeft\" data-wow-delay=\"0.1s\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_image img-style4\">
\t\t\t\t\t\t\t\t<img src=\"assets/images/blog33.png\" data-src=\"assets/images/blog33.png\" alt=\"Image\" class=\"lazyload aspect-ratio-0\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"entry_tag\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"name-tag h6 link\">March 2, 2025</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"blog-content\">
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"entry_name link h4\">
\t\t\t\t\t\t\t\t\tSpot Jewelry According to your Birthstone</a>
\t\t\t\t\t\t\t\t<p class=\"text h6\">
\t\t\t\t\t\t\t\t\tWe are very connected with our birth month, and jewels with your birthstone are the new way to flaunt who you really are.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g1\" class=\"tf-btn-line\">
\t\t\t\t\t\t\t\t\tRead more
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /Blog -->


\t<!-- New Letter -->
\t<div class=\"modal modalCentered fade modal-newletter auto-popup\" id=\"newLetter\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content p-0\">
\t\t\t\t<span class=\"icon-close-popup\" data-bs-dismiss=\"modal\">
\t\t\t\t\t<i class=\"icon-close\"></i>
\t\t\t\t</span>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\" style=\"display: flex; align-items: center; justify-content: center;\">
\t\t\t\t\t\t<div class=\"modal-heading\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"assets/news.jpg\" data-src=\"assets/news.jpg\" alt=\"Image\" style=\"width: 80%;  object-fit: cover;\">
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t<p class=\"h6 sub-title\">Subscribe to our newletter!</p>
\t\t\t\t\t\t\t<h3 class=\"fw-normal title\">Receive 10% off your next order, along with exclusive offers and more!</h3>
\t\t\t\t\t\t\t<form class=\"form-newletter\">
\t\t\t\t\t\t\t\t<fieldset class=\"mb-12\">
\t\t\t\t\t\t\t\t\t<input class=\"style-stroke\" type=\"text\" placeholder=\"Enter your email\" required>
\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"tf-btn w-100 animate-btn\">Subscribe</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<ul class=\"tf-social-icon justify-content-center w-100\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/zaynjewels/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/zaynjewels/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UC0KmddVZ3BX4Ly5jjBRW7SA\" target=\"_blank\" class=\"social-tiktok\">
\t\t\t\t\t\t\t\t\t\t <span class=\"icon\"><i class=\"fab fa-youtube\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /New Letter -->


\t<script>
\t\t\$(window).on(\"scroll\", function () {
if (\$(this).scrollTop() > 50) { // adjust 50 to when you want the color change
\$(\"header\").css(\"background-color\", \"white\");

} else {
\$(\"header\").css(\"background-color\", \"transparent\");

}
});
\t</script>

\t{{ footer }}
", "catalog/view/template/common/home.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\common\\home.twig");
    }
}
