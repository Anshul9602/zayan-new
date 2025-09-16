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

/* catalog/view/template/account/wishlist_list.twig */
class __TwigTemplate_22a28ac244e3bb94ef86ea12124e223f151db07e2d02578f56044b1039340de1 extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            yield "    <!-- Wishlist Products Grid -->
    <div class=\"wishlist-products-grid\">
        ";
            // line 4
            $context["product_row"] = 0;
            // line 5
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 6
                yield "            <div class=\"wishlist-product-card\">
                <div class=\"product-image\">
                    ";
                // line 8
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 8)) {
                    // line 9
                    yield "                        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
                    yield "\" class=\"image-link\">
                            <img src=\"";
                    // line 10
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 10);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                    yield "\"/>
                        </a>
                    ";
                } else {
                    // line 13
                    yield "                        <div class=\"no-image\">
                            <i class=\"icon icon-image\"></i>
                        </div>
                    ";
                }
                // line 17
                yield "                    <div class=\"product-actions\">
                        <button type=\"submit\" form=\"form-product-";
                // line 18
                yield ($context["product_row"] ?? null);
                yield "\" class=\"action-btn cart-btn\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_cart"] ?? null);
                yield "\">
                            <i class=\"icon icon-shopping-cart\"></i>
                        </button>
                        <a href=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 21);
                yield "\" class=\"action-btn remove-btn\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\">
                            <i class=\"icon icon-x\"></i>
                        </a>
                    </div>
                    <div class=\"wishlist-heart\">
                        <i class=\"icon icon-heart\"></i>
                    </div>
                </div>
                <div class=\"product-info\">
                    <h5 class=\"product-name\">
                        <a href=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 31);
                yield "\" class=\"product-link\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 31);
                yield "</a>
                    </h5>
                    <div class=\"product-meta\">
                        <div class=\"meta-item\">
                            <span class=\"meta-label\">Model:</span>
                            <span class=\"meta-value\">";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 36);
                yield "</span>
                        </div>
                        <div class=\"meta-item\">
                            <span class=\"meta-label\">Stock:</span>
                            <span class=\"meta-value stock-";
                // line 40
                yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 40)), [" " => "-"]);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 40);
                yield "</span>
                        </div>
                    </div>
                    ";
                // line 43
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 43)) {
                    // line 44
                    yield "                        <div class=\"product-price\">
                            ";
                    // line 45
                    if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 45)) {
                        // line 46
                        yield "                                <span class=\"price\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 46);
                        yield "</span>
                            ";
                    } else {
                        // line 48
                        yield "                                <span class=\"price special\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 48);
                        yield "</span>
                                <span class=\"price original\">";
                        // line 49
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49);
                        yield "</span>
                            ";
                    }
                    // line 51
                    yield "                        </div>
                    ";
                }
                // line 53
                yield "                </div>
                
                <!-- Hidden form for cart functionality -->
                <form id=\"form-product-";
                // line 56
                yield ($context["product_row"] ?? null);
                yield "\" action=\"";
                yield ($context["cart_add"] ?? null);
                yield "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                yield ($context["cart"] ?? null);
                yield "\" data-oc-target=\"#cart\" class=\"d-none\">
                    <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 57
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 57);
                yield "\"/>
                    <input type=\"hidden\" name=\"quantity\" value=\"";
                // line 58
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 58);
                yield "\"/>
                </form>
            </div>
            ";
                // line 61
                $context["product_row"] = (($context["product_row"] ?? null) + 1);
                // line 62
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "    </div>
    
    <!-- Pagination -->
    <div class=\"wishlist-pagination\">
        <div class=\"pagination-info\">
            ";
            // line 68
            yield ($context["results"] ?? null);
            yield "
        </div>
        <div class=\"pagination-controls\">
            ";
            // line 71
            yield ($context["pagination"] ?? null);
            yield "
        </div>
    </div>
";
        } else {
            // line 75
            yield "    <!-- Empty Wishlist State -->
    <div class=\"empty-wishlist-state\">
        <div class=\"empty-icon\">
            <i class=\"icon icon-heart\"></i>
        </div>
        <h3>Your Wishlist is Empty</h3>
        <p>";
            // line 81
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <p class=\"empty-suggestion\">Start adding products you love to see them here!</p>
        <a href=\"";
            // line 83
            yield ($context["continue"] ?? null);
            yield "\" class=\"tf-btn btn-fill animate-btn\">
            <i class=\"icon icon-shopping-bag\"></i>
            Start Shopping
        </a>
    </div>
";
        }
        // line 89
        yield "
<style>
/* Wishlist Products Grid */
.wishlist-products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.wishlist-product-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
}

.wishlist-product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #241B68;
}

/* Product Image */
.product-image {
    position: relative;
    aspect-ratio: 1;
    overflow: hidden;
    background: #f8f9fa;
}

.image-link {
    display: block;
    width: 100%;
    height: 100%;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.wishlist-product-card:hover .product-image img {
    transform: scale(1.05);
}

.no-image {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    color: #ccc;
}

.no-image i {
    font-size: 48px;
}

/* Wishlist Heart */
.wishlist-heart {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 40px;
    height: 40px;
    background: rgba(36, 27, 104, 0.9);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.wishlist-heart i {
    font-size: 18px;
}

.wishlist-product-card:hover .wishlist-heart {
    background: #241B68;
    transform: scale(1.1);
}

/* Product Actions */
.product-actions {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.wishlist-product-card:hover .product-actions {
    opacity: 1;
}

.action-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.2s ease;
    border: none;
    cursor: pointer;
}

.cart-btn {
    background: rgba(40, 167, 69, 0.9);
    color: #fff;
}

.cart-btn:hover {
    background: #28a745;
    transform: scale(1.1);
}

.remove-btn {
    background: rgba(220, 53, 69, 0.9);
    color: #fff;
    text-decoration: none;
}

.remove-btn:hover {
    background: #dc3545;
    transform: scale(1.1);
    text-decoration: none;
    color: #fff;
}

/* Product Info */
.product-info {
    padding: 20px;
}

.product-name {
    margin: 0 0 12px 0;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.3;
}

.product-link {
    color: #333;
    text-decoration: none;
    transition: color 0.2s ease;
}

.product-link:hover {
    color: #241B68;
    text-decoration: none;
}

.product-meta {
    margin-bottom: 15px;
}

.meta-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 6px;
    font-size: 14px;
}

.meta-item:last-child {
    margin-bottom: 0;
}

.meta-label {
    color: #666;
    font-weight: 500;
}

.meta-value {
    color: #333;
    font-weight: 600;
}

.meta-value.stock-in-stock {
    color: #28a745;
}

.meta-value.stock-out-of-stock {
    color: #dc3545;
}

.product-price {
    text-align: center;
    padding-top: 15px;
    border-top: 1px solid #f1f1f1;
}

.product-price .price {
    font-size: 18px;
    font-weight: 700;
    color: #241B68;
}

.product-price .price.special {
    color: #dc3545;
    margin-right: 8px;
}

.product-price .price.original {
    color: #999;
    text-decoration: line-through;
    font-size: 14px;
    font-weight: 500;
}

/* Empty Wishlist State */
.empty-wishlist-state {
    text-align: center;
    padding: 80px 20px;
    color: #666;
}

.empty-icon {
    margin-bottom: 25px;
}

.empty-icon i {
    font-size: 64px;
    color: #241B68;
    opacity: 0.6;
}

.empty-wishlist-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-wishlist-state p {
    margin: 0 0 10px 0;
    font-size: 16px;
    color: #666;
}

.empty-suggestion {
    margin-bottom: 30px !important;
    font-style: italic;
    color: #999;
}

.empty-wishlist-state .tf-btn {
    padding: 15px 30px;
    font-size: 16px;
}

/* Pagination */
.wishlist-pagination {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    border-top: 1px solid #e9ecef;
    margin-top: 20px;
}

.pagination-info {
    color: #666;
    font-size: 14px;
}

.pagination-controls {
    display: flex;
    align-items: center;
}

/* Responsive Design */
@media (max-width: 992px) {
    .wishlist-products-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .wishlist-products-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
    
    .product-info {
        padding: 15px;
    }
    
    .wishlist-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}

@media (max-width: 576px) {
    .wishlist-products-grid {
        grid-template-columns: 1fr;
        margin: 0 -15px;
    }
    
    .wishlist-product-card {
        border-radius: 0;
        margin-bottom: 15px;
    }
    
    .empty-wishlist-state {
        padding: 60px 15px;
    }
    
    .empty-icon i {
        font-size: 48px;
    }
    
    .empty-wishlist-state h3 {
        font-size: 24px;
    }
}
</style>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/wishlist_list.twig";
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
        return array (  233 => 89,  224 => 83,  219 => 81,  211 => 75,  204 => 71,  198 => 68,  191 => 63,  185 => 62,  183 => 61,  177 => 58,  173 => 57,  165 => 56,  160 => 53,  156 => 51,  151 => 49,  146 => 48,  140 => 46,  138 => 45,  135 => 44,  133 => 43,  125 => 40,  118 => 36,  108 => 31,  93 => 21,  85 => 18,  82 => 17,  76 => 13,  66 => 10,  61 => 9,  59 => 8,  55 => 6,  50 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
    <!-- Wishlist Products Grid -->
    <div class=\"wishlist-products-grid\">
        {% set product_row = 0 %}
        {% for product in products %}
            <div class=\"wishlist-product-card\">
                <div class=\"product-image\">
                    {% if product.thumb %}
                        <a href=\"{{ product.href }}\" class=\"image-link\">
                            <img src=\"{{ product.thumb }}\" alt=\"{{ product.name }}\" title=\"{{ product.name }}\"/>
                        </a>
                    {% else %}
                        <div class=\"no-image\">
                            <i class=\"icon icon-image\"></i>
                        </div>
                    {% endif %}
                    <div class=\"product-actions\">
                        <button type=\"submit\" form=\"form-product-{{ product_row }}\" class=\"action-btn cart-btn\" data-bs-toggle=\"tooltip\" title=\"{{ button_cart }}\">
                            <i class=\"icon icon-shopping-cart\"></i>
                        </button>
                        <a href=\"{{ product.remove }}\" class=\"action-btn remove-btn\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\">
                            <i class=\"icon icon-x\"></i>
                        </a>
                    </div>
                    <div class=\"wishlist-heart\">
                        <i class=\"icon icon-heart\"></i>
                    </div>
                </div>
                <div class=\"product-info\">
                    <h5 class=\"product-name\">
                        <a href=\"{{ product.href }}\" class=\"product-link\">{{ product.name }}</a>
                    </h5>
                    <div class=\"product-meta\">
                        <div class=\"meta-item\">
                            <span class=\"meta-label\">Model:</span>
                            <span class=\"meta-value\">{{ product.model }}</span>
                        </div>
                        <div class=\"meta-item\">
                            <span class=\"meta-label\">Stock:</span>
                            <span class=\"meta-value stock-{{ product.stock|lower|replace({' ': '-'}) }}\">{{ product.stock }}</span>
                        </div>
                    </div>
                    {% if product.price %}
                        <div class=\"product-price\">
                            {% if not product.special %}
                                <span class=\"price\">{{ product.price }}</span>
                            {% else %}
                                <span class=\"price special\">{{ product.special }}</span>
                                <span class=\"price original\">{{ product.price }}</span>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>
                
                <!-- Hidden form for cart functionality -->
                <form id=\"form-product-{{ product_row }}\" action=\"{{ cart_add }}\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ cart }}\" data-oc-target=\"#cart\" class=\"d-none\">
                    <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/>
                    <input type=\"hidden\" name=\"quantity\" value=\"{{ product.minimum }}\"/>
                </form>
            </div>
            {% set product_row = product_row + 1 %}
        {% endfor %}
    </div>
    
    <!-- Pagination -->
    <div class=\"wishlist-pagination\">
        <div class=\"pagination-info\">
            {{ results }}
        </div>
        <div class=\"pagination-controls\">
            {{ pagination }}
        </div>
    </div>
{% else %}
    <!-- Empty Wishlist State -->
    <div class=\"empty-wishlist-state\">
        <div class=\"empty-icon\">
            <i class=\"icon icon-heart\"></i>
        </div>
        <h3>Your Wishlist is Empty</h3>
        <p>{{ text_no_results }}</p>
        <p class=\"empty-suggestion\">Start adding products you love to see them here!</p>
        <a href=\"{{ continue }}\" class=\"tf-btn btn-fill animate-btn\">
            <i class=\"icon icon-shopping-bag\"></i>
            Start Shopping
        </a>
    </div>
{% endif %}

<style>
/* Wishlist Products Grid */
.wishlist-products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.wishlist-product-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
}

.wishlist-product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-color: #241B68;
}

/* Product Image */
.product-image {
    position: relative;
    aspect-ratio: 1;
    overflow: hidden;
    background: #f8f9fa;
}

.image-link {
    display: block;
    width: 100%;
    height: 100%;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.wishlist-product-card:hover .product-image img {
    transform: scale(1.05);
}

.no-image {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100%;
    color: #ccc;
}

.no-image i {
    font-size: 48px;
}

/* Wishlist Heart */
.wishlist-heart {
    position: absolute;
    top: 10px;
    left: 10px;
    width: 40px;
    height: 40px;
    background: rgba(36, 27, 104, 0.9);
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.wishlist-heart i {
    font-size: 18px;
}

.wishlist-product-card:hover .wishlist-heart {
    background: #241B68;
    transform: scale(1.1);
}

/* Product Actions */
.product-actions {
    position: absolute;
    top: 10px;
    right: 10px;
    display: flex;
    flex-direction: column;
    gap: 8px;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.wishlist-product-card:hover .product-actions {
    opacity: 1;
}

.action-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.2s ease;
    border: none;
    cursor: pointer;
}

.cart-btn {
    background: rgba(40, 167, 69, 0.9);
    color: #fff;
}

.cart-btn:hover {
    background: #28a745;
    transform: scale(1.1);
}

.remove-btn {
    background: rgba(220, 53, 69, 0.9);
    color: #fff;
    text-decoration: none;
}

.remove-btn:hover {
    background: #dc3545;
    transform: scale(1.1);
    text-decoration: none;
    color: #fff;
}

/* Product Info */
.product-info {
    padding: 20px;
}

.product-name {
    margin: 0 0 12px 0;
    font-size: 16px;
    font-weight: 600;
    line-height: 1.3;
}

.product-link {
    color: #333;
    text-decoration: none;
    transition: color 0.2s ease;
}

.product-link:hover {
    color: #241B68;
    text-decoration: none;
}

.product-meta {
    margin-bottom: 15px;
}

.meta-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 6px;
    font-size: 14px;
}

.meta-item:last-child {
    margin-bottom: 0;
}

.meta-label {
    color: #666;
    font-weight: 500;
}

.meta-value {
    color: #333;
    font-weight: 600;
}

.meta-value.stock-in-stock {
    color: #28a745;
}

.meta-value.stock-out-of-stock {
    color: #dc3545;
}

.product-price {
    text-align: center;
    padding-top: 15px;
    border-top: 1px solid #f1f1f1;
}

.product-price .price {
    font-size: 18px;
    font-weight: 700;
    color: #241B68;
}

.product-price .price.special {
    color: #dc3545;
    margin-right: 8px;
}

.product-price .price.original {
    color: #999;
    text-decoration: line-through;
    font-size: 14px;
    font-weight: 500;
}

/* Empty Wishlist State */
.empty-wishlist-state {
    text-align: center;
    padding: 80px 20px;
    color: #666;
}

.empty-icon {
    margin-bottom: 25px;
}

.empty-icon i {
    font-size: 64px;
    color: #241B68;
    opacity: 0.6;
}

.empty-wishlist-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-wishlist-state p {
    margin: 0 0 10px 0;
    font-size: 16px;
    color: #666;
}

.empty-suggestion {
    margin-bottom: 30px !important;
    font-style: italic;
    color: #999;
}

.empty-wishlist-state .tf-btn {
    padding: 15px 30px;
    font-size: 16px;
}

/* Pagination */
.wishlist-pagination {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    border-top: 1px solid #e9ecef;
    margin-top: 20px;
}

.pagination-info {
    color: #666;
    font-size: 14px;
}

.pagination-controls {
    display: flex;
    align-items: center;
}

/* Responsive Design */
@media (max-width: 992px) {
    .wishlist-products-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .wishlist-products-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
    
    .product-info {
        padding: 15px;
    }
    
    .wishlist-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}

@media (max-width: 576px) {
    .wishlist-products-grid {
        grid-template-columns: 1fr;
        margin: 0 -15px;
    }
    
    .wishlist-product-card {
        border-radius: 0;
        margin-bottom: 15px;
    }
    
    .empty-wishlist-state {
        padding: 60px 15px;
    }
    
    .empty-icon i {
        font-size: 48px;
    }
    
    .empty-wishlist-state h3 {
        font-size: 24px;
    }
}
</style>", "catalog/view/template/account/wishlist_list.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\wishlist_list.twig");
    }
}
