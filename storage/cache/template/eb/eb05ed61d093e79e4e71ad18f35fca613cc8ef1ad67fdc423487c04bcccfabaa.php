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

/* catalog/view/template/common/locations.twig */
class __TwigTemplate_36576cf4cd29ae927272394b5729f0d57bdf4fb6638e3b0896808f79e5db0885 extends Template
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

<style>
\t.location-card {
\t\tbackground-color: white;
\t\twidth: 400px;
\t\ttext-align: left;
\t\tborder: thin solid #ccc;
\t\tpadding: 10px;
\t\tmargin: 30px 10px 10px;
\t\tborder-radius: 8px;
\t}
\t.location-card {
\t\tdisplay: none;

\t}
\t.btn-hero {
 
    font-size: 15px;
    line-height: 1;
    padding: 14px 30px;
    display: inline-block;
    border-radius: 50px;
    background-color: #423c9e;
    margin-top: 38px;
\tcolor: #fff !important;
}
</style>

<section style=\"min-height:50vh\" class=\"about-us section-padding pb-0\">

\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t<h2>Store Directory</h2>
\t\t\t\t<br/>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"width:100%\">
\t\t\t\t<div class=\"col-10 offset-1 col-sm-4 offset-sm-4 text-center\">
\t\t\t\t\t<select name=\"country_id\" id=\"input-country\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t--- Please Select ---
\t\t\t\t\t\t</option>
\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bannerstop"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bs"]) {
            // line 46
            yield "\t\t\t\t\t\t\t<option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["bs"], "title", [], "any", false, false, false, 46);
            yield "\">
\t\t\t\t\t\t\t\t";
            // line 47
            yield CoreExtension::getAttribute($this->env, $this->source, $context["bs"], "title", [], "any", false, false, false, 47);
            yield "
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "\t\t\t\t\t</select>
\t\t\t\t\t<button id=\"search\" class=\"tf-btn animate-btn type-small-2 text-white mt-3\">Search</button>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["bannerstop"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["bs"]) {
            // line 58
            yield "\t\t\t\t<div class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["bs"], "title", [], "any", false, false, false, 58);
            yield " location-card\">
\t\t\t\t\t";
            // line 59
            $context["bs_link"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["bs"], "link", [], "any", false, false, false, 59), "/");
            // line 60
            yield "
\t\t\t\t\t<h4>";
            // line 61
            yield (($_v0 = ($context["bs_link"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[0] ?? null) : null);
            yield "</h4>

\t\t\t\t\t<p style=\"margin-top:10px\">
\t\t\t\t\t\t<b>Location:
\t\t\t\t\t\t\t";
            // line 65
            yield (($_v1 = ($context["bs_link"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[3] ?? null) : null);
            yield "</b>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<b>Address:
\t\t\t\t\t\t</b>
\t\t\t\t\t\t";
            // line 69
            yield (($_v2 = ($context["bs_link"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[1] ?? null) : null);
            yield "

\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<b>Phone Number:
\t\t\t\t\t\t</b>
\t\t\t\t\t\t";
            // line 74
            yield (($_v3 = ($context["bs_link"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[2] ?? null) : null);
            yield "

\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<b>Time:
\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t";
            // line 79
            yield (($_v4 = ($context["bs_link"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[4] ?? null) : null);
            yield "
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bs'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "\t\t</div>


\t</div>
</section>
<script>
\t\$(document).ready(function () {
\$(\"#search\").click(function () {
\$(\".location-card\").css('display', 'none');
\$(\".location-card\").each(function () {
var className = \$('#input-country').find(\":selected\").val();

if (\$(this).hasClass(className)) {
\$(this).css('display', 'inline');
}
})
})

})
\$(document).ready(function () { // Remove duplicates
var seen = {};
\$('select option').each(function () {
var txt = \$(this).text();
if (seen[txt]) {
\$(this).remove();
} else {
seen[txt] = true;
}
});

// Sort remaining options
var options = \$('select option');
options.sort(function (a, b) {
var textA = \$(a).text().toUpperCase(); // case-insensitive comparison
var textB = \$(b).text().toUpperCase(); // case-insensitive comparison
return(textA < textB) ? -1 : (textA > textB) ? 1 : 0;
});

\$('select').empty().append(options);
});
</script>

";
        // line 125
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
        return "catalog/view/template/common/locations.twig";
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
        return array (  214 => 125,  170 => 83,  160 => 79,  152 => 74,  144 => 69,  137 => 65,  130 => 61,  127 => 60,  125 => 59,  120 => 58,  116 => 57,  107 => 50,  98 => 47,  93 => 46,  89 => 45,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<style>
\t.location-card {
\t\tbackground-color: white;
\t\twidth: 400px;
\t\ttext-align: left;
\t\tborder: thin solid #ccc;
\t\tpadding: 10px;
\t\tmargin: 30px 10px 10px;
\t\tborder-radius: 8px;
\t}
\t.location-card {
\t\tdisplay: none;

\t}
\t.btn-hero {
 
    font-size: 15px;
    line-height: 1;
    padding: 14px 30px;
    display: inline-block;
    border-radius: 50px;
    background-color: #423c9e;
    margin-top: 38px;
\tcolor: #fff !important;
}
</style>

<section style=\"min-height:50vh\" class=\"about-us section-padding pb-0\">

\t<div class=\"container\">

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12 text-center\">
\t\t\t\t<h2>Store Directory</h2>
\t\t\t\t<br/>
\t\t\t</div>
\t\t\t<div class=\"row\" style=\"width:100%\">
\t\t\t\t<div class=\"col-10 offset-1 col-sm-4 offset-sm-4 text-center\">
\t\t\t\t\t<select name=\"country_id\" id=\"input-country\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">
\t\t\t\t\t\t\t--- Please Select ---
\t\t\t\t\t\t</option>
\t\t\t\t\t\t{% for bs in bannerstop %}
\t\t\t\t\t\t\t<option value=\"{{ bs.title }}\">
\t\t\t\t\t\t\t\t{{ bs.title }}
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t\t<button id=\"search\" class=\"tf-btn animate-btn type-small-2 text-white mt-3\">Search</button>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t{% for bs in bannerstop %}
\t\t\t\t<div class=\"{{ bs.title }} location-card\">
\t\t\t\t\t{% set bs_link = bs.link|split('/') %}

\t\t\t\t\t<h4>{{ bs_link[0] }}</h4>

\t\t\t\t\t<p style=\"margin-top:10px\">
\t\t\t\t\t\t<b>Location:
\t\t\t\t\t\t\t{{ bs_link[3] }}</b>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<b>Address:
\t\t\t\t\t\t</b>
\t\t\t\t\t\t{{ bs_link[1] }}

\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<b>Phone Number:
\t\t\t\t\t\t</b>
\t\t\t\t\t\t{{ bs_link[2] }}

\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<b>Time:
\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t{{ bs_link[4] }}
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>


\t</div>
</section>
<script>
\t\$(document).ready(function () {
\$(\"#search\").click(function () {
\$(\".location-card\").css('display', 'none');
\$(\".location-card\").each(function () {
var className = \$('#input-country').find(\":selected\").val();

if (\$(this).hasClass(className)) {
\$(this).css('display', 'inline');
}
})
})

})
\$(document).ready(function () { // Remove duplicates
var seen = {};
\$('select option').each(function () {
var txt = \$(this).text();
if (seen[txt]) {
\$(this).remove();
} else {
seen[txt] = true;
}
});

// Sort remaining options
var options = \$('select option');
options.sort(function (a, b) {
var textA = \$(a).text().toUpperCase(); // case-insensitive comparison
var textB = \$(b).text().toUpperCase(); // case-insensitive comparison
return(textA < textB) ? -1 : (textA > textB) ? 1 : 0;
});

\$('select').empty().append(options);
});
</script>

{{ footer }}


 

", "catalog/view/template/common/locations.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\locations.twig");
    }
}
