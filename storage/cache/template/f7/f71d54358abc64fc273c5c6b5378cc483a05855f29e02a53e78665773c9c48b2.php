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

/* catalog/view/template/account/account.twig */
class __TwigTemplate_57a0df9beb23829074794d2d3cd5a9d622fc50848fb19605c9f9253a47ec40a6 extends Template
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
<div id=\"account-account\" class=\"container\" style=\"padding-top: 100px;\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
  ";
        }
        // line 11
        yield "  <div style=\" width:100%; min-height: 600px;\" class=\"container\">



  <div style=\"margin:60px 0px\" class=\"row text-center\">

    <h1 style=\"text-align: center; margin: auto;\" class=\"big\">My Account</h1>


  </div>



  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">

      <?php echo \$content_top; ?>



      <div class=\"row ac_menu\">




        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"";
        // line 37
        yield ($context["address"] ?? null);
        yield "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon1.png\" /><br />
            <p class=\"atag\">Account
              Details</p>
            <p class=\"ac_description\">Review your personal information.</p> <br />
          </a>
        </div>


        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"";
        // line 47
        yield ($context["wishlist"] ?? null);
        yield "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon3.png\" /><br />
            <p class=\"atag\">Wishlist</p>
            <p class=\"ac_description\">Don't lose sight of the articles you like most, access your wishlist here.
            </p>
          </a>
        </div>


        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"";
        // line 57
        yield ($context["order"] ?? null);
        yield "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon2.png\" /><br />
            <p class=\"atag\">Order History</p>
            <p class=\"ac_description\">Check the history and current status of your orders.</p>

          </a>

        </div>

        
        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"";
        // line 68
        yield ($context["draft"] ?? null);
        yield "\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon5.png\" /><br />
            <p class=\"atag\">Saved Drafts</p>
            <p class=\"ac_description\">Check your saved drafts.</p>

          </a>

        </div>







      </div>






    </div>
  </div>

</div>
</div>
";
        // line 95
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
        return "catalog/view/template/account/account.twig";
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
        return array (  172 => 95,  142 => 68,  128 => 57,  115 => 47,  102 => 37,  74 => 11,  68 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-account\" class=\"container\" style=\"padding-top: 100px;\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
       {% endfor %}
  </ul>
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }}</div>
  {% endif %}
  <div style=\" width:100%; min-height: 600px;\" class=\"container\">



  <div style=\"margin:60px 0px\" class=\"row text-center\">

    <h1 style=\"text-align: center; margin: auto;\" class=\"big\">My Account</h1>


  </div>



  <div class=\"row\">
    <div id=\"content\" class=\"col-sm-12\">

      <?php echo \$content_top; ?>



      <div class=\"row ac_menu\">




        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"{{ address }}\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon1.png\" /><br />
            <p class=\"atag\">Account
              Details</p>
            <p class=\"ac_description\">Review your personal information.</p> <br />
          </a>
        </div>


        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"{{ wishlist }}\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon3.png\" /><br />
            <p class=\"atag\">Wishlist</p>
            <p class=\"ac_description\">Don't lose sight of the articles you like most, access your wishlist here.
            </p>
          </a>
        </div>


        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"{{ order }}\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon2.png\" /><br />
            <p class=\"atag\">Order History</p>
            <p class=\"ac_description\">Check the history and current status of your orders.</p>

          </a>

        </div>

        
        <div class=\"col-sm-3\">
          <a class=\"col-sm-12\" href=\"{{ draft }}\" style=\"display:block;\">
            <img width=\"120\" src=\"image/icons/Icon5.png\" /><br />
            <p class=\"atag\">Saved Drafts</p>
            <p class=\"ac_description\">Check your saved drafts.</p>

          </a>

        </div>







      </div>






    </div>
  </div>

</div>
</div>
{{ footer }}
", "catalog/view/template/account/account.twig", "C:\\xampp\\htdocs\\newzyan\\catalog\\view\\template\\account\\account.twig");
    }
}
