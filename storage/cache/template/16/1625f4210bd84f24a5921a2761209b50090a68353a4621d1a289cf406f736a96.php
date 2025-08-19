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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_64d361b88b3186f3fd8fdda932601b3e102f1aae67dcf52e10b3ed49b822ec99 extends Template
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
        yield "<a class=\"nav-icon-item link\" href=\"#search\" data-bs-toggle=\"modal\">
                  <i class=\"icon icon-magnifying-glass\"></i>
                  </a>
\t\t\t\t
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/search.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<a class=\"nav-icon-item link\" href=\"#search\" data-bs-toggle=\"modal\">
                  <i class=\"icon icon-magnifying-glass\"></i>
                  </a>
\t\t\t\t
", "catalog/view/template/common/search.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\search.twig");
    }
}
