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
</style>

<!-- Page Title -->
<section class=\"s-page-title style-2\">
   <div class=\"container\">
      <div class=\"content\" style=\"padding-bottom: 19px;\">
         <ul class=\"breadcrumbs-page\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 24
            yield "            <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 24);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 24);
            yield "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        // line 43
        yield "                  ";
        $context["all_images"] = [];
        // line 44
        yield "                  ";
        if (($context["thumb"] ?? null)) {
            // line 45
            yield "                  ";
            $context["all_images"] = Twig\Extension\CoreExtension::merge(($context["all_images"] ?? null), [["thumb" => ($context["thumb"] ?? null), "popup" => ($context["popup"] ?? null)]]);
            // line 46
            yield "                  ";
        }
        // line 47
        yield "                  ";
        if (($context["images"] ?? null)) {
            // line 48
            yield "                  ";
            $context["all_images"] = Twig\Extension\CoreExtension::merge(($context["all_images"] ?? null), ($context["images"] ?? null));
            // line 49
            yield "                  ";
        }
        // line 50
        yield "                  <div class=\"product-thumbs-slider\">
                     <div dir=\"ltr\" class=\"swiper tf-product-media-thumbs other-image-zoom\" data-direction=\"vertical\" data-preview=\"4.7\">
                        <div class=\"swiper-wrapper stagger-wrap\">
                           ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 54
            yield "                           <div class=\"swiper-slide stagger-item\" data-size=\"M\" data-color=\"gray\">
                              <div class=\"item\">
                                 <img class=\"lazyload\"
                                    data-src=\"";
            // line 57
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 57);
            yield "\"
                                    src=\"";
            // line 58
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 58);
            yield "\"
                                    alt=\"";
            // line 59
            yield ($context["heading_title"] ?? null);
            yield "\">
                              </div>
                           </div>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                        </div>
                     </div>
                     <div class=\"flat-wrap-media-product\">
                        <div dir=\"ltr\" class=\"swiper tf-product-media-main\" id=\"gallery-swiper-started\">
                           <div class=\"swiper-wrapper\">
                              ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 69
            yield "                              <div class=\"swiper-slide\" data-size=\"M\" data-color=\"gray\">
                                 <a href=\"";
            // line 70
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 70);
            yield "\" target=\"_blank\" class=\"item\"
                                    data-pswp-width=\"860px\" data-pswp-height=\"1146px\">
                                 <img class=\"tf-image-zoom lazyload\"
                                    data-zoom=\"";
            // line 73
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 73);
            yield "\"
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
                                 </a>
                              </div>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "                           </div>
                           ";
        // line 84
        yield "                           ";
        // line 87
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
                     <input type=\"hidden\" id=\"input-product-id\" name=\"product_id\" value=\"";
        // line 97
        yield ($context["product_id"] ?? null);
        yield "\">
                     ";
        // line 98
        if ((($context["options"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["options"] ?? null)) > 0))) {
            // line 99
            yield "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 100
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 100) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 100)) > 0))) {
                    // line 101
                    yield "                     ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 101) == "select")) {
                        // line 102
                        yield "                     <input type=\"hidden\" name=\"option[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 102);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 102)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null), "product_option_value_id", [], "any", false, false, false, 102);
                        yield "\" id=\"input-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 102);
                        yield "\">
                     ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 103
$context["option"], "type", [], "any", false, false, false, 103) == "radio")) {
                        // line 104
                        yield "                     <input type=\"hidden\" name=\"option[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 104);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 104)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "product_option_value_id", [], "any", false, false, false, 104);
                        yield "\" id=\"input-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 104);
                        yield "\">
                     ";
                    }
                    // line 106
                    yield "                     ";
                }
                // line 107
                yield "                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "                     ";
        }
        // line 109
        yield "                     <div class=\"tf-zoom-main sticky-top\"></div>
                  <div class=\"tf-product-info-list other-image-zoom\">
                     <h2 class=\"product-info-name\">";
        // line 111
        yield ($context["heading_title"] ?? null);
        yield "</h2>
                     <div class=\"product-info-meta\">
                        <div class=\"rating\">
                           <div class=\"d-flex gap-4\">
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                           </div>
                           <div class=\"reviews text-main\">(3.671 review)</div>
                        </div>
                     </div>
                     <div class=\"tf-product-heading\">
                        <div class=\"product-info-price price-wrap\">
                           <span class=\"price-new price-on-sale h2 fw-4\">";
        // line 146
        yield ($context["price"] ?? null);
        yield "</span>
                          </div>
                     </div>

                     


                     ";
        // line 153
        if ((($context["options"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["options"] ?? null)) > 0))) {
            // line 154
            yield "                     <div class=\"tf-product-variant\">
                        ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 156
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 156) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 156)) > 0))) {
                    // line 157
                    yield "                        <div class=\"variant-picker-item variant-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 157);
                    yield "\">
                           <div class=\"variant-picker-label\">
                              <div class=\"h4 fw-semibold\">
                                 ";
                    // line 160
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 160);
                    yield "
                                 <span class=\"variant-picker-label-value value-current-option\">";
                    // line 161
                    yield CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 161)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[0] ?? null) : null), "name", [], "any", false, false, false, 161);
                    yield "</span>
                              </div>
                             
                           </div>
                           <div class=\"variant-picker-values mt-3\">
                              ";
                    // line 166
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 166));
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
                        // line 167
                        yield "                              ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 167) == "select")) {
                            // line 168
                            yield "                              <span class=\"size-btn ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 168)) {
                                yield "active";
                            }
                            yield "\" data-size=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 168);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 168);
                            yield "</span>
                              ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 169
$context["option"], "type", [], "any", false, false, false, 169) == "radio")) {
                            // line 170
                            yield "                              <div class=\"hover-tooltip tooltip-bot color-btn";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 170)) {
                                yield " active";
                            }
                            yield "\" data-color=\"";
                            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 170));
                            yield "\">
                                 <span class=\"check-color bg-color-option\"></span>
                                 <span class=\"tooltip\">";
                            // line 172
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 172);
                            yield "</span>
                              </div>
                              ";
                        }
                        // line 175
                        yield "                              ";
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
                    // line 176
                    yield "                           </div>
                        </div>
                        ";
                }
                // line 179
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            yield "                     </div>
                     ";
        }
        // line 182
        yield "
                     <div class=\"tf-product-variant\">
                        <div class=\"variant-picker-item variant-";
        // line 184
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 184);
        yield "\">
                           <div class=\"variant-picker-label\">
                              <div class=\"h4 fw-semibold\">
                                 ";
        // line 187
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "name", [], "any", false, false, false, 187);
        yield "
                                 <span class=\"variant-picker-label-value value-current-option\">";
        // line 188
        yield CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "product_option_value", [], "any", false, false, false, 188)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[0] ?? null) : null), "name", [], "any", false, false, false, 188);
        yield "</span>
                              </div>

                           </div>
                           <div class=\"variant-picker-values mt-3\">
                              ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "product_option_value", [], "any", false, false, false, 193));
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
            // line 194
            yield "                              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["option"] ?? null), "type", [], "any", false, false, false, 194) == "select")) {
                // line 195
                yield "                              <span class=\"size-btn ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 195)) {
                    yield "active";
                }
                yield "\" data-size=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 195);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 195);
                yield "</span>
                              ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 196
($context["option"] ?? null), "type", [], "any", false, false, false, 196) == "radio")) {
                // line 197
                yield "                              <div class=\"hover-tooltip tooltip-bot color-btn";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 197)) {
                    yield " active";
                }
                yield "\" data-color=\"";
                yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 197));
                yield "\">
                                 <span class=\"check-color bg-color-option\"></span>
                                 <span class=\"tooltip\">";
                // line 199
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 199);
                yield "</span>
                              </div>
                              ";
            }
            // line 202
            yield "                              ";
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
        // line 203
        yield "                           </div>
                        </div>
                     </div>


                     <div class=\"tf-product-total-quantity\">
                        <div class=\"group-btn\">
                           <div class=\"wg-quantity\">
                              <button class=\"btn-quantity btn-decrease\">
                              <i class=\"icon icon-minus\"></i>
                              </button>
                              <input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"";
        // line 214
        yield ($context["minimum"] ?? null);
        yield "\">
                              <button class=\"btn-quantity btn-increase\">
                              <i class=\"icon icon-plus\"></i>
                              </button>
                           </div>
                           <button type=\"submit\" id=\"button-cart\" class=\"tf-btn animate-btn btn-add-to-cart\">
                           ADD TO CART
                           <i class=\"icon icon-shopping-cart-simple\"></i>
                           </button>
                           <button type=\"button\" class=\"hover-tooltip box-icon btn-add-wishlist\" data-url=\"index.php?route=account/wishlist.add&language=";
        // line 223
        yield ($context["language"] ?? null);
        yield "\" data-product-id=\"";
        yield ($context["product_id"] ?? null);
        yield "\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </button>
                        </div>
                        <a href=\"checkout.html\" class=\"tf-btn btn-outline w-100\">BUY IT NOW</a>
                     </div>


                     <div class=\"tf-product-extra-link\">
                        <a href=\"#compareColor\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
                        <i class=\"icon icon-swatches\"></i>Compare color
                        </a>
                        <a href=\"#askQuestion\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
                        <i class=\"icon icon-ques\"></i>Ask a question
                        </a>
                        <a href=\"#shipAndDelivery\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
                        <i class=\"icon icon-truck\"></i>Delivery & Return
                        </a>
                        <a href=\"#shareWith\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
                        <i class=\"icon icon-share\"></i>Share
                        </a>
                     </div>
                     <div class=\"tf-product-delivery-return\">
                        <div class=\"product-delivery\">
                           <div class=\"icon icon-clock-cd\"></div>
                           <p class=\"h6\">Estimate delivery times: <span class=\"fw-7 text-black\">7-20 days</span> (International),
                              <span class=\"fw-7 text-black\">2-4 days</span> (United States).
                           </p>
                        </div>
                        <div class=\"product-delivery return\">
                           <div class=\"icon icon-compare\"></div>
                           <p class=\"h6\">Return within <span class=\"fw-7 text-black\">30 days</span> of purchase. Duties & taxes are
                              non-refundable.
                           </p>
                        </div>
                     </div>
                     <div class=\"tf-product-trust-seal\">
                        <p class=\"h6 text-seal\">Guarantee Safe Checkout:</p>
                        <ul class=\"list-card\">
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/visa.png\" alt=\"card\">
                           </li>
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/master-card.png\" alt=\"card\">
                           </li>
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/amex.png\" alt=\"card\">
                           </li>
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/discover.png\" alt=\"card\">
                           </li>
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/paypal.png\" alt=\"card\">
                           </li>
                        </ul>
                     </div>
                     <ul class=\"tf-product-cate-sku\">
                        <li class=\"item-cate-sku h6\">
                           <span class=\"label fw-6 text-black\">SKU:</span>
                           <a href=\"#\" class=\"value link text-main-2\">Themesflat_#KT_Yellow_7</a>
                        </li>
                        <li class=\"item-cate-sku h6\">
                           <span class=\"label fw-6 text-black\">Categories:</span>
                           <span class=\"value text-main-2\">Daily Wear Rings, Ring diamond, Anniversary rings, Solitaire Rings, Half
                           Eternity Rings</span>
                        </li>
                     </ul>
                  </div>
                  </form>
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
        // line 305
        yield ($context["thumb"] ?? null);
        yield "\"
                        src=\"";
        // line 306
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"img-product\">
                  </div>
                  <div class=\"tf-mini-cart-info\">
                     <h6 class=\"title\">
                        <a href=\"product-detail.html\" class=\"link text-line-clamp-1\">";
        // line 310
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
        // line 318
        yield ($context["price"] ?? null);
        yield "
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"tf-sticky-atc-infos\">
               <form class=\"\">
                  ";
        // line 325
        if ((($context["options"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["options"] ?? null)) > 0))) {
            // line 326
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 327
                yield "                  ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 327) == "select") && CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 327)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 327)) > 0))) {
                    // line 328
                    yield "                  <div class=\"tf-sticky-atc-variant-price\">
                     <h6 class=\"title\">";
                    // line 329
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 329);
                    yield ":</h6>
                     <div class=\"tf-select style-1\">
                        <select class=\"font-sora\" name=\"option[";
                    // line 331
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 331);
                    yield "]\">
                           ";
                    // line 332
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 332));
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
                        // line 333
                        yield "                           <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 333);
                        yield "\"";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 333)) {
                            yield " selected=\"selected\"";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 333);
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
                    // line 335
                    yield "                        </select>
                     </div>
                  </div>
                  ";
                }
                // line 339
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            yield "                  ";
        }
        // line 341
        yield "                  <div class=\"tf-product-info-quantity\">
                     <h6 class=\"title\">Quantity:</h6>
                     <div class=\"wg-quantity\">
                        <button class=\"btn-quantity minus-btn\">
                        <i class=\"icon icon-minus\"></i>
                        </button>
                        <input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"";
        // line 347
        yield ($context["minimum"] ?? null);
        yield "\">
                        <button class=\"btn-quantity plus-btn\">
                        <i class=\"icon icon-plus\"></i>
                        </button>
                     </div>
                  </div>
                  <div class=\"tf-sticky-atc-btns\">
                     <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"tf-btn animate-btn btn-add-to-cart\" data-url=\"index.php?route=checkout/cart.add&language=";
        // line 354
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
        // line 385
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
        // line 573
        yield ($context["column_left"] ?? null);
        yield "
                                    <div id=\"content\" class=\"col\">
                                       ";
        // line 575
        yield ($context["content_top"] ?? null);
        yield "
                                       <div class=\"row mb-3\">
                                          ";
        // line 577
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 578
            yield "                                          <div class=\"col-sm\">
                                             <div class=\"image magnific-popup\">
                                                ";
            // line 580
            if (($context["thumb"] ?? null)) {
                // line 581
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
            // line 583
            yield "                                                ";
            if (($context["images"] ?? null)) {
                // line 584
                yield "                                                <div>
                                                   ";
                // line 585
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 586
                    yield "                                                   <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 586);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 586);
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
                // line 588
                yield "                                                </div>
                                                ";
            }
            // line 590
            yield "                                             </div>
                                          </div>
                                          ";
        }
        // line 593
        yield "                                          <div class=\"col-sm\">
                                             <h1>";
        // line 594
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                                             <ul class=\"list-unstyled\">
                                                ";
        // line 596
        if (($context["manufacturer"] ?? null)) {
            // line 597
            yield "                                                <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield " <a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></li>
                                                ";
        }
        // line 599
        yield "                                                <li>";
        yield ($context["text_model"] ?? null);
        yield " ";
        yield ($context["model"] ?? null);
        yield "</li>
                                                ";
        // line 600
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_code"]) {
            // line 601
            yield "                                                <li>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 601);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 601);
            yield "</li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_code'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 603
        yield "                                                ";
        if (($context["reward"] ?? null)) {
            // line 604
            yield "                                                <li>";
            yield ($context["text_reward"] ?? null);
            yield " ";
            yield ($context["reward"] ?? null);
            yield "</li>
                                                ";
        }
        // line 606
        yield "                                                <li>";
        yield ($context["text_stock"] ?? null);
        yield " ";
        yield ($context["stock"] ?? null);
        yield "</li>
                                             </ul>
                                             ";
        // line 608
        if (($context["review_status"] ?? null)) {
            // line 609
            yield "                                             <div class=\"rating\">
                                                <p>
                                                   ";
            // line 611
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 612
                yield "                                                   ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 613
                    yield "                                                   <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                                                   ";
                } else {
                    // line 615
                    yield "                                                   <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                                                   ";
                }
                // line 617
                yield "                                                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 618
            yield "                                                   <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_reviews"] ?? null);
            yield "</a> / <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_write"] ?? null);
            yield "</a>
                                                </p>
                                             </div>
                                             ";
        }
        // line 622
        yield "                                             ";
        if (($context["price"] ?? null)) {
            // line 623
            yield "                                             <ul class=\"list-unstyled\">
                                                ";
            // line 624
            if ( !($context["special"] ?? null)) {
                // line 625
                yield "                                                <li>
                                                   <h2><span class=\"price-new\">";
                // line 626
                yield ($context["price"] ?? null);
                yield "</span></h2>
                                                </li>
                                                ";
            } else {
                // line 629
                yield "                                                <li><span class=\"price-old\">";
                yield ($context["price"] ?? null);
                yield "</span></li>
                                                <li>
                                                   <h2><span class=\"price-new\">";
                // line 631
                yield ($context["special"] ?? null);
                yield "</span></h2>
                                                </li>
                                                ";
            }
            // line 634
            yield "                                                ";
            if (($context["tax"] ?? null)) {
                // line 635
                yield "                                                <li>";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</li>
                                                ";
            }
            // line 637
            yield "                                                ";
            if (($context["points"] ?? null)) {
                // line 638
                yield "                                                <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
                                                ";
            }
            // line 640
            yield "                                                ";
            if (($context["discounts"] ?? null)) {
                // line 641
                yield "                                                <li>
                                                   <hr>
                                                </li>
                                                ";
                // line 644
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 645
                    yield "                                                <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 645);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 645);
                    yield "</li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 647
                yield "                                                ";
            }
            // line 648
            yield "                                             </ul>
                                             ";
        }
        // line 650
        yield "                                             <form method=\"post\" data-oc-toggle=\"ajax\">
                                                <div class=\"btn-group\">
                                                   ";
        // line 652
        if ( !($context["logged"] ?? null)) {
            // line 653
            yield "                                                   <button  class=\"btn btn-light btn-lg offline-wishlist\" title=\"";
            yield ($context["button_wishlist"] ?? null);
            yield "\">wishlist off</button>
                                                   ";
        } else {
            // line 655
            yield "                                                   <button type=\"submit\" formaction=\"";
            yield ($context["wishlist_add"] ?? null);
            yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
            yield ($context["button_wishlist"] ?? null);
            yield "\">wishlist</button>
                                                   ";
        }
        // line 657
        yield "                                                   <button type=\"submit\" formaction=\"";
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
                                                </div>
                                                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 659
        yield ($context["product_id"] ?? null);
        yield "\"/>
                                             </form>
                                             <br/>
                                             <div id=\"product\">
                                                <form id=\"form-product\">
                                                   ";
        // line 664
        if (($context["options"] ?? null)) {
            // line 665
            yield "                                                   <hr>
                                                   <h3>";
            // line 666
            yield ($context["text_option"] ?? null);
            yield "</h3>
                                                   <div>
                                                      ";
            // line 668
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 669
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 669) == "select")) {
                    // line 670
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 670)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 671
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 671);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 671);
                    yield "</label>
                                                         <select name=\"option[";
                    // line 672
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 672);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 672);
                    yield "\" class=\"form-select\">
                                                            <option value=\"\">";
                    // line 673
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                                                            ";
                    // line 674
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 674));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 675
                        yield "                                                            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 675);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 675);
                        yield "
                                                               ";
                        // line 676
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 676)) {
                            // line 677
                            yield "                                                               (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 677);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 677);
                            yield ")
                                                               ";
                        }
                        // line 679
                        yield "                                                            </option>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 681
                    yield "                                                         </select>
                                                         <div id=\"error-option-";
                    // line 682
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 682);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 685
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 685) == "radio")) {
                    // line 686
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 686)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label class=\"form-label\">";
                    // line 687
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 687);
                    yield "</label>
                                                         <div id=\"input-option-";
                    // line 688
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 688);
                    yield "\">
                                                            ";
                    // line 689
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 689));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 690
                        yield "                                                            <div class=\"form-check\">
                                                               <input type=\"radio\" name=\"option[";
                        // line 691
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 691);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 691);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 691);
                        yield "\" class=\"form-check-input\"/>
                                                               <label for=\"input-option-value-";
                        // line 692
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 692);
                        yield "\" class=\"form-check-label\">
                                                               ";
                        // line 693
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 693)) {
                            // line 694
                            yield "                                                               <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 694);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 694);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 694)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 694);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 694);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 695
                        yield "                                                               ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 695);
                        yield "
                                                               ";
                        // line 696
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 696)) {
                            // line 697
                            yield "                                                               (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 697);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 697);
                            yield ")
                                                               ";
                        }
                        // line 698
                        yield "</label>
                                                            </div>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 701
                    yield "                                                         </div>
                                                         <div id=\"error-option-";
                    // line 702
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 702);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 705
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 705) == "checkbox")) {
                    // line 706
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 706)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label class=\"form-label\">";
                    // line 707
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 707);
                    yield "</label>
                                                         <div id=\"input-option-";
                    // line 708
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 708);
                    yield "\">
                                                            ";
                    // line 709
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 709));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 710
                        yield "                                                            <div class=\"form-check\">
                                                               <input type=\"checkbox\" name=\"option[";
                        // line 711
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 711);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 711);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 711);
                        yield "\" class=\"form-check-input\"/> 
                                                               <label for=\"input-option-value-";
                        // line 712
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 712);
                        yield "\" class=\"form-check-label\">
                                                               ";
                        // line 713
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 713)) {
                            // line 714
                            yield "                                                               <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 714);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 714);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 714)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 714);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 714);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 715
                        yield "                                                               ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 715);
                        yield "
                                                               ";
                        // line 716
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 716)) {
                            // line 717
                            yield "                                                               (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 717);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 717);
                            yield ")
                                                               ";
                        }
                        // line 718
                        yield "</label>
                                                            </div>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 721
                    yield "                                                         </div>
                                                         <div id=\"error-option-";
                    // line 722
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 722);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 725
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 725) == "text")) {
                    // line 726
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 726)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 727
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 727);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 727);
                    yield "</label> <input type=\"text\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 727);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 727);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 727);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 727);
                    yield "\" class=\"form-control\"/>
                                                         <div id=\"error-option-";
                    // line 728
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 728);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 731
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 731) == "textarea")) {
                    // line 732
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 732)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 733
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 733);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 733);
                    yield "</label> 
                                                         <textarea name=\"option[";
                    // line 734
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 734);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 734);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 734);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 734);
                    yield "</textarea>
                                                         <div id=\"error-option-";
                    // line 735
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 735);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 738
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 738) == "file")) {
                    // line 739
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 739)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"button-upload-";
                    // line 740
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 740);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 740);
                    yield "</label>
                                                         <div>
                                                            <button type=\"button\" id=\"button-upload-";
                    // line 742
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 742);
                    yield "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 742);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                                                            <input type=\"hidden\" name=\"option[";
                    // line 743
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 743);
                    yield "]\" value=\"\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 743);
                    yield "\"/>
                                                         </div>
                                                         <div id=\"error-option-";
                    // line 745
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 745);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 748
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 748) == "date")) {
                    // line 749
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 749)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 750
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 750);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 750);
                    yield "</label>
                                                         <input type=\"date\" name=\"option[";
                    // line 751
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 751);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 751);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 751);
                    yield "\" class=\"form-control\"/>
                                                         <div id=\"error-option-";
                    // line 752
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 752);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 755
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 755) == "time")) {
                    // line 756
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 756)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 757
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 757);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 757);
                    yield "</label>
                                                         <input type=\"time\" name=\"option[";
                    // line 758
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 758);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 758);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 758);
                    yield "\" class=\"form-control\"/>
                                                         <div id=\"error-option-";
                    // line 759
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 759);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 762
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 762) == "datetime")) {
                    // line 763
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 763)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 764
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 764);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 764);
                    yield "</label>
                                                         <input type=\"datetime-local\" name=\"option[";
                    // line 765
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 765);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 765);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 765);
                    yield "\" class=\"form-control\"/>
                                                         <div id=\"error-option-";
                    // line 766
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 766);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 769
                yield "                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 770
            yield "                                                   </div>
                                                   ";
        }
        // line 772
        yield "                                                   ";
        if (($context["subscription_plans"] ?? null)) {
            // line 773
            yield "                                                   <hr/>
                                                   <h3>";
            // line 774
            yield ($context["text_subscription"] ?? null);
            yield "</h3>
                                                   <div class=\"mb-3 required\">
                                                      <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                                                         <option value=\"\">";
            // line 777
            yield ($context["text_select"] ?? null);
            yield "</option>
                                                         ";
            // line 778
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 779
                yield "                                                         <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 779);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 779);
                yield "</option>
                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 781
            yield "                                                      </select>
                                                      ";
            // line 782
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 783
                yield "                                                      <div id=\"subscription-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 783);
                yield "\" class=\"form-text subscription d-none\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 783);
                yield "</div>
                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 785
            yield "                                                      <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                                                   </div>
                                                   ";
        }
        // line 788
        yield "                                                   <div class=\"mb-3\">
                                                      <div class=\"input-group\">
                                                         <div class=\"input-group-text\">";
        // line 790
        yield ($context["entry_qty"] ?? null);
        yield "</div>
                                                         <input type=\"text\" name=\"quantity\" value=\"";
        // line 791
        yield ($context["minimum"] ?? null);
        yield "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                                                         <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 792
        yield ($context["button_cart"] ?? null);
        yield "</button>
                                                      </div>
                                                      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 794
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
                                                      <div id=\"error-quantity\" class=\"form-text\"></div>
                                                   </div>
                                                   ";
        // line 797
        if ((($context["minimum"] ?? null) > 1)) {
            // line 798
            yield "                                                   <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
                                                   ";
        }
        // line 800
        yield "                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                       <ul class=\"nav nav-tabs\">
                                          <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 805
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
                                          ";
        // line 806
        if (($context["attribute_groups"] ?? null)) {
            // line 807
            yield "                                          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_attribute"] ?? null);
            yield "</a></li>
                                          ";
        }
        // line 809
        yield "                                          ";
        if (($context["review_status"] ?? null)) {
            // line 810
            yield "                                          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_review"] ?? null);
            yield "</a></li>
                                          ";
        }
        // line 812
        yield "                                       </ul>
                                       <div class=\"tab-content\">
                                          <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">
                                             ";
        // line 815
        yield ($context["description"] ?? null);
        yield "
                                             ";
        // line 816
        if (($context["tags"] ?? null)) {
            // line 817
            yield "                                             <p>";
            yield ($context["text_tags"] ?? null);
            yield "
                                                ";
            // line 818
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
                // line 819
                yield "                                                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 819);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 819);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 819)) {
                    yield ",";
                }
                // line 820
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
            // line 821
            yield "                                             </p>
                                             ";
        }
        // line 823
        yield "                                          </div>
                                          ";
        // line 824
        if (($context["attribute_groups"] ?? null)) {
            // line 825
            yield "                                          <div id=\"tab-specification\" class=\"tab-pane fade\">
                                             <div class=\"table-responsive\">
                                                <table class=\"table table-bordered\">
                                                   ";
            // line 828
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 829
                yield "                                                   <thead>
                                                      <tr>
                                                         <td colspan=\"2\"><strong>";
                // line 831
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 831);
                yield "</strong></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      ";
                // line 835
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 835));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 836
                    yield "                                                      <tr>
                                                         <td>";
                    // line 837
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 837);
                    yield "</td>
                                                         <td>";
                    // line 838
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 838);
                    yield "</td>
                                                      </tr>
                                                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 841
                yield "                                                   </tbody>
                                                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 843
            yield "                                                </table>
                                             </div>
                                          </div>
                                          ";
        }
        // line 847
        yield "                                          ";
        if (($context["review_status"] ?? null)) {
            // line 848
            yield "                                          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            yield ($context["review"] ?? null);
            yield "</div>
                                          ";
        }
        // line 850
        yield "                                       </div>
                                       ";
        // line 851
        yield ($context["related"] ?? null);
        yield "
                                       ";
        // line 852
        yield ($context["content_bottom"] ?? null);
        yield "
                                    </div>
                                    ";
        // line 854
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
        // line 1171
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
<script type=\"text/javascript\"><!--
   // Handle option selection
   \$(document).on('click', '.size-btn', function() {
       var size = \$(this).data('size');
       
       // Update the label
       \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(size);
       
       // Update active state
       \$(this).siblings().removeClass('active');
       \$(this).addClass('active');
   });
   
   \$(document).on('click', '.color-btn', function() {
       var color = \$(this).data('color');
       
       // Update the label
       \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(color);
       
       // Update active state
       \$(this).siblings().removeClass('active');
       \$(this).addClass('active');
   });
   
   \$('#input-subscription').on('change', function(e) {
       var element = this;
   
       \$('.subscription').addClass('d-none');
   
       \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
   });
   
   \$('#form-product').on('submit', function(e) {
       e.preventDefault();
   
       \$.ajax({
           url: 'index.php?route=checkout/cart.add&language=";
        // line 1468
        yield ($context["language"] ?? null);
        yield "',
           type: 'post',
           data: \$('#form-product').serialize(),
           dataType: 'json',
           contentType: 'application/x-www-form-urlencoded',
           cache: false,
           processData: false,
           beforeSend: function() {
               \$('#button-cart').button('loading');
           },
           complete: function() {
               \$('#button-cart').button('reset');
           },
           success: function(json) {
               console.log(json);
   
               \$('#form-product').find('.is-invalid').removeClass('is-invalid');
               \$('#form-product').find('.invalid-feedback').removeClass('d-block');
   
               if (json['error']) {
                   for (key in json['error']) {
                       \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                       \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                   }
               }
   
               if (json['success']) {
                   // ✅ Show success alert
                   \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
   
                   // ✅ Load updated cart HTML into your offcanvas cart wrapper
                   \$('.tf-mini-cart-wrap').load('index.php?route=common/cart.info&language=";
        // line 1499
        yield ($context["language"] ?? null);
        yield "', function() {
                       // ✅ Once loaded, open the cart drawer
                       var cartDrawer = new bootstrap.Offcanvas(document.getElementById('shoppingCart'));
                       cartDrawer.show();
                   });
                   \$(\".count\").text(json['count']);
               }
           },
           error: function(xhr, ajaxOptions, thrownError) {
               console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
           }
       });
   });
   
   
   \$(document).on('click', '.offline-wishlist', function (e) {
       e.preventDefault();
   
       // Get the product ID
       const productId = \$('#input-product-id').val();
   
       // Get existing wishlist from localStorage or initialize it
       let wishlist = JSON.parse(localStorage.getItem('offline_wishlist')) || [];
   
       // Add only if not already in wishlist
       if (!wishlist.includes(productId)) {
           wishlist.push(productId);
           localStorage.setItem('offline_wishlist', JSON.stringify(wishlist));
           \$('.wishlist-count').text(JSON.parse(localStorage.getItem('offline_wishlist'))?.length || 0);
   
       } else {
           alert('Product already in your offline wishlist.');
       }
   });
   
   
   
   //-->
</script>
";
        // line 1538
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
        return array (  2653 => 1538,  2611 => 1499,  2577 => 1468,  2277 => 1171,  1957 => 854,  1952 => 852,  1948 => 851,  1945 => 850,  1939 => 848,  1936 => 847,  1930 => 843,  1923 => 841,  1914 => 838,  1910 => 837,  1907 => 836,  1903 => 835,  1896 => 831,  1892 => 829,  1888 => 828,  1883 => 825,  1881 => 824,  1878 => 823,  1874 => 821,  1860 => 820,  1851 => 819,  1834 => 818,  1829 => 817,  1827 => 816,  1823 => 815,  1818 => 812,  1812 => 810,  1809 => 809,  1803 => 807,  1801 => 806,  1797 => 805,  1790 => 800,  1784 => 798,  1782 => 797,  1776 => 794,  1771 => 792,  1767 => 791,  1763 => 790,  1759 => 788,  1754 => 785,  1743 => 783,  1739 => 782,  1736 => 781,  1725 => 779,  1721 => 778,  1717 => 777,  1711 => 774,  1708 => 773,  1705 => 772,  1701 => 770,  1695 => 769,  1689 => 766,  1681 => 765,  1675 => 764,  1668 => 763,  1665 => 762,  1659 => 759,  1651 => 758,  1645 => 757,  1638 => 756,  1635 => 755,  1629 => 752,  1621 => 751,  1615 => 750,  1608 => 749,  1605 => 748,  1599 => 745,  1592 => 743,  1578 => 742,  1571 => 740,  1564 => 739,  1561 => 738,  1555 => 735,  1545 => 734,  1539 => 733,  1532 => 732,  1529 => 731,  1523 => 728,  1509 => 727,  1502 => 726,  1499 => 725,  1493 => 722,  1490 => 721,  1482 => 718,  1475 => 717,  1473 => 716,  1468 => 715,  1455 => 714,  1453 => 713,  1449 => 712,  1441 => 711,  1438 => 710,  1434 => 709,  1430 => 708,  1426 => 707,  1419 => 706,  1416 => 705,  1410 => 702,  1407 => 701,  1399 => 698,  1392 => 697,  1390 => 696,  1385 => 695,  1372 => 694,  1370 => 693,  1366 => 692,  1358 => 691,  1355 => 690,  1351 => 689,  1347 => 688,  1343 => 687,  1336 => 686,  1333 => 685,  1327 => 682,  1324 => 681,  1317 => 679,  1310 => 677,  1308 => 676,  1301 => 675,  1297 => 674,  1293 => 673,  1287 => 672,  1281 => 671,  1274 => 670,  1271 => 669,  1267 => 668,  1262 => 666,  1259 => 665,  1257 => 664,  1249 => 659,  1241 => 657,  1233 => 655,  1227 => 653,  1225 => 652,  1221 => 650,  1217 => 648,  1214 => 647,  1203 => 645,  1199 => 644,  1194 => 641,  1191 => 640,  1183 => 638,  1180 => 637,  1172 => 635,  1169 => 634,  1163 => 631,  1157 => 629,  1151 => 626,  1148 => 625,  1146 => 624,  1143 => 623,  1140 => 622,  1130 => 618,  1124 => 617,  1120 => 615,  1116 => 613,  1113 => 612,  1109 => 611,  1105 => 609,  1103 => 608,  1095 => 606,  1087 => 604,  1084 => 603,  1073 => 601,  1069 => 600,  1062 => 599,  1052 => 597,  1050 => 596,  1045 => 594,  1042 => 593,  1037 => 590,  1033 => 588,  1016 => 586,  1012 => 585,  1009 => 584,  1006 => 583,  992 => 581,  990 => 580,  986 => 578,  984 => 577,  979 => 575,  974 => 573,  783 => 385,  747 => 354,  737 => 347,  729 => 341,  726 => 340,  720 => 339,  714 => 335,  691 => 333,  674 => 332,  670 => 331,  665 => 329,  662 => 328,  659 => 327,  654 => 326,  652 => 325,  642 => 318,  631 => 310,  624 => 306,  620 => 305,  533 => 223,  521 => 214,  508 => 203,  494 => 202,  488 => 199,  478 => 197,  476 => 196,  465 => 195,  462 => 194,  445 => 193,  437 => 188,  433 => 187,  427 => 184,  423 => 182,  419 => 180,  413 => 179,  408 => 176,  394 => 175,  388 => 172,  378 => 170,  376 => 169,  365 => 168,  362 => 167,  345 => 166,  337 => 161,  333 => 160,  326 => 157,  323 => 156,  319 => 155,  316 => 154,  314 => 153,  304 => 146,  266 => 111,  262 => 109,  259 => 108,  253 => 107,  250 => 106,  240 => 104,  238 => 103,  229 => 102,  226 => 101,  223 => 100,  218 => 99,  216 => 98,  212 => 97,  200 => 87,  198 => 84,  195 => 80,  185 => 76,  181 => 75,  177 => 74,  173 => 73,  167 => 70,  164 => 69,  160 => 68,  153 => 63,  143 => 59,  139 => 58,  135 => 57,  130 => 54,  126 => 53,  121 => 50,  118 => 49,  115 => 48,  112 => 47,  109 => 46,  106 => 45,  103 => 44,  100 => 43,  82 => 26,  71 => 24,  67 => 23,  42 => 1,);
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
</style>

<!-- Page Title -->
<section class=\"s-page-title style-2\">
   <div class=\"container\">
      <div class=\"content\" style=\"padding-bottom: 19px;\">
         <ul class=\"breadcrumbs-page\">
            {% for breadcrumb in breadcrumbs %}
            <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
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
                     <input type=\"hidden\" id=\"input-product-id\" name=\"product_id\" value=\"{{ product_id }}\">
                     {% if options and options|length > 0 %}
                     {% for option in options %}
                     {% if option.product_option_value and option.product_option_value|length > 0 %}
                     {% if option.type == 'select' %}
                     <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.product_option_value[0].product_option_value_id }}\" id=\"input-option-{{ option.product_option_id }}\">
                     {% elseif option.type == 'radio' %}
                     <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.product_option_value[0].product_option_value_id }}\" id=\"input-option-{{ option.product_option_id }}\">
                     {% endif %}
                     {% endif %}
                     {% endfor %}
                     {% endif %}
                     <div class=\"tf-zoom-main sticky-top\"></div>
                  <div class=\"tf-product-info-list other-image-zoom\">
                     <h2 class=\"product-info-name\">{{ heading_title }}</h2>
                     <div class=\"product-info-meta\">
                        <div class=\"rating\">
                           <div class=\"d-flex gap-4\">
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                              <svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                 <path
                                    d=\"M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z\"
                                    fill=\"#EF9122\" />
                              </svg>
                           </div>
                           <div class=\"reviews text-main\">(3.671 review)</div>
                        </div>
                     </div>
                     <div class=\"tf-product-heading\">
                        <div class=\"product-info-price price-wrap\">
                           <span class=\"price-new price-on-sale h2 fw-4\">{{ price }}</span>
                          </div>
                     </div>

                     


                     {% if options and options|length > 0 %}
                     <div class=\"tf-product-variant\">
                        {% for option in options %}
                        {% if option.product_option_value and option.product_option_value|length > 0 %}
                        <div class=\"variant-picker-item variant-{{ option.type }}\">
                           <div class=\"variant-picker-label\">
                              <div class=\"h4 fw-semibold\">
                                 {{ option.name }}
                                 <span class=\"variant-picker-label-value value-current-option\">{{ option.product_option_value[0].name }}</span>
                              </div>
                             
                           </div>
                           <div class=\"variant-picker-values mt-3\">
                              {% for option_value in option.product_option_value %}
                              {% if option.type == 'select' %}
                              <span class=\"size-btn {% if loop.first %}active{% endif %}\" data-size=\"{{ option_value.name }}\">{{ option_value.name }}</span>
                              {% elseif option.type == 'radio' %}
                              <div class=\"hover-tooltip tooltip-bot color-btn{% if loop.first %} active{% endif %}\" data-color=\"{{ option_value.name|lower }}\">
                                 <span class=\"check-color bg-color-option\"></span>
                                 <span class=\"tooltip\">{{ option_value.name }}</span>
                              </div>
                              {% endif %}
                              {% endfor %}
                           </div>
                        </div>
                        {% endif %}
                        {% endfor %}
                     </div>
                     {% endif %}

                     <div class=\"tf-product-variant\">
                        <div class=\"variant-picker-item variant-{{ option.type }}\">
                           <div class=\"variant-picker-label\">
                              <div class=\"h4 fw-semibold\">
                                 {{ option.name }}
                                 <span class=\"variant-picker-label-value value-current-option\">{{ option.product_option_value[0].name }}</span>
                              </div>

                           </div>
                           <div class=\"variant-picker-values mt-3\">
                              {% for option_value in option.product_option_value %}
                              {% if option.type == 'select' %}
                              <span class=\"size-btn {% if loop.first %}active{% endif %}\" data-size=\"{{ option_value.name }}\">{{ option_value.name }}</span>
                              {% elseif option.type == 'radio' %}
                              <div class=\"hover-tooltip tooltip-bot color-btn{% if loop.first %} active{% endif %}\" data-color=\"{{ option_value.name|lower }}\">
                                 <span class=\"check-color bg-color-option\"></span>
                                 <span class=\"tooltip\">{{ option_value.name }}</span>
                              </div>
                              {% endif %}
                              {% endfor %}
                           </div>
                        </div>
                     </div>


                     <div class=\"tf-product-total-quantity\">
                        <div class=\"group-btn\">
                           <div class=\"wg-quantity\">
                              <button class=\"btn-quantity btn-decrease\">
                              <i class=\"icon icon-minus\"></i>
                              </button>
                              <input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"{{ minimum }}\">
                              <button class=\"btn-quantity btn-increase\">
                              <i class=\"icon icon-plus\"></i>
                              </button>
                           </div>
                           <button type=\"submit\" id=\"button-cart\" class=\"tf-btn animate-btn btn-add-to-cart\">
                           ADD TO CART
                           <i class=\"icon icon-shopping-cart-simple\"></i>
                           </button>
                           <button type=\"button\" class=\"hover-tooltip box-icon btn-add-wishlist\" data-url=\"index.php?route=account/wishlist.add&language={{ language }}\" data-product-id=\"{{ product_id }}\">
                           <span class=\"icon icon-heart\"></span>
                           <span class=\"tooltip\">Add to Wishlist</span>
                           </button>
                        </div>
                        <a href=\"checkout.html\" class=\"tf-btn btn-outline w-100\">BUY IT NOW</a>
                     </div>


                     <div class=\"tf-product-extra-link\">
                        <a href=\"#compareColor\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
                        <i class=\"icon icon-swatches\"></i>Compare color
                        </a>
                        <a href=\"#askQuestion\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
                        <i class=\"icon icon-ques\"></i>Ask a question
                        </a>
                        <a href=\"#shipAndDelivery\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
                        <i class=\"icon icon-truck\"></i>Delivery & Return
                        </a>
                        <a href=\"#shareWith\" data-bs-toggle=\"modal\" class=\"product-extra-icon link\">
                        <i class=\"icon icon-share\"></i>Share
                        </a>
                     </div>
                     <div class=\"tf-product-delivery-return\">
                        <div class=\"product-delivery\">
                           <div class=\"icon icon-clock-cd\"></div>
                           <p class=\"h6\">Estimate delivery times: <span class=\"fw-7 text-black\">7-20 days</span> (International),
                              <span class=\"fw-7 text-black\">2-4 days</span> (United States).
                           </p>
                        </div>
                        <div class=\"product-delivery return\">
                           <div class=\"icon icon-compare\"></div>
                           <p class=\"h6\">Return within <span class=\"fw-7 text-black\">30 days</span> of purchase. Duties & taxes are
                              non-refundable.
                           </p>
                        </div>
                     </div>
                     <div class=\"tf-product-trust-seal\">
                        <p class=\"h6 text-seal\">Guarantee Safe Checkout:</p>
                        <ul class=\"list-card\">
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/visa.png\" alt=\"card\">
                           </li>
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/master-card.png\" alt=\"card\">
                           </li>
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/amex.png\" alt=\"card\">
                           </li>
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/discover.png\" alt=\"card\">
                           </li>
                           <li class=\"card-item\">
                              <img src=\"assets/images/payment/paypal.png\" alt=\"card\">
                           </li>
                        </ul>
                     </div>
                     <ul class=\"tf-product-cate-sku\">
                        <li class=\"item-cate-sku h6\">
                           <span class=\"label fw-6 text-black\">SKU:</span>
                           <a href=\"#\" class=\"value link text-main-2\">Themesflat_#KT_Yellow_7</a>
                        </li>
                        <li class=\"item-cate-sku h6\">
                           <span class=\"label fw-6 text-black\">Categories:</span>
                           <span class=\"value text-main-2\">Daily Wear Rings, Ring diamond, Anniversary rings, Solitaire Rings, Half
                           Eternity Rings</span>
                        </li>
                     </ul>
                  </div>
                  </form>
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
                                             <div id=\"product\">
                                                <form id=\"form-product\">
                                                   {% if options %}
                                                   <hr>
                                                   <h3>{{ text_option }}</h3>
                                                   <div>
                                                      {% for option in options %}
                                                      {% if option.type == 'select' %}
                                                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                                         <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                                         <select name=\"option[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                                                            <option value=\"\">{{ text_select }}</option>
                                                            {% for option_value in option.product_option_value %}
                                                            <option value=\"{{ option_value.product_option_value_id }}\">{{ option_value.name }}
                                                               {% if option_value.price %}
                                                               ({{ option_value.price_prefix }}{{ option_value.price }})
                                                               {% endif %}
                                                            </option>
                                                            {% endfor %}
                                                         </select>
                                                         <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      {% endif %}
                                                      {% if option.type == 'radio' %}
                                                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                                         <label class=\"form-label\">{{ option.name }}</label>
                                                         <div id=\"input-option-{{ option.product_option_id }}\">
                                                            {% for option_value in option.product_option_value %}
                                                            <div class=\"form-check\">
                                                               <input type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/>
                                                               <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                                               {% if option_value.image %}
                                                               <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                                               {{ option_value.name }}
                                                               {% if option_value.price %}
                                                               ({{ option_value.price_prefix }}{{ option_value.price }})
                                                               {% endif %}</label>
                                                            </div>
                                                            {% endfor %}
                                                         </div>
                                                         <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      {% endif %}
                                                      {% if option.type == 'checkbox' %}
                                                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                                         <label class=\"form-label\">{{ option.name }}</label>
                                                         <div id=\"input-option-{{ option.product_option_id }}\">
                                                            {% for option_value in option.product_option_value %}
                                                            <div class=\"form-check\">
                                                               <input type=\"checkbox\" name=\"option[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/> 
                                                               <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                                               {% if option_value.image %}
                                                               <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                                               {{ option_value.name }}
                                                               {% if option_value.price %}
                                                               ({{ option_value.price_prefix }}{{ option_value.price }})
                                                               {% endif %}</label>
                                                            </div>
                                                            {% endfor %}
                                                         </div>
                                                         <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      {% endif %}
                                                      {% if option.type == 'text' %}
                                                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                                         <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <input type=\"text\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                                                         <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      {% endif %}
                                                      {% if option.type == 'textarea' %}
                                                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                                         <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> 
                                                         <textarea name=\"option[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ option.value }}</textarea>
                                                         <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      {% endif %}
                                                      {% if option.type == 'file' %}
                                                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                                         <label for=\"button-upload-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                                         <div>
                                                            <button type=\"button\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                                                            <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"\" id=\"input-option-{{ option.product_option_id }}\"/>
                                                         </div>
                                                         <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      {% endif %}
                                                      {% if option.type == 'date' %}
                                                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                                         <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                                         <input type=\"date\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                                                         <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      {% endif %}
                                                      {% if option.type == 'time' %}
                                                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                                         <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                                         <input type=\"time\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                                                         <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      {% endif %}
                                                      {% if option.type == 'datetime' %}
                                                      <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                                         <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                                         <input type=\"datetime-local\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                                                         <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      {% endif %}
                                                      {% endfor %}
                                                   </div>
                                                   {% endif %}
                                                   {% if subscription_plans %}
                                                   <hr/>
                                                   <h3>{{ text_subscription }}</h3>
                                                   <div class=\"mb-3 required\">
                                                      <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                                                         <option value=\"\">{{ text_select }}</option>
                                                         {% for subscription_plan in subscription_plans %}
                                                         <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name }}</option>
                                                         {% endfor %}
                                                      </select>
                                                      {% for subscription_plan in subscription_plans %}
                                                      <div id=\"subscription-description-{{ subscription_plan.subscription_plan_id }}\" class=\"form-text subscription d-none\">{{ subscription_plan.description }}</div>
                                                      {% endfor %}
                                                      <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                                                   </div>
                                                   {% endif %}
                                                   <div class=\"mb-3\">
                                                      <div class=\"input-group\">
                                                         <div class=\"input-group-text\">{{ entry_qty }}</div>
                                                         <input type=\"text\" name=\"quantity\" value=\"{{ minimum }}\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                                                         <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">{{ button_cart }}</button>
                                                      </div>
                                                      <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
                                                      <div id=\"error-quantity\" class=\"form-text\"></div>
                                                   </div>
                                                   {% if minimum > 1 %}
                                                   <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> {{ text_minimum }}</div>
                                                   {% endif %}
                                                </form>
                                             </div>
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
<script type=\"text/javascript\"><!--
   // Handle option selection
   \$(document).on('click', '.size-btn', function() {
       var size = \$(this).data('size');
       
       // Update the label
       \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(size);
       
       // Update active state
       \$(this).siblings().removeClass('active');
       \$(this).addClass('active');
   });
   
   \$(document).on('click', '.color-btn', function() {
       var color = \$(this).data('color');
       
       // Update the label
       \$(this).closest('.variant-picker-item').find('.variant-picker-label-value').text(color);
       
       // Update active state
       \$(this).siblings().removeClass('active');
       \$(this).addClass('active');
   });
   
   \$('#input-subscription').on('change', function(e) {
       var element = this;
   
       \$('.subscription').addClass('d-none');
   
       \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
   });
   
   \$('#form-product').on('submit', function(e) {
       e.preventDefault();
   
       \$.ajax({
           url: 'index.php?route=checkout/cart.add&language={{ language }}',
           type: 'post',
           data: \$('#form-product').serialize(),
           dataType: 'json',
           contentType: 'application/x-www-form-urlencoded',
           cache: false,
           processData: false,
           beforeSend: function() {
               \$('#button-cart').button('loading');
           },
           complete: function() {
               \$('#button-cart').button('reset');
           },
           success: function(json) {
               console.log(json);
   
               \$('#form-product').find('.is-invalid').removeClass('is-invalid');
               \$('#form-product').find('.invalid-feedback').removeClass('d-block');
   
               if (json['error']) {
                   for (key in json['error']) {
                       \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                       \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                   }
               }
   
               if (json['success']) {
                   // ✅ Show success alert
                   \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
   
                   // ✅ Load updated cart HTML into your offcanvas cart wrapper
                   \$('.tf-mini-cart-wrap').load('index.php?route=common/cart.info&language={{ language }}', function() {
                       // ✅ Once loaded, open the cart drawer
                       var cartDrawer = new bootstrap.Offcanvas(document.getElementById('shoppingCart'));
                       cartDrawer.show();
                   });
                   \$(\".count\").text(json['count']);
               }
           },
           error: function(xhr, ajaxOptions, thrownError) {
               console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
           }
       });
   });
   
   
   \$(document).on('click', '.offline-wishlist', function (e) {
       e.preventDefault();
   
       // Get the product ID
       const productId = \$('#input-product-id').val();
   
       // Get existing wishlist from localStorage or initialize it
       let wishlist = JSON.parse(localStorage.getItem('offline_wishlist')) || [];
   
       // Add only if not already in wishlist
       if (!wishlist.includes(productId)) {
           wishlist.push(productId);
           localStorage.setItem('offline_wishlist', JSON.stringify(wishlist));
           \$('.wishlist-count').text(JSON.parse(localStorage.getItem('offline_wishlist'))?.length || 0);
   
       } else {
           alert('Product already in your offline wishlist.');
       }
   });
   
   
   
   //-->
</script>
{{ footer }}", "catalog/view/template/product/product.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\product\\product.twig");
    }
}
