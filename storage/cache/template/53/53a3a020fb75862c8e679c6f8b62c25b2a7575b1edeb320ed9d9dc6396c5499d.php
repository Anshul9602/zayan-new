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

/* catalog/view/template/checkout/payment_address.twig */
class __TwigTemplate_18195058549fe2986d073171f86731bea25cd105c8875ad668ad99f4a04f31c1 extends Template
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
        yield "<fieldset>
  <legend>";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  <div id=\"payment-addresses\" style=\"display: ";
        // line 3
        if (($context["addresses"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"1\" id=\"input-payment-existing\" class=\"form-check-input\"";
        // line 5
        if (($context["addresses"] ?? null)) {
            yield " checked";
        }
        yield "/>
      <label for=\"input-payment-existing\" class=\"form-check-label\">";
        // line 6
        yield ($context["text_address_existing"] ?? null);
        yield "</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"0\" id=\"input-payment-new\" class=\"form-check-input\"";
        // line 9
        if ( !($context["addresses"] ?? null)) {
            yield " checked";
        }
        yield ">
      <label for=\"input-payment-new\" class=\"form-check-label\">";
        // line 10
        yield ($context["text_address_new"] ?? null);
        yield "</label>
    </div>
  </div>
  <div id=\"payment-existing\" style=\"display: ";
        // line 13
        if (($context["addresses"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <select name=\"address_id\" id=\"input-payment-address\" class=\"form-select\">
      <option value=\"\">";
        // line 15
        yield ($context["text_select"] ?? null);
        yield "</option>
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 17
            yield "        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 17);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 17) == ($context["address_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 17);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 17);
            yield ",";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 17)) {
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 17);
                yield ",";
            }
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 17);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 17);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 17);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 17);
            yield "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "    </select>
    <div id=\"error-payment-address\" class=\"invalid-feedback\"></div>
  </div>
  <br/>
  <div id=\"payment-new\" style=\"display: ";
        // line 23
        if ( !($context["addresses"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <form id=\"form-payment-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 27
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 28
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-payment-firstname\" class=\"form-control\"/>
          <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 32
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 33
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-payment-lastname\" class=\"form-control\"/>
          <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
        // line 37
        yield ($context["entry_company"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 38
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 41
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 42
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 46
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 47
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">";
        // line 50
        yield ($context["entry_city"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 51
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 55
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        // line 56
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">";
        // line 60
        yield ($context["entry_country"] ?? null);
        yield "</label>
          <select name=\"country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"0\">";
        // line 62
        yield ($context["text_select"] ?? null);
        yield "</option>
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 64
            yield "              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 64);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 64) == ($context["country_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 64);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 70
        yield ($context["entry_zone"] ?? null);
        yield "</label>
          <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-select\">
            <option value=\"\">";
        // line 72
        yield ($context["text_select"] ?? null);
        yield "</option>
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone"]) {
            // line 74
            yield "              <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "zone_id", [], "any", false, false, false, 74);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["zone"], "name", [], "any", false, false, false, 74);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['zone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "          </select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>

        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 81
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 81) == "select")) {
                // line 82
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 82)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 83
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 83);
                yield "</label>
              <select name=\"custom_field[";
                // line 84
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                yield "]\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                yield "\" class=\"form-select\">
                <option value=\"\">";
                // line 85
                yield ($context["text_select"] ?? null);
                yield "</option>
                ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 86));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 87
                    yield "                  <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 87);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 87);
                    yield "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                yield "              </select>
              <div id=\"error-payment-custom-field-";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 93
            yield "
          ";
            // line 94
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 94) == "radio")) {
                // line 95
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 95)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                yield "\">
              <label class=\"form-label\">";
                // line 96
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 96);
                yield "</label>
              <div id=\"input-payment-custom-field-";
                // line 97
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                yield "\">
                ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 99
                    yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                    // line 100
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    yield "\" id=\"input-payment-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 100);
                    yield "\" class=\"form-check-input\"/>
                    <label for=\"input-payment-custom-value-";
                    // line 101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 101);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 101);
                    yield "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                yield "              </div>
              <div id=\"error-payment-custom-field-";
                // line 105
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 108
            yield "
          ";
            // line 109
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "checkbox")) {
                // line 110
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 110)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                yield "\">
              <label class=\"form-label\">";
                // line 111
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                yield "</label>
              <div id=\"input-payment-custom-field-";
                // line 112
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                yield "\">
                ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 113));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 114
                    yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                    // line 115
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                    yield "\" id=\"input-payment-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                    yield "\" class=\"form-check-input\"/>
                    <label for=\"input-payment-custom-value-";
                    // line 116
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 116);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 116);
                    yield "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                yield "              </div>
              <div id=\"error-payment-custom-field-";
                // line 120
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 123
            yield "
          ";
            // line 124
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 124) == "text")) {
                // line 125
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 125)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 126
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 126);
                yield "</label>
              <input type=\"text\" name=\"custom_field[";
                // line 127
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 127);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 127);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                yield "\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-";
                // line 128
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 131
            yield "
          ";
            // line 132
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 132) == "textarea")) {
                // line 133
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 133)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 134
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                yield "</label>
              <textarea name=\"custom_field[";
                // line 135
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                yield "\" class=\"form-control\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 135);
                yield "</textarea>
              <div id=\"error-payment-custom-field-";
                // line 136
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 139
            yield "
          ";
            // line 140
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 140) == "file")) {
                // line 141
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 141)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                yield "\">
              <label class=\"form-label\">";
                // line 142
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                yield "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 144
                yield ($context["upload"] ?? null);
                yield "\" data-oc-size-max=\"";
                yield ($context["config_file_max_size"] ?? null);
                yield "\" data-oc-size-error=\"";
                yield ($context["error_upload_size"] ?? null);
                yield "\" data-oc-target=\"#input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
                <input type=\"hidden\" name=\"custom_field[";
                // line 145
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                yield "]\" value=\"\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                yield "\"/>
              </div>
              <div id=\"error-payment-custom-field-";
                // line 147
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 150
            yield "
          ";
            // line 151
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 151) == "date")) {
                // line 152
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 152)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 153
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                yield "</label>
              <input type=\"date\" name=\"custom_field[";
                // line 154
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 154);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 154);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                yield "\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-";
                // line 155
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 158
            yield "
          ";
            // line 159
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 159) == "time")) {
                // line 160
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 160)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 161
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 161);
                yield "</label>
              <input type=\"time\" name=\"custom_field[";
                // line 162
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 162);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 162);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                yield "\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-";
                // line 163
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 166
            yield "
          ";
            // line 167
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 167) == "datetime")) {
                // line 168
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 168)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 169
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 169);
                yield "</label>
              <input type=\"datetime-local\" name=\"custom_field[";
                // line 170
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 170);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                yield "\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-";
                // line 171
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 174
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\">";
        // line 178
        yield ($context["button_continue"] ?? null);
        yield "</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment_existing\\']').on('change', function() {
    if (\$(this).val() == 1) {
        \$('#payment-existing').show();
        \$('#payment-new').hide();
    } else {
        \$('#payment-existing').hide();
        \$('#payment-new').show();
    }
});

// Existing Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.address&language=";
        // line 200
        yield ($context["language"] ?? null);
        yield "&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                console.log(json);

                \$('#input-payment-address').removeClass('is-invalid');
                \$('#error-payment-address').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#input-payment-address').addClass('is-invalid');
                    \$('#error-payment-address').html(json['error']).addClass('d-block');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 229
        yield ($context["language"] ?? null);
        yield "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// New Payment Address
\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.save&language=";
        // line 245
        yield ($context["language"] ?? null);
        yield "',
            type: 'post',
            data: \$('#form-payment-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-payment-address').button('loading');
            },
            complete: function() {
                \$('#button-payment-address').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-payment-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-payment-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-payment-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-payment-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#form-payment-address')[0].reset();

                    var html = '<option value=\"\">";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            html += '<option value=\"' + json['addresses'][i]['address_id'] + '\">' + json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + (json['addresses'][i]['company'] ? json['addresses'][i]['company'] + ', ' : '') + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'] + '</option>';
                        }
                    }

                    // Payment Address
                    \$('#input-payment-address').html(html);

                    \$('#input-payment-address').val(json['address_id']);

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');

                    // Shipping Address
                    var shipping_address_id = \$('#input-shipping-address').val();

                    \$('#input-shipping-address').html(html);

                    if (shipping_address_id) {
                        \$('#input-shipping-address').val(shipping_address_id);
                    }

                    \$('#shipping-address').css({display: 'block'});
                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 318
        yield ($context["language"] ?? null);
        yield "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-payment-country').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language=";
        // line 333
        yield ($context["language"] ?? null);
        yield "&country_id=' + \$('#input-payment-country').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
                \$('#input-payment-zone').prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
                \$('#input-payment-zone').prop('disabled', false);
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-payment-postcode').parent().addClass('required');
                } else {
                    \$('#input-payment-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">";
        // line 350
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\">' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_none"] ?? null), "js");
        yield "</option>';
                }

                \$('#input-payment-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/payment_address.twig";
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
        return array (  894 => 357,  884 => 350,  864 => 333,  846 => 318,  809 => 284,  767 => 245,  748 => 229,  716 => 200,  691 => 178,  687 => 176,  680 => 174,  674 => 171,  664 => 170,  658 => 169,  649 => 168,  647 => 167,  644 => 166,  638 => 163,  628 => 162,  622 => 161,  613 => 160,  611 => 159,  608 => 158,  602 => 155,  592 => 154,  586 => 153,  577 => 152,  575 => 151,  572 => 150,  566 => 147,  559 => 145,  547 => 144,  542 => 142,  533 => 141,  531 => 140,  528 => 139,  522 => 136,  512 => 135,  506 => 134,  497 => 133,  495 => 132,  492 => 131,  486 => 128,  476 => 127,  470 => 126,  461 => 125,  459 => 124,  456 => 123,  450 => 120,  447 => 119,  436 => 116,  428 => 115,  425 => 114,  421 => 113,  417 => 112,  413 => 111,  404 => 110,  402 => 109,  399 => 108,  393 => 105,  390 => 104,  379 => 101,  371 => 100,  368 => 99,  364 => 98,  360 => 97,  356 => 96,  347 => 95,  345 => 94,  342 => 93,  336 => 90,  333 => 89,  322 => 87,  318 => 86,  314 => 85,  308 => 84,  302 => 83,  293 => 82,  290 => 81,  286 => 80,  280 => 76,  269 => 74,  265 => 73,  261 => 72,  256 => 70,  250 => 66,  235 => 64,  231 => 63,  227 => 62,  222 => 60,  215 => 56,  211 => 55,  204 => 51,  200 => 50,  194 => 47,  190 => 46,  183 => 42,  179 => 41,  173 => 38,  169 => 37,  162 => 33,  158 => 32,  151 => 28,  147 => 27,  136 => 23,  130 => 19,  99 => 17,  95 => 16,  91 => 15,  82 => 13,  76 => 10,  70 => 9,  64 => 6,  58 => 5,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset>
  <legend>{{ heading_title }}</legend>
  <div id=\"payment-addresses\" style=\"display: {% if addresses %}block{% else %}none{% endif %};\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"1\" id=\"input-payment-existing\" class=\"form-check-input\"{% if addresses %} checked{% endif %}/>
      <label for=\"input-payment-existing\" class=\"form-check-label\">{{ text_address_existing }}</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"0\" id=\"input-payment-new\" class=\"form-check-input\"{% if not addresses %} checked{% endif %}>
      <label for=\"input-payment-new\" class=\"form-check-label\">{{ text_address_new }}</label>
    </div>
  </div>
  <div id=\"payment-existing\" style=\"display: {% if addresses %}block{% else %}none{% endif %};\">
    <select name=\"address_id\" id=\"input-payment-address\" class=\"form-select\">
      <option value=\"\">{{ text_select }}</option>
      {% for address in addresses %}
        <option value=\"{{ address.address_id }}\"{% if address.address_id == address_id %} selected{% endif %}>{{ address.firstname }} {{ address.lastname }},{% if address.company %} {{ address.company }},{% endif %} {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>
      {% endfor %}
    </select>
    <div id=\"error-payment-address\" class=\"invalid-feedback\"></div>
  </div>
  <br/>
  <div id=\"payment-new\" style=\"display: {% if not addresses %}block{% else %}none{% endif %};\">
    <form id=\"form-payment-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
          <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"{{ entry_firstname }}\" id=\"input-payment-firstname\" class=\"form-control\"/>
          <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
          <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"{{ entry_lastname }}\" id=\"input-payment-lastname\" class=\"form-control\"/>
          <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">{{ entry_company }}</label>
          <input type=\"text\" name=\"company\" value=\"\" placeholder=\"{{ entry_company }}\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
          <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"{{ entry_address_1 }}\" id=\"input-payment-address-1\" class=\"form-control\"/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
          <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"{{ entry_address_2 }}\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-city\" class=\"form-label\">{{ entry_city }}</label>
          <input type=\"text\" name=\"city\" value=\"\" placeholder=\"{{ entry_city }}\" id=\"input-payment-city\" class=\"form-control\"/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
          <input type=\"text\" name=\"postcode\" value=\"\" placeholder=\"{{ entry_postcode }}\" id=\"input-payment-postcode\" class=\"form-control\"/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-country\" class=\"form-label\">{{ entry_country }}</label>
          <select name=\"country_id\" id=\"input-payment-country\" class=\"form-select\">
            <option value=\"0\">{{ text_select }}</option>
            {% for country in countries %}
              <option value=\"{{ country.country_id }}\"{% if country.country_id == country_id %} selected{% endif %}>{{ country.name }}</option>
            {% endfor %}
          </select>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3 required\">
          <label for=\"input-payment-zone\" class=\"form-label\">{{ entry_zone }}</label>
          <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-select\">
            <option value=\"\">{{ text_select }}</option>
            {% for zone in zones %}
              <option value=\"{{ zone.zone_id }}\">{{ zone.name }}</option>
            {% endfor %}
          </select>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>

        {% for custom_field in custom_fields %}
          {% if custom_field.type == 'select' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for custom_field_value in custom_field.custom_field_value %}
                  <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'radio' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/>
                    <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'checkbox' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/>
                    <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'text' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'textarea' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'file' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\"/>
              </div>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'date' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'time' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'datetime' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

        {% endfor %}
      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\">{{ button_continue }}</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment_existing\\']').on('change', function() {
    if (\$(this).val() == 1) {
        \$('#payment-existing').show();
        \$('#payment-new').hide();
    } else {
        \$('#payment-existing').hide();
        \$('#payment-new').show();
    }
});

// Existing Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.address&language={{ language }}&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                console.log(json);

                \$('#input-payment-address').removeClass('is-invalid');
                \$('#error-payment-address').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#input-payment-address').addClass('is-invalid');
                    \$('#error-payment-address').html(json['error']).addClass('d-block');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language={{ language }}');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// New Payment Address
\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.save&language={{ language }}',
            type: 'post',
            data: \$('#form-payment-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-payment-address').button('loading');
            },
            complete: function() {
                \$('#button-payment-address').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-payment-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-payment-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-payment-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-payment-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#form-payment-address')[0].reset();

                    var html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            html += '<option value=\"' + json['addresses'][i]['address_id'] + '\">' + json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + (json['addresses'][i]['company'] ? json['addresses'][i]['company'] + ', ' : '') + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'] + '</option>';
                        }
                    }

                    // Payment Address
                    \$('#input-payment-address').html(html);

                    \$('#input-payment-address').val(json['address_id']);

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');

                    // Shipping Address
                    var shipping_address_id = \$('#input-shipping-address').val();

                    \$('#input-shipping-address').html(html);

                    if (shipping_address_id) {
                        \$('#input-shipping-address').val(shipping_address_id);
                    }

                    \$('#shipping-address').css({display: 'block'});
                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language={{ language }}');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

\$('#input-payment-country').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=localisation/country&language={{ language }}&country_id=' + \$('#input-payment-country').val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
                \$('#input-payment-zone').prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
                \$('#input-payment-zone').prop('disabled', false);
            },
            success: function(json) {
                if (json['postcode_required'] == '1') {
                    \$('#input-payment-postcode').parent().addClass('required');
                } else {
                    \$('#input-payment-postcode').parent().removeClass('required');
                }

                html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value=\"' + json['zone'][i]['zone_id'] + '\">' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected>{{ text_none|escape('js') }}</option>';
                }

                \$('#input-payment-zone').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
", "catalog/view/template/checkout/payment_address.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\checkout\\payment_address.twig");
    }
}
