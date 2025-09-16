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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_3de5693c048e9b657f5ee24e579b9ceb4b980a949ee718309b881246d2bcedaf extends Template
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
        yield "</main>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css\">
<style>
\t@media(max-width: 768px) {
\t\t.wja-logo {
\t\t\tmax-width: 100px !important;
\t\t\tmargin-top: 0 !important;
\t\t}
\t}
</style>
<!-- Footer -->
<footer class=\"tf-footer style-4\">
\t<div class=\"container d-flex\">
\t\t<span class=\"br-line\"></span>
\t</div>
\t<div class=\"footer-body\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3 col-sm-6 mb_30 mb-xl-0\">
\t\t\t\t\t<div class=\"footer-col-block\">
\t\t\t\t\t\t<p class=\"footer-heading footer-heading-mobile\">Contact us</p>
\t\t\t\t\t\t<div class=\"tf-collapse-content\">
\t\t\t\t\t\t\t<ul class=\"footer-contact\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-phone\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t\t\t\t<a href=\"tel:+19499006910\" class=\"h6 link\">
\t\t\t\t\t\t\t\t\t\t+1 (949) 900-6910</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-envelope-simple\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@zaynjewels.com\" class=\"h6 link\">
\t\t\t\t\t\t\t\t\t\tinfo@zaynjewels.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"social-wrap\">
\t\t\t\t\t\t\t\t<ul class=\"tf-social-icon\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/zaynjewels/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/zaynjewels/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UC0KmddVZ3BX4Ly5jjBRW7SA\" target=\"_blank\" class=\"social-youtube\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-sm-6 mb_30 mb-xl-0\">
\t\t\t\t\t<div class=\"footer-col-block footer-wrap-1 ms-xl-auto\">
\t\t\t\t\t\t<p class=\"footer-heading footer-heading-mobile\">Useful Links</p>
\t\t\t\t\t\t<div class=\"tf-collapse-content\">
\t\t\t\t\t\t\t<ul class=\"footer-menu-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/cad\" class=\"link h6\">CAD/CAM Services</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/locations\" class=\"link h6\">Retail Locations</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/education\" class=\"link h6\">Education
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 col-sm-6 mb_30 mb-sm-0\">
\t\t\t\t\t<div class=\"footer-col-block footer-wrap-2 mx-xl-auto\">
\t\t\t\t\t\t<p class=\"footer-heading footer-heading-mobile\">Information</p>
\t\t\t\t\t\t<div class=\"tf-collapse-content\">
\t\t\t\t\t\t\t<ul class=\"footer-menu-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/about\" class=\"link h6\">About Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/information&information_id=3\" class=\"link h6\">Privacy Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/contact\" class=\"link h6\">Contact Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t<div class=\"footer-col-block\">
\t\t\t\t\t\t<p class=\"footer-heading footer-heading-mobile\">Let’s keep in touch</p>
\t\t\t\t\t\t<div class=\"tf-collapse-content\">
\t\t\t\t\t\t\t<div class=\"footer-newsletter\">
\t\t\t\t\t\t\t\t<p class=\"h6 caption\">
\t\t\t\t\t\t\t\t\tEnter your email below to be the first to know about new collections and product launches.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<form class=\"form_sub has_check\" id=\"subscribe-form\">
\t\t\t\t\t\t\t\t\t<div class=\"f-content\" id=\"subscribe-content\">
\t\t\t\t\t\t\t\t\t\t<fieldset class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"style-stroke\" id=\"subscribe-email\" type=\"email\" name=\"email-form\" placeholder=\"Enter your email\" required>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<button id=\"subscribe-button\" type=\"button\" class=\"tf-btn animate-btn type-small-2\">
\t\t\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div id=\"subscribe-msg\"></div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"inner-bottom\">
\t\t\t\t<div class=\"list-hor\">
\t\t\t\t\t<p class=\"h6\">Copyright © 2025 Zayn Jewels. All rights reserved.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"list-hor\">

\t\t\t\t\t<img src=\"https://zaynjewels.com/image/new/WJA_logo.png\" alt=\"WJA Logo\" style=\"max-width: 130px; margin-top: -50px;\" class=\"wja-logo\">
\t\t\t\t</div>


\t\t\t\t<div class=\"list-hor flex-wrap\">
\t\t\t\t\t<ul class=\"payment-method-list\">
\t\t\t\t\t\t<li><img src=\"assets/images/payment/visa.png\" alt=\"Payment\"></li>
\t\t\t\t\t\t<li><img src=\"assets/images/payment/master-card.png\" alt=\"Payment\"></li>
\t\t\t\t\t\t<li><img src=\"assets/images/payment/amex.png\" alt=\"Payment\"></li>
\t\t\t\t\t\t<li><img src=\"assets/images/payment/discover.png\" alt=\"Payment\"></li>
\t\t\t\t\t\t<li><img src=\"assets/images/payment/paypal.png\" alt=\"Payment\"></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- /Footer --></div></main>";
        // line 159
        yield ($context["cookie"] ?? null);
        yield "<script src=\"assets/js/bootstrap.min.js\"></script><script src=\"assets/js/swiper-bundle.min.js\"></script><script src=\"assets/js/carousel.js\"></script><script src=\"assets/js/bootstrap-select.min.js\"></script><script src=\"assets/js/lazysize.min.js\"></script><script src=\"assets/js/wow.min.js\"></script><script src=\"assets/js/infinityslide.js\"></script><script src=\"assets/js/parallaxie.js\"></script><script src=\"assets/js/count-down.js\"></script><script src=\"assets/js/main.js\"></script><script src=\"assets/js/photoswipe-lightbox.umd.min.js\"></script><script src=\"assets/js/photoswipe.umd.min.js\"></script><script src=\"assets/js/zoom.js\"></script>";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            yield "<script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 159);
            yield "\" type=\"text/javascript\"></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "
<!-- Search -->
<div class=\"modal modalCentered fade modal-search\" id=\"search\"><div class=\"modal-dialog modal-dialog-centered\">
<div class=\"modal-content\">
\t<span class=\"icon-close icon-close-popup\" data-bs-dismiss=\"modal\"></span>
\t<div>
\t\t<form action=\"index.php?route=product/search\" method=\"get\" class=\"form-search style-2\">
\t\t\t<fieldset class=\"position-relative\">
\t\t\t\t<input type=\"text\" id=\"search-input\" name=\"search\" placeholder=\"Search for products...\" class=\"style-stroke\" value=\"\" aria-required=\"true\" autocomplete=\"off\">
\t\t\t\t<input type=\"hidden\" name=\"language\" value=\"";
        // line 169
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "\">
\t\t\t\t<input type=\"hidden\" name=\"description\" value=\"1\">
\t\t\t\t<div id=\"search-suggestions\" class=\"search-suggestions\" style=\"display: none;\"></div>
\t\t\t</fieldset>
\t\t\t<button type=\"submit\" id=\"search-button\" class=\"link\">
\t\t\t\t<i class=\"icon icon-magnifying-glass\"></i>
\t\t\t</button>
\t\t</form>
\t\t<ul class=\"quick-link-list\">
\t\t\t";
        // line 178
        if (($context["popular_categories"] ?? null)) {
            // line 179
            yield "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["popular_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 180
                yield "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 181
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 181);
                yield "\" class=\"link-item text-main h6 link\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 181);
                yield "</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            yield "\t\t\t";
        } else {
            // line 185
            yield "\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.php?route=product/category&language=";
            // line 186
            yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
            yield "\" class=\"link-item text-main h6 link\">All Categories</a>
\t\t\t\t</li>
\t\t\t";
        }
        // line 189
        yield "\t\t</ul>
\t</div>
\t<div class=\"view-history-wrap\">
\t\t<h4 class=\"title\">History</h4>
\t\t<div class=\"view-history-list\"></div>
\t</div>
\t<div class=\"trend-product-wrap\">
\t\t<div class=\"heading\">
\t\t\t<h4 class=\"title flex-grow-1\">Trending product</h4>
\t\t\t<a href=\"index.php?route=product/special&language=";
        // line 198
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "\" class=\"tf-btn-line has-icon none-line fw-medium fs-18 text-normal\">
\t\t\t\tView All Product
\t\t\t\t<i class=\"icon icon-caret-circle-right\"></i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"trend-product-inner\">
\t\t\t";
        // line 204
        if (($context["trending_products"] ?? null)) {
            // line 205
            yield "\t\t\t\t";
            $context["half"] = Twig\Extension\CoreExtension::round((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["trending_products"] ?? null)) / 2), 0, "ceil");
            // line 206
            yield "\t\t\t\t<div class=\"trend-product-list\">
\t\t\t\t\t";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["trending_products"] ?? null), 0, ($context["half"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 208
                yield "\t\t\t\t\t\t<div class=\"trend-product-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"";
                // line 210
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 210);
                yield "\" data-src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 210);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 210);
                yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
                // line 213
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 213)) {
                    // line 214
                    yield "\t\t\t\t\t\t\t\t\t<div class=\"text-small text-main-2 sub\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 214);
                    yield "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 216
                yield "\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 217
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 217);
                yield "\" class=\"link\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 217);
                yield "</a>
\t\t\t\t\t\t\t\t</h6>
                                ";
                // line 219
                if (($context["logged"] ?? null)) {
                    // line 220
                    yield "\t\t\t\t\t\t\t\t<div class=\"price-wrap\">
\t\t\t\t\t\t\t\t\t";
                    // line 221
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 221)) {
                        // line 222
                        yield "\t\t\t\t\t\t\t\t\t\t<span class=\"price-old h6 fw-normal\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 222);
                        yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">";
                        // line 223
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 223);
                        yield "</span>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 225
                        yield "\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 225);
                        yield "</span>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 227
                    yield "\t\t\t\t\t\t\t\t</div>
                                ";
                }
                // line 229
                yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            yield "\t\t\t\t</div>
\t\t\t\t";
            // line 233
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["trending_products"] ?? null)) > ($context["half"] ?? null))) {
                // line 234
                yield "\t\t\t\t<div class=\"trend-product-list\">
\t\t\t\t\t";
                // line 235
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["trending_products"] ?? null), ($context["half"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 236
                    yield "\t\t\t\t\t\t<div class=\"trend-product-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"";
                    // line 238
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 238);
                    yield "\" data-src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 238);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 238);
                    yield "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
                    // line 241
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 241)) {
                        // line 242
                        yield "\t\t\t\t\t\t\t\t\t<div class=\"text-small text-main-2 sub\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 242);
                        yield "</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 244
                    yield "\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 245
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 245);
                    yield "\" class=\"link\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 245);
                    yield "</a>
\t\t\t\t\t\t\t\t</h6>
                                ";
                    // line 247
                    if (($context["logged"] ?? null)) {
                        // line 248
                        yield "\t\t\t\t\t\t\t\t<div class=\"price-wrap\">
\t\t\t\t\t\t\t\t\t";
                        // line 249
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 249)) {
                            // line 250
                            yield "\t\t\t\t\t\t\t\t\t\t<span class=\"price-old h6 fw-normal\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 250);
                            yield "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">";
                            // line 251
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 251);
                            yield "</span>
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 253
                            yield "\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 253);
                            yield "</span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 255
                        yield "\t\t\t\t\t\t\t\t</div>
                                ";
                    }
                    // line 257
                    yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 260
                yield "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 262
            yield "\t\t\t";
        } else {
            // line 263
            yield "\t\t\t\t<div class=\"trend-product-list\">
\t\t\t\t\t<div class=\"text-center py-3\">
\t\t\t\t\t\t<p class=\"text-muted\">No trending products available</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 269
        yield "\t\t</div>
\t</div>
</div></div></div>
<!-- /Search -->
<script>\$(document).ready(function () { // Load search history
if (localStorage.getItem('search') && localStorage.getItem('search').length > 0) {
\$('.view-history-list').html(`
                <a class=\"item text-main link h6\" href=\"index.php?route=product/search&language=";
        // line 276
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "&search=\${
encodeURIComponent(localStorage.getItem('search'))
}\">
                            <span style=\"text-transform: capitalize;\">\${
localStorage.getItem('search')
}</span>
                            <i class=\"icon icon-arrow-top-right\"></i>
                        </a>
                `);
} else {
\$('.view-history-list').html('<p class=\"h6\">No search history</p>');
}

// Search suggestions functionality
var searchTimeout;
\$('#search-input').on('input', function () {
var query = \$(this).val().trim();

clearTimeout(searchTimeout);

if (query.length < 2) {
\$('#search-suggestions').hide();
return;
}

searchTimeout = setTimeout(function () {
                    \$.ajax({
                        url: 'index.php?route=product/search.suggest&language=";
        // line 303
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "',
                        type: 'get',
                        data: {
                            search: query
                        },
                        dataType: 'json',
                        success: function(data) {
                            var html = '';
                            if (data && data.length > 0) {
                                data.forEach(function(item) {
                                    html += '<div class=\"search-suggestion-item\" data-href=\"' + item.href + '\" data-name=\"' + item.name + '\">';
                                    html += '<div class=\"suggestion-content\">';
                                    html += '<strong>' + item.name + '</strong>';
                                    if (item.model) {
                                        html += '<br><small class=\"text-muted\">Model: ' + item.model + '</small>';
                                    }
                                    html += '</div>';
                                    html += '<div class=\"suggestion-actions\">';
                                    html += '<button type=\"button\" class=\"btn-suggestion-fill\" data-name=\"' + item.name + '\" title=\"Fill search\"><i class=\"icon icon-edit\"></i></button>';
                                    html += '<button type=\"button\" class=\"btn-suggestion-go\" data-href=\"' + item.href + '\" title=\"Go to product\"><i class=\"icon icon-arrow-right\"></i></button>';
                                    html += '</div>';
                                    html += '</div>';
                                });
                                // Add \"Search for all\" option
                                html += '<div class=\"search-suggestion-item search-all-item\" data-search=\"' + query + '\">';
                                html += '<div class=\"suggestion-content\">';
                                html += '<strong>Search for \"' + query + '\"</strong>';
                                html += '<br><small class=\"text-muted\">View all results</small>';
                                html += '</div>';
                                html += '<div class=\"suggestion-actions\">';
                                html += '<button type=\"button\" class=\"btn-suggestion-search\" data-search=\"' + query + '\" title=\"Search all\"><i class=\"icon icon-magnifying-glass\"></i></button>';
                                html += '</div>';
                                html += '</div>';
                            } else {
                                html = '<div class=\"search-suggestion-item search-all-item\" data-search=\"' + query + '\">';
                                html += '<div class=\"suggestion-content\">';
                                html += '<strong>Search for \"' + query + '\"</strong>';
                                html += '<br><small class=\"text-muted\">Press Enter or click to search</small>';
                                html += '</div>';
                                html += '</div>';
                            }
                            \$('#search-suggestions').html(html).show();
                        },
                        error: function() {
                            \$('#search-suggestions').html('<div class=\"p-2\"><small class=\"text-muted\">Press Enter to search for \"' + query + '\"</small></div>').show();
                        }
                    });
                }, 300);
});

// Prevent modal from closing when clicking inside search area
\$('#search .modal-content').on('click', function(e) {
    e.stopPropagation();
});

// Prevent modal from closing when clicking on search input or suggestions
\$('#search-input, #search-suggestions').on('click', function(e) {
    e.stopPropagation();
});

// Hide suggestions when clicking outside search area (but not when clicking modal close)
\$(document).on('click', function (e) {
    if (!\$(e.target).closest('.form-search').length && !\$(e.target).closest('#search-suggestions').length) {
        \$('#search-suggestions').hide();
    }
});

// Handle search form submission
\$('.form-search').on('submit', function (e) {
    var searchValue = \$('#search-input').val().trim();
    console.log('Form submitted with search value:', searchValue);
    
    if (searchValue) {
        localStorage.setItem('search', searchValue);
        \$('#search-suggestions').hide();
        \$('#search').modal('hide'); // Close modal on successful search
        
        // Build the search URL manually to ensure it works
        var searchUrl = 'index.php?route=product/search&language=";
        // line 381
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "&search=' + encodeURIComponent(searchValue) + '&description=1';
        console.log('Redirecting to:', searchUrl);
        window.location.href = searchUrl;
        
        e.preventDefault(); // Prevent default form submission since we're handling it manually
        return false;
    } else {
        e.preventDefault();
        alert('Please enter a search term');
        return false;
    }
});

// Handle search button click
\$('#search-button').click(function (e) {
    e.preventDefault();
    var searchValue = \$('#search-input').val().trim();
    
    if (searchValue) {
        localStorage.setItem('search', searchValue);
        \$('#search-suggestions').hide();
        \$('#search').modal('hide');
        
        // Redirect to search results
        var searchUrl = 'index.php?route=product/search&language=";
        // line 405
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "&search=' + encodeURIComponent(searchValue) + '&description=1';
        console.log('Button click - Redirecting to:', searchUrl);
        window.location.href = searchUrl;
    } else {
        alert('Please enter a search term');
    }
    
    return false;
});

// Handle search suggestion clicks
\$(document).on('click', '.search-suggestion-item', function(e) {
    // Only handle direct clicks on the suggestion item, not on buttons
    if (\$(e.target).closest('.suggestion-actions').length === 0) {
        var href = \$(this).data('href');
        var search = \$(this).data('search');
        
        if (href) {
            window.location.href = href;
        } else if (search) {
            // Handle \"search for all\" clicks
            performSearch(search);
        }
    }
});

// Handle \"Fill search\" button clicks
\$(document).on('click', '.btn-suggestion-fill', function(e) {
    e.stopPropagation();
    var name = \$(this).data('name');
    \$('#search-input').val(name).focus();
    \$('#search-suggestions').hide();
});

// Handle \"Go to product\" button clicks
\$(document).on('click', '.btn-suggestion-go', function(e) {
    e.stopPropagation();
    var href = \$(this).data('href');
    if (href) {
        window.location.href = href;
    }
});

// Handle \"Search all\" button clicks
\$(document).on('click', '.btn-suggestion-search', function(e) {
    e.stopPropagation();
    var search = \$(this).data('search');
    performSearch(search);
});

// Function to perform search
function performSearch(searchTerm) {
    localStorage.setItem('search', searchTerm);
    \$('#search-suggestions').hide();
    \$('#search').modal('hide');
    
    var searchUrl = 'index.php?route=product/search&language=";
        // line 461
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "&search=' + encodeURIComponent(searchTerm) + '&description=1';
    console.log('Performing search for:', searchTerm, 'URL:', searchUrl);
    window.location.href = searchUrl;
}

// Auto-focus search input when modal opens
\$('#search').on('shown.bs.modal', function() {
    \$('#search-input').focus();
});

// Prevent modal from closing when typing or clicking in search input
\$('#search-input').on('click keydown keyup', function(e) {
    e.stopPropagation();
});

// Clear search input when modal opens
\$('#search').on('show.bs.modal', function() {
    \$('#search-input').val('');
    \$('#search-suggestions').hide();
});

// Keyboard navigation for suggestions
var selectedSuggestion = -1;

\$('#search-input').on('keydown', function(e) {
    var suggestions = \$('.search-suggestion-item:visible');
    
    if (suggestions.length > 0) {
        if (e.keyCode === 40) { // Arrow Down
            e.preventDefault();
            selectedSuggestion++;
            if (selectedSuggestion >= suggestions.length) {
                selectedSuggestion = 0;
            }
            updateSuggestionSelection(suggestions);
        } else if (e.keyCode === 38) { // Arrow Up
            e.preventDefault();
            selectedSuggestion--;
            if (selectedSuggestion < 0) {
                selectedSuggestion = suggestions.length - 1;
            }
            updateSuggestionSelection(suggestions);
        } else if (e.keyCode === 13) { // Enter
            if (selectedSuggestion >= 0 && selectedSuggestion < suggestions.length) {
                e.preventDefault();
                var selectedItem = \$(suggestions[selectedSuggestion]);
                var href = selectedItem.data('href');
                var search = selectedItem.data('search');
                
                if (href) {
                    window.location.href = href;
                } else if (search) {
                    performSearch(search);
                }
            }
        } else if (e.keyCode === 27) { // Escape
            \$('#search-suggestions').hide();
            selectedSuggestion = -1;
        }
    }
});

function updateSuggestionSelection(suggestions) {
    suggestions.removeClass('selected');
    if (selectedSuggestion >= 0 && selectedSuggestion < suggestions.length) {
        \$(suggestions[selectedSuggestion]).addClass('selected');
    }
}

// Reset selection when suggestions change
\$('#search-input').on('input', function() {
    selectedSuggestion = -1;
});
});</script><style>.search-suggestions {
\tposition: absolute;
\ttop: 100%;
\tleft: 0;
\tright: 0;
\tbackground: white;
\tborder: 1px solid #ddd;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
\tz-index: 1000;
\tmax-height: 200px;
\toverflow-y: auto;
}

.search-suggestion-item {
\tpadding: 10px 15px;
\tcursor: pointer;
\tborder-bottom: 1px solid #f5f5f5;
\tdisplay: flex;
\tjustify-content: space-between;
\talign-items: center;
\ttransition: background-color 0.2s ease;
}

.search-suggestion-item:hover,
.search-suggestion-item.selected {
\tbackground-color: #f8f9fa;
}

.search-suggestion-item:last-child {
\tborder-bottom: none;
}

.suggestion-content {
\tflex-grow: 1;
\ttext-align: left;
}

.suggestion-actions {
\tdisplay: flex;
\tgap: 5px;
\topacity: 0;
\ttransition: opacity 0.2s ease;
}

.search-suggestion-item:hover .suggestion-actions,
.search-suggestion-item.selected .suggestion-actions {
\topacity: 1;
}

.btn-suggestion-fill,
.btn-suggestion-go,
.btn-suggestion-search {
\tbackground: none;
\tborder: none;
\tpadding: 4px 8px;
\tborder-radius: 3px;
\tcursor: pointer;
\tcolor: #666;
\tfont-size: 12px;
\ttransition: all 0.2s ease;
}

.btn-suggestion-fill:hover {
\tbackground-color: #e3f2fd;
\tcolor: #1976d2;
}

.btn-suggestion-go:hover {
\tbackground-color: #e8f5e8;
\tcolor: #388e3c;
}

.btn-suggestion-search:hover {
\tbackground-color: #fff3e0;
\tcolor: #f57c00;
}

.search-all-item {
\tbackground-color: #f8f9fa;
\tfont-weight: 500;
}

.search-all-item:hover {
\tbackground-color: #e9ecef;
}

/* Improve search input placeholder visibility */
#search-input::placeholder {
    color: #999 !important;
    opacity: 1 !important;
    font-size: 14px;
}

#search-input::-webkit-input-placeholder {
    color: #999 !important;
    opacity: 1 !important;
}

#search-input::-moz-placeholder {
    color: #999 !important;
    opacity: 1 !important;
}

#search-input:-ms-input-placeholder {
    color: #999 !important;
    opacity: 1 !important;
}

/* Ensure modal doesn't close when interacting with search */
.modal-search .modal-content {
    pointer-events: auto;
}

.modal-search .form-search {
    pointer-events: auto;
}</style><!-- Quick View Modal --><div class=\"modal fade\" id=\"quickView\" tabindex=\"-1\" aria-labelledby=\"quickViewLabel\" aria-hidden=\"true\"><div class=\"modal-dialog modal-lg modal-dialog-centered\">
<div class=\"modal-content\">
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title tf-product-title\" id=\"quickViewLabel\">Product Quick View</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t<div class=\"row m-0\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"tf-product-media\">
\t\t\t\t\t<img src=\"assets/images/placeholder-250x250.png\" alt=\"Product Image\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 p-4 mt-3\">
\t\t\t\t<div class=\"product-infor-sub\">
\t\t\t\t\t<p>Product description will be loaded here...</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"price-wrap mb-3 mt-3\">

\t\t\t\t\t<span class=\"price-new h5 fw-bold text-main\">\$0.00</span>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"tf-product-variant mb-3\"><!-- Product options will be loaded here -->
\t\t\t\t</div>
\t\t\t\t<div class=\"tf-product-total-quantity mb-3\">
\t\t\t\t\t<div class=\"wg-quantity\" style=\"max-width: 60%;\">
\t\t\t\t\t\t<button class=\"btn-quantity minus-btn\">
\t\t\t\t\t\t\t<i class=\"icon icon-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"1\">
\t\t\t\t\t\t<button class=\"btn-quantity plus-btn\">
\t\t\t\t\t\t\t<i class=\"icon icon-plus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"tf-product-info-list\">
\t\t\t\t\t<button type=\"button\" class=\"tf-btn animate-btn btn-add-to-cart\" data-url=\"index.php?route=checkout/cart.add&language=";
        // line 687
        yield ($context["language"] ?? null);
        yield "\" data-product-id=\"\" style=\"max-width: 100%;width: 90%;\">
\t\t\t\t\t\tADD TO CART
\t\t\t\t\t\t<i class=\"icon icon-shopping-cart-simple\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div></div></div><div class=\"offcanvas offcanvas-start canvas-mb \" id=\"mobileMenu\" aria-modal=\"true\" role=\"dialog\"><span class=\"icon-close-popup\" data-bs-dismiss=\"offcanvas\">
<i class=\"icon-close\"></i></span><div class=\"canvas-header\">
";
        // line 697
        if (($context["logo"] ?? null)) {
            // line 698
            yield "\t<a href=\"";
            yield ($context["home"] ?? null);
            yield "\">
\t\t<img src=\"";
            // line 699
            yield ($context["logo"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\" width=\"80\"/>
\t</a>
";
        } else {
            // line 702
            yield "\t<h1>
\t\t<a href=\"";
            // line 703
            yield ($context["home"] ?? null);
            yield "\">Zayn</a>
\t</h1>
";
        }
        // line 706
        if ( !($context["logged"] ?? null)) {
            // line 707
            yield "\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/login\">
\t\t<i class=\"icon icon-user\"></i>
\t</a>
";
        } else {
            // line 711
            yield "\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/account\">
\t\t<i class=\"icon icon-user\"></i>
\t</a>
";
        }
        // line 715
        yield "<span class=\"br-line\"></span></div><div class=\"canvas-body\">
<div class=\"mb-content-top\">
\t<ul class=\"nav-ul-mb\" id=\"wrapper-menu-navigation\">
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-0\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-0\">
\t\t\t\t<span>HOME</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-0\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html\" class=\"sub-nav-link \">Home Fashion 1</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-fashion-2.html\" class=\"sub-nav-link \">Home Fashion 2</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-fashion-3.html\" class=\"sub-nav-link \">Home Fashion 3</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-fashion-4.html\" class=\"sub-nav-link \">Home Fashion 4</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-cosmetic.html\" class=\"sub-nav-link \">Home Cosmetic</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-skin-care.html\" class=\"sub-nav-link \">Home Skincare</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-decor.html\" class=\"sub-nav-link \">Home Decor</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-jewelry.html\" class=\"sub-nav-link \">Home Jewelry</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-electronic-market.html\" class=\"sub-nav-link \">Home
\t\t\t\t\t\t\t                                Electric Market</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-pet-store.html\" class=\"sub-nav-link \">Home Pet Store</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-sneaker.html\" class=\"sub-nav-link \">Home Sneaker</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-book.html\" class=\"sub-nav-link \">Home Book</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-organic.html\" class=\"sub-nav-link \">Home Organic</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-medical.html\" class=\"sub-nav-link \">Home Medical</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-gym.html\" class=\"sub-nav-link \">Home Gym</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-art.html\" class=\"sub-nav-link \">Home Art</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-accessories.html\" class=\"sub-nav-link \">Home Accessories</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-car-auto.html\" class=\"sub-nav-link \">Home Car Auto</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-travel.html\" class=\"sub-nav-link \">Home Travel</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-watch.html\" class=\"sub-nav-link \">Home Watch</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-1\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-1\">
\t\t\t\t<span>SHOP</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-1\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-1-group-0\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-1-group-0\">
\t\t\t\t\t\t\t<span>Shop Layout</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-1-group-0\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-default.html\" class=\"sub-nav-link \">Default Grid</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-default-list.html\" class=\"sub-nav-link \">Default List</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-2-columns.html\" class=\"sub-nav-link \">Shop 2 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-3-columns.html\" class=\"sub-nav-link \">Shop 3 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-4-columns.html\" class=\"sub-nav-link \">Shop 4 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-5-columns.html\" class=\"sub-nav-link \">Shop 5 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-6-columns.html\" class=\"sub-nav-link \">Shop 6 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-1-group-1\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-1-group-1\">
\t\t\t\t\t\t\t<span>Shop Features</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-1-group-1\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-full-width-list.html\" class=\"sub-nav-link \">Full Width List</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-full-width-grid.html\" class=\"sub-nav-link \">Full Width Grid</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-left-sidebar.html\" class=\"sub-nav-link \">Left Sidebar</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-right-sidebar.html\" class=\"sub-nav-link \">Right Sidebar</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-filter-dropdown.html\" class=\"sub-nav-link \">Filter Dropdown</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-filter-drawer.html\" class=\"sub-nav-link \">Filter Drawer</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-1-group-2\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-1-group-2\">
\t\t\t\t\t\t\t<span>Shop Hover</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-1-group-2\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-01.html\" class=\"sub-nav-link \">Hover Style 01</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-02.html\" class=\"sub-nav-link \">Hover Style 02</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-03.html\" class=\"sub-nav-link \">Hover Style 03</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-04.html\" class=\"sub-nav-link \">Hover Style 04</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-05.html\" class=\"sub-nav-link \">Hover Style 05</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-06.html\" class=\"sub-nav-link \">Hover Style 06</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-07.html\" class=\"sub-nav-link \">Hover Style 07</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-08.html\" class=\"sub-nav-link \">Hover Style 08</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-2\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2\">
\t\t\t\t<span>PRODUCT</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-2\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-2-group-0\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2-group-0\">
\t\t\t\t\t\t\t<span>Product Layout</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-2-group-0\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"sub-nav-link \">Product Detail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-left-thumbnail.html\" class=\"sub-nav-link \">Product Left Thumbnail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-right-thumbnail.html\" class=\"sub-nav-link \">Product Right
\t\t\t\t\t\t\t\t\t\t                                                                    Thumbnail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-bottom-thumbnail.html\" class=\"sub-nav-link \">Product Bottom
\t\t\t\t\t\t\t\t\t\t                                                                    Thumbnail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-grid.html\" class=\"sub-nav-link \">Product Grid</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-grid-2.html\" class=\"sub-nav-link \">Product Grid 2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-stacked.html\" class=\"sub-nav-link \">Product Stacked</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-2-group-1\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2-group-1\">
\t\t\t\t\t\t\t<span>Product Details</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-2-group-1\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-information.html\" class=\"sub-nav-link \">Product Information</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-group.html\" class=\"sub-nav-link \">Product Group</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-options-customizer.html\" class=\"sub-nav-link \">Product Option
\t\t\t\t\t\t\t\t\t\t                                                                    Customize</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-available.html\" class=\"sub-nav-link \">Product Avaialable</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-video.html\" class=\"sub-nav-link \">Product Video</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-buyX-getY.html\" class=\"sub-nav-link \">Product Buy X Get Y</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-buy-the-look.html\" class=\"sub-nav-link \">Product Buy The Look</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-out-of-stock.html\" class=\"sub-nav-link \">Product Out Of Stock</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-2-group-2\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2-group-2\">
\t\t\t\t\t\t\t<span>Product Feature</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-2-group-2\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-frequently-bought-together.html\" class=\"sub-nav-link \">Buy
\t\t\t\t\t\t\t\t\t\t                                                                    Together</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-often-purchased-together.html\" class=\"sub-nav-link \">Often Purchased
\t\t\t\t\t\t\t\t\t\t                                                                    Together</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-countdown-timer.html\" class=\"sub-nav-link \">Countdown Timer</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-volume-discount.html\" class=\"sub-nav-link \">Volume Discount</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-volume-discount-thumbnail.html\" class=\"sub-nav-link \">Volume Discount
\t\t\t\t\t\t\t\t\t\t                                                                    Thumbnail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-swatch-dropdown.html\" class=\"sub-nav-link \">Swatch Dropdown</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-swatch-dropdown-color.html\" class=\"sub-nav-link \">Swatch Dropdown
\t\t\t\t\t\t\t\t\t\t                                                                    Color</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-swatch-image.html\" class=\"sub-nav-link \">Swatch Image</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-swatch-image-square.html\" class=\"sub-nav-link \">Swatch Image
\t\t\t\t\t\t\t\t\t\t                                                                    Retangle</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-2-group-3\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2-group-3\">
\t\t\t\t\t\t\t<span>Product Description</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-2-group-3\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-description-accordion.html\" class=\"sub-nav-link \">Product Description
\t\t\t\t\t\t\t\t\t\t                                                                    Accordion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-description-list.html\" class=\"sub-nav-link \">Product Description
\t\t\t\t\t\t\t\t\t\t                                                                    List</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-description-vertical.html\" class=\"sub-nav-link \">Product Description
\t\t\t\t\t\t\t\t\t\t                                                                    Vertical</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-3\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-3\">
\t\t\t\t<span>PAGE</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-3\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"about-us.html\" class=\"sub-nav-link\">About us</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"store-list.html\" class=\"sub-nav-link\">Store List</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"404.html\" class=\"sub-nav-link\">404</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"faq.html\" class=\"sub-nav-link\">FAQs</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"track-order.html\" class=\"sub-nav-link\">Order Tracking</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"invoice.html\" class=\"sub-nav-link\">Invoice</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"account-page.html\" class=\"sub-nav-link\">My account</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-4\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-4\">
\t\t\t\t<span>BLOG</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-4\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog-grid.html\" class=\"sub-nav-link\">Blog Grid</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog-list-1.html\" class=\"sub-nav-link\">Blog List 1</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog-list-2.html\" class=\"sub-nav-link\">Blog List 2</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"sub-nav-link\">Blog Single</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t</ul>
</div>
<div class=\"group-btn\">
\t<a href=\"";
        // line 1090
        yield ($context["wishlist"] ?? null);
        yield "\" class=\"tf-btn type-small style-2\">
\t\tWishlist
\t\t<i class=\"icon icon-heart\"></i>
\t</a>
\t<div data-bs-dismiss=\"offcanvas\">
\t\t";
        // line 1095
        yield ($context["search"] ?? null);
        yield "
\t</div>
</div>
<div class=\"flow-us-wrap\">
\t<h5 class=\"title\">Follow us on</h5>
\t<ul class=\"tf-social-icon\">
\t\t<li>
\t\t\t<a href=\"https://www.facebook.com/zaynjewels/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"https://www.instagram.com/zaynjewels/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"https://www.youtube.com/channel/UC0KmddVZ3BX4Ly5jjBRW7SA\" target=\"_blank\" class=\"social-youtube\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t</ul>
</div></div></div><script>\$(document).ready(function () {
\$('#quickView .btn-close').on('click', function (event) {
\$('.modal-backdrop').removeClass('show');
\$('.modal-backdrop').remove();
});
});</script></body></html>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/footer.twig";
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
        return array (  1337 => 1095,  1329 => 1090,  952 => 715,  946 => 711,  940 => 707,  938 => 706,  932 => 703,  929 => 702,  919 => 699,  914 => 698,  912 => 697,  899 => 687,  670 => 461,  611 => 405,  584 => 381,  503 => 303,  473 => 276,  464 => 269,  456 => 263,  453 => 262,  449 => 260,  441 => 257,  437 => 255,  431 => 253,  426 => 251,  421 => 250,  419 => 249,  416 => 248,  414 => 247,  407 => 245,  404 => 244,  398 => 242,  396 => 241,  386 => 238,  382 => 236,  378 => 235,  375 => 234,  373 => 233,  370 => 232,  362 => 229,  358 => 227,  352 => 225,  347 => 223,  342 => 222,  340 => 221,  337 => 220,  335 => 219,  328 => 217,  325 => 216,  319 => 214,  317 => 213,  307 => 210,  303 => 208,  299 => 207,  296 => 206,  293 => 205,  291 => 204,  282 => 198,  271 => 189,  265 => 186,  262 => 185,  259 => 184,  248 => 181,  245 => 180,  240 => 179,  238 => 178,  226 => 169,  215 => 160,  202 => 159,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("</main>

<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css\">
<style>
\t@media(max-width: 768px) {
\t\t.wja-logo {
\t\t\tmax-width: 100px !important;
\t\t\tmargin-top: 0 !important;
\t\t}
\t}
</style>
<!-- Footer -->
<footer class=\"tf-footer style-4\">
\t<div class=\"container d-flex\">
\t\t<span class=\"br-line\"></span>
\t</div>
\t<div class=\"footer-body\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xl-3 col-sm-6 mb_30 mb-xl-0\">
\t\t\t\t\t<div class=\"footer-col-block\">
\t\t\t\t\t\t<p class=\"footer-heading footer-heading-mobile\">Contact us</p>
\t\t\t\t\t\t<div class=\"tf-collapse-content\">
\t\t\t\t\t\t\t<ul class=\"footer-contact\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-phone\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t\t\t\t<a href=\"tel:+19499006910\" class=\"h6 link\">
\t\t\t\t\t\t\t\t\t\t+1 (949) 900-6910</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"icon icon-envelope-simple\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"br-line\"></span>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@zaynjewels.com\" class=\"h6 link\">
\t\t\t\t\t\t\t\t\t\tinfo@zaynjewels.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"social-wrap\">
\t\t\t\t\t\t\t\t<ul class=\"tf-social-icon\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/zaynjewels/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.instagram.com/zaynjewels/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.youtube.com/channel/UC0KmddVZ3BX4Ly5jjBRW7SA\" target=\"_blank\" class=\"social-youtube\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-2 col-sm-6 mb_30 mb-xl-0\">
\t\t\t\t\t<div class=\"footer-col-block footer-wrap-1 ms-xl-auto\">
\t\t\t\t\t\t<p class=\"footer-heading footer-heading-mobile\">Useful Links</p>
\t\t\t\t\t\t<div class=\"tf-collapse-content\">
\t\t\t\t\t\t\t<ul class=\"footer-menu-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/cad\" class=\"link h6\">CAD/CAM Services</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/locations\" class=\"link h6\">Retail Locations</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/education\" class=\"link h6\">Education
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-3 col-sm-6 mb_30 mb-sm-0\">
\t\t\t\t\t<div class=\"footer-col-block footer-wrap-2 mx-xl-auto\">
\t\t\t\t\t\t<p class=\"footer-heading footer-heading-mobile\">Information</p>
\t\t\t\t\t\t<div class=\"tf-collapse-content\">
\t\t\t\t\t\t\t<ul class=\"footer-menu-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/about\" class=\"link h6\">About Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/information&information_id=3\" class=\"link h6\">Privacy Policy</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"index.php?route=information/contact\" class=\"link h6\">Contact Us</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xl-4 col-sm-6\">
\t\t\t\t\t<div class=\"footer-col-block\">
\t\t\t\t\t\t<p class=\"footer-heading footer-heading-mobile\">Let’s keep in touch</p>
\t\t\t\t\t\t<div class=\"tf-collapse-content\">
\t\t\t\t\t\t\t<div class=\"footer-newsletter\">
\t\t\t\t\t\t\t\t<p class=\"h6 caption\">
\t\t\t\t\t\t\t\t\tEnter your email below to be the first to know about new collections and product launches.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<form class=\"form_sub has_check\" id=\"subscribe-form\">
\t\t\t\t\t\t\t\t\t<div class=\"f-content\" id=\"subscribe-content\">
\t\t\t\t\t\t\t\t\t\t<fieldset class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"style-stroke\" id=\"subscribe-email\" type=\"email\" name=\"email-form\" placeholder=\"Enter your email\" required>
\t\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t\t\t<button id=\"subscribe-button\" type=\"button\" class=\"tf-btn animate-btn type-small-2\">
\t\t\t\t\t\t\t\t\t\t\tSubscribe
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon icon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div id=\"subscribe-msg\"></div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"inner-bottom\">
\t\t\t\t<div class=\"list-hor\">
\t\t\t\t\t<p class=\"h6\">Copyright © 2025 Zayn Jewels. All rights reserved.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"list-hor\">

\t\t\t\t\t<img src=\"https://zaynjewels.com/image/new/WJA_logo.png\" alt=\"WJA Logo\" style=\"max-width: 130px; margin-top: -50px;\" class=\"wja-logo\">
\t\t\t\t</div>


\t\t\t\t<div class=\"list-hor flex-wrap\">
\t\t\t\t\t<ul class=\"payment-method-list\">
\t\t\t\t\t\t<li><img src=\"assets/images/payment/visa.png\" alt=\"Payment\"></li>
\t\t\t\t\t\t<li><img src=\"assets/images/payment/master-card.png\" alt=\"Payment\"></li>
\t\t\t\t\t\t<li><img src=\"assets/images/payment/amex.png\" alt=\"Payment\"></li>
\t\t\t\t\t\t<li><img src=\"assets/images/payment/discover.png\" alt=\"Payment\"></li>
\t\t\t\t\t\t<li><img src=\"assets/images/payment/paypal.png\" alt=\"Payment\"></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- /Footer --></div></main>{{ cookie }}<script src=\"assets/js/bootstrap.min.js\"></script><script src=\"assets/js/swiper-bundle.min.js\"></script><script src=\"assets/js/carousel.js\"></script><script src=\"assets/js/bootstrap-select.min.js\"></script><script src=\"assets/js/lazysize.min.js\"></script><script src=\"assets/js/wow.min.js\"></script><script src=\"assets/js/infinityslide.js\"></script><script src=\"assets/js/parallaxie.js\"></script><script src=\"assets/js/count-down.js\"></script><script src=\"assets/js/main.js\"></script><script src=\"assets/js/photoswipe-lightbox.umd.min.js\"></script><script src=\"assets/js/photoswipe.umd.min.js\"></script><script src=\"assets/js/zoom.js\"></script>{% for script in scripts %}<script src=\"{{ script.href }}\" type=\"text/javascript\"></script>{% endfor %}

<!-- Search -->
<div class=\"modal modalCentered fade modal-search\" id=\"search\"><div class=\"modal-dialog modal-dialog-centered\">
<div class=\"modal-content\">
\t<span class=\"icon-close icon-close-popup\" data-bs-dismiss=\"modal\"></span>
\t<div>
\t\t<form action=\"index.php?route=product/search\" method=\"get\" class=\"form-search style-2\">
\t\t\t<fieldset class=\"position-relative\">
\t\t\t\t<input type=\"text\" id=\"search-input\" name=\"search\" placeholder=\"Search for products...\" class=\"style-stroke\" value=\"\" aria-required=\"true\" autocomplete=\"off\">
\t\t\t\t<input type=\"hidden\" name=\"language\" value=\"{{ language|default('en-gb') }}\">
\t\t\t\t<input type=\"hidden\" name=\"description\" value=\"1\">
\t\t\t\t<div id=\"search-suggestions\" class=\"search-suggestions\" style=\"display: none;\"></div>
\t\t\t</fieldset>
\t\t\t<button type=\"submit\" id=\"search-button\" class=\"link\">
\t\t\t\t<i class=\"icon icon-magnifying-glass\"></i>
\t\t\t</button>
\t\t</form>
\t\t<ul class=\"quick-link-list\">
\t\t\t{% if popular_categories %}
\t\t\t\t{% for category in popular_categories %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ category.href }}\" class=\"link-item text-main h6 link\">{{ category.name }}</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t{% else %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"index.php?route=product/category&language={{ language|default('en-gb') }}\" class=\"link-item text-main h6 link\">All Categories</a>
\t\t\t\t</li>
\t\t\t{% endif %}
\t\t</ul>
\t</div>
\t<div class=\"view-history-wrap\">
\t\t<h4 class=\"title\">History</h4>
\t\t<div class=\"view-history-list\"></div>
\t</div>
\t<div class=\"trend-product-wrap\">
\t\t<div class=\"heading\">
\t\t\t<h4 class=\"title flex-grow-1\">Trending product</h4>
\t\t\t<a href=\"index.php?route=product/special&language={{ language|default('en-gb') }}\" class=\"tf-btn-line has-icon none-line fw-medium fs-18 text-normal\">
\t\t\t\tView All Product
\t\t\t\t<i class=\"icon icon-caret-circle-right\"></i>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"trend-product-inner\">
\t\t\t{% if trending_products %}
\t\t\t\t{% set half = (trending_products|length / 2)|round(0, 'ceil') %}
\t\t\t\t<div class=\"trend-product-list\">
\t\t\t\t\t{% for product in trending_products|slice(0, half) %}
\t\t\t\t\t\t<div class=\"trend-product-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"{{ product.thumb }}\" data-src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t{% if product.model %}
\t\t\t\t\t\t\t\t\t<div class=\"text-small text-main-2 sub\">{{ product.model }}</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"link\">{{ product.name }}</a>
\t\t\t\t\t\t\t\t</h6>
                                {% if logged %}
\t\t\t\t\t\t\t\t<div class=\"price-wrap\">
\t\t\t\t\t\t\t\t\t{% if product.special %}
\t\t\t\t\t\t\t\t\t\t<span class=\"price-old h6 fw-normal\">{{ product.price }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">{{ product.special }}</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">{{ product.price }}</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
                                {% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t{% if trending_products|length > half %}
\t\t\t\t<div class=\"trend-product-list\">
\t\t\t\t\t{% for product in trending_products|slice(half) %}
\t\t\t\t\t\t<div class=\"trend-product-item\">
\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"{{ product.thumb }}\" data-src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t{% if product.model %}
\t\t\t\t\t\t\t\t\t<div class=\"text-small text-main-2 sub\">{{ product.model }}</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<h6 class=\"title\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ product.href }}\" class=\"link\">{{ product.name }}</a>
\t\t\t\t\t\t\t\t</h6>
                                {% if logged %}
\t\t\t\t\t\t\t\t<div class=\"price-wrap\">
\t\t\t\t\t\t\t\t\t{% if product.special %}
\t\t\t\t\t\t\t\t\t\t<span class=\"price-old h6 fw-normal\">{{ product.price }}</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">{{ product.special }}</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"price-new h6\">{{ product.price }}</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
                                {% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% else %}
\t\t\t\t<div class=\"trend-product-list\">
\t\t\t\t\t<div class=\"text-center py-3\">
\t\t\t\t\t\t<p class=\"text-muted\">No trending products available</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
</div></div></div>
<!-- /Search -->
<script>\$(document).ready(function () { // Load search history
if (localStorage.getItem('search') && localStorage.getItem('search').length > 0) {
\$('.view-history-list').html(`
                <a class=\"item text-main link h6\" href=\"index.php?route=product/search&language={{ language|default('en-gb') }}&search=\${
encodeURIComponent(localStorage.getItem('search'))
}\">
                            <span style=\"text-transform: capitalize;\">\${
localStorage.getItem('search')
}</span>
                            <i class=\"icon icon-arrow-top-right\"></i>
                        </a>
                `);
} else {
\$('.view-history-list').html('<p class=\"h6\">No search history</p>');
}

// Search suggestions functionality
var searchTimeout;
\$('#search-input').on('input', function () {
var query = \$(this).val().trim();

clearTimeout(searchTimeout);

if (query.length < 2) {
\$('#search-suggestions').hide();
return;
}

searchTimeout = setTimeout(function () {
                    \$.ajax({
                        url: 'index.php?route=product/search.suggest&language={{ language|default(\"en-gb\") }}',
                        type: 'get',
                        data: {
                            search: query
                        },
                        dataType: 'json',
                        success: function(data) {
                            var html = '';
                            if (data && data.length > 0) {
                                data.forEach(function(item) {
                                    html += '<div class=\"search-suggestion-item\" data-href=\"' + item.href + '\" data-name=\"' + item.name + '\">';
                                    html += '<div class=\"suggestion-content\">';
                                    html += '<strong>' + item.name + '</strong>';
                                    if (item.model) {
                                        html += '<br><small class=\"text-muted\">Model: ' + item.model + '</small>';
                                    }
                                    html += '</div>';
                                    html += '<div class=\"suggestion-actions\">';
                                    html += '<button type=\"button\" class=\"btn-suggestion-fill\" data-name=\"' + item.name + '\" title=\"Fill search\"><i class=\"icon icon-edit\"></i></button>';
                                    html += '<button type=\"button\" class=\"btn-suggestion-go\" data-href=\"' + item.href + '\" title=\"Go to product\"><i class=\"icon icon-arrow-right\"></i></button>';
                                    html += '</div>';
                                    html += '</div>';
                                });
                                // Add \"Search for all\" option
                                html += '<div class=\"search-suggestion-item search-all-item\" data-search=\"' + query + '\">';
                                html += '<div class=\"suggestion-content\">';
                                html += '<strong>Search for \"' + query + '\"</strong>';
                                html += '<br><small class=\"text-muted\">View all results</small>';
                                html += '</div>';
                                html += '<div class=\"suggestion-actions\">';
                                html += '<button type=\"button\" class=\"btn-suggestion-search\" data-search=\"' + query + '\" title=\"Search all\"><i class=\"icon icon-magnifying-glass\"></i></button>';
                                html += '</div>';
                                html += '</div>';
                            } else {
                                html = '<div class=\"search-suggestion-item search-all-item\" data-search=\"' + query + '\">';
                                html += '<div class=\"suggestion-content\">';
                                html += '<strong>Search for \"' + query + '\"</strong>';
                                html += '<br><small class=\"text-muted\">Press Enter or click to search</small>';
                                html += '</div>';
                                html += '</div>';
                            }
                            \$('#search-suggestions').html(html).show();
                        },
                        error: function() {
                            \$('#search-suggestions').html('<div class=\"p-2\"><small class=\"text-muted\">Press Enter to search for \"' + query + '\"</small></div>').show();
                        }
                    });
                }, 300);
});

// Prevent modal from closing when clicking inside search area
\$('#search .modal-content').on('click', function(e) {
    e.stopPropagation();
});

// Prevent modal from closing when clicking on search input or suggestions
\$('#search-input, #search-suggestions').on('click', function(e) {
    e.stopPropagation();
});

// Hide suggestions when clicking outside search area (but not when clicking modal close)
\$(document).on('click', function (e) {
    if (!\$(e.target).closest('.form-search').length && !\$(e.target).closest('#search-suggestions').length) {
        \$('#search-suggestions').hide();
    }
});

// Handle search form submission
\$('.form-search').on('submit', function (e) {
    var searchValue = \$('#search-input').val().trim();
    console.log('Form submitted with search value:', searchValue);
    
    if (searchValue) {
        localStorage.setItem('search', searchValue);
        \$('#search-suggestions').hide();
        \$('#search').modal('hide'); // Close modal on successful search
        
        // Build the search URL manually to ensure it works
        var searchUrl = 'index.php?route=product/search&language={{ language|default(\"en-gb\") }}&search=' + encodeURIComponent(searchValue) + '&description=1';
        console.log('Redirecting to:', searchUrl);
        window.location.href = searchUrl;
        
        e.preventDefault(); // Prevent default form submission since we're handling it manually
        return false;
    } else {
        e.preventDefault();
        alert('Please enter a search term');
        return false;
    }
});

// Handle search button click
\$('#search-button').click(function (e) {
    e.preventDefault();
    var searchValue = \$('#search-input').val().trim();
    
    if (searchValue) {
        localStorage.setItem('search', searchValue);
        \$('#search-suggestions').hide();
        \$('#search').modal('hide');
        
        // Redirect to search results
        var searchUrl = 'index.php?route=product/search&language={{ language|default(\"en-gb\") }}&search=' + encodeURIComponent(searchValue) + '&description=1';
        console.log('Button click - Redirecting to:', searchUrl);
        window.location.href = searchUrl;
    } else {
        alert('Please enter a search term');
    }
    
    return false;
});

// Handle search suggestion clicks
\$(document).on('click', '.search-suggestion-item', function(e) {
    // Only handle direct clicks on the suggestion item, not on buttons
    if (\$(e.target).closest('.suggestion-actions').length === 0) {
        var href = \$(this).data('href');
        var search = \$(this).data('search');
        
        if (href) {
            window.location.href = href;
        } else if (search) {
            // Handle \"search for all\" clicks
            performSearch(search);
        }
    }
});

// Handle \"Fill search\" button clicks
\$(document).on('click', '.btn-suggestion-fill', function(e) {
    e.stopPropagation();
    var name = \$(this).data('name');
    \$('#search-input').val(name).focus();
    \$('#search-suggestions').hide();
});

// Handle \"Go to product\" button clicks
\$(document).on('click', '.btn-suggestion-go', function(e) {
    e.stopPropagation();
    var href = \$(this).data('href');
    if (href) {
        window.location.href = href;
    }
});

// Handle \"Search all\" button clicks
\$(document).on('click', '.btn-suggestion-search', function(e) {
    e.stopPropagation();
    var search = \$(this).data('search');
    performSearch(search);
});

// Function to perform search
function performSearch(searchTerm) {
    localStorage.setItem('search', searchTerm);
    \$('#search-suggestions').hide();
    \$('#search').modal('hide');
    
    var searchUrl = 'index.php?route=product/search&language={{ language|default(\"en-gb\") }}&search=' + encodeURIComponent(searchTerm) + '&description=1';
    console.log('Performing search for:', searchTerm, 'URL:', searchUrl);
    window.location.href = searchUrl;
}

// Auto-focus search input when modal opens
\$('#search').on('shown.bs.modal', function() {
    \$('#search-input').focus();
});

// Prevent modal from closing when typing or clicking in search input
\$('#search-input').on('click keydown keyup', function(e) {
    e.stopPropagation();
});

// Clear search input when modal opens
\$('#search').on('show.bs.modal', function() {
    \$('#search-input').val('');
    \$('#search-suggestions').hide();
});

// Keyboard navigation for suggestions
var selectedSuggestion = -1;

\$('#search-input').on('keydown', function(e) {
    var suggestions = \$('.search-suggestion-item:visible');
    
    if (suggestions.length > 0) {
        if (e.keyCode === 40) { // Arrow Down
            e.preventDefault();
            selectedSuggestion++;
            if (selectedSuggestion >= suggestions.length) {
                selectedSuggestion = 0;
            }
            updateSuggestionSelection(suggestions);
        } else if (e.keyCode === 38) { // Arrow Up
            e.preventDefault();
            selectedSuggestion--;
            if (selectedSuggestion < 0) {
                selectedSuggestion = suggestions.length - 1;
            }
            updateSuggestionSelection(suggestions);
        } else if (e.keyCode === 13) { // Enter
            if (selectedSuggestion >= 0 && selectedSuggestion < suggestions.length) {
                e.preventDefault();
                var selectedItem = \$(suggestions[selectedSuggestion]);
                var href = selectedItem.data('href');
                var search = selectedItem.data('search');
                
                if (href) {
                    window.location.href = href;
                } else if (search) {
                    performSearch(search);
                }
            }
        } else if (e.keyCode === 27) { // Escape
            \$('#search-suggestions').hide();
            selectedSuggestion = -1;
        }
    }
});

function updateSuggestionSelection(suggestions) {
    suggestions.removeClass('selected');
    if (selectedSuggestion >= 0 && selectedSuggestion < suggestions.length) {
        \$(suggestions[selectedSuggestion]).addClass('selected');
    }
}

// Reset selection when suggestions change
\$('#search-input').on('input', function() {
    selectedSuggestion = -1;
});
});</script><style>.search-suggestions {
\tposition: absolute;
\ttop: 100%;
\tleft: 0;
\tright: 0;
\tbackground: white;
\tborder: 1px solid #ddd;
\tborder-radius: 4px;
\tbox-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
\tz-index: 1000;
\tmax-height: 200px;
\toverflow-y: auto;
}

.search-suggestion-item {
\tpadding: 10px 15px;
\tcursor: pointer;
\tborder-bottom: 1px solid #f5f5f5;
\tdisplay: flex;
\tjustify-content: space-between;
\talign-items: center;
\ttransition: background-color 0.2s ease;
}

.search-suggestion-item:hover,
.search-suggestion-item.selected {
\tbackground-color: #f8f9fa;
}

.search-suggestion-item:last-child {
\tborder-bottom: none;
}

.suggestion-content {
\tflex-grow: 1;
\ttext-align: left;
}

.suggestion-actions {
\tdisplay: flex;
\tgap: 5px;
\topacity: 0;
\ttransition: opacity 0.2s ease;
}

.search-suggestion-item:hover .suggestion-actions,
.search-suggestion-item.selected .suggestion-actions {
\topacity: 1;
}

.btn-suggestion-fill,
.btn-suggestion-go,
.btn-suggestion-search {
\tbackground: none;
\tborder: none;
\tpadding: 4px 8px;
\tborder-radius: 3px;
\tcursor: pointer;
\tcolor: #666;
\tfont-size: 12px;
\ttransition: all 0.2s ease;
}

.btn-suggestion-fill:hover {
\tbackground-color: #e3f2fd;
\tcolor: #1976d2;
}

.btn-suggestion-go:hover {
\tbackground-color: #e8f5e8;
\tcolor: #388e3c;
}

.btn-suggestion-search:hover {
\tbackground-color: #fff3e0;
\tcolor: #f57c00;
}

.search-all-item {
\tbackground-color: #f8f9fa;
\tfont-weight: 500;
}

.search-all-item:hover {
\tbackground-color: #e9ecef;
}

/* Improve search input placeholder visibility */
#search-input::placeholder {
    color: #999 !important;
    opacity: 1 !important;
    font-size: 14px;
}

#search-input::-webkit-input-placeholder {
    color: #999 !important;
    opacity: 1 !important;
}

#search-input::-moz-placeholder {
    color: #999 !important;
    opacity: 1 !important;
}

#search-input:-ms-input-placeholder {
    color: #999 !important;
    opacity: 1 !important;
}

/* Ensure modal doesn't close when interacting with search */
.modal-search .modal-content {
    pointer-events: auto;
}

.modal-search .form-search {
    pointer-events: auto;
}</style><!-- Quick View Modal --><div class=\"modal fade\" id=\"quickView\" tabindex=\"-1\" aria-labelledby=\"quickViewLabel\" aria-hidden=\"true\"><div class=\"modal-dialog modal-lg modal-dialog-centered\">
<div class=\"modal-content\">
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title tf-product-title\" id=\"quickViewLabel\">Product Quick View</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t<div class=\"row m-0\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"tf-product-media\">
\t\t\t\t\t<img src=\"assets/images/placeholder-250x250.png\" alt=\"Product Image\" class=\"img-fluid\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 p-4 mt-3\">
\t\t\t\t<div class=\"product-infor-sub\">
\t\t\t\t\t<p>Product description will be loaded here...</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"price-wrap mb-3 mt-3\">

\t\t\t\t\t<span class=\"price-new h5 fw-bold text-main\">\$0.00</span>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"tf-product-variant mb-3\"><!-- Product options will be loaded here -->
\t\t\t\t</div>
\t\t\t\t<div class=\"tf-product-total-quantity mb-3\">
\t\t\t\t\t<div class=\"wg-quantity\" style=\"max-width: 60%;\">
\t\t\t\t\t\t<button class=\"btn-quantity minus-btn\">
\t\t\t\t\t\t\t<i class=\"icon icon-minus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<input class=\"quantity-product\" type=\"text\" name=\"quantity\" value=\"1\">
\t\t\t\t\t\t<button class=\"btn-quantity plus-btn\">
\t\t\t\t\t\t\t<i class=\"icon icon-plus\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"tf-product-info-list\">
\t\t\t\t\t<button type=\"button\" class=\"tf-btn animate-btn btn-add-to-cart\" data-url=\"index.php?route=checkout/cart.add&language={{ language }}\" data-product-id=\"\" style=\"max-width: 100%;width: 90%;\">
\t\t\t\t\t\tADD TO CART
\t\t\t\t\t\t<i class=\"icon icon-shopping-cart-simple\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div></div></div><div class=\"offcanvas offcanvas-start canvas-mb \" id=\"mobileMenu\" aria-modal=\"true\" role=\"dialog\"><span class=\"icon-close-popup\" data-bs-dismiss=\"offcanvas\">
<i class=\"icon-close\"></i></span><div class=\"canvas-header\">
{% if logo %}
\t<a href=\"{{ home }}\">
\t\t<img src=\"{{ logo }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-fluid\" width=\"80\"/>
\t</a>
{% else %}
\t<h1>
\t\t<a href=\"{{ home }}\">Zayn</a>
\t</h1>
{% endif %}
{% if not logged %}
\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/login\">
\t\t<i class=\"icon icon-user\"></i>
\t</a>
{% else %}
\t<a class=\"nav-icon-item link\" href=\"index.php?route=account/account\">
\t\t<i class=\"icon icon-user\"></i>
\t</a>
{% endif %}
<span class=\"br-line\"></span></div><div class=\"canvas-body\">
<div class=\"mb-content-top\">
\t<ul class=\"nav-ul-mb\" id=\"wrapper-menu-navigation\">
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-0\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-0\">
\t\t\t\t<span>HOME</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-0\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"index.html\" class=\"sub-nav-link \">Home Fashion 1</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-fashion-2.html\" class=\"sub-nav-link \">Home Fashion 2</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-fashion-3.html\" class=\"sub-nav-link \">Home Fashion 3</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-fashion-4.html\" class=\"sub-nav-link \">Home Fashion 4</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-cosmetic.html\" class=\"sub-nav-link \">Home Cosmetic</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-skin-care.html\" class=\"sub-nav-link \">Home Skincare</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-decor.html\" class=\"sub-nav-link \">Home Decor</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-jewelry.html\" class=\"sub-nav-link \">Home Jewelry</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-electronic-market.html\" class=\"sub-nav-link \">Home
\t\t\t\t\t\t\t                                Electric Market</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-pet-store.html\" class=\"sub-nav-link \">Home Pet Store</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-sneaker.html\" class=\"sub-nav-link \">Home Sneaker</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-book.html\" class=\"sub-nav-link \">Home Book</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-organic.html\" class=\"sub-nav-link \">Home Organic</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-medical.html\" class=\"sub-nav-link \">Home Medical</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-gym.html\" class=\"sub-nav-link \">Home Gym</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-art.html\" class=\"sub-nav-link \">Home Art</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-accessories.html\" class=\"sub-nav-link \">Home Accessories</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-car-auto.html\" class=\"sub-nav-link \">Home Car Auto</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-travel.html\" class=\"sub-nav-link \">Home Travel</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"home-watch.html\" class=\"sub-nav-link \">Home Watch</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-1\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-1\">
\t\t\t\t<span>SHOP</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-1\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-1-group-0\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-1-group-0\">
\t\t\t\t\t\t\t<span>Shop Layout</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-1-group-0\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-default.html\" class=\"sub-nav-link \">Default Grid</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-default-list.html\" class=\"sub-nav-link \">Default List</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-2-columns.html\" class=\"sub-nav-link \">Shop 2 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-3-columns.html\" class=\"sub-nav-link \">Shop 3 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-4-columns.html\" class=\"sub-nav-link \">Shop 4 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-5-columns.html\" class=\"sub-nav-link \">Shop 5 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-6-columns.html\" class=\"sub-nav-link \">Shop 6 Columns</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-1-group-1\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-1-group-1\">
\t\t\t\t\t\t\t<span>Shop Features</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-1-group-1\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-full-width-list.html\" class=\"sub-nav-link \">Full Width List</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-full-width-grid.html\" class=\"sub-nav-link \">Full Width Grid</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-left-sidebar.html\" class=\"sub-nav-link \">Left Sidebar</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-right-sidebar.html\" class=\"sub-nav-link \">Right Sidebar</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-filter-dropdown.html\" class=\"sub-nav-link \">Filter Dropdown</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-filter-drawer.html\" class=\"sub-nav-link \">Filter Drawer</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-1-group-2\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-1-group-2\">
\t\t\t\t\t\t\t<span>Shop Hover</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-1-group-2\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-01.html\" class=\"sub-nav-link \">Hover Style 01</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-02.html\" class=\"sub-nav-link \">Hover Style 02</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-03.html\" class=\"sub-nav-link \">Hover Style 03</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-04.html\" class=\"sub-nav-link \">Hover Style 04</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-05.html\" class=\"sub-nav-link \">Hover Style 05</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-06.html\" class=\"sub-nav-link \">Hover Style 06</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-07.html\" class=\"sub-nav-link \">Hover Style 07</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"shop-hover-08.html\" class=\"sub-nav-link \">Hover Style 08</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-2\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2\">
\t\t\t\t<span>PRODUCT</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-2\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-2-group-0\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2-group-0\">
\t\t\t\t\t\t\t<span>Product Layout</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-2-group-0\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-detail.html\" class=\"sub-nav-link \">Product Detail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-left-thumbnail.html\" class=\"sub-nav-link \">Product Left Thumbnail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-right-thumbnail.html\" class=\"sub-nav-link \">Product Right
\t\t\t\t\t\t\t\t\t\t                                                                    Thumbnail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-bottom-thumbnail.html\" class=\"sub-nav-link \">Product Bottom
\t\t\t\t\t\t\t\t\t\t                                                                    Thumbnail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-grid.html\" class=\"sub-nav-link \">Product Grid</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-grid-2.html\" class=\"sub-nav-link \">Product Grid 2</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-stacked.html\" class=\"sub-nav-link \">Product Stacked</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-2-group-1\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2-group-1\">
\t\t\t\t\t\t\t<span>Product Details</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-2-group-1\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-information.html\" class=\"sub-nav-link \">Product Information</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-group.html\" class=\"sub-nav-link \">Product Group</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-options-customizer.html\" class=\"sub-nav-link \">Product Option
\t\t\t\t\t\t\t\t\t\t                                                                    Customize</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-available.html\" class=\"sub-nav-link \">Product Avaialable</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-video.html\" class=\"sub-nav-link \">Product Video</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-buyX-getY.html\" class=\"sub-nav-link \">Product Buy X Get Y</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-buy-the-look.html\" class=\"sub-nav-link \">Product Buy The Look</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-out-of-stock.html\" class=\"sub-nav-link \">Product Out Of Stock</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-2-group-2\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2-group-2\">
\t\t\t\t\t\t\t<span>Product Feature</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-2-group-2\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-frequently-bought-together.html\" class=\"sub-nav-link \">Buy
\t\t\t\t\t\t\t\t\t\t                                                                    Together</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-often-purchased-together.html\" class=\"sub-nav-link \">Often Purchased
\t\t\t\t\t\t\t\t\t\t                                                                    Together</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-countdown-timer.html\" class=\"sub-nav-link \">Countdown Timer</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-volume-discount.html\" class=\"sub-nav-link \">Volume Discount</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-volume-discount-thumbnail.html\" class=\"sub-nav-link \">Volume Discount
\t\t\t\t\t\t\t\t\t\t                                                                    Thumbnail</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-swatch-dropdown.html\" class=\"sub-nav-link \">Swatch Dropdown</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-swatch-dropdown-color.html\" class=\"sub-nav-link \">Swatch Dropdown
\t\t\t\t\t\t\t\t\t\t                                                                    Color</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-swatch-image.html\" class=\"sub-nav-link \">Swatch Image</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-swatch-image-square.html\" class=\"sub-nav-link \">Swatch Image
\t\t\t\t\t\t\t\t\t\t                                                                    Retangle</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#dropdown-menu-2-group-3\" class=\"collapsed sub-nav-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-2-group-3\">
\t\t\t\t\t\t\t<span>Product Description</span>
\t\t\t\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div id=\"dropdown-menu-2-group-3\" class=\"collapse\">
\t\t\t\t\t\t\t<ul class=\"sub-nav-menu sub-menu-level-2\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-description-accordion.html\" class=\"sub-nav-link \">Product Description
\t\t\t\t\t\t\t\t\t\t                                                                    Accordion</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-description-list.html\" class=\"sub-nav-link \">Product Description
\t\t\t\t\t\t\t\t\t\t                                                                    List</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"product-description-vertical.html\" class=\"sub-nav-link \">Product Description
\t\t\t\t\t\t\t\t\t\t                                                                    Vertical</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-3\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-3\">
\t\t\t\t<span>PAGE</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-3\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"about-us.html\" class=\"sub-nav-link\">About us</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"store-list.html\" class=\"sub-nav-link\">Store List</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"404.html\" class=\"sub-nav-link\">404</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"faq.html\" class=\"sub-nav-link\">FAQs</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"track-order.html\" class=\"sub-nav-link\">Order Tracking</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"invoice.html\" class=\"sub-nav-link\">Invoice</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"account-page.html\" class=\"sub-nav-link\">My account</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t\t<li class=\"nav-mb-item\">
\t\t\t<a href=\"#dropdown-menu-4\" class=\"collapsed mb-menu-link\" data-bs-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"dropdown-menu-4\">
\t\t\t\t<span>BLOG</span>
\t\t\t\t<span class=\"icon icon-caret-down\"></span>
\t\t\t</a>
\t\t\t<div id=\"dropdown-menu-4\" class=\"collapse\">
\t\t\t\t<ul class=\"sub-nav-menu\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog-grid.html\" class=\"sub-nav-link\">Blog Grid</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog-list-1.html\" class=\"sub-nav-link\">Blog List 1</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog-list-2.html\" class=\"sub-nav-link\">Blog List 2</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"blog-detail.html\" class=\"sub-nav-link\">Blog Single</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>
\t</ul>
</div>
<div class=\"group-btn\">
\t<a href=\"{{wishlist}}\" class=\"tf-btn type-small style-2\">
\t\tWishlist
\t\t<i class=\"icon icon-heart\"></i>
\t</a>
\t<div data-bs-dismiss=\"offcanvas\">
\t\t{{ search }}
\t</div>
</div>
<div class=\"flow-us-wrap\">
\t<h5 class=\"title\">Follow us on</h5>
\t<ul class=\"tf-social-icon\">
\t\t<li>
\t\t\t<a href=\"https://www.facebook.com/zaynjewels/\" target=\"_blank\" class=\"social-facebook\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"icon-fb\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"https://www.instagram.com/zaynjewels/\" target=\"_blank\" class=\"social-instagram\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"icon-instagram-logo\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a href=\"https://www.youtube.com/channel/UC0KmddVZ3BX4Ly5jjBRW7SA\" target=\"_blank\" class=\"social-youtube\">
\t\t\t\t<span class=\"icon\">
\t\t\t\t\t<i class=\"fab fa-youtube\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t</li>
\t</ul>
</div></div></div><script>\$(document).ready(function () {
\$('#quickView .btn-close').on('click', function (event) {
\$('.modal-backdrop').removeClass('show');
\$('.modal-backdrop').remove();
});
});</script></body></html>

", "catalog/view/template/common/footer.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\common\\footer.twig");
    }
}
