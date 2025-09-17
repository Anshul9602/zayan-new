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

/* catalog/view/template/account/order_history.twig */
class __TwigTemplate_1790c09dc9fa7297c741dd3b7c716ababf664804440aa666913d81a788eec7a9 extends Template
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
        yield "<!-- Order History Timeline -->
<div class=\"order-history-container\">
    ";
        // line 3
        if (($context["histories"] ?? null)) {
            // line 4
            yield "        <div class=\"history-timeline\">
            ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 6
                yield "                <div class=\"timeline-item\">
                    <div class=\"timeline-marker\">
                        <div class=\"timeline-dot\"></div>
                        <div class=\"timeline-line\"></div>
                    </div>
                    <div class=\"timeline-content\">
                        <div class=\"history-card\">
                            <div class=\"history-header\">
                                <div class=\"history-date\">
                                    <i class=\"icon icon-calendar\"></i>
                                    <span>";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 16);
                yield "</span>
                                </div>
                                <div class=\"history-status\">
                                    <span class=\"status-badge status-";
                // line 19
                yield Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 19)), [" " => "-"]);
                yield "\">
                                        ";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 20);
                yield "
                                    </span>
                                </div>
                            </div>
                            ";
                // line 24
                if (CoreExtension::getAttribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 24)) {
                    // line 25
                    yield "                                <div class=\"history-comment\">
                                    <i class=\"icon icon-message-circle\"></i>
                                    <p>";
                    // line 27
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 27);
                    yield "</p>
                                </div>
                            ";
                }
                // line 30
                yield "                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "        </div>
    ";
        } else {
            // line 36
            yield "        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <i class=\"icon icon-clock\"></i>
            </div>
            <h3>";
            // line 40
            yield ($context["text_no_results"] ?? null);
            yield "</h3>
            <p>No order history available at this time.</p>
        </div>
    ";
        }
        // line 44
        yield "</div>

<!-- Pagination -->
<div class=\"history-pagination\">
    <div class=\"pagination-info\">
        ";
        // line 49
        yield ($context["results"] ?? null);
        yield "
    </div>
    <div class=\"pagination-controls\">
        ";
        // line 52
        yield ($context["pagination"] ?? null);
        yield "
    </div>
</div>

<style>
/* Order History Timeline Styling */
.order-history-container {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 20px;
}

.history-timeline {
    position: relative;
    padding-left: 30px;
}

.timeline-item {
    position: relative;
    margin-bottom: 25px;
}

.timeline-item:last-child .timeline-line {
    display: none;
}

.timeline-marker {
    position: absolute;
    left: -30px;
    top: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.timeline-dot {
    width: 12px;
    height: 12px;
    background: #241B68;
    border-radius: 50%;
    border: 3px solid #fff;
    box-shadow: 0 0 0 2px #e9ecef;
    z-index: 2;
}

.timeline-line {
    width: 2px;
    height: 40px;
    background: #e9ecef;
    margin-top: 5px;
}

.timeline-content {
    margin-left: 20px;
}

.history-card {
    background: #fafafa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 20px;
    transition: all 0.2s ease;
}

.history-card:hover {
    background: #f5f5f5;
    transform: translateX(5px);
    box-shadow: 0 2px 12px rgba(0,0,0,0.1);
}

.history-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.history-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
    font-size: 14px;
    font-weight: 500;
}

.history-date i {
    font-size: 16px;
}

.history-status {
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

.history-comment {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    background: #fff;
    border-radius: 6px;
    padding: 15px;
    border-left: 3px solid #241B68;
}

.history-comment i {
    font-size: 16px;
    color: #666;
    margin-top: 2px;
    flex-shrink: 0;
}

.history-comment p {
    margin: 0;
    color: #333;
    line-height: 1.5;
}

/* Empty State */
.empty-state {
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

.empty-state h3 {
    margin: 0 0 10px 0;
    font-size: 24px;
    font-weight: 600;
    color: #333;
}

.empty-state p {
    margin: 0;
    font-size: 16px;
    color: #666;
}

/* Pagination */
.history-pagination {
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
@media (max-width: 768px) {
    .history-timeline {
        padding-left: 20px;
    }
    
    .timeline-marker {
        left: -20px;
    }
    
    .timeline-content {
        margin-left: 15px;
    }
    
    .history-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .history-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .history-card {
        padding: 15px;
    }
    
    .history-comment {
        padding: 12px;
    }
}

@media (max-width: 576px) {
    .order-history-container {
        padding: 15px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-state {
        padding: 40px 15px;
    }
    
    .empty-icon i {
        font-size: 36px;
    }
    
    .empty-state h3 {
        font-size: 20px;
    }
}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/order_history.twig";
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
        return array (  135 => 52,  129 => 49,  122 => 44,  115 => 40,  109 => 36,  105 => 34,  96 => 30,  90 => 27,  86 => 25,  84 => 24,  77 => 20,  73 => 19,  67 => 16,  55 => 6,  51 => 5,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Order History Timeline -->
<div class=\"order-history-container\">
    {% if histories %}
        <div class=\"history-timeline\">
            {% for history in histories %}
                <div class=\"timeline-item\">
                    <div class=\"timeline-marker\">
                        <div class=\"timeline-dot\"></div>
                        <div class=\"timeline-line\"></div>
                    </div>
                    <div class=\"timeline-content\">
                        <div class=\"history-card\">
                            <div class=\"history-header\">
                                <div class=\"history-date\">
                                    <i class=\"icon icon-calendar\"></i>
                                    <span>{{ history.date_added }}</span>
                                </div>
                                <div class=\"history-status\">
                                    <span class=\"status-badge status-{{ history.status|lower|replace({' ': '-'}) }}\">
                                        {{ history.status }}
                                    </span>
                                </div>
                            </div>
                            {% if history.comment %}
                                <div class=\"history-comment\">
                                    <i class=\"icon icon-message-circle\"></i>
                                    <p>{{ history.comment }}</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <div class=\"empty-state\">
            <div class=\"empty-icon\">
                <i class=\"icon icon-clock\"></i>
            </div>
            <h3>{{ text_no_results }}</h3>
            <p>No order history available at this time.</p>
        </div>
    {% endif %}
</div>

<!-- Pagination -->
<div class=\"history-pagination\">
    <div class=\"pagination-info\">
        {{ results }}
    </div>
    <div class=\"pagination-controls\">
        {{ pagination }}
    </div>
</div>

<style>
/* Order History Timeline Styling */
.order-history-container {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 20px;
}

.history-timeline {
    position: relative;
    padding-left: 30px;
}

.timeline-item {
    position: relative;
    margin-bottom: 25px;
}

.timeline-item:last-child .timeline-line {
    display: none;
}

.timeline-marker {
    position: absolute;
    left: -30px;
    top: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.timeline-dot {
    width: 12px;
    height: 12px;
    background: #241B68;
    border-radius: 50%;
    border: 3px solid #fff;
    box-shadow: 0 0 0 2px #e9ecef;
    z-index: 2;
}

.timeline-line {
    width: 2px;
    height: 40px;
    background: #e9ecef;
    margin-top: 5px;
}

.timeline-content {
    margin-left: 20px;
}

.history-card {
    background: #fafafa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 20px;
    transition: all 0.2s ease;
}

.history-card:hover {
    background: #f5f5f5;
    transform: translateX(5px);
    box-shadow: 0 2px 12px rgba(0,0,0,0.1);
}

.history-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.history-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
    font-size: 14px;
    font-weight: 500;
}

.history-date i {
    font-size: 16px;
}

.history-status {
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

.history-comment {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    background: #fff;
    border-radius: 6px;
    padding: 15px;
    border-left: 3px solid #241B68;
}

.history-comment i {
    font-size: 16px;
    color: #666;
    margin-top: 2px;
    flex-shrink: 0;
}

.history-comment p {
    margin: 0;
    color: #333;
    line-height: 1.5;
}

/* Empty State */
.empty-state {
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

.empty-state h3 {
    margin: 0 0 10px 0;
    font-size: 24px;
    font-weight: 600;
    color: #333;
}

.empty-state p {
    margin: 0;
    font-size: 16px;
    color: #666;
}

/* Pagination */
.history-pagination {
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
@media (max-width: 768px) {
    .history-timeline {
        padding-left: 20px;
    }
    
    .timeline-marker {
        left: -20px;
    }
    
    .timeline-content {
        margin-left: 15px;
    }
    
    .history-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .history-pagination {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
    
    .history-card {
        padding: 15px;
    }
    
    .history-comment {
        padding: 12px;
    }
}

@media (max-width: 576px) {
    .order-history-container {
        padding: 15px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .empty-state {
        padding: 40px 15px;
    }
    
    .empty-icon i {
        font-size: 36px;
    }
    
    .empty-state h3 {
        font-size: 20px;
    }
}
</style>
", "catalog/view/template/account/order_history.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\order_history.twig");
    }
}
