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

/* catalog/view/template/account/edit.twig */
class __TwigTemplate_acfe1077ac4523e37df40bb51716c6bdff6a203356accf1b276057b91058f035 extends Template
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

<!-- Edit Account -->
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
                <div class=\"edit-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-header\">
                            <i class=\"icon icon-user-edit\"></i>
                            <h3>Edit Account Information</h3>
                        </div>
                        <p class=\"intro-text\">Update your personal information and account preferences below.</p>
                    </div>
                </div>
                
                <!-- Edit Form -->
                <div class=\"edit-form-container\">
                    <form id=\"form-customer\" action=\"";
        // line 41
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
                        <!-- Personal Details -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-user\"></i>
                                <h4>";
        // line 46
        yield ($context["text_your_details"] ?? null);
        yield "</h4>
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
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-email\" class=\"form-label required\">";
        // line 74
        yield ($context["entry_email"] ?? null);
        yield "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-mail\"></i>
                                            </span>
                                            <input type=\"email\" name=\"email\" value=\"";
        // line 79
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-email\" class=\"invalid-feedback\"></div>
                                    </div>
                                    ";
        // line 83
        if (($context["config_telephone_display"] ?? null)) {
            // line 84
            yield "                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-telephone\" class=\"form-label";
            // line 85
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "\">";
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-phone\"></i>
                                            </span>
                                            <input type=\"tel\" name=\"telephone\" value=\"";
            // line 90
            yield ($context["telephone"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                                    </div>
                                    ";
        }
        // line 95
        yield "                                </div>
                            </div>
                        </div>

                        <!-- Custom Fields -->
                        ";
        // line 100
        if (($context["custom_fields"] ?? null)) {
            // line 101
            yield "                            <div class=\"form-section\">
                                <div class=\"section-header\">
                                    <i class=\"icon icon-settings\"></i>
                                    <h4>Additional Information</h4>
                                </div>
                                <div class=\"section-content\">
                                    ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 108
                yield "                                        <div class=\"custom-field-wrapper mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 108)) {
                    yield " required";
                }
                yield "\">
                                            ";
                // line 109
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "select")) {
                    // line 110
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 110)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 110);
                    yield "</label>
                                                <select name=\"custom_field[";
                    // line 111
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    yield "]\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    yield "\" class=\"form-control\">
                                                    <option value=\"\">";
                    // line 112
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                                                    ";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 113));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 114
                        yield "                                                        <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114);
                        yield "\"";
                        if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 114) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                        yield "</option>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    yield "                                                </select>
                                                <div id=\"error-custom-field-";
                    // line 117
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 119
                yield "
                                            ";
                // line 120
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 120) == "radio")) {
                    // line 121
                    yield "                                                <label class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 121)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                    yield "</label>
                                                <div class=\"custom-options\">
                                                    ";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 123));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 124
                        yield "                                                        <div class=\"option-card\">
                                                            <input type=\"radio\" name=\"custom_field[";
                        // line 125
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 125);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 125);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v2 = ($context["account_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 125) == (($_v3 = ($context["account_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                                                            <label for=\"input-custom-value-";
                        // line 126
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 126);
                        yield "\" class=\"option-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 126);
                        yield "</label>
                                                        </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    yield "                                                </div>
                                                <div id=\"error-custom-field-";
                    // line 130
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 132
                yield "
                                            ";
                // line 133
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "checkbox")) {
                    // line 134
                    yield "                                                <label class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 134)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                    yield "</label>
                                                <div class=\"custom-options\">
                                                    ";
                    // line 136
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 136));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 137
                        yield "                                                        <div class=\"option-card\">
                                                            <input type=\"checkbox\" name=\"custom_field[";
                        // line 138
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138);
                        yield "\" id=\"input-custom-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 138), (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/>
                                                            <label for=\"input-custom-value-";
                        // line 139
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 139);
                        yield "\" class=\"option-label\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 139);
                        yield "</label>
                                                        </div>
                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 142
                    yield "                                                </div>
                                                <div id=\"error-custom-field-";
                    // line 143
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 145
                yield "
                                            ";
                // line 146
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 146) == "text")) {
                    // line 147
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 147)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                    yield "</label>
                                                <input type=\"text\" name=\"custom_field[";
                    // line 148
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                    yield "]\" value=\"";
                    if ((($_v6 = ($context["account_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null)) {
                        yield (($_v7 = ($context["account_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 148);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 148);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                    yield "\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-";
                    // line 149
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 151
                yield "
                                            ";
                // line 152
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 152) == "textarea")) {
                    // line 153
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 153)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                    yield "</label>
                                                <textarea name=\"custom_field[";
                    // line 154
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    yield "]\" rows=\"4\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 154);
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    yield "\" class=\"form-control\">";
                    if ((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null)) {
                        yield (($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 154);
                    }
                    yield "</textarea>
                                                <div id=\"error-custom-field-";
                    // line 155
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 157
                yield "
                                            ";
                // line 158
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "file")) {
                    // line 159
                    yield "                                                <label class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 159)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 159);
                    yield "</label>
                                                <div class=\"file-upload-wrapper\">
                                                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 161
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" data-oc-target=\"#input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                    yield "\" class=\"tf-btn btn-outline animate-btn\">
                                                        <i class=\"icon icon-upload\"></i> ";
                    // line 162
                    yield ($context["button_upload"] ?? null);
                    yield "
                                                    </button>
                                                    <input type=\"hidden\" name=\"custom_field[";
                    // line 164
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                    yield "]\" value=\"";
                    if ((($_v10 = ($context["account_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null)) {
                        yield (($_v11 = ($context["account_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                    yield "\"/>
                                                </div>
                                                <div id=\"error-custom-field-";
                    // line 166
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 168
                yield "
                                            ";
                // line 169
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 169) == "date")) {
                    // line 170
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 170)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                    yield "</label>
                                                <input type=\"date\" name=\"custom_field[";
                    // line 171
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                    yield "]\" value=\"";
                    if ((($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171)] ?? null) : null)) {
                        yield (($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 171);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                    yield "\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-";
                    // line 172
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 174
                yield "
                                            ";
                // line 175
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 175) == "time")) {
                    // line 176
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 176)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                    yield "</label>
                                                <input type=\"time\" name=\"custom_field[";
                    // line 177
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    yield "]\" value=\"";
                    if ((($_v14 = ($context["account_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null)) {
                        yield (($_v15 = ($context["account_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 177);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                    yield "\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-";
                    // line 178
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 180
                yield "
                                            ";
                // line 181
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 181) == "datetime")) {
                    // line 182
                    yield "                                                <label for=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                    yield "\" class=\"form-label";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 182)) {
                        yield " required";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 182);
                    yield "</label>
                                                <input type=\"datetime-local\" name=\"custom_field[";
                    // line 183
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                    yield "]\" value=\"";
                    if ((($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183)] ?? null) : null)) {
                        yield (($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 183);
                    }
                    yield "\" id=\"input-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                    yield "\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-";
                    // line 184
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                    yield "\" class=\"invalid-feedback\"></div>
                                            ";
                }
                // line 186
                yield "                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            yield "                                </div>
                            </div>
                        ";
        }
        // line 191
        yield "
                        <!-- Form Actions -->
                        <div class=\"form-actions\">
                            <div class=\"action-buttons\">
                                <a href=\"";
        // line 195
        yield ($context["back"] ?? null);
        yield "\" class=\"tf-btn btn-outline animate-btn\">
                                    <i class=\"icon icon-arrow-left\"></i>
                                    ";
        // line 197
        yield ($context["button_back"] ?? null);
        yield "
                                </a>
                                <button type=\"submit\" class=\"tf-btn btn-fill animate-btn\">
                                    <i class=\"icon icon-save\"></i>
                                    ";
        // line 201
        yield ($context["button_continue"] ?? null);
        yield "
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                ";
        // line 208
        yield ($context["content_bottom"] ?? null);
        yield "
            </div>
            ";
        // line 210
        yield ($context["column_right"] ?? null);
        yield "
        </div>
    </div>
</section>
<!-- /Edit Account -->

<style>
/* Edit Account Page Styling */
.edit-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border-left: 4px solid #241B68;
}

.intro-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
}

.intro-header i {
    font-size: 24px;
    color: #241B68;
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

.edit-form-container {
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
    border-color: #241B68;
    box-shadow: 0 0 0 0.2rem rgba(36,27,104,0.1);
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
    border-color: #000;
}

.option-card input:checked + .option-label {
    background: #000;
    color: #fff;
    border-color: #000;
}

/* File Upload */
.file-upload-wrapper {
    margin-top: 8px;
}

.file-upload-wrapper .tf-btn {
    padding: 10px 20px;
    font-size: 14px;
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
    .edit-form-container {
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
        // line 466
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
        return "catalog/view/template/account/edit.twig";
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
        return array (  911 => 466,  652 => 210,  647 => 208,  637 => 201,  630 => 197,  625 => 195,  619 => 191,  614 => 188,  607 => 186,  602 => 184,  590 => 183,  579 => 182,  577 => 181,  574 => 180,  569 => 178,  557 => 177,  546 => 176,  544 => 175,  541 => 174,  536 => 172,  524 => 171,  513 => 170,  511 => 169,  508 => 168,  503 => 166,  492 => 164,  487 => 162,  477 => 161,  467 => 159,  465 => 158,  462 => 157,  457 => 155,  443 => 154,  432 => 153,  430 => 152,  427 => 151,  422 => 149,  408 => 148,  397 => 147,  395 => 146,  392 => 145,  387 => 143,  384 => 142,  373 => 139,  361 => 138,  358 => 137,  354 => 136,  344 => 134,  342 => 133,  339 => 132,  334 => 130,  331 => 129,  320 => 126,  308 => 125,  305 => 124,  301 => 123,  291 => 121,  289 => 120,  286 => 119,  281 => 117,  278 => 116,  263 => 114,  259 => 113,  255 => 112,  249 => 111,  238 => 110,  236 => 109,  229 => 108,  225 => 107,  217 => 101,  215 => 100,  208 => 95,  198 => 90,  186 => 85,  183 => 84,  181 => 83,  172 => 79,  164 => 74,  151 => 66,  143 => 61,  133 => 56,  125 => 51,  117 => 46,  109 => 41,  91 => 26,  86 => 24,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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

<!-- Edit Account -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        <div class=\"row\">
            {{ column_left }}
            <div id=\"content\" class=\"col\">
                {{ content_top }}
                
                <!-- Form Introduction -->
                <div class=\"edit-intro\">
                    <div class=\"intro-card\">
                        <div class=\"intro-header\">
                            <i class=\"icon icon-user-edit\"></i>
                            <h3>Edit Account Information</h3>
                        </div>
                        <p class=\"intro-text\">Update your personal information and account preferences below.</p>
                    </div>
                </div>
                
                <!-- Edit Form -->
                <div class=\"edit-form-container\">
                    <form id=\"form-customer\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
                        <!-- Personal Details -->
                        <div class=\"form-section\">
                            <div class=\"section-header\">
                                <i class=\"icon icon-user\"></i>
                                <h4>{{ text_your_details }}</h4>
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
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-email\" class=\"form-label required\">{{ entry_email }}</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-mail\"></i>
                                            </span>
                                            <input type=\"email\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-email\" class=\"invalid-feedback\"></div>
                                    </div>
                                    {% if config_telephone_display %}
                                    <div class=\"col-md-6 mb-3\">
                                        <label for=\"input-telephone\" class=\"form-label{% if config_telephone_required %} required{% endif %}\">{{ entry_telephone }}</label>
                                        <div class=\"input-group\">
                                            <span class=\"input-icon\">
                                                <i class=\"icon icon-phone\"></i>
                                            </span>
                                            <input type=\"tel\" name=\"telephone\" value=\"{{ telephone }}\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"/>
                                        </div>
                                        <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                                    </div>
                                    {% endif %}
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
                                                <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">
                                                    <option value=\"\">{{ text_select }}</option>
                                                    {% for custom_field_value in custom_field.custom_field_value %}
                                                        <option value=\"{{ custom_field_value.custom_field_value_id }}\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} selected{% endif %}>{{ custom_field_value.name }}</option>
                                                    {% endfor %}
                                                </select>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'radio' %}
                                                <label class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <div class=\"custom-options\">
                                                    {% for custom_field_value in custom_field.custom_field_value %}
                                                        <div class=\"option-card\">
                                                            <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
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
                                                            <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"{% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %} checked{% endif %}/>
                                                            <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"option-label\">{{ custom_field_value.name }}</label>
                                                        </div>
                                                    {% endfor %}
                                                </div>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'text' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'textarea' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"4\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'file' %}
                                                <label class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <div class=\"file-upload-wrapper\">
                                                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"tf-btn btn-outline animate-btn\">
                                                        <i class=\"icon icon-upload\"></i> {{ button_upload }}
                                                    </button>
                                                    <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
                                                </div>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'date' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'time' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}

                                            {% if custom_field.type == 'datetime' %}
                                                <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label{% if custom_field.required %} required{% endif %}\">{{ custom_field.name }}</label>
                                                <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                                                <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                                            {% endif %}
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        {% endif %}

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
<!-- /Edit Account -->

<style>
/* Edit Account Page Styling */
.edit-intro {
    margin-bottom: 30px;
}

.intro-card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border-left: 4px solid #241B68;
}

.intro-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
}

.intro-header i {
    font-size: 24px;
    color: #241B68;
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

.edit-form-container {
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
    border-color: #241B68;
    box-shadow: 0 0 0 0.2rem rgba(36,27,104,0.1);
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
    border-color: #000;
}

.option-card input:checked + .option-label {
    background: #000;
    color: #fff;
    border-color: #000;
}

/* File Upload */
.file-upload-wrapper {
    margin-top: 8px;
}

.file-upload-wrapper .tf-btn {
    padding: 10px 20px;
    font-size: 14px;
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
    .edit-form-container {
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
", "catalog/view/template/account/edit.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\edit.twig");
    }
}
