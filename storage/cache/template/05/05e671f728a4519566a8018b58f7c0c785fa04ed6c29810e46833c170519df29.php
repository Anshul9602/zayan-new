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

/* catalog/view/template/checkout/cart.twig */
class __TwigTemplate_861e29b178fa050c0df5b2d05ca6e0ce9e1ae73f196750c103d877555093dae5 extends Template
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
            <h1 class=\"title-page\">Shopping Cart</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Shopping Cart -->
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
                
                <!-- Cart Introduction -->
                <div class=\"cart-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-content\">
                            <div class=\"intro-text\">
                                <h3>Your Shopping Cart</h3>
                                <p>Review your items before checkout. You can update quantities or remove items as needed.</p>
                            </div>
                            <div class=\"intro-icon\">
                                <i class=\"icon icon-shopping-cart\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Cart Content -->
                <div class=\"cart-content\">
                    <div id=\"shopping-cart\">";
        // line 45
        yield ($context["list"] ?? null);
        yield "</div>
                </div>
                
                ";
        // line 48
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 50
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Shopping Cart -->
<script type=\"text/javascript\"><!--
\$('#shopping-cart').on('submit', '#output-cart form', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 92
        yield ($context["language"] ?? null);
        yield "', {}, function() {
                    \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 93
        yield ($context["language"] ?? null);
        yield "');
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 131
        yield ($context["language"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').observe(function(e) {
    \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 141
        yield ($context["language"] ?? null);
        yield "');
});

\$('#cart').on('submit', 'form', function(e) {
    window.setTimeout(function() {
        \$('#shopping-cart').load('index.php?route=checkout/cart.list&language=";
        // line 146
        yield ($context["language"] ?? null);
        yield "');
    }, 3000);
});
//--></script>

<style>
/* Shopping Cart Page Styling */
.cart-intro {
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
    color: #fff;
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

/* Cart Content */
.cart-content {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    min-height: 400px;
}

/* Loading State */
.cart-content:empty::before {
    content: '';
    display: block;
    width: 40px;
    height: 40px;
    margin: 160px auto;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #241B68;
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
    
    .cart-content {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
}

@media (max-width: 576px) {
    .intro-text h3 {
        font-size: 20px;
    }
    
    .intro-text p {
        font-size: 14px;
    }
}
</style>

";
        // line 267
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
        return "catalog/view/template/checkout/cart.twig";
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
        return array (  356 => 267,  232 => 146,  224 => 141,  211 => 131,  170 => 93,  166 => 92,  121 => 50,  116 => 48,  110 => 45,  88 => 26,  83 => 24,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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
            <h1 class=\"title-page\">Shopping Cart</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Shopping Cart -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                <!-- Cart Introduction -->
                <div class=\"cart-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-content\">
                            <div class=\"intro-text\">
                                <h3>Your Shopping Cart</h3>
                                <p>Review your items before checkout. You can update quantities or remove items as needed.</p>
                            </div>
                            <div class=\"intro-icon\">
                                <i class=\"icon icon-shopping-cart\"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Cart Content -->
                <div class=\"cart-content\">
                    <div id=\"shopping-cart\">{{ list }}</div>
                </div>
                
                {{ content_bottom }}
            </div>
            {{ column_right }}
        </div>
    </div>
</section>
<!-- /Shopping Cart -->
<script type=\"text/javascript\"><!--
\$('#shopping-cart').on('submit', '#output-cart form', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: \$(button).attr('formaction'),
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}', {}, function() {
                    \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').on('click', '.btn-danger', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            console.log(json);

            if (json['redirect']) {
                location = json['redirect'];
            }

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#shopping-cart').observe(function(e) {
    \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
});

\$('#cart').on('submit', 'form', function(e) {
    window.setTimeout(function() {
        \$('#shopping-cart').load('index.php?route=checkout/cart.list&language={{ language }}');
    }, 3000);
});
//--></script>

<style>
/* Shopping Cart Page Styling */
.cart-intro {
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
    color: #fff;
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

/* Cart Content */
.cart-content {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    margin-bottom: 30px;
    min-height: 400px;
}

/* Loading State */
.cart-content:empty::before {
    content: '';
    display: block;
    width: 40px;
    height: 40px;
    margin: 160px auto;
    border: 3px solid #f3f3f3;
    border-top: 3px solid #241B68;
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
    
    .cart-content {
        padding: 20px;
        margin: 0 -15px 30px -15px;
        border-radius: 0;
    }
    
    .intro-card {
        padding: 20px;
        margin: 0 -15px;
        border-radius: 0;
    }
}

@media (max-width: 576px) {
    .intro-text h3 {
        font-size: 20px;
    }
    
    .intro-text p {
        font-size: 14px;
    }
}
</style>

{{ footer }}
", "catalog/view/template/checkout/cart.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\checkout\\cart.twig");
    }
}
