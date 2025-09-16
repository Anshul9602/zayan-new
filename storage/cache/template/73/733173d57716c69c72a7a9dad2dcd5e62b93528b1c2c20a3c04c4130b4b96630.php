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

/* catalog/view/template/account/order_list.twig */
class __TwigTemplate_86db28d5a3a053c438b1a43490e7f4525b833c2bf17329164550c151ff79e9e5 extends Template
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
<section class=\"s-page-title\" style=\"padding-top:100px;\">
    <div class=\"container\">
        <div class=\"content\" style=\"padding-bottom: 19px;\">
            <ul class=\"breadcrumbs-page\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "                    <li class=\"breadcrumb-item\" style=\"display:flex;\">
                        <a href=\"";
            // line 10
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            yield "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "            </ul>
            <h1 class=\"title-page\">";
        // line 14
        yield ($context["heading_title"] ?? null);
        yield "</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Orders List -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 24
        yield ($context["column_left"] ?? null);
        yield "
            <div id=\"content\" class=\"col\">
                ";
        // line 26
        yield ($context["content_top"] ?? null);
        yield "
                
                ";
        // line 28
        if (($context["orders"] ?? null)) {
            // line 29
            yield "                    <!-- Orders Grid -->
                    <div class=\"orders-container\">
                        <div class=\"orders-grid\">
                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 33
                yield "                                <div class=\"order-card\">
                                    <div class=\"order-header\">
                                        <div class=\"order-id\">
                                            <h4>#";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 36);
                yield "</h4>
                                            <span class=\"order-date\">
                                                <i class=\"icon icon-calendar\"></i>
                                                ";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 39);
                yield "
                                            </span>
                                        </div>
                                        <div class=\"order-status\">
                                            <span class=\"status-badge status-";
                // line 43
                yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 43)), [" " => "-"]);
                yield "\">
                                                ";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 44);
                yield "
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"order-details\">
                                        <div class=\"detail-item\">
                                            <span class=\"detail-label\">
                                                <i class=\"icon icon-package\"></i>
                                                Items
                                            </span>
                                            <span class=\"detail-value\">";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "product_total", [], "any", false, false, false, 55);
                yield "</span>
                                        </div>
                                        <div class=\"detail-item\">
                                            <span class=\"detail-label\">
                                                <i class=\"icon icon-dollar-sign\"></i>
                                                Total
                                            </span>
                                            <span class=\"detail-value total-amount\">";
                // line 62
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 62);
                yield "</span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"order-actions\">
                                        <a href=\"";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 67);
                yield "\" class=\"tf-btn btn-fill animate-btn\">
                                            <i class=\"icon icon-eye\"></i>
                                            ";
                // line 69
                yield ($context["button_view"] ?? null);
                yield "
                                        </a>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                        </div>
                        
                        <!-- Pagination -->
                        <div class=\"orders-pagination\">
                            <div class=\"pagination-info\">
                                ";
            // line 79
            yield ($context["results"] ?? null);
            yield "
                            </div>
                            <div class=\"pagination-controls\">
                                ";
            // line 82
            yield ($context["pagination"] ?? null);
            yield "
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 87
            yield "                    <!-- Empty State -->
                    <div class=\"empty-orders-state\">
                        <div class=\"empty-icon\">
                            <i class=\"icon icon-shopping-bag\"></i>
                        </div>
                        <h3>No Orders Found</h3>
                        <p>";
            // line 93
            yield ($context["text_no_results"] ?? null);
            yield "</p>
                        <a href=\"";
            // line 94
            yield ($context["continue"] ?? null);
            yield "\" class=\"tf-btn btn-fill animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            Continue Shopping
                        </a>
                    </div>
                ";
        }
        // line 100
        yield "                
                <!-- Continue Button -->
                ";
        // line 102
        if (($context["orders"] ?? null)) {
            // line 103
            yield "                    <div class=\"orders-actions text-center mt-4\">
                        <a href=\"";
            // line 104
            yield ($context["continue"] ?? null);
            yield "\" class=\"tf-btn btn-outline animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            ";
            // line 106
            yield ($context["button_continue"] ?? null);
            yield "
                        </a>
                    </div>
                ";
        }
        // line 110
        yield "                
                ";
        // line 111
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 113
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Orders List -->

<style>
/* Orders List Page Styling */
.orders-container {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 20px;
}

.orders-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.order-card {
    background: #fafafa;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.order-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, #000 0%, #666 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.order-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    background: #fff;
}

.order-card:hover::before {
    opacity: 1;
}

.order-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e9ecef;
}

.order-id h4 {
    margin: 0 0 8px 0;
    font-size: 20px;
    font-weight: 700;
    color: #000;
}

.order-date {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    color: #666;
}

.order-date i {
    font-size: 14px;
}

.order-status {
    flex-shrink: 0;
}

.status-badge {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Status Badge Colors */
.status-pending {
    background: #fff3cd;
    color: #856404;
    border: 1px solid #ffeaa7;
}

.status-processing {
    background: #d1ecf1;
    color: #0c5460;
    border: 1px solid #bee5eb;
}

.status-shipped {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.status-delivered {
    background: #d1ecf1;
    color: #0c5460;
    border: 1px solid #bee5eb;
}

.status-cancelled {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.status-refunded {
    background: #e2e3e5;
    color: #383d41;
    border: 1px solid #d6d8db;
}

.status-complete {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.order-details {
    margin-bottom: 20px;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
    padding: 8px 0;
}

.detail-item:last-child {
    margin-bottom: 0;
}

.detail-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #666;
    font-weight: 500;
}

.detail-label i {
    font-size: 16px;
}

.detail-value {
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.total-amount {
    font-size: 18px;
    font-weight: 700;
    color: #000;
}

.order-actions {
    display: flex;
    justify-content: center;
}

.order-actions .tf-btn {
    width: 100%;
    padding: 12px 20px;
    font-size: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

/* Pagination */
.orders-pagination {
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

/* Empty State */
.empty-orders-state {
    text-align: center;
    padding: 80px 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.empty-icon {
    margin-bottom: 25px;
}

.empty-icon i {
    font-size: 64px;
    color: #ccc;
}

.empty-orders-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-orders-state p {
    margin: 0 0 30px 0;
    font-size: 16px;
    color: #666;
    line-height: 1.6;
}

.empty-orders-state .tf-btn {
    padding: 15px 30px;
    font-size: 16px;
}

/* Orders Actions */
.orders-actions .tf-btn {
    padding: 12px 30px;
    font-size: 16px;
    min-width: 200px;
}

/* Responsive Design */
@media (max-width: 992px) {
    .orders-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .orders-grid {
        grid-template-columns: 1fr;
    }
    
    .order-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    
    .orders-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .orders-container {
        padding: 15px;
    }
    
    .order-card {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    .orders-container {
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-orders-state {
        padding: 60px 15px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-icon i {
        font-size: 48px;
    }
    
    .empty-orders-state h3 {
        font-size: 24px;
    }
    
    .order-id h4 {
        font-size: 18px;
    }
}
</style>

";
        // line 433
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
        return "catalog/view/template/account/order_list.twig";
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
        return array (  571 => 433,  248 => 113,  243 => 111,  240 => 110,  233 => 106,  228 => 104,  225 => 103,  223 => 102,  219 => 100,  210 => 94,  206 => 93,  198 => 87,  190 => 82,  184 => 79,  177 => 74,  166 => 69,  161 => 67,  153 => 62,  143 => 55,  129 => 44,  125 => 43,  118 => 39,  112 => 36,  107 => 33,  103 => 32,  98 => 29,  96 => 28,  91 => 26,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<!-- Page Title -->
<section class=\"s-page-title\" style=\"padding-top:100px;\">
    <div class=\"container\">
        <div class=\"content\" style=\"padding-bottom: 19px;\">
            <ul class=\"breadcrumbs-page\">
                {% for breadcrumb in breadcrumbs %}
                    <li class=\"breadcrumb-item\" style=\"display:flex;\">
                        <a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a>
                    </li>
                {% endfor %}
            </ul>
            <h1 class=\"title-page\">{{ heading_title }}</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Orders List -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                {% if orders %}
                    <!-- Orders Grid -->
                    <div class=\"orders-container\">
                        <div class=\"orders-grid\">
                            {% for order in orders %}
                                <div class=\"order-card\">
                                    <div class=\"order-header\">
                                        <div class=\"order-id\">
                                            <h4>#{{ order.order_id }}</h4>
                                            <span class=\"order-date\">
                                                <i class=\"icon icon-calendar\"></i>
                                                {{ order.date_added }}
                                            </span>
                                        </div>
                                        <div class=\"order-status\">
                                            <span class=\"status-badge status-{{ order.status|lower|replace({' ': '-'}) }}\">
                                                {{ order.status }}
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"order-details\">
                                        <div class=\"detail-item\">
                                            <span class=\"detail-label\">
                                                <i class=\"icon icon-package\"></i>
                                                Items
                                            </span>
                                            <span class=\"detail-value\">{{ order.product_total }}</span>
                                        </div>
                                        <div class=\"detail-item\">
                                            <span class=\"detail-label\">
                                                <i class=\"icon icon-dollar-sign\"></i>
                                                Total
                                            </span>
                                            <span class=\"detail-value total-amount\">{{ order.total }}</span>
                                        </div>
                                    </div>
                                    
                                    <div class=\"order-actions\">
                                        <a href=\"{{ order.view }}\" class=\"tf-btn btn-fill animate-btn\">
                                            <i class=\"icon icon-eye\"></i>
                                            {{ button_view }}
                                        </a>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                        
                        <!-- Pagination -->
                        <div class=\"orders-pagination\">
                            <div class=\"pagination-info\">
                                {{ results }}
                            </div>
                            <div class=\"pagination-controls\">
                                {{ pagination }}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <!-- Empty State -->
                    <div class=\"empty-orders-state\">
                        <div class=\"empty-icon\">
                            <i class=\"icon icon-shopping-bag\"></i>
                        </div>
                        <h3>No Orders Found</h3>
                        <p>{{ text_no_results }}</p>
                        <a href=\"{{ continue }}\" class=\"tf-btn btn-fill animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            Continue Shopping
                        </a>
                    </div>
                {% endif %}
                
                <!-- Continue Button -->
                {% if orders %}
                    <div class=\"orders-actions text-center mt-4\">
                        <a href=\"{{ continue }}\" class=\"tf-btn btn-outline animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            {{ button_continue }}
                        </a>
                    </div>
                {% endif %}
                
                {{ content_bottom }}
            </div>
            {{ column_right }}
        </div>
    </div>
</section>
<!-- /Orders List -->

<style>
/* Orders List Page Styling */
.orders-container {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 20px;
}

.orders-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.order-card {
    background: #fafafa;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.order-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, #000 0%, #666 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.order-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    background: #fff;
}

.order-card:hover::before {
    opacity: 1;
}

.order-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #e9ecef;
}

.order-id h4 {
    margin: 0 0 8px 0;
    font-size: 20px;
    font-weight: 700;
    color: #000;
}

.order-date {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    color: #666;
}

.order-date i {
    font-size: 14px;
}

.order-status {
    flex-shrink: 0;
}

.status-badge {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Status Badge Colors */
.status-pending {
    background: #fff3cd;
    color: #856404;
    border: 1px solid #ffeaa7;
}

.status-processing {
    background: #d1ecf1;
    color: #0c5460;
    border: 1px solid #bee5eb;
}

.status-shipped {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.status-delivered {
    background: #d1ecf1;
    color: #0c5460;
    border: 1px solid #bee5eb;
}

.status-cancelled {
    background: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

.status-refunded {
    background: #e2e3e5;
    color: #383d41;
    border: 1px solid #d6d8db;
}

.status-complete {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.order-details {
    margin-bottom: 20px;
}

.detail-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
    padding: 8px 0;
}

.detail-item:last-child {
    margin-bottom: 0;
}

.detail-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #666;
    font-weight: 500;
}

.detail-label i {
    font-size: 16px;
}

.detail-value {
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.total-amount {
    font-size: 18px;
    font-weight: 700;
    color: #000;
}

.order-actions {
    display: flex;
    justify-content: center;
}

.order-actions .tf-btn {
    width: 100%;
    padding: 12px 20px;
    font-size: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

/* Pagination */
.orders-pagination {
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

/* Empty State */
.empty-orders-state {
    text-align: center;
    padding: 80px 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.empty-icon {
    margin-bottom: 25px;
}

.empty-icon i {
    font-size: 64px;
    color: #ccc;
}

.empty-orders-state h3 {
    margin: 0 0 15px 0;
    font-size: 28px;
    font-weight: 600;
    color: #333;
}

.empty-orders-state p {
    margin: 0 0 30px 0;
    font-size: 16px;
    color: #666;
    line-height: 1.6;
}

.empty-orders-state .tf-btn {
    padding: 15px 30px;
    font-size: 16px;
}

/* Orders Actions */
.orders-actions .tf-btn {
    padding: 12px 30px;
    font-size: 16px;
    min-width: 200px;
}

/* Responsive Design */
@media (max-width: 992px) {
    .orders-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 15px;
    }
}

@media (max-width: 768px) {
    .orders-grid {
        grid-template-columns: 1fr;
    }
    
    .order-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }
    
    .orders-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .orders-container {
        padding: 15px;
    }
    
    .order-card {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    .orders-container {
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-orders-state {
        padding: 60px 15px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-icon i {
        font-size: 48px;
    }
    
    .empty-orders-state h3 {
        font-size: 24px;
    }
    
    .order-id h4 {
        font-size: 18px;
    }
}
</style>

{{ footer }}
", "catalog/view/template/account/order_list.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\order_list.twig");
    }
}
