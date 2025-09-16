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

/* catalog/view/template/product/search.twig */
class __TwigTemplate_e68299a1f5e8e41dcf6d26935c4fd8e7eb74a9151edf8521d1824f772d0c4c44 extends Template
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
            ";
        // line 14
        if (($context["search"] ?? null)) {
            // line 15
            yield "                <h1 class=\"title-page\">Search Results for \"";
            yield ($context["search"] ?? null);
            yield "\"</h1>
                <p class=\"h6 text-muted\">";
            // line 16
            yield ($context["results"] ?? null);
            yield "</p>
            ";
        } else {
            // line 18
            yield "                <h1 class=\"title-page\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
            ";
        }
        // line 20
        yield "        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Search Results -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        ";
        // line 28
        if (($context["search"] ?? null)) {
            // line 29
            yield "            <!-- Search Filters -->
            <div class=\"search-filters mb-4\">
                <form method=\"get\" action=\"index.php\" class=\"row g-3\">
                    <input type=\"hidden\" name=\"route\" value=\"product/search\">
                    <input type=\"hidden\" name=\"language\" value=\"";
            // line 33
            yield ($context["language"] ?? null);
            yield "\">
                    
                    <div class=\"col-md-4\">
                        <input type=\"text\" class=\"form-control\" name=\"search\" value=\"";
            // line 36
            yield ($context["search"] ?? null);
            yield "\" placeholder=\"Search products...\">
                    </div>
                    
                    ";
            // line 39
            if (($context["categories"] ?? null)) {
                // line 40
                yield "                    <div class=\"col-md-3\">
                        <select name=\"category_id\" class=\"form-select\">
                            <option value=\"0\">";
                // line 42
                yield ($context["text_category"] ?? null);
                yield "</option>
                            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 44
                    yield "                                <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 44);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 44) == ($context["category_id"] ?? null))) {
                        yield "selected";
                    }
                    yield ">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 44);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "                        </select>
                    </div>
                    ";
            }
            // line 49
            yield "                    
                    <div class=\"col-md-2\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"sub_category\" ";
            // line 52
            if (($context["sub_category"] ?? null)) {
                yield "checked";
            }
            yield ">
                            <label class=\"form-check-label\" for=\"sub_category\">
                                ";
            // line 54
            yield ($context["text_sub_category"] ?? null);
            yield "
                            </label>
                        </div>
                    </div>
                    
                    <div class=\"col-md-2\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" ";
            // line 61
            if (($context["description"] ?? null)) {
                yield "checked";
            }
            yield ">
                            <label class=\"form-check-label\" for=\"description\">
                                ";
            // line 63
            yield ($context["text_description"] ?? null);
            yield "
                            </label>
                        </div>
                    </div>
                    
                    <div class=\"col-md-1\">
                        <button type=\"submit\" class=\"tf-btn btn-fill animate-btn w-100\">
                            <i class=\"icon icon-magnifying-glass\"></i>
                        </button>
                    </div>
                </form>
            </div>
        ";
        }
        // line 76
        yield "
        <!-- Products Grid -->
        ";
        // line 78
        if (($context["products"] ?? null)) {
            // line 79
            yield "            <div class=\"tf-grid-layout tf-col-4 style-1\">
                ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 81
                yield "                    ";
                yield $context["product"];
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "            </div>
            
            <!-- Pagination -->
            <div class=\"tf-pagination-wrap view-more-button\">
                ";
            // line 87
            yield ($context["pagination"] ?? null);
            yield "
            </div>
        ";
        } else {
            // line 90
            yield "            <div class=\"text-center py-5\">
                ";
            // line 91
            if (($context["search"] ?? null)) {
                // line 92
                yield "                    <div class=\"empty-state\">
                        <i class=\"icon icon-magnifying-glass mb-3\" style=\"font-size: 4rem; color: #ccc;\"></i>
                        <h3 class=\"mb-3\">";
                // line 94
                yield ($context["text_no_results"] ?? null);
                yield "</h3>
                        <p class=\"text-muted mb-4\">We couldn't find any products matching \"";
                // line 95
                yield ($context["search"] ?? null);
                yield "\"</p>
                        <a href=\"index.php?route=common/home&language=";
                // line 96
                yield ($context["language"] ?? null);
                yield "\" class=\"tf-btn btn-fill animate-btn\">
                            Continue Shopping
                        </a>
                    </div>
                ";
            } else {
                // line 101
                yield "                    <div class=\"empty-state\">
                        <i class=\"icon icon-magnifying-glass mb-3\" style=\"font-size: 4rem; color: #ccc;\"></i>
                        <h3 class=\"mb-3\">Start Your Search</h3>
                        <p class=\"text-muted mb-4\">Enter a search term to find products</p>
                    </div>
                ";
            }
            // line 107
            yield "            </div>
        ";
        }
        // line 109
        yield "        
        ";
        // line 110
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>
</section>
<!-- /Search Results -->
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
    url = 'index.php?route=product/search&language=";
        // line 116
        yield ($context["language"] ?? null);
        yield "';

    var search = \$('#input-search').val();

    if (search) {
        url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#input-category').prop('value');

    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#input-sub-category:checked').prop('value');

    if (sub_category) {
        url += '&sub_category=1';
    }

    var description = \$('#input-description:checked').prop('value');

    if (description) {
        url += '&description=1';
    }

    location = url;
});

\$('#input-search').bind('keydown', function(e) {
    if (e.keyCode == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#input-category').on('change', function() {
    \$('#input-sub-category').prop('disabled', (this.value == '0' ? true : false));
});

\$('#input-category').trigger('change');
//--></script>
";
        // line 157
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
        return "catalog/view/template/product/search.twig";
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
        return array (  327 => 157,  283 => 116,  274 => 110,  271 => 109,  267 => 107,  259 => 101,  251 => 96,  247 => 95,  243 => 94,  239 => 92,  237 => 91,  234 => 90,  228 => 87,  222 => 83,  213 => 81,  209 => 80,  206 => 79,  204 => 78,  200 => 76,  184 => 63,  177 => 61,  167 => 54,  160 => 52,  155 => 49,  150 => 46,  135 => 44,  131 => 43,  127 => 42,  123 => 40,  121 => 39,  115 => 36,  109 => 33,  103 => 29,  101 => 28,  91 => 20,  85 => 18,  80 => 16,  75 => 15,  73 => 14,  70 => 13,  59 => 10,  56 => 9,  52 => 8,  42 => 1,);
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
            {% if search %}
                <h1 class=\"title-page\">Search Results for \"{{ search }}\"</h1>
                <p class=\"h6 text-muted\">{{ results }}</p>
            {% else %}
                <h1 class=\"title-page\">{{ heading_title }}</h1>
            {% endif %}
        </div>
    </div>
</section>
<!-- /Page Title -->

<!-- Search Results -->
<section class=\"flat-spacing-3\">
    <div class=\"container\">
        {% if search %}
            <!-- Search Filters -->
            <div class=\"search-filters mb-4\">
                <form method=\"get\" action=\"index.php\" class=\"row g-3\">
                    <input type=\"hidden\" name=\"route\" value=\"product/search\">
                    <input type=\"hidden\" name=\"language\" value=\"{{ language }}\">
                    
                    <div class=\"col-md-4\">
                        <input type=\"text\" class=\"form-control\" name=\"search\" value=\"{{ search }}\" placeholder=\"Search products...\">
                    </div>
                    
                    {% if categories %}
                    <div class=\"col-md-3\">
                        <select name=\"category_id\" class=\"form-select\">
                            <option value=\"0\">{{ text_category }}</option>
                            {% for category in categories %}
                                <option value=\"{{ category.category_id }}\" {% if category.category_id == category_id %}selected{% endif %}>{{ category.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    {% endif %}
                    
                    <div class=\"col-md-2\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"sub_category\" {% if sub_category %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"sub_category\">
                                {{ text_sub_category }}
                            </label>
                        </div>
                    </div>
                    
                    <div class=\"col-md-2\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" {% if description %}checked{% endif %}>
                            <label class=\"form-check-label\" for=\"description\">
                                {{ text_description }}
                            </label>
                        </div>
                    </div>
                    
                    <div class=\"col-md-1\">
                        <button type=\"submit\" class=\"tf-btn btn-fill animate-btn w-100\">
                            <i class=\"icon icon-magnifying-glass\"></i>
                        </button>
                    </div>
                </form>
            </div>
        {% endif %}

        <!-- Products Grid -->
        {% if products %}
            <div class=\"tf-grid-layout tf-col-4 style-1\">
                {% for product in products %}
                    {{ product }}
                {% endfor %}
            </div>
            
            <!-- Pagination -->
            <div class=\"tf-pagination-wrap view-more-button\">
                {{ pagination }}
            </div>
        {% else %}
            <div class=\"text-center py-5\">
                {% if search %}
                    <div class=\"empty-state\">
                        <i class=\"icon icon-magnifying-glass mb-3\" style=\"font-size: 4rem; color: #ccc;\"></i>
                        <h3 class=\"mb-3\">{{ text_no_results }}</h3>
                        <p class=\"text-muted mb-4\">We couldn't find any products matching \"{{ search }}\"</p>
                        <a href=\"index.php?route=common/home&language={{ language }}\" class=\"tf-btn btn-fill animate-btn\">
                            Continue Shopping
                        </a>
                    </div>
                {% else %}
                    <div class=\"empty-state\">
                        <i class=\"icon icon-magnifying-glass mb-3\" style=\"font-size: 4rem; color: #ccc;\"></i>
                        <h3 class=\"mb-3\">Start Your Search</h3>
                        <p class=\"text-muted mb-4\">Enter a search term to find products</p>
                    </div>
                {% endif %}
            </div>
        {% endif %}
        
        {{ content_bottom }}
    </div>
</section>
<!-- /Search Results -->
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
    url = 'index.php?route=product/search&language={{ language }}';

    var search = \$('#input-search').val();

    if (search) {
        url += '&search=' + encodeURIComponent(search);
    }

    var category_id = \$('#input-category').prop('value');

    if (category_id > 0) {
        url += '&category_id=' + encodeURIComponent(category_id);
    }

    var sub_category = \$('#input-sub-category:checked').prop('value');

    if (sub_category) {
        url += '&sub_category=1';
    }

    var description = \$('#input-description:checked').prop('value');

    if (description) {
        url += '&description=1';
    }

    location = url;
});

\$('#input-search').bind('keydown', function(e) {
    if (e.keyCode == 13) {
        \$('#button-search').trigger('click');
    }
});

\$('#input-category').on('change', function() {
    \$('#input-sub-category').prop('disabled', (this.value == '0' ? true : false));
});

\$('#input-category').trigger('change');
//--></script>
{{ footer }}
", "catalog/view/template/product/search.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\product\\search.twig");
    }
}
