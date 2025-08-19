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

/* catalog/view/template/common/cookie.twig */
class __TwigTemplate_933cdea8ce23c620b22b511dfce6c371fcd1a8cd9aeebae036ea61cff9eea360 extends Template
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
        yield "<div id=\"cookie\">
  <div class=\"container\">
    <div class=\"row mt-2\">
      <div class=\"col-12 p-2 text-center\"><p>";
        // line 4
        yield ($context["text_cookie"] ?? null);
        yield "</p>
        <button type=\"button\" value=\"";
        // line 5
        yield ($context["agree"] ?? null);
        yield "\" class=\"btn bg-primary btn-block text-white\">";
        yield ($context["button_agree"] ?? null);
        yield "</button>&nbsp;&nbsp;&nbsp;<button type=\"button\" value=\"";
        yield ($context["disagree"] ?? null);
        yield "\" class=\"btn btn-light btn-block\">";
        yield ($context["button_disagree"] ?? null);
        yield "</button>
      </div>
    </div>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/cookie.twig";
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
        return array (  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"cookie\">
  <div class=\"container\">
    <div class=\"row mt-2\">
      <div class=\"col-12 p-2 text-center\"><p>{{ text_cookie }}</p>
        <button type=\"button\" value=\"{{ agree }}\" class=\"btn bg-primary btn-block text-white\">{{ button_agree }}</button>&nbsp;&nbsp;&nbsp;<button type=\"button\" value=\"{{ disagree }}\" class=\"btn btn-light btn-block\">{{ button_disagree }}</button>
      </div>
    </div>
  </div>
</div>", "catalog/view/template/common/cookie.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\cookie.twig");
    }
}
