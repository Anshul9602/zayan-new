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

/* catalog/view/template/account/order_info.twig */
class __TwigTemplate_e76f5efd6eb99e737d3df75e8d45c5617898a1d086407136761f410f7e6221fc extends Template
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
            <h1 class=\"title-page\">Order Details</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Order Details -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div id=\"account-order\">
      ";
        // line 24
        yield ($context["content_top"] ?? null);
        yield "
            
            <!-- Order Header Info -->
            <div class=\"order-header mb-4\">
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"info-card\">
                            <div class=\"info-header\">
                                <i class=\"icon icon-receipt\"></i>
                                <h4>";
        // line 33
        yield ($context["text_invoice_no"] ?? null);
        yield "</h4>
                            </div>
                            <div class=\"info-value\">
            ";
        // line 36
        if (($context["invoice_no"] ?? null)) {
            yield ($context["invoice_no"] ?? null);
        } else {
            yield ($context["text_tbc"] ?? null);
        }
        // line 37
        yield "          </div>
        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"info-card\">
                            <div class=\"info-header\">
                                <i class=\"icon icon-package\"></i>
                                <h4>";
        // line 44
        yield ($context["text_order_id"] ?? null);
        yield "</h4>
                            </div>
                            <div class=\"info-value\">
                                #";
        // line 47
        yield ($context["order_id"] ?? null);
        yield "
                            </div>
                        </div>
          </div>
        </div>
      </div>
            <!-- Address Information -->
      ";
        // line 54
        if ((($context["payment_address"] ?? null) || ($context["shipping_address"] ?? null))) {
            // line 55
            yield "                <div class=\"address-section mb-4\">
                    <div class=\"row g-3\">
          ";
            // line 57
            if (($context["payment_address"] ?? null)) {
                // line 58
                yield "                            <div class=\"col-lg-6\">
                                <div class=\"address-card\">
                                    <div class=\"address-header\">
                                        <i class=\"icon icon-credit-card\"></i>
                                        <h4>";
                // line 62
                yield ($context["text_payment_address"] ?? null);
                yield "</h4>
                                    </div>
                                    <div class=\"address-content\">
                ";
                // line 65
                yield ($context["payment_address"] ?? null);
                yield "
                                    </div>
              </div>
            </div>
          ";
            }
            // line 70
            yield "          ";
            if (($context["shipping_address"] ?? null)) {
                // line 71
                yield "                            <div class=\"col-lg-6\">
                                <div class=\"address-card\">
                                    <div class=\"address-header\">
                                        <i class=\"icon icon-truck\"></i>
                                        <h4>";
                // line 75
                yield ($context["text_shipping_address"] ?? null);
                yield "</h4>
                                    </div>
                                    <div class=\"address-content\">
                ";
                // line 78
                yield ($context["shipping_address"] ?? null);
                yield "
                                    </div>
              </div>
            </div>
          ";
            }
            // line 83
            yield "                    </div>
        </div>
      ";
        }
        // line 86
        yield "            <!-- Shipping & Payment Methods -->
            <div class=\"methods-section mb-4\">
                <div class=\"row g-3\">
        ";
        // line 89
        if (($context["shipping_method"] ?? null)) {
            // line 90
            yield "                        <div class=\"col-lg-6\">
                            <div class=\"method-card\">
                                <div class=\"method-header\">
                                    <i class=\"icon icon-truck\"></i>
                                    <h4>";
            // line 94
            yield ($context["text_shipping_method"] ?? null);
            yield "</h4>
                                </div>
                                <div class=\"method-content\">
              ";
            // line 97
            yield ($context["shipping_method"] ?? null);
            yield "
                                </div>
            </div>
          </div>
        ";
        }
        // line 102
        yield "                    <div class=\"col-lg-6\">
                        <div class=\"method-card\">
                            <div class=\"method-header\">
                                <i class=\"icon icon-credit-card\"></i>
                                <h4>";
        // line 106
        yield ($context["text_payment_method"] ?? null);
        yield "</h4>
                            </div>
                            <div class=\"method-content\">
            ";
        // line 109
        yield ($context["payment_method"] ?? null);
        yield "
          </div>
        </div>
      </div>
                </div>
            </div>
            <!-- Order Products -->
            <div class=\"products-section mb-4\">
                <div class=\"section-header\">
                    <h3>Order Items</h3>
                </div>
                <div class=\"products-list\">
            ";
        // line 121
        $context["product_row"] = 0;
        // line 122
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 123
            yield "                        <div class=\"product-item\" id=\"product-row-";
            yield ($context["product_row"] ?? null);
            yield "\">
                            <div class=\"product-info\">
                                <div class=\"product-details\">
                                    <img src=\"";
            // line 126
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 126);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 126);
            yield "\" class=\"product-image\">
                                    <h5 class=\"product-name\">

                                        <a href=\"";
            // line 129
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "view", [], "any", false, false, false, 129);
            yield "\" class=\"link\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
            yield "</a>
                                    </h5>
                  <div id=\"error-";
            // line 131
            yield ($context["product_row"] ?? null);
            yield "-product\" class=\"invalid-feedback mt-0\"></div>
                                    <div class=\"product-meta\">
                                        <span class=\"meta-item\">
                                            <strong>";
            // line 134
            yield ($context["text_model"] ?? null);
            yield ":</strong> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 134);
            yield "
                                        </span>
                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 136));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 137
                yield "                                            <span class=\"meta-item\">
                                                <strong>";
                // line 138
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 138);
                yield ":</strong> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 138);
                yield "
                                            </span>
                        <div id=\"error-";
                // line 140
                yield ($context["product_row"] ?? null);
                yield "-option-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 140);
                yield "\" class=\"invalid-feedback mt-0\"></div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 142)) {
                // line 143
                yield "                                            <span class=\"meta-item\">
                                                <strong>";
                // line 144
                yield ($context["text_subscription"] ?? null);
                yield ":</strong> 
                                                ";
                // line 145
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 145)) {
                    // line 146
                    yield "                                                    <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 146);
                    yield "\" target=\"_blank\" class=\"link\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription_plan", [], "any", false, false, false, 146);
                    yield "</a>
                                                ";
                } else {
                    // line 148
                    yield "                                                    ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription_plan", [], "any", false, false, false, 148);
                    yield "
                                                ";
                }
                // line 150
                yield "                                            </span>
                        <div id=\"error-";
                // line 151
                yield ($context["product_row"] ?? null);
                yield "-subscription\" class=\"invalid-feedback mt-0\"></div>
                    ";
            }
            // line 153
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 153)) {
                // line 154
                yield "                                            <span class=\"meta-item\">
                                                <strong>";
                // line 155
                yield ($context["text_points"] ?? null);
                yield ":</strong> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 155);
                yield "
                                            </span>
                    ";
            }
            // line 158
            yield "                                    </div>
                                    <form id=\"form-product-";
            // line 159
            yield ($context["product_row"] ?? null);
            yield "\" class=\"d-none\">
                                        <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 160
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 160);
            yield "\"/>
                                        <input type=\"hidden\" name=\"quantity\" value=\"";
            // line 161
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 161);
            yield "\"/>
                    ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 162));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 163
                yield "                      ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 163) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 163) == "radio"))) {
                    // line 164
                    yield "                        <input type=\"hidden\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 164);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 164);
                    yield "\"/>
                      ";
                }
                // line 166
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 166) == "checkbox")) {
                    // line 167
                    yield "                        <input type=\"hidden\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 167);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 167);
                    yield "\"/>
                      ";
                }
                // line 169
                yield "                      ";
                if (((((((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "text") || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "textarea")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "file")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "date")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "datetime")) || (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 169) == "time"))) {
                    // line 170
                    yield "                        <input type=\"hidden\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 170);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 170);
                    yield "\"/>
                      ";
                }
                // line 172
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "                    <input type=\"hidden\" name=\"subscription_plan_id\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "subscription_plan_id", [], "any", false, false, false, 173);
            yield "\"/>
                  </form>
                                </div>
                                <div class=\"product-pricing\">
                                    <div class=\"quantity-info\">
                                        <span class=\"quantity-label\">Qty:</span>
                                        <span class=\"quantity-value\">";
            // line 179
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 179);
            yield "</span>
                                    </div>
                                    <div class=\"price-info\">
                                        <div class=\"unit-price\">";
            // line 182
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 182);
            yield " each</div>
                                        <div class=\"total-price\">";
            // line 183
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 183);
            yield "</div>
                                    </div>
                                </div>
                                <div class=\"product-actions\">
                                    <button type=\"submit\" form=\"form-product-";
            // line 187
            yield ($context["product_row"] ?? null);
            yield "\" class=\"tf-btn btn-outline animate-btn\">
                                        <i class=\"icon icon-refresh\"></i>
                                        ";
            // line 189
            yield ($context["button_reorder"] ?? null);
            yield "
                                    </button>
                                    <a href=\"";
            // line 191
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 191);
            yield "\" class=\"tf-btn btn-outline animate-btn\">
                                        <i class=\"icon icon-return\"></i>
                                        ";
            // line 193
            yield ($context["button_return"] ?? null);
            yield "
                                    </a>
                                </div>
                            </div>
                  </div>
              ";
            // line 198
            $context["product_row"] = (($context["product_row"] ?? null) + 1);
            // line 199
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        yield "                </div>
                
                <!-- Order Totals -->
                <div class=\"order-totals\">
            ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 205
            yield "                        <div class=\"total-row ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 205) == "Total")) {
                yield "total-final";
            }
            yield "\">
                            <span class=\"total-label\">";
            // line 206
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 206);
            yield "</span>
                            <span class=\"total-value\">";
            // line 207
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 207);
            yield "</span>
                        </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "                </div>
      </div>
            <!-- Order Comment -->
      ";
        // line 213
        if (($context["comment"] ?? null)) {
            // line 214
            yield "                <div class=\"comment-section mb-4\">
                    <div class=\"comment-card\">
                        <div class=\"comment-header\">
                            <i class=\"icon icon-message\"></i>
                            <h4>";
            // line 218
            yield ($context["text_comment"] ?? null);
            yield "</h4>
                        </div>
                        <div class=\"comment-content\">
          ";
            // line 221
            yield ($context["comment"] ?? null);
            yield "
                        </div>
                    </div>
        </div>
      ";
        }
        // line 226
        yield "            
            <!-- Order History -->
            <div class=\"history-section mb-4\">
                <div class=\"section-header\">
                    <h3>";
        // line 230
        yield ($context["text_history"] ?? null);
        yield "</h3>
                </div>
                <div class=\"history-content\">
      <div id=\"history\">";
        // line 233
        yield ($context["history"] ?? null);
        yield "</div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class=\"order-actions text-center\">
                <a href=\"";
        // line 239
        yield ($context["continue"] ?? null);
        yield "\" class=\"tf-btn btn-fill animate-btn\">
                    <i class=\"icon icon-arrow-left\"></i>
                    ";
        // line 241
        yield ($context["button_continue"] ?? null);
        yield "
                </a>
            </div>
            
      ";
        // line 245
        yield ($context["content_bottom"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Order Details -->
<script type=\"text/javascript\"><!--
var product_row = 0;

\$('form').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language=";
        // line 265
        yield ($context["language"] ?? null);
        yield "',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('form').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
        // line 283
        yield ($context["error_reorder"] ?? null);
        yield " <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                product_row = \$(element).attr('id').substr(13);

                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    delete json['error']['warning'];
                }

                for (key in json['error']) {
                    \$('#error-' + product_row + '-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 301
        yield ($context["language"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>

<style>
/* Order Info Page Styling */
.order-header {
    margin-bottom: 30px;
}

.info-card, .address-card, .method-card, .comment-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    height: 100%;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.info-card:hover, .address-card:hover, .method-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.12);
}

.info-header, .address-header, .method-header, .comment-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #f1f1f1;
}

.info-header i, .address-header i, .method-header i, .comment-header i {
    font-size: 20px;
    color: #666;
}

.info-header h4, .address-header h4, .method-header h4, .comment-header h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.info-value {
    font-size: 24px;
    font-weight: 700;
    color: #000;
}

.address-content, .method-content, .comment-content {
    color: #666;
    line-height: 1.6;
}

/* Products Section */
.products-section {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.section-header {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f1f1f1;
}

.section-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.product-item {
    border: 1px solid #f1f1f1;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 15px;
    background: #fafafa;
    transition: background-color 0.2s ease;
}

.product-item:hover {
    background: #f5f5f5;
}

.product-info {
    display: grid;
    grid-template-columns: 1fr auto auto;
    gap: 20px;
    align-items: center;
}

.product-name {
    margin: 0 0 10px 0;
    font-size: 18px;
    font-weight: 600;
}

.product-name .link {
    color: #000;
    text-decoration: none;
}

.product-name .link:hover {
    color: #666;
}

.product-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.meta-item {
    font-size: 14px;
    color: #666;
}

.product-pricing {
    text-align: center;
    min-width: 120px;
}

.quantity-info {
    margin-bottom: 8px;
}

.quantity-label {
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
}

.quantity-value {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-left: 5px;
}

.unit-price {
    font-size: 12px;
    color: #666;
    margin-bottom: 4px;
}

.total-price {
    font-size: 18px;
    font-weight: 700;
    color: #000;
}

.product-actions {
    display: flex;
    flex-direction: column;
    gap: 8px;
    min-width: 120px;
}

.product-actions .tf-btn {
    padding: 8px 16px;
    font-size: 12px;
    text-align: center;
}

/* Order Totals */
.order-totals {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    margin-top: 20px;
}

.total-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid #e9ecef;
}

.total-row:last-child {
    border-bottom: none;
}

.total-final {
    background: #241B68;
    color: #fff;
    margin: 10px -20px -20px -20px;
    padding: 15px 20px;
    border-radius: 0 0 8px 8px;
    font-weight: 700;
    font-size: 18px;
}

.total-label {
    font-weight: 500;
}

.total-value {
    font-weight: 600;
}

/* History Section */
.history-section {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.history-content {
    max-height: 300px;
    overflow-y: auto;
}

/* Order Actions */
.order-actions {
    margin: 30px 0;
}

.order-actions .tf-btn {
    padding: 12px 30px;
    font-size: 16px;
    min-width: 200px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .product-info {
        grid-template-columns: 1fr;
        gap: 15px;
        text-align: center;
    }
    
    .product-actions {
        flex-direction: row;
        justify-content: center;
    }
    
    .product-meta {
        justify-content: center;
    }
    
    .info-value {
        font-size: 20px;
    }
}

@media (max-width: 576px) {
    .info-card, .address-card, .method-card {
        margin-bottom: 15px;
    }
    
    .products-section, .history-section {
        padding: 15px;
    }
    
    .product-item {
        padding: 15px;
    }
}
</style>

";
        // line 583
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
        return "catalog/view/template/account/order_info.twig";
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
        return array (  912 => 583,  627 => 301,  606 => 283,  585 => 265,  562 => 245,  555 => 241,  550 => 239,  541 => 233,  535 => 230,  529 => 226,  521 => 221,  515 => 218,  509 => 214,  507 => 213,  502 => 210,  493 => 207,  489 => 206,  482 => 205,  478 => 204,  472 => 200,  466 => 199,  464 => 198,  456 => 193,  451 => 191,  446 => 189,  441 => 187,  434 => 183,  430 => 182,  424 => 179,  414 => 173,  408 => 172,  400 => 170,  397 => 169,  389 => 167,  386 => 166,  378 => 164,  375 => 163,  371 => 162,  367 => 161,  363 => 160,  359 => 159,  356 => 158,  348 => 155,  345 => 154,  342 => 153,  337 => 151,  334 => 150,  328 => 148,  320 => 146,  318 => 145,  314 => 144,  311 => 143,  308 => 142,  298 => 140,  291 => 138,  288 => 137,  284 => 136,  277 => 134,  271 => 131,  264 => 129,  256 => 126,  249 => 123,  244 => 122,  242 => 121,  227 => 109,  221 => 106,  215 => 102,  207 => 97,  201 => 94,  195 => 90,  193 => 89,  188 => 86,  183 => 83,  175 => 78,  169 => 75,  163 => 71,  160 => 70,  152 => 65,  146 => 62,  140 => 58,  138 => 57,  134 => 55,  132 => 54,  122 => 47,  116 => 44,  107 => 37,  101 => 36,  95 => 33,  83 => 24,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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
            <h1 class=\"title-page\">Order Details</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Order Details -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div id=\"account-order\">
      {{ content_top }}
            
            <!-- Order Header Info -->
            <div class=\"order-header mb-4\">
                <div class=\"row g-3\">
                    <div class=\"col-md-6\">
                        <div class=\"info-card\">
                            <div class=\"info-header\">
                                <i class=\"icon icon-receipt\"></i>
                                <h4>{{ text_invoice_no }}</h4>
                            </div>
                            <div class=\"info-value\">
            {% if invoice_no %}{{ invoice_no }}{% else %}{{ text_tbc }}{% endif %}
          </div>
        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"info-card\">
                            <div class=\"info-header\">
                                <i class=\"icon icon-package\"></i>
                                <h4>{{ text_order_id }}</h4>
                            </div>
                            <div class=\"info-value\">
                                #{{ order_id }}
                            </div>
                        </div>
          </div>
        </div>
      </div>
            <!-- Address Information -->
      {% if payment_address or shipping_address %}
                <div class=\"address-section mb-4\">
                    <div class=\"row g-3\">
          {% if payment_address %}
                            <div class=\"col-lg-6\">
                                <div class=\"address-card\">
                                    <div class=\"address-header\">
                                        <i class=\"icon icon-credit-card\"></i>
                                        <h4>{{ text_payment_address }}</h4>
                                    </div>
                                    <div class=\"address-content\">
                {{ payment_address }}
                                    </div>
              </div>
            </div>
          {% endif %}
          {% if shipping_address %}
                            <div class=\"col-lg-6\">
                                <div class=\"address-card\">
                                    <div class=\"address-header\">
                                        <i class=\"icon icon-truck\"></i>
                                        <h4>{{ text_shipping_address }}</h4>
                                    </div>
                                    <div class=\"address-content\">
                {{ shipping_address }}
                                    </div>
              </div>
            </div>
          {% endif %}
                    </div>
        </div>
      {% endif %}
            <!-- Shipping & Payment Methods -->
            <div class=\"methods-section mb-4\">
                <div class=\"row g-3\">
        {% if shipping_method %}
                        <div class=\"col-lg-6\">
                            <div class=\"method-card\">
                                <div class=\"method-header\">
                                    <i class=\"icon icon-truck\"></i>
                                    <h4>{{ text_shipping_method }}</h4>
                                </div>
                                <div class=\"method-content\">
              {{ shipping_method }}
                                </div>
            </div>
          </div>
        {% endif %}
                    <div class=\"col-lg-6\">
                        <div class=\"method-card\">
                            <div class=\"method-header\">
                                <i class=\"icon icon-credit-card\"></i>
                                <h4>{{ text_payment_method }}</h4>
                            </div>
                            <div class=\"method-content\">
            {{ payment_method }}
          </div>
        </div>
      </div>
                </div>
            </div>
            <!-- Order Products -->
            <div class=\"products-section mb-4\">
                <div class=\"section-header\">
                    <h3>Order Items</h3>
                </div>
                <div class=\"products-list\">
            {% set product_row = 0 %}
            {% for product in products %}
                        <div class=\"product-item\" id=\"product-row-{{ product_row }}\">
                            <div class=\"product-info\">
                                <div class=\"product-details\">
                                    <img src=\"{{ product.image }}\" alt=\"{{ product.name }}\" class=\"product-image\">
                                    <h5 class=\"product-name\">

                                        <a href=\"{{ product.view }}\" class=\"link\">{{ product.name }}</a>
                                    </h5>
                  <div id=\"error-{{ product_row }}-product\" class=\"invalid-feedback mt-0\"></div>
                                    <div class=\"product-meta\">
                                        <span class=\"meta-item\">
                                            <strong>{{ text_model }}:</strong> {{ product.model }}
                                        </span>
                    {% for option in product.option %}
                                            <span class=\"meta-item\">
                                                <strong>{{ option.name }}:</strong> {{ option.value }}
                                            </span>
                        <div id=\"error-{{ product_row }}-option-{{ option.product_option_id }}\" class=\"invalid-feedback mt-0\"></div>
                    {% endfor %}
                    {% if product.subscription %}
                                            <span class=\"meta-item\">
                                                <strong>{{ text_subscription }}:</strong> 
                                                {% if product.subscription %}
                                                    <a href=\"{{ product.subscription }}\" target=\"_blank\" class=\"link\">{{ product.subscription_plan }}</a>
                                                {% else %}
                                                    {{ product.subscription_plan }}
                                                {% endif %}
                                            </span>
                        <div id=\"error-{{ product_row }}-subscription\" class=\"invalid-feedback mt-0\"></div>
                    {% endif %}
                    {% if product.reward %}
                                            <span class=\"meta-item\">
                                                <strong>{{ text_points }}:</strong> {{ product.reward }}
                                            </span>
                    {% endif %}
                                    </div>
                                    <form id=\"form-product-{{ product_row }}\" class=\"d-none\">
                                        <input type=\"hidden\" name=\"product_id\" value=\"{{ product.product_id }}\"/>
                                        <input type=\"hidden\" name=\"quantity\" value=\"{{ product.quantity }}\"/>
                    {% for option in product.option %}
                      {% if option.type == 'select' or option.type == 'radio' %}
                        <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.product_option_value_id }}\"/>
                      {% endif %}
                      {% if option.type == 'checkbox' %}
                        <input type=\"hidden\" name=\"option[{{ option.product_option_id }}][]\" value=\"{{ option.product_option_value_id }}\"/>
                      {% endif %}
                      {% if option.type == 'text' or option.type == 'textarea' or option.type == 'file' or option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}
                        <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\"/>
                      {% endif %}
                    {% endfor %}
                    <input type=\"hidden\" name=\"subscription_plan_id\" value=\"{{ product.subscription_plan_id }}\"/>
                  </form>
                                </div>
                                <div class=\"product-pricing\">
                                    <div class=\"quantity-info\">
                                        <span class=\"quantity-label\">Qty:</span>
                                        <span class=\"quantity-value\">{{ product.quantity }}</span>
                                    </div>
                                    <div class=\"price-info\">
                                        <div class=\"unit-price\">{{ product.price }} each</div>
                                        <div class=\"total-price\">{{ product.total }}</div>
                                    </div>
                                </div>
                                <div class=\"product-actions\">
                                    <button type=\"submit\" form=\"form-product-{{ product_row }}\" class=\"tf-btn btn-outline animate-btn\">
                                        <i class=\"icon icon-refresh\"></i>
                                        {{ button_reorder }}
                                    </button>
                                    <a href=\"{{ product.return }}\" class=\"tf-btn btn-outline animate-btn\">
                                        <i class=\"icon icon-return\"></i>
                                        {{ button_return }}
                                    </a>
                                </div>
                            </div>
                  </div>
              {% set product_row = product_row + 1 %}
            {% endfor %}
                </div>
                
                <!-- Order Totals -->
                <div class=\"order-totals\">
            {% for total in totals %}
                        <div class=\"total-row {% if total.title == 'Total' %}total-final{% endif %}\">
                            <span class=\"total-label\">{{ total.title }}</span>
                            <span class=\"total-value\">{{ total.text }}</span>
                        </div>
            {% endfor %}
                </div>
      </div>
            <!-- Order Comment -->
      {% if comment %}
                <div class=\"comment-section mb-4\">
                    <div class=\"comment-card\">
                        <div class=\"comment-header\">
                            <i class=\"icon icon-message\"></i>
                            <h4>{{ text_comment }}</h4>
                        </div>
                        <div class=\"comment-content\">
          {{ comment }}
                        </div>
                    </div>
        </div>
      {% endif %}
            
            <!-- Order History -->
            <div class=\"history-section mb-4\">
                <div class=\"section-header\">
                    <h3>{{ text_history }}</h3>
                </div>
                <div class=\"history-content\">
      <div id=\"history\">{{ history }}</div>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class=\"order-actions text-center\">
                <a href=\"{{ continue }}\" class=\"tf-btn btn-fill animate-btn\">
                    <i class=\"icon icon-arrow-left\"></i>
                    {{ button_continue }}
                </a>
            </div>
            
      {{ content_bottom }}
        </div>
    </div>
</section>
<!-- /Order Details -->
<script type=\"text/javascript\"><!--
var product_row = 0;

\$('form').on('submit', function(e) {
    e.preventDefault();

    var element = this;

    if (e.originalEvent !== undefined && e.originalEvent.submitter !== undefined) {
        var button = e.originalEvent.submitter;
    } else {
        var button = '';
    }

    \$.ajax({
        url: 'index.php?route=checkout/cart.add&language={{ language }}',
        type: 'post',
        data: \$(element).serialize(),
        dataType: 'json',
        cache: false,
        processData: false,
        beforeSend: function() {
            \$(button).button('loading');
        },
        complete: function() {
            \$(button).button('reset');
        },
        success: function(json) {
            console.log(json);

            \$('form').find('.invalid-feedback').removeClass('d-block');

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_reorder }} <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                product_row = \$(element).attr('id').substr(13);

                if (json['error']['warning']) {
                    \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    delete json['error']['warning'];
                }

                for (key in json['error']) {
                    \$('#error-' + product_row + '-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                }
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#history').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#history').load(this.href);
});
//--></script>

<style>
/* Order Info Page Styling */
.order-header {
    margin-bottom: 30px;
}

.info-card, .address-card, .method-card, .comment-card {
    background: #fff;
    border: 1px solid #e9ecef;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    height: 100%;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.info-card:hover, .address-card:hover, .method-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.12);
}

.info-header, .address-header, .method-header, .comment-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid #f1f1f1;
}

.info-header i, .address-header i, .method-header i, .comment-header i {
    font-size: 20px;
    color: #666;
}

.info-header h4, .address-header h4, .method-header h4, .comment-header h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.info-value {
    font-size: 24px;
    font-weight: 700;
    color: #000;
}

.address-content, .method-content, .comment-content {
    color: #666;
    line-height: 1.6;
}

/* Products Section */
.products-section {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.section-header {
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 2px solid #f1f1f1;
}

.section-header h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}

.product-item {
    border: 1px solid #f1f1f1;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 15px;
    background: #fafafa;
    transition: background-color 0.2s ease;
}

.product-item:hover {
    background: #f5f5f5;
}

.product-info {
    display: grid;
    grid-template-columns: 1fr auto auto;
    gap: 20px;
    align-items: center;
}

.product-name {
    margin: 0 0 10px 0;
    font-size: 18px;
    font-weight: 600;
}

.product-name .link {
    color: #000;
    text-decoration: none;
}

.product-name .link:hover {
    color: #666;
}

.product-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.meta-item {
    font-size: 14px;
    color: #666;
}

.product-pricing {
    text-align: center;
    min-width: 120px;
}

.quantity-info {
    margin-bottom: 8px;
}

.quantity-label {
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
}

.quantity-value {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-left: 5px;
}

.unit-price {
    font-size: 12px;
    color: #666;
    margin-bottom: 4px;
}

.total-price {
    font-size: 18px;
    font-weight: 700;
    color: #000;
}

.product-actions {
    display: flex;
    flex-direction: column;
    gap: 8px;
    min-width: 120px;
}

.product-actions .tf-btn {
    padding: 8px 16px;
    font-size: 12px;
    text-align: center;
}

/* Order Totals */
.order-totals {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 20px;
    margin-top: 20px;
}

.total-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid #e9ecef;
}

.total-row:last-child {
    border-bottom: none;
}

.total-final {
    background: #241B68;
    color: #fff;
    margin: 10px -20px -20px -20px;
    padding: 15px 20px;
    border-radius: 0 0 8px 8px;
    font-weight: 700;
    font-size: 18px;
}

.total-label {
    font-weight: 500;
}

.total-value {
    font-weight: 600;
}

/* History Section */
.history-section {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.history-content {
    max-height: 300px;
    overflow-y: auto;
}

/* Order Actions */
.order-actions {
    margin: 30px 0;
}

.order-actions .tf-btn {
    padding: 12px 30px;
    font-size: 16px;
    min-width: 200px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .product-info {
        grid-template-columns: 1fr;
        gap: 15px;
        text-align: center;
    }
    
    .product-actions {
        flex-direction: row;
        justify-content: center;
    }
    
    .product-meta {
        justify-content: center;
    }
    
    .info-value {
        font-size: 20px;
    }
}

@media (max-width: 576px) {
    .info-card, .address-card, .method-card {
        margin-bottom: 15px;
    }
    
    .products-section, .history-section {
        padding: 15px;
    }
    
    .product-item {
        padding: 15px;
    }
}
</style>

{{ footer }}
", "catalog/view/template/account/order_info.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\order_info.twig");
    }
}
