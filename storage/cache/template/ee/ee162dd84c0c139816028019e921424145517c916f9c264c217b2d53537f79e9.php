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

/* catalog/view/template/common/blog.twig */
class __TwigTemplate_026fdc26eab48e59bfecb694419548bd9d4018488f154ad0f63da75938b3f0c9 extends Template
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
.blogbanner {
    background-color: #dcebf7;
    margin-bottom: 50px;
    padding: 30px;
    display: flex
;
    align-items: center;
}
h1, h2, h3, h4, h5, h6 {
   
    line-height: 1.7;
    
    
}
.button {
    display: block;
    width: 115px;
    height: 34px;
    background: #423c9e;
    padding-top: 5px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    /* line-height: 25px; */
    margin-top: 20px;
}
</style>
<!-- Page Title -->

<!-- /Page Title -->
<section class=\"section-padding\">
<div class=\"container\">
\t<div class=\"container blogbanner\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<a href=\"index.php?route=common/g21\">
\t\t\t\t\t<div class=\"about-thumb\">
\t\t\t\t\t\t<img src=\"assets/images/blog22.jpg\" alt=\"Birth stone\">
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-7\">

\t\t\t\t<div class=\"about-content\">
\t\t\t\t\t<a href=\"index.php?route=common/g21\">
\t\t\t\t\t\t<h3 style=\"color:#423c9e\">History of Cross Jewelry</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Cross necklaces have a long and varied history, deeply intertwined with religious, cultural, and fashion traditions. 
                        The cross is a central symbol in Christianity, representing the crucifixion of Jesus Christ and his sacrifice for humanity's salvation. 
                        
\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"button\">
\t\t\t\t\t\t\tRead More...
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<br>

\t</div>
\t<div class=\"container blogbanner\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<a href=\"index.php?route=common/g1\">
\t\t\t\t\t<div class=\"about-thumb\">
\t\t\t\t\t\t<img src=\"assets/images/blog33.png\" alt=\"Birth stone\">
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-7\">

\t\t\t\t<div class=\"about-content\">
\t\t\t\t\t<a href=\"index.php?route=common/g1\">
\t\t\t\t\t\t<h3 style=\"color:#423c9e\">Spot Jewelry According to your Birthstone</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<br>
\t\t\t\t\t<p>We are very connected with our birth month, and jewels with your birthstone are the new way to flaunt who you really are.
\t\t\t\t\t\t                    Each piece of jewelry tells the story of the wearer, and adding a touch of personalisation is now turning out to be a given for every jewelry buyer.
\t\t\t\t\t\t<a href=\"index.php?route=common/g1\" class=\"button\">
\t\t\t\t\t\t\tRead More...
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<br>
\t\t<br>

\t</div>
\t</div>
</section>

";
        // line 103
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
        return "catalog/view/template/common/blog.twig";
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
        return array (  147 => 103,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<style>
.blogbanner {
    background-color: #dcebf7;
    margin-bottom: 50px;
    padding: 30px;
    display: flex
;
    align-items: center;
}
h1, h2, h3, h4, h5, h6 {
   
    line-height: 1.7;
    
    
}
.button {
    display: block;
    width: 115px;
    height: 34px;
    background: #423c9e;
    padding-top: 5px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
    /* line-height: 25px; */
    margin-top: 20px;
}
</style>
<!-- Page Title -->

<!-- /Page Title -->
<section class=\"section-padding\">
<div class=\"container\">
\t<div class=\"container blogbanner\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<a href=\"index.php?route=common/g21\">
\t\t\t\t\t<div class=\"about-thumb\">
\t\t\t\t\t\t<img src=\"assets/images/blog22.jpg\" alt=\"Birth stone\">
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-7\">

\t\t\t\t<div class=\"about-content\">
\t\t\t\t\t<a href=\"index.php?route=common/g21\">
\t\t\t\t\t\t<h3 style=\"color:#423c9e\">History of Cross Jewelry</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<br>
\t\t\t\t\t<p>Cross necklaces have a long and varied history, deeply intertwined with religious, cultural, and fashion traditions. 
                        The cross is a central symbol in Christianity, representing the crucifixion of Jesus Christ and his sacrifice for humanity's salvation. 
                        
\t\t\t\t\t\t<a href=\"index.php?route=common/g21\" class=\"button\">
\t\t\t\t\t\t\tRead More...
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<br>

\t</div>
\t<div class=\"container blogbanner\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<a href=\"index.php?route=common/g1\">
\t\t\t\t\t<div class=\"about-thumb\">
\t\t\t\t\t\t<img src=\"assets/images/blog33.png\" alt=\"Birth stone\">
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-7\">

\t\t\t\t<div class=\"about-content\">
\t\t\t\t\t<a href=\"index.php?route=common/g1\">
\t\t\t\t\t\t<h3 style=\"color:#423c9e\">Spot Jewelry According to your Birthstone</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<br>
\t\t\t\t\t<p>We are very connected with our birth month, and jewels with your birthstone are the new way to flaunt who you really are.
\t\t\t\t\t\t                    Each piece of jewelry tells the story of the wearer, and adding a touch of personalisation is now turning out to be a given for every jewelry buyer.
\t\t\t\t\t\t<a href=\"index.php?route=common/g1\" class=\"button\">
\t\t\t\t\t\t\tRead More...
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<br>
\t\t<br>
\t\t<br>

\t</div>
\t</div>
</section>

{{ footer }}
", "catalog/view/template/common/blog.twig", "C:\\xampp\\htdocs\\zyannew\\catalog\\view\\template\\common\\blog.twig");
    }
}
