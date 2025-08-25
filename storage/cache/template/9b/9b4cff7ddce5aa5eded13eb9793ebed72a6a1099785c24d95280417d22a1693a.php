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

/* catalog/view/template/common/pagination.twig */
class __TwigTemplate_579d6bf1d554441e796f7dcadac7bbf6fe3e98dee985e6bde66a4bcfbf20b65f extends Template
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
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["links"] ?? null)) > 0)) {
            // line 2
            yield "<div class=\"wd-full wg-pagination m-0 justify-content-center\">
    ";
            // line 3
            if (($context["first"] ?? null)) {
                // line 4
                yield "        <a href=\"";
                yield ($context["first"] ?? null);
                yield "\" class=\"pagination-item h6 direct\"><i class=\"icon icon-caret-left\"></i></a>
    ";
            }
            // line 6
            yield "    ";
            if (($context["prev"] ?? null)) {
                // line 7
                yield "        <a href=\"";
                yield ($context["prev"] ?? null);
                yield "\" class=\"pagination-item h6 direct\"><i class=\"icon icon-caret-left\"></i></a>
    ";
            }
            // line 9
            yield "    
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 11
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 11) == ($context["page"] ?? null))) {
                    // line 12
                    yield "            <span class=\"pagination-item h6 active\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 12);
                    yield "</span>
        ";
                } else {
                    // line 14
                    yield "            <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 14);
                    yield "\" class=\"pagination-item h6\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 14);
                    yield "</a>
        ";
                }
                // line 16
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "    
    ";
            // line 18
            if (($context["next"] ?? null)) {
                // line 19
                yield "        <a href=\"";
                yield ($context["next"] ?? null);
                yield "\" class=\"pagination-item h6 direct\"><i class=\"icon icon-caret-right\"></i></a>
    ";
            }
            // line 21
            yield "    ";
            if (($context["last"] ?? null)) {
                // line 22
                yield "        <a href=\"";
                yield ($context["last"] ?? null);
                yield "\" class=\"pagination-item h6 direct\"><i class=\"icon icon-caret-right\"></i></a>
    ";
            }
            // line 24
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/pagination.twig";
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
        return array (  114 => 24,  108 => 22,  105 => 21,  99 => 19,  97 => 18,  94 => 17,  88 => 16,  80 => 14,  74 => 12,  71 => 11,  67 => 10,  64 => 9,  58 => 7,  55 => 6,  49 => 4,  47 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if links|length > 0 %}
<div class=\"wd-full wg-pagination m-0 justify-content-center\">
    {% if first %}
        <a href=\"{{ first }}\" class=\"pagination-item h6 direct\"><i class=\"icon icon-caret-left\"></i></a>
    {% endif %}
    {% if prev %}
        <a href=\"{{ prev }}\" class=\"pagination-item h6 direct\"><i class=\"icon icon-caret-left\"></i></a>
    {% endif %}
    
    {% for link in links %}
        {% if link.page == page %}
            <span class=\"pagination-item h6 active\">{{ link.page }}</span>
        {% else %}
            <a href=\"{{ link.href }}\" class=\"pagination-item h6\">{{ link.page }}</a>
        {% endif %}
    {% endfor %}
    
    {% if next %}
        <a href=\"{{ next }}\" class=\"pagination-item h6 direct\"><i class=\"icon icon-caret-right\"></i></a>
    {% endif %}
    {% if last %}
        <a href=\"{{ last }}\" class=\"pagination-item h6 direct\"><i class=\"icon icon-caret-right\"></i></a>
    {% endif %}
</div>
{% endif %}", "catalog/view/template/common/pagination.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\pagination.twig");
    }
}
