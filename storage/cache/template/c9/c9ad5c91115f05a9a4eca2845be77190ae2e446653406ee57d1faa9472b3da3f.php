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

/* catalog/view/template/account/returns_form.twig */
class __TwigTemplate_1f05fa97c56cf53c109540ee89baf8932234fd3c81efe7b050a962cb75ca5823 extends Template
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

<!-- Returns Form -->
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
                
                <!-- Form Introduction -->
                <div class=\"returns-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-header\">
                            <i class=\"icon icon-refresh-cw\"></i>
                            <h3>Return Request</h3>
                        </div>
                        <p class=\"intro-text\">";
        // line 35
        yield ($context["text_description"] ?? null);
        yield "</p>
                    </div>
                </div>
                
                <!-- Returns Form -->
                <div class=\"returns-form-container\">
                    <form id=\"form-return\" action=\"";
        // line 41
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
                        <!-- Order Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-package\"></i>
                                <h4>";
        // line 46
        yield ($context["text_order"] ?? null);
        yield "</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-order-id\" class=\"form-label required\">";
        // line 51
        yield ($context["entry_order_id"] ?? null);
        yield "</label>
                                        <input type=\"text\" name=\"order_id\" value=\"";
        // line 52
        yield ($context["order_id"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_order_id"] ?? null);
        yield "\" id=\"input-order-id\" class=\"form-control\"/>
                                        <div id=\"error-order-id\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-date-ordered\" class=\"form-label\">";
        // line 56
        yield ($context["entry_date_ordered"] ?? null);
        yield "</label>
                                        <input type=\"date\" name=\"date_ordered\" value=\"";
        // line 57
        yield ($context["date_ordered"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_ordered"] ?? null);
        yield "\" id=\"input-date-ordered\" class=\"form-control\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Customer Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-user\"></i>
                                <h4>";
        // line 66
        yield ($context["text_customer"] ?? null);
        yield "</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-firstname\" class=\"form-label required\">";
        // line 71
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
                                        <input type=\"text\" name=\"firstname\" value=\"";
        // line 72
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
                                        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-lastname\" class=\"form-label required\">";
        // line 76
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
                                        <input type=\"text\" name=\"lastname\" value=\"";
        // line 77
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
                                        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-email\" class=\"form-label required\">";
        // line 83
        yield ($context["entry_email"] ?? null);
        yield "</label>
                                        <input type=\"email\" name=\"email\" value=\"";
        // line 84
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                                        <div id=\"error-email\" class=\"invalid-feedback\"></div>
                                    </div>
                                    ";
        // line 87
        if (($context["config_telephone_display"] ?? null)) {
            // line 88
            yield "                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-telephone\" class=\"form-label";
            // line 89
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "\">";
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
                                        <input type=\"tel\" name=\"telephone\" value=\"";
            // line 90
            yield ($context["telephone"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"/>
                                        <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                                    </div>
                                    ";
        }
        // line 94
        yield "                                </div>
                            </div>
                        </div>
                        <!-- Product Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-box\"></i>
                                <h4>";
        // line 101
        yield ($context["text_product"] ?? null);
        yield "</h4>
                            </div>
                            <div class=\"section-content\">
                                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 104
        yield ($context["product_id"] ?? null);
        yield "\"/>
                                <div class=\"row\">
                                    <div class=\"col-md-8 mb-3\">
                                        <label for=\"input-product\" class=\"form-label required\">";
        // line 107
        yield ($context["entry_product"] ?? null);
        yield "</label>
                                        <input type=\"text\" name=\"product\" value=\"";
        // line 108
        yield ($context["product"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" class=\"form-control\"/>
                                        <div id=\"error-product\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-4 mb-3\">
                                        <label for=\"input-quantity\" class=\"form-label\">";
        // line 112
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
                                        <input type=\"number\" name=\"quantity\" value=\"1\" placeholder=\"";
        // line 113
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\" min=\"1\"/>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-model\" class=\"form-label required\">";
        // line 118
        yield ($context["entry_model"] ?? null);
        yield "</label>
                                        <input type=\"text\" name=\"model\" value=\"";
        // line 119
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\"/>
                                        <div id=\"error-model\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label class=\"form-label required\">";
        // line 123
        yield ($context["entry_opened"] ?? null);
        yield "</label>
                                        <div class=\"opened-options\">
                                            <div class=\"form-check form-check-inline\">
                                                <input type=\"radio\" name=\"opened\" value=\"1\" id=\"input-opened-yes\" class=\"form-check-input\" checked/>
                                                <label for=\"input-opened-yes\" class=\"form-check-label\">";
        // line 127
        yield ($context["text_yes"] ?? null);
        yield "</label>
                                            </div>
                                            <div class=\"form-check form-check-inline\">
                                                <input type=\"radio\" name=\"opened\" value=\"0\" id=\"input-opened-no\" class=\"form-check-input\"/>
                                                <label for=\"input-opened-no\" class=\"form-check-label\">";
        // line 131
        yield ($context["text_no"] ?? null);
        yield "</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Return Reason -->
                                <div class=\"mb-3\">
                                    <label class=\"form-label required\">";
        // line 139
        yield ($context["entry_reason"] ?? null);
        yield "</label>
                                    <div class=\"reason-options\">
                                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 142
            yield "                                            <div class=\"reason-card\">
                                                <input type=\"radio\" name=\"return_reason_id\" value=\"";
            // line 143
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 143);
            yield "\" id=\"input-return-reason-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 143);
            yield "\" class=\"form-check-input\"/>
                                                <label for=\"input-return-reason-";
            // line 144
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 144);
            yield "\" class=\"reason-label\">
                                                    <span class=\"reason-text\">";
            // line 145
            yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 145);
            yield "</span>
                                                </label>
                                            </div>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_reason'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "                                    </div>
                                    <div id=\"error-reason\" class=\"invalid-feedback\"></div>
                                </div>
                                
                                <!-- Fault Details -->
                                <div class=\"mb-3\">
                                    <label for=\"input-comment\" class=\"form-label\">";
        // line 155
        yield ($context["entry_fault_detail"] ?? null);
        yield "</label>
                                    <textarea name=\"comment\" rows=\"4\" placeholder=\"";
        // line 156
        yield ($context["entry_fault_detail"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\"></textarea>
                                </div>
                                
                                <!-- Captcha -->
                                ";
        // line 160
        if (($context["captcha"] ?? null)) {
            // line 161
            yield "                                    <div class=\"captcha-section\">
                                        ";
            // line 162
            yield ($context["captcha"] ?? null);
            yield "
                                    </div>
                                ";
        }
        // line 165
        yield "                            </div>
                        </div>
                        <!-- Form Actions -->
                        <div class=\"form-actions\">
                            ";
        // line 169
        if (($context["text_agree"] ?? null)) {
            // line 170
            yield "                                <div class=\"agreement-section\">
                                    <div class=\"form-check\">
                                        <input type=\"hidden\" name=\"agree\" value=\"0\"/>
                                        <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"/>
                                        <label for=\"input-agree\" class=\"form-check-label\">";
            // line 174
            yield ($context["text_agree"] ?? null);
            yield "</label>
                                    </div>
                                </div>
                            ";
        }
        // line 178
        yield "                            
                            <div class=\"action-buttons\">
                                <a href=\"";
        // line 180
        yield ($context["back"] ?? null);
        yield "\" class=\"tf-btn btn-outline animate-btn\">
                                    <i class=\"icon icon-arrow-left\"></i>
                                    ";
        // line 182
        yield ($context["button_back"] ?? null);
        yield "
                                </a>
                                <button type=\"submit\" class=\"tf-btn btn-fill animate-btn\">
                                    <i class=\"icon icon-send\"></i>
                                    ";
        // line 186
        yield ($context["button_submit"] ?? null);
        yield "
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                ";
        // line 193
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 195
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Returns Form -->

<style>
/* Returns Form Styling */
.returns-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border-left: 4px solid #000;
}

.intro-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
}

.intro-header i {
    font-size: 24px;
    color: #000;
}

.intro-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.intro-text {
    margin: 0;
    color: #666;
    line-height: 1.6;
    font-size: 16px;
}

.returns-form-container {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.form-section {
    margin-bottom: 30px;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    overflow: hidden;
}

.section-header {
    background: #f8f9fa;
    padding: 15px 20px;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    gap: 10px;
}

.section-header i {
    font-size: 18px;
    color: #666;
}

.section-header h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.section-content {
    padding: 20px;
}

.form-label {
    font-weight: 500;
    color: #333;
    margin-bottom: 8px;
}

.form-label.required::after {
    content: ' *';
    color: #dc3545;
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 12px 15px;
    font-size: 14px;
    transition: all 0.2s ease;
}

.form-control:focus {
    border-color: #000;
    box-shadow: 0 0 0 0.2rem rgba(0,0,0,0.1);
}

/* Reason Options */
.reason-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 12px;
    margin-top: 10px;
}

.reason-card {
    position: relative;
}

.reason-card input[type=\"radio\"] {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.reason-label {
    display: block;
    background: #f8f9fa;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    padding: 15px;
    cursor: pointer;
    transition: all 0.2s ease;
    position: relative;
}

.reason-label:hover {
    background: #e9ecef;
    border-color: #000;
}

.reason-card input[type=\"radio\"]:checked + .reason-label {
    background: #000;
    color: #fff;
    border-color: #000;
}

.reason-text {
    font-size: 14px;
    font-weight: 500;
}

/* Opened Options */
.opened-options {
    display: flex;
    gap: 20px;
    margin-top: 8px;
}

.form-check-inline .form-check-input {
    margin-right: 8px;
}

.form-check-label {
    font-size: 14px;
    color: #666;
    cursor: pointer;
}

/* Captcha Section */
.captcha-section {
    background: #f8f9fa;
    border-radius: 6px;
    padding: 15px;
    border: 1px solid #e9ecef;
}

/* Form Actions */
.form-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 25px;
    margin-top: 20px;
    border: 1px solid #e9ecef;
}

.agreement-section {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e9ecef;
}

.agreement-section .form-check {
    display: flex;
    align-items: flex-start;
    gap: 10px;
}

.agreement-section .form-check-input {
    margin-top: 2px;
}

.agreement-section .form-check-label {
    color: #666;
    line-height: 1.5;
    cursor: pointer;
}

.action-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
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

/* Responsive Design */
@media (max-width: 768px) {
    .returns-form-container {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .section-content {
        padding: 15px;
    }
    
    .reason-options {
        grid-template-columns: 1fr;
    }
    
    .action-buttons {
        flex-direction: column-reverse;
    }
    
    .action-buttons .tf-btn {
        width: 100%;
    }
    
    .opened-options {
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .intro-header {
        flex-direction: column;
        text-align: center;
        gap: 8px;
    }
    
    .intro-header h3 {
        font-size: 18px;
    }
    
    .form-actions {
        padding: 20px;
    }
}
</style>

";
        // line 474
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
        return "catalog/view/template/account/returns_form.twig";
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
        return array (  709 => 474,  427 => 195,  422 => 193,  412 => 186,  405 => 182,  400 => 180,  396 => 178,  389 => 174,  383 => 170,  381 => 169,  375 => 165,  369 => 162,  366 => 161,  364 => 160,  357 => 156,  353 => 155,  345 => 149,  335 => 145,  331 => 144,  325 => 143,  322 => 142,  318 => 141,  313 => 139,  302 => 131,  295 => 127,  288 => 123,  279 => 119,  275 => 118,  267 => 113,  263 => 112,  254 => 108,  250 => 107,  244 => 104,  238 => 101,  229 => 94,  220 => 90,  212 => 89,  209 => 88,  207 => 87,  199 => 84,  195 => 83,  184 => 77,  180 => 76,  171 => 72,  167 => 71,  159 => 66,  145 => 57,  141 => 56,  132 => 52,  128 => 51,  120 => 46,  112 => 41,  103 => 35,  91 => 26,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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

<!-- Returns Form -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                <!-- Form Introduction -->
                <div class=\"returns-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-header\">
                            <i class=\"icon icon-refresh-cw\"></i>
                            <h3>Return Request</h3>
                        </div>
                        <p class=\"intro-text\">{{ text_description }}</p>
                    </div>
                </div>
                
                <!-- Returns Form -->
                <div class=\"returns-form-container\">
                    <form id=\"form-return\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
                        <!-- Order Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-package\"></i>
                                <h4>{{ text_order }}</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-order-id\" class=\"form-label required\">{{ entry_order_id }}</label>
                                        <input type=\"text\" name=\"order_id\" value=\"{{ order_id }}\" placeholder=\"{{ entry_order_id }}\" id=\"input-order-id\" class=\"form-control\"/>
                                        <div id=\"error-order-id\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-date-ordered\" class=\"form-label\">{{ entry_date_ordered }}</label>
                                        <input type=\"date\" name=\"date_ordered\" value=\"{{ date_ordered }}\" placeholder=\"{{ entry_date_ordered }}\" id=\"input-date-ordered\" class=\"form-control\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Customer Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-user\"></i>
                                <h4>{{ text_customer }}</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-firstname\" class=\"form-label required\">{{ entry_firstname }}</label>
                                        <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                                        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-lastname\" class=\"form-label required\">{{ entry_lastname }}</label>
                                        <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
                                        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-email\" class=\"form-label required\">{{ entry_email }}</label>
                                        <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                                        <div id=\"error-email\" class=\"invalid-feedback\"></div>
                                    </div>
                                    {% if config_telephone_display %}
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-telephone\" class=\"form-label{% if config_telephone_required %} required{% endif %}\">{{ entry_telephone }}</label>
                                        <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                                        <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <!-- Product Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-box\"></i>
                                <h4>{{ text_product }}</h4>
                            </div>
                            <div class=\"section-content\">
                                <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
                                <div class=\"row\">
                                    <div class=\"col-md-8 mb-3\">
                                        <label for=\"input-product\" class=\"form-label required\">{{ entry_product }}</label>
                                        <input type=\"text\" name=\"product\" value=\"{{ product }}\" placeholder=\"{{ entry_product }}\" id=\"input-product\" class=\"form-control\"/>
                                        <div id=\"error-product\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-4 mb-3\">
                                        <label for=\"input-quantity\" class=\"form-label\">{{ entry_quantity }}</label>
                                        <input type=\"number\" name=\"quantity\" value=\"1\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\" min=\"1\"/>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-model\" class=\"form-label required\">{{ entry_model }}</label>
                                        <input type=\"text\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>
                                        <div id=\"error-model\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label class=\"form-label required\">{{ entry_opened }}</label>
                                        <div class=\"opened-options\">
                                            <div class=\"form-check form-check-inline\">
                                                <input type=\"radio\" name=\"opened\" value=\"1\" id=\"input-opened-yes\" class=\"form-check-input\" checked/>
                                                <label for=\"input-opened-yes\" class=\"form-check-label\">{{ text_yes }}</label>
                                            </div>
                                            <div class=\"form-check form-check-inline\">
                                                <input type=\"radio\" name=\"opened\" value=\"0\" id=\"input-opened-no\" class=\"form-check-input\"/>
                                                <label for=\"input-opened-no\" class=\"form-check-label\">{{ text_no }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Return Reason -->
                                <div class=\"mb-3\">
                                    <label class=\"form-label required\">{{ entry_reason }}</label>
                                    <div class=\"reason-options\">
                                        {% for return_reason in return_reasons %}
                                            <div class=\"reason-card\">
                                                <input type=\"radio\" name=\"return_reason_id\" value=\"{{ return_reason.return_reason_id }}\" id=\"input-return-reason-{{ return_reason.return_reason_id }}\" class=\"form-check-input\"/>
                                                <label for=\"input-return-reason-{{ return_reason.return_reason_id }}\" class=\"reason-label\">
                                                    <span class=\"reason-text\">{{ return_reason.name }}</span>
                                                </label>
                                            </div>
                                        {% endfor %}
                                    </div>
                                    <div id=\"error-reason\" class=\"invalid-feedback\"></div>
                                </div>
                                
                                <!-- Fault Details -->
                                <div class=\"mb-3\">
                                    <label for=\"input-comment\" class=\"form-label\">{{ entry_fault_detail }}</label>
                                    <textarea name=\"comment\" rows=\"4\" placeholder=\"{{ entry_fault_detail }}\" id=\"input-comment\" class=\"form-control\"></textarea>
                                </div>
                                
                                <!-- Captcha -->
                                {% if captcha %}
                                    <div class=\"captcha-section\">
                                        {{ captcha }}
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                        <!-- Form Actions -->
                        <div class=\"form-actions\">
                            {% if text_agree %}
                                <div class=\"agreement-section\">
                                    <div class=\"form-check\">
                                        <input type=\"hidden\" name=\"agree\" value=\"0\"/>
                                        <input type=\"checkbox\" name=\"agree\" value=\"1\" id=\"input-agree\" class=\"form-check-input\"/>
                                        <label for=\"input-agree\" class=\"form-check-label\">{{ text_agree }}</label>
                                    </div>
                                </div>
                            {% endif %}
                            
                            <div class=\"action-buttons\">
                                <a href=\"{{ back }}\" class=\"tf-btn btn-outline animate-btn\">
                                    <i class=\"icon icon-arrow-left\"></i>
                                    {{ button_back }}
                                </a>
                                <button type=\"submit\" class=\"tf-btn btn-fill animate-btn\">
                                    <i class=\"icon icon-send\"></i>
                                    {{ button_submit }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                {{ content_bottom }}
            </div>
            {{ column_right }}
        </div>
    </div>
</section>
<!-- /Returns Form -->

<style>
/* Returns Form Styling */
.returns-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border-left: 4px solid #000;
}

.intro-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
}

.intro-header i {
    font-size: 24px;
    color: #000;
}

.intro-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.intro-text {
    margin: 0;
    color: #666;
    line-height: 1.6;
    font-size: 16px;
}

.returns-form-container {
    background: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.form-section {
    margin-bottom: 30px;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    overflow: hidden;
}

.section-header {
    background: #f8f9fa;
    padding: 15px 20px;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    align-items: center;
    gap: 10px;
}

.section-header i {
    font-size: 18px;
    color: #666;
}

.section-header h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.section-content {
    padding: 20px;
}

.form-label {
    font-weight: 500;
    color: #333;
    margin-bottom: 8px;
}

.form-label.required::after {
    content: ' *';
    color: #dc3545;
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 12px 15px;
    font-size: 14px;
    transition: all 0.2s ease;
}

.form-control:focus {
    border-color: #000;
    box-shadow: 0 0 0 0.2rem rgba(0,0,0,0.1);
}

/* Reason Options */
.reason-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 12px;
    margin-top: 10px;
}

.reason-card {
    position: relative;
}

.reason-card input[type=\"radio\"] {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.reason-label {
    display: block;
    background: #f8f9fa;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    padding: 15px;
    cursor: pointer;
    transition: all 0.2s ease;
    position: relative;
}

.reason-label:hover {
    background: #e9ecef;
    border-color: #000;
}

.reason-card input[type=\"radio\"]:checked + .reason-label {
    background: #000;
    color: #fff;
    border-color: #000;
}

.reason-text {
    font-size: 14px;
    font-weight: 500;
}

/* Opened Options */
.opened-options {
    display: flex;
    gap: 20px;
    margin-top: 8px;
}

.form-check-inline .form-check-input {
    margin-right: 8px;
}

.form-check-label {
    font-size: 14px;
    color: #666;
    cursor: pointer;
}

/* Captcha Section */
.captcha-section {
    background: #f8f9fa;
    border-radius: 6px;
    padding: 15px;
    border: 1px solid #e9ecef;
}

/* Form Actions */
.form-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 25px;
    margin-top: 20px;
    border: 1px solid #e9ecef;
}

.agreement-section {
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e9ecef;
}

.agreement-section .form-check {
    display: flex;
    align-items: flex-start;
    gap: 10px;
}

.agreement-section .form-check-input {
    margin-top: 2px;
}

.agreement-section .form-check-label {
    color: #666;
    line-height: 1.5;
    cursor: pointer;
}

.action-buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
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

/* Responsive Design */
@media (max-width: 768px) {
    .returns-form-container {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .section-content {
        padding: 15px;
    }
    
    .reason-options {
        grid-template-columns: 1fr;
    }
    
    .action-buttons {
        flex-direction: column-reverse;
    }
    
    .action-buttons .tf-btn {
        width: 100%;
    }
    
    .opened-options {
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .intro-header {
        flex-direction: column;
        text-align: center;
        gap: 8px;
    }
    
    .intro-header h3 {
        font-size: 18px;
    }
    
    .form-actions {
        padding: 20px;
    }
}
</style>

{{ footer }}
", "catalog/view/template/account/returns_form.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\returns_form.twig");
    }
}
