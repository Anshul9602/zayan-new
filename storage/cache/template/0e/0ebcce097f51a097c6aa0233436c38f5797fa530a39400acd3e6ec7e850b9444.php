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
   .size-btn {
      padding: 10px;
      width: 100%;
      height: 100%;
      border-radius: 15px !important;
      border: 1px solid #000;
   }
   .size-btn.active {
      background-color: #000;
      color: #fff;
      border: 1px solid #000 !important;
   }
   .color {
      padding: 10px;
      width: 100%;
      height: 100%;
      border-radius: 15px !important;
      border: 1px solid #000;
   }
   .color.active {
      background-color: #000;
      color: #fff;
      border: 1px solid #000 !important;
   }
   @media (max-width: 768px) {
          .tf-sticky-btn-atc .title, .tf-sticky-btn-atc .tf-sticky-atc-product {
        display: block !important;
    }
   }
</style>

<!-- Page Title -->
<section class=\"s-page-title style-2\" style=\"padding-top:100px;\">
   <div class=\"container\">
      <div class=\"content\" style=\"padding-bottom: 19px;\">
         <ul class=\"breadcrumbs-page\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 41
            yield "            <li class=\"breadcrumb-item\" style=\"display:flex;\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 41);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 41);
            yield "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "         </ul>
      </div>
   </div>
</section>
<!-- /Page Title -->
<!-- Product Main -->
<section class=\"flat-single-product flat-spacing-3\">
   <div class=\"tf-main-product section-image-zoom\">
      <div class=\"container\">
         <div class=\"row\">

         

            <!-- Product Images -->
            <div class=\"col-md-6\">
               <div class=\"tf-product-media-wrap sticky-top\">
                  ";
        // line 60
        yield "                  ";
        $context["all_images"] = [];
        // line 61
        yield "                  ";
        if (($context["thumb"] ?? null)) {
            // line 62
            yield "                  ";
            $context["all_images"] = Twig\Extension\CoreExtension::merge(($context["all_images"] ?? null), [["thumb" => ($context["thumb"] ?? null), "popup" => ($context["popup"] ?? null)]]);
            // line 63
            yield "                  ";
        }
        // line 64
        yield "                  ";
        if (($context["images"] ?? null)) {
            // line 65
            yield "                  ";
            $context["all_images"] = Twig\Extension\CoreExtension::merge(($context["all_images"] ?? null), ($context["images"] ?? null));
            // line 66
            yield "                  ";
        }
        // line 67
        yield "                  <div class=\"product-thumbs-slider\">
                     <div dir=\"ltr\" class=\"swiper tf-product-media-thumbs other-image-zoom\" data-direction=\"vertical\" data-preview=\"4.7\">
                        <div class=\"swiper-wrapper stagger-wrap\">
                           ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 71
            yield "                           <div class=\"swiper-slide stagger-item\" data-size=\"M\" data-color=\"gray\">
                              <div class=\"item\">
                                 <img class=\"lazyload\"
                                    data-src=\"";
            // line 74
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 74);
            yield "\"
                                    src=\"";
            // line 75
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 75);
            yield "\"
                                    alt=\"";
            // line 76
            yield ($context["heading_title"] ?? null);
            yield "\">
                              </div>
                           </div>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "                        </div>
                     </div>
                     <div class=\"flat-wrap-media-product\">
                        <div dir=\"ltr\" class=\"swiper tf-product-media-main\" id=\"gallery-swiper-started\">
                           <div class=\"swiper-wrapper\">
                              ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 86
            yield "                              <div class=\"swiper-slide\" data-size=\"M\" data-color=\"gray\">
                                 <a href=\"";
            // line 87
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 87);
            yield "\" target=\"_blank\" class=\"item\"
                                    data-pswp-width=\"860px\" data-pswp-height=\"1146px\">
                                 <img class=\"tf-image-zoom lazyload\"
                                    data-zoom=\"";
            // line 90
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 90);
            yield "\"
                                    data-src=\"";
            // line 91
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 91);
            yield "\"
                                    src=\"";
            // line 92
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 92);
            yield "\"
                                    alt=\"";
            // line 93
            yield ($context["heading_title"] ?? null);
            yield "\">
                                 </a>
                              </div>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                           </div>
                           ";
        // line 101
        yield "                           ";
        // line 104
        yield "                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /Product Images -->
            <!-- Product Info -->
            <div class=\"col-md-6\">
               <div class=\"tf-product-info-wrap position-relative\">
                  <form id=\"form-product\">
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"input-product-id\" name=\"product_id\" value=\"";
        // line 114
        yield ($context["product_id"] ?? null);
        yield "\">
\t\t\t\t\t\t\t";
        // line 115
        if ((($context["options"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["options"] ?? null)) > 0))) {
            // line 116
            yield "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 117
                yield "\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 117) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 117)) > 0))) {
                    // line 118
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 118) == "select")) {
                        // line 119
                        yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 119)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "product_option_value_id", [], "any", false, false, false, 119);
                        yield "\" id=\"input-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 119);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 120
$context["option"], "type", [], "any", false, false, false, 120) == "radio")) {
                        // line 121
                        yield "\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 121);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 121)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "product_option_value_id", [], "any", false, false, false, 121);
                        yield "\" id=\"input-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 121);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 123
                    yield "\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                yield "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            yield "\t\t\t\t\t\t\t";
        }
        // line 126
        yield "\t\t\t\t\t\t\t<div class=\"tf-zoom-main sticky-top\"></div>
\t\t\t\t\t\t\t<div class=\"tf-product-info-list other-image-zoom\">
\t\t\t\t\t\t\t\t<h2 class=\"product-info-name\">";
        // line 128
        yield ($context["heading_title"] ?? null);
        yield "</h2>
\t\t\t\t\t\t\t\t<ul class=\"tf-product-cate-sku\">
\t\t\t\t\t\t\t\t\t<li class=\"item-cate-sku h6\">
\t\t\t\t\t\t\t\t\t\t<span class=\"label fw-6 text-black\">SKU:</span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"value link text-main-2\">";
        // line 132
        yield ($context["model"] ?? null);
        yield "</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t<div class=\"tf-product-heading mt-2\">
\t\t\t\t\t\t\t\t\t<div class=\"product-info-price price-wrap\">
\t\t\t\t\t\t\t\t\t\t<span class=\"price-new price-on-sale h2 fw-4\">";
        // line 139
        yield ($context["tax"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t";
        // line 144
        if ((($context["options"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["options"] ?? null)) > 0))) {
            // line 145
            yield "\t\t\t\t\t\t\t\t\t<div class=\"tf-product-variant\">
\t\t\t\t\t\t\t\t\t\t";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 147
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 147) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 147)) > 0))) {
                    // line 148
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-item variant-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 148);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h4 fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 151
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 151);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"variant-picker-label-value value-current-option\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 153
                    yield CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 153)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null), "name", [], "any", false, false, false, 153);
                    yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-values mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 158
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 158));
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
                        // line 159
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 159) == "select")) {
                            // line 160
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"size-btn ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 160)) {
                                yield "active";
                            }
                            yield "\" data-size=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 160);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 160);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 161
$context["option"], "type", [], "any", false, false, false, 161) == "radio")) {
                            // line 162
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"color ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 162)) {
                                yield "active";
                            }
                            yield "\" data-color=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 162);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 162);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 164
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
                    // line 165
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 168
                yield "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 171
        yield "
\t\t\t\t\t\t\t\t<div class=\"tf-product-variant\">
\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-item variant-";
        // line 173
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 173);
        yield "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"h4 fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 176
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "name", [], "any", false, false, false, 176);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"variant-picker-label-value value-current-option\">";
        // line 177
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "product_option_value", [], "any", false, false, false, 177)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[0] ?? null) : null), "name", [], "any", false, false, false, 177);
        yield "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-values mt-3\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "product_option_value", [], "any", false, false, false, 182));
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
            // line 183
            yield "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 183) == "select")) {
                // line 184
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"size-btn ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 184)) {
                    yield "active";
                }
                yield "\" data-size=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 184);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 184);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 185
($context["option"] ?? null), "type", [], "any", false, false, false, 185) == "radio")) {
                // line 186
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"color ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 186)) {
                    yield "active";
                }
                yield "\" data-color=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 186);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 186);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 188
            yield "\t\t\t\t\t\t\t\t\t\t\t";
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
        // line 189
        yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"tf-product-total-quantity\">
\t\t\t\t\t\t\t\t\t<div class=\"group-btn\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wg-quantity\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-quantity btn-decrease\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"";
        // line 200
        yield ($context["minimum"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-quantity btn-increase\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"button-cart\" onclick class=\"tf-btn animate-btn btn-add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\tADD TO CART
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-shopping-cart-simple\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"hover-tooltip box-icon btn-add-wishlist\" data-url=\"index.php?route=account/wishlist.add&language=";
        // line 209
        yield ($context["language"] ?? null);
        yield "\" data-product-id=\"";
        yield ($context["product_id"] ?? null);
        yield "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"tf-btn btn-outline w-100\">BUY IT NOW</a>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"tf-product-extra-link\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              non-refundable.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tf-product-trust-seal\">
\t\t\t\t\t\t\t\t\t<p class=\"h6 text-seal\">Guarantee Safe Checkout:</p>
\t\t\t\t\t\t\t\t\t<ul class=\"list-card\">
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/visa.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/master-card.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/amex.png\" alt=\"card\">
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
               </div>
            </div>
            <!-- /Product Info -->
         </div>
      </div>
   </div>
   <div class=\"tf-sticky-btn-atc\">
      <div class=\"container\">
         <div class=\"tf-height-observer w-100 d-flex align-items-center\">
            <div class=\"tf-sticky-atc-product d-flex align-items-center\">
               <div class=\"tf-mini-cart-item \">
                  <div class=\"tf-mini-cart-image\">
                     <img class=\"lazyload\" data-src=\"";
        // line 286
        yield ($context["thumb"] ?? null);
        yield "\"
                        src=\"";
        // line 287
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"img-product\">
                  </div>
                  <div class=\"tf-mini-cart-info\">
                     <h6 class=\"title\">
                        <a href=\"product-detail.html\" class=\"link text-line-clamp-1\">";
        // line 291
        yield ($context["heading_title"] ?? null);
        yield "</a>
                     </h6>
                     <div class=\"size\">
                        <div class=\"text-small text-main-2 sub\">Size: XS</div>
                        <div class=\"text-small text-main-2 sub\">Color:</div>
                        <div class=\"dot-color bg-caramel\"></div>
                     </div>
                     <div class=\"h6 fw-semibold\">
                        ";
        // line 299
        yield ($context["price"] ?? null);
        yield "
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"tf-sticky-atc-infos\">
               <form class=\"\">
                  ";
        // line 306
        if ((($context["options"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["options"] ?? null)) > 0))) {
            // line 307
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 308
                yield "                  ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 308) == "select") && CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 308)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 308)) > 0))) {
                    // line 309
                    yield "                  <div class=\"tf-sticky-atc-variant-price\">
                     <h6 class=\"title\">";
                    // line 310
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 310);
                    yield ":</h6>
                     <div class=\"tf-select style-1\">
                        <select class=\"font-sora\" name=\"option[";
                    // line 312
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 312);
                    yield "]\">
                           ";
                    // line 313
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 313));
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
                        // line 314
                        yield "                           <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 314);
                        yield "\"";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 314)) {
                            yield " selected=\"selected\"";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 314);
                        yield "</option>
                           ";
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
                    // line 316
                    yield "                        </select>
                     </div>
                  </div>
                  ";
                }
                // line 320
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 321
            yield "                  ";
        }
        // line 322
        yield "                  <div class=\"tf-product-info-quantity\">
                     <h6 class=\"title\">Quantity:</h6>
                     <div class=\"wg-quantity\">
                        <button class=\"btn-quantity minus-btn\">
                        <i class=\"icon icon-minus\"></i>
                        </button>
                        <input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"";
        // line 328
        yield ($context["minimum"] ?? null);
        yield "\">
                        <button class=\"btn-quantity plus-btn\">
                        <i class=\"icon icon-plus\"></i>
                        </button>
                     </div>
                  </div>
                  <div class=\"tf-sticky-atc-btns\">
                     <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"tf-btn animate-btn btn-add-to-cart\" data-url=\"index.php?route=checkout/cart.add&language=";
        // line 335
        yield ($context["language"] ?? null);
        yield "\" data-product-id=\"";
        yield ($context["product_id"] ?? null);
        yield "\">
                     Add to cart
                     <i class=\"icon icon-shopping-cart-simple\"></i>
                     </a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /Product Main -->
<!-- Product Description -->
<section class=\"flat-spacing-3\">
   <div class=\"container\">
      <div class=\"flat-animate-tab tab-style-1\">
         <ul class=\"menu-tab menu-tab-1\" role=\"tablist\">
            <li class=\"nav-tab-item\" role=\"presentation\">
               <a href=\"#descriptions\" class=\"tab-link active\" data-bs-toggle=\"tab\">Descriptions</a>
            </li>
            <li class=\"nav-tab-item\" role=\"presentation\">
               <a href=\"#policy\" class=\"tab-link\" data-bs-toggle=\"tab\">Shipping, Return & Refund Policy</a>
            </li>
            <li class=\"nav-tab-item\" role=\"presentation\">
               <a href=\"#reviews\" class=\"tab-link\" data-bs-toggle=\"tab\">Customer Reviews</a>
            </li>
         </ul>
         <div class=\"tab-content\">
            <div class=\"tab-pane wd-product-descriptions active show\" id=\"descriptions\" role=\"tabpanel\">
               <div class=\"tab-descriptions\">
                  <p class=\"h6 desc\">
                     ";
        // line 366
        yield ($context["description"] ?? null);
        yield "
                  </p>
               
               </div>
            </div>
            <div class=\"tab-pane wd-product-descriptions\" id=\"policy\" role=\"tabpanel\">
               <div class=\"tab-policy\">
                  <div class=\"mb_32\">
                     <h5 class=\"mb_16 text-black\">Returns & Refunds:</h5>
                     <p class=\"h6\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tortor commodo enim pulvinar
                        hendrerit. Mauris a leo rutrum lectus vehicula dignissim feugiat eu felis. Fusce libero est, commodo vitae
                        ultricies id, sollicitudin a augue. In finibus suscipit nulla, id bibendum diam fermentum sed.
                     </p>
                  </div>
                  <div class=\"\">
                     <h5 class=\"mb_16 text-black\">Shipping:</h5>
                     <p class=\"h6\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum arcu ut odio elementum,
                        vel vestibulum lacus scelerisque. Integer egestas nisi eu nunc imperdiet.
                     </p>
                  </div>
               </div>
            </div>
            <div class=\"tab-pane wd-product-descriptions\" id=\"reviews\" role=\"tabpanel\">
               <div class=\"tab-reviews write-cancel-review-wrap\">
                  <div class=\"tab-reviews-heading\">
                     <div class=\"top\">
                        <div class=\"text-center\">
                           <div class=\"number fw-6\">4.8 <span>/5</span></div>
                           <div class=\"list-star d-flex justify-content-center gap-4\">
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                           </div>
                           <p class=\"quantity-reviews\">Based on 3.637 reviews</p>
                        </div>
                        <div class=\"rating-score\">
                           <div class=\"item\">
                              <div class=\"number-1\">5</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 100%;\"></div>
                              </div>
                              <div class=\"number-2\">100</div>
                           </div>
                           <div class=\"item\">
                              <div class=\"number-1\">4</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 97%;\"></div>
                              </div>
                              <div class=\"number-2\">97</div>
                           </div>
                           <div class=\"item\">
                              <div class=\"number-1\">3</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 37%;\"></div>
                              </div>
                              <div class=\"number-2\">37</div>
                           </div>
                           <div class=\"item\">
                              <div class=\"number-1\">2</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 24%;\"></div>
                              </div>
                              <div class=\"number-2\">24</div>
                           </div>
                           <div class=\"item\">
                              <div class=\"number-1\">1</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 0%;\"></div>
                              </div>
                              <div class=\"number-2\">0</div>
                           </div>
                        </div>
                     </div>
                     <div class=\"btns-reviews\">
                        <div class=\"tf-btn btn-white animate-btn animate-dark line btn-comment-review btn-cancel-review\">
                           Cancel Review
                           <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path
                                 d=\"M15.9834 5.15866L12.8412 2.0171C12.7367 1.9126 12.6127 1.82971 12.4762 1.77316C12.3397 1.71661 12.1933 1.6875 12.0456 1.6875C11.8978 1.6875 11.7515 1.71661 11.615 1.77316C11.4785 1.82971 11.3545 1.9126 11.25 2.0171L2.57977 10.6873C2.47485 10.7914 2.39167 10.9153 2.33506 11.0518C2.27844 11.1884 2.24953 11.3348 2.25001 11.4826V14.6248C2.25001 14.9232 2.36853 15.2093 2.57951 15.4203C2.79049 15.6313 3.07664 15.7498 3.37501 15.7498H15.1875C15.3367 15.7498 15.4798 15.6906 15.5853 15.5851C15.6907 15.4796 15.75 15.3365 15.75 15.1873C15.75 15.0381 15.6907 14.8951 15.5853 14.7896C15.4798 14.6841 15.3367 14.6248 15.1875 14.6248H8.10844L15.9834 6.74983C16.0879 6.64536 16.1708 6.52133 16.2274 6.38482C16.2839 6.24831 16.313 6.102 16.313 5.95424C16.313 5.80649 16.2839 5.66017 16.2274 5.52367C16.1708 5.38716 16.0879 5.26313 15.9834 5.15866ZM6.51727 14.6248H3.37501V11.4826L9.56251 5.29506L12.7048 8.43733L6.51727 14.6248ZM13.5 7.6421L10.3584 4.49983L12.0459 2.81233L15.1875 5.9546L13.5 7.6421Z\"
                                 fill=\"black\" />
                           </svg>
                        </div>
                        <div class=\"tf-btn btn-white animate-btn animate-dark line btn-comment-review btn-write-review\">
                           Write a review
                           <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path
                                 d=\"M15.9834 5.15866L12.8412 2.0171C12.7367 1.9126 12.6127 1.82971 12.4762 1.77316C12.3397 1.71661 12.1933 1.6875 12.0456 1.6875C11.8978 1.6875 11.7515 1.71661 11.615 1.77316C11.4785 1.82971 11.3545 1.9126 11.25 2.0171L2.57977 10.6873C2.47485 10.7914 2.39167 10.9153 2.33506 11.0518C2.27844 11.1884 2.24953 11.3348 2.25001 11.4826V14.6248C2.25001 14.9232 2.36853 15.2093 2.57951 15.4203C2.79049 15.6313 3.07664 15.7498 3.37501 15.7498H15.1875C15.3367 15.7498 15.4798 15.6906 15.5853 15.5851C15.6907 15.4796 15.75 15.3365 15.75 15.1873C15.75 15.0381 15.6907 14.8951 15.5853 14.7896C15.4798 14.6841 15.3367 14.6248 15.1875 14.6248H8.10844L15.9834 6.74983C16.0879 6.64536 16.1708 6.52133 16.2274 6.38482C16.2839 6.24831 16.313 6.102 16.313 5.95424C16.313 5.80649 16.2839 5.66017 16.2274 5.52367C16.1708 5.38716 16.0879 5.26313 15.9834 5.15866ZM6.51727 14.6248H3.37501V11.4826L9.56251 5.29506L12.7048 8.43733L6.51727 14.6248ZM13.5 7.6421L10.3584 4.49983L12.0459 2.81233L15.1875 5.9546L13.5 7.6421Z\"
                                 fill=\"black\" />
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class=\"reply-comment cancel-review-wrap\">
                     <div class=\"reply-comment-filter d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap\">
                        <div class=\"d-flex align-items-center flex-wrap gap-12\">
                           <div class=\"h6 fw-5\">Filter by:</div>
                           <div class=\"filter-start-wrap\">
                              <div class=\"filter-item h6 active\">
                                 All
                              </div>
                              <div class=\"filter-item h6\">
                                 5 star (<span class=\"number\">97</span>)
                              </div>
                              <div class=\"filter-item h6\">
                                 4 star (<span class=\"number\">12</span>)
                              </div>
                              <div class=\"filter-item h6\">
                                 3 star (<span class=\"number\">23</span>)
                              </div>
                              <div class=\"filter-item h6\">
                                 2 star (<span class=\"number\">0</span>)
                              </div>
                              <div class=\"filter-item h6\">
                                 1 star (<span class=\"number\">0</span>)
                              </div>
                           </div>
                        </div>
                        <div class=\"tf-dropdown-sort\" data-bs-toggle=\"dropdown\">
                           <div class=\"btn-select\">
                              <span class=\"text-sort-value\">Most Recent</span>
                              <span class=\"icon icon-caret-down\"></span>
                           </div>
                           <div class=\"dropdown-menu\">
                              <div class=\"select-item active\">
                                 <span class=\"text-value-item\">Most Recent</span>
                              </div>
                              <div class=\"select-item\">
                                 <span class=\"text-value-item\">Oldest</span>
                              </div>
                              <div class=\"select-item\">
                                 <span class=\"text-value-item\">Most Popular</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"reply-comment-wrap\">
                        <div class=\"reply-comment-item\">
                           <div class=\"image\">
                              <img class=\"lazyload\" data-
                              <div id=\"product-info\" class=\"container\">
                                 <div class=\"row\">
                                    ";
        // line 554
        yield ($context["column_left"] ?? null);
        yield "
                                    <div id=\"content\" class=\"col\">
                                       ";
        // line 556
        yield ($context["content_top"] ?? null);
        yield "
                                       <div class=\"row mb-3\">
                                          ";
        // line 558
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 559
            yield "                                          <div class=\"col-sm\">
                                             <div class=\"image magnific-popup\">
                                                ";
            // line 561
            if (($context["thumb"] ?? null)) {
                // line 562
                yield "                                                <a href=\"";
                yield ($context["popup"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\"><img src=\"";
                yield ($context["thumb"] ?? null);
                yield "\" title=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\" class=\"img-thumbnail mb-3\"/></a>
                                                ";
            }
            // line 564
            yield "                                                ";
            if (($context["images"] ?? null)) {
                // line 565
                yield "                                                <div>
                                                   ";
                // line 566
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 567
                    yield "                                                   <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 567);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 567);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" alt=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" class=\"img-thumbnail\"/></a>&nbsp;
                                                   ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 569
                yield "                                                </div>
                                                ";
            }
            // line 571
            yield "                                             </div>
                                          </div>
                                          ";
        }
        // line 574
        yield "                                          <div class=\"col-sm\">
                                             <h1>";
        // line 575
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                                             <ul class=\"list-unstyled\">
                                                ";
        // line 577
        if (($context["manufacturer"] ?? null)) {
            // line 578
            yield "                                                <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield " <a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></li>
                                                ";
        }
        // line 580
        yield "                                                <li>";
        yield ($context["text_model"] ?? null);
        yield " ";
        yield ($context["model"] ?? null);
        yield "</li>
                                                ";
        // line 581
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_code"]) {
            // line 582
            yield "                                                <li>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 582);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 582);
            yield "</li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_code'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 584
        yield "                                                ";
        if (($context["reward"] ?? null)) {
            // line 585
            yield "                                                <li>";
            yield ($context["text_reward"] ?? null);
            yield " ";
            yield ($context["reward"] ?? null);
            yield "</li>
                                                ";
        }
        // line 587
        yield "                                                <li>";
        yield ($context["text_stock"] ?? null);
        yield " ";
        yield ($context["stock"] ?? null);
        yield "</li>
                                             </ul>
                                             ";
        // line 589
        if (($context["review_status"] ?? null)) {
            // line 590
            yield "                                             <div class=\"rating\">
                                                <p>
                                                   ";
            // line 592
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 593
                yield "                                                   ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 594
                    yield "                                                   <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                                                   ";
                } else {
                    // line 596
                    yield "                                                   <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                                                   ";
                }
                // line 598
                yield "                                                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 599
            yield "                                                   <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_reviews"] ?? null);
            yield "</a> / <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_write"] ?? null);
            yield "</a>
                                                </p>
                                             </div>
                                             ";
        }
        // line 603
        yield "                                             ";
        if (($context["price"] ?? null)) {
            // line 604
            yield "                                             <ul class=\"list-unstyled\">
                                                ";
            // line 605
            if ( !($context["special"] ?? null)) {
                // line 606
                yield "                                                <li>
                                                   <h2><span class=\"price-new\">";
                // line 607
                yield ($context["price"] ?? null);
                yield "</span></h2>
                                                </li>
                                                ";
            } else {
                // line 610
                yield "                                                <li><span class=\"price-old\">";
                yield ($context["price"] ?? null);
                yield "</span></li>
                                                <li>
                                                   <h2><span class=\"price-new\">";
                // line 612
                yield ($context["special"] ?? null);
                yield "</span></h2>
                                                </li>
                                                ";
            }
            // line 615
            yield "                                                ";
            if (($context["tax"] ?? null)) {
                // line 616
                yield "                                                <li>";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</li>
                                                ";
            }
            // line 618
            yield "                                                ";
            if (($context["points"] ?? null)) {
                // line 619
                yield "                                                <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
                                                ";
            }
            // line 621
            yield "                                                ";
            if (($context["discounts"] ?? null)) {
                // line 622
                yield "                                                <li>
                                                   <hr>
                                                </li>
                                                ";
                // line 625
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 626
                    yield "                                                <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 626);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 626);
                    yield "</li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 628
                yield "                                                ";
            }
            // line 629
            yield "                                             </ul>
                                             ";
        }
        // line 631
        yield "                                             <form method=\"post\" data-oc-toggle=\"ajax\">
                                                <div class=\"btn-group\">
                                                   ";
        // line 633
        if ( !($context["logged"] ?? null)) {
            // line 634
            yield "                                                   <button  class=\"btn btn-light btn-lg offline-wishlist\" title=\"";
            yield ($context["button_wishlist"] ?? null);
            yield "\">wishlist off</button>
                                                   ";
        } else {
            // line 636
            yield "                                                   <button type=\"submit\" formaction=\"";
            yield ($context["wishlist_add"] ?? null);
            yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
            yield ($context["button_wishlist"] ?? null);
            yield "\">wishlist</button>
                                                   ";
        }
        // line 638
        yield "                                                   <button type=\"submit\" formaction=\"";
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
                                                </div>
                                                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 640
        yield ($context["product_id"] ?? null);
        yield "\"/>
                                             </form>
                                             <br/>
                                             
                                          </div>
                                       </div>
                                       <ul class=\"nav nav-tabs\">
                                          <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 647
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
                                          ";
        // line 648
        if (($context["attribute_groups"] ?? null)) {
            // line 649
            yield "                                          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_attribute"] ?? null);
            yield "</a></li>
                                          ";
        }
        // line 651
        yield "                                          ";
        if (($context["review_status"] ?? null)) {
            // line 652
            yield "                                          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_review"] ?? null);
            yield "</a></li>
                                          ";
        }
        // line 654
        yield "                                       </ul>
                                       <div class=\"tab-content\">
                                          <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">
                                             ";
        // line 657
        yield ($context["description"] ?? null);
        yield "
                                             ";
        // line 658
        if (($context["tags"] ?? null)) {
            // line 659
            yield "                                             <p>";
            yield ($context["text_tags"] ?? null);
            yield "
                                                ";
            // line 660
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 661
                yield "                                                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 661);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 661);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 661)) {
                    yield ",";
                }
                // line 662
                yield "                                                ";
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
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 663
            yield "                                             </p>
                                             ";
        }
        // line 665
        yield "                                          </div>
                                          ";
        // line 666
        if (($context["attribute_groups"] ?? null)) {
            // line 667
            yield "                                          <div id=\"tab-specification\" class=\"tab-pane fade\">
                                             <div class=\"table-responsive\">
                                                <table class=\"table table-bordered\">
                                                   ";
            // line 670
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 671
                yield "                                                   <thead>
                                                      <tr>
                                                         <td colspan=\"2\"><strong>";
                // line 673
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 673);
                yield "</strong></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      ";
                // line 677
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 677));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 678
                    yield "                                                      <tr>
                                                         <td>";
                    // line 679
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 679);
                    yield "</td>
                                                         <td>";
                    // line 680
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 680);
                    yield "</td>
                                                      </tr>
                                                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 683
                yield "                                                   </tbody>
                                                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 685
            yield "                                                </table>
                                             </div>
                                          </div>
                                          ";
        }
        // line 689
        yield "                                          ";
        if (($context["review_status"] ?? null)) {
            // line 690
            yield "                                          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            yield ($context["review"] ?? null);
            yield "</div>
                                          ";
        }
        // line 692
        yield "                                       </div>
                                       ";
        // line 693
        yield ($context["related"] ?? null);
        yield "
                                       ";
        // line 694
        yield ($context["content_bottom"] ?? null);
        yield "
                                    </div>
                                    ";
        // line 696
        yield ($context["column_right"] ?? null);
        yield "
                                 </div>
                              </div>
                              images/section/recent-1.jpg\" src=\"assets/images/section/recent-1.jpg\" alt=\"\">
                           </div>
                           <div>
                              <div class=\"user\">
                                 <div class=\"flex-grow-1\">
                                    <h4 class=\"name\">
                                       <a href=\"#\" class=\"link\">Esther Howard</a>
                                    </h4>
                                    <div class=\"user-infor\">
                                       <div class=\"color\">Color: Black</div>
                                       <div class=\"line\"></div>
                                       <div class=\"verified-purchase\">
                                          <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"
                                             xmlns=\"http://www.w3.org/2000/svg\">
                                             <path
                                                d=\"M17.6453 8.03281C17.3508 7.725 17.0461 7.40781 16.9312 7.12891C16.825 6.87344 16.8187 6.45 16.8125 6.03984C16.8008 5.27734 16.7883 4.41328 16.1875 3.8125C15.5867 3.21172 14.7227 3.19922 13.9602 3.1875C13.55 3.18125 13.1266 3.175 12.8711 3.06875C12.593 2.95391 12.275 2.64922 11.9672 2.35469C11.4281 1.83672 10.8156 1.25 10 1.25C9.18437 1.25 8.57266 1.83672 8.03281 2.35469C7.725 2.64922 7.40781 2.95391 7.12891 3.06875C6.875 3.175 6.45 3.18125 6.03984 3.1875C5.27734 3.19922 4.41328 3.21172 3.8125 3.8125C3.21172 4.41328 3.20312 5.27734 3.1875 6.03984C3.18125 6.45 3.175 6.87344 3.06875 7.12891C2.95391 7.40703 2.64922 7.725 2.35469 8.03281C1.83672 8.57188 1.25 9.18437 1.25 10C1.25 10.8156 1.83672 11.4273 2.35469 11.9672C2.64922 12.275 2.95391 12.5922 3.06875 12.8711C3.175 13.1266 3.18125 13.55 3.1875 13.9602C3.19922 14.7227 3.21172 15.5867 3.8125 16.1875C4.41328 16.7883 5.27734 16.8008 6.03984 16.8125C6.45 16.8187 6.87344 16.825 7.12891 16.9312C7.40703 17.0461 7.725 17.3508 8.03281 17.6453C8.57188 18.1633 9.18437 18.75 10 18.75C10.8156 18.75 11.4273 18.1633 11.9672 17.6453C12.275 17.3508 12.5922 17.0461 12.8711 16.9312C13.1266 16.825 13.55 16.8187 13.9602 16.8125C14.7227 16.8008 15.5867 16.7883 16.1875 16.1875C16.7883 15.5867 16.8008 14.7227 16.8125 13.9602C16.8187 13.55 16.825 13.1266 16.9312 12.8711C17.0461 12.593 17.3508 12.275 17.6453 11.9672C18.1633 11.4281 18.75 10.8156 18.75 10C18.75 9.18437 18.1633 8.57266 17.6453 8.03281ZM16.743 11.1023C16.3687 11.493 15.9812 11.8969 15.7758 12.393C15.5789 12.8695 15.5703 13.4141 15.5625 13.9414C15.5547 14.4883 15.5461 15.0609 15.3031 15.3031C15.0602 15.5453 14.4914 15.5547 13.9414 15.5625C13.4141 15.5703 12.8695 15.5789 12.393 15.7758C11.8969 15.9812 11.493 16.3687 11.1023 16.743C10.7117 17.1172 10.3125 17.5 10 17.5C9.6875 17.5 9.28516 17.1156 8.89766 16.743C8.51016 16.3703 8.10313 15.9812 7.60703 15.7758C7.13047 15.5789 6.58594 15.5703 6.05859 15.5625C5.51172 15.5547 4.93906 15.5461 4.69687 15.3031C4.45469 15.0602 4.44531 14.4914 4.4375 13.9414C4.42969 13.4141 4.42109 12.8695 4.22422 12.393C4.01875 11.8969 3.63125 11.493 3.25703 11.1023C2.88281 10.7117 2.5 10.3125 2.5 10C2.5 9.6875 2.88437 9.28516 3.25703 8.89766C3.62969 8.51016 4.01875 8.10313 4.22422 7.60703C4.42109 7.13047 4.42969 6.58594 4.4375 6.05859C4.44531 5.51172 4.45391 4.93906 4.69687 4.69687C4.93984 4.45469 5.50859 4.44531 6.05859 4.4375C6.58594 4.42969 7.13047 4.42109 7.60703 4.22422C8.10313 4.01875 8.50703 3.63125 8.89766 3.25703C9.28828 2.88281 9.6875 2.5 10 2.5C10.3125 2.5 10.7148 2.88437 11.1023 3.25703C11.4898 3.62969 11.8969 4.01875 12.393 4.22422C12.8695 4.42109 13.4141 4.42969 13.9414 4.4375C14.4883 4.44531 15.0609 4.45391 15.3031 4.69687C15.5453 4.93984 15.5547 5.50859 15.5625 6.05859C15.5703 6.58594 15.5789 7.13047 15.7758 7.60703C15.9812 8.10313 16.3687 8.50703 16.743 8.89766C17.1172 9.28828 17.5 9.6875 17.5 10C17.5 10.3125 17.1156 10.7148 16.743 11.1023ZM13.5672 7.68281C13.6253 7.74086 13.6714 7.80979 13.7029 7.88566C13.7343 7.96154 13.7505 8.04287 13.7505 8.125C13.7505 8.20713 13.7343 8.28846 13.7029 8.36434C13.6714 8.44021 13.6253 8.50914 13.5672 8.56719L9.19219 12.9422C9.13414 13.0003 9.06521 13.0464 8.98934 13.0779C8.91346 13.1093 8.83213 13.1255 8.75 13.1255C8.66787 13.1255 8.58654 13.1093 8.51066 13.0779C8.43479 13.0464 8.36586 13.0003 8.30781 12.9422L6.43281 11.0672C6.31554 10.9499 6.24965 10.7909 6.24965 10.625C6.24965 10.4591 6.31554 10.3001 6.43281 10.1828C6.55009 10.0655 6.70915 9.99965 6.875 9.99965C7.04085 9.99965 7.19991 10.0655 7.31719 10.1828L8.75 11.6164L12.6828 7.68281C12.7409 7.6247 12.8098 7.5786 12.8857 7.54715C12.9615 7.5157 13.0429 7.49951 13.125 7.49951C13.2071 7.49951 13.2885 7.5157 13.3643 7.54715C13.4402 7.5786 13.5091 7.6247 13.5672 7.68281Z\"
                                                fill=\"black\" />
                                          </svg>
                                          <div class=\"text\">Verified Purchase</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"list-star d-flex justify-content-center gap-4\">
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                 </div>
                              </div>
                              <p class=\"h6 desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id massa in sapien
                                 ornare tristique vel vitae augue. Donec dictum sem semper, posuere leo eu, tempus ex. Morbi id
                                 ipsum urna. Duis elementum, nibh ut rutrum pellentesque, tortor nisi fermentum nulla, ut fringilla
                                 enim magna sed nunc. Nulla fringilla non purus vestibulum porta.
                              </p>
                              <div class=\"text-small time text-main-2\">April 3, 2020 at 10:43</div>
                           </div>
                        </div>
                        <div class=\"reply-comment-item\">
                           <div class=\"image\">
                              <img class=\"lazyload\" data-src=\"assets/images/section/recent-2.jpg\" src=\"assets/images/section/recent-2.jpg\" alt=\"\">
                           </div>
                           <div>
                              <div class=\"user\">
                                 <div class=\"flex-grow-1\">
                                    <h4 class=\"name\">
                                       <a href=\"#\" class=\"link\">Eleanor Pena</a>
                                    </h4>
                                    <div class=\"user-infor\">
                                       <div class=\"color\">Color: Black</div>
                                       <div class=\"line\"></div>
                                       <div class=\"verified-purchase\">
                                          <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"
                                             xmlns=\"http://www.w3.org/2000/svg\">
                                             <path
                                                d=\"M17.6453 8.03281C17.3508 7.725 17.0461 7.40781 16.9312 7.12891C16.825 6.87344 16.8187 6.45 16.8125 6.03984C16.8008 5.27734 16.7883 4.41328 16.1875 3.8125C15.5867 3.21172 14.7227 3.19922 13.9602 3.1875C13.55 3.18125 13.1266 3.175 12.8711 3.06875C12.593 2.95391 12.275 2.64922 11.9672 2.35469C11.4281 1.83672 10.8156 1.25 10 1.25C9.18437 1.25 8.57266 1.83672 8.03281 2.35469C7.725 2.64922 7.40781 2.95391 7.12891 3.06875C6.875 3.175 6.45 3.18125 6.03984 3.1875C5.27734 3.19922 4.41328 3.21172 3.8125 3.8125C3.21172 4.41328 3.20312 5.27734 3.1875 6.03984C3.18125 6.45 3.175 6.87344 3.06875 7.12891C2.95391 7.40703 2.64922 7.725 2.35469 8.03281C1.83672 8.57188 1.25 9.18437 1.25 10C1.25 10.8156 1.83672 11.4273 2.35469 11.9672C2.64922 12.275 2.95391 12.5922 3.06875 12.8711C3.175 13.1266 3.18125 13.55 3.1875 13.9602C3.19922 14.7227 3.21172 15.5867 3.8125 16.1875C4.41328 16.7883 5.27734 16.8008 6.03984 16.8125C6.45 16.8187 6.87344 16.825 7.12891 16.9312C7.40703 17.0461 7.725 17.3508 8.03281 17.6453C8.57188 18.1633 9.18437 18.75 10 18.75C10.8156 18.75 11.4273 18.1633 11.9672 17.6453C12.275 17.3508 12.5922 17.0461 12.8711 16.9312C13.1266 16.825 13.55 16.8187 13.9602 16.8125C14.7227 16.8008 15.5867 16.7883 16.1875 16.1875C16.7883 15.5867 16.8008 14.7227 16.8125 13.9602C16.8187 13.55 16.825 13.1266 16.9312 12.8711C17.0461 12.593 17.3508 12.275 17.6453 11.9672C18.1633 11.4281 18.75 10.8156 18.75 10C18.75 9.18437 18.1633 8.57266 17.6453 8.03281ZM16.743 11.1023C16.3687 11.493 15.9812 11.8969 15.7758 12.393C15.5789 12.8695 15.5703 13.4141 15.5625 13.9414C15.5547 14.4883 15.5461 15.0609 15.3031 15.3031C15.0602 15.5453 14.4914 15.5547 13.9414 15.5625C13.4141 15.5703 12.8695 15.5789 12.393 15.7758C11.8969 15.9812 11.493 16.3687 11.1023 16.743C10.7117 17.1172 10.3125 17.5 10 17.5C9.6875 17.5 9.28516 17.1156 8.89766 16.743C8.51016 16.3703 8.10313 15.9812 7.60703 15.7758C7.13047 15.5789 6.58594 15.5703 6.05859 15.5625C5.51172 15.5547 4.93906 15.5461 4.69687 15.3031C4.45469 15.0602 4.44531 14.4914 4.4375 13.9414C4.42969 13.4141 4.42109 12.8695 4.22422 12.393C4.01875 11.8969 3.63125 11.493 3.25703 11.1023C2.88281 10.7117 2.5 10.3125 2.5 10C2.5 9.6875 2.88437 9.28516 3.25703 8.89766C3.62969 8.51016 4.01875 8.10313 4.22422 7.60703C4.42109 7.13047 4.42969 6.58594 4.4375 6.05859C4.44531 5.51172 4.45391 4.93906 4.69687 4.69687C4.93984 4.45469 5.50859 4.44531 6.05859 4.4375C6.58594 4.42969 7.13047 4.42109 7.60703 4.22422C8.10313 4.01875 8.50703 3.63125 8.89766 3.25703C9.28828 2.88281 9.6875 2.5 10 2.5C10.3125 2.5 10.7148 2.88437 11.1023 3.25703C11.4898 3.62969 11.8969 4.01875 12.393 4.22422C12.8695 4.42109 13.4141 4.42969 13.9414 4.4375C14.4883 4.44531 15.0609 4.45391 15.3031 4.69687C15.5453 4.93984 15.5547 5.50859 15.5625 6.05859C15.5703 6.58594 15.5789 7.13047 15.7758 7.60703C15.9812 8.10313 16.3687 8.50703 16.743 8.89766C17.1172 9.28828 17.5 9.6875 17.5 10C17.5 10.3125 17.1156 10.7148 16.743 11.1023ZM13.5672 7.68281C13.6253 7.74086 13.6714 7.80979 13.7029 7.88566C13.7343 7.96154 13.7505 8.04287 13.7505 8.125C13.7505 8.20713 13.7343 8.28846 13.7029 8.36434C13.6714 8.44021 13.6253 8.50914 13.5672 8.56719L9.19219 12.9422C9.13414 13.0003 9.06521 13.0464 8.98934 13.0779C8.91346 13.1093 8.83213 13.1255 8.75 13.1255C8.66787 13.1255 8.58654 13.1093 8.51066 13.0779C8.43479 13.0464 8.36586 13.0003 8.30781 12.9422L6.43281 11.0672C6.31554 10.9499 6.24965 10.7909 6.24965 10.625C6.24965 10.4591 6.31554 10.3001 6.43281 10.1828C6.55009 10.0655 6.70915 9.99965 6.875 9.99965C7.04085 9.99965 7.19991 10.0655 7.31719 10.1828L8.75 11.6164L12.6828 7.68281C12.7409 7.6247 12.8098 7.5786 12.8857 7.54715C12.9615 7.5157 13.0429 7.49951 13.125 7.49951C13.2071 7.49951 13.2885 7.5157 13.3643 7.54715C13.4402 7.5786 13.5091 7.6247 13.5672 7.68281Z\"
                                                fill=\"black\" />
                                          </svg>
                                          <div class=\"text\">Verified Purchase</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"list-star d-flex justify-content-center gap-4\">
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                 </div>
                              </div>
                              <p class=\"h6 desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id massa in sapien
                                 ornare tristique vel vitae augue. Donec dictum sem semper, posuere leo eu, tempus ex. Morbi id
                                 ipsum urna. Duis elementum, nibh ut rutrum pellentesque, tortor nisi fermentum nulla, ut fringilla
                                 enim magna sed nunc. Nulla fringilla non purus vestibulum porta.
                              </p>
                              <div class=\"text-small time text-main-2\">April 3, 2020 at 10:43</div>
                           </div>
                        </div>
                        <div class=\"reply-comment-item\">
                           <div class=\"image\">
                              <img class=\"lazyload\" data-src=\"assets/images/section/recent-1.jpg\" src=\"assets/images/section/recent-1.jpg\" alt=\"\">
                           </div>
                           <div>
                              <div class=\"user\">
                                 <div class=\"flex-grow-1\">
                                    <h4 class=\"name\">
                                       <a href=\"#\" class=\"link\">Cody Fisher</a>
                                    </h4>
                                    <div class=\"user-infor\">
                                       <div class=\"color\">Color: Black</div>
                                       <div class=\"line\"></div>
                                       <div class=\"verified-purchase\">
                                          <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"
                                             xmlns=\"http://www.w3.org/2000/svg\">
                                             <path
                                                d=\"M17.6453 8.03281C17.3508 7.725 17.0461 7.40781 16.9312 7.12891C16.825 6.87344 16.8187 6.45 16.8125 6.03984C16.8008 5.27734 16.7883 4.41328 16.1875 3.8125C15.5867 3.21172 14.7227 3.19922 13.9602 3.1875C13.55 3.18125 13.1266 3.175 12.8711 3.06875C12.593 2.95391 12.275 2.64922 11.9672 2.35469C11.4281 1.83672 10.8156 1.25 10 1.25C9.18437 1.25 8.57266 1.83672 8.03281 2.35469C7.725 2.64922 7.40781 2.95391 7.12891 3.06875C6.875 3.175 6.45 3.18125 6.03984 3.1875C5.27734 3.19922 4.41328 3.21172 3.8125 3.8125C3.21172 4.41328 3.20312 5.27734 3.1875 6.03984C3.18125 6.45 3.175 6.87344 3.06875 7.12891C2.95391 7.40703 2.64922 7.725 2.35469 8.03281C1.83672 8.57188 1.25 9.18437 1.25 10C1.25 10.8156 1.83672 11.4273 2.35469 11.9672C2.64922 12.275 2.95391 12.5922 3.06875 12.8711C3.175 13.1266 3.18125 13.55 3.1875 13.9602C3.19922 14.7227 3.21172 15.5867 3.8125 16.1875C4.41328 16.7883 5.27734 16.8008 6.03984 16.8125C6.45 16.8187 6.87344 16.825 7.12891 16.9312C7.40703 17.0461 7.725 17.3508 8.03281 17.6453C8.57188 18.1633 9.18437 18.75 10 18.75C10.8156 18.75 11.4273 18.1633 11.9672 17.6453C12.275 17.3508 12.5922 17.0461 12.8711 16.9312C13.1266 16.825 13.55 16.8187 13.9602 16.8125C14.7227 16.8008 15.5867 16.7883 16.1875 16.1875C16.7883 15.5867 16.8008 14.7227 16.8125 13.9602C16.8187 13.55 16.825 13.1266 16.9312 12.8711C17.0461 12.593 17.3508 12.275 17.6453 11.9672C18.1633 11.4281 18.75 10.8156 18.75 10C18.75 9.18437 18.1633 8.57266 17.6453 8.03281ZM16.743 11.1023C16.3687 11.493 15.9812 11.8969 15.7758 12.393C15.5789 12.8695 15.5703 13.4141 15.5625 13.9414C15.5547 14.4883 15.5461 15.0609 15.3031 15.3031C15.0602 15.5453 14.4914 15.5547 13.9414 15.5625C13.4141 15.5703 12.8695 15.5789 12.393 15.7758C11.8969 15.9812 11.493 16.3687 11.1023 16.743C10.7117 17.1172 10.3125 17.5 10 17.5C9.6875 17.5 9.28516 17.1156 8.89766 16.743C8.51016 16.3703 8.10313 15.9812 7.60703 15.7758C7.13047 15.5789 6.58594 15.5703 6.05859 15.5625C5.51172 15.5547 4.93906 15.5461 4.69687 15.3031C4.45469 15.0602 4.44531 14.4914 4.4375 13.9414C4.42969 13.4141 4.42109 12.8695 4.22422 12.393C4.01875 11.8969 3.63125 11.493 3.25703 11.1023C2.88281 10.7117 2.5 10.3125 2.5 10C2.5 9.6875 2.88437 9.28516 3.25703 8.89766C3.62969 8.51016 4.01875 8.10313 4.22422 7.60703C4.42109 7.13047 4.42969 6.58594 4.4375 6.05859C4.44531 5.51172 4.45391 4.93906 4.69687 4.69687C4.93984 4.45469 5.50859 4.44531 6.05859 4.4375C6.58594 4.42969 7.13047 4.42109 7.60703 4.22422C8.10313 4.01875 8.50703 3.63125 8.89766 3.25703C9.28828 2.88281 9.6875 2.5 10 2.5C10.3125 2.5 10.7148 2.88437 11.1023 3.25703C11.4898 3.62969 11.8969 4.01875 12.393 4.22422C12.8695 4.42109 13.4141 4.42969 13.9414 4.4375C14.4883 4.44531 15.0609 4.45391 15.3031 4.69687C15.5453 4.93984 15.5547 5.50859 15.5625 6.05859C15.5703 6.58594 15.5789 7.13047 15.7758 7.60703C15.9812 8.10313 16.3687 8.50703 16.743 8.89766C17.1172 9.28828 17.5 9.6875 17.5 10C17.5 10.3125 17.1156 10.7148 16.743 11.1023ZM13.5672 7.68281C13.6253 7.74086 13.6714 7.80979 13.7029 7.88566C13.7343 7.96154 13.7505 8.04287 13.7505 8.125C13.7505 8.20713 13.7343 8.28846 13.7029 8.36434C13.6714 8.44021 13.6253 8.50914 13.5672 8.56719L9.19219 12.9422C9.13414 13.0003 9.06521 13.0464 8.98934 13.0779C8.91346 13.1093 8.83213 13.1255 8.75 13.1255C8.66787 13.1255 8.58654 13.1093 8.51066 13.0779C8.43479 13.0464 8.36586 13.0003 8.30781 12.9422L6.43281 11.0672C6.31554 10.9499 6.24965 10.7909 6.24965 10.625C6.24965 10.4591 6.31554 10.3001 6.43281 10.1828C6.55009 10.0655 6.70915 9.99965 6.875 9.99965C7.04085 9.99965 7.19991 10.0655 7.31719 10.1828L8.75 11.6164L12.6828 7.68281C12.7409 7.6247 12.8098 7.5786 12.8857 7.54715C12.9615 7.5157 13.0429 7.49951 13.125 7.49951C13.2071 7.49951 13.2885 7.5157 13.3643 7.54715C13.4402 7.5786 13.5091 7.6247 13.5672 7.68281Z\"
                                                fill=\"black\" />
                                          </svg>
                                          <div class=\"text\">Verified Purchase</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"list-star d-flex justify-content-center gap-4\">
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                 </div>
                              </div>
                              <p class=\"h6 desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id massa in sapien
                                 ornare tristique vel vitae augue. Donec dictum sem semper, posuere leo eu, tempus ex. Morbi id
                                 ipsum urna. Duis elementum, nibh ut rutrum pellentesque, tortor nisi fermentum nulla, ut fringilla
                                 enim magna sed nunc. Nulla fringilla non purus vestibulum porta.
                              </p>
                              <div class=\"text-small time text-main-2\">April 3, 2020 at 10:43</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <form class=\"form-write-review write-review-wrap\">
                     <div class=\"heading h2 fw-4 text-black\">Write a review:</div>
                     <div class=\"text h6 fw-4\">All of your information will be kept confidential. Required fields are marked with an
                        asterisk (*)
                     </div>
                     <div class=\"your-rating\">
                        <div class=\"h4 fw-4 text-black\">Your rating:</div>
                        <div class=\"list-rating-check\">
                           <input type=\"radio\" id=\"star5\" name=\"rate\" value=\"5\">
                           <label for=\"star5\" title=\"text\"></label>
                           <input type=\"radio\" id=\"star4\" name=\"rate\" value=\"4\">
                           <label for=\"star4\" title=\"text\"></label>
                           <input type=\"radio\" id=\"star3\" name=\"rate\" value=\"3\">
                           <label for=\"star3\" title=\"text\"></label>
                           <input type=\"radio\" id=\"star2\" name=\"rate\" value=\"2\">
                           <label for=\"star2\" title=\"text\"></label>
                           <input type=\"radio\" id=\"star1\" name=\"rate\" value=\"1\">
                           <label for=\"star1\" title=\"text\"></label>
                        </div>
                     </div>
                     <div class=\"form-content\">
                        <fieldset class=\"box-field\">
                           <input type=\"text\" placeholder=\"Review title\" name=\"text\" tabindex=\"2\" value=\"\" aria-required=\"true\"
                              required=\"\">
                        </fieldset>
                        <fieldset class=\"box-field\">
                           <textarea rows=\"4\" placeholder=\"Review\" tabindex=\"2\" aria-required=\"true\" required=\"\"></textarea>
                        </fieldset>
                        <div class=\"box-field group-2\">
                           <fieldset>
                              <input type=\"text\" placeholder=\"Your name\" name=\"text\" tabindex=\"2\" value=\"\" aria-required=\"true\"
                                 required=\"\">
                           </fieldset>
                           <fieldset>
                              <input type=\"email\" placeholder=\"Your email\" name=\"email\" tabindex=\"2\" value=\"\" aria-required=\"true\"
                                 required=\"\">
                           </fieldset>
                        </div>
                     </div>
                     <div class=\"button-submit\">
                        <button class=\"tf-btn btn-fill animate-btn h6 w-100\" type=\"submit\">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /Product Description -->
<!-- Box Icon -->
<section>
   <div class=\"container\">
      <div class=\"sect-border\">
         <div class=\"s-head\">
            <h3 class=\" s-title fw-normal\">Ethical Jewelry</h3>
         </div>
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
                     </div>
                  </div>
               </div>
               <!-- item 2 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-calender\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Ethically sourced</h4>
                        <p class=\"text\">Manufacturer's defect</p>
                     </div>
                  </div>
               </div>
               <!-- item 3 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-boat\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Free shipping</h4>
                        <p class=\"text\">Free Shipping for orders over \$150</p>
                     </div>
                  </div>
               </div>
               <!-- item 4 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-headset\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">In-house Design</h4>
                        <p class=\"text\">24 hours a day, 7 days a week</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"sw-dot-default tf-sw-pagination\"></div>
         </div>
      </div>
   </div>
</section>
<!-- /Box Icon -->
<!-- Also Like -->
<section class=\"flat-spacing-3\">
   <div class=\"container\">
      <h1 class=\"sect-title text-center\">You May Also Like</h1>
      ";
        // line 1013
        yield ($context["related"] ?? null);
        yield "
   </div>
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
                        </li>
                     </ul>
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Seamless breathable thong</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$99,99</span>
                        <span class=\"price-new h6\">\$69,99</span>
                     </div>
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
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
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
                   
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Cotton high waisted panties</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\"> \$89,99</span>
                        <span class=\"price-new h6\">\$59,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-4.jpg\"
                              data-src=\"assets/images/products/underwear/product-4.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Dark</span>
                           <span class=\"swatch-value bg-dark-charcoal\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-6.jpg\"
                              data-src=\"assets/images/products/underwear/product-6.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-7.jpg\"
                              data-src=\"assets/images/products/underwear/product-7.jpg\" alt=\"Product\">
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
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
                        </ul>
                     </div>
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
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Sexy lace panties</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$79,99</span>
                        <span class=\"price-new h6\">\$49,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Dusty Olive</span>
                           <span class=\"swatch-value bg-dusty-olive\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-8.jpg\"
                              data-src=\"assets/images/products/underwear/product-8.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Light Orange</span>
                           <span class=\"swatch-value bg-tomato\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-10.jpg\"
                              data-src=\"assets/images/products/underwear/product-10.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-11.jpg\"
                              data-src=\"assets/images/products/underwear/product-11.jpg\" alt=\"Product\">
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
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
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Seamless underwear</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$109,99</span>
                        <span class=\"price-new h6\">\$74,99</span>
                     </div>
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
                  </div>
               </div>
            </div>
         </div>
         <div class=\"sw-dot-default tf-sw-pagination\"></div>
      </div>
   </div>
</section>


<!-- /Related -->
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
<script>
\$(document).ready(function() {
console.log('ready');
   \$(document).on('click', '.size-btn', function() {
       var size = \$(this).data('size');
       \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(size);
       \$(this).siblings().removeClass('active');
       \$(this).addClass('active');
   });

   \$(document).on('click', '.color', function() {
       var color = \$(this).data('color');
       \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(color);
       \$(this).siblings().removeClass('active');
       \$(this).addClass('active');
   });

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
               console.log(json);
           },
           error: function(xhr, ajaxOptions, thrownError) {
               console.log(thrownError + \"\\n\" + xhr.statusText + \"\\n\" + xhr.responseText);
           }
       });
   });

});
</script>
";
        // line 1323
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
        return array (  2034 => 1323,  1721 => 1013,  1401 => 696,  1396 => 694,  1392 => 693,  1389 => 692,  1383 => 690,  1380 => 689,  1374 => 685,  1367 => 683,  1358 => 680,  1354 => 679,  1351 => 678,  1347 => 677,  1340 => 673,  1336 => 671,  1332 => 670,  1327 => 667,  1325 => 666,  1322 => 665,  1318 => 663,  1304 => 662,  1295 => 661,  1278 => 660,  1273 => 659,  1271 => 658,  1267 => 657,  1262 => 654,  1256 => 652,  1253 => 651,  1247 => 649,  1245 => 648,  1241 => 647,  1231 => 640,  1223 => 638,  1215 => 636,  1209 => 634,  1207 => 633,  1203 => 631,  1199 => 629,  1196 => 628,  1185 => 626,  1181 => 625,  1176 => 622,  1173 => 621,  1165 => 619,  1162 => 618,  1154 => 616,  1151 => 615,  1145 => 612,  1139 => 610,  1133 => 607,  1130 => 606,  1128 => 605,  1125 => 604,  1122 => 603,  1112 => 599,  1106 => 598,  1102 => 596,  1098 => 594,  1095 => 593,  1091 => 592,  1087 => 590,  1085 => 589,  1077 => 587,  1069 => 585,  1066 => 584,  1055 => 582,  1051 => 581,  1044 => 580,  1034 => 578,  1032 => 577,  1027 => 575,  1024 => 574,  1019 => 571,  1015 => 569,  998 => 567,  994 => 566,  991 => 565,  988 => 564,  974 => 562,  972 => 561,  968 => 559,  966 => 558,  961 => 556,  956 => 554,  765 => 366,  729 => 335,  719 => 328,  711 => 322,  708 => 321,  702 => 320,  696 => 316,  673 => 314,  656 => 313,  652 => 312,  647 => 310,  644 => 309,  641 => 308,  636 => 307,  634 => 306,  624 => 299,  613 => 291,  606 => 287,  602 => 286,  520 => 209,  508 => 200,  495 => 189,  481 => 188,  469 => 186,  467 => 185,  456 => 184,  453 => 183,  436 => 182,  428 => 177,  424 => 176,  418 => 173,  414 => 171,  410 => 169,  404 => 168,  399 => 165,  385 => 164,  373 => 162,  371 => 161,  360 => 160,  357 => 159,  340 => 158,  332 => 153,  327 => 151,  320 => 148,  317 => 147,  313 => 146,  310 => 145,  308 => 144,  300 => 139,  290 => 132,  283 => 128,  279 => 126,  276 => 125,  270 => 124,  267 => 123,  257 => 121,  255 => 120,  246 => 119,  243 => 118,  240 => 117,  235 => 116,  233 => 115,  229 => 114,  217 => 104,  215 => 101,  212 => 97,  202 => 93,  198 => 92,  194 => 91,  190 => 90,  184 => 87,  181 => 86,  177 => 85,  170 => 80,  160 => 76,  156 => 75,  152 => 74,  147 => 71,  143 => 70,  138 => 67,  135 => 66,  132 => 65,  129 => 64,  126 => 63,  123 => 62,  120 => 61,  117 => 60,  99 => 43,  88 => 41,  84 => 40,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<style>
   .size-btn {
      padding: 10px;
      width: 100%;
      height: 100%;
      border-radius: 15px !important;
      border: 1px solid #000;
   }
   .size-btn.active {
      background-color: #000;
      color: #fff;
      border: 1px solid #000 !important;
   }
   .color {
      padding: 10px;
      width: 100%;
      height: 100%;
      border-radius: 15px !important;
      border: 1px solid #000;
   }
   .color.active {
      background-color: #000;
      color: #fff;
      border: 1px solid #000 !important;
   }
   @media (max-width: 768px) {
          .tf-sticky-btn-atc .title, .tf-sticky-btn-atc .tf-sticky-atc-product {
        display: block !important;
    }
   }
</style>

<!-- Page Title -->
<section class=\"s-page-title style-2\" style=\"padding-top:100px;\">
   <div class=\"container\">
      <div class=\"content\" style=\"padding-bottom: 19px;\">
         <ul class=\"breadcrumbs-page\">
            {% for breadcrumb in breadcrumbs %}
            <li class=\"breadcrumb-item\" style=\"display:flex;\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
            {% endfor %}
         </ul>
      </div>
   </div>
</section>
<!-- /Page Title -->
<!-- Product Main -->
<section class=\"flat-single-product flat-spacing-3\">
   <div class=\"tf-main-product section-image-zoom\">
      <div class=\"container\">
         <div class=\"row\">

         

            <!-- Product Images -->
            <div class=\"col-md-6\">
               <div class=\"tf-product-media-wrap sticky-top\">
                  {# Build a single list: first main image, then additional images #}
                  {% set all_images = [] %}
                  {% if thumb %}
                  {% set all_images = all_images|merge([{'thumb': thumb, 'popup': popup}]) %}
                  {% endif %}
                  {% if images %}
                  {% set all_images = all_images|merge(images) %}
                  {% endif %}
                  <div class=\"product-thumbs-slider\">
                     <div dir=\"ltr\" class=\"swiper tf-product-media-thumbs other-image-zoom\" data-direction=\"vertical\" data-preview=\"4.7\">
                        <div class=\"swiper-wrapper stagger-wrap\">
                           {% for img in all_images %}
                           <div class=\"swiper-slide stagger-item\" data-size=\"M\" data-color=\"gray\">
                              <div class=\"item\">
                                 <img class=\"lazyload\"
                                    data-src=\"{{ img.thumb }}\"
                                    src=\"{{ img.thumb }}\"
                                    alt=\"{{ heading_title }}\">
                              </div>
                           </div>
                           {% endfor %}
                        </div>
                     </div>
                     <div class=\"flat-wrap-media-product\">
                        <div dir=\"ltr\" class=\"swiper tf-product-media-main\" id=\"gallery-swiper-started\">
                           <div class=\"swiper-wrapper\">
                              {% for img in all_images %}
                              <div class=\"swiper-slide\" data-size=\"M\" data-color=\"gray\">
                                 <a href=\"{{ img.popup }}\" target=\"_blank\" class=\"item\"
                                    data-pswp-width=\"860px\" data-pswp-height=\"1146px\">
                                 <img class=\"tf-image-zoom lazyload\"
                                    data-zoom=\"{{ img.popup }}\"
                                    data-src=\"{{ img.thumb }}\"
                                    src=\"{{ img.thumb }}\"
                                    alt=\"{{ heading_title }}\">
                                 </a>
                              </div>
                              {% endfor %}
                           </div>
                           {# 
                           <div class=\"swiper-button-next button-style-arrow thumbs-next\"></div>
                           #}
                           {# 
                           <div class=\"swiper-button-prev button-style-arrow thumbs-prev\"></div>
                           #}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /Product Images -->
            <!-- Product Info -->
            <div class=\"col-md-6\">
               <div class=\"tf-product-info-wrap position-relative\">
                  <form id=\"form-product\">
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

\t\t\t\t\t\t\t\t<div class=\"tf-product-heading mt-2\">
\t\t\t\t\t\t\t\t\t<div class=\"product-info-price price-wrap\">
\t\t\t\t\t\t\t\t\t\t<span class=\"price-new price-on-sale h2 fw-4\">{{ tax }}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t{% if options and options|length > 0 %}
\t\t\t\t\t\t\t\t\t<div class=\"tf-product-variant\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-values mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for option_value in option.product_option_value %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if option.type == 'select' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"size-btn {% if loop.first %}active{% endif %}\" data-size=\"{{ option_value.name }}\">{{ option_value.name }}</span>
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

\t\t\t\t\t\t\t\t<div class=\"tf-product-variant\">
\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-item variant-{{ option.type }}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-label\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"h4 fw-semibold\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ option.name }}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"variant-picker-label-value value-current-option\">{{ option.product_option_value[0].name }}</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"variant-picker-values mt-3\">
\t\t\t\t\t\t\t\t\t\t\t{% for option_value in option.product_option_value %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if option.type == 'select' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"size-btn {% if loop.first %}active{% endif %}\" data-size=\"{{ option_value.name }}\">{{ option_value.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif option.type == 'radio' %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"color {% if loop.first %}active{% endif %}\" data-color=\"{{ option_value.name }}\">{{ option_value.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"tf-product-total-quantity\">
\t\t\t\t\t\t\t\t\t<div class=\"group-btn\">
\t\t\t\t\t\t\t\t\t\t<div class=\"wg-quantity\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-quantity btn-decrease\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-minus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"{{ minimum }}\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn-quantity btn-increase\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" id=\"button-cart\" onclick class=\"tf-btn animate-btn btn-add-to-cart\">
\t\t\t\t\t\t\t\t\t\t\tADD TO CART
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-shopping-cart-simple\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"hover-tooltip box-icon btn-add-wishlist\" data-url=\"index.php?route=account/wishlist.add&language={{ language }}\" data-product-id=\"{{ product_id }}\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"tf-btn btn-outline w-100\">BUY IT NOW</a>
\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t<div class=\"tf-product-extra-link\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                              non-refundable.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tf-product-trust-seal\">
\t\t\t\t\t\t\t\t\t<p class=\"h6 text-seal\">Guarantee Safe Checkout:</p>
\t\t\t\t\t\t\t\t\t<ul class=\"list-card\">
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/visa.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/master-card.png\" alt=\"card\">
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"card-item\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/images/payment/amex.png\" alt=\"card\">
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
               </div>
            </div>
            <!-- /Product Info -->
         </div>
      </div>
   </div>
   <div class=\"tf-sticky-btn-atc\">
      <div class=\"container\">
         <div class=\"tf-height-observer w-100 d-flex align-items-center\">
            <div class=\"tf-sticky-atc-product d-flex align-items-center\">
               <div class=\"tf-mini-cart-item \">
                  <div class=\"tf-mini-cart-image\">
                     <img class=\"lazyload\" data-src=\"{{ thumb }}\"
                        src=\"{{ thumb }}\" alt=\"img-product\">
                  </div>
                  <div class=\"tf-mini-cart-info\">
                     <h6 class=\"title\">
                        <a href=\"product-detail.html\" class=\"link text-line-clamp-1\">{{ heading_title }}</a>
                     </h6>
                     <div class=\"size\">
                        <div class=\"text-small text-main-2 sub\">Size: XS</div>
                        <div class=\"text-small text-main-2 sub\">Color:</div>
                        <div class=\"dot-color bg-caramel\"></div>
                     </div>
                     <div class=\"h6 fw-semibold\">
                        {{ price }}
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"tf-sticky-atc-infos\">
               <form class=\"\">
                  {% if options and options|length > 0 %}
                  {% for option in options %}
                  {% if option.type == 'select' and option.product_option_value and option.product_option_value|length > 0 %}
                  <div class=\"tf-sticky-atc-variant-price\">
                     <h6 class=\"title\">{{ option.name }}:</h6>
                     <div class=\"tf-select style-1\">
                        <select class=\"font-sora\" name=\"option[{{ option.product_option_id }}]\">
                           {% for option_value in option.product_option_value %}
                           <option value=\"{{ option_value.product_option_value_id }}\"{% if loop.first %} selected=\"selected\"{% endif %}>{{ option_value.name }}</option>
                           {% endfor %}
                        </select>
                     </div>
                  </div>
                  {% endif %}
                  {% endfor %}
                  {% endif %}
                  <div class=\"tf-product-info-quantity\">
                     <h6 class=\"title\">Quantity:</h6>
                     <div class=\"wg-quantity\">
                        <button class=\"btn-quantity minus-btn\">
                        <i class=\"icon icon-minus\"></i>
                        </button>
                        <input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"{{ minimum }}\">
                        <button class=\"btn-quantity plus-btn\">
                        <i class=\"icon icon-plus\"></i>
                        </button>
                     </div>
                  </div>
                  <div class=\"tf-sticky-atc-btns\">
                     <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"tf-btn animate-btn btn-add-to-cart\" data-url=\"index.php?route=checkout/cart.add&language={{ language }}\" data-product-id=\"{{ product_id }}\">
                     Add to cart
                     <i class=\"icon icon-shopping-cart-simple\"></i>
                     </a>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /Product Main -->
<!-- Product Description -->
<section class=\"flat-spacing-3\">
   <div class=\"container\">
      <div class=\"flat-animate-tab tab-style-1\">
         <ul class=\"menu-tab menu-tab-1\" role=\"tablist\">
            <li class=\"nav-tab-item\" role=\"presentation\">
               <a href=\"#descriptions\" class=\"tab-link active\" data-bs-toggle=\"tab\">Descriptions</a>
            </li>
            <li class=\"nav-tab-item\" role=\"presentation\">
               <a href=\"#policy\" class=\"tab-link\" data-bs-toggle=\"tab\">Shipping, Return & Refund Policy</a>
            </li>
            <li class=\"nav-tab-item\" role=\"presentation\">
               <a href=\"#reviews\" class=\"tab-link\" data-bs-toggle=\"tab\">Customer Reviews</a>
            </li>
         </ul>
         <div class=\"tab-content\">
            <div class=\"tab-pane wd-product-descriptions active show\" id=\"descriptions\" role=\"tabpanel\">
               <div class=\"tab-descriptions\">
                  <p class=\"h6 desc\">
                     {{ description|raw }}
                  </p>
               
               </div>
            </div>
            <div class=\"tab-pane wd-product-descriptions\" id=\"policy\" role=\"tabpanel\">
               <div class=\"tab-policy\">
                  <div class=\"mb_32\">
                     <h5 class=\"mb_16 text-black\">Returns & Refunds:</h5>
                     <p class=\"h6\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tortor commodo enim pulvinar
                        hendrerit. Mauris a leo rutrum lectus vehicula dignissim feugiat eu felis. Fusce libero est, commodo vitae
                        ultricies id, sollicitudin a augue. In finibus suscipit nulla, id bibendum diam fermentum sed.
                     </p>
                  </div>
                  <div class=\"\">
                     <h5 class=\"mb_16 text-black\">Shipping:</h5>
                     <p class=\"h6\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum arcu ut odio elementum,
                        vel vestibulum lacus scelerisque. Integer egestas nisi eu nunc imperdiet.
                     </p>
                  </div>
               </div>
            </div>
            <div class=\"tab-pane wd-product-descriptions\" id=\"reviews\" role=\"tabpanel\">
               <div class=\"tab-reviews write-cancel-review-wrap\">
                  <div class=\"tab-reviews-heading\">
                     <div class=\"top\">
                        <div class=\"text-center\">
                           <div class=\"number fw-6\">4.8 <span>/5</span></div>
                           <div class=\"list-star d-flex justify-content-center gap-4\">
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                           </div>
                           <p class=\"quantity-reviews\">Based on 3.637 reviews</p>
                        </div>
                        <div class=\"rating-score\">
                           <div class=\"item\">
                              <div class=\"number-1\">5</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 100%;\"></div>
                              </div>
                              <div class=\"number-2\">100</div>
                           </div>
                           <div class=\"item\">
                              <div class=\"number-1\">4</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 97%;\"></div>
                              </div>
                              <div class=\"number-2\">97</div>
                           </div>
                           <div class=\"item\">
                              <div class=\"number-1\">3</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 37%;\"></div>
                              </div>
                              <div class=\"number-2\">37</div>
                           </div>
                           <div class=\"item\">
                              <div class=\"number-1\">2</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 24%;\"></div>
                              </div>
                              <div class=\"number-2\">24</div>
                           </div>
                           <div class=\"item\">
                              <div class=\"number-1\">1</div>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\"></path>
                              </svg>
                              <div class=\"line-bg\">
                                 <div style=\"width: 0%;\"></div>
                              </div>
                              <div class=\"number-2\">0</div>
                           </div>
                        </div>
                     </div>
                     <div class=\"btns-reviews\">
                        <div class=\"tf-btn btn-white animate-btn animate-dark line btn-comment-review btn-cancel-review\">
                           Cancel Review
                           <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path
                                 d=\"M15.9834 5.15866L12.8412 2.0171C12.7367 1.9126 12.6127 1.82971 12.4762 1.77316C12.3397 1.71661 12.1933 1.6875 12.0456 1.6875C11.8978 1.6875 11.7515 1.71661 11.615 1.77316C11.4785 1.82971 11.3545 1.9126 11.25 2.0171L2.57977 10.6873C2.47485 10.7914 2.39167 10.9153 2.33506 11.0518C2.27844 11.1884 2.24953 11.3348 2.25001 11.4826V14.6248C2.25001 14.9232 2.36853 15.2093 2.57951 15.4203C2.79049 15.6313 3.07664 15.7498 3.37501 15.7498H15.1875C15.3367 15.7498 15.4798 15.6906 15.5853 15.5851C15.6907 15.4796 15.75 15.3365 15.75 15.1873C15.75 15.0381 15.6907 14.8951 15.5853 14.7896C15.4798 14.6841 15.3367 14.6248 15.1875 14.6248H8.10844L15.9834 6.74983C16.0879 6.64536 16.1708 6.52133 16.2274 6.38482C16.2839 6.24831 16.313 6.102 16.313 5.95424C16.313 5.80649 16.2839 5.66017 16.2274 5.52367C16.1708 5.38716 16.0879 5.26313 15.9834 5.15866ZM6.51727 14.6248H3.37501V11.4826L9.56251 5.29506L12.7048 8.43733L6.51727 14.6248ZM13.5 7.6421L10.3584 4.49983L12.0459 2.81233L15.1875 5.9546L13.5 7.6421Z\"
                                 fill=\"black\" />
                           </svg>
                        </div>
                        <div class=\"tf-btn btn-white animate-btn animate-dark line btn-comment-review btn-write-review\">
                           Write a review
                           <svg width=\"18\" height=\"18\" viewBox=\"0 0 18 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                              <path
                                 d=\"M15.9834 5.15866L12.8412 2.0171C12.7367 1.9126 12.6127 1.82971 12.4762 1.77316C12.3397 1.71661 12.1933 1.6875 12.0456 1.6875C11.8978 1.6875 11.7515 1.71661 11.615 1.77316C11.4785 1.82971 11.3545 1.9126 11.25 2.0171L2.57977 10.6873C2.47485 10.7914 2.39167 10.9153 2.33506 11.0518C2.27844 11.1884 2.24953 11.3348 2.25001 11.4826V14.6248C2.25001 14.9232 2.36853 15.2093 2.57951 15.4203C2.79049 15.6313 3.07664 15.7498 3.37501 15.7498H15.1875C15.3367 15.7498 15.4798 15.6906 15.5853 15.5851C15.6907 15.4796 15.75 15.3365 15.75 15.1873C15.75 15.0381 15.6907 14.8951 15.5853 14.7896C15.4798 14.6841 15.3367 14.6248 15.1875 14.6248H8.10844L15.9834 6.74983C16.0879 6.64536 16.1708 6.52133 16.2274 6.38482C16.2839 6.24831 16.313 6.102 16.313 5.95424C16.313 5.80649 16.2839 5.66017 16.2274 5.52367C16.1708 5.38716 16.0879 5.26313 15.9834 5.15866ZM6.51727 14.6248H3.37501V11.4826L9.56251 5.29506L12.7048 8.43733L6.51727 14.6248ZM13.5 7.6421L10.3584 4.49983L12.0459 2.81233L15.1875 5.9546L13.5 7.6421Z\"
                                 fill=\"black\" />
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class=\"reply-comment cancel-review-wrap\">
                     <div class=\"reply-comment-filter d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap\">
                        <div class=\"d-flex align-items-center flex-wrap gap-12\">
                           <div class=\"h6 fw-5\">Filter by:</div>
                           <div class=\"filter-start-wrap\">
                              <div class=\"filter-item h6 active\">
                                 All
                              </div>
                              <div class=\"filter-item h6\">
                                 5 star (<span class=\"number\">97</span>)
                              </div>
                              <div class=\"filter-item h6\">
                                 4 star (<span class=\"number\">12</span>)
                              </div>
                              <div class=\"filter-item h6\">
                                 3 star (<span class=\"number\">23</span>)
                              </div>
                              <div class=\"filter-item h6\">
                                 2 star (<span class=\"number\">0</span>)
                              </div>
                              <div class=\"filter-item h6\">
                                 1 star (<span class=\"number\">0</span>)
                              </div>
                           </div>
                        </div>
                        <div class=\"tf-dropdown-sort\" data-bs-toggle=\"dropdown\">
                           <div class=\"btn-select\">
                              <span class=\"text-sort-value\">Most Recent</span>
                              <span class=\"icon icon-caret-down\"></span>
                           </div>
                           <div class=\"dropdown-menu\">
                              <div class=\"select-item active\">
                                 <span class=\"text-value-item\">Most Recent</span>
                              </div>
                              <div class=\"select-item\">
                                 <span class=\"text-value-item\">Oldest</span>
                              </div>
                              <div class=\"select-item\">
                                 <span class=\"text-value-item\">Most Popular</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"reply-comment-wrap\">
                        <div class=\"reply-comment-item\">
                           <div class=\"image\">
                              <img class=\"lazyload\" data-
                              <div id=\"product-info\" class=\"container\">
                                 <div class=\"row\">
                                    {{ column_left }}
                                    <div id=\"content\" class=\"col\">
                                       {{ content_top }}
                                       <div class=\"row mb-3\">
                                          {% if thumb or images %}
                                          <div class=\"col-sm\">
                                             <div class=\"image magnific-popup\">
                                                {% if thumb %}
                                                <a href=\"{{ popup }}\" title=\"{{ heading_title }}\"><img src=\"{{ thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" class=\"img-thumbnail mb-3\"/></a>
                                                {% endif %}
                                                {% if images %}
                                                <div>
                                                   {% for image in images %}
                                                   <a href=\"{{ image.popup }}\" title=\"{{ heading_title }}\"><img src=\"{{ image.thumb }}\" title=\"{{ heading_title }}\" alt=\"{{ heading_title }}\" class=\"img-thumbnail\"/></a>&nbsp;
                                                   {% endfor %}
                                                </div>
                                                {% endif %}
                                             </div>
                                          </div>
                                          {% endif %}
                                          <div class=\"col-sm\">
                                             <h1>{{ heading_title }}</h1>
                                             <ul class=\"list-unstyled\">
                                                {% if manufacturer %}
                                                <li>{{ text_manufacturer }} <a href=\"{{ manufacturers }}\">{{ manufacturer }}</a></li>
                                                {% endif %}
                                                <li>{{ text_model }} {{ model }}</li>
                                                {% for product_code in product_codes %}
                                                <li>{{ product_code.code }}: {{ product_code.value }}</li>
                                                {% endfor %}
                                                {% if reward %}
                                                <li>{{ text_reward }} {{ reward }}</li>
                                                {% endif %}
                                                <li>{{ text_stock }} {{ stock }}</li>
                                             </ul>
                                             {% if review_status %}
                                             <div class=\"rating\">
                                                <p>
                                                   {% for i in 1..5 %}
                                                   {% if rating < i %}
                                                   <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                                                   {% else %}
                                                   <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                                                   {% endif %}
                                                   {% endfor %}
                                                   <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">{{ text_reviews }}</a> / <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">{{ text_write }}</a>
                                                </p>
                                             </div>
                                             {% endif %}
                                             {% if price %}
                                             <ul class=\"list-unstyled\">
                                                {% if not special %}
                                                <li>
                                                   <h2><span class=\"price-new\">{{ price }}</span></h2>
                                                </li>
                                                {% else %}
                                                <li><span class=\"price-old\">{{ price }}</span></li>
                                                <li>
                                                   <h2><span class=\"price-new\">{{ special }}</span></h2>
                                                </li>
                                                {% endif %}
                                                {% if tax %}
                                                <li>{{ text_tax }} {{ tax }}</li>
                                                {% endif %}
                                                {% if points %}
                                                <li>{{ text_points }} {{ points }}</li>
                                                {% endif %}
                                                {% if discounts %}
                                                <li>
                                                   <hr>
                                                </li>
                                                {% for discount in discounts %}
                                                <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>
                                                {% endfor %}
                                                {% endif %}
                                             </ul>
                                             {% endif %}
                                             <form method=\"post\" data-oc-toggle=\"ajax\">
                                                <div class=\"btn-group\">
                                                   {% if not logged %}
                                                   <button  class=\"btn btn-light btn-lg offline-wishlist\" title=\"{{ button_wishlist }}\">wishlist off</button>
                                                   {% else %}
                                                   <button type=\"submit\" formaction=\"{{ wishlist_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_wishlist }}\">wishlist</button>
                                                   {% endif %}
                                                   <button type=\"submit\" formaction=\"{{ compare_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_compare }}\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
                                                </div>
                                                <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
                                             </form>
                                             <br/>
                                             
                                          </div>
                                       </div>
                                       <ul class=\"nav nav-tabs\">
                                          <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_description }}</a></li>
                                          {% if attribute_groups %}
                                          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_attribute }}</a></li>
                                          {% endif %}
                                          {% if review_status %}
                                          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_review }}</a></li>
                                          {% endif %}
                                       </ul>
                                       <div class=\"tab-content\">
                                          <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">
                                             {{ description }}
                                             {% if tags %}
                                             <p>{{ text_tags }}
                                                {% for tag in tags %}
                                                <a href=\"{{ tag.href }}\">{{ tag.tag }}</a>{% if not loop.last %},{% endif %}
                                                {% endfor %}
                                             </p>
                                             {% endif %}
                                          </div>
                                          {% if attribute_groups %}
                                          <div id=\"tab-specification\" class=\"tab-pane fade\">
                                             <div class=\"table-responsive\">
                                                <table class=\"table table-bordered\">
                                                   {% for attribute_group in attribute_groups %}
                                                   <thead>
                                                      <tr>
                                                         <td colspan=\"2\"><strong>{{ attribute_group.name }}</strong></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      {% for attribute in attribute_group.attribute %}
                                                      <tr>
                                                         <td>{{ attribute.name }}</td>
                                                         <td>{{ attribute.text }}</td>
                                                      </tr>
                                                      {% endfor %}
                                                   </tbody>
                                                   {% endfor %}
                                                </table>
                                             </div>
                                          </div>
                                          {% endif %}
                                          {% if review_status %}
                                          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">{{ review }}</div>
                                          {% endif %}
                                       </div>
                                       {{ related }}
                                       {{ content_bottom }}
                                    </div>
                                    {{ column_right }}
                                 </div>
                              </div>
                              images/section/recent-1.jpg\" src=\"assets/images/section/recent-1.jpg\" alt=\"\">
                           </div>
                           <div>
                              <div class=\"user\">
                                 <div class=\"flex-grow-1\">
                                    <h4 class=\"name\">
                                       <a href=\"#\" class=\"link\">Esther Howard</a>
                                    </h4>
                                    <div class=\"user-infor\">
                                       <div class=\"color\">Color: Black</div>
                                       <div class=\"line\"></div>
                                       <div class=\"verified-purchase\">
                                          <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"
                                             xmlns=\"http://www.w3.org/2000/svg\">
                                             <path
                                                d=\"M17.6453 8.03281C17.3508 7.725 17.0461 7.40781 16.9312 7.12891C16.825 6.87344 16.8187 6.45 16.8125 6.03984C16.8008 5.27734 16.7883 4.41328 16.1875 3.8125C15.5867 3.21172 14.7227 3.19922 13.9602 3.1875C13.55 3.18125 13.1266 3.175 12.8711 3.06875C12.593 2.95391 12.275 2.64922 11.9672 2.35469C11.4281 1.83672 10.8156 1.25 10 1.25C9.18437 1.25 8.57266 1.83672 8.03281 2.35469C7.725 2.64922 7.40781 2.95391 7.12891 3.06875C6.875 3.175 6.45 3.18125 6.03984 3.1875C5.27734 3.19922 4.41328 3.21172 3.8125 3.8125C3.21172 4.41328 3.20312 5.27734 3.1875 6.03984C3.18125 6.45 3.175 6.87344 3.06875 7.12891C2.95391 7.40703 2.64922 7.725 2.35469 8.03281C1.83672 8.57188 1.25 9.18437 1.25 10C1.25 10.8156 1.83672 11.4273 2.35469 11.9672C2.64922 12.275 2.95391 12.5922 3.06875 12.8711C3.175 13.1266 3.18125 13.55 3.1875 13.9602C3.19922 14.7227 3.21172 15.5867 3.8125 16.1875C4.41328 16.7883 5.27734 16.8008 6.03984 16.8125C6.45 16.8187 6.87344 16.825 7.12891 16.9312C7.40703 17.0461 7.725 17.3508 8.03281 17.6453C8.57188 18.1633 9.18437 18.75 10 18.75C10.8156 18.75 11.4273 18.1633 11.9672 17.6453C12.275 17.3508 12.5922 17.0461 12.8711 16.9312C13.1266 16.825 13.55 16.8187 13.9602 16.8125C14.7227 16.8008 15.5867 16.7883 16.1875 16.1875C16.7883 15.5867 16.8008 14.7227 16.8125 13.9602C16.8187 13.55 16.825 13.1266 16.9312 12.8711C17.0461 12.593 17.3508 12.275 17.6453 11.9672C18.1633 11.4281 18.75 10.8156 18.75 10C18.75 9.18437 18.1633 8.57266 17.6453 8.03281ZM16.743 11.1023C16.3687 11.493 15.9812 11.8969 15.7758 12.393C15.5789 12.8695 15.5703 13.4141 15.5625 13.9414C15.5547 14.4883 15.5461 15.0609 15.3031 15.3031C15.0602 15.5453 14.4914 15.5547 13.9414 15.5625C13.4141 15.5703 12.8695 15.5789 12.393 15.7758C11.8969 15.9812 11.493 16.3687 11.1023 16.743C10.7117 17.1172 10.3125 17.5 10 17.5C9.6875 17.5 9.28516 17.1156 8.89766 16.743C8.51016 16.3703 8.10313 15.9812 7.60703 15.7758C7.13047 15.5789 6.58594 15.5703 6.05859 15.5625C5.51172 15.5547 4.93906 15.5461 4.69687 15.3031C4.45469 15.0602 4.44531 14.4914 4.4375 13.9414C4.42969 13.4141 4.42109 12.8695 4.22422 12.393C4.01875 11.8969 3.63125 11.493 3.25703 11.1023C2.88281 10.7117 2.5 10.3125 2.5 10C2.5 9.6875 2.88437 9.28516 3.25703 8.89766C3.62969 8.51016 4.01875 8.10313 4.22422 7.60703C4.42109 7.13047 4.42969 6.58594 4.4375 6.05859C4.44531 5.51172 4.45391 4.93906 4.69687 4.69687C4.93984 4.45469 5.50859 4.44531 6.05859 4.4375C6.58594 4.42969 7.13047 4.42109 7.60703 4.22422C8.10313 4.01875 8.50703 3.63125 8.89766 3.25703C9.28828 2.88281 9.6875 2.5 10 2.5C10.3125 2.5 10.7148 2.88437 11.1023 3.25703C11.4898 3.62969 11.8969 4.01875 12.393 4.22422C12.8695 4.42109 13.4141 4.42969 13.9414 4.4375C14.4883 4.44531 15.0609 4.45391 15.3031 4.69687C15.5453 4.93984 15.5547 5.50859 15.5625 6.05859C15.5703 6.58594 15.5789 7.13047 15.7758 7.60703C15.9812 8.10313 16.3687 8.50703 16.743 8.89766C17.1172 9.28828 17.5 9.6875 17.5 10C17.5 10.3125 17.1156 10.7148 16.743 11.1023ZM13.5672 7.68281C13.6253 7.74086 13.6714 7.80979 13.7029 7.88566C13.7343 7.96154 13.7505 8.04287 13.7505 8.125C13.7505 8.20713 13.7343 8.28846 13.7029 8.36434C13.6714 8.44021 13.6253 8.50914 13.5672 8.56719L9.19219 12.9422C9.13414 13.0003 9.06521 13.0464 8.98934 13.0779C8.91346 13.1093 8.83213 13.1255 8.75 13.1255C8.66787 13.1255 8.58654 13.1093 8.51066 13.0779C8.43479 13.0464 8.36586 13.0003 8.30781 12.9422L6.43281 11.0672C6.31554 10.9499 6.24965 10.7909 6.24965 10.625C6.24965 10.4591 6.31554 10.3001 6.43281 10.1828C6.55009 10.0655 6.70915 9.99965 6.875 9.99965C7.04085 9.99965 7.19991 10.0655 7.31719 10.1828L8.75 11.6164L12.6828 7.68281C12.7409 7.6247 12.8098 7.5786 12.8857 7.54715C12.9615 7.5157 13.0429 7.49951 13.125 7.49951C13.2071 7.49951 13.2885 7.5157 13.3643 7.54715C13.4402 7.5786 13.5091 7.6247 13.5672 7.68281Z\"
                                                fill=\"black\" />
                                          </svg>
                                          <div class=\"text\">Verified Purchase</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"list-star d-flex justify-content-center gap-4\">
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                 </div>
                              </div>
                              <p class=\"h6 desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id massa in sapien
                                 ornare tristique vel vitae augue. Donec dictum sem semper, posuere leo eu, tempus ex. Morbi id
                                 ipsum urna. Duis elementum, nibh ut rutrum pellentesque, tortor nisi fermentum nulla, ut fringilla
                                 enim magna sed nunc. Nulla fringilla non purus vestibulum porta.
                              </p>
                              <div class=\"text-small time text-main-2\">April 3, 2020 at 10:43</div>
                           </div>
                        </div>
                        <div class=\"reply-comment-item\">
                           <div class=\"image\">
                              <img class=\"lazyload\" data-src=\"assets/images/section/recent-2.jpg\" src=\"assets/images/section/recent-2.jpg\" alt=\"\">
                           </div>
                           <div>
                              <div class=\"user\">
                                 <div class=\"flex-grow-1\">
                                    <h4 class=\"name\">
                                       <a href=\"#\" class=\"link\">Eleanor Pena</a>
                                    </h4>
                                    <div class=\"user-infor\">
                                       <div class=\"color\">Color: Black</div>
                                       <div class=\"line\"></div>
                                       <div class=\"verified-purchase\">
                                          <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"
                                             xmlns=\"http://www.w3.org/2000/svg\">
                                             <path
                                                d=\"M17.6453 8.03281C17.3508 7.725 17.0461 7.40781 16.9312 7.12891C16.825 6.87344 16.8187 6.45 16.8125 6.03984C16.8008 5.27734 16.7883 4.41328 16.1875 3.8125C15.5867 3.21172 14.7227 3.19922 13.9602 3.1875C13.55 3.18125 13.1266 3.175 12.8711 3.06875C12.593 2.95391 12.275 2.64922 11.9672 2.35469C11.4281 1.83672 10.8156 1.25 10 1.25C9.18437 1.25 8.57266 1.83672 8.03281 2.35469C7.725 2.64922 7.40781 2.95391 7.12891 3.06875C6.875 3.175 6.45 3.18125 6.03984 3.1875C5.27734 3.19922 4.41328 3.21172 3.8125 3.8125C3.21172 4.41328 3.20312 5.27734 3.1875 6.03984C3.18125 6.45 3.175 6.87344 3.06875 7.12891C2.95391 7.40703 2.64922 7.725 2.35469 8.03281C1.83672 8.57188 1.25 9.18437 1.25 10C1.25 10.8156 1.83672 11.4273 2.35469 11.9672C2.64922 12.275 2.95391 12.5922 3.06875 12.8711C3.175 13.1266 3.18125 13.55 3.1875 13.9602C3.19922 14.7227 3.21172 15.5867 3.8125 16.1875C4.41328 16.7883 5.27734 16.8008 6.03984 16.8125C6.45 16.8187 6.87344 16.825 7.12891 16.9312C7.40703 17.0461 7.725 17.3508 8.03281 17.6453C8.57188 18.1633 9.18437 18.75 10 18.75C10.8156 18.75 11.4273 18.1633 11.9672 17.6453C12.275 17.3508 12.5922 17.0461 12.8711 16.9312C13.1266 16.825 13.55 16.8187 13.9602 16.8125C14.7227 16.8008 15.5867 16.7883 16.1875 16.1875C16.7883 15.5867 16.8008 14.7227 16.8125 13.9602C16.8187 13.55 16.825 13.1266 16.9312 12.8711C17.0461 12.593 17.3508 12.275 17.6453 11.9672C18.1633 11.4281 18.75 10.8156 18.75 10C18.75 9.18437 18.1633 8.57266 17.6453 8.03281ZM16.743 11.1023C16.3687 11.493 15.9812 11.8969 15.7758 12.393C15.5789 12.8695 15.5703 13.4141 15.5625 13.9414C15.5547 14.4883 15.5461 15.0609 15.3031 15.3031C15.0602 15.5453 14.4914 15.5547 13.9414 15.5625C13.4141 15.5703 12.8695 15.5789 12.393 15.7758C11.8969 15.9812 11.493 16.3687 11.1023 16.743C10.7117 17.1172 10.3125 17.5 10 17.5C9.6875 17.5 9.28516 17.1156 8.89766 16.743C8.51016 16.3703 8.10313 15.9812 7.60703 15.7758C7.13047 15.5789 6.58594 15.5703 6.05859 15.5625C5.51172 15.5547 4.93906 15.5461 4.69687 15.3031C4.45469 15.0602 4.44531 14.4914 4.4375 13.9414C4.42969 13.4141 4.42109 12.8695 4.22422 12.393C4.01875 11.8969 3.63125 11.493 3.25703 11.1023C2.88281 10.7117 2.5 10.3125 2.5 10C2.5 9.6875 2.88437 9.28516 3.25703 8.89766C3.62969 8.51016 4.01875 8.10313 4.22422 7.60703C4.42109 7.13047 4.42969 6.58594 4.4375 6.05859C4.44531 5.51172 4.45391 4.93906 4.69687 4.69687C4.93984 4.45469 5.50859 4.44531 6.05859 4.4375C6.58594 4.42969 7.13047 4.42109 7.60703 4.22422C8.10313 4.01875 8.50703 3.63125 8.89766 3.25703C9.28828 2.88281 9.6875 2.5 10 2.5C10.3125 2.5 10.7148 2.88437 11.1023 3.25703C11.4898 3.62969 11.8969 4.01875 12.393 4.22422C12.8695 4.42109 13.4141 4.42969 13.9414 4.4375C14.4883 4.44531 15.0609 4.45391 15.3031 4.69687C15.5453 4.93984 15.5547 5.50859 15.5625 6.05859C15.5703 6.58594 15.5789 7.13047 15.7758 7.60703C15.9812 8.10313 16.3687 8.50703 16.743 8.89766C17.1172 9.28828 17.5 9.6875 17.5 10C17.5 10.3125 17.1156 10.7148 16.743 11.1023ZM13.5672 7.68281C13.6253 7.74086 13.6714 7.80979 13.7029 7.88566C13.7343 7.96154 13.7505 8.04287 13.7505 8.125C13.7505 8.20713 13.7343 8.28846 13.7029 8.36434C13.6714 8.44021 13.6253 8.50914 13.5672 8.56719L9.19219 12.9422C9.13414 13.0003 9.06521 13.0464 8.98934 13.0779C8.91346 13.1093 8.83213 13.1255 8.75 13.1255C8.66787 13.1255 8.58654 13.1093 8.51066 13.0779C8.43479 13.0464 8.36586 13.0003 8.30781 12.9422L6.43281 11.0672C6.31554 10.9499 6.24965 10.7909 6.24965 10.625C6.24965 10.4591 6.31554 10.3001 6.43281 10.1828C6.55009 10.0655 6.70915 9.99965 6.875 9.99965C7.04085 9.99965 7.19991 10.0655 7.31719 10.1828L8.75 11.6164L12.6828 7.68281C12.7409 7.6247 12.8098 7.5786 12.8857 7.54715C12.9615 7.5157 13.0429 7.49951 13.125 7.49951C13.2071 7.49951 13.2885 7.5157 13.3643 7.54715C13.4402 7.5786 13.5091 7.6247 13.5672 7.68281Z\"
                                                fill=\"black\" />
                                          </svg>
                                          <div class=\"text\">Verified Purchase</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"list-star d-flex justify-content-center gap-4\">
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                 </div>
                              </div>
                              <p class=\"h6 desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id massa in sapien
                                 ornare tristique vel vitae augue. Donec dictum sem semper, posuere leo eu, tempus ex. Morbi id
                                 ipsum urna. Duis elementum, nibh ut rutrum pellentesque, tortor nisi fermentum nulla, ut fringilla
                                 enim magna sed nunc. Nulla fringilla non purus vestibulum porta.
                              </p>
                              <div class=\"text-small time text-main-2\">April 3, 2020 at 10:43</div>
                           </div>
                        </div>
                        <div class=\"reply-comment-item\">
                           <div class=\"image\">
                              <img class=\"lazyload\" data-src=\"assets/images/section/recent-1.jpg\" src=\"assets/images/section/recent-1.jpg\" alt=\"\">
                           </div>
                           <div>
                              <div class=\"user\">
                                 <div class=\"flex-grow-1\">
                                    <h4 class=\"name\">
                                       <a href=\"#\" class=\"link\">Cody Fisher</a>
                                    </h4>
                                    <div class=\"user-infor\">
                                       <div class=\"color\">Color: Black</div>
                                       <div class=\"line\"></div>
                                       <div class=\"verified-purchase\">
                                          <svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"
                                             xmlns=\"http://www.w3.org/2000/svg\">
                                             <path
                                                d=\"M17.6453 8.03281C17.3508 7.725 17.0461 7.40781 16.9312 7.12891C16.825 6.87344 16.8187 6.45 16.8125 6.03984C16.8008 5.27734 16.7883 4.41328 16.1875 3.8125C15.5867 3.21172 14.7227 3.19922 13.9602 3.1875C13.55 3.18125 13.1266 3.175 12.8711 3.06875C12.593 2.95391 12.275 2.64922 11.9672 2.35469C11.4281 1.83672 10.8156 1.25 10 1.25C9.18437 1.25 8.57266 1.83672 8.03281 2.35469C7.725 2.64922 7.40781 2.95391 7.12891 3.06875C6.875 3.175 6.45 3.18125 6.03984 3.1875C5.27734 3.19922 4.41328 3.21172 3.8125 3.8125C3.21172 4.41328 3.20312 5.27734 3.1875 6.03984C3.18125 6.45 3.175 6.87344 3.06875 7.12891C2.95391 7.40703 2.64922 7.725 2.35469 8.03281C1.83672 8.57188 1.25 9.18437 1.25 10C1.25 10.8156 1.83672 11.4273 2.35469 11.9672C2.64922 12.275 2.95391 12.5922 3.06875 12.8711C3.175 13.1266 3.18125 13.55 3.1875 13.9602C3.19922 14.7227 3.21172 15.5867 3.8125 16.1875C4.41328 16.7883 5.27734 16.8008 6.03984 16.8125C6.45 16.8187 6.87344 16.825 7.12891 16.9312C7.40703 17.0461 7.725 17.3508 8.03281 17.6453C8.57188 18.1633 9.18437 18.75 10 18.75C10.8156 18.75 11.4273 18.1633 11.9672 17.6453C12.275 17.3508 12.5922 17.0461 12.8711 16.9312C13.1266 16.825 13.55 16.8187 13.9602 16.8125C14.7227 16.8008 15.5867 16.7883 16.1875 16.1875C16.7883 15.5867 16.8008 14.7227 16.8125 13.9602C16.8187 13.55 16.825 13.1266 16.9312 12.8711C17.0461 12.593 17.3508 12.275 17.6453 11.9672C18.1633 11.4281 18.75 10.8156 18.75 10C18.75 9.18437 18.1633 8.57266 17.6453 8.03281ZM16.743 11.1023C16.3687 11.493 15.9812 11.8969 15.7758 12.393C15.5789 12.8695 15.5703 13.4141 15.5625 13.9414C15.5547 14.4883 15.5461 15.0609 15.3031 15.3031C15.0602 15.5453 14.4914 15.5547 13.9414 15.5625C13.4141 15.5703 12.8695 15.5789 12.393 15.7758C11.8969 15.9812 11.493 16.3687 11.1023 16.743C10.7117 17.1172 10.3125 17.5 10 17.5C9.6875 17.5 9.28516 17.1156 8.89766 16.743C8.51016 16.3703 8.10313 15.9812 7.60703 15.7758C7.13047 15.5789 6.58594 15.5703 6.05859 15.5625C5.51172 15.5547 4.93906 15.5461 4.69687 15.3031C4.45469 15.0602 4.44531 14.4914 4.4375 13.9414C4.42969 13.4141 4.42109 12.8695 4.22422 12.393C4.01875 11.8969 3.63125 11.493 3.25703 11.1023C2.88281 10.7117 2.5 10.3125 2.5 10C2.5 9.6875 2.88437 9.28516 3.25703 8.89766C3.62969 8.51016 4.01875 8.10313 4.22422 7.60703C4.42109 7.13047 4.42969 6.58594 4.4375 6.05859C4.44531 5.51172 4.45391 4.93906 4.69687 4.69687C4.93984 4.45469 5.50859 4.44531 6.05859 4.4375C6.58594 4.42969 7.13047 4.42109 7.60703 4.22422C8.10313 4.01875 8.50703 3.63125 8.89766 3.25703C9.28828 2.88281 9.6875 2.5 10 2.5C10.3125 2.5 10.7148 2.88437 11.1023 3.25703C11.4898 3.62969 11.8969 4.01875 12.393 4.22422C12.8695 4.42109 13.4141 4.42969 13.9414 4.4375C14.4883 4.44531 15.0609 4.45391 15.3031 4.69687C15.5453 4.93984 15.5547 5.50859 15.5625 6.05859C15.5703 6.58594 15.5789 7.13047 15.7758 7.60703C15.9812 8.10313 16.3687 8.50703 16.743 8.89766C17.1172 9.28828 17.5 9.6875 17.5 10C17.5 10.3125 17.1156 10.7148 16.743 11.1023ZM13.5672 7.68281C13.6253 7.74086 13.6714 7.80979 13.7029 7.88566C13.7343 7.96154 13.7505 8.04287 13.7505 8.125C13.7505 8.20713 13.7343 8.28846 13.7029 8.36434C13.6714 8.44021 13.6253 8.50914 13.5672 8.56719L9.19219 12.9422C9.13414 13.0003 9.06521 13.0464 8.98934 13.0779C8.91346 13.1093 8.83213 13.1255 8.75 13.1255C8.66787 13.1255 8.58654 13.1093 8.51066 13.0779C8.43479 13.0464 8.36586 13.0003 8.30781 12.9422L6.43281 11.0672C6.31554 10.9499 6.24965 10.7909 6.24965 10.625C6.24965 10.4591 6.31554 10.3001 6.43281 10.1828C6.55009 10.0655 6.70915 9.99965 6.875 9.99965C7.04085 9.99965 7.19991 10.0655 7.31719 10.1828L8.75 11.6164L12.6828 7.68281C12.7409 7.6247 12.8098 7.5786 12.8857 7.54715C12.9615 7.5157 13.0429 7.49951 13.125 7.49951C13.2071 7.49951 13.2885 7.5157 13.3643 7.54715C13.4402 7.5786 13.5091 7.6247 13.5672 7.68281Z\"
                                                fill=\"black\" />
                                          </svg>
                                          <div class=\"text\">Verified Purchase</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"list-star d-flex justify-content-center gap-4\">
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                    <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\"
                                       xmlns=\"http://www.w3.org/2000/svg\">
                                       <path
                                          d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                          fill=\"#EF9122\"></path>
                                    </svg>
                                 </div>
                              </div>
                              <p class=\"h6 desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id massa in sapien
                                 ornare tristique vel vitae augue. Donec dictum sem semper, posuere leo eu, tempus ex. Morbi id
                                 ipsum urna. Duis elementum, nibh ut rutrum pellentesque, tortor nisi fermentum nulla, ut fringilla
                                 enim magna sed nunc. Nulla fringilla non purus vestibulum porta.
                              </p>
                              <div class=\"text-small time text-main-2\">April 3, 2020 at 10:43</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <form class=\"form-write-review write-review-wrap\">
                     <div class=\"heading h2 fw-4 text-black\">Write a review:</div>
                     <div class=\"text h6 fw-4\">All of your information will be kept confidential. Required fields are marked with an
                        asterisk (*)
                     </div>
                     <div class=\"your-rating\">
                        <div class=\"h4 fw-4 text-black\">Your rating:</div>
                        <div class=\"list-rating-check\">
                           <input type=\"radio\" id=\"star5\" name=\"rate\" value=\"5\">
                           <label for=\"star5\" title=\"text\"></label>
                           <input type=\"radio\" id=\"star4\" name=\"rate\" value=\"4\">
                           <label for=\"star4\" title=\"text\"></label>
                           <input type=\"radio\" id=\"star3\" name=\"rate\" value=\"3\">
                           <label for=\"star3\" title=\"text\"></label>
                           <input type=\"radio\" id=\"star2\" name=\"rate\" value=\"2\">
                           <label for=\"star2\" title=\"text\"></label>
                           <input type=\"radio\" id=\"star1\" name=\"rate\" value=\"1\">
                           <label for=\"star1\" title=\"text\"></label>
                        </div>
                     </div>
                     <div class=\"form-content\">
                        <fieldset class=\"box-field\">
                           <input type=\"text\" placeholder=\"Review title\" name=\"text\" tabindex=\"2\" value=\"\" aria-required=\"true\"
                              required=\"\">
                        </fieldset>
                        <fieldset class=\"box-field\">
                           <textarea rows=\"4\" placeholder=\"Review\" tabindex=\"2\" aria-required=\"true\" required=\"\"></textarea>
                        </fieldset>
                        <div class=\"box-field group-2\">
                           <fieldset>
                              <input type=\"text\" placeholder=\"Your name\" name=\"text\" tabindex=\"2\" value=\"\" aria-required=\"true\"
                                 required=\"\">
                           </fieldset>
                           <fieldset>
                              <input type=\"email\" placeholder=\"Your email\" name=\"email\" tabindex=\"2\" value=\"\" aria-required=\"true\"
                                 required=\"\">
                           </fieldset>
                        </div>
                     </div>
                     <div class=\"button-submit\">
                        <button class=\"tf-btn btn-fill animate-btn h6 w-100\" type=\"submit\">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- /Product Description -->
<!-- Box Icon -->
<section>
   <div class=\"container\">
      <div class=\"sect-border\">
         <div class=\"s-head\">
            <h3 class=\" s-title fw-normal\">Ethical Jewelry</h3>
         </div>
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
                     </div>
                  </div>
               </div>
               <!-- item 2 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-calender\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Ethically sourced</h4>
                        <p class=\"text\">Manufacturer's defect</p>
                     </div>
                  </div>
               </div>
               <!-- item 3 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-boat\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">Free shipping</h4>
                        <p class=\"text\">Free Shipping for orders over \$150</p>
                     </div>
                  </div>
               </div>
               <!-- item 4 -->
               <div class=\"swiper-slide\">
                  <div class=\"box-icon_V01\">
                     <span class=\"icon\">
                     <i class=\"icon-headset\"></i>
                     </span>
                     <div class=\"content\">
                        <h4 class=\"title fw-normal\">In-house Design</h4>
                        <p class=\"text\">24 hours a day, 7 days a week</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"sw-dot-default tf-sw-pagination\"></div>
         </div>
      </div>
   </div>
</section>
<!-- /Box Icon -->
<!-- Also Like -->
<section class=\"flat-spacing-3\">
   <div class=\"container\">
      <h1 class=\"sect-title text-center\">You May Also Like</h1>
      {{ related }}
   </div>
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
                        </li>
                     </ul>
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Seamless breathable thong</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$99,99</span>
                        <span class=\"price-new h6\">\$69,99</span>
                     </div>
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
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
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
                   
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Cotton high waisted panties</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\"> \$89,99</span>
                        <span class=\"price-new h6\">\$59,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-4.jpg\"
                              data-src=\"assets/images/products/underwear/product-4.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Dark</span>
                           <span class=\"swatch-value bg-dark-charcoal\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-6.jpg\"
                              data-src=\"assets/images/products/underwear/product-6.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-7.jpg\"
                              data-src=\"assets/images/products/underwear/product-7.jpg\" alt=\"Product\">
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
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
                        </ul>
                     </div>
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
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Sexy lace panties</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$79,99</span>
                        <span class=\"price-new h6\">\$49,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Dusty Olive</span>
                           <span class=\"swatch-value bg-dusty-olive\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-8.jpg\"
                              data-src=\"assets/images/products/underwear/product-8.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Light Orange</span>
                           <span class=\"swatch-value bg-tomato\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-10.jpg\"
                              data-src=\"assets/images/products/underwear/product-10.jpg\" alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Green</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/underwear/product-11.jpg\"
                              data-src=\"assets/images/products/underwear/product-11.jpg\" alt=\"Product\">
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
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
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Seamless underwear</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$109,99</span>
                        <span class=\"price-new h6\">\$74,99</span>
                     </div>
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
                  </div>
               </div>
            </div>
         </div>
         <div class=\"sw-dot-default tf-sw-pagination\"></div>
      </div>
   </div>
</section>


<!-- /Related -->
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
<script>
\$(document).ready(function() {
console.log('ready');
   \$(document).on('click', '.size-btn', function() {
       var size = \$(this).data('size');
       \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(size);
       \$(this).siblings().removeClass('active');
       \$(this).addClass('active');
   });

   \$(document).on('click', '.color', function() {
       var color = \$(this).data('color');
       \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(color);
       \$(this).siblings().removeClass('active');
       \$(this).addClass('active');
   });

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
               console.log(json);
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
