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

/* catalog/view/template/account/login.twig */
class __TwigTemplate_af1b74d16fd12b4a13e877980ca1ad22138a2c86458e4bbca21f78dec08b4b02 extends Template
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
            <h1 class=\"title-page\">Account Login</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Login Section -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <!-- Alert Messages -->
        ";
        // line 24
        if (($context["success"] ?? null)) {
            // line 25
            yield "            <div class=\"alert alert-success alert-dismissible mb-4\">
                <i class=\"fa-solid fa-circle-check\"></i> ";
            // line 26
            yield ($context["success"] ?? null);
            yield " 
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
        }
        // line 30
        yield "        ";
        if (($context["error_warning"] ?? null)) {
            // line 31
            yield "            <div class=\"alert alert-danger alert-dismissible mb-4\">
                <i class=\"fa-solid fa-circle-exclamation\"></i> ";
            // line 32
            yield ($context["error_warning"] ?? null);
            yield " 
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        ";
        }
        // line 36
        yield "
        <div class=\"row\">
            ";
        // line 38
        yield ($context["column_left"] ?? null);
        yield "
            <div id=\"content\" class=\"col\">
                ";
        // line 40
        yield ($context["content_top"] ?? null);
        yield "
                
                <div class=\"login-container\">
                    <div class=\"row g-4\">
                        <!-- New Customer -->
                        <div class=\"col-lg-6\">
                            <div class=\"login-card new-customer-card\">
                                <div class=\"card-header\">
                                    <i class=\"icon icon-user-plus\"></i>
                                    <h3>";
        // line 49
        yield ($context["text_new_customer"] ?? null);
        yield "</h3>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"card-subtitle\">";
        // line 52
        yield ($context["text_register"] ?? null);
        yield "</h4>
                                    <p class=\"card-description\">";
        // line 53
        yield ($context["text_register_account"] ?? null);
        yield "</p>
                                    <div class=\"benefits-list\">
                                        <div class=\"benefit-item\">
                                            <i class=\"icon icon-check\"></i>
                                            <span>Fast and easy checkout</span>
                                        </div>
                                        <div class=\"benefit-item\">
                                            <i class=\"icon icon-check\"></i>
                                            <span>Track your orders</span>
                                        </div>
                                        <div class=\"benefit-item\">
                                            <i class=\"icon icon-check\"></i>
                                            <span>Save your favorites</span>
                                        </div>
                                        <div class=\"benefit-item\">
                                            <i class=\"icon icon-check\"></i>
                                            <span>Exclusive offers</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"";
        // line 74
        yield ($context["register"] ?? null);
        yield "\" class=\"tf-btn btn-fill animate-btn w-100\">
                                        <i class=\"icon icon-user-plus\"></i>
                                        ";
        // line 76
        yield ($context["button_continue"] ?? null);
        yield "
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Returning Customer -->
                        <div class=\"col-lg-6\">
                            <div class=\"login-card returning-customer-card\">
                                <div class=\"card-header\">
                                    <i class=\"icon icon-user\"></i>
                                    <h3>";
        // line 87
        yield ($context["text_returning_customer"] ?? null);
        yield "</h3>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"card-subtitle\">";
        // line 90
        yield ($context["text_i_am_returning_customer"] ?? null);
        yield "</h4>
                                    
                                    <form id=\"form-login\" action=\"";
        // line 92
        yield ($context["login"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
                                        <div class=\"form-group\">
                                            <label for=\"input-email\" class=\"form-label\">";
        // line 94
        yield ($context["entry_email"] ?? null);
        yield "</label>
                                            <div class=\"input-group\">
                                                <span class=\"input-icon\">
                                                    <i class=\"icon icon-mail\"></i>
                                                </span>
                                                <input type=\"email\" name=\"email\" value=\"";
        // line 99
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label for=\"input-password\" class=\"form-label\">";
        // line 104
        yield ($context["entry_password"] ?? null);
        yield "</label>
                                            <div class=\"input-group\">
                                                <span class=\"input-icon\">
                                                    <i class=\"icon icon-lock\"></i>
                                                </span>
                                                <input type=\"password\" name=\"password\" value=\"";
        // line 109
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-options\">
                                            <a href=\"";
        // line 114
        yield ($context["forgotten"] ?? null);
        yield "\" class=\"forgot-link\">";
        yield ($context["text_forgotten"] ?? null);
        yield "</a>
                                        </div>
                                        
                                        ";
        // line 117
        if (($context["redirect"] ?? null)) {
            // line 118
            yield "                                            <input type=\"hidden\" name=\"redirect\" value=\"";
            yield ($context["redirect"] ?? null);
            yield "\"/>
                                        ";
        }
        // line 120
        yield "                                        
                                        <button type=\"submit\" class=\"tf-btn btn-fill animate-btn w-100\">
                                            <i class=\"icon icon-log-in\"></i>
                                            ";
        // line 123
        yield ($context["button_login"] ?? null);
        yield "
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                ";
        // line 132
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 134
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Login Section -->

<style>
/* Login Page Styling */
.login-container {
    max-width: 1000px;
    margin: 0 auto;
}

.login-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.login-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
}

.card-header {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    padding: 25px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.card-header i {
    font-size: 32px;
}

.card-header h3 {
    margin: 0;
    color:#fff;
    font-size: 22px;
    font-weight: 600;
}

.card-content {
    padding: 30px;
    flex: 1;
}

.card-subtitle {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin: 0 0 15px 0;
}

.card-description {
    color: #666;
    margin-bottom: 25px;
    line-height: 1.6;
}

/* Benefits List */
.benefits-list {
    margin-bottom: 20px;
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
    color: #666;
}

.benefit-item i {
    color: #28a745;
    font-size: 16px;
}

.benefit-item:last-child {
    margin-bottom: 0;
}

/* Form Styling */
.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    font-weight: 500;
    color: #333;
    margin-bottom: 8px;
}

.input-group {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
    z-index: 2;
}

.input-group .form-control {
    padding-left: 45px;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding-top: 12px;
    padding-bottom: 12px;
    font-size: 14px;
    transition: all 0.2s ease;
}

.input-group .form-control:focus {
    border-color: #241B68;
    box-shadow: 0 0 0 0.2rem rgba(36,27,104,0.1);
}

.form-options {
    text-align: right;
    margin-bottom: 25px;
}

.forgot-link {
    color: #666;
    font-size: 14px;
    text-decoration: none;
    transition: color 0.2s ease;
}

.forgot-link:hover {
    color: #241B68;
}

.card-footer {
    padding: 0 30px 30px 30px;
}

.tf-btn {
    padding: 15px 20px;
    font-size: 16px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.tf-btn.w-100 {
    width: 100%;
}

/* Card Specific Styling */
.new-customer-card .card-header {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
}

.returning-customer-card .card-header {
    background: linear-gradient(135deg, #000 0%, #241B68 100%);
}

/* Alert Styling */
.alert {
    border-radius: 8px;
    border: none;
    padding: 15px 20px;
    font-weight: 500;
}

.alert-success {
    background: #d4edda;
    color: #155724;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
}

/* Responsive Design */
@media (max-width: 991px) {
    .login-card {
        margin-bottom: 30px;
    }
}

@media (max-width: 768px) {
    .card-content {
        padding: 20px;
    }
    
    .card-footer {
        padding: 0 20px 20px 20px;
    }
    
    .card-header {
        padding: 20px;
    }
    
    .card-header h3 {
        font-size: 20px;
    }
    
    .card-header i {
        font-size: 28px;
    }
}

@media (max-width: 576px) {
    .login-container {
        margin: 0 -15px;
    }
    
    .login-card {
        border-radius: 0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
}
</style>

";
        // line 369
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
        return "catalog/view/template/account/login.twig";
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
        return array (  510 => 369,  272 => 134,  267 => 132,  255 => 123,  250 => 120,  244 => 118,  242 => 117,  234 => 114,  224 => 109,  216 => 104,  206 => 99,  198 => 94,  193 => 92,  188 => 90,  182 => 87,  168 => 76,  163 => 74,  139 => 53,  135 => 52,  129 => 49,  117 => 40,  112 => 38,  108 => 36,  101 => 32,  98 => 31,  95 => 30,  88 => 26,  85 => 25,  83 => 24,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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
            <h1 class=\"title-page\">Account Login</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Login Section -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <!-- Alert Messages -->
        {% if success %}
            <div class=\"alert alert-success alert-dismissible mb-4\">
                <i class=\"fa-solid fa-circle-check\"></i> {{ success }} 
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endif %}
        {% if error_warning %}
            <div class=\"alert alert-danger alert-dismissible mb-4\">
                <i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }} 
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endif %}

        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                <div class=\"login-container\">
                    <div class=\"row g-4\">
                        <!-- New Customer -->
                        <div class=\"col-lg-6\">
                            <div class=\"login-card new-customer-card\">
                                <div class=\"card-header\">
                                    <i class=\"icon icon-user-plus\"></i>
                                    <h3>{{ text_new_customer }}</h3>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"card-subtitle\">{{ text_register }}</h4>
                                    <p class=\"card-description\">{{ text_register_account }}</p>
                                    <div class=\"benefits-list\">
                                        <div class=\"benefit-item\">
                                            <i class=\"icon icon-check\"></i>
                                            <span>Fast and easy checkout</span>
                                        </div>
                                        <div class=\"benefit-item\">
                                            <i class=\"icon icon-check\"></i>
                                            <span>Track your orders</span>
                                        </div>
                                        <div class=\"benefit-item\">
                                            <i class=\"icon icon-check\"></i>
                                            <span>Save your favorites</span>
                                        </div>
                                        <div class=\"benefit-item\">
                                            <i class=\"icon icon-check\"></i>
                                            <span>Exclusive offers</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"card-footer\">
                                    <a href=\"{{ register }}\" class=\"tf-btn btn-fill animate-btn w-100\">
                                        <i class=\"icon icon-user-plus\"></i>
                                        {{ button_continue }}
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Returning Customer -->
                        <div class=\"col-lg-6\">
                            <div class=\"login-card returning-customer-card\">
                                <div class=\"card-header\">
                                    <i class=\"icon icon-user\"></i>
                                    <h3>{{ text_returning_customer }}</h3>
                                </div>
                                <div class=\"card-content\">
                                    <h4 class=\"card-subtitle\">{{ text_i_am_returning_customer }}</h4>
                                    
                                    <form id=\"form-login\" action=\"{{ login }}\" method=\"post\" data-oc-toggle=\"ajax\">
                                        <div class=\"form-group\">
                                            <label for=\"input-email\" class=\"form-label\">{{ entry_email }}</label>
                                            <div class=\"input-group\">
                                                <span class=\"input-icon\">
                                                    <i class=\"icon icon-mail\"></i>
                                                </span>
                                                <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label for=\"input-password\" class=\"form-label\">{{ entry_password }}</label>
                                            <div class=\"input-group\">
                                                <span class=\"input-icon\">
                                                    <i class=\"icon icon-lock\"></i>
                                                </span>
                                                <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\"/>
                                            </div>
                                        </div>
                                        
                                        <div class=\"form-options\">
                                            <a href=\"{{ forgotten }}\" class=\"forgot-link\">{{ text_forgotten }}</a>
                                        </div>
                                        
                                        {% if redirect %}
                                            <input type=\"hidden\" name=\"redirect\" value=\"{{ redirect }}\"/>
                                        {% endif %}
                                        
                                        <button type=\"submit\" class=\"tf-btn btn-fill animate-btn w-100\">
                                            <i class=\"icon icon-log-in\"></i>
                                            {{ button_login }}
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{ content_bottom }}
            </div>
            {{ column_right }}
        </div>
    </div>
</section>
<!-- /Login Section -->

<style>
/* Login Page Styling */
.login-container {
    max-width: 1000px;
    margin: 0 auto;
}

.login-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.login-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.15);
}

.card-header {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    padding: 25px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.card-header i {
    font-size: 32px;
}

.card-header h3 {
    margin: 0;
    color:#fff;
    font-size: 22px;
    font-weight: 600;
}

.card-content {
    padding: 30px;
    flex: 1;
}

.card-subtitle {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin: 0 0 15px 0;
}

.card-description {
    color: #666;
    margin-bottom: 25px;
    line-height: 1.6;
}

/* Benefits List */
.benefits-list {
    margin-bottom: 20px;
}

.benefit-item {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
    color: #666;
}

.benefit-item i {
    color: #28a745;
    font-size: 16px;
}

.benefit-item:last-child {
    margin-bottom: 0;
}

/* Form Styling */
.form-group {
    margin-bottom: 20px;
}

.form-label {
    display: block;
    font-weight: 500;
    color: #333;
    margin-bottom: 8px;
}

.input-group {
    position: relative;
}

.input-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
    z-index: 2;
}

.input-group .form-control {
    padding-left: 45px;
    border: 1px solid #ddd;
    border-radius: 6px;
    padding-top: 12px;
    padding-bottom: 12px;
    font-size: 14px;
    transition: all 0.2s ease;
}

.input-group .form-control:focus {
    border-color: #241B68;
    box-shadow: 0 0 0 0.2rem rgba(36,27,104,0.1);
}

.form-options {
    text-align: right;
    margin-bottom: 25px;
}

.forgot-link {
    color: #666;
    font-size: 14px;
    text-decoration: none;
    transition: color 0.2s ease;
}

.forgot-link:hover {
    color: #241B68;
}

.card-footer {
    padding: 0 30px 30px 30px;
}

.tf-btn {
    padding: 15px 20px;
    font-size: 16px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    border-radius: 6px;
    transition: all 0.2s ease;
}

.tf-btn.w-100 {
    width: 100%;
}

/* Card Specific Styling */
.new-customer-card .card-header {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
}

.returning-customer-card .card-header {
    background: linear-gradient(135deg, #000 0%, #241B68 100%);
}

/* Alert Styling */
.alert {
    border-radius: 8px;
    border: none;
    padding: 15px 20px;
    font-weight: 500;
}

.alert-success {
    background: #d4edda;
    color: #155724;
}

.alert-danger {
    background: #f8d7da;
    color: #721c24;
}

/* Responsive Design */
@media (max-width: 991px) {
    .login-card {
        margin-bottom: 30px;
    }
}

@media (max-width: 768px) {
    .card-content {
        padding: 20px;
    }
    
    .card-footer {
        padding: 0 20px 20px 20px;
    }
    
    .card-header {
        padding: 20px;
    }
    
    .card-header h3 {
        font-size: 20px;
    }
    
    .card-header i {
        font-size: 28px;
    }
}

@media (max-width: 576px) {
    .login-container {
        margin: 0 -15px;
    }
    
    .login-card {
        border-radius: 0;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
}
</style>

{{ footer }}
", "catalog/view/template/account/login.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\login.twig");
    }
}
