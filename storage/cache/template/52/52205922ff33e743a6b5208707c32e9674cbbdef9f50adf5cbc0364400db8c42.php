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

/* catalog/view/template/account/address.twig */
class __TwigTemplate_9d8fa463043572a8914dcfa4364bad5e79078c40941b21d4a08a92656e18d2b4 extends Template
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
        yield ($context["text_address_book"] ?? null);
        yield "</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Address Book -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <!-- Success Message -->
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
        yield "
        <div class=\"row\">
            ";
        // line 32
        yield ($context["column_left"] ?? null);
        yield "
            <div id=\"content\" class=\"col\">
                ";
        // line 34
        yield ($context["content_top"] ?? null);
        yield "
                
                <!-- Address Book Introduction -->
                <div class=\"address-book-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-content\">
                            <div class=\"intro-text\">
                                <h3>Your Address Book</h3>
                                <p>Manage your shipping and billing addresses for faster checkout. You can add multiple addresses and set one as your default.</p>
                            </div>
                            <div class=\"intro-action\">
                                <a href=\"";
        // line 45
        yield ($context["add"] ?? null);
        yield "\" class=\"tf-btn btn-fill animate-btn\">
                                    <i class=\"icon icon-plus\"></i>
                                    ";
        // line 47
        yield ($context["button_new_address"] ?? null);
        yield "
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Address List -->
                <div class=\"address-book-content\">
                    <div id=\"address\">";
        // line 56
        yield ($context["list"] ?? null);
        yield "</div>
                </div>
                
                <!-- Page Actions -->
                <div class=\"address-book-actions\">
                    <div class=\"action-buttons\">
                        <a href=\"";
        // line 62
        yield ($context["back"] ?? null);
        yield "\" class=\"tf-btn btn-outline animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            ";
        // line 64
        yield ($context["button_back"] ?? null);
        yield "
                        </a>
                        <a href=\"";
        // line 66
        yield ($context["add"] ?? null);
        yield "\" class=\"tf-btn btn-fill animate-btn\">
                            <i class=\"icon icon-plus\"></i>
                            ";
        // line 68
        yield ($context["button_new_address"] ?? null);
        yield "
                        </a>
                    </div>
                </div>
                
                ";
        // line 73
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 75
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Address Book -->
<script type=\"text/javascript\"><!--
\$('#address').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#address').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#address').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#address').load('index.php?route=account/address.list&language=";
        // line 107
        yield ($context["language"] ?? null);
        yield "&customer_token=";
        yield ($context["customer_token"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>

<style>
/* Address Book Page Styling */
.address-book-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
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
    color:#fff;
  }

.intro-text p {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.5;
}

.intro-action {
    flex-shrink: 0;
}

.intro-action .tf-btn {
    background: #fff;
    color: #333;
    border: none;
    padding: 12px 20px;
    font-size: 14px;
    font-weight: 500;
}

.intro-action .tf-btn:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
}

/* Address Book Content */
.address-book-content {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    min-height: 200px;
}

/* Address Book Actions */
.address-book-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    border: 1px solid #e9ecef;
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
    min-width: 160px;
    justify-content: center;
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

/* Loading State */
.address-book-content:empty::before {
    content: '';
    display: block;
    width: 40px;
    height: 40px;
    margin: 80px auto;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #17a2b8;
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
    
    .address-book-content {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .action-buttons {
        flex-direction: column-reverse;
    }
    
    .action-buttons .tf-btn {
        width: 100%;
    }
    
    .address-book-actions {
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
    
    .address-book-actions {
        margin: 0 -15px;
        border-radius: 0;
    }
}
</style>

";
        // line 298
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
        return "catalog/view/template/account/address.twig";
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
        return array (  406 => 298,  210 => 107,  175 => 75,  170 => 73,  162 => 68,  157 => 66,  152 => 64,  147 => 62,  138 => 56,  126 => 47,  121 => 45,  107 => 34,  102 => 32,  98 => 30,  91 => 26,  88 => 25,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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
            <h1 class=\"title-page\">{{ text_address_book }}</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Address Book -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <!-- Success Message -->
        {% if success %}
            <div class=\"alert alert-success alert-dismissible mb-4\">
                <i class=\"fa-solid fa-circle-check\"></i> {{ success }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
            </div>
        {% endif %}

        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                <!-- Address Book Introduction -->
                <div class=\"address-book-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-content\">
                            <div class=\"intro-text\">
                                <h3>Your Address Book</h3>
                                <p>Manage your shipping and billing addresses for faster checkout. You can add multiple addresses and set one as your default.</p>
                            </div>
                            <div class=\"intro-action\">
                                <a href=\"{{ add }}\" class=\"tf-btn btn-fill animate-btn\">
                                    <i class=\"icon icon-plus\"></i>
                                    {{ button_new_address }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Address List -->
                <div class=\"address-book-content\">
                    <div id=\"address\">{{ list }}</div>
                </div>
                
                <!-- Page Actions -->
                <div class=\"address-book-actions\">
                    <div class=\"action-buttons\">
                        <a href=\"{{ back }}\" class=\"tf-btn btn-outline animate-btn\">
                            <i class=\"icon icon-arrow-left\"></i>
                            {{ button_back }}
                        </a>
                        <a href=\"{{ add }}\" class=\"tf-btn btn-fill animate-btn\">
                            <i class=\"icon icon-plus\"></i>
                            {{ button_new_address }}
                        </a>
                    </div>
                </div>
                
                {{ content_bottom }}
            </div>
            {{ column_right }}
        </div>
    </div>
</section>
<!-- /Address Book -->
<script type=\"text/javascript\"><!--
\$('#address').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            console.log(json);

            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#address').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#address').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#address').load('index.php?route=account/address.list&language={{ language }}&customer_token={{ customer_token }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>

<style>
/* Address Book Page Styling */
.address-book-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #241B68 0%, #000 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(36,27,104,0.2);
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
    color:#fff;
  }

.intro-text p {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.5;
}

.intro-action {
    flex-shrink: 0;
}

.intro-action .tf-btn {
    background: #fff;
    color: #333;
    border: none;
    padding: 12px 20px;
    font-size: 14px;
    font-weight: 500;
}

.intro-action .tf-btn:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
}

/* Address Book Content */
.address-book-content {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    min-height: 200px;
}

/* Address Book Actions */
.address-book-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    border: 1px solid #e9ecef;
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
    min-width: 160px;
    justify-content: center;
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

/* Loading State */
.address-book-content:empty::before {
    content: '';
    display: block;
    width: 40px;
    height: 40px;
    margin: 80px auto;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #17a2b8;
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
    
    .address-book-content {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
    
    .action-buttons {
        flex-direction: column-reverse;
    }
    
    .action-buttons .tf-btn {
        width: 100%;
    }
    
    .address-book-actions {
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
    
    .address-book-actions {
        margin: 0 -15px;
        border-radius: 0;
    }
}
</style>

{{ footer }}
", "catalog/view/template/account/address.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\address.twig");
    }
}
