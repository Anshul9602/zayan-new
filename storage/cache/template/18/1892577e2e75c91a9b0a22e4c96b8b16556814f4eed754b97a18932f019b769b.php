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

/* catalog/view/template/account/transaction.twig */
class __TwigTemplate_b9f0662b02de331d1d72aa9aa15eda44d2e08d68095406df443f1c856a6de3a4 extends Template
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

<!-- Transactions -->
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
                
                <!-- Account Balance -->
                <div class=\"balance-section\">
                    <div class=\"balance-card\">
                        <div class=\"balance-header\">
                            <div class=\"balance-info\">
                                <h3>Account Balance</h3>
                                <p>";
        // line 34
        yield ($context["text_total"] ?? null);
        yield "</p>
                            </div>
                            <div class=\"balance-amount\">
                                <span class=\"amount\">";
        // line 37
        yield ($context["total"] ?? null);
        yield "</span>
                            </div>
                        </div>
                        <div class=\"balance-icon\">
                            <i class=\"icon icon-dollar-sign\"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Transactions List -->
                <div class=\"transactions-section\">
                    ";
        // line 48
        if (($context["transactions"] ?? null)) {
            // line 49
            yield "                        <div class=\"transactions-header\">
                            <h3>Transaction History</h3>
                        </div>
                        <div class=\"transactions-list\">
                            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 54
                yield "                                <div class=\"transaction-item\">
                                    <div class=\"transaction-info\">
                                        <div class=\"transaction-date\">
                                            <i class=\"icon icon-calendar\"></i>
                                            <span>";
                // line 58
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 58);
                yield "</span>
                                        </div>
                                        <div class=\"transaction-description\">
                                            <h5>";
                // line 61
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "description", [], "any", false, false, false, 61);
                yield "</h5>
                                        </div>
                                    </div>
                                    <div class=\"transaction-amount\">
                                        <span class=\"amount ";
                // line 65
                if ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 65)) && is_string($_v1 = "+") && str_starts_with($_v0, $_v1))) {
                    yield "positive";
                } elseif ((is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 65)) && is_string($_v3 = "-") && str_starts_with($_v2, $_v3))) {
                    yield "negative";
                }
                yield "\">
                                            ";
                // line 66
                yield CoreExtension::getAttribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 66);
                yield "
                                        </span>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['transaction'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "                        </div>
                        
                        <!-- Pagination -->
                        <div class=\"transactions-pagination\">
                            <div class=\"pagination-info\">
                                ";
            // line 76
            yield ($context["results"] ?? null);
            yield "
                            </div>
                            <div class=\"pagination-controls\">
                                ";
            // line 79
            yield ($context["pagination"] ?? null);
            yield "
                            </div>
                        </div>
                    ";
        } else {
            // line 83
            yield "                        <!-- Empty State -->
                        <div class=\"empty-transactions-state\">
                            <div class=\"empty-icon\">
                                <i class=\"icon icon-activity\"></i>
                            </div>
                            <h3>No Transactions Found</h3>
                            <p>";
            // line 89
            yield ($context["text_no_results"] ?? null);
            yield "</p>
                        </div>
                    ";
        }
        // line 92
        yield "                </div>
                
                <!-- Page Actions -->
                <div class=\"transactions-actions\">
                    <div class=\"action-buttons\">
                        <a href=\"";
        // line 97
        yield ($context["continue"] ?? null);
        yield "\" class=\"tf-btn btn-fill animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            ";
        // line 99
        yield ($context["button_continue"] ?? null);
        yield "
                        </a>
                    </div>
                </div>
                
                ";
        // line 104
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 106
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Transactions -->

<style>
/* Transactions Page Styling */
.balance-section {
    margin-bottom: 30px;
}

.balance-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
    position: relative;
    overflow: hidden;
}

.balance-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    z-index: 2;
}

.balance-info h3 {
    margin: 0 0 5px 0;
    font-size: 18px;
    font-weight: 600;
    opacity: 0.9;
    color:#fff;
}

.balance-info p {
    margin: 0;
    font-size: 14px;
    opacity: 0.8;
}

.balance-amount {
    text-align: right;
}

.balance-amount .amount {
    font-size: 32px;
    font-weight: 700;
    display: block;
}

.balance-icon {
    position: absolute;
    right: -20px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.1;
    z-index: 1;
}

.balance-icon i {
    font-size: 120px;
}

/* Transactions Section */
.transactions-section {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
}

.transactions-header {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f1f1f1;
}

.transactions-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.transactions-list {
    margin-bottom: 20px;
}

.transaction-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border: 1px solid #f1f1f1;
    border-radius: 8px;
    margin-bottom: 12px;
    background: #fafafa;
    transition: all 0.2s ease;
}

.transaction-item:hover {
    background: #f5f5f5;
    border-color: #241B68;
    transform: translateX(5px);
}

.transaction-item:last-child {
    margin-bottom: 0;
}

.transaction-info {
    flex: 1;
}

.transaction-date {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 8px;
    color: #666;
    font-size: 14px;
}

.transaction-date i {
    font-size: 14px;
}

.transaction-description h5 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.transaction-amount {
    text-align: right;
    min-width: 100px;
}

.transaction-amount .amount {
    font-size: 18px;
    font-weight: 700;
    padding: 6px 12px;
    border-radius: 6px;
    background: #f8f9fa;
    color: #333;
}

.transaction-amount .amount.positive {
    background: #d4edda;
    color: #155724;
}

.transaction-amount .amount.negative {
    background: #f8d7da;
    color: #721c24;
}

/* Empty State */
.empty-transactions-state {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

.empty-icon {
    margin-bottom: 20px;
}

.empty-icon i {
    font-size: 48px;
    color: #ccc;
}

.empty-transactions-state h3 {
    margin: 0 0 10px 0;
    font-size: 24px;
    font-weight: 600;
    color: #333;
}

.empty-transactions-state p {
    margin: 0;
    font-size: 16px;
    color: #666;
}

/* Pagination */
.transactions-pagination {
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

/* Transactions Actions */
.transactions-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    border: 1px solid #e9ecef;
    text-align: center;
}

.action-buttons .tf-btn {
    padding: 12px 25px;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    min-width: 160px;
    justify-content: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .balance-header {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .balance-amount .amount {
        font-size: 28px;
    }
    
    .transaction-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
        padding: 15px;
    }
    
    .transaction-amount {
        align-self: flex-end;
    }
    
    .transactions-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .transactions-section {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .balance-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
}

@media (max-width: 576px) {
    .balance-info h3 {
        font-size: 16px;
    }
    
    .balance-amount .amount {
        font-size: 24px;
    }
    
    .transaction-description h5 {
        font-size: 14px;
    }
    
    .transaction-amount .amount {
        font-size: 16px;
    }
    
    .transactions-actions {
        margin: 0 -15px;
        border-radius: 0;
    }
}
</style>

";
        // line 403
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
        return "catalog/view/template/account/transaction.twig";
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
        return array (  531 => 403,  231 => 106,  226 => 104,  218 => 99,  213 => 97,  206 => 92,  200 => 89,  192 => 83,  185 => 79,  179 => 76,  172 => 71,  161 => 66,  153 => 65,  146 => 61,  140 => 58,  134 => 54,  130 => 53,  124 => 49,  122 => 48,  108 => 37,  102 => 34,  91 => 26,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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

<!-- Transactions -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                <!-- Account Balance -->
                <div class=\"balance-section\">
                    <div class=\"balance-card\">
                        <div class=\"balance-header\">
                            <div class=\"balance-info\">
                                <h3>Account Balance</h3>
                                <p>{{ text_total }}</p>
                            </div>
                            <div class=\"balance-amount\">
                                <span class=\"amount\">{{ total }}</span>
                            </div>
                        </div>
                        <div class=\"balance-icon\">
                            <i class=\"icon icon-dollar-sign\"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Transactions List -->
                <div class=\"transactions-section\">
                    {% if transactions %}
                        <div class=\"transactions-header\">
                            <h3>Transaction History</h3>
                        </div>
                        <div class=\"transactions-list\">
                            {% for transaction in transactions %}
                                <div class=\"transaction-item\">
                                    <div class=\"transaction-info\">
                                        <div class=\"transaction-date\">
                                            <i class=\"icon icon-calendar\"></i>
                                            <span>{{ transaction.date_added }}</span>
                                        </div>
                                        <div class=\"transaction-description\">
                                            <h5>{{ transaction.description }}</h5>
                                        </div>
                                    </div>
                                    <div class=\"transaction-amount\">
                                        <span class=\"amount {% if transaction.amount starts with '+' %}positive{% elseif transaction.amount starts with '-' %}negative{% endif %}\">
                                            {{ transaction.amount }}
                                        </span>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                        
                        <!-- Pagination -->
                        <div class=\"transactions-pagination\">
                            <div class=\"pagination-info\">
                                {{ results }}
                            </div>
                            <div class=\"pagination-controls\">
                                {{ pagination }}
                            </div>
                        </div>
                    {% else %}
                        <!-- Empty State -->
                        <div class=\"empty-transactions-state\">
                            <div class=\"empty-icon\">
                                <i class=\"icon icon-activity\"></i>
                            </div>
                            <h3>No Transactions Found</h3>
                            <p>{{ text_no_results }}</p>
                        </div>
                    {% endif %}
                </div>
                
                <!-- Page Actions -->
                <div class=\"transactions-actions\">
                    <div class=\"action-buttons\">
                        <a href=\"{{ continue }}\" class=\"tf-btn btn-fill animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            {{ button_continue }}
                        </a>
                    </div>
                </div>
                
                {{ content_bottom }}
            </div>
            {{ column_right }}
        </div>
    </div>
</section>
<!-- /Transactions -->

<style>
/* Transactions Page Styling */
.balance-section {
    margin-bottom: 30px;
}

.balance-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
    position: relative;
    overflow: hidden;
}

.balance-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    z-index: 2;
}

.balance-info h3 {
    margin: 0 0 5px 0;
    font-size: 18px;
    font-weight: 600;
    opacity: 0.9;
    color:#fff;
}

.balance-info p {
    margin: 0;
    font-size: 14px;
    opacity: 0.8;
}

.balance-amount {
    text-align: right;
}

.balance-amount .amount {
    font-size: 32px;
    font-weight: 700;
    display: block;
}

.balance-icon {
    position: absolute;
    right: -20px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0.1;
    z-index: 1;
}

.balance-icon i {
    font-size: 120px;
}

/* Transactions Section */
.transactions-section {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
}

.transactions-header {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f1f1f1;
}

.transactions-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.transactions-list {
    margin-bottom: 20px;
}

.transaction-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border: 1px solid #f1f1f1;
    border-radius: 8px;
    margin-bottom: 12px;
    background: #fafafa;
    transition: all 0.2s ease;
}

.transaction-item:hover {
    background: #f5f5f5;
    border-color: #241B68;
    transform: translateX(5px);
}

.transaction-item:last-child {
    margin-bottom: 0;
}

.transaction-info {
    flex: 1;
}

.transaction-date {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 8px;
    color: #666;
    font-size: 14px;
}

.transaction-date i {
    font-size: 14px;
}

.transaction-description h5 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.transaction-amount {
    text-align: right;
    min-width: 100px;
}

.transaction-amount .amount {
    font-size: 18px;
    font-weight: 700;
    padding: 6px 12px;
    border-radius: 6px;
    background: #f8f9fa;
    color: #333;
}

.transaction-amount .amount.positive {
    background: #d4edda;
    color: #155724;
}

.transaction-amount .amount.negative {
    background: #f8d7da;
    color: #721c24;
}

/* Empty State */
.empty-transactions-state {
    text-align: center;
    padding: 60px 20px;
    color: #666;
}

.empty-icon {
    margin-bottom: 20px;
}

.empty-icon i {
    font-size: 48px;
    color: #ccc;
}

.empty-transactions-state h3 {
    margin: 0 0 10px 0;
    font-size: 24px;
    font-weight: 600;
    color: #333;
}

.empty-transactions-state p {
    margin: 0;
    font-size: 16px;
    color: #666;
}

/* Pagination */
.transactions-pagination {
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

/* Transactions Actions */
.transactions-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    border: 1px solid #e9ecef;
    text-align: center;
}

.action-buttons .tf-btn {
    padding: 12px 25px;
    font-size: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
    min-width: 160px;
    justify-content: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .balance-header {
        flex-direction: column;
        text-align: center;
        gap: 15px;
    }
    
    .balance-amount .amount {
        font-size: 28px;
    }
    
    .transaction-item {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
        padding: 15px;
    }
    
    .transaction-amount {
        align-self: flex-end;
    }
    
    .transactions-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .transactions-section {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .balance-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
}

@media (max-width: 576px) {
    .balance-info h3 {
        font-size: 16px;
    }
    
    .balance-amount .amount {
        font-size: 24px;
    }
    
    .transaction-description h5 {
        font-size: 14px;
    }
    
    .transaction-amount .amount {
        font-size: 16px;
    }
    
    .transactions-actions {
        margin: 0 -15px;
        border-radius: 0;
    }
}
</style>

{{ footer }}
", "catalog/view/template/account/transaction.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\transaction.twig");
    }
}
