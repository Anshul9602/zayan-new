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

/* catalog/view/template/checkout/checkout.twig */
class __TwigTemplate_2797cd30584966d9322802910576470938b60e71da8bba06c3f42dc26d83d248 extends Template
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
        yield "  </ul>
            <h1 class=\"title-page\">";
        // line 14
        yield ($context["heading_title"] ?? null);
        yield "</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Checkout Content -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div id=\"checkout-checkout\">
            ";
        // line 24
        yield ($context["content_top"] ?? null);
        yield "
            
            <div class=\"checkout-steps\">
      <div class=\"row\">
                    <!-- Customer Information & Addresses -->
        ";
        // line 29
        if (((($context["register"] ?? null) || ($context["payment_address"] ?? null)) || ($context["shipping_address"] ?? null))) {
            // line 30
            yield "                        <div class=\"col-lg-7\">
                            <div class=\"checkout-section\">
                                <!-- Customer Registration -->
            ";
            // line 33
            if (($context["register"] ?? null)) {
                // line 34
                yield "                                    <div class=\"checkout-step mb-4\">
                                        <div class=\"step-header\">
                                            <h3 class=\"step-title\">Customer Information</h3>
                                        </div>
                                        <div class=\"step-content\">
              <div id=\"checkout-register\">";
                // line 39
                yield ($context["register"] ?? null);
                yield "</div>
                                        </div>
                                    </div>
            ";
            }
            // line 43
            yield "                                
                                <!-- Payment Address -->
            ";
            // line 45
            if (($context["payment_address"] ?? null)) {
                // line 46
                yield "                                    <div class=\"checkout-step mb-4\">
                                        <div class=\"step-header\">
                                            <h3 class=\"step-title\">Billing Address</h3>
                                        </div>
                                        <div class=\"step-content\">
              <div id=\"checkout-payment-address\">";
                // line 51
                yield ($context["payment_address"] ?? null);
                yield "</div>
                                        </div>
                                    </div>
            ";
            }
            // line 55
            yield "                                
                                <!-- Shipping Address -->
            ";
            // line 57
            if (($context["shipping_address"] ?? null)) {
                // line 58
                yield "                                    <div class=\"checkout-step mb-4\">
                                        <div class=\"step-header\">
                                            <h3 class=\"step-title\">Shipping Address</h3>
                                        </div>
                                        <div class=\"step-content\">
              <div id=\"checkout-shipping-address\">";
                // line 63
                yield ($context["shipping_address"] ?? null);
                yield "</div>
                                        </div>
                                    </div>
            ";
            }
            // line 67
            yield "                            </div>
          </div>
        ";
        }
        // line 70
        yield "                    
                    <!-- Order Summary & Methods -->
                    <div class=\"col-lg-5\">
                        <div class=\"checkout-sidebar\">
                            <!-- Shipping Method -->
          ";
        // line 75
        if (($context["shipping_method"] ?? null)) {
            // line 76
            yield "                                <div class=\"checkout-step mb-4\">
                                    <div class=\"step-header\">
                                        <h3 class=\"step-title\">Shipping Method</h3>
                                    </div>
                                    <div class=\"step-content mt-2\">
                                        <div id=\"checkout-shipping-method\">";
            // line 81
            yield ($context["shipping_method"] ?? null);
            yield "</div>
                                    </div>
                                </div>
          ";
        }
        // line 85
        yield "                            
                            <!-- Payment Method -->
                            <div class=\"checkout-step mb-4\">
                                <div class=\"step-header\">
                                    <h3 class=\"step-title\">Payment Method</h3>
                                </div>
                                <div class=\"step-content mt-2\">
                                    <div id=\"checkout-payment-method\">";
        // line 92
        yield ($context["payment_method"] ?? null);
        yield "</div>
                                </div>
                            </div>
                            
                            <!-- Order Confirmation -->
                            <div class=\"checkout-step\">
                                <div class=\"step-header\">
                                    <h3 class=\"step-title\">Order Summary</h3>
                                </div>
                                <div class=\"step-content\">
          <div id=\"checkout-confirm\">";
        // line 102
        yield ($context["confirm"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
                    </div>
                </div>
            </div>
            
    ";
        // line 110
        yield ($context["content_bottom"] ?? null);
        yield "
  </div>
</div>
</section>
<!-- /Checkout Content -->

<style>
.checkout-steps {
    margin: 20px 0;
}

.checkout-step {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.step-header {
    background: #f8f9fa;
    padding: 15px 20px;
    border-bottom: 1px solid #e9ecef;
}

.step-title {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    color: #333;
}

.step-content {
    padding: 20px;
}

.checkout-sidebar .checkout-step {
    position: sticky;
    top: 20px;
}

/* Form styling for checkout forms */
.checkout-step .form-control,
.checkout-step .form-select {
    border-radius: 4px;
    border: 1px solid #ddd;
    padding: 10px 15px;
    margin-bottom: 15px;
}

.checkout-step .btn {
    border-radius: 4px;
    padding: 10px 20px;
    font-weight: 500;
}

.checkout-step .btn-primary {
    background-color: #000;
    border-color: #000;
}

.checkout-step .btn-primary:hover {
    background-color: #333;
    border-color: #333;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .checkout-sidebar .checkout-step {
        position: static;
    }
}
</style>

<script>
\$(document).ready(function() {
    console.log('Checkout page loaded');
    
    // Add loading indicators
    function showLoading(selector) {
        \$(selector).html('<div class=\"text-center py-3\"><div class=\"spinner-border spinner-border-sm\" role=\"status\"><span class=\"visually-hidden\">Loading...</span></div> Loading...</div>');
    }
    
    function showError(message) {
        return '<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">' + message + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>';
    }
    
    function showSuccess(message) {
        return '<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">' + message + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>';
    }
    
    // Handle payment address changes
    \$(document).on('change', '#input-payment-address', function() {
        var addressId = \$(this).val();
        console.log('Payment address changed to:', addressId);
        
        if (addressId) {
            \$.ajax({
                url: 'index.php?route=checkout/payment_address.save&language=";
        // line 208
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        if (($context["customer_token"] ?? null)) {
            yield "&customer_token=";
            yield ($context["customer_token"] ?? null);
        }
        yield "',
                type: 'post',
                data: {
                    address_id: addressId
                },
                dataType: 'json',
                success: function(json) {
                    console.log('Payment address response:', json);
                    if (json.error) {
                        console.error('Payment address error:', json.error);
                    }
                    // Refresh shipping methods if needed
                    if (\$('#checkout-shipping-method').length) {
                        \$('#checkout-shipping-method').load('index.php?route=checkout/shipping_method&language=";
        // line 221
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "');
                    }
                }
            });
        }
    });
    
    // Handle shipping address changes
    \$(document).on('change', '#input-shipping-address', function() {
        var addressId = \$(this).val();
        console.log('Shipping address changed to:', addressId);
        
        if (addressId) {
            \$.ajax({
                url: 'index.php?route=checkout/shipping_address.save&language=";
        // line 235
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        if (($context["customer_token"] ?? null)) {
            yield "&customer_token=";
            yield ($context["customer_token"] ?? null);
        }
        yield "',
                type: 'post',
                data: {
                    address_id: addressId
                },
                dataType: 'json',
                success: function(json) {
                    console.log('Shipping address response:', json);
                    if (json.error) {
                        console.error('Shipping address error:', json.error);
                    }
                    // Refresh shipping methods
                    if (\$('#checkout-shipping-method').length) {
                        \$('#checkout-shipping-method').load('index.php?route=checkout/shipping_method&language=";
        // line 248
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "');
                    }
                }
            });
        }
    });
    
    // Handle new address form submissions
    \$(document).on('submit', '#form-payment-address', function(e) {
        e.preventDefault();
        console.log('Payment address form submitted');
        
        \$.ajax({
            url: 'index.php?route=checkout/payment_address.save&language=";
        // line 261
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        if (($context["customer_token"] ?? null)) {
            yield "&customer_token=";
            yield ($context["customer_token"] ?? null);
        }
        yield "',
            type: 'post',
            data: \$(this).serialize(),
            dataType: 'json',
            success: function(json) {
                console.log('Payment address save response:', json);
                if (json.error) {
                    // Display errors
                    for (var key in json.error) {
                        \$('#error-payment-' + key).text(json.error[key]).show();
                    }
                } else {
                    // Clear errors
                    \$('.invalid-feedback').hide();
                    // Refresh other sections if needed
                    if (\$('#checkout-shipping-method').length) {
                        \$('#checkout-shipping-method').load('index.php?route=checkout/shipping_method&language=";
        // line 277
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "');
                    }
                }
            }
        });
    });
    
    // Handle shipping method selection
    \$(document).on('change', 'input[name=\"shipping_method\"]', function() {
        var shippingMethod = \$(this).val();
        console.log('Shipping method selected:', shippingMethod);
        
        \$.ajax({
            url: 'index.php?route=checkout/shipping_method.save&language=";
        // line 290
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        if (($context["customer_token"] ?? null)) {
            yield "&customer_token=";
            yield ($context["customer_token"] ?? null);
        }
        yield "',
            type: 'post',
            data: {
                shipping_method: shippingMethod
            },
            dataType: 'json',
            success: function(json) {
                console.log('Shipping method response:', json);
                // Refresh payment methods and totals
                \$('#checkout-payment-method').load('index.php?route=checkout/payment_method&language=";
        // line 299
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "');
                \$('#checkout-confirm').load('index.php?route=checkout/confirm&language=";
        // line 300
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "');
            }
        });
    });
    
    // Handle payment method selection
    \$(document).on('change', 'input[name=\"payment_method\"]', function() {
        var paymentMethod = \$(this).val();
        console.log('Payment method selected:', paymentMethod);
        
        \$.ajax({
            url: 'index.php?route=checkout/payment_method.save&language=";
        // line 311
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        if (($context["customer_token"] ?? null)) {
            yield "&customer_token=";
            yield ($context["customer_token"] ?? null);
        }
        yield "',
            type: 'post',
            data: {
                payment_method: paymentMethod
            },
            dataType: 'json',
            success: function(json) {
                console.log('Payment method response:', json);
                // Refresh confirm section
                \$('#checkout-confirm').load('index.php?route=checkout/confirm&language=";
        // line 320
        yield ((array_key_exists("language", $context)) ? (Twig\Extension\CoreExtension::default(($context["language"] ?? null), "en-gb")) : ("en-gb"));
        yield "');
            }
        });
    });
});
</script>

";
        // line 327
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
        return "catalog/view/template/checkout/checkout.twig";
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
        return array (  491 => 327,  481 => 320,  465 => 311,  451 => 300,  447 => 299,  431 => 290,  415 => 277,  392 => 261,  376 => 248,  356 => 235,  339 => 221,  319 => 208,  218 => 110,  207 => 102,  194 => 92,  185 => 85,  178 => 81,  171 => 76,  169 => 75,  162 => 70,  157 => 67,  150 => 63,  143 => 58,  141 => 57,  137 => 55,  130 => 51,  123 => 46,  121 => 45,  117 => 43,  110 => 39,  103 => 34,  101 => 33,  96 => 30,  94 => 29,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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

<!-- Checkout Content -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div id=\"checkout-checkout\">
            {{ content_top }}
            
            <div class=\"checkout-steps\">
      <div class=\"row\">
                    <!-- Customer Information & Addresses -->
        {% if register or payment_address or shipping_address %}
                        <div class=\"col-lg-7\">
                            <div class=\"checkout-section\">
                                <!-- Customer Registration -->
            {% if register %}
                                    <div class=\"checkout-step mb-4\">
                                        <div class=\"step-header\">
                                            <h3 class=\"step-title\">Customer Information</h3>
                                        </div>
                                        <div class=\"step-content\">
              <div id=\"checkout-register\">{{ register }}</div>
                                        </div>
                                    </div>
            {% endif %}
                                
                                <!-- Payment Address -->
            {% if payment_address %}
                                    <div class=\"checkout-step mb-4\">
                                        <div class=\"step-header\">
                                            <h3 class=\"step-title\">Billing Address</h3>
                                        </div>
                                        <div class=\"step-content\">
              <div id=\"checkout-payment-address\">{{ payment_address }}</div>
                                        </div>
                                    </div>
            {% endif %}
                                
                                <!-- Shipping Address -->
            {% if shipping_address %}
                                    <div class=\"checkout-step mb-4\">
                                        <div class=\"step-header\">
                                            <h3 class=\"step-title\">Shipping Address</h3>
                                        </div>
                                        <div class=\"step-content\">
              <div id=\"checkout-shipping-address\">{{ shipping_address }}</div>
                                        </div>
                                    </div>
            {% endif %}
                            </div>
          </div>
        {% endif %}
                    
                    <!-- Order Summary & Methods -->
                    <div class=\"col-lg-5\">
                        <div class=\"checkout-sidebar\">
                            <!-- Shipping Method -->
          {% if shipping_method %}
                                <div class=\"checkout-step mb-4\">
                                    <div class=\"step-header\">
                                        <h3 class=\"step-title\">Shipping Method</h3>
                                    </div>
                                    <div class=\"step-content mt-2\">
                                        <div id=\"checkout-shipping-method\">{{ shipping_method }}</div>
                                    </div>
                                </div>
          {% endif %}
                            
                            <!-- Payment Method -->
                            <div class=\"checkout-step mb-4\">
                                <div class=\"step-header\">
                                    <h3 class=\"step-title\">Payment Method</h3>
                                </div>
                                <div class=\"step-content mt-2\">
                                    <div id=\"checkout-payment-method\">{{ payment_method }}</div>
                                </div>
                            </div>
                            
                            <!-- Order Confirmation -->
                            <div class=\"checkout-step\">
                                <div class=\"step-header\">
                                    <h3 class=\"step-title\">Order Summary</h3>
                                </div>
                                <div class=\"step-content\">
          <div id=\"checkout-confirm\">{{ confirm }}</div>
        </div>
      </div>
    </div>
                    </div>
                </div>
            </div>
            
    {{ content_bottom }}
  </div>
</div>
</section>
<!-- /Checkout Content -->

<style>
.checkout-steps {
    margin: 20px 0;
}

.checkout-step {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.step-header {
    background: #f8f9fa;
    padding: 15px 20px;
    border-bottom: 1px solid #e9ecef;
}

.step-title {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    color: #333;
}

.step-content {
    padding: 20px;
}

.checkout-sidebar .checkout-step {
    position: sticky;
    top: 20px;
}

/* Form styling for checkout forms */
.checkout-step .form-control,
.checkout-step .form-select {
    border-radius: 4px;
    border: 1px solid #ddd;
    padding: 10px 15px;
    margin-bottom: 15px;
}

.checkout-step .btn {
    border-radius: 4px;
    padding: 10px 20px;
    font-weight: 500;
}

.checkout-step .btn-primary {
    background-color: #000;
    border-color: #000;
}

.checkout-step .btn-primary:hover {
    background-color: #333;
    border-color: #333;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .checkout-sidebar .checkout-step {
        position: static;
    }
}
</style>

<script>
\$(document).ready(function() {
    console.log('Checkout page loaded');
    
    // Add loading indicators
    function showLoading(selector) {
        \$(selector).html('<div class=\"text-center py-3\"><div class=\"spinner-border spinner-border-sm\" role=\"status\"><span class=\"visually-hidden\">Loading...</span></div> Loading...</div>');
    }
    
    function showError(message) {
        return '<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">' + message + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>';
    }
    
    function showSuccess(message) {
        return '<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">' + message + '<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>';
    }
    
    // Handle payment address changes
    \$(document).on('change', '#input-payment-address', function() {
        var addressId = \$(this).val();
        console.log('Payment address changed to:', addressId);
        
        if (addressId) {
            \$.ajax({
                url: 'index.php?route=checkout/payment_address.save&language={{ language|default(\"en-gb\") }}{% if customer_token %}&customer_token={{ customer_token }}{% endif %}',
                type: 'post',
                data: {
                    address_id: addressId
                },
                dataType: 'json',
                success: function(json) {
                    console.log('Payment address response:', json);
                    if (json.error) {
                        console.error('Payment address error:', json.error);
                    }
                    // Refresh shipping methods if needed
                    if (\$('#checkout-shipping-method').length) {
                        \$('#checkout-shipping-method').load('index.php?route=checkout/shipping_method&language={{ language|default(\"en-gb\") }}');
                    }
                }
            });
        }
    });
    
    // Handle shipping address changes
    \$(document).on('change', '#input-shipping-address', function() {
        var addressId = \$(this).val();
        console.log('Shipping address changed to:', addressId);
        
        if (addressId) {
            \$.ajax({
                url: 'index.php?route=checkout/shipping_address.save&language={{ language|default(\"en-gb\") }}{% if customer_token %}&customer_token={{ customer_token }}{% endif %}',
                type: 'post',
                data: {
                    address_id: addressId
                },
                dataType: 'json',
                success: function(json) {
                    console.log('Shipping address response:', json);
                    if (json.error) {
                        console.error('Shipping address error:', json.error);
                    }
                    // Refresh shipping methods
                    if (\$('#checkout-shipping-method').length) {
                        \$('#checkout-shipping-method').load('index.php?route=checkout/shipping_method&language={{ language|default(\"en-gb\") }}');
                    }
                }
            });
        }
    });
    
    // Handle new address form submissions
    \$(document).on('submit', '#form-payment-address', function(e) {
        e.preventDefault();
        console.log('Payment address form submitted');
        
        \$.ajax({
            url: 'index.php?route=checkout/payment_address.save&language={{ language|default(\"en-gb\") }}{% if customer_token %}&customer_token={{ customer_token }}{% endif %}',
            type: 'post',
            data: \$(this).serialize(),
            dataType: 'json',
            success: function(json) {
                console.log('Payment address save response:', json);
                if (json.error) {
                    // Display errors
                    for (var key in json.error) {
                        \$('#error-payment-' + key).text(json.error[key]).show();
                    }
                } else {
                    // Clear errors
                    \$('.invalid-feedback').hide();
                    // Refresh other sections if needed
                    if (\$('#checkout-shipping-method').length) {
                        \$('#checkout-shipping-method').load('index.php?route=checkout/shipping_method&language={{ language|default(\"en-gb\") }}');
                    }
                }
            }
        });
    });
    
    // Handle shipping method selection
    \$(document).on('change', 'input[name=\"shipping_method\"]', function() {
        var shippingMethod = \$(this).val();
        console.log('Shipping method selected:', shippingMethod);
        
        \$.ajax({
            url: 'index.php?route=checkout/shipping_method.save&language={{ language|default(\"en-gb\") }}{% if customer_token %}&customer_token={{ customer_token }}{% endif %}',
            type: 'post',
            data: {
                shipping_method: shippingMethod
            },
            dataType: 'json',
            success: function(json) {
                console.log('Shipping method response:', json);
                // Refresh payment methods and totals
                \$('#checkout-payment-method').load('index.php?route=checkout/payment_method&language={{ language|default(\"en-gb\") }}');
                \$('#checkout-confirm').load('index.php?route=checkout/confirm&language={{ language|default(\"en-gb\") }}');
            }
        });
    });
    
    // Handle payment method selection
    \$(document).on('change', 'input[name=\"payment_method\"]', function() {
        var paymentMethod = \$(this).val();
        console.log('Payment method selected:', paymentMethod);
        
        \$.ajax({
            url: 'index.php?route=checkout/payment_method.save&language={{ language|default(\"en-gb\") }}{% if customer_token %}&customer_token={{ customer_token }}{% endif %}',
            type: 'post',
            data: {
                payment_method: paymentMethod
            },
            dataType: 'json',
            success: function(json) {
                console.log('Payment method response:', json);
                // Refresh confirm section
                \$('#checkout-confirm').load('index.php?route=checkout/confirm&language={{ language|default(\"en-gb\") }}');
            }
        });
    });
});
</script>

{{ footer }}
", "catalog/view/template/checkout/checkout.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\checkout\\checkout.twig");
    }
}
