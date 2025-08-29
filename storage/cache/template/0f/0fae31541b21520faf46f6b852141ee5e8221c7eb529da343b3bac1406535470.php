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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_f964d5d6760e2091e2eaad35e283e5cb6b367148341682d798b9ada5a516d740 extends Template
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
        yield "<!-- Product Card -->
<div class=\"card-product grid\" data-availability=\"In stock\" data-brand=\"automet\" data-product-id=\"";
        // line 2
        yield ($context["product_id"] ?? null);
        yield "\">
\t<div class=\"card-product_wrapper\">
\t\t<a href=\"";
        // line 4
        yield ($context["href"] ?? null);
        yield "\" class=\"product-img\">
\t\t\t<img class=\"lazyload img-product\" src=\"";
        // line 5
        yield ($context["thumb"] ?? null);
        yield "\" data-src=\"";
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\">
\t\t\t<img class=\"lazyload img-hover\" src=\"";
        // line 6
        yield ($context["thumb"] ?? null);
        yield "\" data-src=\"";
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\">
\t\t\t";
        // line 9
        yield "\t\t</a>
\t\t<ul class=\"product-action_list\">
\t\t\t<li>
\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon btn-add-to-cart\" data-url=\"";
        // line 12
        yield ($context["cart_add"] ?? null);
        yield "\" data-product-id=\"";
        yield ($context["product_id"] ?? null);
        yield "\" data-quantity=\"1\">
\t\t\t\t\t<span class=\"icon icon-shopping-cart-simple\"></span>
\t\t\t\t\t<span class=\"tooltip\">Add to cart</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"wishlist\">
\t\t\t\t<a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon btn-add-wishlist\" data-url=\"";
        // line 18
        yield ($context["wishlist_add"] ?? null);
        yield "\" data-product-id=\"";
        yield ($context["product_id"] ?? null);
        yield "\">
\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon btn-quick-view\" data-product-id=\"";
        // line 24
        yield ($context["product_id"] ?? null);
        yield "\">
\t\t\t\t\t<span class=\"icon icon-view\"></span>
\t\t\t\t\t<span class=\"tooltip\">Quick view</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"card-product_info\">
\t\t<a href=\"";
        // line 32
        yield ($context["href"] ?? null);
        yield "\" class=\"name-product h4 link\">";
        yield ($context["name"] ?? null);
        yield "</a>
\t\t<div class=\"price-wrap\">
\t\t\t";
        // line 34
        if (($context["special"] ?? null)) {
            // line 35
            yield "\t\t\t\t<span class=\"price-old h6 fw-normal\">";
            yield ($context["price"] ?? null);
            yield "</span>
\t\t\t\t<span class=\"price-new h6\">";
            // line 36
            yield ($context["special"] ?? null);
            yield "</span>
\t\t\t";
        } else {
            // line 38
            yield "\t\t\t\t<span class=\"price-new h6\">";
            yield ($context["price"] ?? null);
            yield "</span>
\t\t\t";
        }
        // line 40
        yield "\t\t</div>
\t\t<ul class=\"product-color_list\">
\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
\t\t\t\t<span class=\"tooltip color-filter\">Pink</span>
\t\t\t\t<span class=\"swatch-value bg-hot-pink\"></span>
\t\t\t\t<img class=\"lazyload\" src=\"assets/images//products/product-7.jpg\" data-src=\"assets/images//products/product-7.jpg\" alt=\"Product\">
\t\t\t</li>
\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
\t\t\t\t<span class=\"tooltip color-filter\">Beige</span>
\t\t\t\t<span class=\"swatch-value bg-light-beige\"></span>
\t\t\t\t<img class=\"lazyload\" src=\"assets/WG.jpg\" data-src=\"assets/WG.jpg\" alt=\"Product\">

\t\t\t</li>
\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
\t\t\t\t<span class=\"tooltip color-filter\">Dusty Olive</span>
\t\t\t\t<span class=\"swatch-value bg-dusty-olive\"></span>
\t\t\t\t<img class=\"lazyload\" src=\"assets/YG.JPG\" data-src=\"assets/YG.JPG\" alt=\"Product\">
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/thumb.twig";
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
        return array (  133 => 40,  127 => 38,  122 => 36,  117 => 35,  115 => 34,  108 => 32,  97 => 24,  86 => 18,  75 => 12,  70 => 9,  62 => 6,  54 => 5,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Product Card -->
<div class=\"card-product grid\" data-availability=\"In stock\" data-brand=\"automet\" data-product-id=\"{{ product_id }}\">
\t<div class=\"card-product_wrapper\">
\t\t<a href=\"{{ href }}\" class=\"product-img\">
\t\t\t<img class=\"lazyload img-product\" src=\"{{ thumb }}\" data-src=\"{{ thumb }}\" alt=\"{{ name }}\">
\t\t\t<img class=\"lazyload img-hover\" src=\"{{ thumb }}\" data-src=\"{{ thumb }}\" alt=\"{{ name }}\">
\t\t\t{# <img class=\"lazyload img-product\" src=\"assets/RG.JPG\" data-src=\"assets/RG.JPG\" alt=\"{{ name }}\">
\t\t\t<img class=\"lazyload img-hover\" src=\"assets/RG.JPG\" data-src=\"assets/RG.JPG\" alt=\"{{ name }}\"> #}
\t\t</a>
\t\t<ul class=\"product-action_list\">
\t\t\t<li>
\t\t\t\t<a href=\"#shoppingCart\" data-bs-toggle=\"offcanvas\" class=\"hover-tooltip tooltip-left box-icon btn-add-to-cart\" data-url=\"{{ cart_add }}\" data-product-id=\"{{ product_id }}\" data-quantity=\"1\">
\t\t\t\t\t<span class=\"icon icon-shopping-cart-simple\"></span>
\t\t\t\t\t<span class=\"tooltip\">Add to cart</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"wishlist\">
\t\t\t\t<a href=\"javascript:void(0);\" class=\"hover-tooltip tooltip-left box-icon btn-add-wishlist\" data-url=\"{{ wishlist_add }}\" data-product-id=\"{{ product_id }}\">
\t\t\t\t\t<span class=\"icon icon-heart\"></span>
\t\t\t\t\t<span class=\"tooltip\">Add to Wishlist</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"#quickView\" data-bs-toggle=\"modal\" class=\"hover-tooltip tooltip-left box-icon btn-quick-view\" data-product-id=\"{{ product_id }}\">
\t\t\t\t\t<span class=\"icon icon-view\"></span>
\t\t\t\t\t<span class=\"tooltip\">Quick view</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"card-product_info\">
\t\t<a href=\"{{ href }}\" class=\"name-product h4 link\">{{ name }}</a>
\t\t<div class=\"price-wrap\">
\t\t\t{% if special %}
\t\t\t\t<span class=\"price-old h6 fw-normal\">{{ price }}</span>
\t\t\t\t<span class=\"price-new h6\">{{ special }}</span>
\t\t\t{% else %}
\t\t\t\t<span class=\"price-new h6\">{{ price }}</span>
\t\t\t{% endif %}
\t\t</div>
\t\t<ul class=\"product-color_list\">
\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
\t\t\t\t<span class=\"tooltip color-filter\">Pink</span>
\t\t\t\t<span class=\"swatch-value bg-hot-pink\"></span>
\t\t\t\t<img class=\"lazyload\" src=\"assets/images//products/product-7.jpg\" data-src=\"assets/images//products/product-7.jpg\" alt=\"Product\">
\t\t\t</li>
\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
\t\t\t\t<span class=\"tooltip color-filter\">Beige</span>
\t\t\t\t<span class=\"swatch-value bg-light-beige\"></span>
\t\t\t\t<img class=\"lazyload\" src=\"assets/WG.jpg\" data-src=\"assets/WG.jpg\" alt=\"Product\">

\t\t\t</li>
\t\t\t<li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
\t\t\t\t<span class=\"tooltip color-filter\">Dusty Olive</span>
\t\t\t\t<span class=\"swatch-value bg-dusty-olive\"></span>
\t\t\t\t<img class=\"lazyload\" src=\"assets/YG.JPG\" data-src=\"assets/YG.JPG\" alt=\"Product\">
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
", "catalog/view/template/product/thumb.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\product\\thumb.twig");
    }
}
