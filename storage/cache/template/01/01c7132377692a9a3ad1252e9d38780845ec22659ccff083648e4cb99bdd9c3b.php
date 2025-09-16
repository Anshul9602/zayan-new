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

/* catalog/view/template/account/payment_method.twig */
class __TwigTemplate_b3d4c36431eb1bbc4cc492c88f6dbe9e1ea6af6aec3055b655346ee6943ff014 extends Template
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

<!-- Payment Methods -->
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
                
                <!-- Payment Methods Introduction -->
                <div class=\"payment-methods-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-content\">
                            <div class=\"intro-text\">
                                <h3>Payment Methods</h3>
                                <p>Manage your saved payment methods for secure and convenient checkout. Add, edit, or remove payment options as needed.</p>
                            </div>
                            <div class=\"intro-icon\">
                                <i class=\"icon icon-credit-card\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Payment Methods List -->
                <div class=\"payment-methods-content\">
                    <div id=\"payment-method\">";
        // line 45
        yield ($context["list"] ?? null);
        yield "</div>
                </div>
                
                <!-- Page Actions -->
                <div class=\"payment-methods-actions\">
                    <div class=\"action-buttons\">
                        <a href=\"";
        // line 51
        yield ($context["back"] ?? null);
        yield "\" class=\"tf-btn btn-outline animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            ";
        // line 53
        yield ($context["button_back"] ?? null);
        yield "
                        </a>
                    </div>
                </div>
                
                ";
        // line 58
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 60
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Payment Methods -->

<style>
/* Payment Methods Page Styling */
.payment-methods-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(40, 167, 69, 0.2);
}

.intro-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
}

.intro-text {
    flex: 1;
}

.intro-text h3 {
    margin: 0 0 10px 0;
    font-size: 24px;
    font-weight: 600;
}

.intro-text p {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.5;
}

.intro-icon {
    flex-shrink: 0;
}

.intro-icon i {
    font-size: 48px;
    opacity: 0.8;
}

/* Payment Methods Content */
.payment-methods-content {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    min-height: 200px;
}

/* Payment Methods Actions */
.payment-methods-actions {
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
    min-width: 140px;
    justify-content: center;
}

/* Loading State */
.payment-methods-content:empty::before {
    content: '';
    display: block;
    width: 40px;
    height: 40px;
    margin: 80px auto;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #28a745;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .intro-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .intro-text h3 {
        font-size: 22px;
    }
    
    .intro-icon i {
        font-size: 40px;
    }
    
    .payment-methods-content {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .payment-methods-actions {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    .intro-text h3 {
        font-size: 20px;
    }
    
    .intro-text p {
        font-size: 14px;
    }
    
    .payment-methods-actions {
        margin: 0 -15px;
        border-radius: 0;
    }
}
</style>

";
        // line 209
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/payment_method.twig";
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
        return array (  292 => 209,  140 => 60,  135 => 58,  127 => 53,  122 => 51,  113 => 45,  91 => 26,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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

<!-- Payment Methods -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                <!-- Payment Methods Introduction -->
                <div class=\"payment-methods-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-content\">
                            <div class=\"intro-text\">
                                <h3>Payment Methods</h3>
                                <p>Manage your saved payment methods for secure and convenient checkout. Add, edit, or remove payment options as needed.</p>
                            </div>
                            <div class=\"intro-icon\">
                                <i class=\"icon icon-credit-card\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Payment Methods List -->
                <div class=\"payment-methods-content\">
                    <div id=\"payment-method\">{{ list }}</div>
                </div>
                
                <!-- Page Actions -->
                <div class=\"payment-methods-actions\">
                    <div class=\"action-buttons\">
                        <a href=\"{{ back }}\" class=\"tf-btn btn-outline animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            {{ button_back }}
                        </a>
                    </div>
                </div>
                
                {{ content_bottom }}
            </div>
            {{ column_right }}
        </div>
    </div>
</section>
<!-- /Payment Methods -->

<style>
/* Payment Methods Page Styling */
.payment-methods-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(40, 167, 69, 0.2);
}

.intro-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
}

.intro-text {
    flex: 1;
}

.intro-text h3 {
    margin: 0 0 10px 0;
    font-size: 24px;
    font-weight: 600;
}

.intro-text p {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.5;
}

.intro-icon {
    flex-shrink: 0;
}

.intro-icon i {
    font-size: 48px;
    opacity: 0.8;
}

/* Payment Methods Content */
.payment-methods-content {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    min-height: 200px;
}

/* Payment Methods Actions */
.payment-methods-actions {
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
    min-width: 140px;
    justify-content: center;
}

/* Loading State */
.payment-methods-content:empty::before {
    content: '';
    display: block;
    width: 40px;
    height: 40px;
    margin: 80px auto;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #28a745;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Responsive Design */
@media (max-width: 768px) {
    .intro-content {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .intro-text h3 {
        font-size: 22px;
    }
    
    .intro-icon i {
        font-size: 40px;
    }
    
    .payment-methods-content {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .payment-methods-actions {
        padding: 15px;
    }
}

@media (max-width: 576px) {
    .intro-text h3 {
        font-size: 20px;
    }
    
    .intro-text p {
        font-size: 14px;
    }
    
    .payment-methods-actions {
        margin: 0 -15px;
        border-radius: 0;
    }
}
</style>

{{ footer }}", "catalog/view/template/account/payment_method.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\payment_method.twig");
    }
}
