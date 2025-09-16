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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_47acf42033e56d5c7665f5ddd66f6da0c13c59f5fdb9dbe28b206d74049671c1 extends Template
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
\t.size-btn {
\t\tborder: thin solid #ccc;
\t\tletter-spacing: 1.2px;
\t\ttext-transform: uppercase;
\t\tfont-size: 11.5px;
\t\tdisplay: inline-block;
\t\tcursor: pointer;
\t\tfont-family: 'Open Sans', sans-serif;
\t\twidth: 40px;
\t\theight: 40px;
\t\tborder-radius: 50%;
\t\ttext-align: center;
\t}
\t.size-btn.active {
\t\tbackground-color: #000;
\t\tcolor: #fff;
\t\tborder: 1px solid #000 !important;
\t}
\t.color {
\t\tpadding: 10px;
      width:  auto;;
\t\theight: 100%;
\t\tborder-radius: 15px !important;
\t\tborder: 1px solid #000;
\t}
\t.color.active {
\t\tbackground-color: #000;
\t\tcolor: #fff;
\t\tborder: 1px solid #000 !important;
\t}
   @media (max-width: 768px) {
          .tf-sticky-btn-atc .title, .tf-sticky-btn-atc .tf-sticky-atc-product {
\t\t\tdisplay: block !important;
\t\t}
\t}

\t/* Dynamic color indicators */
\t.dot-color {
\t\twidth: 12px;
\t\theight: 12px;
\t\tborder-radius: 50%;
\t\tdisplay: inline-block;
\t\tmargin-left: 5px;
\t}
\t
\t/* Color mappings - you can add more colors as needed */
\t.bg-black { background-color: #000000; }
\t.bg-white { background-color: #ffffff; border: 1px solid #ddd; }
\t.bg-red { background-color: #dc3545; }
\t.bg-blue { background-color: #007bff; }
\t.bg-green { background-color: #28a745; }
\t.bg-yellow { background-color: #ffc107; }
\t.bg-purple { background-color: #6f42c1; }
\t.bg-pink { background-color: #e83e8c; }
\t.bg-orange { background-color: #fd7e14; }
\t.bg-brown { background-color: #8b4513; }
\t.bg-gray, .bg-grey { background-color: #6c757d; }
\t.bg-silver { background-color: #c0c0c0; }
\t.bg-gold { background-color: #ffd700; }
\t.bg-rose-gold { background-color: #e8b4a0; }
\t.bg-caramel { background-color: #c4915c; }

\t/* Sticky cart enhancements */
\t.tf-mini-cart-info .size {
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\tgap: 10px;
\t\talign-items: center;
\t\tmargin: 8px 0;
\t}

\t.tf-mini-cart-info .text-small {
\t\tmargin: 0;
\t}
</style>

<!-- Page Title -->
<section class=\"s-page-title style-2\" style=\"padding-top:100px;\">
\t<div class=\"container\">
\t\t<div class=\"content\" style=\"padding-bottom: 19px;\">
\t\t\t<ul class=\"breadcrumbs-page\">
\t\t\t\t";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 86
            yield "            <li class=\"breadcrumb-item\" style=\"display:flex;\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 86);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 86);
            yield "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "\t\t\t</ul>
\t\t</div>
\t</div>
</section>
<!-- /Page Title -->
<!-- Product Main -->
<section class=\"flat-single-product flat-spacing-3\">
\t<div class=\"tf-main-product section-image-zoom\">
\t\t<div class=\"container\">
         <div class=\"row\">



\t\t\t\t<!-- Product Images -->
\t\t\t\t<div class=\"col-md-6\">
               <div class=\"tf-product-media-wrap sticky-top\">
\t\t\t\t\t\t";
        // line 105
        yield "\t\t\t\t\t\t";
        $context["all_images"] = [];
        // line 106
        yield "\t\t\t\t\t\t";
        if (($context["thumb"] ?? null)) {
            // line 107
            yield "\t\t\t\t\t\t\t";
            $context["all_images"] = Twig\Extension\CoreExtension::merge(($context["all_images"] ?? null), [["thumb" => ($context["thumb"] ?? null), "popup" => ($context["popup"] ?? null)]]);
            // line 108
            yield "\t\t\t\t\t\t";
        }
        // line 109
        yield "\t\t\t\t\t\t";
        if (($context["images"] ?? null)) {
            // line 110
            yield "\t\t\t\t\t\t\t";
            $context["all_images"] = Twig\Extension\CoreExtension::merge(($context["all_images"] ?? null), ($context["images"] ?? null));
            // line 111
            yield "\t\t\t\t\t\t";
        }
        // line 112
        yield "\t\t\t\t\t\t<div class=\"product-thumbs-slider\">
\t\t\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-product-media-thumbs other-image-zoom\" data-direction=\"vertical\" data-preview=\"4.7\">
\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper stagger-wrap\">
\t\t\t\t\t\t\t\t\t";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 116
            yield "\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide stagger-item\" data-size=\"M\" data-color=\"gray\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
                                 <img class=\"lazyload\"
                                    data-src=\"";
            // line 119
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 119);
            yield "\"
                                    src=\"";
            // line 120
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 120);
            yield "\"
                                    alt=\"";
            // line 121
            yield ($context["heading_title"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flat-wrap-media-product\">
\t\t\t\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-product-media-main\" id=\"gallery-swiper-started\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 131
            yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\" data-size=\"M\" data-color=\"gray\">
                                 <a href=\"";
            // line 132
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 132);
            yield "\" target=\"_blank\" class=\"item\"
                                    data-pswp-width=\"860px\" data-pswp-height=\"1146px\">
                                 <img class=\"tf-image-zoom lazyload\"
                                    data-zoom=\"";
            // line 135
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 135);
            yield "\"
                                    data-src=\"";
            // line 136
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 136);
            yield "\"
                                    src=\"";
            // line 137
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 137);
            yield "\"
                                    alt=\"";
            // line 138
            yield ($context["heading_title"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 146
        yield "\t\t\t\t\t\t\t\t\t";
        // line 149
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /Product Images -->
\t\t\t\t<!-- Product Info -->
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"tf-product-info-wrap position-relative\">
\t\t\t\t\t\t<form id=\"form-product\">
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"input-product-id\" name=\"product_id\" value=\"";
        // line 159
        yield ($context["product_id"] ?? null);
        yield "\">
\t\t\t\t\t\t\t";
        // line 160
        if ((($context["options"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["options"] ?? null)) > 0))) {
            // line 161
            yield "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 162
                yield "\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 162) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 162)) > 0))) {
                    // line 163
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 163) == "select")) {
                        // line 164
                        yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 164)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "product_option_value_id", [], "any", false, false, false, 164);
                        yield "\" id=\"input-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 165
$context["option"], "type", [], "any", false, false, false, 165) == "radio")) {
                        // line 166
                        yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 166)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "product_option_value_id", [], "any", false, false, false, 166);
                        yield "\" id=\"input-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 166);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 168
                    yield "\t\t\t\t\t\t\t\t\t";
                }
                // line 169
                yield "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            yield "\t\t\t\t\t\t\t";
        }
        // line 171
        yield "\t\t\t\t\t\t\t<div class=\"tf-zoom-main sticky-top\"></div>
\t\t\t\t\t\t\t<div class=\"tf-product-info-list other-image-zoom\">
\t\t\t\t\t\t\t\t<h2 class=\"product-info-name\">";
        // line 173
        yield ($context["heading_title"] ?? null);
        yield "</h2>
\t\t\t\t\t\t\t\t<ul class=\"tf-product-cate-sku\">
\t\t\t\t\t\t\t\t\t<li class=\"item-cate-sku h6\">
\t\t\t\t\t\t\t\t\t\t<span class=\"label fw-6 text-black\">SKU:</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"value link text-main-2\">";
        // line 177
        yield ($context["model"] ?? null);
        yield "</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        // line 181
        if (($context["logged"] ?? null)) {
            // line 182
            yield "\t\t\t\t\t\t\t\t<div class=\"tf-product-heading mt-2 mb-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-info-price price-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new price-on-sale h2 fw-4\">";
            // line 184
            yield ($context["tax"] ?? null);
            yield "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 188
        yield "

\t\t\t\t\t\t\t\t";
        // line 190
        if ((($context["options"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["options"] ?? null)) > 0))) {
            // line 191
            yield "\t\t\t\t\t\t\t\t\t<div class=\"tf-product-variant mt-3\">
\t\t\t\t\t\t\t\t\t\t";
            // line 192
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 193
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 193) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 193)) > 0))) {
                    // line 194
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-item variant-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 194);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h4 fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 197
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 197);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"variant-picker-label-value value-current-option\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 199
                    yield CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 199)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null), "name", [], "any", false, false, false, 199);
                    yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-values mt-3\" style=\"display:flex;gap:20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 204
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 204));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 205
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 205) == "select")) {
                            // line 206
                            yield "                                             <div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"size-btn ";
                            // line 207
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 207)) {
                                yield "active ";
                            }
                            yield "\" style=\"background:url( ";
                            yield (($_v3 = $context["option_value"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["image"] ?? null) : null);
                            yield ") no-repeat center center; background-size: cover;\" data-size=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 207);
                            yield "\"></span>
                                                <p>";
                            // line 208
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 208);
                            yield "</p></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 209
$context["option"], "type", [], "any", false, false, false, 209) == "radio")) {
                            // line 210
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"color ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 210)) {
                                yield "active";
                            }
                            yield "\" data-color=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 210);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 210);
                            yield "</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 213
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
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
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 217
                yield "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 220
        yield "
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t";
        // line 223
        if (($context["logged"] ?? null)) {
            // line 224
            yield "\t\t\t\t\t\t\t\t\t<div class=\"tf-product-total-quantity\">
\t\t\t\t\t\t\t\t\t\t<div class=\"group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wg-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-quantity btn-decrease\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"";
            // line 230
            yield ($context["minimum"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-quantity btn-increase\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"button-cart\" class=\"tf-btn animate-btn \">
\t\t\t\t\t\t\t\t\t\t\t\tADD TO CART
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-shopping-cart-simple\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"hover-tooltip box-icon btn-add-wishlist\" data-url=\"index.php?route=account/wishlist.add&language=";
            // line 239
            yield ($context["language"] ?? null);
            yield "\" data-product-id=\"";
            yield ($context["product_id"] ?? null);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        } else {
            // line 247
            yield "\t\t\t\t\t\t\t\t\t<div class=\"tf-product-total-quantity\">
\t\t\t\t\t\t\t\t\t\t<div class=\"group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=account/login\" class=\"tf-btn animate-btn \" style=\"width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\tRetailer Login

\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 259
        yield "\t\t\t\t\t\t\t\t<div class=\"tf-product-extra-link d-none\">
\t\t\t\t\t\t\t\t\t<a href=\"#compareColor\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-swatches\"></i>Compare color
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#askQuestion\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-ques\"></i>Ask a question
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#shipAndDelivery\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-truck\"></i>Delivery & Return
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#shareWith\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-share\"></i>Share
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tf-product-delivery-return\">
\t\t\t\t\t\t\t\t\t<div class=\"product-delivery\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon icon-clock-cd\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"h6\">Estimate delivery times:
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-7 text-black\">7-20 days</span>
\t\t\t\t\t\t\t\t\t\t\t(International),
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-7 text-black\">2-4 days</span>
\t\t\t\t\t\t\t\t\t\t\t(United States).
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-delivery return\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon icon-compare\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"h6\">Return within
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-7 text-black\">30 days</span>
\t\t\t\t\t\t\t\t\t\t\tof purchase. Duties & taxes are
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              non-refundable.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tf-product-trust-seal\">
\t\t\t\t\t\t\t\t\t<p class=\"h6 text-seal\">Safe Checkout:</p>
\t\t\t\t\t\t\t\t\t<ul class=\"list-card\">
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/visa.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/master-card.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/discover.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/paypal.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /Product Info -->
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"tf-sticky-btn-atc\">
\t\t<div class=\"container\">
\t\t\t<div class=\"tf-height-observer w-100 d-flex align-items-center\">
\t\t\t\t<div class=\"tf-sticky-atc-product d-flex align-items-center\">
\t\t\t\t\t<div class=\"tf-mini-cart-item \">
\t\t\t\t\t\t<div class=\"tf-mini-cart-image\">
                     <img class=\"lazyload\" data-src=\"";
        // line 325
        yield ($context["thumb"] ?? null);
        yield "\"
                        src=\"";
        // line 326
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"img-product\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tf-mini-cart-info\">
\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link text-line-clamp-1\">";
        // line 330
        yield ($context["heading_title"] ?? null);
        yield "</a>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<div class=\"size\">
\t\t\t\t\t\t\t\t<div class=\"text-small text-main-2 sub\" id=\"selected-size\">Size: <span id=\"size-value\">";
        // line 333
        if (($context["options"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 333) == "select") && CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 333))) {
                    yield CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 333)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[0] ?? null) : null), "name", [], "any", false, false, false, 333);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield "Not selected";
        }
        yield "</span></div>
\t\t\t\t\t\t\t\t<div class=\"text-small text-main-2 sub\" id=\"selected-color\">Color: <span id=\"color-value\">";
        // line 334
        if (($context["options"] ?? null)) {
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 334) == "radio") && CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 334))) {
                    yield CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 334)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[0] ?? null) : null), "name", [], "any", false, false, false, 334);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            yield "Not selected";
        }
        yield "</span></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"h6 fw-semibold\" id=\"sticky-price\">
\t\t\t\t\t\t\t\t";
        // line 338
        yield ($context["price"] ?? null);
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tf-sticky-atc-infos\">
\t\t\t\t\t<form class=\"\">
\t\t\t\t\t\t";
        // line 345
        if ((($context["options"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["options"] ?? null)) > 0))) {
            // line 346
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 347
                yield "\t\t\t\t\t\t\t\t";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 347) == "select") && CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 347)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 347)) > 0))) {
                    // line 348
                    yield "\t\t\t\t\t\t\t\t\t<div class=\"tf-sticky-atc-variant-price\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">";
                    // line 349
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 349);
                    yield ":</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"tf-select style-1\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"font-sora\" name=\"option[";
                    // line 351
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 351);
                    yield "]\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 352
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 352));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 353
                        yield "                           <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 353);
                        yield "\"";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 353)) {
                            yield " selected=\"selected\"";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 353);
                        yield "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
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
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 355
                    yield "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 359
                yield "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            yield "\t\t\t\t\t\t";
        }
        // line 361
        yield "\t\t\t\t\t\t<div class=\"tf-product-info-quantity\">
\t\t\t\t\t\t\t<h6 class=\"title\">Quantity:</h6>
\t\t\t\t\t\t\t<div class=\"wg-quantity\">
\t\t\t\t\t\t\t\t<button class=\"btn-quantity minus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-minus\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"";
        // line 367
        yield ($context["minimum"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t<button class=\"btn-quantity plus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-plus\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tf-sticky-atc-btns\">
\t\t\t\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"tf-btn animate-btn btn-add-to-cart\" data-url=\"index.php?route=checkout/cart.add&language=";
        // line 374
        yield ($context["language"] ?? null);
        yield "\" data-product-id=\"";
        yield ($context["product_id"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t\t\t<i class=\"icon icon-shopping-cart-simple\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- /Product Main -->
<!-- Product Description -->
<section class=\"flat-spacing-3\">
\t<div class=\"container\">
\t\t<div class=\"flat-animate-tab tab-style-1\">
\t\t\t<ul class=\"menu-tab menu-tab-1\" role=\"tablist\">
\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t<a href=\"#descriptions\" class=\"tab-link active\" data-bs-toggle=\"tab\">Descriptions</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t<a href=\"#policy\" class=\"tab-link\" data-bs-toggle=\"tab\">Attribute</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t<a href=\"#reviews\" class=\"tab-link\" data-bs-toggle=\"tab\">Customer Reviews</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane wd-product-descriptions active show\" id=\"descriptions\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"tab-descriptions\">
\t\t\t\t\t\t<p class=\"h6 desc\">
\t\t\t\t\t\t\t";
        // line 405
        yield ($context["description"] ?? null);
        yield "
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane wd-product-descriptions\" id=\"policy\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"tab-policy\">
\t\t\t\t\t\t";
        // line 412
        if (($context["attribute_groups"] ?? null)) {
            // line 413
            yield "\t\t\t\t\t\t\t<div class=\"product-attributes\">
\t\t\t\t\t\t\t\t";
            // line 414
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 415
                yield "\t\t\t\t\t\t\t\t\t<div class=\"attribute-group mb-4\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"attribute-group-title\">";
                // line 416
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 416);
                yield "</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 420
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 420));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 421
                    yield "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"attribute-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    // line 423
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 423);
                    yield "</strong>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"attribute-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 426
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 426);
                    yield "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 430
                yield "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 435
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 437
            yield "\t\t\t\t\t\t\t<p class=\"text-muted\">";
            yield ((array_key_exists("text_no_attributes", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_no_attributes"] ?? null), "No attributes available for this product.")) : ("No attributes available for this product."));
            yield "</p>
\t\t\t\t\t\t";
        }
        // line 439
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
             <div class=\"tab-pane wd-product-descriptions\" id=\"reviews\" role=\"tabpanel\">
                ";
        // line 442
        if (($context["review_status"] ?? null)) {
            // line 443
            yield "                   ";
            yield ($context["review"] ?? null);
            yield "
                ";
        } else {
            // line 445
            yield "                   <div class=\"text-center py-5\">
                      <p class=\"text-muted\">";
            // line 446
            yield ((array_key_exists("text_no_reviews", $context)) ? (Twig\Extension\CoreExtension::default(($context["text_no_reviews"] ?? null), "Reviews are disabled for this product.")) : ("Reviews are disabled for this product."));
            yield "</p>
\t\t\t\t\t\t\t\t</div>
                ";
        }
        // line 449
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
</section>
<!-- /Product Description -->
<!-- Box Icon -->
<section>
   <div class=\"container\">
      <div class=\"sect-border\">
         <div class=\"s-head\">
            <h3 class=\" s-title fw-normal\">Ethical Jewelry</h3>
\t\t\t\t\t\t\t</div>
         <div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"1\" data-space-lg=\"97\"
            data-space-md=\"33\" data-space=\"13\" data-pagination=\"1\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\">
            <div class=\"swiper-wrapper\">
               <!-- item 1 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-package\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Quick Turn Around</h4>
                        <p class=\"text\">30 day money back guarantee</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
               <!-- item 2 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-calender\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Ethically sourced</h4>
                        <p class=\"text\">Manufacturer's defect</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
               <!-- item 3 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-boat\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Free shipping</h4>
                        <p class=\"text\">Free Shipping for orders over \$150</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
               <!-- item 4 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-headset\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">In-house Design</h4>
                        <p class=\"text\">24 hours a day, 7 days a week</p>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            <div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
</section>
<!-- /Box Icon -->
<!-- Also Like -->
<section class=\"flat-spacing-3\">
   <div class=\"container\">
      <h1 class=\"sect-title text-center\">You May Also Like</h1>
      ";
        // line 524
        yield ($context["related"] ?? null);
        yield "
\t\t\t\t\t\t\t</div>
</section>
<!-- /Also Like -->
<!-- Related -->
<section class=\"flat-spacing-3 pt-0 d-none\">
   <div class=\"container\">
      <h1 class=\"sect-title text-center\">Recently Viewed</h1>
      <div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\"
         data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\"
         data-pagination-lg=\"4\">
         <div class=\"swiper-wrapper\">
            <!-- Product 1 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                     <img class=\"lazyload img-product\" src=\"assets/images/products/underwear/product-1.jpg\"
                        data-src=\"assets/images/products/underwear/product-1.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/underwear/product-2.jpg\"
                        data-src=\"assets/images/products/underwear/product-2.jpg\" alt=\"Product\">
                     </a>
                     <ul class=\"product-action_list\">
                        <li>
                           <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-shopping-cart-simple\"></span>
                           <span class=\"tooltip\">Add to cart</span>
                           </a>
                        </li>
                        <li class=\"wishlist\">
                           <a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </a>
                        </li>
                        
                        <li>
                           <a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-view\"></span>
                           <span class=\"tooltip\">Quick view</span>
                           </a>
\t\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t\t\t</div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Seamless breathable thong</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$99,99</span>
                        <span class=\"price-new h6\">\$69,99</span>
\t\t\t\t\t\t\t</div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Sage Green</span>
                           <span class=\"swatch-value bg-sage-green\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-1.jpg\"
                              data-src=\"assets/images/products/underwear/product-1.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Light Orange</span>
                           <span class=\"swatch-value bg-tomato\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-3.jpg\"
                              data-src=\"assets/images/products/underwear/product-3.jpg\" alt=\"Product\">
\t\t\t\t\t\t\t</li>
                     </ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            <!-- Product 2 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                     <img class=\"lazyload img-product\" src=\"assets/images/products/underwear/product-4.jpg\"
                        data-src=\"assets/images/products/underwear/product-4.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/underwear/product-5.jpg\"
                        data-src=\"assets/images/products/underwear/product-5.jpg\" alt=\"Product\">
                     </a>
                     <ul class=\"product-action_list\">
                        <li>
                           <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-shopping-cart-simple\"></span>
                           <span class=\"tooltip\">Add to cart</span>
                           </a>
\t\t\t\t\t\t\t</li>
                        <li class=\"wishlist\">
                           <a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </a>
\t\t\t\t\t\t\t</li>
                        
                        <li>
                           <a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-view\"></span>
                           <span class=\"tooltip\">Quick view</span>
                           </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t\t\t</div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Cotton high waisted panties</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\"> \$89,99</span>
                        <span class=\"price-new h6\">\$59,99</span>
\t\t\t\t\t\t</div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-4.jpg\"
                              data-src=\"assets/images/products/underwear/product-4.jpg\" alt=\"Product\">
\t\t\t</li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Dark</span>
                           <span class=\"swatch-value bg-dark-charcoal\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-6.jpg\"
                              data-src=\"assets/images/products/underwear/product-6.jpg\" alt=\"Product\">
\t\t\t\t</li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-7.jpg\"
                              data-src=\"assets/images/products/underwear/product-7.jpg\" alt=\"Product\">
\t\t\t\t</li>
\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
            <!-- Product 3 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                     <img class=\"lazyload img-product\" src=\"assets/images/products/underwear/product-8.jpg\"
                        data-src=\"assets/images/products/underwear/product-8.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/underwear/product-9.jpg\"
                        data-src=\"assets/images/products/underwear/product-9.jpg\" alt=\"Product\">
                     </a>
                     <div class=\"variant-box\">
                        <ul class=\"product-size_list\">
                           <li class=\"size-item h6\">XS</li>
                           <li class=\"size-item h6\">S</li>
                           <li class=\"size-item h6\">M</li>
\t\t\t\t</ul>
\t\t\t\t\t</div>
                     <ul class=\"product-action_list\">
                        <li>
                           <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-shopping-cart-simple\"></span>
                           <span class=\"tooltip\">Add to cart</span>
                           </a>
\t\t\t\t\t\t\t</li>
                        <li class=\"wishlist\">
                           <a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </a>
\t\t\t\t\t\t\t</li>
                        
                        <li>
                           <a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-view\"></span>
                           <span class=\"tooltip\">Quick view</span>
                           </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t</div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Sexy lace panties</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$79,99</span>
                        <span class=\"price-new h6\">\$49,99</span>
\t\t\t</div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Dusty Olive</span>
                           <span class=\"swatch-value bg-dusty-olive\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-8.jpg\"
                              data-src=\"assets/images/products/underwear/product-8.jpg\" alt=\"Product\">
\t\t\t</li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Light Orange</span>
                           <span class=\"swatch-value bg-tomato\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-10.jpg\"
                              data-src=\"assets/images/products/underwear/product-10.jpg\" alt=\"Product\">
\t\t\t\t</li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-11.jpg\"
                              data-src=\"assets/images/products/underwear/product-11.jpg\" alt=\"Product\">
\t\t\t\t</li>
\t\t</ul>
\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            <!-- Product 4 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                    
                     <img class=\"lazyload img-product\" src=\"assets/images/products/underwear/product-12.jpg\"
                        data-src=\"assets/images/products/underwear/product-12.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/underwear/product-13.jpg\"
                        data-src=\"assets/images/products/underwear/product-13.jpg\" alt=\"Product\">
                     
                    </a>

                     <ul class=\"product-action_list\">
                        <li>
                           <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-shopping-cart-simple\"></span>
                           <span class=\"tooltip\">Add to cart</span>
                           </a>
                        </li>
                        <li class=\"wishlist\">
                           <a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </a>
                        </li>
                        
                        <li>
                           <a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-view\"></span>
                           <span class=\"tooltip\">Quick view</span>
                           </a>
                        </li>
                     </ul>
\t\t</div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Seamless underwear</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$109,99</span>
                        <span class=\"price-new h6\">\$74,99</span>
\t</div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-12.jpg\"
                              data-src=\"assets/images/products/underwear/product-12.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Dusty Olive</span>
                           <span class=\"swatch-value bg-dusty-olive\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-14.jpg\"
                              data-src=\"assets/images/products/underwear/product-14.jpg\" alt=\"Product\">
                        </li>
                     </ul>
\t\t</div>
\t</div>
</div>
\t\t</div>
         <div class=\"sw-dot-default tf-sw-pagination\"></div>
\t</div>
</div>
</section>


<!-- /Related -->
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
<script>
\$(document).ready(function() {
console.log('ready');

    // Initialize sticky cart with default selections
    setTimeout(function() {
        initializeStickyCart();
    }, 500);
    
    \$(document).on('click', '.size-btn', function() {
var size = \$(this).data('size');
        console.log('Size button clicked:', size);
        
\$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(size);
\$(this).siblings().removeClass('active');
\$(this).addClass('active');
        
        // Update sticky cart section
        \$('#size-value').text(size);
        console.log('Updated size value to:', size);
        updateStickyCartOptions();
});

    \$(document).on('click', '.color', function() {
var color = \$(this).data('color');
        console.log('Color button clicked:', color);
        
\$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(color);
\$(this).siblings().removeClass('active');
\$(this).addClass('active');
        
        // Update sticky cart section
        \$('#color-value').text(color);
        console.log('Updated color value to:', color);
        updateStickyCartOptions();
    });

    // Function to update sticky cart options
    function updateStickyCartOptions() {
        // Update the select dropdowns in sticky cart to match main selections
        \$('.tf-sticky-atc-infos select').each(function() {
            var optionName = \$(this).closest('.tf-sticky-atc-variant-price').find('.title').text().replace(':', '');
            var selectedValue = '';
            
            if (optionName.toLowerCase().includes('size')) {
                selectedValue = \$('#size-value').text();
            } else if (optionName.toLowerCase().includes('color')) {
                selectedValue = \$('#color-value').text();
            }
            
            if (selectedValue) {
                \$(this).find('option').each(function() {
                    if (\$(this).text() === selectedValue) {
                        \$(this).prop('selected', true);
                    }
                });
            }
        });
        
        // Update price if there are option price modifiers
        updateStickyPrice();
    }

    // Function to update sticky cart price based on selected options
    function updateStickyPrice() {
        // Get base price
        var basePrice = '";
        // line 854
        yield ($context["price"] ?? null);
        yield "';
        var currentPrice = basePrice;
        
        // Check for option price modifiers (this can be enhanced with actual price calculation)
        var selectedOptions = [];
        
        // Get selected size
        var selectedSize = \$('#size-value').text();
        if (selectedSize && selectedSize !== 'Not selected') {
            selectedOptions.push({type: 'size', value: selectedSize});
        }
        
        // Get selected color
        var selectedColor = \$('#color-value').text();
        if (selectedColor && selectedColor !== 'Not selected') {
            selectedOptions.push({type: 'color', value: selectedColor});
        }
        
        // Update the sticky price display
        \$('#sticky-price').text(currentPrice);
        
        // Log for debugging
        console.log('Updated sticky cart - Size:', selectedSize, 'Color:', selectedColor, 'Price:', currentPrice);
    }

    // Update sticky cart when sticky cart selects change
    \$('.tf-sticky-atc-infos select').on('change', function() {
        var selectedText = \$(this).find('option:selected').text();
        var optionName = \$(this).closest('.tf-sticky-atc-variant-price').find('.title').text().replace(':', '');
        
        if (optionName.toLowerCase().includes('size')) {
            \$('#size-value').text(selectedText);
            // Update main size selection
            \$('.size-btn').each(function() {
                if (\$(this).data('size') === selectedText) {
                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');
                    \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(selectedText);
                }
            });
        } else if (optionName.toLowerCase().includes('color')) {
            \$('#color-value').text(selectedText);
            // Update main color selection
            \$('.color').each(function() {
                if (\$(this).data('color') === selectedText) {
                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');
                    \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(selectedText);
                }
            });
        }
    });

    // Initialize sticky cart with default selections
    function initializeStickyCart() {
        // Set initial size from first active size button
        var activeSize = \$('.size-btn.active').first();
        if (activeSize.length) {
            \$('#size-value').text(activeSize.data('size'));
        }
        
        // Set initial color from first active color button  
        var activeColor = \$('.color.active').first();
        if (activeColor.length) {
            \$('#color-value').text(activeColor.data('color'));
            \$('#color-indicator').removeClass().addClass('dot-color').addClass('bg-' + activeColor.data('color').toLowerCase().replace(/\\s+/g, '-'));
        }
        
        // Update sticky cart options to match
        updateStickyCartOptions();
    }

    // Initialize sticky cart with default selections
    function initializeStickyCart() {
        // Set initial size from first active size button or first available
        var activeSize = \$('.size-btn.active').first();
        if (activeSize.length) {
            \$('#size-value').text(activeSize.data('size'));
        } else {
            var firstSize = \$('.size-btn').first();
            if (firstSize.length) {
                firstSize.addClass('active');
                \$('#size-value').text(firstSize.data('size'));
            }
        }
        
        // Set initial color from first active color button or first available
        var activeColor = \$('.color.active').first();
        if (activeColor.length) {
            \$('#color-value').text(activeColor.data('color'));
            \$('#color-indicator').removeClass().addClass('dot-color').addClass('bg-' + activeColor.data('color').toLowerCase().replace(/\\s+/g, '-'));
        } else {
            var firstColor = \$('.color').first();
            if (firstColor.length) {
                firstColor.addClass('active');
                \$('#color-value').text(firstColor.data('color'));
                \$('#color-indicator').removeClass().addClass('dot-color').addClass('bg-' + firstColor.data('color').toLowerCase().replace(/\\s+/g, '-'));
            }
        }
        
        // Update price
        updateStickyPrice();
        
        console.log('Sticky cart initialized');
    }

   \$('#input-subscription').on('change', function() {
\$('.subscription').addClass('d-none');
\$('#subscription-description-' + \$(this).val()).removeClass('d-none');
});

   \$('#form-product').on('submit', function(e) {
e.preventDefault();
\$.ajax({
url: 'index.php?route=checkout/cart.add&language=en-gb', // change language
type: 'post',
data: \$('#form-product').serialize(),
dataType: 'json',
           beforeSend: function() {
\$('#button-cart').prop(\"disabled\", true).text(\"Loading...\");
},
           complete: function() {
\$('#button-cart').prop(\"disabled\", false).text(\"Add to Cart\");
},
           success: function(json) {
 \$(\".tf-add-cart-success\").addClass(\"active\");
                        
                        // Update cart count in header
                        if (json.count !== undefined) {
                            \$(\".count\").text(json.count);
                        }
                        
                        // Update cart content without reload
                        \$.get('index.php?route=checkout/cart.info', function(cartHtml) {
                            \$('.tf-mini-cart-wrap').html(cartHtml);
                        });
                        
                        // Show success message
                        alert('Product added to cart successfully!');
},
           error: function(xhr, ajaxOptions, thrownError) {
console.log(thrownError + \"\\n\" + xhr.statusText + \"\\n\" + xhr.responseText);
}
});
});

});
</script>
";
        // line 1002
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/product.twig";
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
        return array (  1445 => 1002,  1294 => 854,  961 => 524,  884 => 449,  878 => 446,  875 => 445,  869 => 443,  867 => 442,  862 => 439,  856 => 437,  852 => 435,  842 => 430,  832 => 426,  826 => 423,  822 => 421,  818 => 420,  811 => 416,  808 => 415,  804 => 414,  801 => 413,  799 => 412,  789 => 405,  753 => 374,  743 => 367,  735 => 361,  732 => 360,  726 => 359,  720 => 355,  697 => 353,  680 => 352,  676 => 351,  671 => 349,  668 => 348,  665 => 347,  660 => 346,  658 => 345,  648 => 338,  628 => 334,  611 => 333,  605 => 330,  598 => 326,  594 => 325,  526 => 259,  512 => 247,  499 => 239,  487 => 230,  479 => 224,  477 => 223,  472 => 220,  468 => 218,  462 => 217,  457 => 214,  443 => 213,  430 => 210,  428 => 209,  424 => 208,  414 => 207,  411 => 206,  408 => 205,  391 => 204,  383 => 199,  378 => 197,  371 => 194,  368 => 193,  364 => 192,  361 => 191,  359 => 190,  355 => 188,  348 => 184,  344 => 182,  342 => 181,  335 => 177,  328 => 173,  324 => 171,  321 => 170,  315 => 169,  312 => 168,  302 => 166,  300 => 165,  291 => 164,  288 => 163,  285 => 162,  280 => 161,  278 => 160,  274 => 159,  262 => 149,  260 => 146,  257 => 142,  247 => 138,  243 => 137,  239 => 136,  235 => 135,  229 => 132,  226 => 131,  222 => 130,  215 => 125,  205 => 121,  201 => 120,  197 => 119,  192 => 116,  188 => 115,  183 => 112,  180 => 111,  177 => 110,  174 => 109,  171 => 108,  168 => 107,  165 => 106,  162 => 105,  144 => 88,  133 => 86,  129 => 85,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<style>
\t.size-btn {
\t\tborder: thin solid #ccc;
\t\tletter-spacing: 1.2px;
\t\ttext-transform: uppercase;
\t\tfont-size: 11.5px;
\t\tdisplay: inline-block;
\t\tcursor: pointer;
\t\tfont-family: 'Open Sans', sans-serif;
\t\twidth: 40px;
\t\theight: 40px;
\t\tborder-radius: 50%;
\t\ttext-align: center;
\t}
\t.size-btn.active {
\t\tbackground-color: #000;
\t\tcolor: #fff;
\t\tborder: 1px solid #000 !important;
\t}
\t.color {
\t\tpadding: 10px;
      width:  auto;;
\t\theight: 100%;
\t\tborder-radius: 15px !important;
\t\tborder: 1px solid #000;
\t}
\t.color.active {
\t\tbackground-color: #000;
\t\tcolor: #fff;
\t\tborder: 1px solid #000 !important;
\t}
   @media (max-width: 768px) {
          .tf-sticky-btn-atc .title, .tf-sticky-btn-atc .tf-sticky-atc-product {
\t\t\tdisplay: block !important;
\t\t}
\t}

\t/* Dynamic color indicators */
\t.dot-color {
\t\twidth: 12px;
\t\theight: 12px;
\t\tborder-radius: 50%;
\t\tdisplay: inline-block;
\t\tmargin-left: 5px;
\t}
\t
\t/* Color mappings - you can add more colors as needed */
\t.bg-black { background-color: #000000; }
\t.bg-white { background-color: #ffffff; border: 1px solid #ddd; }
\t.bg-red { background-color: #dc3545; }
\t.bg-blue { background-color: #007bff; }
\t.bg-green { background-color: #28a745; }
\t.bg-yellow { background-color: #ffc107; }
\t.bg-purple { background-color: #6f42c1; }
\t.bg-pink { background-color: #e83e8c; }
\t.bg-orange { background-color: #fd7e14; }
\t.bg-brown { background-color: #8b4513; }
\t.bg-gray, .bg-grey { background-color: #6c757d; }
\t.bg-silver { background-color: #c0c0c0; }
\t.bg-gold { background-color: #ffd700; }
\t.bg-rose-gold { background-color: #e8b4a0; }
\t.bg-caramel { background-color: #c4915c; }

\t/* Sticky cart enhancements */
\t.tf-mini-cart-info .size {
\t\tdisplay: flex;
\t\tflex-wrap: wrap;
\t\tgap: 10px;
\t\talign-items: center;
\t\tmargin: 8px 0;
\t}

\t.tf-mini-cart-info .text-small {
\t\tmargin: 0;
\t}
</style>

<!-- Page Title -->
<section class=\"s-page-title style-2\" style=\"padding-top:100px;\">
\t<div class=\"container\">
\t\t<div class=\"content\" style=\"padding-bottom: 19px;\">
\t\t\t<ul class=\"breadcrumbs-page\">
\t\t\t\t{% for breadcrumb in breadcrumbs %}
            <li class=\"breadcrumb-item\" style=\"display:flex;\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t</div>
</section>
<!-- /Page Title -->
<!-- Product Main -->
<section class=\"flat-single-product flat-spacing-3\">
\t<div class=\"tf-main-product section-image-zoom\">
\t\t<div class=\"container\">
         <div class=\"row\">



\t\t\t\t<!-- Product Images -->
\t\t\t\t<div class=\"col-md-6\">
               <div class=\"tf-product-media-wrap sticky-top\">
\t\t\t\t\t\t{# Build a single list: first main image, then additional images #}
\t\t\t\t\t\t{% set all_images = [] %}
\t\t\t\t\t\t{% if thumb %}
\t\t\t\t\t\t\t{% set all_images = all_images|merge([{'thumb': thumb, 'popup': popup}]) %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if images %}
\t\t\t\t\t\t\t{% set all_images = all_images|merge(images) %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"product-thumbs-slider\">
\t\t\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-product-media-thumbs other-image-zoom\" data-direction=\"vertical\" data-preview=\"4.7\">
\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper stagger-wrap\">
\t\t\t\t\t\t\t\t\t{% for img in all_images %}
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide stagger-item\" data-size=\"M\" data-color=\"gray\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"item\">
                                 <img class=\"lazyload\"
                                    data-src=\"{{ img.thumb }}\"
                                    src=\"{{ img.thumb }}\"
                                    alt=\"{{ heading_title }}\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flat-wrap-media-product\">
\t\t\t\t\t\t\t\t<div dir=\"ltr\" class=\"swiper tf-product-media-main\" id=\"gallery-swiper-started\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t{% for img in all_images %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\" data-size=\"M\" data-color=\"gray\">
                                 <a href=\"{{ img.popup }}\" target=\"_blank\" class=\"item\"
                                    data-pswp-width=\"860px\" data-pswp-height=\"1146px\">
                                 <img class=\"tf-image-zoom lazyload\"
                                    data-zoom=\"{{ img.popup }}\"
                                    data-src=\"{{ img.thumb }}\"
                                    src=\"{{ img.thumb }}\"
                                    alt=\"{{ heading_title }}\">
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{# 
\t\t\t\t\t\t\t\t\t                           <div class=\"swiper-button-next button-style-arrow thumbs-next\"></div>
\t\t\t\t\t\t\t\t\t                           #}
\t\t\t\t\t\t\t\t\t{# 
\t\t\t\t\t\t\t\t\t                           <div class=\"swiper-button-prev button-style-arrow thumbs-prev\"></div>
\t\t\t\t\t\t\t\t\t                           #}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /Product Images -->
\t\t\t\t<!-- Product Info -->
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"tf-product-info-wrap position-relative\">
\t\t\t\t\t\t<form id=\"form-product\">
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"input-product-id\" name=\"product_id\" value=\"{{ product_id }}\">
\t\t\t\t\t\t\t{% if options and options|length > 0 %}
\t\t\t\t\t\t\t\t{% for option in options %}
\t\t\t\t\t\t\t\t\t{% if option.product_option_value and option.product_option_value|length > 0 %}
\t\t\t\t\t\t\t\t\t\t{% if option.type == 'select' %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.product_option_value[0].product_option_value_id }}\" id=\"input-option-{{ option.product_option_id }}\">
\t\t\t\t\t\t\t\t\t\t{% elseif option.type == 'radio' %}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.product_option_value[0].product_option_value_id }}\" id=\"input-option-{{ option.product_option_id }}\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div class=\"tf-zoom-main sticky-top\"></div>
\t\t\t\t\t\t\t<div class=\"tf-product-info-list other-image-zoom\">
\t\t\t\t\t\t\t\t<h2 class=\"product-info-name\">{{ heading_title }}</h2>
\t\t\t\t\t\t\t\t<ul class=\"tf-product-cate-sku\">
\t\t\t\t\t\t\t\t\t<li class=\"item-cate-sku h6\">
\t\t\t\t\t\t\t\t\t\t<span class=\"label fw-6 text-black\">SKU:</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"value link text-main-2\">{{ model }}</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t{% if logged %}
\t\t\t\t\t\t\t\t<div class=\"tf-product-heading mt-2 mb-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product-info-price price-wrap\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-new price-on-sale h2 fw-4\">{{ tax }}</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t{% if options and options|length > 0 %}
\t\t\t\t\t\t\t\t\t<div class=\"tf-product-variant mt-3\">
\t\t\t\t\t\t\t\t\t\t{% for option in options %}
\t\t\t\t\t\t\t\t\t\t\t{% if option.product_option_value and option.product_option_value|length > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-item variant-{{ option.type }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h4 fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ option.name }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"variant-picker-label-value value-current-option\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ option.product_option_value[0].name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-values mt-3\" style=\"display:flex;gap:20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for option_value in option.product_option_value %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if option.type == 'select' %}
                                             <div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"size-btn {% if loop.first %}active {% endif %}\" style=\"background:url( {{ option_value['image'] }}) no-repeat center center; background-size: cover;\" data-size=\"{{ option_value.name }}\"></span>
                                                <p>{{ option_value.name }}</p></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% elseif option.type == 'radio' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"color {% if loop.first %}active{% endif %}\" data-color=\"{{ option_value.name }}\">{{ option_value.name }}</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t{% if logged %}
\t\t\t\t\t\t\t\t\t<div class=\"tf-product-total-quantity\">
\t\t\t\t\t\t\t\t\t\t<div class=\"group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"wg-quantity\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-quantity btn-decrease\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"{{ minimum }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-quantity btn-increase\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"button-cart\" class=\"tf-btn animate-btn \">
\t\t\t\t\t\t\t\t\t\t\t\tADD TO CART
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-shopping-cart-simple\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"hover-tooltip box-icon btn-add-wishlist\" data-url=\"index.php?route=account/wishlist.add&language={{ language }}\" data-product-id=\"{{ product_id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"tf-product-total-quantity\">
\t\t\t\t\t\t\t\t\t\t<div class=\"group-btn\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=account/login\" class=\"tf-btn animate-btn \" style=\"width:100%;\">
\t\t\t\t\t\t\t\t\t\t\t\tRetailer Login

\t\t\t\t\t\t\t\t\t\t\t</a>


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div class=\"tf-product-extra-link d-none\">
\t\t\t\t\t\t\t\t\t<a href=\"#compareColor\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-swatches\"></i>Compare color
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#askQuestion\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-ques\"></i>Ask a question
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#shipAndDelivery\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-truck\"></i>Delivery & Return
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#shareWith\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-share\"></i>Share
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tf-product-delivery-return\">
\t\t\t\t\t\t\t\t\t<div class=\"product-delivery\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon icon-clock-cd\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"h6\">Estimate delivery times:
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-7 text-black\">7-20 days</span>
\t\t\t\t\t\t\t\t\t\t\t(International),
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-7 text-black\">2-4 days</span>
\t\t\t\t\t\t\t\t\t\t\t(United States).
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"product-delivery return\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon icon-compare\"></div>
\t\t\t\t\t\t\t\t\t\t<p class=\"h6\">Return within
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-7 text-black\">30 days</span>
\t\t\t\t\t\t\t\t\t\t\tof purchase. Duties & taxes are
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              non-refundable.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tf-product-trust-seal\">
\t\t\t\t\t\t\t\t\t<p class=\"h6 text-seal\">Safe Checkout:</p>
\t\t\t\t\t\t\t\t\t<ul class=\"list-card\">
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/visa.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/master-card.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/discover.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/paypal.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /Product Info -->
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"tf-sticky-btn-atc\">
\t\t<div class=\"container\">
\t\t\t<div class=\"tf-height-observer w-100 d-flex align-items-center\">
\t\t\t\t<div class=\"tf-sticky-atc-product d-flex align-items-center\">
\t\t\t\t\t<div class=\"tf-mini-cart-item \">
\t\t\t\t\t\t<div class=\"tf-mini-cart-image\">
                     <img class=\"lazyload\" data-src=\"{{ thumb }}\"
                        src=\"{{ thumb }}\" alt=\"img-product\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tf-mini-cart-info\">
\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"link text-line-clamp-1\">{{ heading_title }}</a>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<div class=\"size\">
\t\t\t\t\t\t\t\t<div class=\"text-small text-main-2 sub\" id=\"selected-size\">Size: <span id=\"size-value\">{% if options %}{% for option in options %}{% if option.type == 'select' and option.product_option_value %}{{ option.product_option_value[0].name }}{% endif %}{% endfor %}{% else %}Not selected{% endif %}</span></div>
\t\t\t\t\t\t\t\t<div class=\"text-small text-main-2 sub\" id=\"selected-color\">Color: <span id=\"color-value\">{% if options %}{% for option in options %}{% if option.type == 'radio' and option.product_option_value %}{{ option.product_option_value[0].name }}{% endif %}{% endfor %}{% else %}Not selected{% endif %}</span></div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"h6 fw-semibold\" id=\"sticky-price\">
\t\t\t\t\t\t\t\t{{ price }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tf-sticky-atc-infos\">
\t\t\t\t\t<form class=\"\">
\t\t\t\t\t\t{% if options and options|length > 0 %}
\t\t\t\t\t\t\t{% for option in options %}
\t\t\t\t\t\t\t\t{% if option.type == 'select' and option.product_option_value and option.product_option_value|length > 0 %}
\t\t\t\t\t\t\t\t\t<div class=\"tf-sticky-atc-variant-price\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"title\">{{ option.name }}:</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"tf-select style-1\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"font-sora\" name=\"option[{{ option.product_option_id }}]\">
\t\t\t\t\t\t\t\t\t\t\t\t{% for option_value in option.product_option_value %}
                           <option value=\"{{ option_value.product_option_value_id }}\"{% if loop.first %} selected=\"selected\"{% endif %}>{{ option_value.name }}</option>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"tf-product-info-quantity\">
\t\t\t\t\t\t\t<h6 class=\"title\">Quantity:</h6>
\t\t\t\t\t\t\t<div class=\"wg-quantity\">
\t\t\t\t\t\t\t\t<button class=\"btn-quantity minus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-minus\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"{{ minimum }}\">
\t\t\t\t\t\t\t\t<button class=\"btn-quantity plus-btn\">
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-plus\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tf-sticky-atc-btns\">
\t\t\t\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"tf-btn animate-btn btn-add-to-cart\" data-url=\"index.php?route=checkout/cart.add&language={{ language }}\" data-product-id=\"{{ product_id }}\">
\t\t\t\t\t\t\t\tAdd to cart
\t\t\t\t\t\t\t\t<i class=\"icon icon-shopping-cart-simple\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- /Product Main -->
<!-- Product Description -->
<section class=\"flat-spacing-3\">
\t<div class=\"container\">
\t\t<div class=\"flat-animate-tab tab-style-1\">
\t\t\t<ul class=\"menu-tab menu-tab-1\" role=\"tablist\">
\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t<a href=\"#descriptions\" class=\"tab-link active\" data-bs-toggle=\"tab\">Descriptions</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t<a href=\"#policy\" class=\"tab-link\" data-bs-toggle=\"tab\">Attribute</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-tab-item\" role=\"presentation\">
\t\t\t\t\t<a href=\"#reviews\" class=\"tab-link\" data-bs-toggle=\"tab\">Customer Reviews</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane wd-product-descriptions active show\" id=\"descriptions\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"tab-descriptions\">
\t\t\t\t\t\t<p class=\"h6 desc\">
\t\t\t\t\t\t\t{{ description|raw }}
\t\t\t\t\t\t</p>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab-pane wd-product-descriptions\" id=\"policy\" role=\"tabpanel\">
\t\t\t\t\t<div class=\"tab-policy\">
\t\t\t\t\t\t{% if attribute_groups %}
\t\t\t\t\t\t\t<div class=\"product-attributes\">
\t\t\t\t\t\t\t\t{% for attribute_group in attribute_groups %}
\t\t\t\t\t\t\t\t\t<div class=\"attribute-group mb-4\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"attribute-group-title\">{{ attribute_group.name }}</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for attribute in attribute_group.attribute %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"attribute-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>{{ attribute.name }}</strong>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"attribute-value\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ attribute.text }}
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p class=\"text-muted\">{{ text_no_attributes|default('No attributes available for this product.') }}</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
             <div class=\"tab-pane wd-product-descriptions\" id=\"reviews\" role=\"tabpanel\">
                {% if review_status %}
                   {{ review }}
                {% else %}
                   <div class=\"text-center py-5\">
                      <p class=\"text-muted\">{{ text_no_reviews|default('Reviews are disabled for this product.') }}</p>
\t\t\t\t\t\t\t\t</div>
                {% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
</section>
<!-- /Product Description -->
<!-- Box Icon -->
<section>
   <div class=\"container\">
      <div class=\"sect-border\">
         <div class=\"s-head\">
            <h3 class=\" s-title fw-normal\">Ethical Jewelry</h3>
\t\t\t\t\t\t\t</div>
         <div dir=\"ltr\" class=\"swiper tf-swiper\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"1\" data-space-lg=\"97\"
            data-space-md=\"33\" data-space=\"13\" data-pagination=\"1\" data-pagination-sm=\"2\" data-pagination-md=\"3\" data-pagination-lg=\"4\">
            <div class=\"swiper-wrapper\">
               <!-- item 1 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-package\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Quick Turn Around</h4>
                        <p class=\"text\">30 day money back guarantee</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
               <!-- item 2 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-calender\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Ethically sourced</h4>
                        <p class=\"text\">Manufacturer's defect</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
               <!-- item 3 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-boat\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Free shipping</h4>
                        <p class=\"text\">Free Shipping for orders over \$150</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
               <!-- item 4 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-headset\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">In-house Design</h4>
                        <p class=\"text\">24 hours a day, 7 days a week</p>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            <div class=\"sw-dot-default tf-sw-pagination\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
</section>
<!-- /Box Icon -->
<!-- Also Like -->
<section class=\"flat-spacing-3\">
   <div class=\"container\">
      <h1 class=\"sect-title text-center\">You May Also Like</h1>
      {{ related }}
\t\t\t\t\t\t\t</div>
</section>
<!-- /Also Like -->
<!-- Related -->
<section class=\"flat-spacing-3 pt-0 d-none\">
   <div class=\"container\">
      <h1 class=\"sect-title text-center\">Recently Viewed</h1>
      <div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\"
         data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\"
         data-pagination-lg=\"4\">
         <div class=\"swiper-wrapper\">
            <!-- Product 1 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                     <img class=\"lazyload img-product\" src=\"assets/images/products/underwear/product-1.jpg\"
                        data-src=\"assets/images/products/underwear/product-1.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/underwear/product-2.jpg\"
                        data-src=\"assets/images/products/underwear/product-2.jpg\" alt=\"Product\">
                     </a>
                     <ul class=\"product-action_list\">
                        <li>
                           <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-shopping-cart-simple\"></span>
                           <span class=\"tooltip\">Add to cart</span>
                           </a>
                        </li>
                        <li class=\"wishlist\">
                           <a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </a>
                        </li>
                        
                        <li>
                           <a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-view\"></span>
                           <span class=\"tooltip\">Quick view</span>
                           </a>
\t\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t\t\t</div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Seamless breathable thong</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$99,99</span>
                        <span class=\"price-new h6\">\$69,99</span>
\t\t\t\t\t\t\t</div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Sage Green</span>
                           <span class=\"swatch-value bg-sage-green\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-1.jpg\"
                              data-src=\"assets/images/products/underwear/product-1.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Light Orange</span>
                           <span class=\"swatch-value bg-tomato\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-3.jpg\"
                              data-src=\"assets/images/products/underwear/product-3.jpg\" alt=\"Product\">
\t\t\t\t\t\t\t</li>
                     </ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
            <!-- Product 2 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                     <img class=\"lazyload img-product\" src=\"assets/images/products/underwear/product-4.jpg\"
                        data-src=\"assets/images/products/underwear/product-4.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/underwear/product-5.jpg\"
                        data-src=\"assets/images/products/underwear/product-5.jpg\" alt=\"Product\">
                     </a>
                     <ul class=\"product-action_list\">
                        <li>
                           <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-shopping-cart-simple\"></span>
                           <span class=\"tooltip\">Add to cart</span>
                           </a>
\t\t\t\t\t\t\t</li>
                        <li class=\"wishlist\">
                           <a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </a>
\t\t\t\t\t\t\t</li>
                        
                        <li>
                           <a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-view\"></span>
                           <span class=\"tooltip\">Quick view</span>
                           </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t\t\t\t</div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Cotton high waisted panties</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\"> \$89,99</span>
                        <span class=\"price-new h6\">\$59,99</span>
\t\t\t\t\t\t</div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-4.jpg\"
                              data-src=\"assets/images/products/underwear/product-4.jpg\" alt=\"Product\">
\t\t\t</li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Dark</span>
                           <span class=\"swatch-value bg-dark-charcoal\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-6.jpg\"
                              data-src=\"assets/images/products/underwear/product-6.jpg\" alt=\"Product\">
\t\t\t\t</li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-7.jpg\"
                              data-src=\"assets/images/products/underwear/product-7.jpg\" alt=\"Product\">
\t\t\t\t</li>
\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
            <!-- Product 3 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                     <img class=\"lazyload img-product\" src=\"assets/images/products/underwear/product-8.jpg\"
                        data-src=\"assets/images/products/underwear/product-8.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/underwear/product-9.jpg\"
                        data-src=\"assets/images/products/underwear/product-9.jpg\" alt=\"Product\">
                     </a>
                     <div class=\"variant-box\">
                        <ul class=\"product-size_list\">
                           <li class=\"size-item h6\">XS</li>
                           <li class=\"size-item h6\">S</li>
                           <li class=\"size-item h6\">M</li>
\t\t\t\t</ul>
\t\t\t\t\t</div>
                     <ul class=\"product-action_list\">
                        <li>
                           <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-shopping-cart-simple\"></span>
                           <span class=\"tooltip\">Add to cart</span>
                           </a>
\t\t\t\t\t\t\t</li>
                        <li class=\"wishlist\">
                           <a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </a>
\t\t\t\t\t\t\t</li>
                        
                        <li>
                           <a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-view\"></span>
                           <span class=\"tooltip\">Quick view</span>
                           </a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t</div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Sexy lace panties</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$79,99</span>
                        <span class=\"price-new h6\">\$49,99</span>
\t\t\t</div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Dusty Olive</span>
                           <span class=\"swatch-value bg-dusty-olive\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-8.jpg\"
                              data-src=\"assets/images/products/underwear/product-8.jpg\" alt=\"Product\">
\t\t\t</li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Light Orange</span>
                           <span class=\"swatch-value bg-tomato\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-10.jpg\"
                              data-src=\"assets/images/products/underwear/product-10.jpg\" alt=\"Product\">
\t\t\t\t</li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-11.jpg\"
                              data-src=\"assets/images/products/underwear/product-11.jpg\" alt=\"Product\">
\t\t\t\t</li>
\t\t</ul>
\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
            <!-- Product 4 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                    
                     <img class=\"lazyload img-product\" src=\"assets/images/products/underwear/product-12.jpg\"
                        data-src=\"assets/images/products/underwear/product-12.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/underwear/product-13.jpg\"
                        data-src=\"assets/images/products/underwear/product-13.jpg\" alt=\"Product\">
                     
                    </a>

                     <ul class=\"product-action_list\">
                        <li>
                           <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-shopping-cart-simple\"></span>
                           <span class=\"tooltip\">Add to cart</span>
                           </a>
                        </li>
                        <li class=\"wishlist\">
                           <a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </a>
                        </li>
                        
                        <li>
                           <a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon\">
                           <span class=\"icon icon-view\"></span>
                           <span class=\"tooltip\">Quick view</span>
                           </a>
                        </li>
                     </ul>
\t\t</div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Seamless underwear</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$109,99</span>
                        <span class=\"price-new h6\">\$74,99</span>
\t</div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-12.jpg\"
                              data-src=\"assets/images/products/underwear/product-12.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Dusty Olive</span>
                           <span class=\"swatch-value bg-dusty-olive\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-14.jpg\"
                              data-src=\"assets/images/products/underwear/product-14.jpg\" alt=\"Product\">
                        </li>
                     </ul>
\t\t</div>
\t</div>
</div>
\t\t</div>
         <div class=\"sw-dot-default tf-sw-pagination\"></div>
\t</div>
</div>
</section>


<!-- /Related -->
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
<script>
\$(document).ready(function() {
console.log('ready');

    // Initialize sticky cart with default selections
    setTimeout(function() {
        initializeStickyCart();
    }, 500);
    
    \$(document).on('click', '.size-btn', function() {
var size = \$(this).data('size');
        console.log('Size button clicked:', size);
        
\$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(size);
\$(this).siblings().removeClass('active');
\$(this).addClass('active');
        
        // Update sticky cart section
        \$('#size-value').text(size);
        console.log('Updated size value to:', size);
        updateStickyCartOptions();
});

    \$(document).on('click', '.color', function() {
var color = \$(this).data('color');
        console.log('Color button clicked:', color);
        
\$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(color);
\$(this).siblings().removeClass('active');
\$(this).addClass('active');
        
        // Update sticky cart section
        \$('#color-value').text(color);
        console.log('Updated color value to:', color);
        updateStickyCartOptions();
    });

    // Function to update sticky cart options
    function updateStickyCartOptions() {
        // Update the select dropdowns in sticky cart to match main selections
        \$('.tf-sticky-atc-infos select').each(function() {
            var optionName = \$(this).closest('.tf-sticky-atc-variant-price').find('.title').text().replace(':', '');
            var selectedValue = '';
            
            if (optionName.toLowerCase().includes('size')) {
                selectedValue = \$('#size-value').text();
            } else if (optionName.toLowerCase().includes('color')) {
                selectedValue = \$('#color-value').text();
            }
            
            if (selectedValue) {
                \$(this).find('option').each(function() {
                    if (\$(this).text() === selectedValue) {
                        \$(this).prop('selected', true);
                    }
                });
            }
        });
        
        // Update price if there are option price modifiers
        updateStickyPrice();
    }

    // Function to update sticky cart price based on selected options
    function updateStickyPrice() {
        // Get base price
        var basePrice = '{{ price }}';
        var currentPrice = basePrice;
        
        // Check for option price modifiers (this can be enhanced with actual price calculation)
        var selectedOptions = [];
        
        // Get selected size
        var selectedSize = \$('#size-value').text();
        if (selectedSize && selectedSize !== 'Not selected') {
            selectedOptions.push({type: 'size', value: selectedSize});
        }
        
        // Get selected color
        var selectedColor = \$('#color-value').text();
        if (selectedColor && selectedColor !== 'Not selected') {
            selectedOptions.push({type: 'color', value: selectedColor});
        }
        
        // Update the sticky price display
        \$('#sticky-price').text(currentPrice);
        
        // Log for debugging
        console.log('Updated sticky cart - Size:', selectedSize, 'Color:', selectedColor, 'Price:', currentPrice);
    }

    // Update sticky cart when sticky cart selects change
    \$('.tf-sticky-atc-infos select').on('change', function() {
        var selectedText = \$(this).find('option:selected').text();
        var optionName = \$(this).closest('.tf-sticky-atc-variant-price').find('.title').text().replace(':', '');
        
        if (optionName.toLowerCase().includes('size')) {
            \$('#size-value').text(selectedText);
            // Update main size selection
            \$('.size-btn').each(function() {
                if (\$(this).data('size') === selectedText) {
                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');
                    \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(selectedText);
                }
            });
        } else if (optionName.toLowerCase().includes('color')) {
            \$('#color-value').text(selectedText);
            // Update main color selection
            \$('.color').each(function() {
                if (\$(this).data('color') === selectedText) {
                    \$(this).siblings().removeClass('active');
                    \$(this).addClass('active');
                    \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(selectedText);
                }
            });
        }
    });

    // Initialize sticky cart with default selections
    function initializeStickyCart() {
        // Set initial size from first active size button
        var activeSize = \$('.size-btn.active').first();
        if (activeSize.length) {
            \$('#size-value').text(activeSize.data('size'));
        }
        
        // Set initial color from first active color button  
        var activeColor = \$('.color.active').first();
        if (activeColor.length) {
            \$('#color-value').text(activeColor.data('color'));
            \$('#color-indicator').removeClass().addClass('dot-color').addClass('bg-' + activeColor.data('color').toLowerCase().replace(/\\s+/g, '-'));
        }
        
        // Update sticky cart options to match
        updateStickyCartOptions();
    }

    // Initialize sticky cart with default selections
    function initializeStickyCart() {
        // Set initial size from first active size button or first available
        var activeSize = \$('.size-btn.active').first();
        if (activeSize.length) {
            \$('#size-value').text(activeSize.data('size'));
        } else {
            var firstSize = \$('.size-btn').first();
            if (firstSize.length) {
                firstSize.addClass('active');
                \$('#size-value').text(firstSize.data('size'));
            }
        }
        
        // Set initial color from first active color button or first available
        var activeColor = \$('.color.active').first();
        if (activeColor.length) {
            \$('#color-value').text(activeColor.data('color'));
            \$('#color-indicator').removeClass().addClass('dot-color').addClass('bg-' + activeColor.data('color').toLowerCase().replace(/\\s+/g, '-'));
        } else {
            var firstColor = \$('.color').first();
            if (firstColor.length) {
                firstColor.addClass('active');
                \$('#color-value').text(firstColor.data('color'));
                \$('#color-indicator').removeClass().addClass('dot-color').addClass('bg-' + firstColor.data('color').toLowerCase().replace(/\\s+/g, '-'));
            }
        }
        
        // Update price
        updateStickyPrice();
        
        console.log('Sticky cart initialized');
    }

   \$('#input-subscription').on('change', function() {
\$('.subscription').addClass('d-none');
\$('#subscription-description-' + \$(this).val()).removeClass('d-none');
});

   \$('#form-product').on('submit', function(e) {
e.preventDefault();
\$.ajax({
url: 'index.php?route=checkout/cart.add&language=en-gb', // change language
type: 'post',
data: \$('#form-product').serialize(),
dataType: 'json',
           beforeSend: function() {
\$('#button-cart').prop(\"disabled\", true).text(\"Loading...\");
},
           complete: function() {
\$('#button-cart').prop(\"disabled\", false).text(\"Add to Cart\");
},
           success: function(json) {
 \$(\".tf-add-cart-success\").addClass(\"active\");
                        
                        // Update cart count in header
                        if (json.count !== undefined) {
                            \$(\".count\").text(json.count);
                        }
                        
                        // Update cart content without reload
                        \$.get('index.php?route=checkout/cart.info', function(cartHtml) {
                            \$('.tf-mini-cart-wrap').html(cartHtml);
                        });
                        
                        // Show success message
                        alert('Product added to cart successfully!');
},
           error: function(xhr, ajaxOptions, thrownError) {
console.log(thrownError + \"\\n\" + xhr.statusText + \"\\n\" + xhr.responseText);
}
});
});

});
</script>
{{ footer }}", "catalog/view/template/product/product.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\product\\product.twig");
    }
}
