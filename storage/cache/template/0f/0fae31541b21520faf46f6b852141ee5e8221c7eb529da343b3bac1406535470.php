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
        yield " <!-- Product 4 -->
 <div class=\"card-product grid\" data-availability=\"In stock\" data-brand=\"automet\">
                                    <div class=\"card-product_wrapper\">
                                        <a href=\"";
        // line 4
        yield ($context["href"] ?? null);
        yield "\" class=\"product-img\">
                                            <img class=\"lazyload img-product\" src=\"image/";
        // line 5
        yield ($context["image"] ?? null);
        yield "\" alt=\"Product\">
                                            <img class=\"lazyload img-hover\" src=\"image/";
        // line 6
        yield ($context["image"] ?? null);
        yield "\" alt=\"Product\">
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
                                        <a href=\"";
        // line 30
        yield ($context["href"] ?? null);
        yield "\" class=\"name-product h4 link\">";
        yield ($context["name"] ?? null);
        yield "</a>
                                        <div class=\"price-wrap\">
                                            <span class=\"price-new h6\">";
        // line 32
        yield ($context["price"] ?? null);
        yield "</span>
                                        </div>
                                        <ul class=\"product-color_list\">
                                            <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                                                <span class=\"tooltip color-filter\">Pink</span>
                                                <span class=\"swatch-value bg-hot-pink\"></span>
                                                <img class=\"lazyload\" src=\"assets/images//products/product-7.jpg\" data-src=\"assets/images//products/product-7.jpg\"
                                                    alt=\"Product\">
                                            </li>
                                            <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                                                <span class=\"tooltip color-filter\">Beige</span>
                                                <span class=\"swatch-value bg-light-beige\"></span>
                                                <img class=\"lazyload\" src=\"assets/images//products/product-9.jpg\" data-src=\"assets/images//products/product-9.jpg\"
                                                    alt=\"Product\">

                                            </li>
                                            <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                                                <span class=\"tooltip color-filter\">Dusty Olive</span>
                                                <span class=\"swatch-value bg-dusty-olive\"></span>
                                                <img class=\"lazyload\" src=\"assets/images//products/product-11.jpg\" data-src=\"assets/images//products/product-11.jpg\"
                                                    alt=\"Product\">
                                            </li>
                                        </ul>
                                    </div>
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
        return array (  89 => 32,  82 => 30,  55 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" <!-- Product 4 -->
 <div class=\"card-product grid\" data-availability=\"In stock\" data-brand=\"automet\">
                                    <div class=\"card-product_wrapper\">
                                        <a href=\"{{ href }}\" class=\"product-img\">
                                            <img class=\"lazyload img-product\" src=\"image/{{ image }}\" alt=\"Product\">
                                            <img class=\"lazyload img-hover\" src=\"image/{{ image }}\" alt=\"Product\">
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
                                        <a href=\"{{ href }}\" class=\"name-product h4 link\">{{ name }}</a>
                                        <div class=\"price-wrap\">
                                            <span class=\"price-new h6\">{{ price }}</span>
                                        </div>
                                        <ul class=\"product-color_list\">
                                            <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot active\">
                                                <span class=\"tooltip color-filter\">Pink</span>
                                                <span class=\"swatch-value bg-hot-pink\"></span>
                                                <img class=\"lazyload\" src=\"assets/images//products/product-7.jpg\" data-src=\"assets/images//products/product-7.jpg\"
                                                    alt=\"Product\">
                                            </li>
                                            <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                                                <span class=\"tooltip color-filter\">Beige</span>
                                                <span class=\"swatch-value bg-light-beige\"></span>
                                                <img class=\"lazyload\" src=\"assets/images//products/product-9.jpg\" data-src=\"assets/images//products/product-9.jpg\"
                                                    alt=\"Product\">

                                            </li>
                                            <li class=\"product-color-item color-swatch hover-tooltip tooltip-bot\">
                                                <span class=\"tooltip color-filter\">Dusty Olive</span>
                                                <span class=\"swatch-value bg-dusty-olive\"></span>
                                                <img class=\"lazyload\" src=\"assets/images//products/product-11.jpg\" data-src=\"assets/images//products/product-11.jpg\"
                                                    alt=\"Product\">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            




                          ", "catalog/view/template/product/thumb.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\product\\thumb.twig");
    }
}
