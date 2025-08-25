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
<!-- Page Title -->
<section class=\"s-page-title style-2\">
   <div class=\"container\">
      <div class=\"content\" style=\"padding-bottom: 19px;\">
         <ul class=\"breadcrumbs-page\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "            <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
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
        // line 27
        yield "                  ";
        $context["all_images"] = [];
        // line 28
        yield "                  ";
        if (($context["thumb"] ?? null)) {
            // line 29
            yield "                  ";
            $context["all_images"] = Twig\Extension\CoreExtension::merge(($context["all_images"] ?? null), [["thumb" => ($context["thumb"] ?? null), "popup" => ($context["popup"] ?? null)]]);
            // line 30
            yield "                  ";
        }
        // line 31
        yield "                  ";
        if (($context["images"] ?? null)) {
            // line 32
            yield "                  ";
            $context["all_images"] = Twig\Extension\CoreExtension::merge(($context["all_images"] ?? null), ($context["images"] ?? null));
            // line 33
            yield "                  ";
        }
        // line 34
        yield "                  <div class=\"product-thumbs-slider\">
                     <div dir=\"ltr\" class=\"swiper tf-product-media-thumbs other-image-zoom\" data-direction=\"vertical\" data-preview=\"4.7\">
                        <div class=\"swiper-wrapper stagger-wrap\">
                           ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 38
            yield "                           <div class=\"swiper-slide stagger-item\" data-size=\"M\" data-color=\"gray\">
                              <div class=\"item\">
                                 <img class=\"lazyload\"
                                    data-src=\"";
            // line 41
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 41);
            yield "\"
                                    src=\"";
            // line 42
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 42);
            yield "\"
                                    alt=\"";
            // line 43
            yield ($context["heading_title"] ?? null);
            yield "\">
                              </div>
                           </div>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                        </div>
                     </div>
                     <div class=\"flat-wrap-media-product\">
                        <div dir=\"ltr\" class=\"swiper tf-product-media-main\" id=\"gallery-swiper-started\">
                           <div class=\"swiper-wrapper\">
                              ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["all_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 53
            yield "                              <div class=\"swiper-slide\" data-size=\"M\" data-color=\"gray\">
                                 <a href=\"";
            // line 54
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 54);
            yield "\" target=\"_blank\" class=\"item\"
                                    data-pswp-width=\"860px\" data-pswp-height=\"1146px\">
                                 <img class=\"tf-image-zoom lazyload\"
                                    data-zoom=\"";
            // line 57
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 57);
            yield "\"
                                    data-src=\"";
            // line 58
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 58);
            yield "\"
                                    src=\"";
            // line 59
            yield CoreExtension::getAttribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 59);
            yield "\"
                                    alt=\"";
            // line 60
            yield ($context["heading_title"] ?? null);
            yield "\">
                                 </a>
                              </div>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['img'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                           </div>
                           ";
        // line 68
        yield "                           ";
        // line 71
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
        // line 81
        yield ($context["product_id"] ?? null);
        yield "\">
                  <div class=\"tf-zoom-main sticky-top\"></div>
                  <div class=\"tf-product-info-list other-image-zoom\">
                     <h2 class=\"product-info-name\">";
        // line 84
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
        // line 119
        yield ($context["price"] ?? null);
        yield "</span>
                          </div>
                     </div>

                     


                     <div class=\"tf-product-variant\">
                        <div class=\"variant-picker-item variant-size\">
                           <div class=\"variant-picker-label\">
                              <div class=\"h4 fw-semibold\">
                                 Size
                                 <span class=\"variant-picker-label-value value-currentSize\">medium</span>
                              </div>
                              <a href=\"#size-guide\" data-bs-toggle=\"modal\" class=\"size-guide link h6 fw-medium\">
                              <i class=\"icon icon-ruler\"></i>
                              Size Guide
                              </a>
                           </div>
                           <div class=\"variant-picker-values\">
                              <span class=\"size-btn\" data-size=\"XS\">XS</span>
                              <span class=\"size-btn\" data-size=\"S\">S</span>
                              <span class=\"size-btn\" data-size=\"M\">M</span>
                              <span class=\"size-btn\" data-size=\"L\">L</span>
                           </div>
                        </div>
                        <div class=\"variant-picker-item variant-color\">
                           <div class=\"variant-picker-label\">
                              <div class=\"h4 fw-semibold\">
                                 Colors
                                 <span class=\"variant-picker-label-value value-currentColor\">orange</span>
                              </div>
                           </div>
                           <div class=\"variant-picker-values\">
                              <div class=\"hover-tooltip tooltip-bot color-btn active\" data-color=\"blue\">
                                 <span class=\"check-color bg-blue-1\"></span>
                                 <span class=\"tooltip\">Blue</span>
                              </div>
                              <div class=\"hover-tooltip tooltip-bot color-btn\" data-color=\"gray\">
                                 <span class=\"check-color bg-caramel\"></span>
                                 <span class=\"tooltip\">Gray</span>
                              </div>
                              <div class=\"hover-tooltip tooltip-bot color-btn\" data-color=\"pink\">
                                 <span class=\"check-color bg-hot-pink\"></span>
                                 <span class=\"tooltip\">Pink</span>
                              </div>
                              <div class=\"hover-tooltip tooltip-bot color-btn\" data-color=\"green\">
                                 <span class=\"check-color bg-dark-jade\"></span>
                                 <span class=\"tooltip\">Green</span>
                              </div>
                              <div class=\"hover-tooltip tooltip-bot color-btn\" data-color=\"white\">
                                 <span class=\"check-color bg-white\"></span>
                                 <span class=\"tooltip\">White</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"tf-product-total-quantity\">
                        <div class=\"group-btn\">
                           <div class=\"wg-quantity\">
                              <button class=\"btn-quantity btn-decrease\">
                              <i class=\"icon icon-minus\"></i>
                              </button>
                              <input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"1\">
                              <button class=\"btn-quantity btn-increase\">
                              <i class=\"icon icon-plus\"></i>
                              </button>
                           </div>
                           <button type=\"submit\" id=\"button-cart\" class=\"tf-btn animate-btn btn-add-to-cart\">
                           ADD TO CART
                           <i class=\"icon icon-shopping-cart-simple\"></i>
                           </button>
                           <button type=\"button\" class=\"hover-tooltip box-icon btn-add-wishlist\" data-url=\"index.php?route=account/wishlist.add&language=";
        // line 191
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
               <div class=\"tf-mini-cart-item align-items-start\">
                  <div class=\"tf-mini-cart-image\">
                     <img class=\"lazyload\" data-src=\"assets/images/products/fashion/thumbs/thumbs-1.jpg\"
                        src=\"assets/images/products/fashion/thumbs/thumbs-1.jpg\" alt=\"img-product\">
                  </div>
                  <div class=\"tf-mini-cart-info\">
                     <h6 class=\"title\">
                        <a href=\"product-detail.html\" class=\"link text-line-clamp-1\">";
        // line 278
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
        // line 286
        yield ($context["price"] ?? null);
        yield "
                     </div>
                  </div>
               </div>
            </div>
            <div class=\"tf-sticky-atc-infos\">
               <form class=\"\">
                  <div class=\"tf-sticky-atc-variant-price\">
                     <h6 class=\"title\">Size:</h6>
                     <div class=\"tf-select style-1\">
                        <select class=\"font-sora\">
                           <option selected=\"selected\">M</option>
                           <option>S</option>
                           <option>L</option>
                           <option>XL</option>
                        </select>
                     </div>
                  </div>
                  <div class=\"tf-product-info-quantity\">
                     <h6 class=\"title\">Quantity:</h6>
                     <div class=\"wg-quantity\">
                        <button class=\"btn-quantity minus-btn\">
                        <i class=\"icon icon-minus\"></i>
                        </button>
                        <input class=\"quantity-product\" type=\"text\" name=\"number\" value=\"1\">
                        <button class=\"btn-quantity plus-btn\">
                        <i class=\"icon icon-plus\"></i>
                        </button>
                     </div>
                  </div>
                  <div class=\"tf-sticky-atc-btns\">
                     <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"tf-btn animate-btn btn-add-to-cart\">
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
                  <p class=\"h6 desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tortor commodo enim pulvinar
                     hendrerit. Mauris a leo rutrum lectus vehicula dignissim feugiat eu felis. Fusce libero est, commodo vitae
                     ultricies id, sollicitudin a augue. In finibus suscipit nulla, id bibendum diam fermentum sed. Suspendisse
                     potenti. Proin finibus turpis mauris, et fringilla ex scelerisque ut. Nam laoreet pulvinar lacus, eu suscipit
                     justo. Donec nec leo enim. Morbi lacinia varius mi, nec mattis felis rhoncus et. Donec ac facilisis arcu. Mauris
                     tristique lorem id velit mattis finibus. Sed a neque augue. Vestibulum metus lectus, ultricies id rhoncus iaculis,
                     accumsan a lectus. Duis viverra, risus sed egestas blandit, ante libero rutrum tortor, sed dignissim dolor nunc id
                     arcu.
                  </p>
                  <div class=\"list-infor tf-grid-layout md-col-2 xl-col-4\">
                     <div class=\"infor-item\">
                        <div class=\"h4 heading\">Diamond & Gemstones</div>
                        <ul>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Diamond type:</h6>
                              <div class=\"h6\">Type IIa</div>
                           </li>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Total Number:</h6>
                              <div class=\"h6\">01</div>
                           </li>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Total Weight:</h6>
                              <div class=\"h6\">0.5 ct</div>
                           </li>
                        </ul>
                     </div>
                     <div class=\"infor-item\">
                        <div class=\"h4 heading\">Dimensions</div>
                        <ul>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Length:</h6>
                              <div class=\"h6\">21.2 mm</div>
                           </li>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Width:</h6>
                              <div class=\"h6\">6 mm</div>
                           </li>
                        </ul>
                     </div>
                     <div class=\"infor-item\">
                        <div class=\"h4 heading\">Gold Weight</div>
                        <ul>
                           <li>
                              <h6 class=\"fw-6 text-black title\">1.98 gm</h6>
                           </li>
                        </ul>
                     </div>
                     <div class=\"infor-item\">
                        <div class=\"h4 heading\">Purity</div>
                        <ul>
                           <li>
                              <h6 class=\"fw-6 text-black title\">14KT</h6>
                           </li>
                        </ul>
                     </div>
                  </div>
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
        // line 589
        yield ($context["column_left"] ?? null);
        yield "
                                    <div id=\"content\" class=\"col\">
                                       ";
        // line 591
        yield ($context["content_top"] ?? null);
        yield "
                                       <div class=\"row mb-3\">
                                          ";
        // line 593
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 594
            yield "                                          <div class=\"col-sm\">
                                             <div class=\"image magnific-popup\">
                                                ";
            // line 596
            if (($context["thumb"] ?? null)) {
                // line 597
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
            // line 599
            yield "                                                ";
            if (($context["images"] ?? null)) {
                // line 600
                yield "                                                <div>
                                                   ";
                // line 601
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 602
                    yield "                                                   <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 602);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 602);
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
                // line 604
                yield "                                                </div>
                                                ";
            }
            // line 606
            yield "                                             </div>
                                          </div>
                                          ";
        }
        // line 609
        yield "                                          <div class=\"col-sm\">
                                             <h1>";
        // line 610
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                                             <ul class=\"list-unstyled\">
                                                ";
        // line 612
        if (($context["manufacturer"] ?? null)) {
            // line 613
            yield "                                                <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield " <a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></li>
                                                ";
        }
        // line 615
        yield "                                                <li>";
        yield ($context["text_model"] ?? null);
        yield " ";
        yield ($context["model"] ?? null);
        yield "</li>
                                                ";
        // line 616
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_code"]) {
            // line 617
            yield "                                                <li>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 617);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 617);
            yield "</li>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_code'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 619
        yield "                                                ";
        if (($context["reward"] ?? null)) {
            // line 620
            yield "                                                <li>";
            yield ($context["text_reward"] ?? null);
            yield " ";
            yield ($context["reward"] ?? null);
            yield "</li>
                                                ";
        }
        // line 622
        yield "                                                <li>";
        yield ($context["text_stock"] ?? null);
        yield " ";
        yield ($context["stock"] ?? null);
        yield "</li>
                                             </ul>
                                             ";
        // line 624
        if (($context["review_status"] ?? null)) {
            // line 625
            yield "                                             <div class=\"rating\">
                                                <p>
                                                   ";
            // line 627
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 628
                yield "                                                   ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 629
                    yield "                                                   <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                                                   ";
                } else {
                    // line 631
                    yield "                                                   <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
                                                   ";
                }
                // line 633
                yield "                                                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 634
            yield "                                                   <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_reviews"] ?? null);
            yield "</a> / <a href=\"#\" onclick=\"\$('a[href=\\'#tab-review\\']').tab('show'); return false;\">";
            yield ($context["text_write"] ?? null);
            yield "</a>
                                                </p>
                                             </div>
                                             ";
        }
        // line 638
        yield "                                             ";
        if (($context["price"] ?? null)) {
            // line 639
            yield "                                             <ul class=\"list-unstyled\">
                                                ";
            // line 640
            if ( !($context["special"] ?? null)) {
                // line 641
                yield "                                                <li>
                                                   <h2><span class=\"price-new\">";
                // line 642
                yield ($context["price"] ?? null);
                yield "</span></h2>
                                                </li>
                                                ";
            } else {
                // line 645
                yield "                                                <li><span class=\"price-old\">";
                yield ($context["price"] ?? null);
                yield "</span></li>
                                                <li>
                                                   <h2><span class=\"price-new\">";
                // line 647
                yield ($context["special"] ?? null);
                yield "</span></h2>
                                                </li>
                                                ";
            }
            // line 650
            yield "                                                ";
            if (($context["tax"] ?? null)) {
                // line 651
                yield "                                                <li>";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</li>
                                                ";
            }
            // line 653
            yield "                                                ";
            if (($context["points"] ?? null)) {
                // line 654
                yield "                                                <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
                                                ";
            }
            // line 656
            yield "                                                ";
            if (($context["discounts"] ?? null)) {
                // line 657
                yield "                                                <li>
                                                   <hr>
                                                </li>
                                                ";
                // line 660
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 661
                    yield "                                                <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 661);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 661);
                    yield "</li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 663
                yield "                                                ";
            }
            // line 664
            yield "                                             </ul>
                                             ";
        }
        // line 666
        yield "                                             <form method=\"post\" data-oc-toggle=\"ajax\">
                                                <div class=\"btn-group\">
                                                   ";
        // line 668
        if ( !($context["logged"] ?? null)) {
            // line 669
            yield "                                                   <button  class=\"btn btn-light btn-lg offline-wishlist\" title=\"";
            yield ($context["button_wishlist"] ?? null);
            yield "\">wishlist off</button>
                                                   ";
        } else {
            // line 671
            yield "                                                   <button type=\"submit\" formaction=\"";
            yield ($context["wishlist_add"] ?? null);
            yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
            yield ($context["button_wishlist"] ?? null);
            yield "\">wishlist</button>
                                                   ";
        }
        // line 673
        yield "                                                   <button type=\"submit\" formaction=\"";
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
                                                </div>
                                                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 675
        yield ($context["product_id"] ?? null);
        yield "\"/>
                                             </form>
                                             <br/>
                                             <div id=\"product\">
                                                <form id=\"form-product\">
                                                   ";
        // line 680
        if (($context["options"] ?? null)) {
            // line 681
            yield "                                                   <hr>
                                                   <h3>";
            // line 682
            yield ($context["text_option"] ?? null);
            yield "</h3>
                                                   <div>
                                                      ";
            // line 684
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 685
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 685) == "select")) {
                    // line 686
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 686)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 687
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 687);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 687);
                    yield "</label>
                                                         <select name=\"option[";
                    // line 688
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 688);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 688);
                    yield "\" class=\"form-select\">
                                                            <option value=\"\">";
                    // line 689
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                                                            ";
                    // line 690
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 690));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 691
                        yield "                                                            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 691);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 691);
                        yield "
                                                               ";
                        // line 692
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 692)) {
                            // line 693
                            yield "                                                               (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 693);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 693);
                            yield ")
                                                               ";
                        }
                        // line 695
                        yield "                                                            </option>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 697
                    yield "                                                         </select>
                                                         <div id=\"error-option-";
                    // line 698
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 698);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 701
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 701) == "radio")) {
                    // line 702
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 702)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label class=\"form-label\">";
                    // line 703
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 703);
                    yield "</label>
                                                         <div id=\"input-option-";
                    // line 704
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 704);
                    yield "\">
                                                            ";
                    // line 705
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 705));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 706
                        yield "                                                            <div class=\"form-check\">
                                                               <input type=\"radio\" name=\"option[";
                        // line 707
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 707);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 707);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 707);
                        yield "\" class=\"form-check-input\"/>
                                                               <label for=\"input-option-value-";
                        // line 708
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 708);
                        yield "\" class=\"form-check-label\">
                                                               ";
                        // line 709
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 709)) {
                            // line 710
                            yield "                                                               <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 710);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 710);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 710)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 710);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 710);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 711
                        yield "                                                               ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 711);
                        yield "
                                                               ";
                        // line 712
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 712)) {
                            // line 713
                            yield "                                                               (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 713);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 713);
                            yield ")
                                                               ";
                        }
                        // line 714
                        yield "</label>
                                                            </div>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 717
                    yield "                                                         </div>
                                                         <div id=\"error-option-";
                    // line 718
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 718);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 721
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 721) == "checkbox")) {
                    // line 722
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 722)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label class=\"form-label\">";
                    // line 723
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 723);
                    yield "</label>
                                                         <div id=\"input-option-";
                    // line 724
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 724);
                    yield "\">
                                                            ";
                    // line 725
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 725));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 726
                        yield "                                                            <div class=\"form-check\">
                                                               <input type=\"checkbox\" name=\"option[";
                        // line 727
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 727);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 727);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 727);
                        yield "\" class=\"form-check-input\"/> 
                                                               <label for=\"input-option-value-";
                        // line 728
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 728);
                        yield "\" class=\"form-check-label\">
                                                               ";
                        // line 729
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 729)) {
                            // line 730
                            yield "                                                               <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 730);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 730);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 730)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 730);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 730);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 731
                        yield "                                                               ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 731);
                        yield "
                                                               ";
                        // line 732
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 732)) {
                            // line 733
                            yield "                                                               (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 733);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 733);
                            yield ")
                                                               ";
                        }
                        // line 734
                        yield "</label>
                                                            </div>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 737
                    yield "                                                         </div>
                                                         <div id=\"error-option-";
                    // line 738
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 738);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 741
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 741) == "text")) {
                    // line 742
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 742)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 743
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 743);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 743);
                    yield "</label> <input type=\"text\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 743);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 743);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 743);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 743);
                    yield "\" class=\"form-control\"/>
                                                         <div id=\"error-option-";
                    // line 744
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 744);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 747
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 747) == "textarea")) {
                    // line 748
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 748)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 749
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 749);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 749);
                    yield "</label> 
                                                         <textarea name=\"option[";
                    // line 750
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 750);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 750);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 750);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 750);
                    yield "</textarea>
                                                         <div id=\"error-option-";
                    // line 751
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 751);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 754
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 754) == "file")) {
                    // line 755
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 755)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"button-upload-";
                    // line 756
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 756);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 756);
                    yield "</label>
                                                         <div>
                                                            <button type=\"button\" id=\"button-upload-";
                    // line 758
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 758);
                    yield "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 758);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                                                            <input type=\"hidden\" name=\"option[";
                    // line 759
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 759);
                    yield "]\" value=\"\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 759);
                    yield "\"/>
                                                         </div>
                                                         <div id=\"error-option-";
                    // line 761
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 761);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 764
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 764) == "date")) {
                    // line 765
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 765)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 766
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 766);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 766);
                    yield "</label>
                                                         <input type=\"date\" name=\"option[";
                    // line 767
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 767);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 767);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 767);
                    yield "\" class=\"form-control\"/>
                                                         <div id=\"error-option-";
                    // line 768
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 768);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 771
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 771) == "time")) {
                    // line 772
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 772)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 773
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 773);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 773);
                    yield "</label>
                                                         <input type=\"time\" name=\"option[";
                    // line 774
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 774);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 774);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 774);
                    yield "\" class=\"form-control\"/>
                                                         <div id=\"error-option-";
                    // line 775
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 775);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 778
                yield "                                                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 778) == "datetime")) {
                    // line 779
                    yield "                                                      <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 779)) {
                        yield " required";
                    }
                    yield "\">
                                                         <label for=\"input-option-";
                    // line 780
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 780);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 780);
                    yield "</label>
                                                         <input type=\"datetime-local\" name=\"option[";
                    // line 781
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 781);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 781);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 781);
                    yield "\" class=\"form-control\"/>
                                                         <div id=\"error-option-";
                    // line 782
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 782);
                    yield "\" class=\"invalid-feedback\"></div>
                                                      </div>
                                                      ";
                }
                // line 785
                yield "                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 786
            yield "                                                   </div>
                                                   ";
        }
        // line 788
        yield "                                                   ";
        if (($context["subscription_plans"] ?? null)) {
            // line 789
            yield "                                                   <hr/>
                                                   <h3>";
            // line 790
            yield ($context["text_subscription"] ?? null);
            yield "</h3>
                                                   <div class=\"mb-3 required\">
                                                      <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                                                         <option value=\"\">";
            // line 793
            yield ($context["text_select"] ?? null);
            yield "</option>
                                                         ";
            // line 794
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 795
                yield "                                                         <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 795);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 795);
                yield "</option>
                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 797
            yield "                                                      </select>
                                                      ";
            // line 798
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 799
                yield "                                                      <div id=\"subscription-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 799);
                yield "\" class=\"form-text subscription d-none\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 799);
                yield "</div>
                                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 801
            yield "                                                      <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                                                   </div>
                                                   ";
        }
        // line 804
        yield "                                                   <div class=\"mb-3\">
                                                      <div class=\"input-group\">
                                                         <div class=\"input-group-text\">";
        // line 806
        yield ($context["entry_qty"] ?? null);
        yield "</div>
                                                         <input type=\"text\" name=\"quantity\" value=\"";
        // line 807
        yield ($context["minimum"] ?? null);
        yield "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                                                         <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 808
        yield ($context["button_cart"] ?? null);
        yield "</button>
                                                      </div>
                                                      <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 810
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
                                                      <div id=\"error-quantity\" class=\"form-text\"></div>
                                                   </div>
                                                   ";
        // line 813
        if ((($context["minimum"] ?? null) > 1)) {
            // line 814
            yield "                                                   <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
                                                   ";
        }
        // line 816
        yield "                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                       <ul class=\"nav nav-tabs\">
                                          <li class=\"nav-item\"><a href=\"#tab-description\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 821
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
                                          ";
        // line 822
        if (($context["attribute_groups"] ?? null)) {
            // line 823
            yield "                                          <li class=\"nav-item\"><a href=\"#tab-specification\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_attribute"] ?? null);
            yield "</a></li>
                                          ";
        }
        // line 825
        yield "                                          ";
        if (($context["review_status"] ?? null)) {
            // line 826
            yield "                                          <li class=\"nav-item\"><a href=\"#tab-review\" data-bs-toggle=\"tab\" class=\"nav-link\">";
            yield ($context["tab_review"] ?? null);
            yield "</a></li>
                                          ";
        }
        // line 828
        yield "                                       </ul>
                                       <div class=\"tab-content\">
                                          <div id=\"tab-description\" class=\"tab-pane fade show active mb-4\">
                                             ";
        // line 831
        yield ($context["description"] ?? null);
        yield "
                                             ";
        // line 832
        if (($context["tags"] ?? null)) {
            // line 833
            yield "                                             <p>";
            yield ($context["text_tags"] ?? null);
            yield "
                                                ";
            // line 834
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
                // line 835
                yield "                                                <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 835);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 835);
                yield "</a>";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 835)) {
                    yield ",";
                }
                // line 836
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
            // line 837
            yield "                                             </p>
                                             ";
        }
        // line 839
        yield "                                          </div>
                                          ";
        // line 840
        if (($context["attribute_groups"] ?? null)) {
            // line 841
            yield "                                          <div id=\"tab-specification\" class=\"tab-pane fade\">
                                             <div class=\"table-responsive\">
                                                <table class=\"table table-bordered\">
                                                   ";
            // line 844
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 845
                yield "                                                   <thead>
                                                      <tr>
                                                         <td colspan=\"2\"><strong>";
                // line 847
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 847);
                yield "</strong></td>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      ";
                // line 851
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 851));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 852
                    yield "                                                      <tr>
                                                         <td>";
                    // line 853
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 853);
                    yield "</td>
                                                         <td>";
                    // line 854
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 854);
                    yield "</td>
                                                      </tr>
                                                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 857
                yield "                                                   </tbody>
                                                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 859
            yield "                                                </table>
                                             </div>
                                          </div>
                                          ";
        }
        // line 863
        yield "                                          ";
        if (($context["review_status"] ?? null)) {
            // line 864
            yield "                                          <div id=\"tab-review\" class=\"tab-pane fade mb-4\">";
            yield ($context["review"] ?? null);
            yield "</div>
                                          ";
        }
        // line 866
        yield "                                       </div>
                                       ";
        // line 867
        yield ($context["related"] ?? null);
        yield "
                                       ";
        // line 868
        yield ($context["content_bottom"] ?? null);
        yield "
                                    </div>
                                    ";
        // line 870
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
      <div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\"
         data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\"
         data-pagination-lg=\"4\">
         <div class=\"swiper-wrapper\">
            <!-- Product 1 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                     <img class=\"lazyload img-product\" src=\"assets/images/products/product-21.jpg\"
                        data-src=\"assets/images/products/product-21.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/product-22.jpg\" data-src=\"assets/images/products/product-22.jpg\"
                        alt=\"Product\">
                     </a>
                     <div class=\"variant-box\">
                        <ul class=\"product-size_list\">
                           <li class=\"size-item h6\">XS</li>
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
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Half sleeve crop top</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$119,99</span>
                        <span class=\"price-new h6\">\$84,99</span>
                     </div>
                     <ul class=\"product-color_list d-none\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Dark</span>
                           <span class=\"swatch-value bg-dark-charcoal\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-21.jpg\" data-src=\"assets/images/products/product-21.jpg\"
                              alt=\"Product\">
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
                     <img class=\"lazyload img-product\" src=\"assets/images/products/product-33.jpg\"
                        data-src=\"assets/images/products/product-33.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/product-34.jpg\" data-src=\"assets/images/products/product-34.jpg\"
                        alt=\"Product\">
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
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Summer two piece set</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$139,99</span>
                        <span class=\"price-new h6\">\$94,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Dark</span>
                           <span class=\"swatch-value bg-dark-charcoal\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-33.jpg\" data-src=\"assets/images/products/product-33.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-35.jpg\" data-src=\"assets/images/products/product-35.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Jade</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-36.jpg\" data-src=\"assets/images/products/product-36.jpg\"
                              alt=\"Product\">
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
                     <img class=\"lazyload img-product\" src=\"assets/images/products/product-37.jpg\"
                        data-src=\"assets/images/products/product-37.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/product-38.jpg\" data-src=\"assets/images/products/product-38.jpg\"
                        alt=\"Product\">
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
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Women's straight leg pants</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$69,99</span>
                        <span class=\"price-new h6\">\$44,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">White</span>
                           <span class=\"swatch-value bg-white\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-37.jpg\" data-src=\"assets/images/products/product-37.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Pink</span>
                           <span class=\"swatch-value bg-hot-pink\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-39.jpg\" data-src=\"assets/images/products/product-39.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-40.jpg\" data-src=\"assets/images/products/product-40.jpg\"
                              alt=\"Product\">
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
                     <img class=\"lazyload img-product\" src=\"assets/images/products/product-41.jpg\"
                        data-src=\"assets/images/products/product-41.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/product-42.jpg\" data-src=\"assets/images/products/product-42.jpg\"
                        alt=\"Product\">
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
                     <div class=\"variant-box\">
                        <ul class=\"product-size_list\">
                           <li class=\"size-item h6\">XS</li>
                           <li class=\"size-item h6\">S</li>
                           <li class=\"size-item h6\">M</li>
                           <li class=\"size-item h6\">L</li>
                        </ul>
                     </div>
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Short sleeve office shirt</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$129,99</span>
                        <span class=\"price-new h6\">\$89,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-41.jpg\" data-src=\"assets/images/products/product-41.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Black</span>
                           <span class=\"swatch-value bg-black\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-43.jpg\" data-src=\"assets/images/products/product-43.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Violet</span>
                           <span class=\"swatch-value bg-muted-violet\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-44.jpg\" data-src=\"assets/images/products/product-44.jpg\"
                              alt=\"Product\">
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
<!-- /Also Like -->
<!-- Related -->
<section class=\"flat-spacing-3 pt-0\">
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
   \$('#input-subscription').on('change', function(e) {
       var element = this;
   
       \$('.subscription').addClass('d-none');
   
       \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
   });
   
   \$('#form-product').on('submit', function(e) {
       e.preventDefault();
   
       \$.ajax({
           url: 'index.php?route=checkout/cart.add&language=";
        // line 1724
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
        // line 1755
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
        // line 1794
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
        return array (  2640 => 1794,  2598 => 1755,  2564 => 1724,  1707 => 870,  1702 => 868,  1698 => 867,  1695 => 866,  1689 => 864,  1686 => 863,  1680 => 859,  1673 => 857,  1664 => 854,  1660 => 853,  1657 => 852,  1653 => 851,  1646 => 847,  1642 => 845,  1638 => 844,  1633 => 841,  1631 => 840,  1628 => 839,  1624 => 837,  1610 => 836,  1601 => 835,  1584 => 834,  1579 => 833,  1577 => 832,  1573 => 831,  1568 => 828,  1562 => 826,  1559 => 825,  1553 => 823,  1551 => 822,  1547 => 821,  1540 => 816,  1534 => 814,  1532 => 813,  1526 => 810,  1521 => 808,  1517 => 807,  1513 => 806,  1509 => 804,  1504 => 801,  1493 => 799,  1489 => 798,  1486 => 797,  1475 => 795,  1471 => 794,  1467 => 793,  1461 => 790,  1458 => 789,  1455 => 788,  1451 => 786,  1445 => 785,  1439 => 782,  1431 => 781,  1425 => 780,  1418 => 779,  1415 => 778,  1409 => 775,  1401 => 774,  1395 => 773,  1388 => 772,  1385 => 771,  1379 => 768,  1371 => 767,  1365 => 766,  1358 => 765,  1355 => 764,  1349 => 761,  1342 => 759,  1328 => 758,  1321 => 756,  1314 => 755,  1311 => 754,  1305 => 751,  1295 => 750,  1289 => 749,  1282 => 748,  1279 => 747,  1273 => 744,  1259 => 743,  1252 => 742,  1249 => 741,  1243 => 738,  1240 => 737,  1232 => 734,  1225 => 733,  1223 => 732,  1218 => 731,  1205 => 730,  1203 => 729,  1199 => 728,  1191 => 727,  1188 => 726,  1184 => 725,  1180 => 724,  1176 => 723,  1169 => 722,  1166 => 721,  1160 => 718,  1157 => 717,  1149 => 714,  1142 => 713,  1140 => 712,  1135 => 711,  1122 => 710,  1120 => 709,  1116 => 708,  1108 => 707,  1105 => 706,  1101 => 705,  1097 => 704,  1093 => 703,  1086 => 702,  1083 => 701,  1077 => 698,  1074 => 697,  1067 => 695,  1060 => 693,  1058 => 692,  1051 => 691,  1047 => 690,  1043 => 689,  1037 => 688,  1031 => 687,  1024 => 686,  1021 => 685,  1017 => 684,  1012 => 682,  1009 => 681,  1007 => 680,  999 => 675,  991 => 673,  983 => 671,  977 => 669,  975 => 668,  971 => 666,  967 => 664,  964 => 663,  953 => 661,  949 => 660,  944 => 657,  941 => 656,  933 => 654,  930 => 653,  922 => 651,  919 => 650,  913 => 647,  907 => 645,  901 => 642,  898 => 641,  896 => 640,  893 => 639,  890 => 638,  880 => 634,  874 => 633,  870 => 631,  866 => 629,  863 => 628,  859 => 627,  855 => 625,  853 => 624,  845 => 622,  837 => 620,  834 => 619,  823 => 617,  819 => 616,  812 => 615,  802 => 613,  800 => 612,  795 => 610,  792 => 609,  787 => 606,  783 => 604,  766 => 602,  762 => 601,  759 => 600,  756 => 599,  742 => 597,  740 => 596,  736 => 594,  734 => 593,  729 => 591,  724 => 589,  418 => 286,  407 => 278,  315 => 191,  240 => 119,  202 => 84,  196 => 81,  184 => 71,  182 => 68,  179 => 64,  169 => 60,  165 => 59,  161 => 58,  157 => 57,  151 => 54,  148 => 53,  144 => 52,  137 => 47,  127 => 43,  123 => 42,  119 => 41,  114 => 38,  110 => 37,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  90 => 29,  87 => 28,  84 => 27,  66 => 10,  55 => 8,  51 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
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

                     


                     <div class=\"tf-product-variant\">
                        <div class=\"variant-picker-item variant-size\">
                           <div class=\"variant-picker-label\">
                              <div class=\"h4 fw-semibold\">
                                 Size
                                 <span class=\"variant-picker-label-value value-currentSize\">medium</span>
                              </div>
                              <a href=\"#size-guide\" data-bs-toggle=\"modal\" class=\"size-guide link h6 fw-medium\">
                              <i class=\"icon icon-ruler\"></i>
                              Size Guide
                              </a>
                           </div>
                           <div class=\"variant-picker-values\">
                              <span class=\"size-btn\" data-size=\"XS\">XS</span>
                              <span class=\"size-btn\" data-size=\"S\">S</span>
                              <span class=\"size-btn\" data-size=\"M\">M</span>
                              <span class=\"size-btn\" data-size=\"L\">L</span>
                           </div>
                        </div>
                        <div class=\"variant-picker-item variant-color\">
                           <div class=\"variant-picker-label\">
                              <div class=\"h4 fw-semibold\">
                                 Colors
                                 <span class=\"variant-picker-label-value value-currentColor\">orange</span>
                              </div>
                           </div>
                           <div class=\"variant-picker-values\">
                              <div class=\"hover-tooltip tooltip-bot color-btn active\" data-color=\"blue\">
                                 <span class=\"check-color bg-blue-1\"></span>
                                 <span class=\"tooltip\">Blue</span>
                              </div>
                              <div class=\"hover-tooltip tooltip-bot color-btn\" data-color=\"gray\">
                                 <span class=\"check-color bg-caramel\"></span>
                                 <span class=\"tooltip\">Gray</span>
                              </div>
                              <div class=\"hover-tooltip tooltip-bot color-btn\" data-color=\"pink\">
                                 <span class=\"check-color bg-hot-pink\"></span>
                                 <span class=\"tooltip\">Pink</span>
                              </div>
                              <div class=\"hover-tooltip tooltip-bot color-btn\" data-color=\"green\">
                                 <span class=\"check-color bg-dark-jade\"></span>
                                 <span class=\"tooltip\">Green</span>
                              </div>
                              <div class=\"hover-tooltip tooltip-bot color-btn\" data-color=\"white\">
                                 <span class=\"check-color bg-white\"></span>
                                 <span class=\"tooltip\">White</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class=\"tf-product-total-quantity\">
                        <div class=\"group-btn\">
                           <div class=\"wg-quantity\">
                              <button class=\"btn-quantity btn-decrease\">
                              <i class=\"icon icon-minus\"></i>
                              </button>
                              <input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"1\">
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
               <div class=\"tf-mini-cart-item align-items-start\">
                  <div class=\"tf-mini-cart-image\">
                     <img class=\"lazyload\" data-src=\"assets/images/products/fashion/thumbs/thumbs-1.jpg\"
                        src=\"assets/images/products/fashion/thumbs/thumbs-1.jpg\" alt=\"img-product\">
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
                  <div class=\"tf-sticky-atc-variant-price\">
                     <h6 class=\"title\">Size:</h6>
                     <div class=\"tf-select style-1\">
                        <select class=\"font-sora\">
                           <option selected=\"selected\">M</option>
                           <option>S</option>
                           <option>L</option>
                           <option>XL</option>
                        </select>
                     </div>
                  </div>
                  <div class=\"tf-product-info-quantity\">
                     <h6 class=\"title\">Quantity:</h6>
                     <div class=\"wg-quantity\">
                        <button class=\"btn-quantity minus-btn\">
                        <i class=\"icon icon-minus\"></i>
                        </button>
                        <input class=\"quantity-product\" type=\"text\" name=\"number\" value=\"1\">
                        <button class=\"btn-quantity plus-btn\">
                        <i class=\"icon icon-plus\"></i>
                        </button>
                     </div>
                  </div>
                  <div class=\"tf-sticky-atc-btns\">
                     <a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"tf-btn animate-btn btn-add-to-cart\">
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
                  <p class=\"h6 desc\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tortor commodo enim pulvinar
                     hendrerit. Mauris a leo rutrum lectus vehicula dignissim feugiat eu felis. Fusce libero est, commodo vitae
                     ultricies id, sollicitudin a augue. In finibus suscipit nulla, id bibendum diam fermentum sed. Suspendisse
                     potenti. Proin finibus turpis mauris, et fringilla ex scelerisque ut. Nam laoreet pulvinar lacus, eu suscipit
                     justo. Donec nec leo enim. Morbi lacinia varius mi, nec mattis felis rhoncus et. Donec ac facilisis arcu. Mauris
                     tristique lorem id velit mattis finibus. Sed a neque augue. Vestibulum metus lectus, ultricies id rhoncus iaculis,
                     accumsan a lectus. Duis viverra, risus sed egestas blandit, ante libero rutrum tortor, sed dignissim dolor nunc id
                     arcu.
                  </p>
                  <div class=\"list-infor tf-grid-layout md-col-2 xl-col-4\">
                     <div class=\"infor-item\">
                        <div class=\"h4 heading\">Diamond & Gemstones</div>
                        <ul>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Diamond type:</h6>
                              <div class=\"h6\">Type IIa</div>
                           </li>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Total Number:</h6>
                              <div class=\"h6\">01</div>
                           </li>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Total Weight:</h6>
                              <div class=\"h6\">0.5 ct</div>
                           </li>
                        </ul>
                     </div>
                     <div class=\"infor-item\">
                        <div class=\"h4 heading\">Dimensions</div>
                        <ul>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Length:</h6>
                              <div class=\"h6\">21.2 mm</div>
                           </li>
                           <li>
                              <h6 class=\"fw-6 text-black title\">Width:</h6>
                              <div class=\"h6\">6 mm</div>
                           </li>
                        </ul>
                     </div>
                     <div class=\"infor-item\">
                        <div class=\"h4 heading\">Gold Weight</div>
                        <ul>
                           <li>
                              <h6 class=\"fw-6 text-black title\">1.98 gm</h6>
                           </li>
                        </ul>
                     </div>
                     <div class=\"infor-item\">
                        <div class=\"h4 heading\">Purity</div>
                        <ul>
                           <li>
                              <h6 class=\"fw-6 text-black title\">14KT</h6>
                           </li>
                        </ul>
                     </div>
                  </div>
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
      <div dir=\"ltr\" class=\"swiper tf-swiper wrap-sw-over\" data-preview=\"4\" data-tablet=\"3\" data-mobile-sm=\"2\" data-mobile=\"2\"
         data-space-lg=\"48\" data-space-md=\"30\" data-space=\"12\" data-pagination=\"2\" data-pagination-sm=\"2\" data-pagination-md=\"3\"
         data-pagination-lg=\"4\">
         <div class=\"swiper-wrapper\">
            <!-- Product 1 -->
            <div class=\"swiper-slide\">
               <div class=\"card-product\">
                  <div class=\"card-product_wrapper\">
                     <a href=\"product-detail.html\" class=\"product-img\">
                     <img class=\"lazyload img-product\" src=\"assets/images/products/product-21.jpg\"
                        data-src=\"assets/images/products/product-21.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/product-22.jpg\" data-src=\"assets/images/products/product-22.jpg\"
                        alt=\"Product\">
                     </a>
                     <div class=\"variant-box\">
                        <ul class=\"product-size_list\">
                           <li class=\"size-item h6\">XS</li>
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
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Half sleeve crop top</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$119,99</span>
                        <span class=\"price-new h6\">\$84,99</span>
                     </div>
                     <ul class=\"product-color_list d-none\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Dark</span>
                           <span class=\"swatch-value bg-dark-charcoal\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-21.jpg\" data-src=\"assets/images/products/product-21.jpg\"
                              alt=\"Product\">
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
                     <img class=\"lazyload img-product\" src=\"assets/images/products/product-33.jpg\"
                        data-src=\"assets/images/products/product-33.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/product-34.jpg\" data-src=\"assets/images/products/product-34.jpg\"
                        alt=\"Product\">
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
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Summer two piece set</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$139,99</span>
                        <span class=\"price-new h6\">\$94,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Dark</span>
                           <span class=\"swatch-value bg-dark-charcoal\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-33.jpg\" data-src=\"assets/images/products/product-33.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-35.jpg\" data-src=\"assets/images/products/product-35.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Jade</span>
                           <span class=\"swatch-value bg-dark-jade\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-36.jpg\" data-src=\"assets/images/products/product-36.jpg\"
                              alt=\"Product\">
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
                     <img class=\"lazyload img-product\" src=\"assets/images/products/product-37.jpg\"
                        data-src=\"assets/images/products/product-37.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/product-38.jpg\" data-src=\"assets/images/products/product-38.jpg\"
                        alt=\"Product\">
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
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Women's straight leg pants</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$69,99</span>
                        <span class=\"price-new h6\">\$44,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">White</span>
                           <span class=\"swatch-value bg-white\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-37.jpg\" data-src=\"assets/images/products/product-37.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Pink</span>
                           <span class=\"swatch-value bg-hot-pink\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-39.jpg\" data-src=\"assets/images/products/product-39.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-40.jpg\" data-src=\"assets/images/products/product-40.jpg\"
                              alt=\"Product\">
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
                     <img class=\"lazyload img-product\" src=\"assets/images/products/product-41.jpg\"
                        data-src=\"assets/images/products/product-41.jpg\" alt=\"Product\">
                     <img class=\"lazyload img-hover\" src=\"assets/images/products/product-42.jpg\" data-src=\"assets/images/products/product-42.jpg\"
                        alt=\"Product\">
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
                     <div class=\"variant-box\">
                        <ul class=\"product-size_list\">
                           <li class=\"size-item h6\">XS</li>
                           <li class=\"size-item h6\">S</li>
                           <li class=\"size-item h6\">M</li>
                           <li class=\"size-item h6\">L</li>
                        </ul>
                     </div>
                  </div>
                  <div class=\"card-product_info\">
                     <a href=\"product-detail.html\" class=\"name-product h4 link\">Short sleeve office shirt</a>
                     <div class=\"price-wrap\">
                        <span class=\"price-old h6 fw-normal\">\$129,99</span>
                        <span class=\"price-new h6\">\$89,99</span>
                     </div>
                     <ul class=\"product-color_list\">
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                           <span class=\"tooltip color-filter\">Beige</span>
                           <span class=\"swatch-value bg-light-beige\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-41.jpg\" data-src=\"assets/images/products/product-41.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Black</span>
                           <span class=\"swatch-value bg-black\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-43.jpg\" data-src=\"assets/images/products/product-43.jpg\"
                              alt=\"Product\">
                        </li>
                        <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                           <span class=\"tooltip color-filter\">Violet</span>
                           <span class=\"swatch-value bg-muted-violet\"></span>
                           <img class=\"lazyload\" src=\"assets/images/products/product-44.jpg\" data-src=\"assets/images/products/product-44.jpg\"
                              alt=\"Product\">
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
<!-- /Also Like -->
<!-- Related -->
<section class=\"flat-spacing-3 pt-0\">
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
