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

/* extension/export_import/admin/view/template/tool/export_import.twig */
class __TwigTemplate_90896d1f3c426920b953671f319245a05056c93f8e1533da4cad69b414dc4292 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<a href=\"";
        // line 6
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
            yield (($_v0 = $context["breadcrumb"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["href"] ?? null) : null);
            yield "\">";
            yield (($_v1 = $context["breadcrumb"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["text"] ?? null) : null);
            yield "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "\t\t\t</ol>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            yield "\t\t<div class=\"alert alert-danger export-import-dismissible\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 20
            yield ($context["error_warning"] ?? null);
            yield "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 24
        yield "\t\t";
        if (($context["success"] ?? null)) {
            // line 25
            yield "\t\t<div class=\"alert alert-success export-import-dismissible\">
\t\t\t<i class=\"fa fa-check-circle\"></i> ";
            // line 26
            yield ($context["success"] ?? null);
            yield "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 30
        yield "\t\t";
        if (((!($context["error_warning"] ?? null)) && (!($context["success"] ?? null)))) {
            // line 31
            yield "\t\t<div class=\"alert alert-info export-import-dismissible\" id=\"export_import_welcome\">
\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t";
            // line 33
            yield ($context["text_welcome"] ?? null);
            yield "<br /><br />";
            yield ($context["text_used_category_ids"] ?? null);
            yield " ";
            yield ($context["text_used_product_ids"] ?? null);
            yield "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t";
        }
        // line 37
        yield "\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"#tab-export\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 40
        yield ($context["tab_export"] ?? null);
        yield "</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-import\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 41
        yield ($context["tab_import"] ?? null);
        yield "</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-settings\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 42
        yield ($context["tab_settings"] ?? null);
        yield "</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-support\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 43
        yield ($context["tab_support"] ?? null);
        yield "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-export\">
\t\t\t\t\t\t<form action=\"";
        // line 47
        yield ($context["export"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"export\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
        // line 49
        yield ($context["entry_export"] ?? null);
        yield "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><p>";
        // line 52
        yield ($context["entry_export_type"] ?? null);
        yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        if ((($context["export_type"] ?? null) == "c")) {
            // line 58
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"c\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 60
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"c\">
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        yield "\t\t\t\t\t\t\t\t\t\t\t";
        yield ($context["text_export_type_category"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 67
        if ((($context["export_type"] ?? null) == "p")) {
            // line 68
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"p\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 70
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"p\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 72
        yield "\t\t\t\t\t\t\t\t\t\t\t";
        yield ($context["text_export_type_product"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 77
        if ((($context["export_type"] ?? null) == "o")) {
            // line 78
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"o\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 80
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"o\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 82
        yield "\t\t\t\t\t\t\t\t\t\t\t";
        yield ($context["text_export_type_option"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 87
        if ((($context["export_type"] ?? null) == "a")) {
            // line 88
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"a\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 90
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"a\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 92
        yield "\t\t\t\t\t\t\t\t\t\t\t";
        yield ($context["text_export_type_attribute"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 97
        if ((($context["export_type"] ?? null) == "f")) {
            // line 98
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"f\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 100
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"f\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 102
        yield "\t\t\t\t\t\t\t\t\t\t\t";
        yield ($context["text_export_type_filter"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 107
        if ((($context["export_type"] ?? null) == "u")) {
            // line 108
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"u\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            yield "\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"u\" />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 112
        yield "\t\t\t\t\t\t\t\t\t\t\t";
        yield ($context["text_export_type_customer"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\" id=\"export_filter\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t";
        // line 119
        yield ($context["entry_category_filter"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 120
        yield ($context["help_category_filter"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 122
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
\t\t\t\t\t\t\t\t\t<ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"import-category\" class=\"table m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 129
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"category-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 129);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 130
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 130);
            yield "<input type=\"hidden\" name=\"categories[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 130);
            yield "\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t";
        // line 141
        yield ($context["entry_manufacturer_filter"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 142
        yield ($context["help_manufacturer_filter"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"manufacturer\" value=\"\" placeholder=\"";
        // line 144
        yield ($context["entry_manufacturer"] ?? null);
        yield "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
\t\t\t\t\t\t\t\t\t<ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"import-manufacturer\" class=\"table m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["manufacturers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
            // line 151
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"manufacturer-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 151);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 152
            yield CoreExtension::getAttribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 152);
            yield "<input type=\"hidden\" name=\"manufacturers[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["manufacturer"], "manufacturer_id", [], "any", false, false, false, 152);
            yield "\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['manufacturer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\" id=\"range_type\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 165
        yield ($context["entry_range_type"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 166
        yield ($context["help_range_type"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"range_type\" id=\"range_type_id\" value=\"id\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"range_type_id\">";
        // line 172
        yield ($context["button_export_id"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"range_type\" id=\"range_type_page\" value=\"page\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"range_type_page\">";
        // line 176
        yield ($context["button_export_page"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 179
        yield ($context["entry_start_id"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 180
        yield ($context["entry_start_index"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"min\" value=\"";
        // line 182
        yield ($context["min"] ?? null);
        yield "\" />
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">";
        // line 184
        yield ($context["entry_end_id"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">";
        // line 185
        yield ($context["entry_end_index"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"max\" value=\"";
        // line 187
        yield ($context["max"] ?? null);
        yield "\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"downloadData();\" class=\"btn btn-primary\"><span>";
        // line 192
        yield ($context["button_export"] ?? null);
        yield "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-import\">
\t\t\t\t\t\t<form action=\"";
        // line 198
        yield ($context["import"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"import\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
        // line 200
        yield ($context["entry_import"] ?? null);
        yield "
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 201
        yield ($context["help_import"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t\t<span class=\"help\">";
        // line 202
        yield ($context["help_format"] ?? null);
        yield "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<p>";
        // line 207
        yield ($context["entry_incremental"] ?? null);
        yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 212
        if (($context["incremental"] ?? null)) {
            // line 213
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 214
            yield ($context["text_yes"] ?? null);
            yield " ";
            yield ($context["help_incremental_yes"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 216
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 217
            yield ($context["text_yes"] ?? null);
            yield " ";
            yield ($context["help_incremental_yes"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 219
        yield "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 223
        if (($context["incremental"] ?? null)) {
            // line 224
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 225
            yield ($context["text_no"] ?? null);
            yield " ";
            yield ($context["help_incremental_no"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 227
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"0\" checked=\"checked\" />\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 228
            yield ($context["text_no"] ?? null);
            yield " ";
            yield ($context["help_incremental_no"] ?? null);
            yield "
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 230
        yield "\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t";
        // line 236
        yield ($context["entry_upload"] ?? null);
        yield "<br /><br />
\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"upload\" id=\"upload\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"uploadData();\" class=\"btn btn-primary\"><span>";
        // line 242
        yield ($context["button_import"] ?? null);
        yield "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings\">
\t\t\t\t\t\t<form action=\"";
        // line 248
        yield ($context["settings"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"settings\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 252
        if (($context["settings_use_option_id"] ?? null)) {
            // line 253
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_id\" name=\"export_import_settings_use_option_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 255
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_id\" name=\"export_import_settings_use_option_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 257
        yield "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_option_id\">";
        yield ($context["entry_settings_use_option_id"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 260
        if (($context["settings_use_option_value_id"] ?? null)) {
            // line 261
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_value_id\" name=\"export_import_settings_use_option_value_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 263
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_value_id\" name=\"export_import_settings_use_option_value_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 265
        yield "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_option_value_id\">";
        yield ($context["entry_settings_use_option_value_id"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 268
        if (($context["settings_use_attribute_group_id"] ?? null)) {
            // line 269
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_group_id\" name=\"export_import_settings_use_attribute_group_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 271
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_group_id\" name=\"export_import_settings_use_attribute_group_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 273
        yield "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_attribute_group_id\">";
        yield ($context["entry_settings_use_attribute_group_id"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 276
        if (($context["settings_use_attribute_id"] ?? null)) {
            // line 277
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_id\" name=\"export_import_settings_use_attribute_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 279
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_id\" name=\"export_import_settings_use_attribute_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 281
        yield "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_attribute_id\">";
        yield ($context["entry_settings_use_attribute_id"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 284
        if (($context["settings_use_filter_group_id"] ?? null)) {
            // line 285
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_group_id\" name=\"export_import_settings_use_filter_group_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 287
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_group_id\" name=\"export_import_settings_use_filter_group_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 289
        yield "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_filter_group_id\">";
        yield ($context["entry_settings_use_filter_group_id"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t";
        // line 292
        if (($context["settings_use_filter_id"] ?? null)) {
            // line 293
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_id\" name=\"export_import_settings_use_filter_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 295
            yield "\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_id\" name=\"export_import_settings_use_filter_id\">
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 297
        yield "\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_filter_id\">";
        yield ($context["entry_settings_use_filter_id"] ?? null);
        yield "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"updateSettings();\" class=\"btn btn-primary\"><span>";
        // line 303
        yield ($context["button_settings"] ?? null);
        yield "</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-support\">
\t\t\t\t\t\t<div id=\"export_import_notification\" class=\"alert alert-info export-import-dismissible\">
\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t<div id=\"export_import_loading\"><img src=\"../extension/export_import/admin/view/image/export-import/loading.gif\" />";
        // line 311
        yield ($context["text_loading_notifications"] ?? null);
        yield "</div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 317
        yield ($context["entry_version"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 318
        yield ($context["version_export_import"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 321
        yield ($context["entry_oc_version"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 322
        yield ($context["version_opencart"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">";
        // line 325
        yield ($context["entry_php_version"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td>";
        // line 326
        yield ($context["version_php"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\" style=\"vertical-align:top;\">";
        // line 329
        yield ($context["entry_license"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-wrap\">";
        // line 330
        yield ($context["text_license"] ?? null);
        yield "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

<script type=\"text/javascript\"><!--

function getNotifications() {
\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><div id=\"export_import_loading\"><img src=\"../extension/export_import/admin/view/image/export-import/loading.gif\" />";
        // line 343
        yield ($context["text_loading_notifications"] ?? null);
        yield "</div><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\tsetTimeout(
\t\tfunction(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: 'index.php?route=extension/export_import/tool/export_import";
        // line 348
        yield ($context["method_separator"] ?? null);
        yield "getNotifications&user_token=";
        yield ($context["user_token"] ?? null);
        yield "',
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+json['error']+' <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        // line 352
        yield ($context["text_retry"] ?? null);
        yield "</span><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t\t} else if (json['message']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+json['message']+'<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+'";
        // line 356
        yield ($context["error_no_news"] ?? null);
        yield "'+'<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfailure: function(){
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+'";
        // line 360
        yield ($context["error_notifications"] ?? null);
        yield " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        yield ($context["text_retry"] ?? null);
        yield "</span><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+'";
        // line 363
        yield ($context["error_notifications"] ?? null);
        yield " <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">";
        yield ($context["text_retry"] ?? null);
        yield "</span><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t}
\t\t\t});
\t\t},
\t\t500
\t);
}

function check_export_filter(export_type) {
\tif (export_type=='p') {
\t\t\$('#export_filter').show();
\t} else {
\t\t\$('#export_filter').hide();
\t}
}

function check_range_type(export_type) {
\tif ((export_type=='p') || (export_type=='c') || (export_type=='u')) {
\t\t\$('#range_type').show();
\t\t\$('#range_type_id').prop('checked',true);
\t\t\$('#range_type_page').prop('checked',false);
\t\t\$('.id').show();
\t\t\$('.page').hide();
\t} else {
\t\t\$('#range_type').hide();
\t}
}

\$(document).ready(function() {

\tcheck_export_filter(\$('input[name=export_type]:checked').val());
\tcheck_range_type(\$('input[name=export_type]:checked').val());

\t\$(\"#range_type_id\").click(function() {
\t\t\$(\".page\").hide();
\t\t\$(\".id\").show();
\t});

\t\$(\"#range_type_page\").click(function() {
\t\t\$(\".id\").hide();
\t\t\$(\".page\").show();
\t});

\t\$('input[name=export_type]').click(function() {
\t\tcheck_export_filter(\$(this).val());
\t\tcheck_range_type(\$(this).val());
\t});

\t\$('span.close').click(function() {
\t\t\$(this).parent().remove();
\t});

\t\$('a[data-bs-toggle=\"tab\"]').click(function() {
\t\t\$('#export_import_welcome').remove();
\t});

\t\$('a[href=\"#tab-support\"').click(function() {
\t\tif (\$(this).parent().attr('class')!='active') {
\t\t\tgetNotifications();
\t\t}
\t});

});

function checkFileSize(id) {
\t// See also http://stackoverflow.com/questions/3717793/javascript-file-upload-size-validation for details
\tvar input, file, file_size;

\tif (!window.FileReader) {
\t\t// The file API isn't yet supported on user's browser
\t\treturn true;
\t}

\tinput = document.getElementById(id);
\tif (!input) {
\t\t// couldn't find the file input element
\t\treturn true;
\t}
\telse if (!input.files) {
\t\t// browser doesn't seem to support the `files` property of file inputs
\t\treturn true;
\t}
\telse if (!input.files[0]) {
\t\t// no file has been selected for the upload
\t\talert( \"";
        // line 447
        yield ($context["error_select_file"] ?? null);
        yield "\" );
\t\treturn false;
\t}
\telse {
\t\tfile = input.files[0];
\t\tfile_size = file.size;
\t\t";
        // line 453
        if ((array_key_exists("post_max_size", $context) && ($context["post_max_size"] ?? null))) {
            // line 454
            yield "\t\t// check against PHP's post_max_size
\t\tpost_max_size = ";
            // line 455
            yield ($context["post_max_size"] ?? null);
            yield ";
\t\tif (file_size > post_max_size) {
\t\t\talert( \"";
            // line 457
            yield ($context["error_post_max_size"] ?? null);
            yield "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 461
        yield "\t\t";
        if ((array_key_exists("upload_max_filesize", $context) && ($context["upload_max_filesize"] ?? null))) {
            // line 462
            yield "\t\t// check against PHP's upload_max_filesize
\t\tupload_max_filesize = ";
            // line 463
            yield ($context["upload_max_filesize"] ?? null);
            yield ";
\t\tif (file_size > upload_max_filesize) {
\t\t\talert( \"";
            // line 465
            yield ($context["error_upload_max_filesize"] ?? null);
            yield "\" );
\t\t\treturn false;
\t\t}
\t\t";
        }
        // line 469
        yield "\t\treturn true;
\t}
}

function uploadData() {
\tif (checkFileSize('upload')) {
\t\t\$('#import').submit();
\t}
}

function isNumber(txt){ 
\tvar regExp=/^[\\d]{1,}\$/;
\treturn regExp.test(txt); 
}

count_product = ";
        // line 484
        yield ($context["count_product"] ?? null);
        yield ";

function updateCountProducts() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/export_import/tool/export_import";
        // line 488
        yield ($context["method_separator"] ?? null);
        yield "getCountProduct&user_token=";
        yield ($context["user_token"] ?? null);
        yield "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"input[name='categories[]'],input[name='manufacturers[]']\").serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['count']) {
\t\t\t\tcount_product = json['count'];
\t\t\t} else {
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function validateExportForm(id) {
\tvar export_type = \$('input[name=export_type]:checked').val();
\tif ((export_type!='c') && (export_type!='p') && (export_type!='u')) {
\t\treturn true;
\t}

\tvar val = \$(\"input[name=range_type]:checked\").val();
\tvar min = \$(\"input[name=min]\").val();
\tvar max = \$(\"input[name=max]\").val();

\tif ((min=='') && (max=='')) {
\t\treturn true;
\t}

\tif (!isNumber(min) || !isNumber(max)) {
\t\talert(\"";
        // line 519
        yield ($context["error_param_not_number"] ?? null);
        yield "\");
\t\treturn false;
\t}

\tvar count_item;
\tswitch (export_type) {
\t\tcase 'p': count_item = count_product-1;  break;
\t\tcase 'c': count_item = ";
        // line 526
        yield (($context["count_category"] ?? null) - 1);
        yield "; break;
\t\tdefault:  count_item = ";
        // line 527
        yield (($context["count_customer"] ?? null) - 1);
        yield "; break;
\t}
\tvar batchNo = parseInt(count_item/parseInt(min))+1; // Maximum number of item-batches, namely, item number/min, and then rounded up (that is, integer plus 1)
\tvar minItemId;
\tswitch (export_type) {
\t\tcase 'p': minItemId = parseInt( ";
        // line 532
        yield ($context["min_product_id"] ?? null);
        yield " );  break;
\t\tcase 'c': minItemId = parseInt( ";
        // line 533
        yield ($context["min_category_id"] ?? null);
        yield " ); break;
\t\tdefault:  minItemId = parseInt( ";
        // line 534
        yield ($context["min_customer_id"] ?? null);
        yield " ); break;
\t
\t}
\tvar maxItemId;
\tswitch (export_type) {
\t\tcase 'p': maxItemId = parseInt( ";
        // line 539
        yield ($context["max_product_id"] ?? null);
        yield " );  break;
\t\tcase 'c': maxItemId = parseInt( ";
        // line 540
        yield ($context["max_category_id"] ?? null);
        yield " ); break;
\t\tdefault:  maxItemId = parseInt( ";
        // line 541
        yield ($context["max_customer_id"] ?? null);
        yield " ); break;
\t
\t}

\tif (val==\"page\") {  // Min for the batch size, Max for the batch number
\t\tif (parseInt(max) <= 0) {
\t\t\talert(\"";
        // line 547
        yield ($context["error_batch_number"] ?? null);
        yield "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(max) > batchNo) {        
\t\t\talert(\"";
        // line 551
        yield ($context["error_page_no_data"] ?? null);
        yield "\"); 
\t\t\treturn false;
\t\t} else {
\t\t\t\$(\"input[name=max]\").val(parseInt(max)+1);
\t\t}
\t} else {
\t\tif (minItemId <= 0) {
\t\t\talert(\"";
        // line 558
        yield ($context["error_min_item_id"] ?? null);
        yield "\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(min) > maxItemId || parseInt(max) < minItemId || parseInt(min) > parseInt(max)) {  
\t\t\talert(\"";
        // line 562
        yield ($context["error_id_no_data"] ?? null);
        yield "\"); 
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

function downloadData() {
\tif (validateExportForm('export')) {
\t\t\$('#export').submit();
\t}
}

function updateSettings() {
\t\$('#settings').submit();
}

// Category
\$('#input-category').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category";
        // line 583
        yield ($context["method_separator"] ?? null);
        yield "autocomplete&user_token=";
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-category').val('');

        \$('#import-category-' + item['value']).remove();

        html = '<tr id=\"category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"categories[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#import-category tbody').append(html);
        updateCountProducts();
    }
});

\$('#import-category').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
        updateCountProducts();
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer";
        // line 619
        yield ($context["method_separator"] ?? null);
        yield "autocomplete&user_token=";
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-manufacturer').val('');

        \$('#import-manufacturer-' + item['value']).remove();

        html = '<tr id=\"manufacturer-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"manufacturers[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#import-manufacturer tbody').append(html);
        updateCountProducts();
    }
});

\$('#import-manufacturer').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
        updateCountProducts();
});

var alert = export_import_alert;
//--></script>

</div>
";
        // line 655
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
        return "extension/export_import/admin/view/template/tool/export_import.twig";
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
        return array (  1155 => 655,  1114 => 619,  1073 => 583,  1049 => 562,  1042 => 558,  1032 => 551,  1025 => 547,  1016 => 541,  1012 => 540,  1008 => 539,  1000 => 534,  996 => 533,  992 => 532,  984 => 527,  980 => 526,  970 => 519,  934 => 488,  927 => 484,  910 => 469,  903 => 465,  898 => 463,  895 => 462,  892 => 461,  885 => 457,  880 => 455,  877 => 454,  875 => 453,  866 => 447,  777 => 363,  769 => 360,  762 => 356,  755 => 352,  746 => 348,  738 => 343,  722 => 330,  718 => 329,  712 => 326,  708 => 325,  702 => 322,  698 => 321,  692 => 318,  688 => 317,  679 => 311,  668 => 303,  658 => 297,  654 => 295,  650 => 293,  648 => 292,  641 => 289,  637 => 287,  633 => 285,  631 => 284,  624 => 281,  620 => 279,  616 => 277,  614 => 276,  607 => 273,  603 => 271,  599 => 269,  597 => 268,  590 => 265,  586 => 263,  582 => 261,  580 => 260,  573 => 257,  569 => 255,  565 => 253,  563 => 252,  556 => 248,  547 => 242,  538 => 236,  530 => 230,  523 => 228,  520 => 227,  513 => 225,  510 => 224,  508 => 223,  502 => 219,  495 => 217,  492 => 216,  485 => 214,  482 => 213,  480 => 212,  472 => 207,  464 => 202,  460 => 201,  456 => 200,  451 => 198,  442 => 192,  434 => 187,  429 => 185,  425 => 184,  420 => 182,  415 => 180,  411 => 179,  405 => 176,  398 => 172,  389 => 166,  385 => 165,  374 => 156,  362 => 152,  357 => 151,  353 => 150,  344 => 144,  339 => 142,  335 => 141,  326 => 134,  314 => 130,  309 => 129,  305 => 128,  296 => 122,  291 => 120,  287 => 119,  276 => 112,  272 => 110,  268 => 108,  266 => 107,  257 => 102,  253 => 100,  249 => 98,  247 => 97,  238 => 92,  234 => 90,  230 => 88,  228 => 87,  219 => 82,  215 => 80,  211 => 78,  209 => 77,  200 => 72,  196 => 70,  192 => 68,  190 => 67,  181 => 62,  177 => 60,  173 => 58,  171 => 57,  163 => 52,  157 => 49,  152 => 47,  145 => 43,  141 => 42,  137 => 41,  133 => 40,  128 => 37,  117 => 33,  113 => 31,  110 => 30,  103 => 26,  100 => 25,  97 => 24,  90 => 20,  87 => 19,  85 => 18,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"float-end\">
\t\t\t\t<a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>{{ heading_title }}</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb['href'] }}\">{{ breadcrumb['text'] }}</a></li>
\t\t\t\t{% endfor %}
\t\t\t</ol>
\t\t</div>
\t</div>

\t<div class=\"container-fluid\">
\t\t{% if (error_warning) %}
\t\t<div class=\"alert alert-danger export-import-dismissible\">
\t\t\t<i class=\"fa fa-exclamation-circle\"></i> {{ error_warning }}
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t{% endif %}
\t\t{% if (success) %}
\t\t<div class=\"alert alert-success export-import-dismissible\">
\t\t\t<i class=\"fa fa-check-circle\"></i> {{ success }}
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t{% endif %}
\t\t{% if ((not error_warning) and (not success)) %}
\t\t<div class=\"alert alert-info export-import-dismissible\" id=\"export_import_welcome\">
\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t{{ text_welcome }}<br /><br />{{ text_used_category_ids}} {{ text_used_product_ids }}
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t</div>
\t\t{% endif %}
\t\t<div class=\"card\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"#tab-export\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_export }}</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-import\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_import }}</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-settings\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_settings }}</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"#tab-support\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_support }}</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-export\">
\t\t\t\t\t\t<form action=\"{{ export }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"export\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">{{ entry_export }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><p>{{ entry_export_type }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t{% if (export_type=='c') %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"c\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"c\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{{ text_export_type_category }}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t{% if (export_type=='p') %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"p\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"p\" />
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{{ text_export_type_product }}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t{% if (export_type=='o') %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"o\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"o\" />
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{{ text_export_type_option }}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t{% if (export_type=='a') %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"a\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"a\" />
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{{ text_export_type_attribute }}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t{% if (export_type=='f') %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"f\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"f\" />
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{{ text_export_type_filter }}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t{% if (export_type=='u') %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"u\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"export_type\" value=\"u\" />
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{{ text_export_type_customer }}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\" id=\"export_filter\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t{{ entry_category_filter }}
\t\t\t\t\t\t\t\t\t<span class=\"help\">{{ help_category_filter }}</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
\t\t\t\t\t\t\t\t\t<ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"import-category\" class=\"table m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"category-{{ category.category_id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ category.name }}<input type=\"hidden\" name=\"categories[]\" value=\"{{ category.category_id }}\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t{{ entry_manufacturer_filter }}
\t\t\t\t\t\t\t\t\t<span class=\"help\">{{ help_manufacturer_filter }}</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"manufacturer\" value=\"\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
\t\t\t\t\t\t\t\t\t<ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t<table id=\"import-manufacturer\" class=\"table m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for manufacturer in manufacturers %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr id=\"manufacturer-{{ manufacturer.manufacturer_id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ manufacturer.name }}<input type=\"hidden\" name=\"manufacturers[]\" value=\"{{ manufacturer.manufacturer_id }}\"/></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\" id=\"range_type\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t{{ entry_range_type }}
\t\t\t\t\t\t\t\t\t<span class=\"help\">{{ help_range_type }}</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"range_type\" id=\"range_type_id\" value=\"id\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"range_type_id\">{{ button_export_id }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"range_type\" id=\"range_type_page\" value=\"page\" />
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"range_type_page\">{{ button_export_page }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br /><br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">{{ entry_start_id }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">{{ entry_start_index }}</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"min\" value=\"{{ min }}\" />
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<span class=\"id\">{{ entry_end_id }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"page\">{{ entry_end_index }}</span>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"max\" value=\"{{ max }}\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"downloadData();\" class=\"btn btn-primary\"><span>{{ button_export }}</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-import\">
\t\t\t\t\t\t<form action=\"{{ import }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"import\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">{{ entry_import }}
\t\t\t\t\t\t\t\t\t<span class=\"help\">{{ help_import }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"help\">{{ help_format }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<p>{{ entry_incremental }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t{% if (incremental) %}
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t{{ text_yes }} {{ help_incremental_yes }}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t{{ text_yes }} {{ help_incremental_yes }}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\">
\t\t\t\t\t\t\t\t\t\t\t{% if (incremental) %}
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t{{ text_no }} {{ help_incremental_no }}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"incremental\" value=\"0\" checked=\"checked\" />\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{{ text_no }} {{ help_incremental_no }}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t{{ entry_upload }}<br /><br />
\t\t\t\t\t\t\t\t\t<input type=\"file\" name=\"upload\" id=\"upload\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\" style=\"margin:0px;\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"uploadData();\" class=\"btn btn-primary\"><span>{{ button_import }}</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-settings\">
\t\t\t\t\t\t<form action=\"{{ settings }}\" method=\"post\" enctype=\"multipart/form-data\" id=\"settings\" class=\"form-horizontal\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t{% if (settings_use_option_id) %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_id\" name=\"export_import_settings_use_option_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_id\" name=\"export_import_settings_use_option_id\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_option_id\">{{ entry_settings_use_option_id }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t{% if (settings_use_option_value_id) %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_value_id\" name=\"export_import_settings_use_option_value_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_option_value_id\" name=\"export_import_settings_use_option_value_id\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_option_value_id\">{{ entry_settings_use_option_value_id }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t{% if (settings_use_attribute_group_id) %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_group_id\" name=\"export_import_settings_use_attribute_group_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_group_id\" name=\"export_import_settings_use_attribute_group_id\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_attribute_group_id\">{{ entry_settings_use_attribute_group_id }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t{% if (settings_use_attribute_id) %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_id\" name=\"export_import_settings_use_attribute_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_attribute_id\" name=\"export_import_settings_use_attribute_id\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_attribute_id\">{{ entry_settings_use_attribute_id }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t{% if (settings_use_filter_group_id) %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_group_id\" name=\"export_import_settings_use_filter_group_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_group_id\" name=\"export_import_settings_use_filter_group_id\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_filter_group_id\">{{ entry_settings_use_filter_group_id }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t\t\t{% if (settings_use_filter_id) %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_id\" name=\"export_import_settings_use_filter_id\" checked=\"checked\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"export_import_settings_use_filter_id\" name=\"export_import_settings_use_filter_id\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"export_import_settings_use_filter_id\">{{ entry_settings_use_filter_id }}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<a onclick=\"updateSettings();\" class=\"btn btn-primary\"><span>{{ button_settings }}</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-support\">
\t\t\t\t\t\t<div id=\"export_import_notification\" class=\"alert alert-info export-import-dismissible\">
\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\"></i>
\t\t\t\t\t\t\t<div id=\"export_import_loading\"><img src=\"../extension/export_import/admin/view/image/export-import/loading.gif\" />{{ text_loading_notifications }}</div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">{{ entry_version }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ version_export_import }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">{{ entry_oc_version }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ version_opencart }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\">{{ entry_php_version }}</td>
\t\t\t\t\t\t\t\t\t<td>{{ version_php }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-nowrap\" style=\"vertical-align:top;\">{{ entry_license }}</td>
\t\t\t\t\t\t\t\t\t<td class=\"text-wrap\">{{ text_license }}</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

<script type=\"text/javascript\"><!--

function getNotifications() {
\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i><div id=\"export_import_loading\"><img src=\"../extension/export_import/admin/view/image/export-import/loading.gif\" />{{ text_loading_notifications }}</div><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\tsetTimeout(
\t\tfunction(){
\t\t\t\$.ajax({
\t\t\t\ttype: 'GET',
\t\t\t\turl: 'index.php?route=extension/export_import/tool/export_import{{ method_separator }}getNotifications&user_token={{ user_token }}',
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+json['error']+' <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">{{ text_retry }}</span><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t\t} else if (json['message']) {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+json['message']+'<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+'{{ error_no_news }}'+'<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\tfailure: function(){
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+'{{ error_notifications }} <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">{{ text_retry }}</span><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t},
\t\t\t\terror: function() {
\t\t\t\t\t\$('#export_import_notification').html('<i class=\"fa fa-info-circle\"></i>'+'{{ error_notifications }} <span style=\"cursor:pointer;font-weight:bold;text-decoration:underline;float:right;\" onclick=\"getNotifications();\">{{ text_retry }}</span><button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>');
\t\t\t\t}
\t\t\t});
\t\t},
\t\t500
\t);
}

function check_export_filter(export_type) {
\tif (export_type=='p') {
\t\t\$('#export_filter').show();
\t} else {
\t\t\$('#export_filter').hide();
\t}
}

function check_range_type(export_type) {
\tif ((export_type=='p') || (export_type=='c') || (export_type=='u')) {
\t\t\$('#range_type').show();
\t\t\$('#range_type_id').prop('checked',true);
\t\t\$('#range_type_page').prop('checked',false);
\t\t\$('.id').show();
\t\t\$('.page').hide();
\t} else {
\t\t\$('#range_type').hide();
\t}
}

\$(document).ready(function() {

\tcheck_export_filter(\$('input[name=export_type]:checked').val());
\tcheck_range_type(\$('input[name=export_type]:checked').val());

\t\$(\"#range_type_id\").click(function() {
\t\t\$(\".page\").hide();
\t\t\$(\".id\").show();
\t});

\t\$(\"#range_type_page\").click(function() {
\t\t\$(\".id\").hide();
\t\t\$(\".page\").show();
\t});

\t\$('input[name=export_type]').click(function() {
\t\tcheck_export_filter(\$(this).val());
\t\tcheck_range_type(\$(this).val());
\t});

\t\$('span.close').click(function() {
\t\t\$(this).parent().remove();
\t});

\t\$('a[data-bs-toggle=\"tab\"]').click(function() {
\t\t\$('#export_import_welcome').remove();
\t});

\t\$('a[href=\"#tab-support\"').click(function() {
\t\tif (\$(this).parent().attr('class')!='active') {
\t\t\tgetNotifications();
\t\t}
\t});

});

function checkFileSize(id) {
\t// See also http://stackoverflow.com/questions/3717793/javascript-file-upload-size-validation for details
\tvar input, file, file_size;

\tif (!window.FileReader) {
\t\t// The file API isn't yet supported on user's browser
\t\treturn true;
\t}

\tinput = document.getElementById(id);
\tif (!input) {
\t\t// couldn't find the file input element
\t\treturn true;
\t}
\telse if (!input.files) {
\t\t// browser doesn't seem to support the `files` property of file inputs
\t\treturn true;
\t}
\telse if (!input.files[0]) {
\t\t// no file has been selected for the upload
\t\talert( \"{{ error_select_file }}\" );
\t\treturn false;
\t}
\telse {
\t\tfile = input.files[0];
\t\tfile_size = file.size;
\t\t{% if ((post_max_size is defined) and (post_max_size)) %}
\t\t// check against PHP's post_max_size
\t\tpost_max_size = {{ post_max_size }};
\t\tif (file_size > post_max_size) {
\t\t\talert( \"{{ error_post_max_size }}\" );
\t\t\treturn false;
\t\t}
\t\t{% endif %}
\t\t{% if ((upload_max_filesize is defined) and (upload_max_filesize)) %}
\t\t// check against PHP's upload_max_filesize
\t\tupload_max_filesize = {{ upload_max_filesize }};
\t\tif (file_size > upload_max_filesize) {
\t\t\talert( \"{{ error_upload_max_filesize }}\" );
\t\t\treturn false;
\t\t}
\t\t{% endif %}
\t\treturn true;
\t}
}

function uploadData() {
\tif (checkFileSize('upload')) {
\t\t\$('#import').submit();
\t}
}

function isNumber(txt){ 
\tvar regExp=/^[\\d]{1,}\$/;
\treturn regExp.test(txt); 
}

count_product = {{ count_product }};

function updateCountProducts() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/export_import/tool/export_import{{ method_separator }}getCountProduct&user_token={{ user_token }}',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"input[name='categories[]'],input[name='manufacturers[]']\").serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['count']) {
\t\t\t\tcount_product = json['count'];
\t\t\t} else {
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

function validateExportForm(id) {
\tvar export_type = \$('input[name=export_type]:checked').val();
\tif ((export_type!='c') && (export_type!='p') && (export_type!='u')) {
\t\treturn true;
\t}

\tvar val = \$(\"input[name=range_type]:checked\").val();
\tvar min = \$(\"input[name=min]\").val();
\tvar max = \$(\"input[name=max]\").val();

\tif ((min=='') && (max=='')) {
\t\treturn true;
\t}

\tif (!isNumber(min) || !isNumber(max)) {
\t\talert(\"{{ error_param_not_number }}\");
\t\treturn false;
\t}

\tvar count_item;
\tswitch (export_type) {
\t\tcase 'p': count_item = count_product-1;  break;
\t\tcase 'c': count_item = {{ count_category-1 }}; break;
\t\tdefault:  count_item = {{ count_customer-1 }}; break;
\t}
\tvar batchNo = parseInt(count_item/parseInt(min))+1; // Maximum number of item-batches, namely, item number/min, and then rounded up (that is, integer plus 1)
\tvar minItemId;
\tswitch (export_type) {
\t\tcase 'p': minItemId = parseInt( {{ min_product_id }} );  break;
\t\tcase 'c': minItemId = parseInt( {{ min_category_id }} ); break;
\t\tdefault:  minItemId = parseInt( {{ min_customer_id }} ); break;
\t
\t}
\tvar maxItemId;
\tswitch (export_type) {
\t\tcase 'p': maxItemId = parseInt( {{ max_product_id }} );  break;
\t\tcase 'c': maxItemId = parseInt( {{ max_category_id }} ); break;
\t\tdefault:  maxItemId = parseInt( {{ max_customer_id }} ); break;
\t
\t}

\tif (val==\"page\") {  // Min for the batch size, Max for the batch number
\t\tif (parseInt(max) <= 0) {
\t\t\talert(\"{{ error_batch_number }}\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(max) > batchNo) {        
\t\t\talert(\"{{ error_page_no_data }}\"); 
\t\t\treturn false;
\t\t} else {
\t\t\t\$(\"input[name=max]\").val(parseInt(max)+1);
\t\t}
\t} else {
\t\tif (minItemId <= 0) {
\t\t\talert(\"{{ error_min_item_id }}\");
\t\t\treturn false;
\t\t}
\t\tif (parseInt(min) > maxItemId || parseInt(max) < minItemId || parseInt(min) > parseInt(max)) {  
\t\t\talert(\"{{ error_id_no_data }}\"); 
\t\t\treturn false;
\t\t}
\t}
\treturn true;
}

function downloadData() {
\tif (validateExportForm('export')) {
\t\t\$('#export').submit();
\t}
}

function updateSettings() {
\t\$('#settings').submit();
}

// Category
\$('#input-category').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category{{ method_separator }}autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-category').val('');

        \$('#import-category-' + item['value']).remove();

        html = '<tr id=\"category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"categories[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#import-category tbody').append(html);
        updateCountProducts();
    }
});

\$('#import-category').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
        updateCountProducts();
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function (request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer{{ method_separator }}autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function (json) {
                response(\$.map(json, function (item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function (item) {
        \$('#input-manufacturer').val('');

        \$('#import-manufacturer-' + item['value']).remove();

        html = '<tr id=\"manufacturer-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"manufacturers[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#import-manufacturer tbody').append(html);
        updateCountProducts();
    }
});

\$('#import-manufacturer').on('click', '.btn', function () {
    \$(this).parent().parent().remove();
        updateCountProducts();
});

var alert = export_import_alert;
//--></script>

</div>
{{ footer }}
", "extension/export_import/admin/view/template/tool/export_import.twig", "C:\\xampp\\htdocs\\zyannew\\extension\\export_import\\admin\\view\\template\\tool\\export_import.twig");
    }
}
