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

/* catalog/view/template/common/education.twig */
class __TwigTemplate_9c344b322d7e59c69fd8bd661fab821f7770f9120b447da5a70fa9d64a8614e5 extends Template
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
\theader {
\t\tposition: fixed;
\t\ttop: 0;
\t\tleft: 0;
\t\tright: 0;
\t\tz-index: 1000;
\t\tbackground: #fff;
\t}
</style>

<!-- Page Title -->
<section class=\"page-title-image \" style=\"margin-top: 100px;\">
\t<div class=\"page_image overflow-hidden\">
\t\t<img class=\"lazyload ani-zoom\" src=\"assets/aboutbg.jpg\" data-src=\"assets/aboutbg.jpg\" alt=\"Banner\">
\t</div>
\t<div class=\"page_content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"content\">
\t\t\t\t<h1 class=\"heading fw-bold  text-center\" style=\"color:#423c9e\">
\t\t\t\t\tEducation

\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>
\t</div>
</section>

<style>
\t.banner-text2 {
\t\tcolor: #423c9e;
\t\tfont-size: 22px;
\t}
\t@media only screen and(max-width: 768px) {
\t\t.banner-text2 {
\t\t\tcolor: #423c9e;
\t\t\tfont-size: 17px !important;
\t\t}
\t}
\t.leaf {
\t\twidth: 160px;
\t\tposition: absolute;
\t\tz-index: 9999;
\t\tright: -50px;
\t\ttop: -50px;
\t\ttransform: rotate(20deg);
\t}

\t.demo-msg {
\t\tdisplay: none !important;
\t}
\t.banner-statistics {
    position: relative;
}
.banner-text2 {
    padding-bottom: 34px;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
}
.btn-text {
    font-size: 16px;
    position: relative;
    pointer-events: visible;
    text-transform: capitalize;
}
.btn-text:before {
    bottom: -4px;
    left: 0;
    width: 100%;
    height: 2px;
    content: \"\";
    position: absolute;
    background-color: #222222;
}
.btn {
    font-size: 18px;
    color: #222222;
    line-height: 1;
}
.banner-statistics a,
.banner-statistics img{
    width: 100%;
}
\t.banner-content {
    right: 55px;
    top: 50%;
    position: absolute;
    pointer-events: none;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}
</style>
<div class=\"banner-statistics-area ptb-30\">
\t<div class=\"container ptb-30\">

\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-12\">

\t\t\t\t<div class=\"row row-20 mt-5\">


\t\t\t\t\t<div class=\"col-sm-6 mt-3\">
\t\t\t\t\t\t<figure class=\"banner-statistics mt-20\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g3\">
\t\t\t\t\t\t\t\t<img src=\"assets/imgb2.JPG\" alt=\"product banner\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"banner-content text-center\">
\t\t\t\t\t\t\t\t<h2 class=\"banner-text2\">Metal
\t\t\t\t\t\t\t\t\t<br>Education</h2>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g3\" class=\"btn btn-text\">Learn More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 mt-3\">
\t\t\t\t\t\t<figure class=\"banner-statistics mt-20\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g5\">
\t\t\t\t\t\t\t\t<img src=\"assets/imgb1.jpg\" alt=\"product banner\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"banner-content text-center\">

\t\t\t\t\t\t\t\t<h2 class=\"banner-text2\">Conflict Free
\t\t\t\t\t\t\t\t\t<br>Diamonds</h2>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g1\" class=\"btn btn-text\">Learn more</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-sm-6 mt-3\">
\t\t\t\t\t\t<figure class=\"banner-statistics mt-20\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g4\">
\t\t\t\t\t\t\t\t<img src=\"assets/imgb3.JPG\" alt=\"product banner\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"banner-content text-center\">
\t\t\t\t\t\t\t\t<h2 class=\"banner-text2\">Gemstone<br>Education</h2>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g4\" class=\"btn btn-text\">Learn More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-sm-6 mt-3\">
\t\t\t\t\t\t<figure class=\"banner-statistics mt-20\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g2\">
\t\t\t\t\t\t\t\t<img src=\"assets/imgb4.jpg\" alt=\"product banner\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"banner-content text-center\">

\t\t\t\t\t\t\t\t<h2 class=\"banner-text2\">Diamond
\t\t\t\t\t\t\t\t\t<br>Education</h2>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g2\" class=\"btn btn-text\">Learn more</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>


\t\t\t\t\t</div>

\t\t\t\t</div>


\t\t\t</div><br/>

\t\t</div>


\t</div>




";
        // line 176
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
        return "catalog/view/template/common/education.twig";
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
        return array (  220 => 176,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<style>
\theader {
\t\tposition: fixed;
\t\ttop: 0;
\t\tleft: 0;
\t\tright: 0;
\t\tz-index: 1000;
\t\tbackground: #fff;
\t}
</style>

<!-- Page Title -->
<section class=\"page-title-image \" style=\"margin-top: 100px;\">
\t<div class=\"page_image overflow-hidden\">
\t\t<img class=\"lazyload ani-zoom\" src=\"assets/aboutbg.jpg\" data-src=\"assets/aboutbg.jpg\" alt=\"Banner\">
\t</div>
\t<div class=\"page_content\">
\t\t<div class=\"container\">
\t\t\t<div class=\"content\">
\t\t\t\t<h1 class=\"heading fw-bold  text-center\" style=\"color:#423c9e\">
\t\t\t\t\tEducation

\t\t\t\t</h1>

\t\t\t</div>
\t\t</div>
\t</div>
</section>

<style>
\t.banner-text2 {
\t\tcolor: #423c9e;
\t\tfont-size: 22px;
\t}
\t@media only screen and(max-width: 768px) {
\t\t.banner-text2 {
\t\t\tcolor: #423c9e;
\t\t\tfont-size: 17px !important;
\t\t}
\t}
\t.leaf {
\t\twidth: 160px;
\t\tposition: absolute;
\t\tz-index: 9999;
\t\tright: -50px;
\t\ttop: -50px;
\t\ttransform: rotate(20deg);
\t}

\t.demo-msg {
\t\tdisplay: none !important;
\t}
\t.banner-statistics {
    position: relative;
}
.banner-text2 {
    padding-bottom: 34px;
    -webkit-transition: 0.4s;
    -o-transition: 0.4s;
    transition: 0.4s;
}
.btn-text {
    font-size: 16px;
    position: relative;
    pointer-events: visible;
    text-transform: capitalize;
}
.btn-text:before {
    bottom: -4px;
    left: 0;
    width: 100%;
    height: 2px;
    content: \"\";
    position: absolute;
    background-color: #222222;
}
.btn {
    font-size: 18px;
    color: #222222;
    line-height: 1;
}
.banner-statistics a,
.banner-statistics img{
    width: 100%;
}
\t.banner-content {
    right: 55px;
    top: 50%;
    position: absolute;
    pointer-events: none;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}
</style>
<div class=\"banner-statistics-area ptb-30\">
\t<div class=\"container ptb-30\">

\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-12\">

\t\t\t\t<div class=\"row row-20 mt-5\">


\t\t\t\t\t<div class=\"col-sm-6 mt-3\">
\t\t\t\t\t\t<figure class=\"banner-statistics mt-20\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g3\">
\t\t\t\t\t\t\t\t<img src=\"assets/imgb2.JPG\" alt=\"product banner\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"banner-content text-center\">
\t\t\t\t\t\t\t\t<h2 class=\"banner-text2\">Metal
\t\t\t\t\t\t\t\t\t<br>Education</h2>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g3\" class=\"btn btn-text\">Learn More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6 mt-3\">
\t\t\t\t\t\t<figure class=\"banner-statistics mt-20\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g5\">
\t\t\t\t\t\t\t\t<img src=\"assets/imgb1.jpg\" alt=\"product banner\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"banner-content text-center\">

\t\t\t\t\t\t\t\t<h2 class=\"banner-text2\">Conflict Free
\t\t\t\t\t\t\t\t\t<br>Diamonds</h2>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g1\" class=\"btn btn-text\">Learn more</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-sm-6 mt-3\">
\t\t\t\t\t\t<figure class=\"banner-statistics mt-20\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g4\">
\t\t\t\t\t\t\t\t<img src=\"assets/imgb3.JPG\" alt=\"product banner\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"banner-content text-center\">
\t\t\t\t\t\t\t\t<h2 class=\"banner-text2\">Gemstone<br>Education</h2>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g4\" class=\"btn btn-text\">Learn More</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"col-sm-6 mt-3\">
\t\t\t\t\t\t<figure class=\"banner-statistics mt-20\">
\t\t\t\t\t\t\t<a href=\"index.php?route=common/g2\">
\t\t\t\t\t\t\t\t<img src=\"assets/imgb4.jpg\" alt=\"product banner\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"banner-content text-center\">

\t\t\t\t\t\t\t\t<h2 class=\"banner-text2\">Diamond
\t\t\t\t\t\t\t\t\t<br>Education</h2>
\t\t\t\t\t\t\t\t<a href=\"index.php?route=common/g2\" class=\"btn btn-text\">Learn more</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</figure>


\t\t\t\t\t</div>

\t\t\t\t</div>


\t\t\t</div><br/>

\t\t</div>


\t</div>




{{ footer }}
", "catalog/view/template/common/education.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\education.twig");
    }
}
