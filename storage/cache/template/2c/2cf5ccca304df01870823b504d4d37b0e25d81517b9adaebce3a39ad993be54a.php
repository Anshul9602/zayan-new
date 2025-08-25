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

/* catalog/view/template/information/information.twig */
class __TwigTemplate_51834d7838e5ba95560405b4e1b03879ba533fc53dbc5ff8a9b8a1fdca5eb8c6 extends Template
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
  p {
   line-height: 2.5;
   font-size: 18px;
  }
  h2 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 10px;
  }
  
</style>
<!-- Page Title -->
<section class=\"s-page-title\">
            <div class=\"container\">
                <div class=\"content\">
                    <h1 class=\"title-page\">";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                </div>
            </div>
        </section>
        <section class=\"\">
          <br />
          <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-10 offset-1\">
                  <div class=\"left-col mb-lg-0\">
                    ";
        // line 28
        yield ($context["description"] ?? null);
        yield "
                  </div>
                </div>
              </div>
            </div>
          </section>


       <br />
       
";
        // line 38
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/information/information.twig";
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
        return array (  88 => 38,  75 => 28,  62 => 18,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<style>
  p {
   line-height: 2.5;
   font-size: 18px;
  }
  h2 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 10px;
  }
  
</style>
<!-- Page Title -->
<section class=\"s-page-title\">
            <div class=\"container\">
                <div class=\"content\">
                    <h1 class=\"title-page\">{{ heading_title }}</h1>
                </div>
            </div>
        </section>
        <section class=\"\">
          <br />
          <div class=\"container\">
              <div class=\"row\">
                <div class=\"col-10 offset-1\">
                  <div class=\"left-col mb-lg-0\">
                    {{ description }}
                  </div>
                </div>
              </div>
            </div>
          </section>


       <br />
       
{{ footer }}", "catalog/view/template/information/information.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\information\\information.twig");
    }
}
