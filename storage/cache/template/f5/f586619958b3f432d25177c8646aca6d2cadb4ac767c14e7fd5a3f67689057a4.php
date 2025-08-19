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

/* catalog/view/template/common/catalogue.twig */
class __TwigTemplate_cb6f63df5405b2f8817e2742eab4c2434f8dd4f4f9be92690ca46e71f3d0f602 extends Template
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
.btn-hero:hover {
    color: #fff;
    background-color: #222222;
}
\t.btn-hero {
    color: #fff;
    font-size: 15px;
    line-height: 1;
    padding: 14px 30px;
    display: inline-block;
    border-radius: 50px;
    background-color: #423c9e;
    margin-top: 38px;
}
</style>
<!-- Page Title -->

<!-- /Page Title -->
<section class=\"\">
\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat1.png\" alt=\"\" width=\"100%\" height=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat1.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"9765d9\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Zayn Lite\" href=\"assets/images/cat/cat1.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"2pg5ib\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat2.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat2.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"e6q32zf\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Tennis Connection\" href=\"assets/images/cat/cat2.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"arvfrhq\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat3.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat3.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"y79tcn\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Cross Pendant\" href=\"assets/images/cat/cat3.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"t67ej8\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat4.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat4.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"l505sh\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Eternity and Anniversary Rings\" href=\"assets/images/cat/cat4.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"pkb8v4\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat5.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat5.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"e1ip5g6\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Hoop Earrings\" href=\"assets/images/cat/cat5.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"hp6nv\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat6.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat6.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"yzr8nf\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Stackable Rings\" href=\"assets/images/cat/cat6.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"26qpvo\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat7.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat7.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"q1f25m\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Bridal Rings\" href=\"assets/images/cat/cat7.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"wm9bvc\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat8.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat8.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"29ce7k\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t    <a target=\"_blank\" download=\"Big Rings\" href=\"assets/images/cat/cat8.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"62vio8\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
</section>

";
        // line 152
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
        return "catalog/view/template/common/catalogue.twig";
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
        return array (  196 => 152,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<style>
.btn-hero:hover {
    color: #fff;
    background-color: #222222;
}
\t.btn-hero {
    color: #fff;
    font-size: 15px;
    line-height: 1;
    padding: 14px 30px;
    display: inline-block;
    border-radius: 50px;
    background-color: #423c9e;
    margin-top: 38px;
}
</style>
<!-- Page Title -->

<!-- /Page Title -->
<section class=\"\">
\t<div class=\"container\">
\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat1.png\" alt=\"\" width=\"100%\" height=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat1.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"9765d9\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Zayn Lite\" href=\"assets/images/cat/cat1.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"2pg5ib\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat2.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat2.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"e6q32zf\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Tennis Connection\" href=\"assets/images/cat/cat2.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"arvfrhq\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat3.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat3.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"y79tcn\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Cross Pendant\" href=\"assets/images/cat/cat3.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"t67ej8\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat4.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat4.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"l505sh\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Eternity and Anniversary Rings\" href=\"assets/images/cat/cat4.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"pkb8v4\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat5.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat5.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"e1ip5g6\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Hoop Earrings\" href=\"assets/images/cat/cat5.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"hp6nv\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat6.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat6.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"yzr8nf\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Stackable Rings\" href=\"assets/images/cat/cat6.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"26qpvo\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat7.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat7.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"q1f25m\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a target=\"_blank\" download=\"Bridal Rings\" href=\"assets/images/cat/cat7.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"wm9bvc\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-3 text-center\" style=\"padding:15px\">
\t\t\t\t\t\t<div style=\"border:thin solid #f1f1f1; padding:5px;\" class=\"box-line\">
\t\t\t\t\t\t\t<img src=\"assets/images/cat8.png\" alt=\"\" width=\"100%\" class=\"img-responsive\">

\t\t\t\t\t\t\t<a target=\"_blank\" href=\"assets/images/cat/cat8.pdf\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"29ce7k\">View</button>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t    <a target=\"_blank\" download=\"Big Rings\" href=\"assets/images/cat/cat8.pdf\">

\t\t\t\t\t\t\t\t<button class=\"btn btn-hero brochure_btn\" fdprocessedid=\"62vio8\">Download</button>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
</section>

{{ footer }}
", "catalog/view/template/common/catalogue.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\catalogue.twig");
    }
}
