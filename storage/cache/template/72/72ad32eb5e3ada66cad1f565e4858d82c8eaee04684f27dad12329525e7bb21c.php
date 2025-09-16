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

/* catalog/view/template/account/address_form.twig */
class __TwigTemplate_53772e717b29f3a0c8828ad63f17fa8b50985eb98acb7e8c523e8c491a2f426b extends Template
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
        yield ($context["text_address"] ?? null);
        yield "</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Address Form -->
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
                <div class=\"address-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-header\">
                            <i class=\"icon icon-map-pin\"></i>
                            <h3>Address Information</h3>
                        </div>
                        <p class=\"intro-text\">Please provide your complete address information for shipping and billing purposes.</p>
                    </div>
                </div>
                
                <!-- Address Form -->
                <div class=\"address-form-container\">
                    <form id=\"form-address\" action=\"";
        // line 41
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
                        <!-- Personal Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-user\"></i>
                                <h4>Personal Information</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-firstname\" class=\"form-label required\">";
        // line 51
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-user\"></i>
                                            </span>
                                            <input type=\"text\" name=\"firstname\" value=\"";
        // line 56
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-lastname\" class=\"form-label required\">";
        // line 61
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-user\"></i>
                                            </span>
                                            <input type=\"text\" name=\"lastname\" value=\"";
        // line 66
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12 mb-3\">
                                        <label for=\"input-company\" class=\"form-label\">";
        // line 73
        yield ($context["entry_company"] ?? null);
        yield "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-briefcase\"></i>
                                            </span>
                                            <input type=\"text\" name=\"company\" value=\"";
        // line 78
        yield ($context["company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-company\" class=\"form-control\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Address Details -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-home\"></i>
                                <h4>Address Details</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12 mb-3\">
                                        <label for=\"input-address-1\" class=\"form-label required\">";
        // line 94
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-map-pin\"></i>
                                            </span>
                                            <input type=\"text\" name=\"address_1\" value=\"";
        // line 99
        yield ($context["address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-address-1\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-address-1\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12 mb-3\">
                                        <label for=\"input-address-2\" class=\"form-label\">";
        // line 106
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-map-pin\"></i>
                                            </span>
                                            <input type=\"text\" name=\"address_2\" value=\"";
        // line 111
        yield ($context["address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-address-2\" class=\"form-control\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-city\" class=\"form-label required\">";
        // line 117
        yield ($context["entry_city"] ?? null);
        yield "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-building\"></i>
                                            </span>
                                            <input type=\"text\" name=\"city\" value=\"";
        // line 122
        yield ($context["city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-city\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-city\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-postcode\" class=\"form-label required\">";
        // line 127
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-hash\"></i>
                                            </span>
                                            <input type=\"text\" name=\"postcode\" value=\"";
        // line 132
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-postcode\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Location Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-globe\"></i>
                                <h4>Location Information</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-country\" class=\"form-label required\">";
        // line 149
        yield ($context["entry_country"] ?? null);
        yield "</label>
                                        <div class=\"select-wrapper\">
                                            <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
                                                <option value=\"0\">";
        // line 152
        yield ($context["text_select"] ?? null);
        yield "</option>
                                                ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 154
            yield "                                                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 154);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 154) == ($context["country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 154);
            yield "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "                                            </select>
                                            <i class=\"select-arrow icon icon-chevron-down\"></i>
                                        </div>
                                        <div id=\"error-country\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-zone\" class=\"form-label required\">";
        // line 162
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                                        <div class=\"select-wrapper\">
                                            <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
                                                <option value=\"\">";
        // line 165
        yield ($context["text_select"] ?? null);
        yield "</option>
                                                ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 167
            yield "                                                    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 167);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 167) == ($context["zone_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 167);
            yield "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "                                            </select>
                                            <i class=\"select-arrow icon icon-chevron-down\"></i>
                                        </div>
                                        <div id=\"error-zone\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Custom Fields -->
                        ";
        // line 179
        if (($context["custom_fields"] ?? null)) {
            // line 180
            yield "                            <div class=\"form-section\">
                                <div class=\"section-header\">
                                    <i class=\"icon icon-settings\"></i>
                                    <h4>Additional Information</h4>
                                </div>
                                <div class=\"section-content\">
                                    ";
            // line 186
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 187
                yield "                                        <div class=\"custom-field-wrapper mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 187)) {
                    yield " required";
                }
                yield "\">
                                            ";
                // line 188
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 188) == "select")) {
                    // line 189
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 189)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 189);
                    yield "</label>
                                                <div class=\"select-wrapper\">
                                                    <select name=\"custom_field[";
                    // line 191
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                    yield "\" class=\"form-control\">
                                                        <option value=\"\">";
                    // line 192
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                                                        ";
                    // line 193
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 193));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 194
                        yield "                                                            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 194);
                        yield "\"";
                        if (((($_v0 = ($context["address_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 194) == (($_v1 = ($context["address_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 194);
                        yield "</option>
                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 196
                    yield "                                                    </select>
                                                    <i class=\"select-arrow icon icon-chevron-down\"></i>
                                                </div>
                                                <div id=\"error-custom-field-";
                    // line 199
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 201
                yield "
                                            ";
                // line 202
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 202) == "radio")) {
                    // line 203
                    yield "                                                <label class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 203)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 203);
                    yield "</label>
                                                <div class=\"custom-options\">
                                                    ";
                    // line 205
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 205));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 206
                        yield "                                                        <div class=\"option-card\">
                                                            <input type=\"radio\" name=\"custom_field[";
                        // line 207
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 207);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 207);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["address_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 207) == (($_v3 = ($context["address_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                                                            <label for=\"input-custom-value-";
                        // line 208
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 208);
                        yield "\" class=\"option-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 208);
                        yield "</label>
                                                        </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 211
                    yield "                                                </div>
                                                <div id=\"error-custom-field-";
                    // line 212
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 214
                yield "
                                            ";
                // line 215
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 215) == "checkbox")) {
                    // line 216
                    yield "                                                <label class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 216)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 216);
                    yield "</label>
                                                <div class=\"custom-options\">
                                                    ";
                    // line 218
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 218));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 219
                        yield "                                                        <div class=\"option-card\">
                                                            <input type=\"checkbox\" name=\"custom_field[";
                        // line 220
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 220);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 220);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["address_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 220), (($_v5 = ($context["address_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                                                            <label for=\"input-custom-value-";
                        // line 221
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 221);
                        yield "\" class=\"option-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 221);
                        yield "</label>
                                                        </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    yield "                                                </div>
                                                <div id=\"error-custom-field-";
                    // line 225
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 225);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 227
                yield "
                                            ";
                // line 228
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 228) == "text")) {
                    // line 229
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 229)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 229);
                    yield "</label>
                                                <input type=\"text\" name=\"custom_field[";
                    // line 230
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                    yield "]\" value=\"";
                    if ((($_v6 = ($context["address_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230)] ?? null) : null)) {
                        yield (($_v7 = ($context["address_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 230);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 230);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                    yield "\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-";
                    // line 231
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 231);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 233
                yield "
                                            ";
                // line 234
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 234) == "textarea")) {
                    // line 235
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 235)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 235);
                    yield "</label>
                                                <textarea name=\"custom_field[";
                    // line 236
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236);
                    yield "]\" rows=\"4\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 236);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236);
                    yield "\" class=\"form-control\">";
                    if ((($_v8 = ($context["address_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236)] ?? null) : null)) {
                        yield (($_v9 = ($context["address_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 236);
                    }
                    yield "</textarea>
                                                <div id=\"error-custom-field-";
                    // line 237
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 239
                yield "
                                            ";
                // line 240
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 240) == "file")) {
                    // line 241
                    yield "                                                <label class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 241)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 241);
                    yield "</label>
                                                <div class=\"file-upload-wrapper\">
                                                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 243
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                    yield "\" class=\"tf-btn btn-outline animate-btn\">
                                                        <i class=\"icon icon-upload\"></i> ";
                    // line 244
                    yield ($context["button_upload"] ?? null);
                    yield "
                                                    </button>
                                                    <input type=\"hidden\" name=\"custom_field[";
                    // line 246
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246);
                    yield "]\" value=\"";
                    if ((($_v10 = ($context["address_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246)] ?? null) : null)) {
                        yield (($_v11 = ($context["address_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246)] ?? null) : null);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246);
                    yield "\"/>
                                                </div>
                                                <div id=\"error-custom-field-";
                    // line 248
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 250
                yield "
                                            ";
                // line 251
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 251) == "date")) {
                    // line 252
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 252)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 252);
                    yield "</label>
                                                <input type=\"date\" name=\"custom_field[";
                    // line 253
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                    yield "]\" value=\"";
                    if ((($_v12 = ($context["address_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253)] ?? null) : null)) {
                        yield (($_v13 = ($context["address_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 253);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                    yield "\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-";
                    // line 254
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 256
                yield "
                                            ";
                // line 257
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 257) == "time")) {
                    // line 258
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 258);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 258)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 258);
                    yield "</label>
                                                <input type=\"time\" name=\"custom_field[";
                    // line 259
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                    yield "]\" value=\"";
                    if ((($_v14 = ($context["address_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259)] ?? null) : null)) {
                        yield (($_v15 = ($context["address_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 259);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                    yield "\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-";
                    // line 260
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 262
                yield "
                                            ";
                // line 263
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 263) == "datetime")) {
                    // line 264
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 264)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 264);
                    yield "</label>
                                                <input type=\"datetime-local\" name=\"custom_field[";
                    // line 265
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                    yield "]\" value=\"";
                    if ((($_v16 = ($context["address_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265)] ?? null) : null)) {
                        yield (($_v17 = ($context["address_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 265);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                    yield "\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-";
                    // line 266
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 268
                yield "                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            yield "                                </div>
                            </div>
                        ";
        }
        // line 273
        yield "
                        <!-- Address Settings -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-star\"></i>
                                <h4>Address Settings</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"default-address-setting\">
                                    <label class=\"form-label\">";
        // line 282
        yield ($context["entry_default"] ?? null);
        yield "</label>
                                    <div class=\"default-options\">
                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"radio\" name=\"default\" value=\"1\" id=\"input-default-yes\" class=\"form-check-input\"";
        // line 285
        if (($context["default"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                            <label for=\"input-default-yes\" class=\"form-check-label\">";
        // line 286
        yield ($context["text_yes"] ?? null);
        yield "</label>
                                        </div>
                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"radio\" name=\"default\" value=\"0\" id=\"input-default-no\" class=\"form-check-input\"";
        // line 289
        if ( !($context["default"] ?? null)) {
            yield " checked";
        }
        yield "/>
                                            <label for=\"input-default-no\" class=\"form-check-label\">";
        // line 290
        yield ($context["text_no"] ?? null);
        yield "</label>
                                        </div>
                                    </div>
                                    <small class=\"form-text text-muted\">Set this as your default address for faster checkout</small>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class=\"form-actions\">
                            <div class=\"action-buttons\">
                                <a href=\"";
        // line 301
        yield ($context["back"] ?? null);
        yield "\" class=\"tf-btn btn-outline animate-btn\">
                                    <i class=\"icon icon-arrow-left\"></i>
                                    ";
        // line 303
        yield ($context["button_back"] ?? null);
        yield "
                                </a>
                                <button type=\"submit\" class=\"tf-btn btn-fill animate-btn\">
                                    <i class=\"icon icon-save\"></i>
                                    ";
        // line 307
        yield ($context["button_continue"] ?? null);
        yield "
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                ";
        // line 314
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 316
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Address Form -->
<script type=\"text/javascript\"><!--
\$('#input-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country&country_id=' + this.value + '&language=";
        // line 326
        yield ($context["language"] ?? null);
        yield "',
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-postcode').parent().parent().addClass('required');
            } else {
                \$('#input-postcode').parent().parent().removeClass('required');
            }

            html = '<option value=\"\">";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
        // line 349
        yield ($context["zone_id"] ?? null);
        yield "') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>";
        // line 356
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
            }

            \$('#input-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>

<style>
/* Address Form Page Styling */
.address-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(23, 162, 184, 0.2);
    text-align: center;
}

.intro-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
}

.intro-header i {
    font-size: 48px;
    opacity: 0.9;
}

.intro-header h3 {
    margin: 0;
    font-size: 24px;
    font-weight: 600;
}

.intro-text {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.6;
}

.address-form-container {
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
    display: block;
}

.form-label.required::after {
    content: ' *';
    color: #dc3545;
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
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 12px 15px;
    font-size: 14px;
    transition: all 0.2s ease;
}

.form-control:focus {
    border-color: #17a2b8;
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.1);
}

/* Custom Select Styling */
.select-wrapper {
    position: relative;
}

.select-wrapper select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: transparent;
    padding-right: 40px;
}

.select-arrow {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
    pointer-events: none;
    font-size: 14px;
}

.select-wrapper:hover .select-arrow {
    color: #17a2b8;
}

/* Custom Fields */
.custom-field-wrapper {
    margin-bottom: 20px;
}

.custom-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 12px;
    margin-top: 10px;
}

.option-card {
    position: relative;
}

.option-card input {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.option-label {
    display: block;
    background: #f8f9fa;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    padding: 12px 15px;
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 14px;
    font-weight: 500;
}

.option-label:hover {
    background: #e9ecef;
    border-color: #17a2b8;
}

.option-card input:checked + .option-label {
    background: #17a2b8;
    color: #fff;
    border-color: #17a2b8;
}

/* File Upload */
.file-upload-wrapper {
    margin-top: 8px;
}

.file-upload-wrapper .tf-btn {
    padding: 10px 20px;
    font-size: 14px;
}

/* Default Address Setting */
.default-address-setting {
    background: #f8f9fa;
    border-radius: 6px;
    padding: 20px;
}

.default-options {
    display: flex;
    gap: 20px;
    margin: 10px 0;
}

.form-check-inline .form-check-input {
    margin-right: 8px;
}

.form-check-label {
    font-size: 14px;
    color: #666;
    cursor: pointer;
}

.form-text {
    font-size: 12px;
    color: #6c757d;
    margin-top: 5px;
}

/* Form Actions */
.form-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 25px;
    margin-top: 20px;
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
    min-width: 140px;
    justify-content: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .address-form-container {
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
    
    .custom-options {
        grid-template-columns: 1fr;
    }
    
    .action-buttons {
        flex-direction: column-reverse;
    }
    
    .action-buttons .tf-btn {
        width: 100%;
    }
    
    .default-options {
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .intro-header h3 {
        font-size: 20px;
    }
    
    .intro-header i {
        font-size: 40px;
    }
    
    .form-actions {
        padding: 20px;
    }
    
    .default-address-setting {
        padding: 15px;
    }
}
</style>

";
        // line 681
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
        return "catalog/view/template/account/address_form.twig";
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
        return array (  1217 => 681,  889 => 356,  879 => 349,  870 => 343,  850 => 326,  837 => 316,  832 => 314,  822 => 307,  815 => 303,  810 => 301,  796 => 290,  790 => 289,  784 => 286,  778 => 285,  772 => 282,  761 => 273,  756 => 270,  749 => 268,  744 => 266,  732 => 265,  721 => 264,  719 => 263,  716 => 262,  711 => 260,  699 => 259,  688 => 258,  686 => 257,  683 => 256,  678 => 254,  666 => 253,  655 => 252,  653 => 251,  650 => 250,  645 => 248,  634 => 246,  629 => 244,  619 => 243,  609 => 241,  607 => 240,  604 => 239,  599 => 237,  585 => 236,  574 => 235,  572 => 234,  569 => 233,  564 => 231,  550 => 230,  539 => 229,  537 => 228,  534 => 227,  529 => 225,  526 => 224,  515 => 221,  503 => 220,  500 => 219,  496 => 218,  486 => 216,  484 => 215,  481 => 214,  476 => 212,  473 => 211,  462 => 208,  450 => 207,  447 => 206,  443 => 205,  433 => 203,  431 => 202,  428 => 201,  423 => 199,  418 => 196,  403 => 194,  399 => 193,  395 => 192,  389 => 191,  377 => 189,  375 => 188,  368 => 187,  364 => 186,  356 => 180,  354 => 179,  342 => 169,  327 => 167,  323 => 166,  319 => 165,  313 => 162,  305 => 156,  290 => 154,  286 => 153,  282 => 152,  276 => 149,  254 => 132,  246 => 127,  236 => 122,  228 => 117,  217 => 111,  209 => 106,  197 => 99,  189 => 94,  168 => 78,  160 => 73,  148 => 66,  140 => 61,  130 => 56,  122 => 51,  109 => 41,  91 => 26,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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
            <h1 class=\"title-page\">{{ text_address }}</h1>
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Address Form -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                <!-- Form Introduction -->
                <div class=\"address-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-header\">
                            <i class=\"icon icon-map-pin\"></i>
                            <h3>Address Information</h3>
                        </div>
                        <p class=\"intro-text\">Please provide your complete address information for shipping and billing purposes.</p>
                    </div>
                </div>
                
                <!-- Address Form -->
                <div class=\"address-form-container\">
                    <form id=\"form-address\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
                        <!-- Personal Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-user\"></i>
                                <h4>Personal Information</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-firstname\" class=\"form-label required\">{{ entry_firstname }}</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-user\"></i>
                                            </span>
                                            <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-lastname\" class=\"form-label required\">{{ entry_lastname }}</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-user\"></i>
                                            </span>
                                            <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12 mb-3\">
                                        <label for=\"input-company\" class=\"form-label\">{{ entry_company }}</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-briefcase\"></i>
                                            </span>
                                            <input type=\"text\" name=\"company\" value=\"{{ company }}\" placeholder=\"{{ entry_company }}\" id=\"input-company\" class=\"form-control\"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Address Details -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-home\"></i>
                                <h4>Address Details</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-12 mb-3\">
                                        <label for=\"input-address-1\" class=\"form-label required\">{{ entry_address_1 }}</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-map-pin\"></i>
                                            </span>
                                            <input type=\"text\" name=\"address_1\" value=\"{{ address_1 }}\" placeholder=\"{{ entry_address_1 }}\" id=\"input-address-1\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-address-1\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-12 mb-3\">
                                        <label for=\"input-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-map-pin\"></i>
                                            </span>
                                            <input type=\"text\" name=\"address_2\" value=\"{{ address_2 }}\" placeholder=\"{{ entry_address_2 }}\" id=\"input-address-2\" class=\"form-control\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-city\" class=\"form-label required\">{{ entry_city }}</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-building\"></i>
                                            </span>
                                            <input type=\"text\" name=\"city\" value=\"{{ city }}\" placeholder=\"{{ entry_city }}\" id=\"input-city\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-city\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-postcode\" class=\"form-label required\">{{ entry_postcode }}</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-hash\"></i>
                                            </span>
                                            <input type=\"text\" name=\"postcode\" value=\"{{ postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-postcode\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-postcode\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Location Information -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-globe\"></i>
                                <h4>Location Information</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"row\">
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-country\" class=\"form-label required\">{{ entry_country }}</label>
                                        <div class=\"select-wrapper\">
                                            <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
                                                <option value=\"0\">{{ text_select }}</option>
                                                {% for country in countries %}
                                                    <option value=\"{{ country.country_id }}\"{% if country.country_id == country_id %} selected{% endif %}>{{ country.name }}</option>
                                                {% endfor %}
                                            </select>
                                            <i class=\"select-arrow icon icon-chevron-down\"></i>
                                        </div>
                                        <div id=\"error-country\" class=\"invalid-feedback\"></div>
                                    </div>
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-zone\" class=\"form-label required\">{{ entry_zone }}</label>
                                        <div class=\"select-wrapper\">
                                            <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
                                                <option value=\"\">{{ text_select }}</option>
                                                {% for zone in zones %}
                                                    <option value=\"{{ zone.zone_id }}\"{% if zone.zone_id == zone_id %} selected{% endif %}>{{ zone.name }}</option>
                                                {% endfor %}
                                            </select>
                                            <i class=\"select-arrow icon icon-chevron-down\"></i>
                                        </div>
                                        <div id=\"error-zone\" class=\"invalid-feedback\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Custom Fields -->
                        {% if custom_fields %}
                            <div class=\"form-section\">
                                <div class=\"section-header\">
                                    <i class=\"icon icon-settings\"></i>
                                    <h4>Additional Information</h4>
                                </div>
                                <div class=\"section-content\">
                                    {% for custom_field in custom_fields %}
                                        <div class=\"custom-field-wrapper mb-3{% if custom_field.required %} required{% endif %}\">
                                            {% if custom_field.type == 'select' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <div class=\"select-wrapper\">
                                                    <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">
                                                        <option value=\"\">{{ text_select }}</option>
                                                        {% for custom_field_value in custom_field.custom_field_value %}
                                                            <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                                                        {% endfor %}
                                                    </select>
                                                    <i class=\"select-arrow icon icon-chevron-down\"></i>
                                                </div>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'radio' %}
                                                <label class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <div class=\"custom-options\">
                                                    {% for custom_field_value in custom_field.custom_field_value %}
                                                        <div class=\"option-card\">
                                                            <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                                                            <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"option-label\">{{ custom_field_value.name }}</label>
                                                        </div>
                                                    {% endfor %}
                                                </div>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'checkbox' %}
                                                <label class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <div class=\"custom-options\">
                                                    {% for custom_field_value in custom_field.custom_field_value %}
                                                        <div class=\"option-card\">
                                                            <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                                                            <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"option-label\">{{ custom_field_value.name }}</label>
                                                        </div>
                                                    {% endfor %}
                                                </div>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'text' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'textarea' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"4\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'file' %}
                                                <label class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <div class=\"file-upload-wrapper\">
                                                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"tf-btn btn-outline animate-btn\">
                                                        <i class=\"icon icon-upload\"></i> {{ button_upload }}
                                                    </button>
                                                    <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
                                                </div>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'date' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'time' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'datetime' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        {% endif %}

                        <!-- Address Settings -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-star\"></i>
                                <h4>Address Settings</h4>
                            </div>
                            <div class=\"section-content\">
                                <div class=\"default-address-setting\">
                                    <label class=\"form-label\">{{ entry_default }}</label>
                                    <div class=\"default-options\">
                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"radio\" name=\"default\" value=\"1\" id=\"input-default-yes\" class=\"form-check-input\"{% if default %} checked{% endif %}/>
                                            <label for=\"input-default-yes\" class=\"form-check-label\">{{ text_yes }}</label>
                                        </div>
                                        <div class=\"form-check form-check-inline\">
                                            <input type=\"radio\" name=\"default\" value=\"0\" id=\"input-default-no\" class=\"form-check-input\"{% if not default %} checked{% endif %}/>
                                            <label for=\"input-default-no\" class=\"form-check-label\">{{ text_no }}</label>
                                        </div>
                                    </div>
                                    <small class=\"form-text text-muted\">Set this as your default address for faster checkout</small>
                                </div>
                            </div>
                        </div>

                        <!-- Form Actions -->
                        <div class=\"form-actions\">
                            <div class=\"action-buttons\">
                                <a href=\"{{ back }}\" class=\"tf-btn btn-outline animate-btn\">
                                    <i class=\"icon icon-arrow-left\"></i>
                                    {{ button_back }}
                                </a>
                                <button type=\"submit\" class=\"tf-btn btn-fill animate-btn\">
                                    <i class=\"icon icon-save\"></i>
                                    {{ button_continue }}
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
<!-- /Address Form -->
<script type=\"text/javascript\"><!--
\$('#input-country').on('change', function() {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country&country_id=' + this.value + '&language={{ language }}',
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
            \$('#input-zone').prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
            \$('#input-zone').prop('disabled', false);
        },
        success: function(json) {
            if (json['postcode_required'] == '1') {
                \$('#input-postcode').parent().parent().addClass('required');
            } else {
                \$('#input-postcode').parent().parent().removeClass('required');
            }

            html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
            }

            \$('#input-zone').html(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>

<style>
/* Address Form Page Styling */
.address-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: linear-gradient(135deg, #17a2b8 0%, #6f42c1 100%);
    color: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 20px rgba(23, 162, 184, 0.2);
    text-align: center;
}

.intro-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
}

.intro-header i {
    font-size: 48px;
    opacity: 0.9;
}

.intro-header h3 {
    margin: 0;
    font-size: 24px;
    font-weight: 600;
}

.intro-text {
    margin: 0;
    font-size: 16px;
    opacity: 0.9;
    line-height: 1.6;
}

.address-form-container {
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
    display: block;
}

.form-label.required::after {
    content: ' *';
    color: #dc3545;
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
}

.form-control {
    border: 1px solid #ddd;
    border-radius: 6px;
    padding: 12px 15px;
    font-size: 14px;
    transition: all 0.2s ease;
}

.form-control:focus {
    border-color: #17a2b8;
    box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.1);
}

/* Custom Select Styling */
.select-wrapper {
    position: relative;
}

.select-wrapper select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: transparent;
    padding-right: 40px;
}

.select-arrow {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #666;
    pointer-events: none;
    font-size: 14px;
}

.select-wrapper:hover .select-arrow {
    color: #17a2b8;
}

/* Custom Fields */
.custom-field-wrapper {
    margin-bottom: 20px;
}

.custom-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 12px;
    margin-top: 10px;
}

.option-card {
    position: relative;
}

.option-card input {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

.option-label {
    display: block;
    background: #f8f9fa;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    padding: 12px 15px;
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 14px;
    font-weight: 500;
}

.option-label:hover {
    background: #e9ecef;
    border-color: #17a2b8;
}

.option-card input:checked + .option-label {
    background: #17a2b8;
    color: #fff;
    border-color: #17a2b8;
}

/* File Upload */
.file-upload-wrapper {
    margin-top: 8px;
}

.file-upload-wrapper .tf-btn {
    padding: 10px 20px;
    font-size: 14px;
}

/* Default Address Setting */
.default-address-setting {
    background: #f8f9fa;
    border-radius: 6px;
    padding: 20px;
}

.default-options {
    display: flex;
    gap: 20px;
    margin: 10px 0;
}

.form-check-inline .form-check-input {
    margin-right: 8px;
}

.form-check-label {
    font-size: 14px;
    color: #666;
    cursor: pointer;
}

.form-text {
    font-size: 12px;
    color: #6c757d;
    margin-top: 5px;
}

/* Form Actions */
.form-actions {
    background: #f8f9fa;
    border-radius: 8px;
    padding: 25px;
    margin-top: 20px;
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
    min-width: 140px;
    justify-content: center;
}

/* Responsive Design */
@media (max-width: 768px) {
    .address-form-container {
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
    
    .custom-options {
        grid-template-columns: 1fr;
    }
    
    .action-buttons {
        flex-direction: column-reverse;
    }
    
    .action-buttons .tf-btn {
        width: 100%;
    }
    
    .default-options {
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .intro-header h3 {
        font-size: 20px;
    }
    
    .intro-header i {
        font-size: 40px;
    }
    
    .form-actions {
        padding: 20px;
    }
    
    .default-address-setting {
        padding: 15px;
    }
}
</style>

{{ footer }}
", "catalog/view/template/account/address_form.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\address_form.twig");
    }
}
